<?php 
    $drinks =  json_decode(file_get_contents('drinks.json'), true);
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
        body{
            background-color: rgb(208,240,192);
        }
        h1{
            text-align:center;
        }

        .drinkname{
            font-weight:bold;
            font-size:30px;
        }
        a,a:hover{
            text-decoration:none;
            color:black;
        }

        .card{
            height:auto;
            overflow:hidden;
            margin-top:1em;
            border-radius: 20px;
            border: 1px solid green;
        }
        .card > img{
            height:300px;
            margin-bottom:20px;
        }

        .card:hover{
            box-shadow: 0 0 20px 0 lightgreen, 0 5px 20px 0 lightgreen;
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
            font-weight:600;
        }
        hr{
            border-top: 1px solid gray;
        }
        .headerHR{
            margin-top:-35px;
            margin-bottom:2em;
        }
        span{
            float:right;
            color:green;
            font-weight:600;
        }
    </style>
  </head>
  <body>
    <div class="container py-5">
        <h1 class="display-2 text-container mb-5">My Favourite Drinks</h1>
        <hr class="headerHR"/>
        <div class="row">
            <?php foreach($drinks as $drink): ?>
                    <?php  
                        if($drink["Drink_bottle_Pawn"] == false){
                            $Pawn = "No";
                        }
                        else{
                            $Pawn = "Yes";
                        }
                    ?>
                <div class="col-12 col-md-4">
                <a href='products.php?EAN=<?php echo $drink["Drink_EAN"] ?>&Name=<?php echo $drink["Drink_name"] ?>'>
                    <div class="card p-4 mb-0">
                        <img src="<?php echo $drink["image"]; ?>" alt="<?php echo ucfirst($drink["Drink_name"]); ?>" />
                        <h1 class="h3 mb-0 drinkname">
                            <?php echo ucfirst($drink["Drink_name"]); ?>
                        </h1>
                        <hr>
                        <ul class="list-unstyled">
                            <br />
                            <li>EAN<span><?php echo $drink["Drink_EAN"]; ?></span></li>
                            <li>Size<span><?php echo $drink["Drink_size"]; ?></span></li>
                            <li>Country<span><?php echo $drink["Drink_Country_Of_Origin"]; ?></span></li>
                            <li>Pawn<span><?php echo $Pawn; ?></span></li>
                        </ul>
                        <hr>
                        <h1 class="h3 mb-0 drinkname price">
                            <?php echo $drink["Drink_price"].' €'; ?>
                        </h1>
                    </div>
                </div></a>

            <?php  endforeach; ?>
        </div>
    </div>
  </body>
</html>