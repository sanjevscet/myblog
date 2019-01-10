@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Blog</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger" role="alert">
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>   
                            @endforeach
                        </div>
                    @endif
                    <form method="post" action="{{route('myblog.blogs.create')}}">
                        @csrf()
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter post title ..." value="{{old('title')}}">
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                        <textarea id="content" class="form-control" name="content" placeholder="Enter blog content ...">{{old('content')}}</textarea>
                        </div>
                        <div class="row pt-2 justify-content-center">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="reset" class="ml-5 btn btn-secondary">Clear</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
