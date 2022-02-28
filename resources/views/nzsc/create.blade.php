@extends('layouts.app')
@push('pg_btn')
    <a href="{{route('zones.index')}}" class="btn btn-sm btn-neutral">All Zonal Cord</a>
@endpush
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-body">
                    {!! Form::open(['route' => 'zones.store']) !!}
                    <h6 class="heading-small text-muted mb-4">Zonal Cord information</h6>
                        <div class="pl-lg-4">
                        
                            <div class="row">
                            
                             
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        {{ Form::label('user_id', 'Select User', ['class' => 'form-control-label']) }}
                                        {{ Form::select('user_id', $users, null, [ 'class'=> 'selectpicker form-control', 'placeholder' => 'Select user...']) }}
                                    </div>
                                </div>
                                
                                {{-- <div class="col-lg-4">
                                    <div class="form-group">
                                        {{ Form::label('state_id', 'Select State', ['class' => 'form-control-label']) }}
                                        {{ Form::select('state_id', $states, null, [ 'class'=> 'selectpicker form-control', 'placeholder' => 'Select state...']) }}
                                    </div>
                                </div> --}}

                                

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        {{ Form::label('Zone', 'Zone', ['class' => 'form-control-label']) }}
                                        {{ Form::text('zone', null, ['class' => 'form-control','placeholder'=>' Zone e.g South East']) }}
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
                                        {{ Form::label('zone_id', 'Select Zone', ['class' => 'form-control-label']) }}
                                        {{ Form::select('zone_id', $zones, null, [ 'class'=> 'selectpicker form-control', 'placeholder' => 'Zone e. South South']) }}
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        {{ Form::label('state_id', 'Select State', ['class' => 'form-control-label']) }}
                                        {{ Form::select('state_id', $states, null, [ 'class'=> 'selectpicker form-control', 'placeholder' => 'Select State']) }}
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
