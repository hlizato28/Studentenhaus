<?php include ('server.php');?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Studenten Haus</title>
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
      <a href="dashboard.php" class="navbar-brand">Studenten Haus</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav">
          <li class="nav-item px-2">
            <a href="dashboard.php" class="nav-link active">Dashboard</a>
          </li>
          <li class="nav-item px-2">
            <a href="auftrag.php" class="nav-link">Auftrag</a>
          </li>
          <li class="nav-item px-2">
            <a href="inventar.php" class="nav-link">Inventar</a>
          </li>
          <li class="nav-item px-2">
            <a href="forum.php" class="nav-link">Forum</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown mr-3">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <i class="fas fa-user"></i> Welcome 
	        <?php  if (isset($_SESSION['username'])) : ?>
    		<strong><?php echo $_SESSION['username']; ?></strong>
    	    	<?php endif ?>
            </a>
            <div class="dropdown-menu">
              <a href="viewprofile.php" class="dropdown-item">
                <i class="fas fa-user-circle"></i> Profile
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a href="login.php" class="nav-link">
              <i class="fas fa-user-times"></i> Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HEADER -->
  <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
            <i class="fas fa-cog"></i> Forum</h1>
            <div class="card-body">
             <a href="anzeige.php" class="btn btn-primary">Anzeige Einfügen</a>
            </div>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="row" id="show">
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	      <script type="text/javascript">
		        $(document).ready(function() {
			          setInterval(function () {
				        $('#show').load('showforum.php')
			          }, 1000);
		        });
	      </script>
    </div>
  </div>

  <!-- FOOTER -->
  <footer id="main-footer" class="bg-dark text-white p-5">
    <div class="container">
      <div class="row">
        <div class="col">
          <p class="lead text-center">
            Copyright &copy;
            <span id="year"></span>
            Studenten Haus
          </p>
        </div>
      </div>
    </div>
  </footer>

  <!--<script src="bootstrap-input-spinner.js"></script>-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
  <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
</body>

</html>