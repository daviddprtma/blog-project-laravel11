@extends('backend.master')
@section('main')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Add Tag</h1>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Add New Tag
                    </div>

                    <div class="card-body">
                        <form action="{{route('create_tags')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="tag_name" class="form-label">Tag Name</label>
                                <input type="text" class="form-control" name="tag_name" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Tag</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection