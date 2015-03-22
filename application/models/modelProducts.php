<?php
class modelProducts extends CI_Model {
	 function add_products($products)
     {
         $query = "INSERT INTO products (quantity, description, price) VALUES (?,?,?)";
         $values = array($products['quantity'], $products['description'], $products['price']); 
         return $this->db->query($query, $values);
     }
      function add_customers($customers)
     {
         $query = "INSERT INTO customers (name, address, created_at) VALUES (?,?,?)";
         $values = array($customers['name'], $customers['address'], 'NOW()' ); 
         return $this->db->query($query, $values);
     }
     function get_all_products()
     {
     	return $this->db->query("SELECT * FROM products")->result_array();
     }
      function get_all_customers()
     {
     	return $this->db->query("SELECT * FROM customers")->result_array();
     }
    function clear_cart()
     {
     	return $this->db->query("TRUNCATE TABLE products");
     }
}
?>