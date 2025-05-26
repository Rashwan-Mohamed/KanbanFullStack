import React from 'react';

interface propTypes {
    deleteRef: React.RefObject<HTMLElement | null>;
    unShow: (e: MouseEvent | React.MouseEvent) => void;
    selected: string;
    setSure: React.Dispatch<React.SetStateAction<boolean>>;
    handleDelete: () => void;
}

const AssureDelete: React.FC<propTypes> = ({
                                               deleteRef, unShow, selected, setSure, handleDelete
                                           }) => {
        return (
            <div onClick={(e) => unShow(e)} className='confirmDelete'>
                <article ref={deleteRef}>
                    <h3>Delete this board?</h3>
                    <p>
                        Are you sure you want to delete the '{`${selected}`}' board?
                        This action will remove all columns and tasks and cannot be
                        reversed.
                    </p>
                    <div>
                        <button
                            onClick={() => {
                                setSure(false)
                                handleDelete()
                            }}
                        >
                            delete
                        </button>
                        <button
                            onClick={() => {
                                setSure(false)
                            }}
                        >
                            cancel
                        </button>
                    </div>
                </article>
            </div>
        );
    }
;

export default AssureDelete;