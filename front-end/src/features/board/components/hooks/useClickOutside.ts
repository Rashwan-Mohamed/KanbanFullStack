import React, {useEffect} from "react";

const useClickOutside = (
    elements: React.RefObject<HTMLElement | null>[],
    handler: () => void,
    active: boolean
) => {
    useEffect(() => {
        if (!active) return; // Only activate when needed

        const checkIt = (e: MouseEvent) => {
            if (elements.every(ref => ref.current && !ref.current.contains(e.target as Node))) {
                handler();
            }
        };

        window.addEventListener("click", checkIt);
        return () => window.removeEventListener("click", checkIt);
    }, [active, elements, handler]);
};

export default useClickOutside;