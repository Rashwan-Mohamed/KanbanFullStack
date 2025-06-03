import React, {useEffect} from "react";

type ElementsType = React.RefObject<HTMLElement | HTMLFormElement | null>[];

type PropTypes = {
    elements: ElementsType
    handler: () => void;
    active: boolean;
};


const useClickOutside = ({elements, handler, active}: PropTypes) => {
        useEffect(() => {
            if (!active) return;

            const checkIt = (e: MouseEvent) => {
                if (
                    elements.every(
                        (ref) =>  !ref.current?.contains(e.target as Node)
                    )
                ) {

                    handler();
                }
            };

            // Listen to mousedown instead of click for better UX (fires earlier)
            document.addEventListener("mousedown", checkIt);
            return () => document.removeEventListener("mousedown", checkIt);
        }, [active, elements, handler]);
    }
;

export default useClickOutside;


