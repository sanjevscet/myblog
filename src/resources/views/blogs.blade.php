@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-7">
                            Blogs
                        </div>
                        <div class="col-5">
                            <a href={{ route('myblog.blogs.create')}} class="btn btn-primary float-right">Create Blog</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>                            
                        </div>
                    @endif
                    @forelse ($blogs as $blog)
                        <h4>{{$blog->title}}</h4>
                        <p>{{$blog->content}}</p>
                    @empty
                        No blog found    
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
