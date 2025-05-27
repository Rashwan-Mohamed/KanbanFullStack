interface propTypes {
    value: string
    setEntries: (value: React.SetStateAction<{
        title: string
        desc: string
    }>) => void
    usedBoard: string

}

function ChangeTitle({usedBoard, setEntries, value}: propTypes) {
    return (
        <div>
            <label htmlFor='title'>title</label>
            <input
                style={{
                    border: usedBoard !== 'valid' ? '2px solid #EA5555' : '',
                }}
                onChange={(e) =>
                    setEntries((old) => {
                        return {...old, title: e.target.value}
                    })
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

