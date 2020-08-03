@extends('master')

@section('main')
@if($errors->any())
<div class="alert alert-danger">
 <ul>
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
 </ul>
</div>
@endif
<div align="right">
    <button class=""> <a href="{{ route('post.index') }}" class="btn btn-default">Back</a><button>
</div>

<form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">

 @csrf
 
 <div class="container-fluid">
    <div class="form-group">
        <label class="col-md-4 text-left">Enter Your Title:</label>
        <div class="col-md-8">
         <input type="text" name="title" class="form-control input-lg" />
        </div>
       </div>
      
       <div class="form-group">
        <label class="col-md-4 ">Enter Your content:</label>
        <div class="col-md-8">
         <input type="text" name="content" class="form-control input-lg" />
        </div>
       </div>
       
       <div class="form-group">
        <label class="col-md-4">Choose ImageFile:</label>
        <div class="col-md-8">
         <input type="file" name="image" />
        </div>
       </div>
       <div class="form-group">
        <input type="submit" name="add" class="btn btn-success input-lg" value="Add" />
       </div>
 </div>

</form>

@endsection