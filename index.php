<?php 
  require 'vendor/autoload.php';
  include 'includes/header.php'; 
?>

<div id="home_banner"></div>

<div class="author">
    <img src="images/logos3.png" alt="Logo Rosa Gaulí">
    <h1>Textile Graphic Designer</h1>
</div>

<?php
  $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
  $twig = new \Twig\Environment($loader, [
    'cache' => __DIR__ . '/tmp',
    // 'cache' => false,
  ]);

  echo $twig->render('cards.twig', ['cards' => array(
    array(
      "id" => "amazonas",
      "title" => "Amazonas",
      "subTitle1" => "NIÑOS Perú",
      "subTitle2" => "Barcelona",
      "description" => "Tatuajes libres y fluidos",
			"bannerImg" => "images/home3.png"
      "slides" => array("images/home2.png", "images/amazonas4_slide.jpg")
    ),
    array(
      "id" => "flowers",
      "title" => "Flowers",
      "subTitle1" => "PERÚ",
      "subTitle2" => "Y del mundo",
      "description" => "Inspiración flores textiles y años 50s",
      "bannerImg" => "images/home4.jpg",
      "slides" => array("images/home5.png", "images/flowers7_slide.jpg")
    ),
    array(
      "id" => "tejidos",
      "title" => "Tejidos",
      "subTitle1" => "Juego de",
      "subTitle2" => "Y color",
      "description" => "Pata de gallo fusión escosés",
      "bannerImg" => "images/home7.png",
      "slides" => array("images/home6.jpg", "images/color3_slide.jpg")
    ),
    array(
      "id" => "naturaleza",
      "title" => "Naturaleza",
      "subTitle1" => "Bondadosa",
      "subTitle2" => "Cuarentena",
      "description" => "Las ventanas se convirtieron en obras de arte",
      "bannerImg" => "images/home8.png",
      "slides" => array("images/home9.jpg", "images/naturaleza5_slide.jpg")
    ))]);
?>

<?php include 'includes/footer.php'; ?>
