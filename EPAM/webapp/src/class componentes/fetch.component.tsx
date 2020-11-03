import React, { useState } from 'react';

interface Response{
    answer: string
    forced: boolean
    image: string
}

export const Fetch = () => {
    const [responese,setResponse] = useState<Response |null>(null);
    const [imageShown, setImageShown] = useState(false);

    const fetching = () => {
        fetch('https://yesno.wtf/api')
        .then(resp => resp.json())
        .then((data: Response) => {
            setResponse(data);
            setImageShown(true);
        })
    }
    const renderGif=() =>{
        return <img src={responese!.image} />
    }

    return <div>
        <button type='button' onClick={fetching}>Fetch</button>
         <div>{imageShown ? renderGif() : null}</div>
    </div>
}