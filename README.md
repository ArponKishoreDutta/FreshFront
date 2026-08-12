# 🛒 FreshFront — Grocery Store E-Commerce Website

FreshFront is a PHP and MySQL-based grocery store e-commerce website developed as a web development project.

The project provides a complete online grocery shopping experience with product browsing, user authentication, shopping cart, wishlist, checkout, order management, and an admin panel for managing the store.

---

## 📸 Project Overview

FreshFront is designed as a modern grocery e-commerce platform where customers can:

- Browse grocery products
- Search for products
- View product details
- Add products to their cart
- Manage their wishlist
- Place orders
- View previous orders
- Manage their account

Administrators can manage products, users, orders, customer messages, and administrator profile information.

---

## ✨ Features

### 👤 User Features

- User registration
- User login/logout
- User profile management
- Product browsing
- Product categories
- Product search
- Product details
- Shopping cart
- Wishlist
- Quantity management
- Checkout
- Order placement
- Order history
- Contact form

### 🛍️ Product Features

- Product images
- Product names
- Product categories
- Product descriptions
- Product prices
- Product stock information
- Product search
- Product details page
- Add to cart
- Add to wishlist

### 🔐 Authentication

- User registration
- User login
- Session-based authentication
- User logout
- User profile management

### 🛒 Shopping Cart

- Add products to cart
- Update product quantity
- Remove products
- View cart subtotal
- View total price
- Continue shopping
- Proceed to checkout

### ❤️ Wishlist

- Add products to wishlist
- Remove products from wishlist
- Move/view wishlist products

### 💳 Checkout

- Customer information
- Shipping information
- Order summary
- Order total
- Order placement

### 🛠️ Admin Panel

Administrators can:

- Manage products
- Add products
- Update products
- Delete products
- Manage users
- Manage orders
- View customer contacts
- Update administrator profile

---

## 🎨 Frontend

FreshFront uses a responsive frontend design with:

- Modern grocery-store UI
- Responsive layouts
- Consistent content containers
- Product cards
- Responsive product grids
- Modern navigation
- Responsive forms
- Mobile-friendly layouts
- Light/Dark mode
- Consistent buttons and UI components
- Modern footer

The frontend is built without a JavaScript framework such as React or Vue.

---

## 🌓 Dark Mode

FreshFront includes a light/dark theme system.

The selected theme is stored using browser `localStorage`, allowing the user's theme preference to remain active when navigating between pages.

Dark mode applies to:

- Header
- Navigation
- Product cards
- Forms
- Buttons
- Cart
- Checkout
- Orders
- Footer
- Admin pages
- Other major UI components

---

## 💻 Technologies Used

### Frontend

- HTML5
- CSS3
- JavaScript
- Font Awesome

### Backend

- PHP
- PDO

### Database

- MySQL

### Development Environment

- XAMPP
- Apache
- MySQL
- PHP

### Version Control

- Git
- GitHub

---

## 📁 Project Structure

```text
Web_Project/
│
├── grocery store/
│   │
│   ├── admin_contacts.php
│   ├── admin_header.php
│   ├── admin_orders.php
│   ├── admin_page.php
│   ├── admin_products.php
│   ├── admin_update_product.php
│   ├── admin_update_profile.php
│   ├── admin_users.php
│   │
│   ├── cart.php
│   ├── category.php
│   ├── checkout.php
│   ├── config.php
│   ├── contact.php
│   ├── footer.php
│   ├── header.php
│   ├── home.php
│   ├── login.php
│   ├── logout.php
│   ├── orders.php
│   ├── register.php
│   ├── search_page.php
│   ├── shop.php
│   ├── user_profile_update.php
│   ├── view_page.php
│   ├── wishlist.php
│   │
│   ├── css/
│   │   ├── style.css
│   │   ├── components.css
│   │   └── admin_style.css
│   │
│   ├── js/
│   │   └── script.js
│   │
│   ├── images/
│   │
│   ├── project images/
│   │
│   ├── uploaded_img/
│   │
│   ├── shop_db.sql
│   └── seed_products.php
│
└── README.md
