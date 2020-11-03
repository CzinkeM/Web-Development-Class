import React from 'react';

//Generikus típusok
interface TextProps{
    text: string
}

export class Helper extends React.Component<TextProps> {

    constructor(props: any){
        super(props);
    }

    render():JSX.Element{
    return <h2>{this.props.text}</h2>
    }
}