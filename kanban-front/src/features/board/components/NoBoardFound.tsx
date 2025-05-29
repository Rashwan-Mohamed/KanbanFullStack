import React from 'react'
import MangeBoard from '../MangeBoard'
import {ApolloError} from "@apollo/client";
import LoadingSpinner from "@/generalComponents/loadingSpinner.tsx";

interface propTypes {
    boardShow: boolean
    setBoardShow: React.Dispatch<React.SetStateAction<boolean>>
    error: ApolloError | undefined
    loading: boolean
}



export default function NoBoardFound({boardShow, setBoardShow, loading, error}: propTypes) {
    return (
        <>
            {boardShow && <MangeBoard setBoardShow={setBoardShow} operation={'add'}/>}
            <section className='board-container emptyBoards'>
                {!loading && !error && <>   <p>there is no boards, click below to create one</p>
                    <button
                        onClick={() => {
                            setBoardShow(true)
                        }}
                        className='addNewTask'
                    >
                        + create new board
                    </button>
                </>}
                {loading && <p> {<LoadingSpinner message={'loading boards...'}></LoadingSpinner>}</p>}
                {error && <p>Error Fetching boards, might be a server error </p>}
            </section>
        </>
    )
}
