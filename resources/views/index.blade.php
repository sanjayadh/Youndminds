@extends('master')

@section('main')

<div align="right">
	<a href="{{ route('post.create') }}" class="btn btn-success btn-sm"><i class="fa fa-plus" aria-hidden="true"></i>
    </a>
</div>
<br />
@if ($message = Session::get('success'))
<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered table-striped">
	<tr>
		<th width="35%">title</th>
        <th width="35%">content</th>
        <th width="10%">Image</th>

		<th width="30%">Action</th>
	</tr>
	@foreach($data as $row)
		<tr>
			<td>{{ $row->title }}</td>
            <td>{{ $row->content }}</td>
            <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>

			<td>
				
				<form action="{{ route('post.destroy', $row->id) }}" method="post">
					<a href="{{ route('post.show', $row->id) }}" class="btn btn-primary"><i class="fa fa-eye-slash" aria-hidden="true"></i>
                    </a>
					<a href="{{ route('post.edit', $row->id) }}" class="btn btn-warning"><i class="fa fa-lg fa-edit"></i></a>
					@csrf
					@method('DELETE')
                    <button type="submit" class="btn btn-danger"onclick="return confirm('Are you sure?')"><i class="fa fa-lg fa-trash"></i></button> 
                  </a>
                </form>
			</td>
		</tr>
	@endforeach
</table>
{!! $data->links() !!}
@endsection