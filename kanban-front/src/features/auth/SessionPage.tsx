import {ModalFormWrapper} from "@/features/board/ModalFormComponent.tsx";
import ChangeTitle from "@/features/board/components/MangeTask/ChangeTitle.tsx";

import useHandleSession from "@/features/auth/useHandleSession.ts";
import React, {useEffect} from "react";
import useClickOutside from "@/features/board/components/hooks/useClickOutside.ts";

export default function SessionPage({registerGuest, setRegisterGuest}: {
    registerGuest?: boolean,
    setRegisterGuest?: React.Dispatch<React.SetStateAction<boolean>>
}) {

    const handleSession = useHandleSession()
    const {
        handleSubmit,
        name,
        setName,
        email,
        setEmail
        , password,
        setPassword,
        usedName,
        validPassword,
        formRef,
        loading,
        signIn,
        setSignIn
        , usedEmail,
        handleGuest,
        user
    }
        = handleSession
    const opo = signIn ? 'login' : 'register'
    useEffect(() => {
        if (registerGuest) {
            setSignIn(false);
        }
    }, []);
    // const closeHandler = setRegisterGuest ? setRegisterGuest(false) : null
    useClickOutside({
        active: registerGuest ?? false,
        elements: [formRef],
        handler: () => {
            if (typeof setRegisterGuest === "function") {
                setRegisterGuest(false);
            }
        },
    });

    const extraChild =
        <>
            <p className={'guidanceLabel'}> {!signIn ? 'already a user?' : 'not a user?'}</p>
            <button className='ButtonGeneric' type="button" onClick={() => setSignIn((!signIn))}>
                {!signIn ? 'login' : 'register'}
            </button>
            {!(user?.auth && user?.isGuest) &&
                <button className='ButtonGeneric' type="button" onClick={() => handleGuest()}>
                    Continue As Guest
                </button>
            }

        </>
    return (
        <>
            {/*<ToastContainer/>*/}
            <ModalFormWrapper title={opo} formRef={formRef}
                              onSubmit={(e) => handleSubmit(e, registerGuest ? 'registerGuest' : '')}
                              submitLabel={opo} loading={loading} extraChildren={extraChild}>
                {!signIn &&
                    <ChangeTitle value={email} onChange={setEmail} usedBoard={usedEmail} label={'email address'}
                                 additionalClass={'loginFormInput'} type={'email'}></ChangeTitle>}

                <ChangeTitle value={name} onChange={setName} usedBoard={usedName} label={'user name'}
                             additionalClass={'loginFormInput'}></ChangeTitle>

                <ChangeTitle value={password} onChange={setPassword} usedBoard={validPassword}
                             label={`password${!signIn?',min six characters long!':''}`} additionalClass={'loginFormInput'}
                             type={'password'}></ChangeTitle>
            </ModalFormWrapper>

        </>)
}
