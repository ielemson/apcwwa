@extends('layouts.app')
@push('pg_btn')
    <a href="{{route('slider.index')}}" class="btn btn-sm btn-neutral">All Sliders</a>
@endpush
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-body">
                    {!! Form::open(['route' => 'slider.store', 'files' => true]) !!}
                    <h6 class="heading-small text-muted mb-4">Service information</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{-- {{ Form::label('title', 'Slider title - 1', ['class' => 'form-control-label']) }}
                                        {{ Form::textarea('title1', null, ['class' => 'form-control']) }} --}}
                                        <label for="name" class="form-control-label selectpicker">Slider Title - 1</label>
                                        <textarea class="form-control" name="title1" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{-- {{ Form::label('title', 'Slider title - 2', ['class' => 'form-control-label']) }}
                                        {!! Form::textarea('title2', null, ['class' => 'form-control']) !!} --}}
                                        <label for="name" class="form-control-label selectpicker">Slider Title - 2</label>
                                        <textarea class="form-control" name="title2" rows="2"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        {{ Form::label('state', 'Select State', ['class' => 'form-control-label']) }}
                                        {{ Form::select('state_id', $states, null, [ 'class'=> 'selectpicker form-control', 'placeholder' => 'Select state...']) }}
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        {{ Form::label('position', 'Slider Position', ['class' => 'form-control-label']) }}
                                        {{ Form::select('position', $slider_position, null, [ 'class'=> 'selectpicker form-control', 'placeholder' => 'Select position...']) }}
                                        {{-- <label for="name" class="form-control-label selectpicker">Slider Display Position</label>
                                        <select class="form-control" name="position">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                         </select> --}}
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        {{-- {{ Form::label('Status', 'Where to display', ['class' => 'form-control-label']) }}
                                        {{ Form::select('status', $status, null, [ 'class'=> 'selectpicker form-control', 'placeholder' => 'Select position...']) }} --}}
                                       
                                            <label for="name" class="form-control-label selectpicker">Slider Display Status</label>
                                            <select class="form-control" name="status">
                                                <option value="">Select States</option>
                                                @foreach ($status as $disp)
                                                    <option value="{{ $disp->status}}">{{ $disp->status }}</option>
                                                @endforeach
            
                                            </select>
                                  
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        {{ Form::label('image', 'Slider image', ['class' => 'form-control-label d-block']) }}
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                              <a id="uploadFile" data-input="thumbnail" data-preview="holder" class="btn btn-secondary">
                                                <i class="fa fa-picture-o"></i> Choose Image
                                              </a>
                                            </span>
                                            <input id="thumbnail" class="form-control d-none" type="text" name="image">
                                        </div>
                                </div>
                            </div>
                            </div>
                            {{-- <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        {{ Form::label('content', 'Content', ['class' => 'form-control-label']) }}
                                        {!! Form::textarea('content', null, ['id'=>"summernote", 'class'=> 'form-control',]) !!}
                                    </div>
                                </div>

                            </div> --}}
                        </div>

                        <hr class="my-4" />
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
        jQuery('.summernote').summernote({
            height: 50,
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
