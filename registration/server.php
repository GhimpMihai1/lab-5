<?php
session_start();
include ("functions.php");
include ("connection.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $username = clearString($_POST['username']);
  $password = clearString($_POST['email']);
  $password2 = clearString($_POST['password_1']);
  $fname =  clearString($_POST['password_2']);

  $query = "select * from users where username = '$username' limit 1";
  $check_login = mysqli_query($con,$query);

  if (mysqli_num_rows($check_login) > 0){
      $response = [
          'status' => false,
          'type' => 1,
          'message' => "Asa utilizator deja exista",
          'fields' => ['username']
      ];
      echo json_encode($response);
  }
  else{
      if($username === '' || !filter_var($username, FILTER_VALIDATE_EMAIL)){
          $error_fields[] = 'username';
      }
      if ($password_1 === '' || strlen($password_1) < 8 || strongPassword($password_1)){
          $error_fields[] = 'password';
      }
      if ($password_2 === '' || $password_2 !==$password_1 ){
          $error_fields[] = 'password_1';
      }
  

      if (!empty($error_fields)){
          $response = [
              "status" => false,
              "type" => 1,
              "message" => "Verificati datele si incercati din nou",
              "fields"=> $error_fields
          ];
          echo json_encode($response);
          die();
      }



      $id = random_num(20);
      $query = "INSERT INTO users(id, username, password) values ('$id', '$username', '$password')";
      mysqli_query($con, $query);
      $_SESSION['message'] = "Inregistrare cu succes!";
      $response = [
          "status" => false,
          "message" => "Totul a decurs cu succes!",
      ];
      echo json_encode($response);
  }
}

if($_SERVER['REQUEST_METHOD'] == "POST")
{

    $username = clearString($_POST['username']);
    $password = clearString($_POST['password']);

    $error_fields = [];

    if($username === '' || !filter_var($username, FILTER_VALIDATE_EMAIL)){
        $error_fields[] = 'username';
    }
    if ($password === '' || strlen($password) < 8 || strongPassword($password)){
        $error_fields[] = 'password';
    }
    if (!empty($error_fields)){
        $response = [
          "status" => false,
            "type" => 1,
          "message" => "Verificati datele si incercati din nou",
            "fields"=> $error_fields
        ];
        echo json_encode($response);
        die();
    }



    //read from database
    $query = "select * from users where username = '$username' limit 1";
    $result = mysqli_query($con,$query);

    if ($result)
    {
        if ($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            if ($user_data['password'] == $password)
            {
                $_SESSION['id'] = $user_data['id'];
                $response = [
                  "status" => true
                ];
                echo json_encode($response);
                die;
            }
        }
    }
    $response = [
        "status" => false,
        "message" => "Username sau parola gresita"
    ];
    echo json_encode($response);
}
 
