<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of querySql
 *
 * @author haudt
 */
class querySql {
 var $selectOder = "SELECT Orders.id as idOrder, sum(product_order.quantity) as quantity,
 Orders.total as total,  Users.fullname as fullname ,Users.address as address, Users.id as idUser, 
 Orders.status
FROM Orders
INNER JOIN Users
ON Orders.idUser= Users.id
INNER JOIN product_order
ON product_order.id_Order = orders.id
group by product_order.id_order
order by Orders.id";
 var  $selectOrderdetail = "SELECT Orders.id as IdOrder,Users.fullname, Users.phone as phone, Users.email as email, 
Users.address as address,products.id as idProduct,
products.name as nameProduct ,  products.price as price, products.saleprice as saleprice,
 product_order.quantity
FROM Orders
INNER JOIN Users
ON Orders.idUser= Users.id
INNER JOIN product_order
ON product_order.id_Order = orders.id
INNER JOIN products
ON product_order.id_Product = products.id";
 var $OrderdetailCustomer = 'SELECT Orders.id as IdOrder, Users.fullname, Users.phone as phone, Users.email as email, 
        Users.address as address, Orders.dateOrder
        FROM Orders
        INNER JOIN Users
        ON Orders.idUser= Users.id
        and Orders.id =58 group by IdOrder';
 var $sqlOrderdetailProduct = "SELECT Orders.id as IdOrder,products.id as idProduct,
products.name as nameproduct ,  products.price as price, products.saleprice as saleprice,
 product_order.quantity
FROM Orders
INNER JOIN product_order
ON product_order.id_Order = orders.id
INNER JOIN products
ON product_order.id_Product = products.id 
and Orders.id = 58";
}
