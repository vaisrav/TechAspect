<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        /*Creating variables*/
        $donorname = $_POST["donorname"];
        $age = $_POST["age"];
        $address = $_POST["address"];
        $emailid = $_POST["emailid"];
	 $mobile = $_POST["mobile"];
	 $bloodgroup = $_POST["bloodgroup"];	
	 $gender = $_POST["gender"];

        $dbhost = "localhost"; 
        $username = "root";
        $password = "";
        $dbname = "mySQL";

        $mysql = mysqli_connect($dbhost, $username, $password, $dbname); 
        $query = "INSERT INTO donordetails (name,age,address,email,mobile,bloodgroup,gender) VALUES $name, $age, $address, $email, $mobile, $bloodgroup, $gender";
        mysqli_query($mysql, $query);
    }
?>
<!DOCTYPE html>
<html>
<body>
<h2>Blood donor details</h2>
<form>
  Donor name:<br>
  <input type="text" name="donorname">
  <br>
  Age:<br>
  <input type="text" name="age"><br>
  Address:<br>
  <input type="text" name="address"><br>
  Email Id:<br>
  <input type="text" name="emailid"><br>
  Mobile:<br>
  <input type="text" name="mobile"><br>
  Blood Group:<br>
  <input type="text" name="bloodgroup"><br>
  Gender:<br>
  <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other<br><br>
  <input type="submit" value="Submit">
</form>
</body>
</html>