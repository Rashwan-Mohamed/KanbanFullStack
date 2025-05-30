import React, {useRef, useState} from "react";
import {useNavigate} from "react-router-dom";
import {useMutation} from "@apollo/client";
import {LOGIN, REGISTER} from "@/GraphQL Queries/SessionQueries.ts";
import {useAppDispatch} from "@/app/hooks.ts";
import {setAuth} from "@/features/auth/AuthenticationSlice.tsx";

function useHandleSession() {
    const formRef = useRef<HTMLFormElement>(null);
    const [name, setName] = useState('');
    const [email, setEmail] = useState('');
    const [password, setPassword] = useState('');
    const [repeatedPassword, setRepeatedPassword] = useState('');
    const [usedName, setUsedName] = useState('valid');
    const [usedEmail, setUsedEmail] = useState('valid');
    const [validPassword, setValidPassword] = useState('valid');
    const navigate = useNavigate();
    const [signIn, setSignIn] = useState<boolean>(true)
    const [loginFC, {loading}] = useMutation(LOGIN)
    const [registerFC, {loading: registeringLoad}] = useMutation(REGISTER)
    const dispatch = useAppDispatch()
    // const notify = () => toast("Logged in successfully. Welcome back!");
    const handleSubmit = (e: React.FormEvent) => {
        e.preventDefault();
        console.log('submitAttempt')
        setUsedName('valid');
        setValidPassword('valid');
        if (!name) {
            setUsedName('required');
        }
        if (password.length < 2) {
            setValidPassword('invalid, must be at least 6 characters long');
            return;
        }
        if (signIn) {
            handleLogin()
        } else {
            handleRegister()
        }
    }

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
            // console.log()
            const data = response?.data?.login;
            if (!data) {
                console.error('server error: no data returned from login mutation')
                return
            }
            if (data?.user) {
                const user = data.user;
                newSession(user.username, user.id)
            } else {
                // console.warn('Login failed: no user returned');
                console.log(data, loading)
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
            // console.log()
            const data = response.data?.register;
            console.log(data)
            if (!data || !data.userId || !data?.successful) {
                console.error('server error: no data returned from login mutation')
                return
            }
            if (data?.successful) {
                const user = data.userId;
                newSession(name, user)
            } else {
                // console.warn('Login failed: no user returned');
                console.log(data, loading)
                // const message = data.message ?? 'invalid credentials';
            }
        } catch (err) {
            console.error('Unexpected login error:', err);
            alert("Something went wrong during login. Please try again later.");
        }
    };
    const newSession = (username: string, id: number) => {
        dispatch(setAuth({
            user: username,
            auth: true,
            userId: id
        }));
        // notify()
        localStorage.setItem('user', JSON.stringify(username))
        navigate('/kanban');
    }

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
        , setValidPassword, formRef, loading: loading || registeringLoad,
        navigate, signIn, setSignIn, usedEmail
    }
}

export default useHandleSession;