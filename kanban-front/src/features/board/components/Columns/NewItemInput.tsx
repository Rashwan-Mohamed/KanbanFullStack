import React from 'react';
import type {column, subtask} from "@/features/board/boardSlice";


interface PropTypes<T> {
    items: T[];
    setItems: React.Dispatch<React.SetStateAction<T[]>>;
    used: string[];
    setUsed: React.Dispatch<React.SetStateAction<string[]>>;
    fromBoard?: boolean;
}


const NewItemInput = <T extends column | subtask>({items, setItems, used, setUsed, fromBoard}: PropTypes<T>) => {
    const hasColumn = (item: column | subtask): item is column => {
        return "name" in item; // Assuming 'column' has a 'name' property
    };

    const handleChangeColumnName = (name: string, term: number) => {
        setItems((prevColumns) =>
            prevColumns.map((column, index) =>
                index === term ? {...column, name} : column
            )
        );
    }

    const handleChangeSubtaskTitle = (title: string, term: number) => {
        setItems((old) =>
            old.map((item, ind) =>
                ind === term ? {...item, title} : item
            )
        );
    }

    return (
        <div className='subtasksContainer'>
            <label htmlFor='Columns'>{hasColumn(items[0]) ? 'Columns' : 'Subtasks'}</label>
            {items.map((item, term) => {
                const oldItem = item.id !== -1
                return (
                    <div key={term}>
                        <label className='spanerContainer'>
                            {' '}
                            <input
                                autoComplete='off'
                                style={{
                                    border: used[term] !== 'valid' ? '2px solid #EA5555' : '',
                                }}
                                onChange={(e) => {
                                    if (hasColumn(item)) {
                                        handleChangeColumnName((e.target.value), term)
                                    } else {
                                        handleChangeSubtaskTitle((e.target.value), term)
                                    }

                                }}
                                value={hasColumn(item) ? item.name : item.title}
                                type='text'
                                id='Columns'
                            />
                            {hasColumn(item) && oldItem && !fromBoard && (
                                <div className='overlies'>
                                    <input type='text' value={item.name} readOnly/>
                                </div>
                            )}
                            {used[term] !== 'valid' && (
                                <span className='dangerSpan'>{used[term]}</span>
                            )}
                        </label>

                        {((term !== 0 && fromBoard) || !hasColumn(item)) && (
                            <span
                                onClick={() => {
                                    setItems((old) => old.filter((_, ind) => ind !== term))
                                    setUsed((prevUsed) => prevUsed.filter((_, ind) => ind !== term));
                                }}
                                className='deleteColIn'
                            >
{svg1}
                                    </span>
                        )}
                    </div>
                )
            })}
        </div>
    );
};
// display it unless its a column and its from board and its not the first element in case its column
export default NewItemInput;

const svg1 = <svg
    width='15'
    height='15'
    xmlns='http://www.w3.org/2000/svg'
>
    <g fill='#828FA3' fillRule='evenodd'>
        <path d='m12.728 0 2.122 2.122L2.122 14.85 0 12.728z'/>
        <path d='M0 2.122 2.122 0 14.85 12.728l-2.122 2.122z'/>
    </g>
</svg>