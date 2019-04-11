@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Services <a href="{{ route('services.create') }}" class="float-right  btn btn-primary">Create New</a></h1>
            </div>
        </div>
        <div class="row">
            @foreach($services as $service)
                <div class="col-md col-sm col-lg">
                    <div class="card">
                        <img class="card-img-top" src="{{ get_cl_img($service->featured_img,['width' => '600', 'height' => '300','crop' => 'fill']) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $service->name }}
                            @if($service->status == 'published')
                                <span class="badge badge-success float-right">Published</span>
                                @else
                                    <span class="badge badge-warning float-right">Draft</span>
                                @endif

                            </h5>
                            <p class="card-text">
                                {{ $service->short_description }}
                            </p>

                            <a href="{{ route('services.edit',$service->id) }}" class="btn btn-primary float-left"><i class="fa fa-pencil"></i></a>
                            <form action="{{ route('services.destroy',$service->id) }}" method="POST">
                                @csrf
                                @method('delete')

                                <button type='submit' class="btn btn-danger float-right"> <i class="fa fa-trash"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
