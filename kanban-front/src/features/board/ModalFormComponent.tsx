import React from "react";
import LoadingSpinner from "@/generalComponents/loadingSpinner.tsx";

export const ModalFormWrapper = ({
                                     title,
                                     onSubmit,
                                     formRef,
                                     children,
                                     submitLabel, loading
                                 }: {
    title: string;
    onSubmit: (e: React.FormEvent) => void;
    formRef: React.RefObject<HTMLFormElement | null>;
    children: React.ReactNode;
    submitLabel: string;
    loading?: boolean;
}) => (
    <div className="modalOverlay">
        <form onSubmit={onSubmit} ref={formRef} className="newBoard">

            {loading ? <LoadingSpinner message={'loading'} color={'fff'}/> : <><h3>{title}</h3>
                {children}
                <button type="submit">{submitLabel}</button>
            </>
            }


        </form>
    </div>
);

