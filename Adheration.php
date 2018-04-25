 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <title>Club INSEA TV</title>
  <meta name="description" content="CLUB INSEA TV">

<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<link rel="icon" type="image/png" href="favicon.png">
</head>

<body>
<div id="header" class="container">
	<div id="logo">
    <img src="images/logo.png" width="65" height="45"/>
    <h2><a href="home.html">Club INSEA TV</a></h2>

	</div>
	<div id="menu">
		<ul>
      <li class="current_page_item"><a href=# accesskey="1" title="">Homepage</a></li>
			<li><a href="objectifs.php" accesskey="2" title="">Objectifs</a></li>
			<li><a href="Evenements.php" accesskey="3" title="">Evenements</a></li>
			<li><a href="Adheration.php" accesskey="4" title="">S'adherer</a></li>
      <li>  <a href="deconnecter.php">Deconnecter</a></li>
		</ul>
	</div>
</div>

 <section id="club">

   	<div class="row section-intro">
   		<div class="col-twelve with-bottom-line">
<div id="extra" class="container">
	<div class="title">
   		
   			<h1>Formulaire</h1><br> <br>
			<form method=post action=ajouttv.php >
			
			
			Name: <input type=text    name=name <br> <br><br> 
			Email: <input type=text  name=email> <br>	<br><br> 
	
		
		<div class="row">
        <label for="message">  Message:</label><br />
        <textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
        </div>

           <button type='submit'>Valider</button>
		
</form>
	
				<a href="ListeUsertv.php"> <br> <br> La liste des utilisateurs </a>
				<a href="searchtv.php"> <br> <br> Recherche </a>
                
        
   	</div>
		</div>
   </div>
   </div>
   </section>
   <

<div id="copyright" class="container">
	<p>&copy; BADR KACIMI CHAIMAE BOUAJAJ. All rights reserved. 2017|Dev Web | </p>
</div>

</body>
</html>
