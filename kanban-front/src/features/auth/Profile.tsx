import {ModalFormWrapper} from "@/features/board/ModalFormComponent.tsx";
import React, {useEffect, useRef, useState} from "react";
import {useAppSelector} from "@/app/hooks.ts";
import useHandleSession from "@/features/auth/useHandleSession.ts";
import ChangeTitle from "@/features/board/components/MangeTask/ChangeTitle.tsx";
import useClickOutside from "@/features/board/components/hooks/useClickOutside.ts";


const Profile = ({setProfileShow}: { setProfileShow: React.Dispatch<React.SetStateAction<boolean>> }) => {
    const [changePassword, setChangePassword] = useState(false)
    const formRef = useRef<HTMLFormElement>(null)
    const user = useAppSelector(state => state.auth)

    useClickOutside({elements: [formRef], handler: () => setProfileShow(false), active: true});


    const {
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
        validPassword,
        loading,
        setEditProfile,
        usedEmail
    } = useHandleSession({setProfileShow});
    useEffect(() => {
        setName(user.user);
        setEmail(user.email);
    }, []);
    useEffect(() => {
        setEditProfile(true)
    }, [setEditProfile]);
    const additionalContent = <>
        <button type='button' className={'ButtonGeneric'} onClick={() => setProfileShow(false)}>Cancel</button>
    </>
    return (
        <>
            <ModalFormWrapper extraChildren={additionalContent} submitLabel={'Save Change'}
                              onSubmit={handleSubmit}
                              title={'Profile Info'}
                              formRef={formRef} loading={loading}>
                <ChangeTitle value={name} onChange={setName} usedBoard={usedName} label={'user name'}
                             additionalClass={'loginFormInput'}></ChangeTitle>
                <ChangeTitle value={email} onChange={setEmail} usedBoard={usedEmail}
                             label={'email address'}
                             additionalClass={'loginFormInput'} type={'email'}></ChangeTitle>
                <ChangeTitle readonly={true} value={user.last_updated ?? ''} usedBoard={usedEmail}
                             label={'last updated'}
                             additionalClass={'loginFormInput'} type={'email'}></ChangeTitle>
                {changePassword && <>
                    <ChangeTitle value={password} onChange={setPassword} usedBoard={validPassword}
                                 label={'old password'} additionalClass={'loginFormInput'}
                                 type={'password'}></ChangeTitle>
                    <ChangeTitle value={repeatedPassword} onChange={setRepeatedPassword} usedBoard={validPassword}
                                 label={'new password'} additionalClass={'loginFormInput'}
                                 type={'password'}></ChangeTitle>
                </>
                }


                <button type='button' className={'ButtonGeneric'}
                        onClick={() => setChangePassword(!changePassword)}>Change Password
                </button>
            </ModalFormWrapper>

        </>
    );
};

export default Profile;