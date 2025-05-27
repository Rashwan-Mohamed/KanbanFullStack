import React from 'react';
import type {column} from "../../boardSlice";

interface propTypes {
    setColumns: React.Dispatch<React.SetStateAction<column[]>>
    setUsed: React.Dispatch<React.SetStateAction<string[]>>
}

const AddNewColumn: React.FC<propTypes> = ({ setColumns, setUsed}) => {
    return (
        <button
            onClick={(e) => {
                e.preventDefault()
                setColumns((old) => [...old, {name: ''}])
                setUsed((old) => [...old, 'trial'])
            }}
        >
            +add new column
        </button>
    )
        ;
};

export default AddNewColumn;