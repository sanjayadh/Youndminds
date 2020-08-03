@extends('master')

@section('main')
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div align="right">
                <a href="{{ route('post.index') }}" class="btn btn-default">Back</a>
            </div>
            <br />
     <form method="post" action="{{ route('post.update', $data->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
      <div class="container">
        <div class="form-group">
            <label class="col-md-4 ">Enter title:</label>
            <div class="col-md-8">
             <input type="text" name="title" value="{{ $data->title }}" class="form-control input-lg" />
            </div>
           </div>
           <div class="form-group">
            <label class="col-md-4">Enter content:</label>
            <div class="col-md-8">
             <input type="text" name="content" value="{{ $data->content }}" class="form-control input-lg" />
            </div>
           </div>
         
           <div class="form-group">
            <label class="col-md-4">Select Image:</label>
            <div class="col-md-8">
             <input type="file" name="image" />
                   <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="100" />
                             <input type="hidden" name="hidden_image" value="{{ $data->image }}" />
            </div>
           </div>
           <div class="form-group">
            <input type="submit" name="edit" class="btn btn-primary input-lg" value="Edit" />
           </div>
      </div>
     </form>

@endsection
