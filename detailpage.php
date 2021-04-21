<?php 
if (!empty($_POST['product'])) {
    $productname = $_POST['product'];
    $img = $_POST['img'];
    $price = $_POST['price'];
}

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
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active img-head-container">
                <img class="img-head" src="img/head1.jpg" alt="Los Angeles" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Local shoes</h3>
                    <p>Find out the newest local shoes here!</p>
                </div>   
                </div>
                <div class="carousel-item img-head-container">
                <img class="img-head" src="img/head2.jpg" alt="Chicago" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Popular</h3>
                    <p>Get your style up to date!</p>
                </div>   
                </div>
                <div class="carousel-item img-head-container">
                <img class="img-head" src="img/head3.jpg" alt="New York" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>New Arrival</h3>
                    <p>Discover something new!</p>
                </div>   
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

        <nav class="navbar navbar-expand-sm bg-primary navbar-dark sticky-top">
        <a class="navbar-brand" href="index.php">Footwear Store</a>
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#"></a>
            </li>
        </ul>
        </nav>
    </div>
    <div class="container"><br><br>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                        
                            <img class="card-img-top" src="<?php echo $img?>" alt="Card image" style="width:100%;">
                        <div class="card-body">
                        <h4 class="card-title"><?php echo $productname ?></h4>
                        <p class="card-text"><br><?php echo $price ?></p>
                        <!-- <a href="#" class="btn btn-primary">See Detail</a> -->
                        </div>
                    </div>
            </div>
            <div class="col-md-8">
                <form action="lastpage.php" method="POST">
                    <h2><?php echo $productname ?></h2>
                    <input type="hidden" name="productname" value="<?php echo $productname ?>">
                    <input type="hidden" name="price" value="<?php echo $price ?>">
                    <input type="hidden" name="img" value="<?php echo $img ?>">
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="size">Size:</label>
                        <select class="form-control" name="size" id="size">
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="qty">Qty:</label>
                        <input type="number" name="qty" class="form-control" placeholder="Enter Qty" id="qty">
                    </div>
                    <div class="form-group">
                        <label for="shipment">Shipment Address:</label>
                        <textarea class="form-control" name="address" placeholder="Enter Address" id="shipment" row=5></textarea>
                    </div>
                    <div class="form-group">
                        <label for="payment">Payment:</label>
                        <select class="form-control" name="payment" id="payment">
                            <option value="COD">Cash On Delivery</option>
                            <option value="CBD">Cash Before Delivery</option>
                        </select>
                    </div>
                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <br><br>
</body>
<footer>
        <div class="row bg-dark text-white" style="height:300px;">
            <div class="container" style="margin-top:20px">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Footwear Store</h2>
                        <p>JL. Pudakpayung no. 45, kec. Banyumanik, Kota Semarang</p>
                        <p>No. Telp (024) 091293</p>
                        <p>footwearst@gmail.com</p>
                    </div>
                    <div class="col-md-4">
                        <h2>Social Media</h2>
                        <img src="img/socialmedia.png" style="width:200px;margin-top:-25px;margin-left:-15px">
                    </div>
                    <div class="col-md-4">
                        <label>Email</label>
                        <input class="form-control" type="email" placeholder="Input your email"/>
                        <label>Comment</label>
                        <textarea class="form-control" row="5" placeholder="Your Comment"></textarea>
                        <br>
                        <button class="btn btn-light float-right">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </footer>