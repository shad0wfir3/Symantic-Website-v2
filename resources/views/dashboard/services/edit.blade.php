@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mb-4">Edit: {{ $service->name }}</h1>
            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('services.update',$service->id) }}" enctype="multipart/form-data">
                            @method('patch')
                           @csrf
                            <h4>Service Details
                                <span class="float-right switch switch-sm">
                                    <input type="checkbox" @if($service->status == 'published') checked @endif class="switch switch_publish" name="publish" id="switch-sm">
                                    <label for="switch-sm" id="checkbox_display">@if($service->status == 'published')Published @else Draft @endif</label>

                                </span>
                            </h4>
                            <hr>
                            <div class="form-row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="service_name">Display Name</label>
                                        <input type="text" class="form-control" id="service_name" name="service_name" placeholder="Service Display Name" value="{{old('service_name',$service->name)}}">
                                        <small id="featured_img_help" class="form-text text-muted">Name of the Service</small>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label for="service_slug">Slug</label>
                                                <input type="text" class="form-control" id="service_slug" name="service_slug" placeholder="Service Slug" value="{{ old('service_slug',$service->slug) }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="service_icon">Icon</label>
                                                <input type="text" class="form-control" id="service_icon" name="service_icon" placeholder="Icon" value="{{ old('service_icon',$service->icon) }}">
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="form-group col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Featured Image</label>
                                        <input type="file" class="form-control-file img_upload" id="featured_img" name="featured_img" aria-describedby="fileHelp">
                                        <small id="featured_img_help" class="form-text text-muted">Image featured behind the header on the service page</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Page Image</label>
                                        <input type="file" class="form-control-file img_upload" name="page_img" id="page_img" aria-describedby="fileHelp">
                                        <small id="fileHelp" class="form-text text-muted">Image featured on the page next to the content</small>
                                    </div>
                                </div>
                            </div>
                                <div class="form-group">
                                    <label for="exampleTextarea">Short Description</label>
                                    <textarea class="form-control" id="service_short_description" name="service_short_description" rows="2" style="resize: none" placeholder="Short Description for the Service (used on the home page)">{{ old('service_short_description',$service->short_description) }}</textarea>
                                    <small id="contentHelp" class="form-text text-muted">Displayed on the home page and on the header of the service page</small>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress2">Content</label>
                                    <textarea class="form-control" id="service_content" name="service_content" rows="10" placeholder="Service Content displayed on the right side of the page">
                                        {{ old('service_content',$service->content) }}
                                    </textarea>
                                    <small id="contentHelp" class="form-text text-muted">Content to display on the service page</small>
                                </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="requestType">Request Display</label>
                                    <select id="requestType" name="request_type" class="form-control">
                                        <option value="contact" {{ $service->request_type == 'contact' ? "selected" : "" }}>Contact Us</option>
                                        <option value="quote" {{ $service->request_type == 'quote' ? "selected" : "" }}>Quote</option>
                                    </select>
                                </div>
                            </div>

                            <hr>
                            <h4>Service Breakdown</h4>
                            <hr>
                            <div class="control">
                                @php($count = 0)
                                @foreach($service->breakdown_services['services'] as $single_sub_service)
                                    <div class="entry">
                                        <div class="form-row">
                                            <div class="form-group col-md-4">
                                                <input class="form-control service_icon" name="sub_service[s{{ $count }}][icon]" type="text" placeholder="Service Icon" value="{{ $single_sub_service['icon'] }}" />
                                                <small id="service_Sub" class="form-text text-muted">Icon to display on the services page</small>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <input class="form-control service_name" name="sub_service[s{{ $count }}][name]" type="text" placeholder="Sub Service Name" value="{{ $single_sub_service['name'] }}" />
                                                <small id="service_Sub" class="form-text text-muted">Name of Service to display</small>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <button type="button" id="" class="btn btn-primary btn-add"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    @php($count++)
                                @endforeach
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary float-right">Update Service</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page_scripts')
    <script src="{{asset('js/tinymce/jquery.tinymce.min.js')}}"></script>
    <script src="{{asset('js/tinymce/tinymce.min.js')}}"></script>

    <script>
        var editor_config = {
            path_absolute : "/",
            selector: "textarea#service_content",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern codesample",
                "toc imagetools help"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic strikethrough | alignleft aligncenter alignright alignjustify | ltr rtl | bullist numlist outdent indent removeformat formatselect| link image media | emoticons charmap | code codesample | forecolor backcolor",
            browser_spellcheck: true,
            relative_urls: false,
            remove_script_host: false,
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinymce.activeEditor.windowManager.open({
                    file: '<?= route('elfinder.tinymce4') ?>',// use an absolute path!
                    title: 'File manager',
                    width: 900,
                    height: 450,
                    resizable: 'yes'
                }, {
                    setUrl: function (url) {
                        win.document.getElementById(field_name).value = url;
                    }
                });
            }
        };

        tinymce.init(editor_config);
    </script>
    <script>
        {!! \File::get(base_path('vendor/barryvdh/laravel-elfinder/resources/assets/js/standalonepopup.min.js')) !!}
    </script>
    <script>
        $(document).ready(function(){

            var count = {{ $service->breakdown_services['service_count'] }};

            $(document).on('click', '.btn-add', function(e)
            {
                e.preventDefault();

                var controlForm = $('.control'),
                    currentEntry = $(this).parents('.entry:last'),
                    newEntry = $(currentEntry.clone()).appendTo(controlForm);

                count++;

                newEntry.find('input').val('');
                newEntry.find("input.service_icon").attr("name","sub_service[s"+count+"][icon]");
                newEntry.find("input.service_name").attr("name","sub_service[s"+count+"][name]");
                controlForm.find('.entry:not(:last) .btn-add')
                    .removeClass('btn-add').addClass('btn-remove')
                    .removeClass('btn-success').addClass('btn-danger')
                    .html('<i class="fa fa-minus">');
            }).on('click', '.btn-remove', function(e)
            {
                $(this).parents('.entry').remove();

                e.preventDefault();
                return false;
            });


            //Create slug as typed
            $('#service_name').on('keyup change',function(){
                var slug = convertToSlug($(this).val());
                $('#service_slug').val(slug);
            })


            //Ajax Switch Status
            $('.switch_publish').on('change', function() {
                var checkbox_value = 0;

                if ($(this).is(":checked")){
                    checkbox_value = 'published';
                }else{
                    checkbox_value = 'draft';
                }

                $.ajax({
                    type: "POST",
                    url: '{{ route('service.status',$service->id) }}',
                    data: {
                        '_token' : "{{ csrf_token() }}",
                        'checkbox' : checkbox_value
                    },
                    success: function(data){
                        $('label#checkbox_display').html(data);
                    }
                });
            });








        });


        function convertToSlug(Text)
        {
            return Text
                .toLowerCase()
                .replace(/[^\w ]+/g,'')
                .replace(/ +/g,'-')
                ;
        }
    </script>
@endsection