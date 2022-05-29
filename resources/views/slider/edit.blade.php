@extends('layouts.app')
@push('pg_btn')
    <a href="{{route('slider.index')}}" class="btn btn-sm btn-neutral">All Sliders</a>
@endpush
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-body">
                    {!! Form::open(['route' => ['slider.update', $slider], 'method'=>'put', 'files' => true]) !!}
                    <h6 class="heading-small text-muted mb-4">Update Slider</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{ Form::label('title', 'Slider title - 1', ['class' => 'form-control-label']) }}
                                        {{ Form::textarea('title1', $slider->title1, ['class' => 'form-control', 'class'=>'summernote']) }}
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{ Form::label('title', 'Slider title - 2', ['class' => 'form-control-label']) }}
                                        {!! Form::textarea('title2', $slider->title2, ['class' => 'form-control', 'class'=>'summernote']) !!}
                                    </div>
                                </div>
                                    @php
                                        // $statename = $slider->state->name;
                                        $state_id = $slider->state->id;
                                        // $display =  ['front','states','dnc'];
                                    @endphp
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        {{ Form::label('state', "Select State", ['class' => 'form-control-label']) }}
                                        {{ Form::select('state_id', $states, $state_id, [ 'class'=> 'selectpicker form-control', 'placeholder' => 'Select state...']) }}
                                    </div>

                                </div>

                                    
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        {{ Form::label('position', "Update Position", ['class' => 'form-control-label']) }}
                                        {{ Form::select('position', $slider_position, $slider->position, [ 'class'=> 'selectpicker form-control', 'placeholder' => 'Select position...']) }}
                                      
                                    </div>
                                  
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        {{-- {{ Form::label('Status', "Where to display", ['class' => 'form-control-label']) }}
                                        {{ Form::select('status', $status, $slider->status, [ 'class'=> 'selectpicker form-control', 'placeholder' => 'Select position...']) }}
                                      --}}
                                        <label for="status" class="form-control-label ">Select Page</label>
                                        <select name="status" class="form-control">
                                            <option value="">Select Display Page</option>
                                            @foreach ($slider_status as $disp)
                                           @if ($disp->status == $slider->status)
                                           <option value="{{$disp->status}}" selected>{{$disp->status}}</option>
                                         
                                           @else
                                           <option value="{{$disp->status}}" >{{$disp->status}}</option>
                                         
                                           @endif
                                           
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
                                <div class="col-md-8">
                                  <img src="{{$slider->image}}" class="img-responsive w-25"/>
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

                            <hr class="my-4" />
                            <div class="col-md-12">
                          <div class="form-group">
                            {{ Form::submit('Update Slider', ['class'=> 'mt-5 btn btn-primary']) }}
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
