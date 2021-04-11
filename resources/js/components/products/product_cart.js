import axios from 'axios'
import React, { Component } from 'react'
import { Link } from 'react-router-dom'

class ProductCart extends Component {
    constructor (props) {
        super(props)
        this.state = {
          product: this.props.product,
          grid_size: this.props.grid_size,
        }
      }

      render() {
        const {grid_size, product} = this.state;
          return (
            <div className={`${grid_size['default'] ? `col-${grid_size['default']}` : ""} ${grid_size['sm'] ? `col-sm-${grid_size['sm']}` : ""} ${grid_size['xs'] ? `col-xs-${grid_size['xs']}` : ""} ${grid_size['md'] ? `col-md-${grid_size['md']}` : ""} ${grid_size['lg'] ? `col-lg-${grid_size['lg']}` : ""} ${grid_size['xl'] ? `col-xl-${grid_size['xl']}` : ""}`}>
              <div className="product text-center">
                <div className="position-relative mb-3">
                  <div className="badge text-white badge-"></div><a className="d-block" href="detail.php"><img className="img-fluid w-100" src={product.image} alt="..."></img></a>
                  <div className="product-overlay">
                    <ul className="mb-0 list-inline">
                      <li className="list-inline-item m-0 p-0"><a className="btn btn-sm btn-outline-dark" href="#"><i className="far fa-heart"></i></a></li>
                      <li className="list-inline-item m-0 p-0"><a className="btn btn-sm btn-dark" href="cart.php">Add to cart</a></li>
                      <li className="list-inline-item mr-0"><a className="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal"><i className="fas fa-expand"></i></a></li>
                    </ul>
                  </div>
                </div>
                <h6> <a className="reset-anchor" href="detail.php">{product.name}</a></h6>
                <p className="small text-muted">{product.price}</p>
              </div>
            </div>
          )
      }
}

export default ProductCart;