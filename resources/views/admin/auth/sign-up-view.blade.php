@extends('admin.master')

@section('title')
    Add New User
@endsection
@section('content')
<div class="container">
    <div class="row mt-5 p-5">
        <div class="col-8 offset-2">

            <div class="card">
                <div class="card-body">
                    <form class="" action="{{route('users.store')}}" method="POST">
                        @csrf
                        <h3><b>Add User Here</b></h3>
                        <br>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                        </div>
                        <button type="submit" class="btn btn-primary">Add User</button>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection
