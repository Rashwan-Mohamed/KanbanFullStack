import {client} from "@/main.tsx";
import {loggedOut} from "@/features/auth/AuthenticationSlice.tsx";
import {useNavigate} from "react-router-dom";
import {useAppDispatch} from "@/app/hooks.ts";
import {useMutation} from "@apollo/client";
import {LOGOUT} from "@/GraphQL Queries/SessionQueries.ts";

const Logout = () => {
    const [logout] = useMutation(LOGOUT)
    const dispatch = useAppDispatch()
    const navigate = useNavigate()

    const handleLogOut = async () => {
        await logout(); // Inform backend
        await client.clearStore();
        localStorage.removeItem('user');
        dispatch(loggedOut())
        navigate("/"); // Safe because navigate was passed in
        console.log("Logged out completely.");
    }
    return (
        <>
            <button className={'addNewTask logoutButton'} onClick={handleLogOut}>Log out</button>
        </>
    );
};

export default Logout;