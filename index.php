  <?php include("dbconnection/connection.php");  ?>


<!DOCTYPE html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ticketing System</title>
  <?php include("assets/css.php"); ?>
  
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/main.css" rel="stylesheet">
</head>

<body id="page-top">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Ticketing</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
              <a class="nav-link js-scroll-trigger"  data-toggle="modal" data-target="#loginmodal" style="cursor: pointer;">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Team</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
 <div id="slides" class="carousel slide carousel-fade" data-ride="carousel">
     <ol class="carousel-indicators">
    <li data-target="#slides" data-slide-to="0" class="active" style="border-radius: 50%; width: 15px; height: 15px;"></li>
    <li data-target="#slides" data-slide-to="1" style="border-radius: 50%; width: 15px; height: 15px;""></li>
  </ol> 
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
        <img class="d-block img-fluid" src="img/background.jpg" alt="First slide" >
    </div>  
    <div class="carousel-item">
        <img class="d-block img-fluid" src="img/background1.jpg" alt="Second slide">
    </div>

  </div>
  <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  <!-- About -->
  <section class="page-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">About Us</h2>
          <br><br>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                  <img class="rounded-circle img-fluid" style="background-color: #fafbfc;" alt="" src="img/tup1.jpg">
              </div>
              <div class="timeline-panel">
                  <div class="timeline-heading"><br>
                  <h4 class="subheading">Our Humble Beginnings</h4>
                </div>
                <div class="timeline-body">
                    <p class="text-muted">
                       We are the first year student's of Technological University of the Philippines,
                       currently taking BS Information Technology section 1B. 
                    </p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" style="background-color: #fafbfc;" alt="" src="img/work.jpg">
              </div>
              <div class="timeline-panel">
                  <div class="timeline-heading"><br>
                  <h4 class="subheading">Our Work</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted"> 
                        A ticketing system is a customer service tool that helps companies manage 
                        their service and support cases. The system creates a "ticket" 
                        which documents customer requests and interactions over time, making it 
                        easier for customer service reps to resolve complicated issues. </p>
                </div>
              </div>
            </li>       
            <li class="timeline-inverted">
              <div class="timeline-image">
                <h4>Be Part
                  <br>Of Our
                  <br>Story!</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section class="bg-light page-section pt-lg-5" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase mt-lg-5">Meet Our Team</h2>
          <br><br>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="team-member">
              <img class="mx-auto rounded-circle" alt="" src="img/team/lean.jpg">
            <h4>Lean Mijares</h4>
            <p class="text-muted">Lead Developer</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://twitter.com/leattos">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/lean.schooldays">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="team-member">
              <img class="mx-auto rounded-circle" alt="" src="img/team/angelou.jpg">
            <h4>Angelou Lucero</h4>
            <p class="text-muted">Team Member</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://twitter.com/AngelouLucero">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/asanes00">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
          
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="team-member">
              <img class="mx-auto rounded-circle" alt="" src="img/team/bryan.jpg">
            <h4>Bryan Bernardo</h4>
            <p class="text-muted">Team Member</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://twitter.com/_bryyyahn">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/brynbtch">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
          <div class="team-member">
              <img class="mx-auto rounded-circle" alt="" src="img/team/piolo.jpg">
            <h4>Piolo Colocado</h4>
            <p class="text-muted">Team Member</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://twitter.com/Piiooollllooooo">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/Piiooollllooooo">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
        
         <div class="col-xl-3 col-md-6 mb-4 ml-sm-auto mt-5">
          <div class="team-member">
              <img class="mx-auto rounded-circle" alt="" src="img/team/roxanne.jpg">
            <h4>Roxanne Hicban</h4>
            <p class="text-muted">Team Member</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://twitter.com/rxnnjnll">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/rxnnjnll">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      
       <div class="col-xl-3 col-md-6 mb-4 mt-5">
          <div class="team-member">
              <img class="mx-auto rounded-circle" alt="" src="img/team/daniel.jpg">
            <h4>Daniel Peregrino</h4>
            <p class="text-muted">Team Member</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://twitter.com/chips_ahoy0_0">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/danielperegrino23">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      
       <div class="col-xl-3 col-md-6 mb-4 mr-sm-auto mt-5">
          <div class="team-member">
              <img class="mx-auto rounded-circle" alt="" src="img/team/veren.jpg">
            <h4>Verendale Leoncio</h4>
            <p class="text-muted">Team Member</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/verendale.leoncio">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
            <br>
        </div>
      </div>
    </div>
  </section>


  
  <!-- Footer -->
  <footer class="footer bg-dark">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
            <a href="http://www.tup.edu.ph/" style="text-decoration: none;">
             <span class="head text-white" style="cursor: pointer;"> Technological University of the Philippines</span></a>
        </div>
      </div>
    </div>
  </footer>


 <script src="assets/jquery/jquery.min.js"></script>
 <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
 <script src="assets/jquery-easing/jquery.easing.min.js"></script>
 <script src="assets/js/agency.js"></script>

 <!-- Login Modal-->
 <div class="login-modal modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-hidden="true">
   <?php include("login.php") ?>
  </div>


</body>

</html>
