import {ModalFormWrapper} from "@/features/board/ModalFormComponent.tsx";
import ChangeTitle from "@/features/board/components/MangeTask/ChangeTitle.tsx";

import useHandleSession from "@/features/auth/useHandleSession.ts";
// import {ToastContainer, toast} from 'react-toastify';

export default function SessionPage() {

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
        signIn, setSignIn, usedEmail
    }
        = handleSession
    const opo = signIn ? 'login' : 'register'

    const extraChild =
        <>
            <p className={'guidanceLabel'}> {!signIn ? 'already a user?' : 'not a user?'}</p>
            <button type="button" onClick={() => setSignIn((!signIn))}>
                {!signIn ? 'login' : 'register'}
            </button>
        </>
    return (
        <>
            {/*<ToastContainer/>*/}
            <ModalFormWrapper title={opo} formRef={formRef} onSubmit={handleSubmit}
                              submitLabel={opo} loading={loading} extraChildren={extraChild}>
                {!signIn &&
                    <ChangeTitle value={email} onChange={setEmail} usedBoard={usedEmail} label={'email address'}
                                 additionalClass={'loginFormInput'} type={'email'}></ChangeTitle>}

                <ChangeTitle value={name} onChange={setName} usedBoard={usedName} label={'user name'}
                             additionalClass={'loginFormInput'}></ChangeTitle>

                <ChangeTitle value={password} onChange={setPassword} usedBoard={validPassword}
                             label={'password, min six characters long!'} additionalClass={'loginFormInput'}
                             type={'password'}></ChangeTitle>
            </ModalFormWrapper>

        </>)
}
