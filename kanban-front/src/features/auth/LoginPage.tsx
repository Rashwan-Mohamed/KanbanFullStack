import {ModalFormWrapper} from "@/features/board/ModalFormComponent.tsx";
import React, {useRef, useState} from "react";
import ChangeTitle from "@/features/board/components/MangeTask/ChangeTitle.tsx";
import {useNavigate} from "react-router-dom";


export default function LoginPage() {
    const formRef = useRef<HTMLFormElement>(null);
    const [name, setName] = useState('');
    const [password, setPassword] = useState('');
    const [usedName, setUsedName] = useState('valid');
    const [validPassword, setValidPassword] = useState('valid');
    const navigate = useNavigate();
    const handleSubmit = (e: React.FormEvent) => {
        console.log('Submitting...');
        e.preventDefault();
        setUsedName('valid');
        setValidPassword('valid');
        if (password.length < 6) {
            setValidPassword('invalid');
        }
    }
    return (
        <>
            <ModalFormWrapper title={'Login'} formRef={formRef} onSubmit={handleSubmit}
                              submitLabel={'Login'}>

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
