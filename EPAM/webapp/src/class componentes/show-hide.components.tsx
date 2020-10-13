import { relative } from 'path';
import React from 'react';
import { Helper } from './helper.component';

interface ShowState{
    isShown: boolean
}

export class ShowHide extends React.Component<any,ShowState>{

constructor(props: any){
    super(props);
    this.state = {
        isShown: false,

    }
}
    ShowText = () => { 
        this.setState({
           isShown: !this.state.isShown
        })
    }
    buttonValue =() =>{
        if(this.state.isShown)
        {
            return <button type="button" onClick={this.ShowText}>Hide</button>
        }else
        {
            return <button type="button" onClick={this.ShowText}>Show</button>
        }
    }

    render():JSX.Element{
        return<div>
            <Helper text="This is a component wchich shows or hide the sample text"/>
            {this.buttonValue()}
            {this.state.isShown ? <div>This is a sample string</div>: null}
        </div>
    }
}