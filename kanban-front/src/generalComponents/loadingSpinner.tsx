import {type CSSProperties} from 'react';
import {ClipLoader} from "react-spinners";

const LoadingSpinner = ({message, color}: { message: string, color?: string }) => {
    const override: CSSProperties = {

        display: "block",
        margin: "0 auto",
        borderColor: "#9989f1",
    };
    return (
        <span className={'loading-spinner'}>
            {message} <ClipLoader color={color ?? '#9989f1'} cssOverride={override}/>
        </span>
    );
};

export default LoadingSpinner;