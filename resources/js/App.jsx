import React from 'react';
import ReactDOM from 'react-dom/client';

export default function App()
{
    return (
        <>
            <h1 className="text-3xl font-bold text-center">
                 You have Successfully Set up Laravel With React (Vite)
            </h1>       
        </>
    )
}


document.addEventListener("DOMContentLoaded", function() {
    const root = ReactDOM.createRoot(document.getElementById('root'));
    root.render(<App />);
});
