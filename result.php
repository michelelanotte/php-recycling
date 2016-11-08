<?php $title = 'Result'; require('./partials/head.php'); ?>

<html>
  <head>
    <script language="JavaScript" type="text/JavaScript">
	  function Return_home()
	  {
		window.location.href = "index.php";
	  }
	</script>
  </head>
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="assets/css/result.css">
  
  <body>
    <div align=right class="container">
	  <h1>Recycle in<br>Barletta </h1>
	  <div class="result">
		<h2>Ricicla:<br>come:</h2>
		<button onclick="Return_home()" class="return_home">Indietro</button>
	  </div>
	</div>
  </body>
</html>

<?php require('./partials/tail.php'); ?>
