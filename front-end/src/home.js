import Board from './features/board/board'
import Header from './features/board/header'
import Aside from './features/board/aside'
import React, { useState, useEffect, useRef } from 'react'
import { useDispatch, useSelector } from 'react-redux'
import { UseAppContext } from './context'
import useCloseEscape from './features/board/components/useCloseEscape'
import { GET_BOARDS } from './queries'
import { useQuery } from '@apollo/client'
import { setBoards } from './features/board/boardSlice'

function Home() {
    const { dark, tab, setSelected } = UseAppContext()
    const [selectBord, setSelectBord] = useState(false)
    const form = useRef(null)
    let close = useCloseEscape()
    const dispatch = useDispatch();
    const { loading, error, data } = useQuery(GET_BOARDS);
    useEffect(() => {
        if (!loading && !error) {
            dispatch(setBoards(data.getBoards));
            setSelected(data.getBoards[0].name)
        }
    }, [loading, data, dispatch]);

    useEffect(() => {
        if (close) {
            setSelectBord(false)
        }
    }, [close])
    const unShow = (e) => {
        if (!form.current.contains(e.target)) {
            setSelectBord(false)
        }
    }
    // dispatch(setBoards(data.getBoards));

    return (
        <main className={!dark ? 'whiteMain' : ''}>
            <Header selectBord={selectBord} setSelectBord={setSelectBord} />
            {!tab && <Aside />}
            {tab && selectBord ? (
                <div onClick={unShow} className='modalOverlay'>
                    {<Aside setSelectBord={setSelectBord} erre={form} />}
                </div>
            ) : (
                ''
            )}
            <Board />
        </main>
    )
}

export default Home
