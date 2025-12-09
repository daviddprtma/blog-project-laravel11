@extends('backend.master')
@section('main')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Comment Page</h1>
                

                <div class="card mb-4">

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Post Title</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Approved</th>
                                    <th scope="col">Pending</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($comments as $comment)
                                <tr>
                                    <td>{{$comment->name}}</td>
                                    <td>{{$comment->email}}</td>
                                    <td>{{$comment->post_title}}</td>
                                    <td>{{$comment->status}}</td>
                                    <td><a class="btn btn-success" href="{{url('/approve_comment/'.$comment->id)}}">Approved</a></td>
                                    <td><a class="btn btn-warning" href="{{url('/pending_comment/'.$comment->id)}}">Pending</a></td>
                                    <td><a class="btn btn-danger" href="{{url('/delete_comment/'.$comment->id)}}" onclick="return confirm('Are you sure to delete?')">Delete</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection