import React, {useState, useRef} from 'react'
import {deleteBoard} from '../boardSlice.ts'
import {useMutation} from '@apollo/client'
import {useAppDispatch, useAppSelector} from '@/app/hooks.ts'
import {UseAppContext} from '@/context.tsx'
import AssureDelete from "@/features/board/components/AssureDelete.tsx";
import MangeTask from "@/features/board/components/MangeTask/MangeTask.tsx";
import useClickOutside from "@/features/board/components/hooks/useClickOutside.ts";
import MangeBoard from "@/features/board/MangeBoard.tsx";
import {DELETE_BOARD} from "@/GraphQL Queries/BoardQueries.ts";
import Logout from "@/features/auth/Logout.tsx";
import Profile from "@/features/auth/Profile.tsx";

interface propTypes {
    selectBord: boolean
    setSelectBord: React.Dispatch<React.SetStateAction<boolean>>
}

const Header = ({selectBord, setSelectBord}: propTypes) => {
    const {selected, setSelected, dark, tab} = UseAppContext()
    const [deleteBF] = useMutation(DELETE_BOARD)
    const [toggle, setToggle] = useState(false)
    const [boardShow, setBoardShow] = useState(false)
    const [taskShow, setTaskShow] = useState(false)
    const [profileShow, setProfileShow] = useState(false)
    const [sure, setSure] = useState(false)
    const drop = useRef<HTMLElement>(null)
    const doper = useRef<HTMLButtonElement>(null)
    const dispatch = useAppDispatch()
    const boards = useAppSelector((state) => {
        return state.boards
    })
    const len = boards.length
    const indeed = boards.findIndex((item) => item.name === selected)
    const user = useAppSelector((state) => state.auth)
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
        {profileShow && <Profile setProfileShow={setProfileShow}></Profile>}
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
            {!tab && (
                <>
                    <div className={'headerFirst'}>
                        <picture
                            style={{
                                backgroundColor: !dark ? 'white' : '',
                                borderRight: !dark ? '1px solid var(--second)' : '',
                            }}
                            className='logo-container'
                        >
                            {dark ? (<img src='assets/logo-light.svg' alt=''/>) : (
                                <img src='assets/logo-dark.svg' alt=''/>)}
                        </picture>
                        <h3>{user.isGuest ? 'Guest' : user.user}</h3>

                    </div>
                </>

            )}
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

                <div className='header-btns'>
                    {boards.length > 0 && <>
                        <button onClick={() => setTaskShow(true)} className='addNewTask'>
                            {tab ? svg1 : ('+ add new task')}
                        </button>

                        <button
                            onClick={() => {
                                setBoardShow(true)
                                setToggle(false)
                            }}
                            className='addNewTask'
                        >
                            edit board
                        </button>
                        <button
                            onClick={() => {
                                setSure(true)
                                setToggle(false)
                            }}
                            className='addNewTask deleteBoard'

                        >
                            delete board
                        </button>

                    </>
                    }


                    <button
                        ref={doper}
                        onClick={() => setToggle(!toggle)}
                        className={!dark ? 'editDelet editDeletWhite' : 'editDelet'}
                    >
                        {svg2}
                    </button>

                    {toggle && <ControlBtns dark={dark} drop={drop} profileShow={setProfileShow} setToggle={setToggle}
                                            setSure={setSure}/>}
                </div>

            </div>
        </header>
    </>)
}

export default Header


interface propTypesBtns {
    dark: boolean
    drop: React.RefObject<HTMLElement | null>
    profileShow: React.Dispatch<React.SetStateAction<boolean>>
    setToggle: React.Dispatch<React.SetStateAction<boolean>>
    setSure: React.Dispatch<React.SetStateAction<boolean>>
}

const ControlBtns: React.FC<propTypesBtns> = ({dark, drop, profileShow, setToggle, setSure}) => {
    return (
        <span
            style={{backgroundColor: !dark ? 'white' : ''}}
            ref={drop}
        >
            <button onClick={() => profileShow(true)}>Edit Profile</button>
                <Logout/>
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