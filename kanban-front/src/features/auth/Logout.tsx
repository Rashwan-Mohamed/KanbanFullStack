import {client} from "@/main.tsx";
import {loggedOut} from "@/features/auth/AuthenticationSlice.tsx";
import {useNavigate} from "react-router-dom";
import {useAppDispatch, useAppSelector} from "@/app/hooks.ts";
import {useMutation} from "@apollo/client";
import {LOGOUT, LOGOUT_GUEST} from "@/GraphQL Queries/SessionQueries.ts";
import LoadingSpinner from "@/generalComponents/loadingSpinner.tsx";
import {setBoards} from "@/features/board/boardSlice.ts";
import {UseAppContext} from "@/context.tsx";

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
        setSelected('')
        setTimeout(() => navigate('/'), 0);
        // or next tick console.log("Logged out completely.");
    }

    if (loading || loggingGuestOut) return <p className={'LoggingOutMessage'}><LoadingSpinner
        message={'Logging Out ...'}></LoadingSpinner>
    </p>
    return (
        <>
            <button className={'addNewTask logoutButton'} onClick={handleLogOut}>Log out</button>
        </>
    );
};

export default Logout;