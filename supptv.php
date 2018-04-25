<?php


@$con=mysql_connect("localhost","root","");
@mysql_select_db("inseatv",$con);

    
$n=$_GET['name'];
   
	

$req = "delete from tv where ens=$n" ;
echo($req);
mysql_query($req);
mysql_close();
header("location:ListeUsertv.php");
?>