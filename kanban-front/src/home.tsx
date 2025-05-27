import React, { useState, useEffect, useRef } from 'react'
import { useDispatch } from 'react-redux'
import { UseAppContext } from './context'
import { GET_BOARDS } from './queries'
import { useQuery } from '@apollo/client'
import { setBoards } from './features/board/boardSlice'
import Board from './features/board/board'
import Header from './features/board/components/header.tsx'
import Aside from './features/board/components/Aside/aside'
import useCloseEscape from './features/board/components/hooks/useCloseEscape.tsx'

function Home() {
    const { dark, tab, setSelected } = UseAppContext()
    const [selectBord, setSelectBord] = useState(false)
    const form = useRef<HTMLFormElement>(null);
    const close = useCloseEscape()
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
    const unShow = (e: React.MouseEvent<HTMLDivElement>) => {
        if (form.current && !form.current.contains(e.target as Node)) {
            setSelectBord(false);
        }
    };
    // dispatch(setBoards(data.getBoards));

    return (
        <main className={!dark ? 'whiteMain' : ''}>
            <Header selectBord={selectBord} setSelectBord={setSelectBord} />
            {!tab && <Aside />}
            {tab && selectBord ? (
                <div onClick={(e) => unShow(e)} className='modalOverlay'>
                    {<Aside setSelectBord={setSelectBord} asideRef={form} />}
                </div>
            ) : (
                ''
            )}
            <Board />
        </main>
    )
}

export default Home
