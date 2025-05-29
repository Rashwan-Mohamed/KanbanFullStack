import {useCallback, useEffect} from "react";
import {editTask} from "@/features/board/boardSlice.ts";
import {useAppDispatch} from "@/app/hooks.ts";
import type {subtask} from "@/features/board/boardSlice.ts";

interface EditTask {
    prevStatus: string;
    id: number;
    selected: string;
    status: string;
    statusId: number;
    title: string;
    description: string;
    tasks: subtask[];
    newSubIds: number[];
    order: number;
}

export const useCallDispatchTask = ({object}: { object: EditTask }) => {
    const dispatch = useAppDispatch();

    // Memoize dispatch function to prevent unnecessary re-creations
    const callDispatch = useCallback(() => {
        // console.log("Dispatching task update...");
        dispatch(editTask(object));
    }, [dispatch, object]); // Only re-create when `object` changes

    useEffect(() => {
        callDispatch(); // Effect runs only when `object.tasks` or `object.status` change
    }, [object.tasks, object.status, callDispatch]);
};