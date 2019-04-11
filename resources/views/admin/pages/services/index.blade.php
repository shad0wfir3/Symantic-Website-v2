@extends('admin.layouts.app')
@section('page_title')
Services
@endsection
@push('page_scripts')
    <!--This page JavaScript -->
    <script src="{{ asset('admin/assets/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/footable/js/footable.min.js') }}"></script>
    <script src="{{ asset('admin/dist/js/pages/tables/footable-init.js') }}"></script>
@endpush

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Contact Emplyee list</h4>
            <h6 class="card-subtitle"></h6>
            <button type="button" class="btn btn-info btn-rounded m-t-10 mb-2 float-right" data-toggle="modal" data-target="#add-contact">Add New Contact</button>

            <div class="table-responsive">
                <table id="demo-foo-row-toggler" class="table table-bordered" data-toggle-column="first">
                    <thead>
                    <tr>
                        <th data-breakpoints="xs">ID</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th data-breakpoints="xs sm">Description</th>
                        <th>Actions</th>
                        <th data-breakpoints="all" data-title="Image">Image</th>
                        <th data-breakpoints="all" data-title="Content">Content</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($services as $service)
                    <tr data-expanded="true">
                        <td>1</td>
                        <td>{{ $service->name }}</td>
                        <td>  @if($service->status == 'published')
                                <span class="label label-success">Published</span>
                            @else
                                <span class="label label-warning">Draft</span>
                            @endif
                        </td>
                        <td>
                            <p class="card-text">
                                {{ $service->short_description }}
                            </p>
                        </td>
                        <td>
                            <a href="{{ route('services.edit',$service->id) }}" class="btn btn-primary float-left"><i class="fa fa-pencil"></i></a>
                            <form action="{{ route('services.destroy',$service->id) }}" method="POST">
                                @csrf
                                @method('delete')

                                <button type='submit' class="btn btn-danger float-right"> <i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                        <td>
                            <img  width="40" class="rounded-circle" src="{{ get_cl_img($service->featured_img,['width' => '200', 'height' => '200','crop' => 'fill']) }}" alt="{{ $service->page_img_alt }}">
                        </td>

                        <td>
                            <a href="javascript:void(0)"><img src="../../assets/images/users/4.jpg" alt="user" width="40" class="rounded-circle" /> Genelia Deshmukh</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        <div class="row">
            @foreach($services as $service)
                <div class="col-md col-sm col-lg">
                    <div class="card">
                        <img class="card-img-top" src="" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $service->name }}
                            @if($service->status == 'published')
                                <span class="label label-success">Published</span>
                                @else
                                    <span class="label label-warning">Draft</span>
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
