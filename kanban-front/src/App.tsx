import type {RootState} from "@/app/store";
import {AppContextProvider} from "./context";
import Home from "./home";

import {
    BrowserRouter as Router,
    Routes,
    Route,
    Navigate,
} from "react-router-dom";
import {useAppSelector} from "./app/hooks";
import LoginPage from "./features/auth/LoginPage";
import RegisterPage from "./features/auth/RegisterPage";
import React from "react";

function App(): React.JSX.Element {
    const user = useAppSelector((state: RootState) => state.auth.user);

    return (
        <AppContextProvider>
            {<Router>
                <Routes>
                    <Route path="/" element={<LoginPage/>}/>
                    <Route path="/register" element={<RegisterPage/>}/>
                    <Route
                        path="/kanban"
                        element={user ? <Home/> : <Navigate to="/" replace/>}
                    />
                    <Route path="*" element={<h1>404 Not Found</h1>}/>
                </Routes>
            </Router>}
        </AppContextProvider>
    );
};

export default App;
