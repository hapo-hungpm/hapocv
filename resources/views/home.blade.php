@extends('layouts.app')

@section('content')
    <div class="grid-menu">
        <a href="{{ route('cvs.index') }}"><div><p>Your Cv</p></div></a>
        <a href="{{ route('cvs.create') }}"><div><p>New CV</p></div></a>
        <a><div><p>Your Profile</p></div></a>
    </div>
@endsection