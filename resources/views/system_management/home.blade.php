@extends('layouts.admin')

@section('content')
    <div class="grid-menu">
        <a href="{{ route('system_management.admins.index') }}"><div><p>Admin</p></div></a>
        <a href="{{ route('system_management.users.index') }}"><div><p>User</p></div></a>
        <a href="{{ route('system_management.cvs.all') }}"><div><p>Cv</p></div></a>
    </div>
@endsection