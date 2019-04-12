


<!-- This works, but you need to have an instance of adoption branch that already has an admin -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Staff <Entry></Entry></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Enter Clients </h2>
  <form class="form-horizontal" method = "post" action="<?php echo $_SERVER['PHP_SELF'];?>">
   
   <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Email:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" placeholder="Enter email" name="email">
      </div>
    </div>
           
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Street:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" placeholder="Enter Street" name="street">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">City:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" placeholder="Enter City" name="city">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Province:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" placeholder="Enter Province" name="province">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Country:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" placeholder="Enter Country" name="country">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Phone Number:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" placeholder="Enter Phone Number" name="phoneNumber">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">First Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" placeholder="Enter First Name" name="firstName">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Last Name:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" placeholder="Enter Last Name" name="lastName">
      </div>
    </div>
     <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Age:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" placeholder="Enter Age" name="age">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
        <a href="searchClient.php"> Go to Client Table </a>    
        <a href="adoptionCentreLanding.php"> Go to Landing Page </a>    

      </div>
    </div>
  </form>
</div>

</body>
</html>
   

<?php
  // Connecting to database
  include('dbconnection.php');

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {   
      $email = $_POST['email'];
      $street = $_POST['street'];
      $city = $_POST['city'];
      $province = $_POST['province'];
      $country = $_POST['country'];
      $phoneNumber = $_POST['phoneNumber'];
      $firstName = $_POST['firstName'];
      $lastName = $_POST['lastName'];
      $age = $_POST['age'];
      

      
    if (empty($email) || empty($street) || empty($city) || empty($province) || empty($country)|| empty($phoneNumber) || empty($firstName) || empty($lastName) || empty($age)) {
      echo " Please enter all the fields.";
    } else {
      // Query that adds all this information into the staff table
      $query = "INSERT INTO client (client_id, email, street, city, province, country, phone_number, first_name, last_name, age)
      VALUES ('NULL', '$email', '$street', '$city', '$province', '$country', '$phoneNumber', '$firstName', '$lastName', '$age')";

      $runQuery = mysqli_query($connection, $query);

      if($runQuery) {
          echo "<br>Client added to client table.";
      }
      else {
          echo "<br>ERROR: Client not added to client table.";
      }


    }
  }



  mysqli_close($connection);
?>
