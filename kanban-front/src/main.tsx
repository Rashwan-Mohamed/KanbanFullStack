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


const errorLink = onError(({graphQLErrors, networkError}) => {
    if (graphQLErrors) {
        for (const err of graphQLErrors) {
            if (err.message.includes("Not logged in")) {
                // Optionally redirect or show a message
                console.warn("User is not authenticated", networkError);
            }
        }
    }
});

const link = ApolloLink.from([
    errorLink,
    createHttpLink({
        uri: 'http://localhost:8888/graphql',
        credentials: 'same-origin',
    })
]);

export const client = new ApolloClient({
    link,
    cache: new InMemoryCache({
        addTypename: false,
    }),
});


createRoot(document.getElementById('root')!).render(
    <ApolloProvider client={client}>
        <Provider store={store}>
            <AppContextProvider>
                <App/>
            </AppContextProvider>
        </Provider>
    </ApolloProvider>
)

