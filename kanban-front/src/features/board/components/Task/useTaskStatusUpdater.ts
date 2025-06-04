import {useEffect} from "react";
import {useMutation} from "@apollo/client";
import {EDIT_TASK_STATUS} from "@/GraphQL Queries/TasksQueries.ts";


interface Props {
    status: string;
    prevStatus: string;
    id: number;
    statusId: number;
    order: number
}

const useTaskStatusUpdater = ({status, prevStatus, id, statusId, order}: Props) => {
    const [editTSF] = useMutation(EDIT_TASK_STATUS);
    console.log('called')
    useEffect(() => {
        if (prevStatus !== status && order !== -1) {
            editTSF({variables: {taskId: (id), statusID: (statusId), order}})
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
