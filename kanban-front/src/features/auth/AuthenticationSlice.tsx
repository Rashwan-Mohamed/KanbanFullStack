import {createSlice} from '@reduxjs/toolkit'

export interface authState {
    user: string;
    auth: boolean;
    userId: number;
}

const initialState: authState = {
    user: '',
    auth: false,
    userId: 0
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
export const {setAuth,loggedOut} = authSlice.actions
export default authSlice.reducer
