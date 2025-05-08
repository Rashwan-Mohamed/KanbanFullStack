import React from 'react'
import ReactDOM from 'react-dom/client'
import './index.css'
import App from './App'
import reportWebVitals from './reportWebVitals'
import { Provider } from 'react-redux'
import { store } from './app/store'
import { ApolloClient, InMemoryCache, ApolloProvider, HttpLink } from '@apollo/client';


const client = new ApolloClient({
  link: new HttpLink({
    uri: "http://localhost:8888/graphql", // Adjust to match your PHP GraphQL handler
    fetchOptions: {
      method: "POST", // GraphQL requests should be sent as POST
    },
  }),
  cache: new InMemoryCache({
    addTypename: false
  }),
});

const root = ReactDOM.createRoot(document.getElementById('root'))
root.render(
  <>
    <ApolloProvider client={client} >
      <Provider store={store}>
        <App />
      </Provider>
    </ApolloProvider>
  </>
)

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals()
