<?php
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") 
   {  
        // $url = 'http://localhost/SAAR-Server/login.php';
        $url = 'http://localhost/studioAss/api/submit.php';
        $ch = curl_init($url);
        $data = array(
            'name' => $_POST["name"],
            'typee' => $_POST["typee"],
            'no_floors' => $_POST["no_floors"]
        );
        $payload = http_build_query($data);

        curl_setopt($ch, CURLOPT_POST, true);
        //attach encoded JSON string to the POST fields
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

        //return response instead of outputting
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        //execute the POST request
        $result = curl_exec($ch);
        //close cURL resource
        curl_close($ch);

        $response = json_decode($result,true);
        // echo '<pre>' . print_r($result, true) . '</pre>';    

    // echo $response;
        if($response["status"]==100){  
            $_SESSION['price'] = $response['price'];
            $_SESSION['msg'] = $response['messages'];
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['typee'] = $_POST['typee'];
            $_SESSION['success'] = true;
            $_SESSION['no_floors'] = $_POST['no_floors'];
            header("location: final.php");
        }
        else 
        {
        $_SESSION['success'] = false;
        $_SESSION['msg'] = $response['messages'];
        header("location: final.php");
        }
   }
?>