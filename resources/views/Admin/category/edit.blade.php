@extends('Admin.layout.master')

@section('title','Ahmed Dashboard')

@section('css')
@endsection

@section('content')
    <div class="content-wrapper">
        {{--        errrors Message--}}
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
        @endif
        <form action="{{route('category.update',$category->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" class="form-control" name="name" value="{{$category->name}}"
                       id="name" placeholder="Enter Category Name">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

@section('js')
@endsection

