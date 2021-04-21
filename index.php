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
        <link href="javascript/jquery-redirect.js" rel="stylesheet">

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
        <a class="navbar-brand" href="#">Footwear Store</a>
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="#bestseller">Bestseller</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#allproduct">All Product</a>
            </li>
        </ul>
        </nav>

        <div class="container"><br>
            <div class="card-columns">
                <div class="card" style="width:400px">
                    <div class="img-card-container">
                        <img class="card-img-top" src="img/head1.jpg" alt="Card image" style="width:100%">
                    </div>
                    <div class="card-body">
                    <h4 class="card-title">Local Shoes</h4>
                    <p class="card-text">Find out the newest local shoes here!</p>
                    <!-- <a href="#" class="btn btn-primary">See More</a> -->
                    </div>
                </div>
                <div class="card" style="width:400px">
                    <div class="img-card-container">
                        <img class="card-img-top" src="img/head2.jpg" alt="Card image" style="width:100%">
                    </div>
                    <div class="card-body">
                    <h4 class="card-title">Popular</h4>
                    <p class="card-text">Get your style up to date!</p>
                    <!-- <a href="#" class="btn btn-primary">See More</a> -->
                    </div>
                </div>
                <div class="card" style="width:400px">
                    <div class="img-card-container">
                        <img class="card-img-top" src="img/head3.jpg" alt="Card image" style="width:100%">
                    </div>
                    <div class="card-body">
                    <h4 class="card-title">New Arrival</h4>
                    <p class="card-text">Discover something new!</p>
                    <!-- <a href="#" class="btn btn-primary">See More</a> -->
                    </div>
                </div>
            </div>
            <br>
            <h2 id="bestseller">Bestseller</h2>
            <div class="row">
                <div class="col-sm-3">
                    <div class="card" style="max-height:450px">
                        <div class="img-card-container">
                            <img class="card-img-top" id="bst1" src="img/produk/Aerostreet_massive_navy.jpg" alt="Card image" style="width:100%;">
                        </div>
                        <div class="card-body">
                        <h4 class="card-title">Aerostreet Massive Navy</h4>
                        <p class="card-text">IDR 99,900</p>
                        <button class="btn btn-primary" onclick="getproduct(this,'bst1')">Buy Now!</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="img-card-container" style="max-height:450px">
                            <img class="card-img-top" id="bst2" src="img/produk/Aerostreet_x_rowndivision_armature_green.jpg" alt="Card image" style="width:100%;">
                        </div>
                        <div class="card-body">
                        <h4 class="card-title">Aerostreet x Rowndivion Green</h4>
                        <p class="card-text">IDR 99,900</p>
                        <button class="btn btn-primary" onclick="getproduct(this,'bst2')">Buy Now!</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="img-card-container" style="max-height:450px">
                            <img class="card-img-top" id="bst3" src="img/produk/Newbalance_306.jpg" alt="Card image" style="width:100%;">
                        </div>
                        <div class="card-body">
                        <h4 class="card-title">New Balance 306</h4>
                        <p class="card-text"><br>IDR 250,000</p>
                        <button class="btn btn-primary" onclick="getproduct(this,'bst3')">Buy Now!</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="img-card-container" style="max-height:450px">
                            <img class="card-img-top" id="bst4" src="img/produk/Redknot_melvin_black.jpg" alt="Card image" style="width:100%;%">
                        </div>
                        <div class="card-body">
                        <h4 class="card-title">Redknot Melvin Black</h4>
                        <p class="card-text">IDR 159,000</p>
                        <button class="btn btn-primary" onclick="getproduct(this,'bst4')">Buy Now!</button>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <h2 id="allproduct">All Product</h2>
            <div class="row"  style="margin-bottom:25px">
                <div class="col-sm-4">
                    <div class="card" style="max-height:450px">
                        <div class="img-product-container">
                            <img class="card-img-top" id="prd1" data-src="img/produk/Aerostreet_massive_navy.jpg" src="img/produk/Aerostreet_massive_navy.jpg" alt="Card image" style="width:100%;">
                        </div>
                        <div class="card-body">
                        <h4 class="card-title">Aerostreet Massive Navy</h4>
                        <p class="card-text">IDR 99,900</p>
                        <button class="btn btn-primary" onclick="getproduct(this,'prd1')">Buy Now!</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="img-product-container" style="max-height:450px">
                            <img class="card-img-top" id="prd2" src="img/produk/Aerostreet_massive_yellow.jpg" alt="Card image" style="width:100%;">
                        </div>
                        <div class="card-body">
                        <h4 class="card-title">Aerostreet Massive Yellow</h4>
                        <p class="card-text">IDR 99,900</p>
                        <button class="btn btn-primary" onclick="getproduct(this,'prd2')">Buy Now!</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="img-product-container" style="max-height:450px">
                            <img class="card-img-top" id="prd3" src="img/produk/Aerostreet_x_rowndivision_armature_green.jpg" alt="Card image" style="width:100%;">
                        </div>
                        <div class="card-body">
                        <h4 class="card-title">Aerostreet x Rowndivion</h4>
                        <p class="card-text">IDR 99,900</p>
                        <button class="btn btn-primary" onclick="getproduct(this,'prd3')">Buy Now!</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom:25px">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="img-product-container" style="max-height:450px">
                            <img class="card-img-top" id="prd4" src="img/produk/Newbalance_306.jpg" alt="Card image" style="width:100%;">
                        </div>
                        <div class="card-body">
                        <h4 class="card-title">New Balance 306</h4>
                        <p class="card-text">IDR 350,000</p>
                        <button class="btn btn-primary" onclick="getproduct(this,'prd4')">Buy Now!</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="img-product-container" style="max-height:450px">
                            <img class="card-img-top" id="prd5" src="img/produk/Aerostreet_tiger_hijau_putih_orange.jpg" alt="Card image" style="width:100%;%">
                        </div>
                        <div class="card-body">
                        <h4 class="card-title">Aerostreet Tiger 2D</h4>
                        <p class="card-text">IDR 99,900</p>
                        <button class="btn btn-primary" onclick="getproduct(this,'prd5')">Buy Now!</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="img-product-container" style="max-height:450px">
                            <img class="card-img-top" id="prd6" src="img/produk/Redknot_melvin_black.jpg" alt="Card image" style="width:100%;%">
                        </div>
                        <div class="card-body">
                        <h4 class="card-title">Redknot Melvin Black</h4>
                        <p class="card-text">IDR 159,000</p>
                        <button class="btn btn-primary" onclick="getproduct(this,'prd6')">Buy Now!</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom:25px">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="img-product-container"  style="max-height:450px">
                            <img class="card-img-top" id="prd7" src="img/produk/Nike_jordan_dior_low_red.jpg" alt="Card image" style="width:100%;">
                        </div>
                        <div class="card-body">
                        <h4 class="card-title">Nike Jordan Dior</h4>
                        <p class="card-text">IDR 450,000</p>
                        <button class="btn btn-primary" onclick="getproduct(this,'prd7')">Buy Now!</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="img-product-container" style="max-height:450px">
                            <img class="card-img-top" id="prd8" src="img/produk/Nike_air_zoo_720_woman.jpg" alt="Card image" style="width:100%;%">
                        </div>
                        <div class="card-body">
                        <h4 class="card-title">Nike Air Zoo</h4>
                        <p class="card-text">IDR 549,000</p>
                        <button class="btn btn-primary" onclick="getproduct(this,'prd8')">Buy Now!</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="img-product-container" style="max-height:450px">
                            <img class="card-img-top" id="prd9" src="img/produk/Aerostreet_x_endanksoekamti_unstopable.jpg" alt="Card image" style="width:100%;%">
                        </div>
                        <div class="card-body">
                        <h4 class="card-title">Aerostreet x endangskmt</h4>
                        <p class="card-text">IDR 99,900</p>
                        <button class="btn btn-primary" onclick="getproduct(this,'prd9')">Buy Now!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    <br><br>
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
    <script type="text/javascript">
        function getproduct(th,idimg){
             var productname = $(th).parent().find('.card-title').html();
             var price = $(th).parent().find('.card-text').html();
             var img = $('#'+idimg).prop('src');
             $('<form action="detailpage.php" method="post"><input type="hidden" name="product" value="'+productname+'"></input><input type="hidden" name="price" value="'+price+'"></input><input type="hidden" name="img" value="'+img+'"></input></form>').appendTo('body').submit().remove();

        }

    </script>
</html>