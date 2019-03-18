@extends('layouts.admin')

@section('content')
<div class="content-sec">
    <h2>List cv</h2>
    <div class="row justify-content-center">
        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>user id</th>
                <th>title</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($cvs as $cv)
                <tr>
                    <th>{{ $cv->id }}</th>
                    <td>{{ $cv->user_id }}</td>
                    <td>{{ $cv->title }}</td>
                    <td><a href=""><button class="btn btn-outline-primary btn-sm">Edit</button></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $cvs->links() }}
    </div>
    <div class="container">

        <!-- Modal -->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>This cv will be delete. Are you sure to continue?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger btn-summit-delete">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $(".btn-delete").click(function () {
                let idCv = $(this).val();
                $(".btn-summit-delete").click(function () {
                    $(`.delete-form${idCv}`).submit();
                });
            });
        });
    </script>
@endsection