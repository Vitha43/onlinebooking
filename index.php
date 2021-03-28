<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style2.css">

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">BOOKING</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active"  href="bikebooking.php">BIKE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="carbooking.php">CAR</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"  href="railbooking.php">RAILWAYS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="airbooking.php">AIRWAYS</a>
        </li>


        <li class="nav-item">
          <a class="nav-link active" href="about.php" >ABOUT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="ourservices.php" >OUR SERVICES</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<h1> welcome to happy journey</h1>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/cc1.jpg" alt="NIT K" width="500" height="500">
      <div class="carousel-caption">
        <h3>BOYS HOSTEL</h3>
        <p>We had such a great time in NITK</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/cc2.jpg" alt="SURATHKAL BEACH" width="1100" height="500">
      <div class="carousel-caption">
        <h3>NITK BEACH</h3>
        <p> enjoy the day with best memories, NITK</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/cc3.jpg" alt="CSE Department" width="1100" height="500">
      <div class="carousel-caption">
        <h3>CSE DEPARTMENT</h3>
        <p>we are the !!!CODERS!!!</p>
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

<h1> welcome to happy journey</h1>

<!DOCTYPE html>
<?php require_once("config.php");
if(!isset($_SESSION["login_sess"]))
{
    header("location:login.php");
}
  $email=$_SESSION["login_email"];
  $findresult = mysqli_query($dbc, "SELECT * FROM users WHERE email= '$email'");
if($res = mysqli_fetch_array($findresult))
{
$username = $res['username'];
$fname = $res['fname'];
$lname = $res['lname'];
$email = $res['email'];
}
 ?>
<html>
<head>
    <title> My Account - Techno Smarter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
        </div>
        <div class="col-sm-6">
     <form action="login_process.php" method="POST">
  <div class="login_form">
 <img src="https://technosmarter.com/assets/images/logo.png" alt="Techno Smarter" class="logo img-fluid"> <br>
     <p><a href="logout.php"><span style="color:red; float: right;">Logout</span> </a></p>
          <p> Welcome! <span style="color:#33CC00"><?php echo $username; ?></span> </p>
          <table class="table">
          <tr>
              <th>First Name </th>
              <td><?php echo $fname; ?></td>
          </tr>
          <tr>
              <th>Last Name </th>
              <td><?php echo $lname; ?></td>
          </tr>
          <tr>
              <th>Username </th>
              <td><?php echo $username; ?></td>
          </tr>
           <tr>
              <th>Email </th>
              <td><?php echo $email; ?></td>
          </tr>
          </table>
        </div>
        <div class="col-sm-3">
        </div>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</html>


<section class ="my-3">
    <div class="py-3">
        <h2 class="text-center">ABOUT US</h2>
    </div>
    <div class="container-fluid">
        <div class ="row">
            <div class="col-lg-6 col-md-6 col-12">
                <img src="images/cc4.jpg" class="img-fluid aboutimg">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <h2 class="display-4"> VITHAL MHETRE.</h2>
                <p class="py-3">Hi everyone,
                  i am vithal   this website just for practical purpose. i am  student from NATIONAL INSTITUTE OF TECHNOLOGY (karnataka ) MANGALORE.
                  roll no. 191CS262  in COMPUTER SCIENCE AND ENGINEERING DEPARTMENT.
                thank you all for visiting here.......</p>
                <a href="about.php" class="btn btn-success"> check more </a>
            </div>
        </div>
    </div>
</section>


    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">GALLARY</h2>
        </div>
        <div class ="container-fluid">
            <div class ="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/cc9.jpg" class="img-fluid pb-2">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/cc10.jpg" class="img-fluid pb-2">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/cc11.jpg" class="img-fluid pb-2">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/cc12.jpg" class="img-fluid pb-2">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/cc13.jpg" class="img-fluid pb-2">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/cc14.jpg" class="img-fluid pb-2">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/cc15.jpg" class="img-fluid pb-2">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/cc16.jpg" class="img-fluid pb-2">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/cc17.jpg" class="img-fluid pb-2">
                </div>

            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center"> FEEDBACK</h2>
        </div>

        <div class="container">
        <h3>Request or Submit feedback</h3>
        <form action="form-process.php" method="POST">
            <div class="form-group">
                <label for="firstname">Firstname</label>
                <input type="text" name="firstname" id="firstname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" name="lastname" id="lastname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" name="phone" id="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <input type="text" name="message" id="message" class="form-control" required>
            </div>
            <div class="form-group">
        <button class="btn btn-success" type="submit">Submit</button>
        <button class="btn btn-danger" type="reset">Reset</button>
    </div>
        </form>
    </div>
    </section>
    <footer>
        <p class="p-3 bg-dark text-white text-center"> @call_me_ra_0ne</p>
    </footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>
