<?php session_start(); ?>
<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
<title>Vyroba PDF - Design</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</head>

<body>

<div class="main">
<div class="header">
        <div class="float-left">
                <a href="#">
                        <img class="img-fluid logo" src="http://www.dzd.cz/images/logo-dz-drazice.svg" alt="logo">
                </a>
        </div>
        <div class="float-left text-justify maintext">
                        <h1 class="name">Zobrazování PDF souboru</h1>
                        <p class="undername lead">Návod k použítí <a href="#">zde</a>.</p>
        </div>

</div>
<?php
if (!empty($_SESSION["odeslat"])) {
	echo $_SESSION["odeslat"];
}		
?>
<div class="container-fluid">
<form method="POST" action="php/post.php" >
        <div class="col-4"> 
                <label for="inputPassword5">Zadejte číslo výrobku.</label>
                <input type="text" name="pdfinput" class="form-control" placeholder="například: 10008"> 
        
                <p class="form-text text-muted">
        
                        Po správném zadání čísla výrobku potvrďte a vyčkejte než se vám zobrazý danný pdf soubor.<template></template>.
                </p>
                <button type="submit"  class="btn btn-primary mb-2">Odeslat</button>
        </div>
</form>  
</div>       







</div>
</body>
</html> 