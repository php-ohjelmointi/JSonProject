<?php 
$EAN = $_GET['EAN'];
$Name = $_GET['Name'];
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Drinks!</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Dosis:wght@200&display=swap');

        *{
            font-family: 'Dosis', sans-serif;
            font-size:25px;
        }
        .container{
            margin:auto;
            width:50%;
        }
        h1{
            text-align:center;
        }
    </style>
  </head>
  <body>
    <div class="container">
       <h1><?php echo $EAN; ?></h1>
       <h1><?php echo $Name; ?></h1>
    </div>
  </body>
</html>