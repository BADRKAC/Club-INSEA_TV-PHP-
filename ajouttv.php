<?php


@$con=mysql_connect("localhost","root","");
@mysql_select_db("inseatv",$con);

    $n=$_POST['name'];
    $e=$_POST['email'];
    
	
 	$m=$_POST['message'];
	
      	
	

$req = "insert INTO tv VALUES ('','$n','$e','$m')";
 
echo($req);
mysql_query($req);
mysql_close();
header("location:Adheration.php");
?>


