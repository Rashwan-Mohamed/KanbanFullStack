import React from 'react';
import type {subtask} from "@/features/board/boardSlice";
import {useMutation} from "@apollo/client";
import {CHANGE_SUBTASK} from "@/queries";

interface propTypes {
    subtasks: subtask[]
    setSubTasks: React.Dispatch<React.SetStateAction<subtask[]>>
}

const ViewSubTasks = ({subtasks, setSubTasks}: propTypes) => {
    const len = subtasks.length
    const com = subtasks.filter(item => item.isCompleted).length;
    const [changeSTF] = useMutation(CHANGE_SUBTASK)

    return (
        <ul>
            <h5>
                Subtasks ({com || 0} of {len})
            </h5>
            {subtasks.map((sub, index) => {
                const {title, isCompleted, id} = sub
                return (
                    <li
                        onClick={() => {
                            setSubTasks((old) => {
                                const newRr = old.map((item) => {
                                    return {...item}
                                })
                                newRr[index].isCompleted = !newRr[index].isCompleted

                                return newRr
                            })
                            // here I will dispatch that to GQL
                            changeSTF({variables: {SubTaskID: id}}).then((response) => {
                                console.log("subtask edited :", response);
                            })
                                .catch((error) => {
                                    console.error("Failed to edit subTask:", error);
                                });

                        }}
                        key={id ?? index}
                    >
                        <label htmlFor='checkTask'>
                            <input
                                type='checkbox'
                                checked={isCompleted}
                                onChange={() => {
                                }}
                                name='checkTask'
                                id='checkTask'
                            />
                        </label>
                        <span className={isCompleted ? 'completedSubT' : ''}>
                    {title}
                  </span>
                    </li>
                )
            })}
        </ul>
    );
};

export default ViewSubTasks;