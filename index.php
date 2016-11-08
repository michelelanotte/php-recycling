<?php $title = 'Home'; require('./partials/head.php'); ?>

<html>
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  
  <body>
	<div class="container">
	  <h1>Recycle in <br> Barletta </h1>
	  
	  <div class="search">
		<form action="/result.php" method="GET">
          <input class="search_bar" type="text" name="object" placeholder="Cerca oggetto...">
		  <input class="submit" type="submit" value="Cerca">
	    </form>
	  </div>
	  <h3>Riciclare è importante, ma non sempre facile. Recycle in Barletta ti aiuta: non sai dove mettere qualcosa? 
		    Inserisci l’oggetto in questa pagina, noi ti diremo dove metterlo! <h3>
	</div>
  </body>
</html>

<?php require('./partials/tail.php'); ?>