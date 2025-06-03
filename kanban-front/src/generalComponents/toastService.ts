import {toast} from 'react-toastify';

export const notifySuccess = (message: string, progress = 5000) => toast.success(message, {autoClose: progress});
export const notifyError = (message: string, progress = 5000) => toast.error(message, {autoClose: progress});
export const notify = (message: string, progress = 5000) => toast(message, {autoClose: progress});