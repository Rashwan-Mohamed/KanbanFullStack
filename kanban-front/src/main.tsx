import {createRoot} from "react-dom/client";
import "./index.css";
import App from "./App";
import {Provider} from "react-redux";
import {store} from "./app/store";
import {
    ApolloClient,
    InMemoryCache,
    ApolloProvider,
    createHttpLink, ApolloLink,
} from "@apollo/client";
import {AppContextProvider} from "@/context.tsx";
import {onError} from "@apollo/client/link/error";

const baseURL = import.meta.env.VITE_API_BASE_URL;


const errorLink = onError(({graphQLErrors, networkError}) => {
    if (graphQLErrors) {
        for (const err of graphQLErrors) {
            if (err.message.includes("Not logged in..")) {
                // Optionally redirect or show a message
                console.warn("User is not authenticated", networkError);
            }
        }
    }
});

const link = ApolloLink.from([
    errorLink,
    createHttpLink({
        uri: baseURL,
        credentials: 'include',
    })
]);

export const client = new ApolloClient({
    link,
    cache: new InMemoryCache({
        addTypename: false,
    }),
});

const container = document.getElementById('root');

if (!container) {
    throw new Error('Root container missing');
}

// eslint-disable-next-line @typescript-eslint/ban-ts-comment
// @ts-expect-error
if (!container._root) {
    // eslint-disable-next-line @typescript-eslint/ban-ts-comment
    // @ts-expect-error
    container._root = createRoot(container);
}

// @ts-expect-error
container._root.render(
    <ApolloProvider client={client}>
        <Provider store={store}>
            <AppContextProvider>
                <App/>
            </AppContextProvider>
        </Provider>
    </ApolloProvider>
);