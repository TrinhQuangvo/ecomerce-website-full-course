<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>@yield('title')</title>
    </head>
    <style>
        .col-item
        {
        border: 1px solid #E1E1E1;
        border-radius: 5px;
        background: #FFF;
        }
        .col-item .photo img
        {
        margin: 0 auto;
        width: 100%;
        }
        .col-item .info
        {
        padding: 10px;
        border-radius: 0 0 5px 5px;
        margin-top: 1px;
        }
        .col-item:hover .info {
        background-color: #F5F5DC;
        }
        .col-item .price
        {
        /*width: 50%;*/
        float: left;
        margin-top: 5px;
        }
        .col-item .price h5
        {
        line-height: 20px;
        margin: 0;
        }
        .price-text-color
        {
        color: #219FD1;
        }
        .col-item .info .rating
        {
        color: #777;
        }
        .col-item .rating
        {
        /*width: 50%;*/
        float: left;
        font-size: 17px;
        text-align: right;
        line-height: 52px;
        margin-bottom: 10px;
        height: 52px;
        }
        .photo {
        background-color: none;
        transition: transform .2s; /* Animation */
        width:180;
        height:250;
        margin: 0 auto;
        }
        .photo:hover {
        transform: scale(1.2); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }
        .col-item .separator
        {
        border-top: 1px solid #E1E1E1;
        }
        .clear-left
        {
        clear: left;
        }
        .col-item .separator p
        {
        line-height: 20px;
        margin-bottom: 0;
        margin-top: 10px;
        text-align: center;
        }
        .col-item .separator p i
        {
        margin-right: 5px;
        }
        .col-item .btn-add
        {
        width: 50%;
        float: left;
        }
        .col-item .btn-add
        {
        border-right: 1px solid #E1E1E1;
        }
        .col-item .btn-details
        {
        width: 50%;
        float: left;
        padding-left: 10px;
        }
        .controls
        {
        margin-top: 20px;
        }
        [data-slide="prev"]
        {
        margin-right: 10px;
        }
        a {
            color: #fff;
            font-size:14px;
            text-decoration:none;
        }
    </style>
    <body>
        <!-- Navigator -->
        <!-- menu trái -->
        <nav class="navbar navbar-fixed-top navbar-default ">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>   
                    <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="{{asset('index.php')}}">HUEICSTORE&trade;</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav ">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sản Phẩm
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="sanpham/laptop.html">LAPTOP</a></li>
                                <li><a href="sanpham/phone.html">SMARTPHONE</a></li>
                                <li><a href="sanpham/tablet.html">TABLET</a></li>
                            </ul>
                        </li>
                        <li><a href="https://www.facebook.com/profile.php?id=100015064840773">LIÊN HỆ</a></li>
                        <li><a href="#">BIG DEALS</a></li>
                    </ul>
                    <!-- menu phải  -->
                    <ul class="nav navbar-nav navbar-right">
                        <button class="btn btn-danger navbar-btn" data-toggle="modal" data-target="#myModal">
                            <li>Đăng Nhập</li>
                        </button>
                        <form class="navbar-form navbar-right">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                    <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end NAv -->
        <!-- Header -->
        <hr>
        <!-- sản phẩm -->
        <div class="container">
        <div class="container" style="margin-top: 60px">
            <div id="myCarousel" class="carousel slide my-4" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img  src="http://placehold.it/900x350" alt="Los Angeles" style="width:100%;">
                    </div>
                    <div class="item">
                        <img  src="http://placehold.it/900x350" alt="Chicago" style="width:100%;">
                    </div>
                    <div class="item">
                        <img  src="http://placehold.it/900x350" alt="New york" style="width:100%;">
                    </div>
                </div>
                <!-- Left and right controls -->
        
        @yield('main')
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title text-center">Đăng Nhập</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Mật Khẩu:</label>
                                <div class="col-sm-10"> 
                                    <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                        <label><input type="checkbox"> Nhớ Mật Khẩu </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-danger">Đăng Nhập</button>
                                    <button type="submit" class="btn btn-default" style="text-decoration:none"><a href="dangky/dangky.html">Bạn Chưa Có Tài Khoản?</a></button>                    
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Thoát</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Endlogin -->
        <!-- end details -->
        <br><br><br>
        <hr>
        <br><br>
        <footer class="container-fluid text-center">
            <form class="form-inline"> Contact Us !
                <input type="text" class="form-control" size="50" placeholder="">
                <button type="button" class="btn btn-danger">SUBMIT</button>
                <br>
            </form>
            <br><br>
            <h4>HUEIC CO.LTD , SĐT :  0234 3822 813 <br> Address : 70 Nguyễn Huệ, Vĩnh Ninh, Tp. Huế, Thừa Thiên Huế</h4>
        </footer>
    </body>
</html>