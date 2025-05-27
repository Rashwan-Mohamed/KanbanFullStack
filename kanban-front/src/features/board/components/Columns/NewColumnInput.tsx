import React from 'react';
import type {column} from "@/features/board/boardSlice";

interface propTypes {
    columns: column[],
    setColumns: React.Dispatch<React.SetStateAction<column[]>>,
    used: string[],
    setUsed: React.Dispatch<React.SetStateAction<string[]>>
    fromBoard?: boolean
}

const NewColumnInput: React.FC<propTypes> = ({columns, setColumns, used, setUsed, fromBoard}) => {
    return (
        <div>
            <label htmlFor='Columns'>Columns</label>
            {columns.map((item, term) => {
                return (
                    <div key={term}>
                        <label className='spanerContainer'>
                            {' '}
                            <input
                                style={{
                                    border: used[term] !== 'trial' ? '2px solid #EA5555' : '',
                                }}
                                onChange={(e) => {
                                    setColumns((prevColumns) =>
                                        prevColumns.map((column, index) =>
                                            index === term ? {...column, name: e.target.value} : column
                                        )
                                    );
                                }}
                                value={item.name}
                                type='text'
                                id='Columns'
                            />
                            {item.id && !fromBoard && (
                                <div className='overlies'>
                                    <input type='text' value={item.name} readOnly/>
                                </div>
                            )}
                            {used[term] !== 'trial' && (
                                <span className='dangerSpan'>{used[term]}</span>
                            )}
                        </label>

                        {term !== 0 && !item.id && (
                            <span
                                onClick={() => {
                                    setColumns((old) => old.filter((_, ind) => ind !== term))
                                    setUsed((prevUsed) => prevUsed.filter((_, ind) => ind !== term));
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

export default NewColumnInput;