  import { configureStore } from "@reduxjs/toolkit";
import type { ThunkAction, Action } from "@reduxjs/toolkit";
import authReducer from "../features/auth/AuthenticationSlice";
import boardsReducer from "../features/board/boardSlice";

export const store = configureStore({
  reducer: {
    boards: boardsReducer,
    auth: authReducer,
  },
});

export type AppStore = typeof store;
export type AppDispatch = typeof store.dispatch;
export type RootState = ReturnType<typeof store.getState>;
export type AppThunk = ThunkAction<void, RootState, unknown, Action>;
