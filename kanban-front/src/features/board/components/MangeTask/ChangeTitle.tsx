
interface propTypes {
    value: string

    usedBoard: string
    onChange: (val: string) => void;

}

function ChangeTitle({usedBoard, value, onChange}: propTypes) {
    return (
        <div>
            <label htmlFor='title'>title</label>
            <input
                autoComplete='off'
                style={{
                    border: usedBoard !== 'valid' ? '2px solid #EA5555' : '',
                }}
                onChange={(e) =>

                    onChange(e.target.value)
                }
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

