@extends('backend.master')
@section('main')
      <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Admin Post</h1>

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Edit Post
                    </div>

                    <div class="card-body">
                        <form action="{{route('update_post', $post->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="category_id" class="form-label">Category</label>
                                <select class="form-select" name="category_id" required>
                                    <option selected>Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{$post->category_id == $category->id ? 'selected' : ''}}>{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}" placeholder="Enter title" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea id="mytextarea" class="form-control" name="description">{{$post->description}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="tags" class="form-label">Tags</label>
                                <br>
                                <input type="text" class="form-control" data-role="tagsinput" name="tags" value="{{$post->tags}}" placeholder="Enter tags" required>
                            </div>
                            <div class="mb-3">
                                <label for="old_image" class="form-label">Current Image</label>
                                <br>
                                <img src="{{asset('post_images/'.$post->image)}}" alt="Post Image" width="100px">  
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Update Image</label>
                                {{-- only jpg / png are allowed --}}
                                <input type="file" class="form-control" id="image" name="image" accept=".jpg,.jpeg,.png">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Update Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection