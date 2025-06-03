import {client} from "@/main.tsx";
import {loggedOut} from "@/features/auth/AuthenticationSlice.tsx";
import {useNavigate} from "react-router-dom";
import {useAppDispatch, useAppSelector} from "@/app/hooks.ts";
import {useMutation} from "@apollo/client";
import {LOGOUT, LOGOUT_GUEST} from "@/GraphQL Queries/SessionQueries.ts";
import LoadingSpinner from "@/generalComponents/loadingSpinner.tsx";
import {setBoards} from "@/features/board/boardSlice.ts";
import {UseAppContext} from "@/context.tsx";
import {notifySuccess} from "@/generalComponents/toastService.ts";

const Logout = () => {
    const {isGuest} = useAppSelector(state => state.auth)
    const [logout, {loading}] = useMutation(LOGOUT)
    const [logoutGuest, {loading: loggingGuestOut}] = useMutation(LOGOUT_GUEST)
    const dispatch = useAppDispatch()
    const navigate = useNavigate()
    const {setSelected} = UseAppContext()
    const loggingOutFun = isGuest ? logoutGuest : logout
    const handleLogOut = async () => {
        await loggingOutFun(); // Inform backend
        await client.clearStore();
        localStorage.removeItem('user');
        dispatch(loggedOut())
        dispatch(setBoards([]))
        notifySuccess(`Logged out completely.`)
        setSelected('')
        setTimeout(() => navigate('/'), 0);
    }

    if (loading || loggingGuestOut) return <p className={'LoggingOutMessage'}><LoadingSpinner
        message={'Logging Out ...'}></LoadingSpinner>
    </p>
    return (
        <>
            <button onClick={handleLogOut}>Log out</button>
        </>
    );
};

export default Logout;