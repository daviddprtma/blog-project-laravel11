@extends('backend.master')
@section('main')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Detail Comment Page</h1>
                

                <div class="card mb-4">

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Comment</th>                                    
                                </tr>
                            </thead>

                            <tbody>
                                
                                <tr>
                                    <td>{{$comment->name}}</td>
                                    <td>{{strip_tags($comment->comment)}}</td>                                    
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection