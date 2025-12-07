@extends('backend.master')
@section('main')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Tag Page</h1>
                

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        <a class="btn btn-primary" href="{{route('add_tags')}}">Add Tag</a>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Tag Name</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($tags as $tag)
                                <tr>
                                    {{-- <td>{{$tag->id}}</td> --}}
                                    <td>{{$tag->tag_name}}</td>
                                    <td><a class="btn btn-danger" href="{{route('delete_tags', $tag->id)}}" onclick="return confirm('Are you sure to delete?')">Delete</a></td>
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