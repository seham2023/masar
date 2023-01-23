@extends('Admin.Layouts.master')

@section('title')

@endsection

@section('css')

@endsection

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mb-30">


                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($blogs as $blog)
                          <tr>
                            <td>{{ $blog->title }}</td>
                            <td>{{ $blog->description }}</td>
                            <td><img src="{{ asset($blog->image_path) }}" width="100" height="100"></td>
                            <td>
                              <a href="{{ route('admin.blog.edit', $blog->id) }}" class="btn btn-primary">Edit</a>
                              <form action="{{ route('admin.blog.destroy', $blog->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                              </form>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>








                </div>
            </div> <!-- /.row (main row) -->

        </div><!-- /.container-fluid -->

    </section> <!-- /.content -->
 </div>
@endsection

@section('script')

@endsection
