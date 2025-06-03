import React, {createContext, useContext, useState, useEffect, useMemo} from "react";
import type {RootState} from "@/app/store"; // Adjust the path if needed
// to Adjust the path if needed
import type {board} from "./features/board/boardSlice";
import {useAppSelector} from "@/app/hooks.ts";
import {Bounce, ToastContainer} from "react-toastify";

// Define the AppContext Type
interface AppContextType {
    selected: string;
    setSelected: React.Dispatch<React.SetStateAction<string>>;
    dark: boolean;
    setDark: React.Dispatch<React.SetStateAction<boolean>>;
    board: board; // Replace 'any' with the correct board type
    hideSide: boolean;
    setHideSide: React.Dispatch<React.SetStateAction<boolean>>;
    tab: boolean;
}

// Create context with default value as null
const AppContext = createContext<AppContextType | null>(null);

// Define Props Interface for JSX Children
interface AppContextProviderProps {
    children: React.ReactNode;
}

// Regular Function Component
function AppContextProvider({children}: AppContextProviderProps): React.JSX.Element {
    const [dark, setDark] = useState<boolean>(true);
    const [tab, setTab] = useState<boolean>(false);
    const boards = useAppSelector((state: RootState) => state.boards);
    const [selected, setSelected] = useState<string>("");
    // const notify = (message: string) => toast(message);


    // Set the initially selected board once boards are loaded
    useEffect(() => {
        if (boards.length === 0) return;
        const fromStorage = localStorage.getItem("selectedBoard");
        const fallback = boards[0].name;

        // Use fallback if the stored value is null or not found in the current boards
        const validBoard = boards.find(b => b.name === fromStorage)?.name || fallback;

        setSelected(validBoard); //
    }, [boards]);


// Keep localStorage in sync
    useEffect(() => {
        if (selected) {
            localStorage.setItem("selectedBoard", selected);
        }
    }, [selected]);

    const checkTab = () => {
        setTab(window.innerWidth <= 768);
    };

    useEffect(() => {
        checkTab();
        window.addEventListener("resize", checkTab);
        return () => window.removeEventListener("resize", checkTab);
    }, []);


    const [hideSide, setHideSide] = useState<boolean>(false);
    const board = useMemo(() => boards.find((item) => item.name === selected), [boards, selected]) ?? boards[0]


    return (
        <AppContext.Provider
            value={{
                selected,
                setSelected,
                dark,
                setDark,
                board,
                hideSide,
                setHideSide,
                tab
            }}
        >
            <ToastContainer position="top-right"
                            autoClose={5000}
                            newestOnTop={false}
                            closeOnClick={true}
                            rtl={false}
                            hideProgressBar={false}
                            pauseOnFocusLoss
                            draggable
                            theme="dark"
                            transition={Bounce}
            ></ToastContainer>
            {children}
        </AppContext.Provider>
    );
}

export const UseAppContext = (): AppContextType => {
    const context = useContext(AppContext);

    if (!context) {
        throw new Error("UseAppContext must be used within an AppContextProvider");
    }
    return context;
};


export {AppContext, AppContextProvider};