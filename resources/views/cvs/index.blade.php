@extends('layouts.app')

@section('content')
    @foreach($cvs as $cv)
        <div class="row cv-element-sec">
            <div class="col-md-3"><img src="{{ asset("imgs/cv_thumbnail.png") }}" class="cv-thumbnail"></div>
            <div class="col-md-9">
                <div>
                    <h2>{{ $cv->title }}</h2>
                    <div class="datetime">{{ $cv->updated_at }}</div>
                </div>
                <div class="btn-sec">
                    <button class="btn btn-outline-info">Show</button>
                    <button class="btn btn-outline-success">Edit</button>
                    <button class="btn btn-outline-danger">Delete</button>
                </div>
            </div>
        </div>
    @endforeach

    {{ $cvs->links() }}
@endsection