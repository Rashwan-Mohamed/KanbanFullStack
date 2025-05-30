import {ModalFormWrapper} from "@/features/board/ModalFormComponent.tsx";
import React, {useRef, useState} from "react";
import ChangeTitle from "@/features/board/components/MangeTask/ChangeTitle.tsx";
import {useNavigate} from "react-router-dom";
import {useMutation} from "@apollo/client";
import {LOGIN} from "@/GraphQL Queries/ControlQueries.ts";
import {useAppDispatch} from "@/app/hooks.ts";
import {setAuth} from "@/features/auth/AuthenticationSlice.tsx";
// import {ToastContainer, toast} from 'react-toastify';

export default function LoginPage() {
    const formRef = useRef<HTMLFormElement>(null);
    const [name, setName] = useState('');
    const [password, setPassword] = useState('');
    const [usedName, setUsedName] = useState('valid');
    const [validPassword, setValidPassword] = useState('valid');
    const navigate = useNavigate();
    const [loginFC, {loading}] = useMutation(LOGIN)

    const dispatch = useAppDispatch()
    // const notify = () => toast("Logged in successfully. Welcome back!");
    const handleSubmit = async (e: React.FormEvent) => {
        e.preventDefault();
        setUsedName('valid');
        setValidPassword('valid');

        if (password.length < 2) {
            setValidPassword('invalid');
            return;
        }

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
            if (response?.data?.login?.user) {
                const user = response.data.login.user;

                dispatch(setAuth({
                    user: user.username,
                    auth: true,
                    userId: user.id
                }));
                // notify()
                localStorage.setItem('user', JSON.stringify(user))
                navigate('/kanban');
            } else {
                // 👇 handle known auth failure (e.g. invalid credentials)
                console.warn('Login failed: no user returned');
                setUsedName('invalid');
                setValidPassword('invalid');
            }
        } catch (err) {
            // 👇 handle unexpected errors (e.g. network issues)
            console.error('Unexpected login error:', err);
            alert("Something went wrong during login. Please try again later.");
        }
    };
    return (
        <>
            {/*<ToastContainer/>*/}
            <ModalFormWrapper title={'Login'} formRef={formRef} onSubmit={handleSubmit}
                              submitLabel={'Login'} loading={loading}>

                <ChangeTitle value={name} onChange={setName} usedBoard={usedName} label={'user name'}
                             additionalClass={'loginFormInput'}></ChangeTitle>
                <ChangeTitle value={password} onChange={setPassword} usedBoard={validPassword}
                             label={'password'} additionalClass={'loginFormInput'}></ChangeTitle>

                <button onClick={() => navigate('register')}>
                    Register
                </button>
            </ModalFormWrapper>
        </>)
}
