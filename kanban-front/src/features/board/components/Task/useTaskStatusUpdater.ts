import {useEffect} from "react";
import {useMutation} from "@apollo/client";
import {EDIT_TASK_STATUS} from "@/queries";
import type {EditTaskStatusMutation, EditTaskStatusMutationVariables} from "@/__generated__/types.ts";


interface Props {
    status: string;
    prevStatus: string;
    id: number;
    statusId: number;
    order: number
}

const useTaskStatusUpdater = ({status, prevStatus, id, statusId, order}: Props) => {
    const [editTSF] = useMutation<EditTaskStatusMutation, EditTaskStatusMutationVariables>(EDIT_TASK_STATUS);

    useEffect(() => {
        if (prevStatus !== status) {
            editTSF({variables: {taskId: String(id), statusID: String(statusId), order}})
                .then((res) => {
                    console.log("Task status updated:", res);
                })
                .catch((err) => {
                    console.error("Error updating task status:", err);
                });
        }
    }, [status, prevStatus, id, statusId]);

};

export default useTaskStatusUpdater;
