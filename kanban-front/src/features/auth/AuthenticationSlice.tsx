import {createSlice} from '@reduxjs/toolkit'

export interface authState {
    user: string;
    auth: boolean;
    userId: number | null
    isGuest: boolean;
    last_updated?: string;
    created_at?: string;
    email: string
    takenTour: boolean;
}

export const initialState: authState = {
    user: '',
    auth: false,
    userId: 0,
    isGuest: false,
    email: '',
    takenTour:false
}
// const initialState = { user: 'ahmed', auth: false, userId: 0 }


export const authSlice = createSlice({
    name: 'auth',
    initialState
    , reducers: {
        setAuth: (_, action: { payload: authState }) => {
            return action.payload
        }, loggedOut: () => {
            return initialState
        }

    }
})
export const {setAuth, loggedOut} = authSlice.actions
export default authSlice.reducer
