<?php 
    $drinks =  json_decode(file_get_contents('drinks.json'));
    // print_r($drinks);
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
        }

        h1{
            text-align:center;
        }

        .drinkname{
            font-weight:bold;
            font-size:30px;
        }

        .lead{
            font-weight: 500;
            margin-top:1em;
            font-size:25px; 
        }
        a,a:hover{
            text-decoration:none;
            color:black;
        }

        .card{
            height:auto;
            overflow:hidden;
            margin-top:1em;
            border-radius: 0px 0px 10px 10px;
        }

        .card:hover{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            cursor:pointer;
        }
        ul {
            margin-top:-15px;
        }
        ul > li {
            font-size:25px; 
        }
        .price{
            color:green;
        }
    </style>
  </head>
  <body>
    <div class="container py-5">
        <h1 class="display-2 text-container mb-5">My Favourite Drinks</h1>
        <div class="row">
            <?php foreach($drinks as $drink): ?>
                    <?php  
                        if($drink->Drink_bottle_Pawn == false){
                            $Pawn = "No";
                        }
                        else{
                            $Pawn = "Yes";
                        }
                    ?>
                <div class="col-12 col-md-4">
                <a href='https://www.google.com/'>
                    <div class="card p-4 mb-0">
                        <h1 class="h3 mb-0 drinkname">
                            <?php echo ucfirst($drink->Drink_name); ?>
                        </h1>
                        <hr>
                        <p class="lead">
                            <?php  echo 'EAN: '.$drink->Drink_EAN; ?>
                        </p>
                        <ul class="list-unstyled">
                            <li><?php  echo 'Size: '.$drink->Drink_size; ?></li>
                            <li><?php  echo 'Country: '.$drink->Drink_Country_Of_Origin; ?></li>
                            <li><?php  echo 'Pawn: '.$Pawn; ?></li>
                        </ul>
                        <hr>
                        <h1 class="h3 mb-0 drinkname price">
                            <?php echo $drink->Drink_price.' €'; ?>
                        </h1>
                    </div>
                </div></a>

            <?php  endforeach; ?>
        </div>
    </div>
  </body>
</html>