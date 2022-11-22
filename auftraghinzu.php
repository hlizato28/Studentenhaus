<?php include('server.php')?>
<?php 
  //session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
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
  <title>Auftrag</title>
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
            <a href="dashboard.php" class="nav-link">Dashboard</a>
          </li>
          <li class="nav-item px-2">
            <a href="auftrag.php" class="nav-link active">Auftrag</a>
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
            <i class="fas fa-clipboard"></i> Auftrag</h1>
        </div>
      </div>
    </div>
  </header>

 <!-- Auftrag -->
 <section id="auftrag">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card">
            <div class="card-header">
              <h4 class="text-dark">Auftrag Formular</h4>
            </div>
            <div class="card-body">
              <form action="auftraghinzu.php" method="POST">
                <?php include('errors.php'); ?>
                <div class="form-group form-row">
                  <div class="col">
                    <label for="vorname">Vorname</label>
                    <input class="form-control form-control-md" type="text" name="vorname">
                  </div>
                  <div class="col"> 
                    <label for="nachname">Nachname</label>
                    <input class="form-control form-control-md" type="text" name="nachname">
                  </div>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control form-control-md" name="email">
                </div>
                <div class="form-group">
                  <label for="telefon">Telefon</label>
                  <input type="text" class="form-control form-control-md" name="telefon">
                </div>
                
                <div class="form-group">
                  <label for="termin">Termin</label>
                  <input type="date" class="form-control form-control-md" name="termin">
                </div>
                <div class="form-group form-row">
                  <div class="col">
                    <label for="einzugsadress">Einzugsadress</label>
                    <input class="form-control form-control-md" type="text" name="einzugsadress">
                  </div>
                  <div class="col"> 
                    <label for="einzugsPLZ">PLZ</label>
                    <input class="form-control form-control-md" type="text" name="einzugsPLZ">
                  </div>
                </div>
                <div class="form-group form-row">
                  <div class="col">
                    <label for="zieladress">Zieladress</label>
                    <input class="form-control form-control-md" type="text" name="zieladress">
                  </div>
                  <div class="col"> 
                    <label for="Ziel PLZ">PLZ</label>
                    <input class="form-control form-control-md" type="text" name="zielPLZ">
                  </div>
                </div>
                <input type="submit" value="Submit" class="btn btn-primary btn-block" name="auftrag_add">
               </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <!-- FOOTER -->
  <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
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

  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="bootstrap-input-spinner.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>


  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());
  </script>
</body>

</html>