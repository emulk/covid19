import React from 'react';
import {
  BrowserRouter as Router
} from "react-router-dom";
import { Container } from 'react-bootstrap';
import HeaderCompontent from './HeaderComponent';
import TableComponent from './Tables/TableComponent';
import Footer from './Footer/FooterComponent';
import BackToTopComponent from './Footer/BackToTopComponent';
import 'bootstrap/dist/css/bootstrap.min.css';
import './App.css';

function App() {

  return (
    <Router path="/" >
      <div className="App">
        <Container fluid>
          <HeaderCompontent />
          <TableComponent />
          <Footer />
          <BackToTopComponent />
        </Container>
      </div>
    </Router>
  );
}

export default App;
