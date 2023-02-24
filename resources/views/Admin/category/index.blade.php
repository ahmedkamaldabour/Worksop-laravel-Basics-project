@extends('Admin.layout.master')

@section('title','Ahmed Dashboard')

@section('css')
@endsection

@section('content')
    <div class="content-wrapper" xmlns="http://www.w3.org/1999/html">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>All Categories</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            {{--                           search by name --}}
                            <div class="card-header">
                                <div class="bottom ">
                                </div>
                                <div class="card-tools">
                                    <a href="" class="btn btn-primary">Add New
                                        Category</a>
                                </div>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>name</th>
                                        <th style="width: 50px">Actions</th>
                                    </tr>
                                    </thead>
                                    @foreach($categories as $category)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{$category->name}}</td>
                                            <td>
                                                <a href=""
                                                   class="btn btn-sm btn-primary m-1">Edit</a>
                                                <form action="{{route('category.destroy',$category->id)}}"
                                                      method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Are you sure This will Be Deleted?')">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                            @endforeach
                                        </tr>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                {{--                                {{$categories->links()}}--}}
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection

@section('js')
@endsection





