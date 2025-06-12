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
import Joyride, {type CallBackProps} from 'react-joyride';

function Home() {
    const {dark, tab} = UseAppContext()
    const [selectBord, setSelectBord] = useState(false)
    const form = useRef<HTMLFormElement>(null);
    const close = useCloseEscape()
    const dispatch = useDispatch();
    const authState = useAppSelector((state) => state.auth)
    const [getBoards, {loading, error}] = useLazyQuery(GET_BOARDS, {fetchPolicy: 'network-only'});
    const [stepIndex, setStepIndex] = useState(0);
    const [run, setRun] = useState(false);


    useEffect(() => {
        const now = new Date();
        let newlyCreated = false;
        if (authState.created_at) {
            const createdAtDate = new Date(authState.created_at.replace(' ', 'T'));
            const diffSeconds = (now.getTime() - createdAtDate.getTime()) / 1000;
            newlyCreated = diffSeconds >= 0 && diffSeconds <= 300;
        }
        if(authState.isGuest||newlyCreated){
            setRun(true);
        }
    }, [authState.auth]);
    console.log(run)
    const steps = [
        {
            target: '.firstToAddnewTask',
            content: 'you can create new tasks!',
        },
        {
            target: '.boardColumn',
            content: 'you can drop & drag tasks!',
        },{
            target: '.subtaskListMain',
            content: 'you can click on a task to edit it!',
        },
        {
            target: '.registerNewUser',
            content: 'click here to switch from guest to a user and save your data!',
        }, {
            target: '#root',
            content: 'Explore more features on your own!',
        }
    ];
    //subtaskListMain
    useEffect(() => {
        if (authState.auth && authState.userId) {
            getBoards({variables: {userId: authState.userId}}).then(r => dispatch(setBoards(r.data?.getBoards ?? []))).catch(e => console.log(e))
        }
    }, [authState, dispatch, authState.isGuest])


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
    const handleJoyrideCallback = (data: CallBackProps) => {
        const {  action,index, status, type } = data;
        if (type === 'step:after' || type === "error:target_not_found") {
            if (action === 'prev') {
                setStepIndex(index - 1);
            } else {
                setStepIndex(index + 1);
            }
        }
        if (status === 'finished' || status === 'skipped') {
            setRun(false);
            setStepIndex(0);
        }
    };
    // dispatch(setBoards(data.getBoards));
    return (
        <main className={!dark ? 'whiteMain' : ''}>
            <Joyride
                steps={steps}
                run={run}
                stepIndex={stepIndex}
                continuous
                showProgress
                showSkipButton
                callback={handleJoyrideCallback}
                styles={{
                    options: {
                        arrowColor: '#e3ffeb',
                        backgroundColor: '#2b2c37',
                        overlayColor: '#2b2c37',
                        primaryColor: '#8471f2',
                        textColor: 'white',
                        // width: 900,
                        zIndex: 1000,
                    },
                }}
            />

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
