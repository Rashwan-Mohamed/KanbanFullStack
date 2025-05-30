import {client} from "@/main.tsx";
import {loggedOut} from "@/features/auth/AuthenticationSlice.tsx";
import {useNavigate} from "react-router-dom";
import {useAppDispatch} from "@/app/hooks.ts";
import {useMutation} from "@apollo/client";
import {LOGOUT} from "@/GraphQL Queries/SessionQueries.ts";
import LoadingSpinner from "@/generalComponents/loadingSpinner.tsx";
import {setBoards} from "@/features/board/boardSlice.ts";
import { UseAppContext} from "@/context.tsx";

const Logout = () => {
    const [logout, {loading}] = useMutation(LOGOUT)
    const dispatch = useAppDispatch()
    const navigate = useNavigate()
    const {setSelected} = UseAppContext()
    const handleLogOut = async () => {
        await logout(); // Inform backend
        await client.clearStore();
        localStorage.removeItem('user');
        dispatch(loggedOut())
        dispatch(setBoards([]))
        setSelected('')
        setTimeout(() => navigate('/'), 0);
        // or next tick console.log("Logged out completely.");
    }

    if (loading) return <p className={'LoggingOutMessage'}><LoadingSpinner message={'Logging Out ...'}></LoadingSpinner>
    </p>
    return (
        <>
            <button className={'addNewTask logoutButton'} onClick={handleLogOut}>Log out</button>
        </>
    );
};

export default Logout;