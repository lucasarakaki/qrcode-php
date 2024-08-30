<?php 
  
  include "../qrcode.php";

  if (isset($_POST["qrcode"])) {
    $data = $_POST["qrcode"];
    $name = uniqid().".png";

    $dir = "../files/{$name}";
    $options = array(
      "s" => "qr-m",
      "w" => 450,
      "h" => 300
    );

    $generator = new QRCode($data, $options);

    $generator->output_image();

    # Para salvar o qr code
    $image = $generator->render_image();
    imagepng($image, $dir);
    imagedestroy($image);
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de QR Code em PHP</title>
  </head>
  <body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      <input type="text" placeholder="Texto, URL ou outro tipo de dado" name="qrcode">
      <button type="submit">Gerar QR!</button>
    </form>
  </body>
</html>