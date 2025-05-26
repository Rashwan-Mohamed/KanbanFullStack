import React from 'react';
import type {column, task} from "@/features/board/boardSlice";

interface propTypes {
    columns: column[]
    dark: boolean
    setTaskShow: React.Dispatch<React.SetStateAction<boolean>>
    setSelectedTask: React.Dispatch<React.SetStateAction<task | null>>
}

const DisplayColumns: React.FC<propTypes> = ({columns, dark, setTaskShow, setSelectedTask}) => {
    return (
        <>
            {columns.map((item, index) => {
                const {id, name, tasks} = item
                return (
                    <article className='boardColumn' key={id}>
              <span>
                <div style={{backgroundColor: `var(--circle${index})`}}></div>
                <p>
                  {name} ({tasks.length})
                </p>
              </span>
                        <ul
                            className={`${tasks.length < 1 ? 'emptyColumn' : 'undefined'}`}
                        >
                            {tasks.map((task) => {
                                const {id, title, subtasks} = task
                                let len = subtasks.length
                                const com = subtasks.filter(sub => sub.isCompleted).length;
                                return (
                                    <li
                                        style={{
                                            backgroundColor: !dark ? 'white' : '',
                                            color: !dark ? 'black' : '',
                                            border: !dark ? '1px solid var(--second)' : '',
                                        }}
                                        onClick={() => {
                                            setTaskShow(true)
                                            setSelectedTask(task)
                                        }}
                                        key={id}
                                    >
                                        {title}
                                        <p>{`${com} of ${len} subtasks`}</p>
                                    </li>
                                )
                            })}
                        </ul>
                    </article>
                )
            })}

        </>
    );
};

export default DisplayColumns;