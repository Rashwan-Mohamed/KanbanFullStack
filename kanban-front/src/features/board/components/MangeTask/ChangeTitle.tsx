interface propTypes {
    value: string
    usedBoard: string
    onChange: (val: string) => void;
    label?: string
    additionalClass?: string
    type?: string
}

function ChangeTitle({usedBoard, value, onChange, label, additionalClass, type}: propTypes) {
    const comboClass = additionalClass?.concat('dive') ?? ''
    return (
        <div className={`inputWrapper ${comboClass ?? ''}`}>
            <label htmlFor={label}>{label ?? 'title'}</label>
            <input
                className={`inputFormMain ${additionalClass ?? ''}`}
                autoComplete='off'
                style={{
                    border: usedBoard !== 'valid' ? '2px solid #EA5555' : '',
                }}
                onChange={(e) => onChange(e.target.value)}
                required={true}
                value={value}
                type={type ?? 'text'}
                id={label}
            />
            {usedBoard !== 'valid' && (
                <span className='dangerSpan'>{usedBoard}</span>
            )}
        </div>
    );
}

export default ChangeTitle;

