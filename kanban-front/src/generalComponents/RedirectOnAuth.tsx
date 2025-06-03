import React from "react";
import {Navigate} from "react-router-dom";
import type {RootState} from "@/app/store.ts";
import {useAppSelector} from "@/app/hooks.ts";

export function RedirectOnAuth({children}: { children: React.ReactNode }) {
    const auth = useAppSelector((state: RootState) => state.auth.auth);
        return auth ?
            <Navigate to="/kanban" replace/>
            : children;
}
