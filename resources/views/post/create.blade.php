@extends('layouts.app')
@push('pg_btn')
    <a href="{{route('post.index')}}" class="btn btn-sm btn-neutral">All Posts</a>
@endpush
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-body">
                    {!! Form::open(['route' => 'post.store', 'files' => true]) !!}
                    <h6 class="heading-small text-muted mb-4">Post information</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{ Form::label('post_title', 'Post title', ['class' => 'form-control-label']) }}
                                        {{ Form::text('post_title', null, ['class' => 'form-control']) }}
                                        @error('post_title')
                                        <div class="text-danger text-sm mt-1 mb-1">{{ $message }}</div>
                                       @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{-- <label for="event_status" class="form-control-label">Post Type</label>
                                        <br>
                                        <select class="form-control" name="post_type_id[]" id="post_type_id" multiple="multiple">
                    
                                            @foreach ($postType as $type)
                                            <option value="{{$type->id}}">{{$type->type}}</option>
                                            @endforeach
                                        </select> --}}
                                        {{ Form::label('post_type_id', 'Select Category', ['class' => 'form-control-label']) }}
                                        {{ Form::select('post_type_id[]', $postType, null, [ 'class'=> 'selectpicker form-control', 'multiple']) }}
                                        @error('event_status')
                                        <div class="text-danger text-sm mt-1 mb-1">{{ $message }}</div>
                                       @enderror

                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="state_name" class="form-control-label">Select State</label>
                                        <select class="form-control" name="state_id" type="text" id="state">
                                            <option>Select States</option>
                                            @foreach ($states as $state)
                                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                                            @endforeach
        
                                        </select>
                                    </div>
                                </div>
        
                                <div class="col-lg-6">
                                 
                                    <label for="lga_name" class="form-control-label">Select LGA</label>
        
                                    <select class="form-control" name="lga_id" type="text" id="lga">
                                        <option>LGA</option>
                                    </select>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{ Form::label('category_id', 'Select Category', ['class' => 'form-control-label']) }}
                                        {{ Form::select('category_id', $categories, null, [ 'class'=> 'selectpicker form-control', 'placeholder' => 'Select category...']) }}
                                        @error('category_id')
                                        <div class="text-danger text-sm mt-1 mb-1">{{ $message }}</div>
                                       @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        {{ Form::label('featured_image', 'image cover', ['class' => 'form-control-label d-block']) }}
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                              <a id="uploadFile" data-input="thumbnail" data-preview="holder" class="btn btn-secondary">
                                                <i class="fa fa-picture-o"></i> Choose Image
                                              </a>
                                            </span>
                                            <input id="thumbnail" class="form-control d-none" type="text" name="featured_image">
                                          
                                        </div>
                                        @error('featured_image')
                                        <div class="text-danger text-sm mt-1 mb-1">{{ $message }}</div>
                                       @enderror
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            {{ Form::label('Post File', 'Picture Gallery', ['class' => 'form-control-label']) }}
                                            <input type="file" id="file-input" class="form-control"  name="images[]" onchange="loadPreview(this)"  multiple=""/>
                                            <div id="thumb-output"></div>
                                            {{-- @error('post_title')
                                            <div class="text-danger text-sm mt-1 mb-1">{{ $message }}</div>
                                           @enderror --}}
                                        </div>
                                    </div>
    
                                </div>
                            </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        {{ Form::label('post_body', 'Post Body', ['class' => 'form-control-label']) }}
                                        {!! Form::textarea('post_body', null, ['id'=>"summernote", 'class'=> 'form-control',]) !!}
                                        @error('post_body')
                                        <div class="text-danger text-sm mt-1 mb-1">{{ $message }}</div>
                                       @enderror
                                    </div>
                                </div>

                            </div>
                        </div>

                        <hr class="my-4" />
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="status" value="1" class="custom-control-input" id="status">
                                        {{ Form::label('status', 'Publish', ['class' => 'custom-control-label']) }}
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    {{ Form::submit('Submit', ['class'=> 'mt-5 btn btn-primary']) }}
                                </div>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/summernote-bs4.min.css') }}">
    <style>
        .thumb{
           margin: 10px 5px 0 0;
           width: 25%;
            border:2px solid red
       }
    </style>

<link rel="stylesheet" href="{{asset('apcwwa/css/bootstrap-multiselect.min.css')}}">

@endpush
@push('scripts')

<script src="{{ asset('assets/js/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
<script>
    jQuery(document).ready(function() {
        jQuery('#summernote').summernote({
            height: 150,
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
              ]

        });
        jQuery('#uploadFile').filemanager('file');

        $('#post_type_id').multiselect();
    });


    // multiple image loader
    function loadPreview(input){
        var data = $(input)[0].files;
        $.each(data, function(index, file){
            if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){
                var fRead = new FileReader();
                fRead.onload = (function(file){
                    return function(e) {
                        var img = $('<img/>').addClass('thumb').attr('src', e.target.result); //create image thumb element
                        $('#thumb-output').append(img);
                    };
                })(file);
                fRead.readAsDataURL(file);
            }
        });
    }
    
  </script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function() {
        $('#state').on('change', function(e) {
            let state_id = e.target.value;
            $.ajax({
                url: "{{ route('getLga') }}",
                type: "POST",
                data: {
                    state_id: state_id
                },
                success: function(data) {
                    $('#lga').empty();
                    $.each(data.lga, function(index,
                    lga) {
                        $('#lga').append('<option value="' + lga
                            .id + '">' + lga.name + '</option>');
                    })
                    // console.log(data);
                }
            })
        });

        // $('#lga').on('change', function(e) {
        //     let lga_id = e.target.value;
        //     let state_id = $('#state').val();
        //    console.log(state_id);
        // });
    });
</script>

<script src="{{asset('apcwwa/js/bootstrap-multiselect.min.js')}}"></script>

@endpush
