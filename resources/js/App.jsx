import React from 'react';
import ReactDOM from 'react-dom/client';
import Login from './components/Login/Login';
import { store } from './app/store';
import { Provider } from 'react-redux';

export default function App()
{
    return (
        <>
            <Login/>       
        </>
    )
}


document.addEventListener("DOMContentLoaded", function() {
    const root = ReactDOM.createRoot(document.getElementById('root'));
    root.render(
    <Provider store={store}>
        <App />
    </Provider>
    );
});
