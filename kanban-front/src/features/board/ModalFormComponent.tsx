import React from "react";
import LoadingSpinner from "@/generalComponents/loadingSpinner.tsx";

export const ModalFormWrapper = ({
                                     title,
                                     onSubmit,
                                     formRef,
                                     children,
                                     submitLabel, loading, extraChildren
                                 }: {
    title: string;
    onSubmit: (e: React.FormEvent) => void;
    formRef: React.RefObject<HTMLFormElement | null>;
    children: React.ReactNode;
    submitLabel: string;
    loading?: boolean;
    extraChildren?: React.ReactNode;
}) => (
    <div className="modalOverlay">
        <form onSubmit={onSubmit} ref={formRef} className="newBoard">
            {loading ? <LoadingSpinner message={'loading'} color={'fff'}/> : <><h3>{title}</h3>
                {children}
                <button className={'mainSubmitButton'} type="submit">{submitLabel}</button>
                {extraChildren}
            </>
            }
        </form>
    </div>
);

