import React from 'react'
import NewBoard from '../newBoard'

export default function NoBoardFound({ boardShow, setBoardShow }) {
    return (
        <>
            {boardShow && <NewBoard setBoardShow={setBoardShow} />}
            <section className='board-container emptyBoards'>
                <p>there is no boards, click below to create one</p>
                <button
                    onClick={() => {
                        setBoardShow(true)
                    }}
                    className='addNewTask'
                >
                    + create new board
                </button>
            </section>
        </>
    )
}
