@extends('layouts.app')
@push('pg_btn')
    <a href="{{ route('state-event.index') }}" class="btn btn-sm btn-neutral">All Events</a>
@endpush
@section('content')
    <div class="row">
    <div class="col-md-12">
        <div class="card mb-5">
            <div class="card-body">
              
                {!! Form::open(['route' => 'state-event.store', 'files' => true]) !!}
                <h6 class="heading-small text-muted mb-4">Create State Events</h6>
                <div class="pl-lg-4">
                    <div class="row">

                        <div class="col-lg-4">
                            <div class="form-group">
                                {{ Form::label('event_title', 'Post title', ['class' => 'form-control-label']) }}
                                {{ Form::text('event_title', null, ['class' => 'form-control']) }}
                            </div>
                        </div>

                        <div class="col-lg-4">
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

                        <div class="col-lg-4">
                         
                            <label for="lga_name" class="form-control-label">Select LGA</label>

                            <select class="form-control" name="lga_id" type="text" id="lga">
                                <option>LGA</option>
                            </select>
                        </div>

                        {{-- <div class="col-lg-3">
                            <div class="form-group">
                                {{ Form::label('ward_id', 'Ward Name', ['class' => 'form-control-label']) }}
                                {{ Form::text('ward_id', null, ['class' => 'form-control']) }}
                            </div>

                        </div> --}}

                        <div class="col-lg-12">
                            <div class="form-group">
                                {{ Form::label('event_body', 'Post Body', ['class' => 'form-control-label']) }}
                                {!! Form::textarea('event_body', null, ['id'=>"summernote", 'class'=> 'form-control',]) !!}
                            </div>
                        </div>

                        <div class="col-lg-3">
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

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    {{ Form::label('post_body', 'Picture Gallery', ['class' => 'form-control-label']) }}
                                    <input type="file" id="file-input" class="form-control"  name="images[]" onchange="loadPreview(this)"  multiple=""/>
                                    <div id="thumb-output"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="status" value="1" class="custom-control-input" id="status">
                                        {{ Form::label('status', 'Status', ['class' => 'custom-control-label']) }}
                                    </div>
                                </div>
                        <div class="col-md-12">
                            {{ Form::submit('Submit', ['class' => 'mt-5 btn btn-primary']) }}
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
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
           height: 15vh;
 
       }
   </style>
@endpush

@push('scripts')
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
