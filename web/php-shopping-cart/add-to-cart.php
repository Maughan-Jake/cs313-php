<?php
session_start();
include('./shopping-cart.php');
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

    <?php
        if ( isset($_SESSION["cart"]) ) {
        ?>

            <h2 class="text-center">Cart</h2>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Item</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Action</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                <?php
            $total = 0;
            foreach ( $_SESSION["cart"] as $i ) {
                ?>
                <tr>
                    <td><?php echo( $items[$_SESSION["cart"][$i]] ); ?></td>
                    <td><?php echo( $_SESSION["quantity"][$i] ); ?></td>
                    <td><a href="?delete=<?php echo($i); ?>">Delete from cart</a></td>
                    <td><?php echo( $_SESSION["costs"][$i] ); ?></td>
                </tr>
            <?php
                $total = $total + $_SESSION["costs"][$i];
            }  

            $_SESSION["total"] = $total;
            ?>
            
                </tbody>
            </table>

            <div id="total">
            Total : <?php echo($total); ?>
            </div>

            <a href="checkout.php"><button type="button" class="btn btn-success">Complete Purchase</button></a>
            <a href="index.php"><button type="button" class="btn btn-danger">Return To Store</button></a>

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