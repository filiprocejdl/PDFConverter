<?php 
session_start(); 
$result = ''; 
$nazev = $_POST["pdfinput"];
$filename = "{$nazev}.pdf";

if (file_exists($filename)) {
    $result = "";
    $_SESSION["odeslat"] = $result;
    
    $datum = date("d/m/y");

    $Imagick = new Imagick();
    $ImagickDraw = new ImagickDraw();
    $ImagickDraw->setFontSize( 50 );
    $ImagickDraw->setFillColor( "#9E9E9E" );
    $Imagick->readImage( $filename );
    $Imagick->setImageFormat( "jpg" );
    $ImagickDraw->setGravity( Imagick::GRAVITY_SOUTHWEST );
    $Imagick->annotateImage( $ImagickDraw, 0, 0, 0, $datum );

    header( "Content-Type: image/{$Imagick->getImageFormat()}" );
    echo $Imagick->getImageBlob();
} else {
    $result = "<div class='alert alert-warning alert-dismissible fade show col-4' role='alert'>
    <strong>Soubor nenalezen! </strong>Zkontrolujte znovu číslo pdf a zkuste to znovu.
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>";
    $_SESSION["odeslat"] = $result;
    header('Location: /index.php');
}



?>