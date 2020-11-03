import React, { useState } from 'react'

export const Counter = () => {

const [count, setCount] =useState(0);

const Increment = () =>{
    setCount(count + 1);
}
const Decrement = () => {
    setCount(count -1);
}
    return <div>
        <div>
            {count}
        </div>
        <button type="button" onClick={Decrement}>-</button>
        <button type="button" onClick={Increment}>+</button>
    </div>
}