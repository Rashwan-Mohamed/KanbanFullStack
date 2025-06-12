import {useAppSelector} from "@/app/hooks";
import {useMemo} from "react";
import {UseAppContext} from "@/context";

export const useGetBoard = () => {
    const {selected} = UseAppContext()

    const boards = useAppSelector((state) => {
        return state.boards
    })
    return useMemo(() => boards.find((item) => item.name === selected), [boards, selected]) ?? boards[0]
}