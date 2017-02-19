<?php
 class DatabaseConnect extends CI_Model
{

   public function __construct()
   {
          parent::__construct();
   }

   //checking if user Exists
   public function checkUserExit($username, $password)
   {
   	$u = "select count(*) as count from of_admins where of_admins.username = '$username' and of_admins.password = '$password'";
     $query = $this->db->query($u);
     return $query->result()[0]->count;
   }

   //Getting User details
   public function getUserDetails($username)
   {
   	$u = "select * from of_admins where of_admins.username = '$username'";
   	$query = $this->db->query($u);
   	return $query->result()[0];
   }

   //get current Orders
   public function getCurrentOrders()
   {
   	$u = "select * from of_purchases where of_purchases.`status` != 'delivered' and of_purchases.`status` != 'cancelled'";
   	$query = $this->db->query($u);
   	return $query->result();
   }

   //get User's name
   public function getUserName($mail)
   {
      $u = "select name from of_users where of_users.mail = '$mail'";
      $query = $this->db->query($u);
      foreach ($query->result() as $key) {
          return $key->name;
      }
   }

   //get Item Name
   public function getItemName($id)
   {
      $u = "select name from of_items where of_items.item_id = $id";
      $query = $this->db->query($u);
      foreach ($query->result() as $key) {
          return $key->name;
      }
   }

   //get Delivered Orders
   public function getDeliveredOrders()
   {
   	$u = "select * from of_purchases where of_purchases.`status` = 'delivered'";
   	$query = $this->db->query($u);
   	return $query->result();
   }

   //get all Orders
   public function getAllOrders()
   {
   	$u = "select * from of_purchases";
   	$query = $this->db->query($u);
   	return $query->result();
   }

   //Start Order
   public function startOrder($id)
   {
   	$data=array(
        'status'=>'startedpreparing');
        $this->db->where('purchase_id',$id);
        $this->db->update('of_purchases',$data);
   }

   //Cancel Order
   public function cancelOrder($id)
   {
   	$data=array(
        'status'=>'cancelled');
        $this->db->where('purchase_id',$id);
        $this->db->update('of_purchases',$data);
   }

   //Intransit Order
   public function deliverStart($id)
   {
   	$data=array(
        'status'=>'intransit');
        $this->db->where('purchase_id',$id);
        $this->db->update('of_purchases',$data);
   }

   //Delivered Order
   public function delivered($id)
   {
   	$data=array(
        'status'=>'delivered');
        $this->db->where('purchase_id',$id);
        $this->db->update('of_purchases',$data);
   }

   //get All Categorys
   public function getCateg()
   {
   	$u = "select distinct category from of_items";
   	$query = $this->db->query($u);
   	return $query->result();
   }

   //Add Item
   public function addItem($name, $categ, $price, $max_maker, $max_user, $min_time, $desc)
      {
          $data = array(
                'name' => $name,
                'category' => $categ,
                'price_per_item' => $price,
                'max_num_maker' => $max_maker,
                'max_num_user' => $max_user,
                'min_time' => $min_time,
                'desc' => $desc
                );
                $this->db->insert('of_items', $data);
      }
}



?>
