import React from 'react';
import ReactDOM from 'react-dom/client';
import Login from './components/Login/Login';

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
    root.render(<App />);
});
