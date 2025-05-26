import React, {useState, useEffect, useRef} from 'react'
import type {column} from "@/features/board/boardSlice";

interface propTypes {
    label: string
    arrcat: column[]
    setVaria: React.Dispatch<React.SetStateAction<{
        status: String
        statusId: number
    }>>
    varia: {
        status: String
        statusId: number
    }
}

function CustomDrop

({arrcat, varia, setVaria, label}: propTypes
) {
    const [show, setShow] = useState(false)
    const select = useRef<HTMLDivElement>(null)
    useEffect(() => {
        window.addEventListener('click', closeIt)
        return () => {
            window.removeEventListener('click', closeIt)
        }
    }, [show])
    const closeIt = (e: MouseEvent) => {
        if (select.current && !select.current.contains(e.target as Node) && show) {
            setShow(false)
        }
    }
    return (
        <div className='choosecat'>
            <h5>{label}</h5>
            <section
                ref={select}
                onClick={(e) => {
                    setShow(!show)
                }}
                className='select-option'
                id=''
            >
                <input value={varia.status.toString()} readOnly type='text'/>
                <span>
          {' '}
                    <svg
                        style={{transform: show ? 'rotate(180deg)' : ''}}
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
        </span>

                {show && (
                    <div>
                        {' '}
                        {arrcat.map((item, index) => {
                            const {name, id} = item
                            return (
                                <div
                                    onClick={() => {
                                        setVaria({status: name, statusId: id})
                                        setShow(false)
                                    }}
                                    key={index}
                                >
                                    {name}
                                </div>
                            )
                        })}
                    </div>
                )}
            </section>
        </div>
    )
}

export default CustomDrop
