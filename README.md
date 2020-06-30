<p align="center"><h1>Interview Test (E-commerce Test)<h1></p>



## About

"The client" needs to have a simple e-commerce shop.

This Shop consists of two things, a Client facing and an Admin facing interface.


Client Facing
A landing page to display all the products of the Shop (catalog page).

A page for the details of the products

A checkout page


Admin Facing
A full functional login

A CRUD (Create, Read, Update, Delete) interface for Users

A CRUD interface for Products

## Routes and Endpoints 

Client Facing Routes
The main site will be on the / route

The product details on the /product-name example: /cinnamon-supplement

The checkout process on the /checkout 


Admin Facing Routes
The login needs to be on a /login route (Laravel’s default)

The admin needs to be on a /admin route

The products admin on a /admin/users

The products admin on a /admin/products

## API Routes

You will need to create a REST API, and this API will be consumed for the client and admin facing.

/api/products

/api/users

/api/media (Optional - This is for the product images using Spatie Media Library)

## Dabase

MySQL

Database Name: ecommerce

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
