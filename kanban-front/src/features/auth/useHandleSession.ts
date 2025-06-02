import React, {useEffect, useRef, useState} from "react";
import {useNavigate} from "react-router-dom";
import {useMutation} from "@apollo/client";
import {CHANGE_PROFILE, LOGIN, LOGIN_GUEST, REGISTER} from "@/GraphQL Queries/SessionQueries.ts";
import {useAppDispatch, useAppSelector} from "@/app/hooks.ts";
import {setAuth} from "@/features/auth/AuthenticationSlice.tsx";

// import {UseAppContext} from "@/context.tsx";
interface PropTypes {
    setProfileShow?: React.Dispatch<React.SetStateAction<boolean>>;
}

function useHandleSession({setProfileShow}: PropTypes = {}) {

    const formRef = useRef<HTMLFormElement>(null);
    const [name, setName] = useState('');
    const [email, setEmail] = useState('');
    const [password, setPassword] = useState('');
    const [repeatedPassword, setRepeatedPassword] = useState('');
    const [usedName, setUsedName] = useState('valid');
    const [usedEmail, setUsedEmail] = useState('valid');
    const [validPassword, setValidPassword] = useState('valid');
    const [newPassword, setNewPassword] = useState('valid');
    const navigate = useNavigate();
    const [signIn, setSignIn] = useState<boolean>(true)
    const [loginFC, {loading}] = useMutation(LOGIN)
    const [registerFC, {loading: registeringLoad}] = useMutation(REGISTER)
    const [guestLogin, {loading: loggingGuest}] = useMutation(LOGIN_GUEST)
    const [changeFC, {loading: changeLoading}] = useMutation(CHANGE_PROFILE)
    const dispatch = useAppDispatch()
    const user = useAppSelector((state) => state.auth)
    // const {setMessage, notify} = UseAppContext()
    // const notify = () => toast("Logged in successfully. Welcome back!");
    const handleSubmit = (e: React.FormEvent, operation = 'default') => {
        e.preventDefault();
        const editProfile = operation === 'editProfile'
        console.log('submitAttempt')
        setUsedName('valid');
        setValidPassword('valid');
        if (!name) {
            setUsedName('required');
        }
        if (password.length < 2 && !editProfile) {
            setValidPassword('invalid, must be at least 6 characters long');
            return;
        }
        if (editProfile) {
            if (repeatedPassword.length < 6) {
                setNewPassword('invalid, must be at least 6 characters long');
                return;
            }
            changeProfile();
            return
        }
        if (signIn) {
            handleLogin()
        } else {
            handleRegister()
        }
    }
    useEffect(() => {
        setUsedName('valid');
        setValidPassword('valid');
        setUsedEmail('valid');
    }, [signIn])
    const handleLogin = async () => {
        try {
            const response = await loginFC({
                variables: {
                    userCredentials: {
                        username: name,
                        password
                    }
                }
            });
            const data = response?.data?.login;
            if (!data) {
                console.error('server error: no data returned from login mutation')
                return
            }
            if (data?.user) {
                const user = data.user;
                newSession(user.username, user.id, data.user.email, false, (user.last_updated))
                // setMessage(() => `Welcome Back ${user.username}!`)
                // notify();
            } else {
                // console.warn('Login failed: no user returned');
                const message = data.message ?? 'invalid credentials';
                if (message === 'INVALID_PASSWORD') {
                    setValidPassword('invalid password');
                } else if (message === 'USER_NOT_FOUND') {
                    setUsedName('no account associated with that user name!');
                }
            }
        } catch (err) {
            console.error('Unexpected login error:', err);
            alert("Something went wrong during login. Please try again later.");
        }
    };
    const handleRegister = async () => {
        try {
            const response = await registerFC({
                variables: {
                    username: name,
                    email,
                    password
                }
            });
            const data = response.data?.register;
            if (!data) {
                console.error('server error: no data returned from login mutation')
                return
            }
            if (data.successful && data.userId) {
                const user = data.userId;
                newSession(name, user)
            } else {
                // const [exi]
                if (data.existingEmail) {
                    setUsedEmail('this email is already associated with an account. Please try another one.');
                }
                if (data.existingUser) {
                    setUsedName('this user name is already associated with an account. Please try another one.');
                }
                // console.warn('Login failed: no user returned');
                // const message = data.message ?? 'invalid credentials';
            }
        } catch (err) {
            console.error('Unexpected login error:', err);
            alert("Something went wrong during login. Please try again later.");
        }
    };
    const handleGuest = async () => {
        const response = await guestLogin()
        const id = response.data?.loginGuest
        if (id) {
            newSession('Guest', id, '_', true)
        }
    }
    const changeProfile = async () => {

        const rechange = await changeFC({
            variables: {
                newName: name,
                newEmail: email,
                newPassword: repeatedPassword,
                oldPassword: password
            }
        })
        console.log(rechange)
        if (rechange?.data?.changeProfile) {
            const {message, successful} = rechange.data.changeProfile;
            if (successful && setProfileShow) {
                dispatch(setAuth({
                    ...user,
                    user: name,
                    email: email,
                }));
                setProfileShow(false)
            } else {
                if (message === 'PASSWORD DOES NOT MATCH') {
                    setValidPassword('incorrect password!');
                }
            }
        } else {
            console.error('failed to update')
        }
    }
    const newSession = (username: string, id: number, user_email = email, isGuest = false, last_updated = String(Date.now())) => {
        dispatch(setAuth({
            user: username,
            auth: true,
            userId: id,
            isGuest,
            email: user_email,
            last_updated: (last_updated)
        }));
        // notify()
        localStorage.setItem('user', JSON.stringify({
            user: username,
            auth: true,
            userId: id,
            isGuest
        }))
        navigate('/kanban');
    }
    const generalLoad = loading || registeringLoad || loggingGuest || changeLoading
    return {
        handleSubmit,
        name,
        setName,
        email,
        setEmail
        , password,
        setPassword,
        repeatedPassword,
        setRepeatedPassword,
        usedName,
        setUsedName,
        validPassword
        , setValidPassword,
        formRef,
        loading: generalLoad,
        navigate,
        signIn, setSignIn,
        usedEmail, handleGuest,
        newPassword
    }
}

export default useHandleSession;