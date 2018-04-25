

<?php
session_start();
if(isset($_COOKIE['user']))
{
	$user = $_COOKIE['user'];
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <title>Club INSEA TV</title>
  <meta name="description" content="CLUB INSEA TV">

<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<link rel="icon" type="image/png" href="images/favicon.png">
</head>

<body>
<div id="header" class="container">
	<div id="logo">
    <img src="images/logo.png" width="65" height="45"/>
    <h2><a href="sess1.php">Club INSEA TV</a></h2>

	</div>
	<div id="menu">
		<ul>
			<<li class="current_page_item"><a href="" accesskey="1" title="">Homepage</a></li>
			<li><a href="objectifs.php" accesskey="2" title="">Objectifs</a></li>
			<li><a href="Evenements.php" accesskey="3" title="">Evenements</a></li>
			<li><a href="Adheration.php" accesskey="4" title="">S'adherer</a></li>
		S
      <li>  <a href="deconnecter.php">Deconnecter</a></li>
		</ul>
	</div>
</div>
<?php

@$con=mysql_connect("localhost","root","");
@mysql_select_db("inseatv",$con);

$req="SELECT * FROM tv" ;
$res=mysql_query($req);

echo "<table border=1 >  <tr>   <td> numero </td > <td>  Name </td>  <td> Email </td>  <td>  Message          </td>      </tr>";

while($data=mysql_fetch_assoc($res))
{

echo " <tr><td>".$data['ens']." </td>  <td> ".$data['nom']."</td>  <td>  ".$data['email']."</td>  <td>  ".$data['msg']." </td>    </tr>";

}
echo "</table>";


?>

<form method=Get   action=supptv.php>
Nom :<select name=name> 
<?php

$req="select nom ,ens from tv" ;
$res=mysql_query($req);
while($data=mysql_fetch_assoc($res))
{
	
	$lig="<option value=".$data['ens'].">".$data['nom']."</option>";
	echo $lig ;
}

mysql_close();
?>
</select>
 <input type=submit name=valider value=Supprimer>
</form>
	

<div id="featured">
	<div class="container">
		<div class="title">

	</div>
  

  <div id="copyright" class="container">
  	<p>&copy;BADR KACIMI CHAIMAE BOUAJAJ. All rights reserved.2017|Dev Web Mr Skalli| </p>
  </div>
  </body>
  </html>



