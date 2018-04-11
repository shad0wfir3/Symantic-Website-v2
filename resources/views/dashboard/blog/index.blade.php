@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Posts
                        <a href="{{ route('admin.blog.create') }}" class="btn btn-primary float-md-right">Create New</a>

                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                            <table class="table table-responsive-sm">
                                <thead>
                                <tr>
                                    <th scope="col">Title</th>
                                    <th style="width:20%"scope="col">Excerpt</th>
                                    <th scope="col">Status</th>
                                    <th>Date</th>
                                    <th>Author</th>
                                    <th style="width:10%">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->title  }}</td>
                                    <td>{{ $post->excerpt }}</td>
                                    <td>@if($post->status == 'published')
                                            <h5><span class="badge badge-success">{{ ucfirst($post->status) }}</span></h5>
                                        @elseif($post->status == 'draft')
                                            <h5><span class="badge badge-primary">{{ ucfirst($post->status) }}</span></h5>
                                        @elseif($post->status == 'unpublished')
                                            <h5><span class="badge badge-warning">{{ ucfirst($post->status) }}</span></h5>
                                        @elseif($post->status == 'archived')
                                            <h5><span class="badge badge-secondary">{{ ucfirst($post->status) }}</span></h5>
                                        @else
                                            <h5>error</h5>
                                        @endif
                                    </td>
                                    <td>@if($post->published_date)
                                        {{ $post->published_date->diffForHumans() }}
                                        @else
                                        Not Published
                                            @endif
                                    </td>
                                    <td>
                                        {{ $post->authors->name }}
                                    </td>
                                    <td>
                                        <span><a href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a></span>
                                        <span><a href="#" class="btn btn-primary flex-last"><i class="fa fa-edit"></i></a></span>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>

                        {{ $posts->links('vendor.pagination.bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
