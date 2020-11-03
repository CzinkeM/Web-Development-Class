import React from 'react';
import logo from './logo.svg';
import './App.css';
import {Header}from './class componentes/header.component';
import { ShowHide } from './class componentes/show-hide.components';
import { Counter } from './class componentes/counter.component';
import { Fetch } from './class componentes/fetch.component';

function App() {
  return (
    <div className="App">
      <Header/>
      <ShowHide/>
      <Counter/>
      <Fetch/>
    </div>
  );
}

export default App;