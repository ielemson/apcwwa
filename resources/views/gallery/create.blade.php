@extends('layouts.app')
@push('pg_btn')
    <a href="{{route('gallery.index')}}" class="btn btn-sm btn-neutral">All Gallery</a>
@endpush
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-body">
                    {!! Form::open(['route' => 'gallery.store', 'files' => true]) !!}
                    <h6 class="heading-small text-muted mb-4">Gallery information</h6>
                        <div class="pl-lg-4">
                            <div class="row">

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        {{ Form::label('title', 'Gallery title', ['class' => 'form-control-label']) }}
                                        {{ Form::text('title', null, ['class' => 'form-control']) }}
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        {{ Form::label('caption', 'Caption', ['class' => 'form-control-label']) }}
                                        {{ Form::text('caption', null, ['class' => 'form-control']) }}
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="category" class="form-control-label">Gallery Category</label>
                                        <select class="form-control" name="category" id="category">
                                            <option value="">Select Status</option>
                                            <option value="dnc">dnc</option>
                                            <option value="state">state</option>
                                            <option value="event">event</option>
                                            <option value="post">post</option>
                                        </select>
                                    </div>
                                </div>

                                {{-- <div class="col-lg-6">
                                    <div class="form-group">
                                        {{ Form::label('category_id', 'Select Category', ['class' => 'form-control-label']) }}
                                        {{ Form::select('category_id', $categories, null, [ 'class'=> 'selectpicker form-control', 'placeholder' => 'Select category...']) }}
                                    </div>
                                </div> --}}

                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{ Form::label('featured_image', 'Featured image', ['class' => 'form-control-label d-block']) }}
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                              <a id="uploadFile" data-input="thumbnail" data-preview="holder" class="btn btn-secondary">
                                                <i class="fa fa-picture-o"></i> Choose Image
                                              </a>
                                            </span>
                                            <input id="thumbnail" class="form-control d-none" type="text" name="image_path">
                                        </div>
                                </div>
                            </div>
                            </div>
                         
                        </div>

                        <hr class="my-4" />
                        <div class="pl-lg-4">
                            
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
    });
  </script>
@endpush