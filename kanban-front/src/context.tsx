import React, {createContext, useContext, useState, useEffect} from "react";
import {useSelector} from "react-redux";
import type {RootState} from "@/app/store"; // Adjust the path if needed
// to Adjust the path if needed
import type {board} from "./features/board/boardSlice";
import {useGetBoard} from "@/features/board/components/hooks/useGetBoard.ts";

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
    const boards = useSelector((state: RootState) => state.boards);

    const [selected, setSelected] = useState<string>(() => {
        return boards.length > 0 && boards[0].name ? boards[0].name : "noBoard";
    });

    const checkTab = () => {
        setTab(window.innerWidth <= 768);
    };

    useEffect(() => {
        checkTab();
        window.addEventListener("resize", checkTab);
        return () => window.removeEventListener("resize", checkTab);
    }, []);

    const [hideSide, setHideSide] = useState<boolean>(false);
    const board = useGetBoard()// Prevents undefined issues

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
                tab,
            }}
        >
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