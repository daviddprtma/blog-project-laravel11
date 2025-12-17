@extends('backend.master')
@section('main')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Comment Page</h1>
                

                <div class="card mb-4">

                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Post Title</th>
                                    <th scope="col">Detail</th>
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
                                    <td>{{$comment->post->title}}</td>
                                    <td><a class="btn btn-warning" href="{{ route('detail_comment', $comment->id) }}">Detail</a></td>
                                    <td>{{$comment->status}}</td>
                                    {{-- if approved, then disable the button --}}
                                    @if($comment->status == 'approved')
                                        <td><a class="btn btn-success disabled" href="#">Approved</a></td>
                                    @else
                                    <td><a class="btn btn-success" href="{{ route('approved_comment', $comment->id) }}">Approved</a></td>
                                    @endif
                                    {{-- if pending, then disable the button --}}
                                    @if($comment->status == 'pending')
                                        <td><a class="btn btn-warning disabled" href="#">Pending</a></td>
                                    @else
                                    <td><a class="btn btn-warning" href="{{ route('pending_comment', $comment->id) }}">Pending</a></td>
                                    @endif
                                    <td><a class="btn btn-danger" href="{{ route('delete_comment', $comment->id) }}" onclick="return confirm('Are you sure to delete?')">Delete</a></td>
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