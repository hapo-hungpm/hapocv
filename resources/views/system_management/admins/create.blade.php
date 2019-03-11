@extends('layouts.admin')

@section('content')
    <div class="row">
        <h2>Add admin</h2>
    </div>
    <form action="{{ route('system_management.admins.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" placeholder="John" name="name">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" placeholder="Email" name="email">
            </div>
            <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password">
            </div>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection