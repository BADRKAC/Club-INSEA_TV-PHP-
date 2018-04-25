<?php


 @$con=mysql_connect("localhost","root","");
@mysql_select_db("inseatv",$con);

    $n=$_POST['name'];
    $e=$_POST['email'];
    
	
 	$m=$_POST['message'];
	
      	
	
	
	
	
	

$req = "select ens,nom,email,msg from  tv where nom='$n' OR email='$e' OR  msg='$m'  ";
 
$res=mysql_query($req);

while($row=mysql_fetch_assoc($res,MYSQL_ASSOC))
{
	
	
	
	                              echo $row["ens"]."\t";
                                  echo $row["nom"]."\t";
                                  echo $row["email"]."\t";
                                  echo $row["msg"]."<br>";
                                 
	
	//$lig="<option value=".$data['ens'].">".$data['abr']."</option>";
	//echo $lig ;
}

mysql_close();
//header("location:Ajout-Enseignementt.php");
?>

</html>