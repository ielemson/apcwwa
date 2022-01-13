@extends('layouts.app')
@push('pg_btn')
    <a href="{{ route('state.index') }}" class="btn btn-sm btn-neutral">All States</a>
@endpush
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-body">
                    {!! Form::open(['route' => ['state.update',$state], 'method'=>'put']) !!}
                    <h6 class="heading-small text-muted mb-4">Update State</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    {{ Form::label('name', 'State Name', ['class' => 'form-control-label']) }}
                                    {{ Form::text('name', $state->name, ['class' => 'form-control']) }}
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
                                {{ Form::submit('Update State', ['class' => 'mt-5 btn btn-primary']) }}
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
                    {!! Form::open(['route' => 'lga_update']) !!}
                    <h6 class="heading-small text-muted mb-4">Edit Local Govt</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name" class="form-control-label">Select LGA</label>
                                    <select class="form-control" name="lga_id" type="text">
                                        <option value="">Select LGA in {{$state->name}} to update</option>
                                        @foreach ($state->lgas as $lga)
                                            <option value="{{ $lga->id }}">{{ $lga->name }}</option>
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
                                {{ Form::submit('Update LGA', ['class' => 'mt-5 btn btn-primary']) }}
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
                {!! Form::open(['route' => 'ward_update']) !!}
                <h6 class="heading-small text-muted mb-4">Edit Ward</h6>
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="name" class="form-control-label">Select LGA</label>
                                    <select class="form-control" name="lga_id" type="text" id="Lga_Id">
                                        <option value="">Select LGA in {{$state->name}} </option>
                                        @foreach ($state->lgas as $lga)
                                            <option value="{{ $lga->id }}">{{ $lga->name }}</option>
                                        @endforeach
    
                                    </select>
                            </div>
                        </div>

                        <div class="col-lg-4">

                            <label for="name" class="form-control-label">Select Ward</label>

                            <select class="form-control" name="ward" type="text" id="ward">
                                <option>LGA</option>
                            </select>
                        </div>

                        <div class="col-lyyg-4">
                            <div class="form-group">
                                {{ Form::label('name', 'New Ward Name', ['class' => 'form-control-label']) }}
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
                            {{ Form::submit('Update Ward', ['class' => 'mt-5 btn btn-primary']) }}
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
            $('#Lga_Id').on('change', function(e) {
                let lga_id = e.target.value;
                $.ajax({
                    url: "{{ route('getWard') }}",
                    type: "POST",
                    data: {
                        lga_id: lga_id
                    },
                    success: function(data) {
                        $('#ward').empty();
                        $.each(data.wards, function(index,
                        ward) {
                            $('#ward').append('<option value="' + ward
                                .id + '">' + ward.name + '</option>');
                        })
                        // console.log(data);
                    }
                })
            });
        });
    </script>
@endpush
