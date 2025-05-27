import React from "react";

export const ModalFormWrapper = ({
                                     title,
                                     onSubmit,
                                     formRef,
                                     children,
                                     submitLabel,
                                 }: {
    title: string;
    onSubmit: (e: React.FormEvent) => void;
    formRef: React.RefObject<HTMLFormElement | null>;
    children: React.ReactNode;
    submitLabel: string;
}) => (
    <div className="modalOverlay">
        <form onSubmit={onSubmit} ref={formRef} className="newBoard">
            <h3>{title}</h3>
            {children}
            <button type="submit">{submitLabel}</button>
        </form>
    </div>
);

