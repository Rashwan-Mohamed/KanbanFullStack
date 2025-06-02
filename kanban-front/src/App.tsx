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
import {initialState, setAuth} from "@/features/auth/AuthenticationSlice.tsx";
import {RedirectOnAuth} from "@/generalComponents/RedirectOnAuth.tsx";
import LoadingSpinner from "@/generalComponents/loadingSpinner.tsx";
import {useQuery} from "@apollo/client";
import {GET_CURRENT_USER} from "@/GraphQL Queries/SessionQueries.ts";

function App(): React.JSX.Element {
    const [rehydrated, setRehydrated] = useState(false);
    const dispatch = useAppDispatch();
    const auth = useAppSelector((state) => state.auth);

    const {loading, error, data,refetch} = useQuery(GET_CURRENT_USER, {
        pollInterval: 600000,
        fetchPolicy: 'network-only',
    });

    // Optional: Force refetch when auth changes
    useEffect(() => {
        refetch();
    }, [auth, refetch]);

    useEffect(() => {
        if (loading) return;

        if (error) {
            console.error("Error fetching session:", error);
            dispatch(setAuth(initialState));
            setRehydrated(true);
            return;
        }

        if (data?.getCurrentUser?.user) {
            const user = data.getCurrentUser.user;
            dispatch(setAuth({
                user: user.username,
                auth: true,
                userId: user.id,
                isGuest: user?.isGuest ?? false,
                last_updated: user.last_updated,
                email: user.email,
            }));
        } else {
            dispatch(setAuth(initialState));
        }

        setRehydrated(true);
    }, [data, loading, error, dispatch]);

    if (!rehydrated) return <p><LoadingSpinner message={'Loading...'}/></p>
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
                    element={auth.auth ? <Home/> : <Navigate to="/" replace/>}
                />
                <Route path="*" element={<h1 className={'notFound'}>404 Not Found</h1>}/>
            </Routes>
        </Router></>
    )
}


export default App;
