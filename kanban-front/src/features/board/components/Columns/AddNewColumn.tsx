import React from 'react';

interface propTypes {
    onAddNewItem: () => void;
    setUsed: React.Dispatch<React.SetStateAction<string[]>>
    type: string
}


const AddNewColumn = ({onAddNewItem, setUsed, type}: propTypes) => {
    return (
        <button
            className={'addNewColumnWhiteButton ButtonGeneric'}
            onClick={(e) => {
                e.preventDefault();
                onAddNewItem()
                setUsed((old) => [...old, 'valid']);
            }}
        >
            + add new {type}
        </button>

    )
        ;
};

export default AddNewColumn;
