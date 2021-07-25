<?php 
    header('Access-Control-Allow-Origin:*');
    header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
    header('Access-Control-Allow-Methods: GET, POST, PUT');
    header("Content-Type:application/json");

    require_once("../Config/Init.php");
    require_once("../mail/mails/contents/userMailContent.php");
    $response=array();
    // $firstname=trim(Input::get("firstname", "post"));
    // $lastname=trim(Input::get("lastname", "post"));
    // $email=trim(Input::get("email", "post"));
    // $phone=trim(Input::get("phone", "post"));
    // $country=trim(Input::get("country", "post"));
    // $city=trim(Input::get("city", "post"));
    // $username=trim(Input::get("username", "post"));
    // $cathegory=trim(Input::get("cathegory", "post"));
    // $id=trim(Input::get("userId", "post"));
    // $md = new User();
    // $table = "users";
    // try {
    //     $data =array(
    //             "firstname" => $firstname,
    //             "lastname" => $lastname,
    //             "email" => $email,
    //             "phone" => $phone,
    //             "password" => password_hash("123456", PASSWORD_DEFAULT),
    //             "country" => $country,
    //             "city" => $city,
    //             // "priviledge" => $priviledge,
    //             "username" => $username,
    //             "status" => 1,
    //         );
    //         $insert=$md->create($table,$data);
    
    //             if(!$insert){
    //                 $response['error']="An error occured while connecting to the server...Try again later";
    //             } else{
    //                 $response['success']="Operation completed successfully";
    //             }
    //             echo json_encode($response);
    // } catch(Exception $e){
    //     return false;
    // }
    $sql="SELECT * FROM users desc";
    $response = DBConnection::getInstance()->query($sql);
    echo json_encode($response);
?>