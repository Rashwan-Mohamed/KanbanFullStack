interface propTypes {
    value: string
    usedBoard: string
    onChange: (val: string) => void;
    label?: string
    additionalClass?: string
}

function ChangeTitle({usedBoard, value, onChange, label, additionalClass}: propTypes) {
    return (
        <div className={'inputWrapper'} >
            <label htmlFor='title'>{label ?? 'title'}</label>
            <input
                className={`inputFormMain ${additionalClass ?? ''}`}
                autoComplete='off'
                style={{
                    border: usedBoard !== 'valid' ? '2px solid #EA5555' : '',
                }}
                onChange={(e) =>

                    onChange(e.target.value)
                }
                required={true}
                value={value}
                type='text'
                id='title'
            />
            {usedBoard !== 'valid' && (
                <span className='dangerSpan'>{usedBoard}</span>
            )}
        </div>
    );
}

export default ChangeTitle;

