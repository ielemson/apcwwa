@extends('layouts.app')
@push('pg_btn')
    <a href="{{route('desk.index')}}" class="btn btn-sm btn-neutral">All Desk</a>
@endpush
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-body">
                    {!! Form::open(['route' => ['desk.update',$desk], 'method'=>'put','files' => true]) !!}
                    <h6 class="heading-small text-muted mb-4">Create Desk</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{ Form::label('name', 'Name', ['class' => 'form-control-label']) }}
                                        {{ Form::text('name', $desk->name, ['class' => 'form-control']) }}
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{ Form::label('post', 'Post', ['class' => 'form-control-label']) }}
                                        {{ Form::text('post', $desk->post, ['class' => 'form-control']) }}
                                    </div>
                                </div>

                                 <div class="col-lg-6">
                                    <div class="form-group">
                                        {{ Form::label('user_photo', 'Photo', ['class' => 'form-control-label']) }}
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                              <a id="uploadFile" data-input="thumbnail" data-preview="holder" class="btn btn-secondary">
                                                <i class="fa fa-picture-o"></i> Choose Photo
                                              </a>
                                            </span>
                                            <input id="thumbnail" class="form-control d-none" type="text" name="user_photo">
                                        </div>
                                    </div>
                                </div>

                                    
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        {{ Form::label('speech', 'Speech', ['class' => 'form-control-label']) }}
                                        {{ Form::textarea('speech', $desk->speech, ['class' => 'form-control', 'id'=>'summernote']) }}
                                    </div>
                                </div>
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