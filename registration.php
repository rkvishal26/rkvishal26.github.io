<?php
session_start();
// header('location:login.php');
$con=mysqli_connect('localhost','root','123456');
mysqli_select_db($con,'userregistration');
$name=$_POST['user'];
$pass=$_POST['password'];
$s="select * from usertable where name='$name'";
$result=mysqli_query($con, $s);
$num=mysqli_num_rows($result);
if($num==1)
{
	$_SESSION['username']='$name';
	 echo "<script>alert('Already in use')</script>";
	

	
}
else
{
	$reg="insert into usertable(name,password) values('$name','$pass')";
	mysqli_query($con,$reg);
    echo "<script>alert('Successfull')</script>";
  
	header('location:login.php');









}



?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	   <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
	<title></title>
</head>
<body>

<!--  <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Already Registered!!</strong>Please try with different username.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  <a href="signup.php"><button>Back</button></a>

</div> -->

<a href="signup.php"><button>Back</button></a>
</body>
</html>





