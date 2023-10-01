@extends('admin.master')

@section('title')
    Categories
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
                        <th>Category Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->category_name }}</td>
                        <td>{{ $category->status ==1 ? 'Active' : 'Inactive' }}</td>
                        <td>
                            @if($category->status == 1)
                                <a href="{{ route('categories.show',$category->id) }}" class="btn btn-sm btn-warning">Inactive</a>
                            @else
                                <a href="{{ route('categories.show',$category->id) }}" class="btn btn-sm btn-info">Active</a>
                            @endif
                            <a href="{{ route('categories.edit',$category->id) }}" class="btn btn-sm btn-secondary">Edit</a>

                            <form action="{{route('categories.destroy',$category->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this!!')">Delete</button>
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
