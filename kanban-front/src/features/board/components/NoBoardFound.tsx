import React from 'react'
import MangeBoard from '../MangeBoard'

interface propTypes {
    boardShow: boolean
    setBoardShow: React.Dispatch<React.SetStateAction<boolean>>
}

export default function NoBoardFound({boardShow, setBoardShow}: propTypes) {
    return (
        <>
            {boardShow && <MangeBoard setBoardShow={setBoardShow} operation={'add'}/>}
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
