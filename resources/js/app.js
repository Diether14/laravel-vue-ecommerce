import React, { Component } from 'react'
import ReactDOM from 'react-dom'
import { BrowserRouter, Route, Switch } from 'react-router-dom'
import Header from './components/parts/header';
import ProductsList from './components/products/products_list';

class App extends Component {
  render () {
    return (
      <BrowserRouter>
        <div>
          <Header />
        </div>
        <Switch>
          <Route exact path='/' component={ProductsList} />
        </Switch>
      </BrowserRouter>
    )
  }
}

const rootElement = document.getElementById('app');

ReactDOM.render(
  <App />,
  rootElement 
)