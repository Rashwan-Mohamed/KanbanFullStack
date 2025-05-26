import React, {useRef} from 'react'

interface propTypes {
    title: string
    setSure: React.Dispatch<React.SetStateAction<boolean>>
    handleSure: () => void
}

export default function Assure({title, setSure, handleSure}: propTypes) {
    const deleteRef = useRef<HTMLDivElement>(null)

    return (
        <>
            <div
                ref={deleteRef}
                onClick={(e) => {
                    if (deleteRef.current && !deleteRef.current.contains(e.target as Node)) {
                        setSure(false)
                    }
                }}
                className='confirmDelete'
            >
                <article>
                    <h3>Delete this task?</h3>
                    <p>
                        Are you sure you want to delete the `${title}` task? This
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
