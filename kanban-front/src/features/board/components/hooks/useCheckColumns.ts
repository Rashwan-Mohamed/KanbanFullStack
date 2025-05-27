import type {column} from "../../boardSlice";

const useCheckColumns = (columns: column[]): [boolean, string[]] => {
    let usedStates = columns.map(() => "valid")
    const checkColumns = (): boolean => {
        let proceed = true;
        usedStates = columns.map((column, index) => {
            if (!column.name) {
                proceed = false;
                return "required";
            }

            const isUnique =
                columns.findIndex(
                    (item, ind) => item.name === column.name && ind !== index
                );

            if (isUnique !== -1 && index > isUnique) {
                proceed = false;
                return "used";
            }

            return "valid";
        })
        return proceed;
    };

    return [checkColumns(), usedStates];
};

export default useCheckColumns;
