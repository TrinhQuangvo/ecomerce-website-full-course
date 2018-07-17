@extends('frontend.master')
@section('title','Giỏ Hàng')
@section('main')
<script>
    function updateCart(qty,rowId)
    {
        $.get(
            // url , đối tượng , phương thức 
            '{{asset('index.php/cart/update')}}',
            {qty:qty,rowId:rowId},
            function(){
                location.reload();
            }
        );
    }
    function deleleProd(rowId)
    {
        $.get(
            "{{asset('index.php/product/delete')}}",
            {rowId:rowId} ,
            function(){
                location.reload();
            }
        );
    }
</script>

<div class="container">
    <div class="row">
        
        <table class="table table-hover">
            <thead>
                <tr>
                    <th><h2>Giỏ Hàng Của Bạn</h2></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Hình Ảnh</td>
                    <td>Tên Sản Phẩm</td>
                    <td>Số Lượng</td>
                    <td>Đơn Giá</td>
                    <td>Thành Tiền</td>
                    <td>Xóa Sản Phẩm</td>
                </tr>
                @foreach($item as $items)
                <tr>
                    <td><img src="{{asset('storage/'.$items->options->img)}}" width="90" height="130" alt=""></td>
                    <td>{{$items->name}}</td>
                    <td><div class="form-group">
                        <input type="number" class="form-control" onchange="updateCart(
                            this.value,'{{$items->rowId}}'
                        )" name="" value="{{$items->qty}}" id="">
                    </div></td>
                    <td>{{number_format($items->price)}} VNĐ</td>
                    <td>{{number_format($items->price*$items->qty)}}</td>
                    <td><a onchange="deleteProd(
                            this.value,'{{$item->id}}'
                        )" 
                    href="{{asset('index.php/cart/delete/'.$items->rowId)}}" class="btn btn-danger"   > <span class="glyphicon glyphicon-remove-sign"></span> Xóa </a></td>
                </tr>
                @endforeach
            </tbody>
        </table>     
        <hr>
        <div class="col-sm-12 text-center" style="padding-left:800px;margin-bottom:30px" >  
            <p><H3>Tổng Tiền : {{$total}} VNĐ</H3></p>
            <a href="{{asset('index.php/cart/delete/all')}}" class="btn btn-md btn-warning">Xóa Hết</a>
            <a href="" class="btn btn-md btn-primary">Tiếp Tục Mua Hàng</a>
            <a href="" class="btn btn-md btn-success">Cập Nhật</a>
        </div>
        <div class="row">
            <div class="col-sm-12">
            @if(Cart::count() !=0 ) 
                <form action="" method="POST" role="form">
                    <legend>Thông Tin Của Bạn</legend>
                
                    <div class="form-inline">
                        <label for="">Họ Tên</label>
                        <label for="" style="padding-left:170px">SĐT Liên Lạc</label><br>
                        <input type="text" class="form-control" id="" name="name" placeholder="">
                        <input type="number" class="form-control" name="tel" placeholder="Sđt của bạn" id="">
                    </div>

                    <div class="form-group">
                        <label for="">Địa Chỉ Email</label>
                        <input type="email" class="form-control" name="email" id="" >
                    </div>
                    
                    <div class="form-group">
                            <label for="">Địa Chỉ</label>
                            <input type="text" placeholder="Vui Lòng Ghi Rõ Phường Xã" name="email" class="form-control" id="">
                    </div>
                    <div class="form-group">
                       <label for="">Yêu Cầu Khi Giao Hàng</label>
                       <textarea name="request" id="" class="form-control" cols="30" rows="10"></textarea>
                    </div>

                    <div class="form-inline">
                        <label for="">Phương Thức Thanh Toán : </label>
                        <select name="paid" id="" class="form-control">
                            <option  value="1">Cash On Deliver (COD) </option>
                            <option  value="2">Internet Banking</option>
                        </select>
                    </div>

                    {{csrf_field()}}
                    <button type="submit" class="btn btn-success btn-lg " style="margin-left:600px;margin-top:50px">Xác Nhận Mua Hàng <span class="glyphicon glyphicon-ok"></span></button>
                </form>
            @else
                
                <div class="alert alert-danger text-center">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Something Wrong Here ,</strong> You haven't chossen any item , Your Cart is Empty :"( 
                </div>
                
            @endif 
            </div>
        </div>
    </div>
</div>
@endsection