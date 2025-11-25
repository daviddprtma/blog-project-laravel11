@extends('backend.master')
@section('main')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Admin Post</h1> 

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        <a class="btn btn-primary" href="{{route('add_post')}}">Add Post</a>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Title</th>
                                    {{-- <th scope="col">Desc</th>
                                    <th scope="col">Tags</th> --}}
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($post as $p)
                                <tr>
                                    <td><img src="{{ asset('post_images/' . $p->image) }}" width="100"></td>
                                    <td>{{$p->category->category_name}}</td>
                                    <td>{{$p->title}}</td>
                                    <td><a class="btn btn-info" href="{{url('/edit_post/'.$p->id)}}">Edit</a></td>
                                    <td><a class="btn btn-danger" href="{{url('/delete_post/'.$p->id)}}" onclick="return confirm('Are you sure to delete?')">Delete</a></td>
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