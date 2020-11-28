<?php 

$data = file_get_contents("data/pizza.json") ;
$menu = json_decode($data, true);

$menu = $menu['menu'];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
  	 <a class="navbar-brand" href="#">
  	 	<img src="img/logo.png" width="120">
  	 </a>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarNav" aria-label="toggle navigation">
      	<span class="navbar-toggler-icon"></span>
      </button>
      <div class = navbar-nav>
      	<a class= "collapse navbar-collapse"href="#">Home</a>
      </div>
    </div>
</div>
</nav>
<div class="container">
	<div class="row mt-3">
		<div class="col">
			<h1>All menu</h1>
		</div>
	</div>

	<div class="row mt-3">
		<?php foreach ($menu as $m): ?>
			<div class="col-md-4">
				<div class= card mb-3>
					<img src="img/pizza/<?= $m['gambar'] ?>" class="card-img-top">
					<div class="card-body">
						<h5 class="card-title"><?=$m['nama'] ?></h5>
						<p class="card-text"><?=$m['deskripsi'] ?></p>
						<h5 class="card-title"><?=$m['harga'] ?></h5>
						<a href="#" class="btn btn-primary"> Order! </a>
					</div>
				</div>
			</div>
		<?php endforeach ?>
	</div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>