import React, {useState, useRef} from 'react'
import {deleteBoard} from '../boardSlice.ts'
import {useMutation} from '@apollo/client'
import {DELETE_BOARD} from '@/queries.ts'
import {useAppDispatch, useAppSelector} from '@/app/hooks.ts'
import {UseAppContext} from '@/context.tsx'
import AssureDelete from "@/features/board/components/AssureDelete.tsx";
import MangeTask from "@/features/board/components/MangeTask/MangeTask.tsx";
import useClickOutside from "@/features/board/components/hooks/useClickOutside.ts";
import MangeBoard from "@/features/board/MangeBoard.tsx";
import type {MutationDeleteBoardArgs,DeleteBoardMutationVariables} from "@/__generated__/types.ts";

interface propTypes {
    selectBord: boolean
    setSelectBord: React.Dispatch<React.SetStateAction<boolean>>
}

const Header = ({selectBord, setSelectBord}: propTypes) => {
    const {selected, setSelected, dark, tab} = UseAppContext()
    const [deleteBF] = useMutation<MutationDeleteBoardArgs,DeleteBoardMutationVariables>(DELETE_BOARD)
    const [toggle, setToggle] = useState(false)
    const [boardShow, setBoardShow] = useState(false)
    const [taskShow, setTaskShow] = useState(false)
    const [sure, setSure] = useState(false)
    const drop = useRef<HTMLElement>(null)
    const doper = useRef<HTMLButtonElement>(null)
    const dispatch = useAppDispatch()
    const boards = useAppSelector((state) => {
        return state.boards
    })
    const len = boards.length
    const indeed = boards.findIndex((item) => item.name === selected)
    const handleDelete = () => {
        const boardID = boards[indeed]['id']
        deleteBF({
            variables: {boardID: (boardID)}
        });
        dispatch(deleteBoard({name: selected}))
        setToggle(false)
        if (len === 1) {
            setSelected('NO BOARD FOUND')
        } else if ((indeed === 0) && (len > 1)) {
            setSelected(boards[1].name)
        } else {
            setSelected(boards[0].name)
        }
    }


    useClickOutside({
        elements: [drop, doper],
        handler: () => setToggle(false),
        active: toggle
    })
    ;


    return (<>
        <header
            style={{
                backgroundColor: !dark ? 'white' : '', borderBottom: !dark ? '1px solid var(--second)' : '',
            }}
            className='header'
        >
            {sure && (<AssureDelete selected={selected} setSure={setSure}
                                    handleDelete={handleDelete} type={'board'}/>)}
            {boardShow && <MangeBoard setBoardShow={setBoardShow} operation={'edit'}/>}{' '}
            {taskShow && <MangeTask setEditTask={setTaskShow} selectedTask={null}/>}{' '}
            {!tab && (<picture
                style={{
                    backgroundColor: !dark ? 'white' : '', borderRight: !dark ? '1px solid var(--second)' : '',
                }}
                className='logo-container'
            >
                {dark ? (<img src='assets/logo-light.svg' alt=''/>) : (<img src='assets/logo-dark.svg' alt=''/>)}
            </picture>)}
            <div className='header-body'>
                <h1
                    style={{
                        color: !dark ? 'black ' : '',
                    }}
                    onClick={() => {
                        setSelectBord(!selectBord)
                    }}
                >
                    {tab && <img src='assets/logo-mobile.svg' alt=''/>}{' '}
                    {selected || 'no boards'}
                    {tab && (<span>
                        <svg
                            style={{transform: selectBord ? 'rotate(180deg)' : ''}}
                            width='10'
                            height='7'
                            xmlns='http://www.w3.org/2000/svg'
                        >
                            <path
                                stroke='#635FC7'
                                strokeWidth='2'
                                fill='none'
                                d='m1 1 4 4 4-4'
                            />
                        </svg>
                    </span>)}
                </h1>
                {boards.length > 0 && (<div className='header-btns'>
                    <button onClick={() => setTaskShow(true)} className='addNewTask'>
                        {tab ? svg1 : ('+ add new task')}
                    </button>
                    <button
                        ref={doper}
                        onClick={() => setToggle(!toggle)}
                        className={!dark ? 'editDelet editDeletWhite' : 'editDelet'}
                    >
                        {svg2}
                    </button>
                    {toggle && <ControlBtns dark={dark} drop={drop} setBoardShow={setBoardShow} setToggle={setToggle}
                                            setSure={setSure}/>}
                </div>)}
            </div>
        </header>
    </>)
}

export default Header


interface propTypesBtns {
    dark: boolean
    drop: React.RefObject<HTMLElement | null>
    setBoardShow: React.Dispatch<React.SetStateAction<boolean>>
    setToggle: React.Dispatch<React.SetStateAction<boolean>>
    setSure: React.Dispatch<React.SetStateAction<boolean>>
}

const ControlBtns: React.FC<propTypesBtns> = ({dark, drop, setBoardShow, setToggle, setSure}) => {
    return (
        <span
            style={{backgroundColor: !dark ? 'white' : ''}}
            ref={drop}
        >
            <button
                onClick={() => {
                    setBoardShow(true)
                    setToggle(false)
                }}
            >
                edit board
            </button>
            <button
                onClick={() => {
                    setSure(true)
                    setToggle(false)
                }}
            >
                delete board
            </button>
        </span>
    );
};


const svg1 = <svg
    width='12'
    height='12'
    xmlns='http://www.w3.org/2000/svg'
>
    <path
        fill='#FFF'
        d='M7.368 12V7.344H12V4.632H7.368V0H4.656v4.632H0v2.712h4.656V12z'
    />
</svg>

const svg2 = <svg width='5' height='20' xmlns='http://www.w3.org/2000/svg'>
    <g fill='#828FA3' fillRule='evenodd'>
        <circle cx='2.308' cy='2.308' r='2.308'/>
        <circle cx='2.308' cy='10' r='2.308'/>
        <circle cx='2.308' cy='17.692' r='2.308'/>
    </g>
</svg>