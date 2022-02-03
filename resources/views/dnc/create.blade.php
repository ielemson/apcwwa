@extends('layouts.app')
@push('pg_btn')
    <a href="{{route('dnc.index')}}" class="btn btn-sm btn-neutral">All DNC</a>
@endpush
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-body">
                    {!! Form::open(['route' => 'dnc.store', 'files' => true]) !!}
                    <h6 class="heading-small text-muted mb-4">User information</h6>
                        <div class="pl-lg-4">
                        
                            <div class="row">
                            
                             
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        {{ Form::label('user_id', 'Select User', ['class' => 'form-control-label']) }}
                                        {{ Form::select('user_id', $users, null, [ 'class'=> 'selectpicker form-control', 'placeholder' => 'Select user...']) }}
                                    </div>
                                </div>

                                <div class="col-lg-5">
                                    <div class="form-group">
                                        {{ Form::label('post', 'DNC Post', ['class' => 'form-control-label']) }}
                                        {{ Form::text('post', null, ['class' => 'form-control','placeholder'=>'dnc post']) }}
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <div class="form-group">
                                        {{ Form::label('Order', 'Order', ['class' => 'form-control-label']) }}
                                        {{ Form::number('dnc_order', null, ['class' => 'form-control','placeholder'=>'appearance order']) }}
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
