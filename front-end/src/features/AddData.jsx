// import { useMutation } from '@apollo/client';
// import React from 'react';
// import data from '../data.json';
// import { ADD_BOARD } from '../queries';

// export default function AddData() {
//     const [addBoardMutation, { loading, error }] = useMutation(ADD_BOARD);

//     console.log(data.boards, 'Loading data');

//     const addBoard = async ({ name, columns }) => {
//         try {
//             const { data } = await addBoardMutation({
//                 variables: {
//                     boardName: name,
//                     boardColumnsId: columns.map((item) => item.name),
//                 },
//             });

//             return data.addBoard.columnIds;
//         } catch (error) {
//             console.error("Failed to add board:", error);
//             return [];
//         }
//     };

//     const addData = async () => {
//         try {
//             const boardPromises = data.boards.map(async (board) => {
//                 const { name, columns } = board;
//                 return await addBoard({ name, columns });
//             });
//             const boardIdsArray = await Promise.all(boardPromises);

//             console.log("All board IDs:", boardIdsArray);
//         } catch (error) {
//             console.error("Error adding data:", error);
//         }
//     };

//     React.useEffect(() => {
//         // addData();
//     }, []);

//     return <></>;
// }