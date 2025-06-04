import {CSS} from '@dnd-kit/utilities';
import {useSortable} from '@dnd-kit/sortable';


const SortableTask = ({id}: { id: number }) => {
    const {
            attributes,
            listeners,
            setNodeRef,
            transform,
            transition,
        } = useSortable({
            id
        })
    ;


    const style = {
        transform: CSS.Translate.toString(transform),
        transition
    }

    return (
        <li className={'EmptyList'}
            ref={setNodeRef} style={style} {...listeners} {...attributes}
        >
        </li>
    );
};

export default SortableTask;