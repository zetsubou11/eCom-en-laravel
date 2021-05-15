@extends('master')
@section("content")
<div class="container custom-login">
<div class="row">
<div class="col-sm-4 col-sm-offset-4">
<form>
        <div class="form-group">
            <label for="exampleInputEmail1">Имэйл хаяг</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="мэйл">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Нууц үг</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="нууц үг">
        </div>
        
        <button type="submit" class="btn btn-default">Нэвтрэх</button>
</form>
</div>
</div>
</div>
@endsection