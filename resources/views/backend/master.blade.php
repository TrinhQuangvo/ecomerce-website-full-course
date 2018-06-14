<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Latest compiled and minified CSS & JS -->
  <!-- <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

    <nav class="navbar navbar-inverse " role="navigation">
        <a class="navbar-brand" href="#">My Page</a>
        
        <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> {{Auth::user()->email}} </a></li>
      <li><a href="{{url('logout')}}"> <span class="glyphicon glyphicon-log-in"></span> Đăng Xuất </a></li>
    </ul>
    </nav>
<div class="container-fluid">   
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Trang Quản Trị</h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Trang Chủ</a></li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            
            <span class="nav-link-text">Sản Phẩm</span>
          </a>
          <ul class="sidenav-second-level" id="collapseComponents">
            <li>
              <a href="{{asset('index.php/admin/product/add')}}">Thêm Sản Phẩm</a>
            </li>
            <li>
              <a href="{{asset('index.php/admin/product')}}">Danh Sách</a>
            </li>
          </ul>
        </li>
        <li><a href="{{asset('index.php/admin/category')}}">Danh Mục</a></li>
      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search   ..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>
@yield('main')

<footer class="container-fluid">
  <p>Footer Text</p>
</footer>

</body>
</html>