@extends('layouts.admin')

@section('content')
<div class="content-sec">
    <div class="row">
        <h2>Add admin</h2>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('system_management.admins.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" placeholder="John" name="name" required>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" placeholder="Email" name="email" required>
            </div>
            <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Password" name="password" required>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection