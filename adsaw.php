<!DOCTYPE html>
<?php include ('server.php');?>
<!DOCTYPE html>
<html lang="en">

<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Inventar</title>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<script>
function fileValidation(){
    var fileInput = document.getElementById('file');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if(!allowedExtensions.exec(filePath)){
        alert('Invalid image. Erlabute File: .jpg / .png / .jpeg');
        fileInput.value = '';
        return false;
    }else{
        //Image preview
        if (fileInput.files && fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'" width=5%">';
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    }
}
</script>
</head>

<header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
            <i class="fas fa-cog"></i>Anzeige angeben</h1>
        </div>
      </div>
    </div>
  </header>

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
            <a href="auftrag.php" class="nav-link">Auftrag</a>
          </li>
          <li class="nav-item px-2">
            <a href="inventar.php" class="nav-link active">Inventar</a>
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
<body>


<form method="post" enctype="multipart/form-data">
  <div class="container my-5">
      <label>Title</label>
        <input type="text" name="title">
          <label>File Upload</label>
        <input type="File" id="file" onchange="return fileValidation()" name="file">
  </div>
  <div class="container my-5">
    <div id="imagePreview"></div>
  </div>

  <div class="container my-5">
      <textarea name="texter" id="textercont"  placeholder="Your text here" rows="8" cols="75"></textarea>
  </div>

  <div class="container my-5">
  <input type="submit" name="upload">
  </div>
</form>


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
 
<?php 
$localhost = "sql7.freesqldatabase.com"; #localhost
$dbusername = "sql7579832"; #username of phpmyadmin
$dbpassword = "5wuPuWeBwG";  #password of phpmyadmin
$dbname = "sql7579832";  #database name

 
#connection string
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);

if (isset($_POST["upload"]))
 {
    $userid = $_SESSION['student_id'];
    $title = $_POST["title"];
    $text = $_POST["texter"];

    $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
    $tname = $_FILES["file"]["tmp_name"];
   
    $uploads_dir = 'images';
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
 
    $sql = "INSERT into fileup(student_id,title,image,text) VALUES('$userid','$title','$pname','$text')";
 
    if(mysqli_query($conn,$sql)){
        echo "File Sucessfully uploaded";
    }
    else{
        echo "Error";
    }
}
 
 
?>






<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

<script type="text/javascript">
$(document).ready(function(){
  $('form#uploadform').submit(function(){

    var FormData = new FormData(this);
    $.ajax({
    url: 'upload.php',
    type: 'post',
    data: formData,
    cache: false,
    processData: false,
    contentType: false,
    success: function(data){
      console.log(data);
    }
  })
})
})
</script>