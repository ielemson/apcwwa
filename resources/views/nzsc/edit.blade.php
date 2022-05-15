@extends('layouts.app')
@push('pg_btn')
    <a href="{{route('zones.index')}}" class="btn btn-sm btn-neutral">All Zonal Cord</a>
@endpush
@section('content')


    {{-- :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: Bind Zone With State --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-body">
                    {!! Form::open(['route' => 'zone_state.store']) !!}
                    <h6 class="heading-small text-muted mb-4">Bind Zone with State</h6>
                        <div class="pl-lg-4">
                        
                            <div class="row">
                            

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="name" class="form-control-label">Zone e. South South</label>
                                        <select class="form-control selectpicker" name="zone_id" type="text">
                                            <option value="">Zone e. South South </option>
                                            @foreach ($zones as $zone_edit)
                                                @if ($zone_edit->id == $zone->id)
                                                <option value="{{ $zone_edit->id }}" selected>{{ $zone_edit->zone }}</option>
                                                @else
                                                <option value="{{ $zone_edit->id }}">{{ $zone_edit->zone }}</option>
                                                @endif
                                            @endforeach
        
                                        </select>
                                    </div>
                                </div>


                                {{-- <div class="col-lg-4">
                                    <div class="form-group">
                                        {{ Form::label('state_id', 'Select State', ['class' => 'form-control-label']) }}
                                        {{ Form::select('state_id', $states, null, [ 'class'=> 'selectpicker form-control', 'placeholder' => 'Select State']) }}
                                    </div>
                                </div> --}}

                                
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="name" class="form-control-label">States</label>
                                        <select class="form-control selectpicker" name="state_id" type="text">
                                            <option value="">Select State </option>
                                            @foreach ($states as $state)
                                                @if ($state->id == $zone->user->state->id)
                                                <option value="{{ $state->id }}" selected>{{ $state->name }}</option>
                                                @else
                                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                                                @endif
                                            @endforeach
        
                                        </select>
                                    </div>
                                </div>


                                <div class="col-lg-4">
                                    <div class="form-group">
                                        {{ Form::label('user_id', 'Select State Cord', ['class' => 'form-control-label']) }}
                                        {{ Form::select('user_id', $users, null, [ 'class'=> 'selectpicker form-control', 'placeholder' => 'Select State Cord...']) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <div class="pl-lg-4">
                            <div class="row">
                                
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

@push('scripts')
    <script src="{{ asset('vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
    <script>
        jQuery(document).ready(function(){
            jQuery('#uploadFile').filemanager('file');
        })
    </script>
@endpush
