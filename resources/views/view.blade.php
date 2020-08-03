@extends('master')

@section('main')

<div class="jumbotron text-center">
 <div align="right">
  <a href="{{ route('post.index') }}" class="btn btn-default">Back</a>
 </div>
 <br />
 image:
 <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail"width="290" />
 <h3>title: {{ $data->title }} </h3>
 <h3>content: {{ $data->content }}</h3>
</div>
@endsection