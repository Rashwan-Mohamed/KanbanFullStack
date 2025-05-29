import React, {useRef} from 'react';
import useClickOutside from "@/features/board/components/hooks/useClickOutside.ts";

interface propTypes {
    selected: string;
    setSure: React.Dispatch<React.SetStateAction<boolean>>;
    handleDelete: () => void;
    type: string
    setTaskShow?: React.Dispatch<React.SetStateAction<boolean>>;
}

const AssureDelete: React.FC<propTypes> = ({
                                               selected, setSure, handleDelete, type, setTaskShow
                                           }) => {
        const deleteRef = useRef<HTMLElement>(null);
        useClickOutside({
            elements: [deleteRef], handler: () => setSure(false)
            ,
            active: true
        })
        return (
            <div className='confirmDelete'>
                <article ref={deleteRef}>
                    <h3>Delete this {type}?</h3>
                    <p>
                        Are you sure you want to delete the {selected} {type}?
                        This action will remove all columns and tasks and cannot be
                        reversed.
                    </p>
                    <div>
                        <button
                            onClick={() => {
                                handleDelete()
                                setSure(false)
                                if (setTaskShow)
                                    setTaskShow(false)
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