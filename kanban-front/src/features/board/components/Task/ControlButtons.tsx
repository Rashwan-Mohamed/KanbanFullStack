import React from 'react';


interface propTypes {
    title: string
    setToggle: (value: React.SetStateAction<boolean>) => void
    toggle: boolean
    dark: boolean
    setEditTask: React.Dispatch<React.SetStateAction<boolean>>
    setTaskShow: React.Dispatch<React.SetStateAction<boolean>>
    setSure: React.Dispatch<React.SetStateAction<boolean>>
    doper: React.RefObject<HTMLButtonElement | null>
    drop: React.RefObject<HTMLButtonElement | null>
}

const ControlButtons = ({
                            title,
                            doper,
                            setToggle,
                            toggle,
                            dark,
                            drop,
                            setEditTask,
                            setTaskShow,
                            setSure
                        }: propTypes) => {
    return (
        <div>
            <h3>{title}</h3>
            <button
                ref={doper}
                onClick={() => setToggle(!toggle)}
                className={!dark ? 'editDelet editDeletWhite' : 'editDelet'}
            >
                <svg width='5' height='20' xmlns='http://www.w3.org/2000/svg'>
                    <g fill='#828FA3' fillRule='evenodd'>
                        <circle cx='2.308' cy='2.308' r='2.308'/>
                        <circle cx='2.308' cy='10' r='2.308'/>
                        <circle cx='2.308' cy='17.692' r='2.308'/>
                    </g>
                </svg>
            </button>
            {toggle && (
                <span
                    style={{backgroundColor: !dark ? 'white' : ''}}
                    className='spanishBtns'
                    ref={drop}
                >
                <button
                    onClick={() => {
                        setEditTask(true)
                        setTaskShow(false)
                        setToggle(false)
                    }}
                >
                  edit task
                </button>
                <button
                    onClick={() => {
                        setToggle(false)
                        setSure(true)
                    }}
                >
                  delete task
                </button>
              </span>
            )}
        </div>
    );
};

export default ControlButtons;