<?php 
    require_once("../../core/Init.php");

    $controller= new Controller();

    $request=trim(Input::get("request", "post"));
    echo $request;

    $http_request=str_replace("-", "", $request);
    $errors="";

    $response=array();

    switch($http_request){

        case "newadmin":

            $firstname=trim(Input::get("firstname", "post"));
            $lastname=trim(Input::get("lastname", "post"));
            $email=trim(Input::get("email", "post"));
            $phone=trim(Input::get("phone", "post"));
            $country=trim(Input::get("country", "post"));
            $city=trim(Input::get("city", "post"));
            $username=trim(Input::get("username", "post"));
            $cathegory=trim(Input::get("cathegory", "post"));
            if(Validate::isEmpty($firstname))
                $errors.="first name is empty";

            if(Validate::isEmpty($lastname))
                $errors.="lastname is empty";
          
            
            if(Validate::isEmpty($email))
            $errors.="email is empty";

              
            if(Validate::isEmpty($phone))
            $errors.="phone is empty";

              
            if(Validate::isEmpty($country))
            $errors.="country is empty";

              
            if(Validate::isEmpty($city))
            $errors.="city is empty";

              
            if(Validate::isEmpty($username))
            $errors.="username is empty";

              
            if(Validate::isEmpty($cathegory))
            $errors.="cathegory is empty";

            if(!empty(trim($errors))){

                $response['success'] = "0";
                $response['message'] =  $errors;
    
            } else{
    
                $table="users";

                $usersData=array(

                    'firstname'=>$firstname,
                    'lastname'=>$lastname,
                    'email'=>$email,
                    'phone'=>$phone
                    // 'country'=>$country,
                    // 'city'=>$city,
                    // 'username'=>$username,
                    // 'cathegory'=>$cathegory,
                    // 'status'=>"1"

                );

                $insert=$controller->create("users",$usersData);
    
                if(!$insert){
                    
                    $response['success']="0";
                    $response['message']="An error occured while connecting to the server...Try again later";
                } else{

                    $response['success']="1";
                    $response['message']="Operation completed successfully";
                }



            }
            // echo json_encode($response);

        break;

        case "editadmin":
            $admin_id=trim(Input::get("admin_id", "post"));
            $firstname=trim(Input::get("firstname", "post"));
            $lastname=trim(Input::get("lastname", "post"));
            $email=trim(Input::get("email", "post"));
            $phone=trim(Input::get("phone", "post"));
            $country=trim(Input::get("country", "post"));
            $city=trim(Input::get("city", "post"));
            $username=trim(Input::get("username", "post"));
            $cathegory=trim(Input::get("cathegory", "post"));
            if(Validate::isEmpty($firstname))
                $errors.="first name is empty";

            if(Validate::isEmpty($lastname))
                $errors.="lastname is empty";
          
            
            if(Validate::isEmpty($email))
            $errors.="email is empty";

              
            if(Validate::isEmpty($phone))
            $errors.="phone is empty";

              
            if(Validate::isEmpty($country))
            $errors.="country is empty";

              
            if(Validate::isEmpty($city))
            $errors.="city is empty";

              
            if(Validate::isEmpty($username))
            $errors.="username is empty";

              
            if(Validate::isEmpty($cathegory))
            $errors.="cathegory is empty";

            if(!empty(trim($errors))){

                $response['success'] = "0";
                $response['message'] =  $errors;
    
            } else{
    
                $table="users";

                $usersData=array(

                    'firstname'=>$firstname,
                    'lastname'=>$lastname,
                    'email'=>$email,
                    'phone'=>$phone,
                    'country'=>$country,
                    'city'=>$city,
                    'username'=>$username,
                    'priviledge'=>$cathegory,
                    

                );

                $insert=$controller->update($table, $usersData,$admin_id);
    
                if(!$insert){
                    
                    $response['success']="0";
                    $response['message']="An error occured while connecting to the server...Try agin later";
                } else{

                    $response['success']="1";
                    $response['message']="Operation completed successfully";
                }



            }
            

        break;

    }

    echo json_encode($response);

?>