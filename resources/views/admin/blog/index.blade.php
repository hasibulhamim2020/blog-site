@extends('admin.master')

@section('title')
    Blogs
@endsection
@section('content')

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Sl. No.</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Author</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>status</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($blogs as $blog)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $blog->title }}</td>

                            <td>{{ $blog->category->category_name }}</td>
                            <td>{{ $blog->author_name }}</td>
                            <td>{{ substr($blog->description,0,30) }}...</td>
                            <td><img src="{{ $blog->image }}" alt="" style="width: 100px" height="100px"></td>
                            <td>{{ $blog->status ==1 ? 'Active' : 'Inactive' }}</td>
                            <td>{{ $blog->date}}</td>
                            <td>
                                <a href="{{ route('blogs.edit',$blog->id) }}" class=" mx-1 float-start btn btn-sm btn-secondary">Edit</a>
                                @if($blog->status == 1)
                                    <a href="{{ route('blogs.show',$blog->id) }}" class="mx-1 float-start btn btn-sm btn-warning">Inactive</a>
                                @else
                                    <a href="{{ route('blogs.show',$blog->id) }}" class="mx-1 float-start btn btn-sm btn-info">Active</a>
                                @endif
                                <form action="{{route('blogs.destroy',$blog->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm float-start mx-1 " onclick="return confirm('Are you sure you want to delete this!!')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
