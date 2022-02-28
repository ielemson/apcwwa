@extends('layouts.app')
@push('pg_btn')
    <a href="{{route('zonal_state_cord.index')}}" class="btn btn-sm btn-neutral">All Users</a>
@endpush
@section('content')
    <div class="row">
        <div class="col-md-12">

            <div class="card mb-5">
               
            <div class="card mb-5">
                <div class="card-body">
                    {!! Form::open(['route' => ['zonal_state_cord.update', $zone_state_cord], 'method'=>'put']) !!}
                    <h6 class="heading-small text-muted mb-4">Zonal Cord information</h6>
                        <div class="pl-lg-4">
                        
                            <div class="row">
                            
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="user" class="form-control-label selectpicker">Select User</label>
                                        <select class="form-control" name="user_id" id="user_id">
                                            <option>Select Status</option>
                                            @foreach ($users as $user)
                                            @if ($user->id == $zone_state_cord->user_id)
                                            <option value="{{$user->id}}" selected>{{$user->name}}</option>
                                            @else
                                            <option value="{{$user->id}}">{{$user->name}}</option>
                                            @endif
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                </div>
                                

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        {{ Form::label('Portfolio', 'Portfolio', ['class' => 'form-control-label']) }}
                                        {{ Form::text('portfolio', $zone_state_cord->portfolio, ['class' => 'form-control','placeholder'=>' Zone e.g South East']) }}
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
