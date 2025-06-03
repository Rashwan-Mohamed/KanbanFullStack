import {ModalFormWrapper} from "@/features/board/ModalFormComponent.tsx";
import React, {useEffect, useState} from "react";
import {useAppDispatch, useAppSelector} from "@/app/hooks.ts";
import useHandleSession from "@/features/auth/useHandleSession.ts";
import ChangeTitle from "@/features/board/components/MangeTask/ChangeTitle.tsx";
import AssureDelete from "@/features/board/components/AssureDelete.tsx";
import {DELETE_PROFILE} from "@/GraphQL Queries/SessionQueries.ts";
import {useMutation} from "@apollo/client";
import {initialState, setAuth} from "@/features/auth/AuthenticationSlice.tsx";
import {notify} from "@/generalComponents/toastService.ts";


const Profile = ({setProfileShow, formRef}: {
        setProfileShow: React.Dispatch<React.SetStateAction<boolean>>,
        formRef: React.RefObject<HTMLFormElement | null>
    }) => {
        const [changePassword, setChangePassword] = useState(false)
        const user = useAppSelector(state => state.auth)
        const [sure, setSure] = useState(false)
        const [deleteFC, {loading: deletingLoad}]
            = useMutation(DELETE_PROFILE)
        const dispatch = useAppDispatch();
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
            usedEmail,
            newPassword
        } = useHandleSession({setProfileShow});
        useEffect(() => {
            setName(user.user);
            setEmail(user.email);
        }, []);

        const handleDelete = async () => {
            if (!user.userId) return;
            const res = await deleteFC({variables: {userId: user.userId}})
            if (res?.data?.deleteProfile) {
                dispatch(setAuth(initialState))
                notify('Account Deleted Successfully, sorry to see you leave.')
            }
        }
        const additionalContent = <>
            <div className={'userButtons'}>
                <button type='button' className={'ButtonGeneric'} onClick={() => setProfileShow(false)}>Cancel</button>
                <button type='button' className={'ButtonGeneric deleteBoard'} onClick={() => setSure(true)}>Delete
                    Account
                </button>
            </div>
        </>
        return (
            <>
                <ModalFormWrapper extraChildren={additionalContent} submitLabel={'Save Change'}
                                  onSubmit={(e) => handleSubmit(e, 'editProfile')}
                                  title={'Profile Info'}
                                  loading={loading || deletingLoad} formRef={formRef}>
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
                        <ChangeTitle value={repeatedPassword} onChange={setRepeatedPassword} usedBoard={newPassword}
                                     label={'new password'} additionalClass={'loginFormInput'}
                                     type={'password'}></ChangeTitle>
                    </>
                    }

                    {sure &&
                        <AssureDelete type={'user'} setSure={setSure} handleDelete={() => handleDelete()}
                                      selected={user.user}/>}


                    <button type='button' className={'ButtonGeneric'}
                            onClick={() => setChangePassword(!changePassword)}>Change Password
                    </button>
                </ModalFormWrapper>

            </>
        );
    }
;

export default Profile;