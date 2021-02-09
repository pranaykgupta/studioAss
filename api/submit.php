<?php
	include("init.php");//Includes all the necessary files

	if($_SERVER['REQUEST_METHOD']=="POST"){
		$messages=array();
		$response=array();

        $typee=clean($_POST['typee']);
        $name=clean($_POST['name']);
		$no_floors=clean($_POST['no_floors']);

		$sql= "SELECT * FROM calc WHERE typee='$typee' AND no_floors='$no_floors'";
		$result=query($sql);

		if(row_count($result)==1){
			$row=fetch_array($result);
            $price=$row['calc_price'];
            $calcid=$row['id'];

            //adding the users info in the 
            $sql2= "INSERT INTO usr(name, price) VALUES ('$name', '$price')";
            $result2 = query($sql2);
            
            //setting the response
            $response['price'] = $price;
			$response['status']=100;
			$response['messages']="Success.";
		}else{
			$response['status']=402;
			$response['messages']="Failed to calculate price.";

		}//End of query failed
		//Sending the final response
		echo json_encode($response);
	}
