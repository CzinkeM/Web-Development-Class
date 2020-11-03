import express from 'express';
import path from 'path';
import {createMiddleware} from './simple-middleware-example';    

const app = express();
const DEAFAULT_PORT: number = 5000;
const PORT = DEAFAULT_PORT;
const appDir = path.resolve(__dirname,'../ui');

app.all('/*', (req: express.Request, res: express.Response) => {
    res.sendFile('index.html', {
        root: appDir
    })
})
app.use('/',express.static(appDir));

app.listen(PORT,"0.0.0.0", () => {
    console.log(`server is running on ${PORT}`);
})
