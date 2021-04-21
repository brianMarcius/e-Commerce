<?php 
$productname = $_POST['productname'];
$price = $_POST['price'];
$img = $_POST['img'];
$email = $_POST['email'];
$qty = $_POST['qty'];
$size = $_POST['size'];
$address = $_POST['address'];
$payment = $_POST['payment'];

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/custom_bootstrap4.css" rel="stylesheet">


        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-sm bg-primary navbar-dark sticky-top">
            <a class="navbar-brand" href="index.php">Footwear Store</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                <!-- <a class="nav-link" href="#">Link</a> -->
                </li>
                <li class="nav-item">
                <!-- <a class="nav-link" href="#">Link</a> -->
                </li>
            </ul>
            </nav>
        </div>
        <div class="container">
            <div class="row" style="margin-top:20px;margin-bottom:25px">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <img class="card-img-top" src="<?php echo $img ?>" >
                            <h4 class="card-title">Pembelian <?php echo $productname ?> Berhasil</h4>
                            <p class="card-text">Produk <?php echo $productname ?> dengan size <?php echo $size ?> dalam tahap pengiriman ke alamat <?php echo $address ?>. Total tagihan yang harus anda bayarkan senilai <?php echo $price ?></p>
                            <a href="index.php" class="btn btn-primary">Lanjut Belanja</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
            

        </div>
    
    </body>
</html>