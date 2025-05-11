import React, { useRef } from 'react'

export default function Assure({ ref, title, setSure, handleSure }) {
    const ddelete = useRef(null)

    return (
        <>
            <div
                onClick={(e) => {
                    if (!ddelete.current.contains(e.target)) {
                        setSure(false)
                    }
                }}
                className='confirmDelete'
            >
                <article ref={ref}>
                    <h3>Delete this task?</h3>
                    <p>
                        Are you sure you want to delete the '{`${title}`}' task? This
                        action will remove all columns and tasks and cannot be reversed.
                    </p>
                    <div>
                        <button
                            onClick={() => {
                                setSure(false)
                                handleSure()
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
        </>
    )
}
