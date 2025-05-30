import React, {useState, useEffect, useRef} from 'react'
import {useDispatch} from 'react-redux'
import {UseAppContext} from './context'
import {useLazyQuery} from '@apollo/client'
import {setBoards} from './features/board/boardSlice'
import Board from './features/board/board'
import Header from './features/board/components/header.tsx'
import Aside from './features/board/components/Aside/aside'
import useCloseEscape from './features/board/components/hooks/useCloseEscape.tsx'
import {GET_BOARDS} from "@/GraphQL Queries/BoardQueries.ts";
import {useAppSelector} from "@/app/hooks.ts";

function Home() {
    const {dark, tab} = UseAppContext()
    const [selectBord, setSelectBord] = useState(false)
    const form = useRef<HTMLFormElement>(null);
    const close = useCloseEscape()
    const dispatch = useDispatch();
    const authState = useAppSelector((state) => state.auth)
    const [getBoards, {loading, error}] = useLazyQuery(GET_BOARDS,{variables:{userId
    }});
    useEffect(() => {
        if (authState.auth) {
            getBoards().then(r => dispatch(setBoards(r.data?.getBoards ?? []))).catch(e => console.log(e))
        }
    }, [authState.auth, dispatch, getBoards])



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
            <Header selectBord={selectBord} setSelectBord={setSelectBord}/>
            {!tab && <Aside/>}
            {tab && selectBord ? (
                <div onClick={(e) => unShow(e)} className='modalOverlay'>
                    {<Aside setSelectBord={setSelectBord} asideRef={form}/>}
                </div>
            ) : (
                ''
            )}
            <Board error={error} loading={loading}/>
        </main>
    )
}

export default Home
