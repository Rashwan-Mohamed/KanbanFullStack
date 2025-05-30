import type {RootState} from "@/app/store";
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

interface userLocal {
    userId: number;
    user: string;
    email: string
}

function App(): React.JSX.Element {
    const [rehydrated, setRehydrated] = useState(false);
    // first check if there is a user, if not check the localStorage
    const dispatch = useAppDispatch();
    let auth = useAppSelector((state: RootState) => state.auth.auth)
    useEffect(() => {
        const hasUser = localStorage.getItem("user");
        if (hasUser && !auth) {
            const user: userLocal = JSON.parse(hasUser);
            dispatch(setAuth({user: user.user, auth: true, userId: user.userId}));
            auth = Boolean(user.userId)
        }
        setRehydrated(true); // Now we're ready to render routes
    }, []);

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
