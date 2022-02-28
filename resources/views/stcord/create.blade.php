@extends('layouts.app')
@push('pg_btn')
    <a href="{{route('statecord.index')}}" class="btn btn-sm btn-neutral">All State Cord</a>
@endpush
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-body">
                    {!! Form::open(['route' => 'statecord.store']) !!}
                    <h6 class="heading-small text-muted mb-4">Zonal Cord information</h6>
                        <div class="pl-lg-4">
                        
                            <div class="row">
                            
                             
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        {{ Form::label('user_id', 'Select State Cordinator', ['class' => 'form-control-label']) }}
                                        {{ Form::select('user_id', $users, null, [ 'class'=> 'selectpicker form-control', 'placeholder' => 'Select user...']) }}
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        {{ Form::label('state_id', 'Select State', ['class' => 'form-control-label']) }}
                                        {{ Form::select('state_id', $states, null, [ 'class'=> 'selectpicker form-control', 'placeholder' => 'Select state...']) }}
                                    </div>
                                </div>


                                <div class="col-lg-4">
                                    <div class="form-group">
                                        {{-- {{ Form::label('zonal_cord_id', 'Select Zonal Cordinator', ['class' => 'form-control-label']) }}
                                        {{ Form::select('zonal_cord_id', $zonalCords, null, [ 'class'=> 'selectpicker form-control', 'placeholder' => 'Select state...']) }} --}}
                                        <label for="zonal_cord_id" class="form-control-label selectpicker">Select Zonal Coordinator</label>
                                            <select class="form-control" name="zone_id">
                                                <option value="">Select Zonal Cordinator</option>
                                                @foreach ($zonalCords as $zone)
                                                    <option value="{{ $zone->id}}">{{ $zone->user->name }} - {{$zone->zone}}</option>
                                                @endforeach
            
                                            </select>
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
