import React from 'react';
import type {subtask} from "@/features/board/boardSlice";
import PropTypes from "prop-types";
import {ValidationState} from "@/features/board/components/EditTask/useEditTask";

interface propTypes {
    subTasks: subtask[],
    setSubTasks: React.Dispatch<React.SetStateAction<subtask[]>>,
    used: ValidationState[],
    setUsed: React.Dispatch<React.SetStateAction<ValidationState[]>>
}

const SubTaskContainer: React.FC<propTypes> = ({subTasks, setSubTasks, used, setUsed}) => {
    return (
        <div className='subtasksContainer'>
            <label htmlFor='Subtasks'>Subtasks</label>
            {subTasks.map((item, term) => {
                return (
                    <div key={term}>
                        <label className='spanerContainer'>
                            {' '}
                            <input
                                style={{
                                    border: used[term] !== 'trial' ? '2px solid #EA5555' : '',
                                }}
                                onChange={(e) => {
                                    setSubTasks((old) =>
                                        old.map((item, ind) =>
                                            ind === term ? {...item, title: e.target.value} : item
                                        )
                                    );
                                }}
                                value={item.title}
                                type='text'
                                id='Columns'
                            />
                            {used[term] !== 'trial' && (
                                <span className='dangerSpan'>{used[term]}</span>
                            )}
                        </label>

                        {term !== 0 && (
                            <span
                                onClick={() => {
                                    setSubTasks(() => {
                                        return subTasks.filter((cul, ind) => ind !== term)
                                    })
                                    setUsed((sero) => {
                                        return used.filter((cul, ind) => ind !== term)
                                    })
                                }}
                                className='deleteColIn'
                            >
                    <svg
                        width='15'
                        height='15'
                        xmlns='http://www.w3.org/2000/svg'
                    >
                      <g fill='#828FA3' fillRule='evenodd'>
                        <path d='m12.728 0 2.122 2.122L2.122 14.85 0 12.728z'/>
                        <path d='M0 2.122 2.122 0 14.85 12.728l-2.122 2.122z'/>
                      </g>
                    </svg>
                  </span>
                        )}
                    </div>
                )
            })}
        </div>

    );
};

export default SubTaskContainer;