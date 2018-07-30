@extends('backend.master')
@section('main')

@section('title','Trang Quản Trị')
    <div class="col-sm-9">
      <h4><small>RECENT POSTS</small></h4>
      <hr>
      <h2>Xin Chào :  {{Auth::user()->email}} </h2>
      <h5><span class="glyphicon glyphicon-time"></span>{{date('Y-m-d H:i:s')}}</h5>
      <h5><span class="label label-danger">Food</span> <span class="label label-primary">Ipsum</span></h5><br>
      <p>do not fix any information within mr Quang's Order</p>
      <br><br>
      
      <h4><small>2nd Rule</small></h4>
      <hr>
      <h2>Officially Blogging</h2>
      <h5><span class="glyphicon glyphicon-time"></span> Post by John Doe, Sep 24, 2015.</h5>
      <h5><span class="label label-success">Lorem</span></h5><br>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <hr>
    </div>
  </div>
</div>
@stop