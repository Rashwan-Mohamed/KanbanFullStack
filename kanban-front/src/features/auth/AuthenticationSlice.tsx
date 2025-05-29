import {createSlice} from '@reduxjs/toolkit'


const initialState = {}
// const initialState = { user: 'ahmed', auth: false, userId: 0 }


export const authSlice = createSlice({
    name: 'auth',
    initialState
    , reducers: {}
})
export default authSlice.reducer
