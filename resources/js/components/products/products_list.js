import React, {Component} from 'react';
import ReactDOM from 'react-dom';
import ProductCart from './product_cart';

class ProductsList extends Component {
    constructor () {
        super()
        this.state = {
          products: [
            {
                id:       1,
                name:     'Kui Ye Chen’s AirPods',
                price:    250,
                attr:     null,
                link:     '/products/1',
                image:    '/uploads/images/product-1.jpg'
            },
            {
                id:       2,
                name:     'Air Jordan 12 gym red',
                price:    300,
                attr:     'sale',
                link:     '/products/2',
                image:    '/uploads/images/product-2.jpg'
            },
            {
                id:       3 ,
                name:     'Cyan cotton t-shirt',
                price:    25,
                attr:     null,
                link:     '/products/3',
                image:    '/uploads/images/product-3.jpg'
            }
          ],
          grid_sizes: {
              default:  null,
              xs:       null,
              sm:       6,
              md:       null,
              lg:       4,
              xl:       3,
          }
        }
      }

      render() {
        const { products, grid_sizes } = this.state
        return (
            <div className="row">
                {products.map(product => (
                        <ProductCart product={product} grid_size={grid_sizes} key={product.id}/>
                        // <div key={product.id}>{product.name}</div>
                ))}
            </div>
        )
      }
}

export default ProductsList;