<?php
    
    include_once 'db_connect.php';
    
    class Address{
        
        private $db;
		
		private $db_table="table_addresses";
		
		public function __construct(){
            $this->db = new DbConnect();
		}
		
		public function save_address($address_id,$address_line_1,$address_line_2,$address_line_3,$address_line_city){
			
			$query = "insert into ".$this->db_table." (address_id, address_line_1, address_line_2, address_line_3, address_line_city) values ('$address_id', '$address_line_1', '$address_line_2', '$address_line_3', '$address_line_city')";
			
			$inserted = mysqli_query($this->db->getDb(), $query);
			
			if($inserted == 1){
				
				$json['success'] = 1;
				$json['message'] = "Successfully registered the user";
				
                }else{
				
				$json['success'] = 0;
				$json['message'] = "Error in registering. Probably the username/email already exists";
				
			}
			
			mysqli_close($this->db->getDb());
			
			return $json;
	}
	} 
?>