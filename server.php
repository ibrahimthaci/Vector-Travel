<?php  
  session_start();
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);

  include_once 'db_connection.php';

//if register button is clicked 
if (isset($_POST['register'])) {
  // receive all input values from the form
  $firstName = $_POST['firstName'];
  $lastname = $_POST['lastName'];
  $age = $_POST['age'];
  $email = $_POST['email'];
  $adresse = $_POST['adresse'];
  $state = $_POST['state'];
  $password = $_POST['password'];
  $confirmPassword = $_POST['confirmPassword'];

   // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($firstName)) { array_push($errors, "First Name is required"); }
  if (empty($lastname)) { array_push($errors, "Last Name is required"); }
  if (empty($age)) { array_push($errors, "Age is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($adresse)) { array_push($errors, "Adresse is required"); }
  if (empty($state)) { array_push($errors, "State is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if ($password != $confirmPassword) {
	 array_push($errors, "The two passwords do not match");
  }



  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password_1 = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (firstname, lastname, age, email, address, state, password,role) 
  			  VALUES('$firstName', '$lastname', '$age', '$email' , '$adresse' , '$state', '$password_1', 2)";
		$res = $db->query($query);
    if($res) {
      // redirect to login
      
      header('Location: registersuccess.php');

    } else {
      die("Something went wrong while registering new user");
    }
  } else {
    print_r($errors);
    die();
  }
}else if(isset($_POST['login'])) {
  
  // Kontrolla e të dhënave
  // $email = mysqli_real_escape_string($db, $_POST['email']);
  // $password = mysqli_real_escape_string($db, $_POST['password']);
  $email = $_POST['email'];
  $password = $_POST['password'];
 if (empty($email)) { array_push($errors, "email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }

  // Kontrolla në databazë
  if(count($errors) == 0) {
    $password = md5($password);

    $query = "SELECT * FROM users WHERE email='$email' AND password = '$password' LIMIT 1";
    $res = $db->query($query);
    $user = $res->fetch_array(MYSQLI_ASSOC);
    
    if($user) {
      $_SESSION['user'] = $user;
      // Ridirektimi në member index
      if ($user['role'] == 1) {
        header('Location: admin1.php'); //..members/admin.php //nese dojm me kthy te faqja e vjeter ne members
      }else {
        header('Location: members/user.php');
      } 

    
    } else {
      die("User does not exist!");
    }
  } else {
    print_r($errors);
    die();
  }
}else if (isset($_GET['logout']) ){
  session_destroy();
  header('Location: index.php');
}elseif (isset($_POST['new_reservation'])) {
 $checkin = $_POST['checkin'];
 $checkout = $_POST['checkout']; 
 $rooms = $_POST['rooms']; 
 $guest = $_POST['guest']; 

 if (empty($checkin)) { array_push($errors, "Column required"); }  
 if (empty($checout)) { array_push($errors, "Column required"); }
 if (empty($rooms)) { array_push($errors, "Column required"); }
 if (empty($guest)) { array_push($errors, "Column required"); }

 $user_id = $_SESSION['user']['id'];
  $query = "INSERT INTO rezervimet (id , in_date, out_date, rooms,guests, user_id ) VALUES(null, DATE('$checkin') , DATE('$checkout'), $rooms , $guest, $user_id)";

  $res = $db->query($query);
  if($res) {
    echo "success";
  } else {
    echo "failed";
  }
}elseif (isset($_POST['deleteUser'])) {
  $id = $_POST['id'];
  $query = "DELETE FROM users WHERE id = $id";
  $res = $db->query($query);
  if($res) {
    $response = true;
  } else {
    $response = false;
  }

  echo json_encode($res);
  return;
}elseif (isset($_POST['login-success'])){
   header('Location:login.php');
}else if(isset($_POST['editUser'])) {
     $query = "UPDATE users SET 
     firstname= '$firstname'
     lastname = '$lastname' 
     age = '$age'   
     email = 'email' 
     address = '$address' 
     state = '$state'
     role = '$role'
      WHERE id = $id";
      $res = $db->query($query);
      if($res) {
      $response = true;
      } else {
      $response = false;
      echo json_encode($_POST); 
      return;
}
