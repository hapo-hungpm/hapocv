@extends('layouts.admin')

@section('content')
    <div class="row">
        <h2>Edit admin</h2>
    </div>
    <form action="{{ route('system_management.admins.update', $admin->id) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="form-group col-md-2">
            <label for="id">Id</label>
            <input type="text" class="form-control" placeholder="1" name="admin_id" value="{{ $admin->id }}">
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" placeholder="John" name="admin_name" value="{{ $admin->name }}">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" placeholder="Email" name="email" value="{{ $admin->email }}">
            </div>
            <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password" value="{{ $admin->name }}">
            </div>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection