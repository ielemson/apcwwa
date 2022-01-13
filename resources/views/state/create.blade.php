@extends('layouts.app')
@push('pg_btn')
    <a href="{{ route('state.index') }}" class="btn btn-sm btn-neutral">All States</a>
@endpush
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-body">
                    {!! Form::open(['route' => 'state.store']) !!}
                    <h6 class="heading-small text-muted mb-4">Add State</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    {{ Form::label('name', 'State Name', ['class' => 'form-control-label']) }}
                                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                                </div>

                               
                            </div>
                            <div class="col-lg-6">
                             
                                <div class="form-group">
                                    {{ Form::label('slogan', 'State Slogan', ['class' => 'form-control-label']) }}
                                    {{ Form::text('slogan', null, ['class' => 'form-control']) }}
                                </div>
                               
                            </div>

                            {{-- <div class="col-lg-6">
                                <div class="form-group">
                                    {{ Form::label('lga_name', 'LGA Name', ['class' => 'form-control-label']) }}
                                    {{ Form::text('lga_name', null, ['class' => 'form-control']) }}
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="pl-lg-4">
                        <div class="row">
                            {{-- <div class="col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="status" value="1" class="custom-control-input" id="status">
                                        {{ Form::label('status', 'Status', ['class' => 'custom-control-label']) }}
                                    </div>
                                </div> --}}
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


    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-body">
                    {!! Form::open(['route' => 'lga.store']) !!}
                    <h6 class="heading-small text-muted mb-4">Add Local Govt</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name" class="form-control-label">State Name</label>
                                    <select class="form-control" name="state_id" type="text">
                                        <option value="">Select States</option>
                                        @foreach ($states as $state)
                                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                                        @endforeach
    
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    {{ Form::label('name', 'LGA Name', ['class' => 'form-control-label']) }}
                                    {{ Form::text('name', null, ['class' => 'form-control']) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pl-lg-4">
                        <div class="row">
                            {{-- <div class="col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="status" value="1" class="custom-control-input" id="status">
                                        {{ Form::label('status', 'Status', ['class' => 'custom-control-label']) }}
                                    </div>
                                </div> --}}
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


    <div class="col-md-12">
        <div class="card mb-5">
            <div class="card-body">
                {!! Form::open(['route' => 'ward.store']) !!}
                <h6 class="heading-small text-muted mb-4">Add Ward </h6>
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="name" class="form-control-label">State Name</label>
                                <select class="form-control" name="state_id" type="text" id="state">
                                    <option value="">Select States</option>
                                    @foreach ($states as $state)
                                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            {{-- <div class="form-group">
                                        {{ Form::label('name', 'LGA Name', ['class' => 'form-control-label']) }}
                                        {{ Form::text('name', null, ['class' => 'form-control']) }}
                                    </div> --}}

                            <label for="name" class="form-control-label">LGA Name</label>

                            <select class="form-control" name="lga_id" type="text" id="lga">
                                <option>LGA</option>
                            </select>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group">
                                {{ Form::label('name', 'Ward Name', ['class' => 'form-control-label']) }}
                                {{ Form::text('name', null, ['class' => 'form-control']) }}
                            </div>


                        </div>
                    </div>
                </div>
                <div class="pl-lg-4">
                    <div class="row">
                        {{-- <div class="col-md-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="status" value="1" class="custom-control-input" id="status">
                                        {{ Form::label('status', 'Status', ['class' => 'custom-control-label']) }}
                                    </div>
                                </div> --}}
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
    </div>
@endsection

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
        });
    </script>
@endpush
