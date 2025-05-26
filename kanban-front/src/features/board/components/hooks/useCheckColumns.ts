import { useState } from "react";
import type { column } from "../../boardSlice";

const useCheckColumns = (columns: column[]): [boolean, string[]] => {
  const [usedStates, setUsedStates] = useState<string[]>([]);

  const checkColumns = (): boolean => {
    let proceed = true;

    const updatedStates = columns.map((column, index) => {
      if (!column.name) {
        proceed = false;
        return "required";
      }

      const isUnique =
        columns.findIndex(
          (item, ind) => item.name === column.name && ind !== index
        ) === -1;

      if (!isUnique) {
        proceed = false;
        return "used";
      }

      return "trial";
    });

    setUsedStates(updatedStates);
    return proceed;
  };

  return [checkColumns(), usedStates];
};

export default useCheckColumns;
