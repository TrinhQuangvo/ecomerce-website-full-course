<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <style>
        body {background-color: #c2c2a3;}
    </style>
    <title>Login</title>
</head>
<body style="background_color:dark">
    <div class="container">
        <div class="row">
            <fieldset>
            @include('errors.note')
            <div class="col-md-6 col-md-offset-3" style="margin-top:150px">
                <legend style="color:#FFF ;font-weight:bold;text-align:center"><h1>Trang Đăng Nhập</h1></legend>
                <form action="" method="POST" class="" role="form">
                <input type='hidden' name='_token' value='thetokenvalue'>
                
                    <div class="input-group">
                        <label class="sr-only" for="">Email</label>                
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="email" type="text" value="{{old('email')}}" class="form-control" name="email" placeholder="Email">   
                    </div>

                    <div class="input-group">
                        <label class="sr-only" for="">Password</label>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Password"> 
                    </div>
                    {!! csrf_field() !!} 
                    <div class="checkbox">
                     <label><input name="remember" value="Remember Me" type="checkbox"> Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-default btn-block">Đăng Nhập</button>
                </form>
                
            </div>
            </fieldset>
        </div>
    </div>
</body>
</html>