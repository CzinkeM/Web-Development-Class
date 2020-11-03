import { count } from 'console';
import { relative } from 'path';
import React, { useState } from 'react';
import { Helper } from './helper.component';


export const ShowHide = () =>{

    const [count, setter] =useState(false);
    const ShowText = () => { 
        setter(!count);
    }
    const buttonValue =() =>{
        if(count)
        {
            return <button type="button" onClick={ShowText}>Hide</button>
        }else
        {
            return <button type="button" onClick={ShowText}>Show</button>
        }
    }
    return<div>
            <Helper text="This is a component wchich shows or hide the sample text"/>
            {buttonValue()}
            {count ? <div>This is a sample string</div>: null}
        </div>
}