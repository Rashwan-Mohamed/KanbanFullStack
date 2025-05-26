interface propTypes {
    value: string
    setEntries: (value: React.SetStateAction<{
        title: String
        desc: String
    }>) => void
    usedBoard: string

}

function ChangeTitle({usedBoard, setEntries, value}: propTypes) {
    return (
        <div>
            <label htmlFor='title'>title</label>
            <input
                style={{
                    border: usedBoard !== 'trial' ? '2px solid #EA5555' : '',
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
            {usedBoard !== 'trial' && (
                <span className='dangerSpan'>{usedBoard}</span>
            )}
        </div>
    );
}

export default ChangeTitle;

