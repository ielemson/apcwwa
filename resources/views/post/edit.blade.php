@extends('layouts.app')
@push('pg_btn')
    <a href="{{route('post.index')}}" class="btn btn-sm btn-neutral">All Posts</a>
@endpush
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-body">
                    {!! Form::open(['route' => ['post.update', $post], 'method'=>'put', 'files' => true]) !!}
                    <h6 class="heading-small text-muted mb-4">Post information</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{ Form::label('post_title', 'Post title', ['class' => 'form-control-label']) }}
                                        {{ Form::text('post_title', $post->post_title, ['class' => 'form-control']) }}
                                    </div>
                                </div>
                                {{-- <div class="col-lg-6"> --}}
                                    {{-- <div class="form-group"> --}}
                                        {{-- {{ Form::label('postID', 'Post title', ['class' => 'form-control-label']) }} --}}
                                        {{ Form::hidden('postID', $post->id, ['class' => 'form-control']) }}
                                    {{-- </div> --}}
                                {{-- </div> --}}

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{-- <label for="event_status" class="form-control-label">Post Type</label>
                                        <br> --}}
                                        {{-- <select class="form-control" name="post_type_id[]" id="post_type_id" multiple="multiple">
                    
                                            @foreach ($postType as $type)
                                            <option value="{{$type->id}}">{{$type->type}}</option>
                                            @endforeach
                                        </select>
                                        @error('event_status')
                                        <div class="text-danger text-sm mt-1 mb-1">{{ $message }}</div>
                                       @enderror --}}
                                       {{ Form::label('post_type', 'Selected Type', ['class' => 'form-control-label']) }}
                                        {{ Form::select('post_type[]', $postType, $typeIds, [ 'class'=> 'selectpicker form-control','multiple']) }}
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="state_name" class="form-control-label">Select State</label>
                                        <select class="form-control" name="state_id" type="text" id="state">
                                            <option>Select States</option>
                                            @foreach ($states as $state)
                                            @if ($state->id == $post->state_id)
                                            <option value="{{ $state->id }}" selected>{{ $state->name }}</option>
                                            @else
                                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                                                
                                            @endif
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
                                        {{ Form::select('category_id', $categories, $post->category_id, [ 'class'=> 'selectpicker form-control', 'placeholder' => 'Select category...']) }}
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{ Form::label('featured_image', 'Featured image', ['class' => 'form-control-label d-block']) }}
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                              <a id="uploadFile" data-input="thumbnail" data-preview="holder" class="btn btn-secondary">
                                                <i class="fa fa-picture-o"></i> Choose Image
                                              </a>
                                            </span>
                                            <input id="thumbnail" class="form-control d-none" type="text" name="featured_image">
                                        </div>
                                </div>
                            </div>

                                        <div class="col-md-2">
                                            @if ($post->featured_image)
                                                <a href="{{ asset($post->featured_image) }}" target="_blank">
                                                    <img alt="Image placeholder"
                                                    class="avatar avatar-xl  rounded-circle"
                                                    data-toggle="tooltip" data-original-title="{{ $post->name }} Logo"
                                                    src="{{ asset($post->featured_image) }}">
                                                </a>
                                            @endif
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
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        {{ Form::label('post_body', 'Post Body', ['class' => 'form-control-label']) }}
                                        {!! Form::textarea('post_body', $post->post_body, ['id'=>"summernote", 'class'=> 'form-control',]) !!}
                                    </div>
                                </div>

                            </div>
                        </div>
                      
                        <hr class="my-4" />
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="status" value="1" {{ $post->status ? 'checked' : ''}}  class="custom-control-input" id="status">
                                        {{ Form::label('status', 'Status', ['class' => 'custom-control-label']) }}
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    {{ Form::submit('Submit', ['class'=> 'mt-5 btn btn-primary']) }}
                                </div>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>

                
                <div class="card-body">
                    {!! Form::open(['route' => ['pt.del', $post], 'method'=>'post', 'files' => true]) !!}
                    <h6 class="heading-small text-muted mb-4">Remove Post Type</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{ Form::label('post_title', 'Post title', ['class' => 'form-control-label']) }}
                                        {{ Form::text('post_title', $post->post_title, ['class' => 'form-control']) }}
                                       
                                    </div>
                                </div>
                                {{-- <div class="col-lg-6"> --}}
                                    {{-- <div class="form-group"> --}}
                                        {{-- {{ Form::label('postID', 'Post title', ['class' => 'form-control-label']) }} --}}
                                        {{ Form::hidden('postID', $post->id, ['class' => 'form-control','readonly']) }}
                                    {{-- </div> --}}
                                {{-- </div> --}}

                                <div class="col-lg-6">
                                    <div class="form-group">
                                       
                                       {{ Form::label('type_id', 'Selected Type To Remove', ['class' => 'form-control-label']) }}
                                        {{ Form::select('type_id', $postType, $typeIds, [ 'class'=> 'selectpicker form-control']) }}
                                    </div>
                                </div>

                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            {{ Form::submit('Delete Post Type', ['class'=> 'mt-5 btn btn-danger']) }}
                                        </div>
                                    </div>
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
    <link rel="stylesheet" href="{{asset('apcwwa/css/bootstrap-multiselect.min.css')}}">
    <style>
        
       #thumb-output img{
        margin: 10px 5px 0 0;
           width: 50px;
           height: 50px;
       }
    </style>
@endpush

@push('scripts')
<script src="{{ asset('assets/js/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
<script src="{{asset('apcwwa/js/bootstrap-multiselect.min.js')}}"></script>
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


@endpush
