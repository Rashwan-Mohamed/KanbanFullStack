import { useMutation } from '@apollo/client';
import { useDispatch } from 'react-redux';

const useGraphQLMutation = ({ mutation, variables, action }) => {
    const dispatch = useDispatch();

    const [mutate, { loading, error, data }] = useMutation(mutation);
    return () => {

        const trigger = async () => {
            try {
                const response = await mutate({ variables });
                if (action) {
                    dispatch(action(response.data));
                }
                return response;
            } catch (err) {
                console.error('Mutation failed:', err);
                throw err;
            }
        };

        return { trigger, loading, error, data };
    };
};

export default useGraphQLMutation;
