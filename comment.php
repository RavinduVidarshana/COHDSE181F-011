<html>
<head><title>Index-COHDSE181F-011</title><head/>
<body bgcolor="#96CFE0">
<h1>Guest box</h1>

<form name="comment" method="post" action="#" >
<h3>---------------------------------------------------------------<h3/>
<label>Name<label/><input type ="text" name= "name"/>
<label><h3>Comment :</h3><label/>

<textarea cols="55" rows="50" placeholder="your comment please" name="comm" ></textarea><br>
  <input type="submit" name="btncom" value=" Send  comment" />
  
 </form>
<?php

if(isset($_POST["btncom"]))
{     $name = $_POST["name"];
	//$type = $_POST["user"];
	$comment = $_POST["comm"];
	
	$con= mysqli_connect("localhost","root","");
	mysqli_select_db($con,"qwe");
	$sql = "INSERT INTO comment (	user, comment) VALUES('$name','$comment')";
	$result = mysqli_query($con,$sql);
	
	echo"LEATEST COMMENNT ".$comment;
	
}

?>


</body>
</html>