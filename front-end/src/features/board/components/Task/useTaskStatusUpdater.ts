import {useEffect} from "react";
import {useMutation} from "@apollo/client";
import {EDIT_TASK_STATUS} from "@/queries";

interface Props {
    status: string;
    prevStatus: string;
    id: number;
    statusId: number;
}

const useTaskStatusUpdater = ({status, prevStatus, id, statusId}: Props) => {
    const [editTSF, {loading, error, called}] = useMutation(EDIT_TASK_STATUS);

    useEffect(() => {
        if (prevStatus !== status) {
            editTSF({variables: {taskId: id, statusID: statusId}})
                .then((res) => {
                    console.log("Task status updated:", res);
                })
                .catch((err) => {
                    console.error("Error updating task status:", err);
                });
        }
    }, [status, prevStatus, id, statusId]);

    return {loading, error, called};
};

export default useTaskStatusUpdater;
