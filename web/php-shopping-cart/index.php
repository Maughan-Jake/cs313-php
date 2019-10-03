<?php
session_start();

require_once('./shopping-cart.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Font Awesome CSS -->
    <script src="https://kit.fontawesome.com/62d386a421.js" crossorigin="anonymous"></script>

    <!-- Custom CSS & JS -->
    <script src="main.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Shopping Cart</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">MotoStore</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="add-to-cart.php">Cart<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="checkout.php">Checkout<span class="sr-only">(current)</span></a>
                </li>

            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row text-center py-5">
    <?php
 for ($i=0; $i< count($items); $i++) {
     
   ?>
  

    <div class='col-md-3 col-sm-6 my-3 my-md-0'>
        <form action="add-to-cart.php?id=$1" method="POST">
            <div class="card shadow">
                <div>
                    <img src="<?php echo $imgs[$i]?>" alt="<?php echo $items[$i]?>" class="img-fluid card-img-top">
                </div>

                <div class="card-body">
                    <h5 class="card-title"><?php echo $items[$i] ?></h5>
                    <h6>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </h6>
                    <p class="car-text">
                        <?php echo $description[$i] ?> 
                    <h5>
                        <small><s class="text-secondary">$<?php echo $origCost[$i] ?></s></small>
                        <span class="price"> $<?php echo $costs[$i] ?> </span>
                    </h5>

                    <a href="?add=<?php echo($i); ?>" onclick=addedAlert()>Add to Cart</a>
                </div>
            </div>
        </form>
    </div>
 
   <?php
 }
 ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>