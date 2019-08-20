<?php
    
    require_once 'address.php';
    
    $address_id = "";
    
    $address_line_1 = "";
    
    $address_line_2 = "";
	
	$address_line_3 = "";
	
	$address_line_city = "";
    
    if(isset($_POST['id'])){
        
        $address_id = $_POST['id'];
        
	}
    
    if(isset($_POST['line1'])){
        
        $address_line_1 = $_POST['line1'];
        
	}
    
    if(isset($_POST['line2'])){
        
        $address_line_2 = $_POST['line2'];
        
	}
	
	if(isset($_POST['line3'])){
        
        $address_line_3 = $_POST['line3'];
        
	}
	
	if(isset($_POST['city'])){
        
        $address_line_city = $_POST['city'];
        
	}
    
    $addressObject = new Address();
    
    // Save address
    
	/*   if(!empty($address_id) && !empty($address_line_1) && !empty($address_line_2) && !empty($address_line_3) && !empty($address_line_city)){
		
		
        $json_save_address = $addressObject->save_address($address_id,$address_line_1,$address_line_2,$address_line_3,$address_line_city);
        
        echo json_encode($json_save_address);
        
	} */
	
	if(!empty($address_id) && !empty($address_line_1)){
		
		$json_save_address = $addressObject->save_address($address_id,$address_line_1,$address_line_2,$address_line_3,$address_line_city);
		
		echo json_encode($json_save_address);
	}
	
	
	
?>