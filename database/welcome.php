<html>
<header>
<link rel='stylesheet' type='text/css' href='Style.css' />
</header>
<body>
<img src = "splash.png" style = "width:100%"/>
<p class ="cText" >Welcome to CTU!</p>
<img src = "pol.jpg" style ="width:40%;"/><img src = "boks.jpg" style ="width:45%;"/>
<img src = "pret.jpg" style ="width:40%;"/><img src = "girls.jpg" style ="width:45%;"/>
<img src = "ad.jpg" style ="width:40%;"/><img src = "sport.jpg" style ="width:51%;"/>
<?php
  if (isset($_GET['hello'])) {
    session_destroy();
	header("Location:logout.php");
  }
?>

<div style = "width:100%">
<a class ="log" href='welcome.php?hello=true'>Sign Out</a>
</div>
</html>
</body>
</html>