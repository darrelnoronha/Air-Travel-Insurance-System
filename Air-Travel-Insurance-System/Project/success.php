<!DOCTYPE html>
<html>
<?php 
include 'conn.php';
$v="";
if (isset($_POST['but'])){
	$a=$_POST["name"];
   $v=rand(1111111111,9999999999);
   $q="update customer set claimno='$v' where phone='$a';";
   mysqli_query($con,$q);
}
?>
<head>
	<title>Claim Payment </title>
<style type="text/css">
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
 
}

.b{
	width:10%;
	
}

.an{
  width:20%;
  padding:1em;
  border:1px solid black;
}

</style>
</head>
<body bgcolor=#92bde7>
<h1><u>Payment Successful !!!</u></h1>
<br>



<p>
<form method="post" action="#"> 
<h3>Enter Your Phone No: <input type="text" id="na" name="name" class="an"></h3>
<button type="submit" name="but" class="btn b">Get Claim No</button>
</form>
</p>
<p>
<h3 align=center>Your Claim Number is :<span><p><?php echo $v; ?></p></span> </h3>

</p>


<form action="user.html">
<input type="submit" class="btn" value="GO TO HOME PAGE">
</form>

</body>
</html>