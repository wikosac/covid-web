<?php 

include 'config.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$name = $_POST['name']; // Get Name from form
	$email = $_POST['email']; // Get Email from form
	$comment = $_POST['comment']; // Get Comment from form

	$sql = "INSERT INTO comments (name, email, comment)
			VALUES ('$name', '$email', '$comment')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Comment added successfully.')</script>";
	} else {
		echo "<script>alert('Comment does not add.')</script>";
	}
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/main.css">


    <title>Covid 19 cases!</title>
</head>
<body>

<header class="header">
    <nav class="navbar navbaro fixed-top navbar-expand-lg py-3">
        <div class="container"><a href="#" class="navbar-brand text-uppercase ">Covid 19 Center</a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
            
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="#" class="nav-link text-uppercase ">Home <span class="sr-only">(current)</span></a></li>
								<li class="nav-item"><a href="kasus.html" class="nav-link text-uppercase ">Kasus</a></li>
                    <li class="nav-item"><a href="edukasi.html" class="nav-link text-uppercase ">Edukasi</a></li>
                    <li class="nav-item"><a href="edukasi.html#vaksins" class="nav-link text-uppercase ">Vaksinasi</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<!-- carousel -->
<div id="carousse" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/slid1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slid2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/slid3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carousse" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousse" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- content -->
<div class="container">
    <a class="maintitle text-center">Kasus harian Covid</a>
    <!-- cardoo -->
    <div class="card-deck">
  <div class="card card-info border-0 p-3">
    <img class="card-img-top mx-auto" src="images/coronavirus.png" alt="Card image cap">
    <div class="card-body">
      <p class="card-text text-center infocard positifcard"></p>
      <h5 class="card-title text-center">Positif</h5>
      <p class="card-text"><small class="text-muted updated-info"></small></p>
    </div>
  </div>

  <div class="card card-info border-0 p-3">
    <img class="card-img-top mx-auto" src="images/healthcare.png" alt="Card image cap">
    <div class="card-body">
      <p class="card-text text-center infocard sembuhcard">100000</p> 
      <h5 class="card-title text-center">Sembuh</h5>
      <p class="card-text"><small class="text-muted updated-info"></small></p>
    </div>
  </div>
  <div class="card card-info border-0 p-3">
    <img class="card-img-top mx-auto" src="images/dead-body.png" alt="Card image cap">
    <div class="card-body">
      <p class="card-text text-center infocard tewascard">100000</p>
      <h5 class="card-title text-center">Meninggal</h5>
      <p class="card-text"><small class="text-muted updated-info"></small></p>
    </div>
  </div>

</div>
  <!-- endcard -->
  <!-- vaksinasi -->

    <div class="card card-info col-md- mx-auto mt-4">
      <img class="card-img-top mx-auto" src="images/injection.jpg" alt="Card image cap" style="max-width: 200px">
      <div class="card-body">
        <div class="row">
          <div class="col-6"><p class="vaksintitle">
            Proses Vaksinasi Indonesia
          </p></div>
          <div class="col-6">
            <p class="card-text text-right"><small class="text-muted updated-vaksin">terakhir diupdate</small></p>
          </div>
        </div>
        <div class="progress">
          <div class="progress-bar persen" role="progressbar" style="width: 5%" aria-valuenow="25" aria-valuemin="0"
            aria-valuemax="100"></div>
            </div>
            <div class="row">
              <div class="col-4">
                <p class="vaccdesc">jumlah dosis pertama yang diberikan :</p>
                <p class="numbervacc persenone"><b>10293</b>(23%)</p>
              </div>
              <div class="col-4">
                <p class="vaccdesc">jumlah dosis kedua yang diberikan :</p>
                <p class="numbervacc persentwo"><b>10293</b>(23%)</p>
              </div>
              <div class="col-4">
                <p class="vaccdesc">banyak yang akan menerima :</p>
                <p class="numbervacc penerimaone"><b>10293</b></p>
              </div>

            </div>

      </div>
    </div>

  </div>

<!-- comments  -->
<body>
	<div class="wrapper">
		<form action="" method="POST" class="form">
			<div class="row">
				<div class="input-group">
					<label for="name">Name</label>
					<input type="text" name="name" id="name" placeholder="Enter your Name" required>
				</div>
				<div class="input-group">
					<label for="email">Email</label>
					<input type="email" name="email" id="email" placeholder="Enter your Email" required>
				</div>
			</div>
			<div class="input-group textarea">
				<label for="comment">Comment</label>
				<textarea id="comment" name="comment" placeholder="Enter your Comment" required></textarea>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Post Comment</button>
			</div>
		</form>
		<div class="prev-comments">
			<?php 
			
			$sql = "SELECT * FROM comments";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
			<div class="single-item">
				<h4><?php echo $row['name']; ?></h4>
				<a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
				<p><?php echo $row['comment']; ?></p>
			</div>
			<?php

				}
			}
			
			?>
		</div>
	</div>

<!-- footer -->
<div class="footer mt-5">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <p class="foot-title">Website</p>
        <p class="foot-desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
          Numquam saepe, provident eligendi, reprehenderit sit libero rerum
          quidem pariatur corrupti et porro
          nemo! Distinctio voluptatibus aut accusamus. Ex eligendi quasi vel.

        </p>
      </div>
      <div class="col-sm-3">
        <p class="foot-title">Cara Penggunaan Tanya Q & A
        </p>
        <div class="foot-desc">
          <ul>
            <li>Edukasi</li>
            <li>Tanya Jawab</li>
            <li>Agenda</li>
            <li> Ketentuan Penggunaan Situs </li>
          </ul>

        </div>
      </div>
      <div class="col-sm-3">
        <p class="foot-title">Tim Kami</p>
        <div class="foot-desc">
          <ul>
            <li> Hifdzi Hisan</li>
            <li>Dwiko Indrawansyah</li>
            <li>Tiara Br Siahaan</li>
          </ul>

        </div>
      </div>
    </div>
  </div>
</div>

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="js/main.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>  </body> -->
</html>