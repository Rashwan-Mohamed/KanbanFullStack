import Home from "./home";

import {
    BrowserRouter as Router,
    Routes,
    Route,
    Navigate,
} from "react-router-dom";
import {useAppDispatch, useAppSelector} from "./app/hooks";
import SessionPage from "./features/auth/SessionPage.tsx";
import React, {useEffect, useState} from "react";
import {setAuth} from "@/features/auth/AuthenticationSlice.tsx";
import {RedirectOnAuth} from "@/generalComponents/RedirectOnAuth.tsx";
import LoadingSpinner from "@/generalComponents/loadingSpinner.tsx";
import {useLazyQuery} from "@apollo/client";
import {GET_CURRENT_USER} from "@/GraphQL Queries/SessionQueries.ts";


function App(): React.JSX.Element {
    const [rehydrated, setRehydrated] = useState(false);
    const [getUser, {loading, error, data}] = useLazyQuery(GET_CURRENT_USER)

    const dispatch = useAppDispatch();
    const auth = useAppSelector((state) => state.auth.auth);

    // The Goal is when there is an active session in the server, sync it with the current session;
    // thus I think there is no need to check the localStorage for the user
    // and for some reason the actual user in state doesn't match the one in the backend terminate the session immediately
    useEffect(() => {
        getUser().catch(console.log);
    }, []);
    useEffect(() => {
        if (data?.getCurrentUser?.user && !loading && !error) {
            const user = data.getCurrentUser.user;
            dispatch(setAuth({
                user: user.username,
                auth: true,
                userId: user.id,
                isGuest: user?.isGuest ?? false
            }));
        }
        if (!loading && (!data || !data.getCurrentUser?.user)) {
            dispatch(setAuth({auth: false, user: '', userId: null, isGuest: false}));
        }
        if (!loading) setRehydrated(true);
    }, [data, loading, error]);

    if (!rehydrated) return <p><LoadingSpinner message={'Loading...'}></LoadingSpinner></p>;

    return (
        <>   <Router>
            <Routes>

                <Route path="/" element={
                    <RedirectOnAuth>
                        <SessionPage/>
                    </RedirectOnAuth>
                }/>

                <Route
                    path="/kanban"
                    element={auth ? <Home/> : <Navigate to="/" replace/>}
                />
                <Route path="*" element={<h1 className={'notFound'}>404 Not Found</h1>}/>
            </Routes>
        </Router></>
    )
}


export default App;
