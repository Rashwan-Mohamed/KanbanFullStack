import  {createRoot} from "react-dom/client";
import "./index.css";
import App from "./App";
import {Provider} from "react-redux";
import {store} from "./app/store";
import {
    ApolloClient,
    InMemoryCache,
    ApolloProvider,
    HttpLink,
} from "@apollo/client";
import {AppContextProvider} from "@/context.tsx";

const client = new ApolloClient({
    link: new HttpLink({
        uri: "http://localhost:8888/graphql", // Adjust to match your PHP GraphQL handler
        fetchOptions: {
            method: "POST", // GraphQL requests should be sent as POST
        },
    }),
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

