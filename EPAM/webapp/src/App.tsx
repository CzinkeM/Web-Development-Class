import React from 'react';
import logo from './logo.svg';
import './App.css';
import {Header}from './class componentes/header.component';
import { ShowHide } from './class componentes/show-hide.components';

function App() {
  return (
    <div className="App">
      <Header/>
      <ShowHide/>
    </div>
  );
}

export default App;