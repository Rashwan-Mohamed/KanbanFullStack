import type {RootState} from "@/app/store";
import Home from "./home";

import {
    BrowserRouter as Router,
    Routes,
    Route,
    Navigate,
} from "react-router-dom";
import {useAppDispatch, useAppSelector} from "./app/hooks";
import LoginPage from "./features/auth/LoginPage";
import RegisterPage from "./features/auth/RegisterPage";
import React, {useEffect, useState} from "react";
import {setAuth} from "@/features/auth/AuthenticationSlice.tsx";
import {RedirectOnAuth} from "@/generalComponents/RedirectOnAuth.tsx";
import LoadingSpinner from "@/generalComponents/loadingSpinner.tsx";

interface userLocal {
    id: number;
    username: string;
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
            dispatch(setAuth({user: user.username, auth: true, userId: user.id}));
            auth = Boolean(user.id)
        }
        setRehydrated(true); // Now we're ready to render routes
    }, []);

    if (!rehydrated) return <p><LoadingSpinner message={'Loading...'}></LoadingSpinner></p>;

    console.log(auth, 'Here is in App')
    return (
        <>   <Router>
            <Routes>

                <Route path="/" element={
                    <RedirectOnAuth>
                        <LoginPage/>
                    </RedirectOnAuth>
                }/>

                <Route path="/register" element={
                    <RedirectOnAuth>
                        <RegisterPage/>
                    </RedirectOnAuth>
                }/>
                <Route
                    path="/kanban"
                    element={auth ? <Home/> : <Navigate to="/" replace/>}
                />
                <Route path="*" element={<h1>404 Not Found</h1>}/>
            </Routes>
        </Router></>
    )
}


export default App;
