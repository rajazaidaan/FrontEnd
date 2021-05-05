<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Mobile Legends BANG BANG</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav ml-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Service</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="#">Contac</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/ml1.jpg" alt="sunrise" width="1600" height="600">
      <div class="carousel-caption">
        <h3>Mobile Legends</h3>
        <p>BANG BANG</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/ml2.jpg" alt="nature" width="1600" height="600">
      <div class="carousel-caption">
        <h3>Mobile Legends</h3>
        <p>BANG BANG</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/ml3.jpg" alt="island" width="1600" height="600">
      <div class="carousel-caption">
        <h3>Mobile Legends</h3>
        <p>BANG BANG</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div class="py-3">
		<h2 class="text-center">Mobile Legends</h2>
	</div>
	<div class="container-fluid">
	<div class="row">
		<div class="col-lg-10 col-md-6 col-12">
			<img src="image/ml4.jpg" class="img-fluid aboutimg">
			</div>
			<div class="col-lg-6 col-md-6 col-12">
			<h2 class="display-5">Hero Yang berada di Mobile Legends</h2>
			<p class="py-3">Berikut adalah daftar hero pada Mobile Legends</p>
			<a href="about.php" class="btn btn-success">baca selengkapnya</a>
		</div>
	</div>
</section>

<section class="my-5">
<div class="py-3">
	<h2 class="text-center">Hero Mobile Legends</h2>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
  					<img class="card-img-top" src="image/hero1.jpg" alt="Card image">
  					<div class="card-body">
   	 					<h4 class="card-title">John Doe</h4>
    					<p class="card-text">Some example text.</p>
   						 
  						</div>
					</div>
				</div>

			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
  					<img class="card-img-top" src="image/hero2.jpg" alt="Card image">
  					<div class="card-body">
   	 					<h4 class="card-title">John Doe</h4>
    					<p class="card-text">Some example text.</p>
  						</div>
					</div>
				</div>

			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
  					<img class="card-img-top" src="image/hero3.jpg" alt="Card image">
  					<div class="card-body">
   	 					<h4 class="card-title">John Doe</h4>
    					<p class="card-text">Some example text.</p>
   						 
  						</div>
					</div>
				</div>


			</div>
		</div>
</section>


<footer>
	<p class="p-2 bg-primary text-white text-center">©Copy Right By Raja Zaidaan</p>
</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>