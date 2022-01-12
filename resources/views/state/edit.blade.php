@extends('layouts.app')
@push('pg_btn')
    <a href="{{ route('state.index') }}" class="btn btn-sm btn-neutral">All States</a>
@endpush
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-body">
                    {!! Form::open(['route' => ['state.update', $state], 'method'=>'patch', 'files' => true]) !!}
                    <h6 class="heading-small text-muted mb-4">State & LGA information</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    {{ Form::label('state_name', 'State Name', ['class' => 'form-control-label']) }}
                                    {{ Form::text('state_name', $state->name, ['class' => 'form-control']) }}
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="lga" class="form-control-label">LGA</label>
                                    <select class="form-control" name="lga_id" type="text" id="lga">
                                        <option value="">Select LGA</option>
                                        @foreach ($state->lgas as $lga)
                                        <option value="{{$lga->id}}">{{$lga->name}}</option>
                                        @endforeach
                                       
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    {{ Form::label('New LGA Name', 'New LGA Name', ['class' => 'form-control-label']) }}
                                    {{ Form::text('lga_name', null, ['class' => 'form-control']) }}
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="ward_id" class="form-control-label">Ward</label>
                                    <select class="form-control" name="ward_id" type="text" id="ward_id">
                                        <option value="">Select Ward</option>
                                        @foreach ($state->wards as $ward)
                                        <option value="{{$ward->id}}">{{$ward->name}}</option>
                                        @endforeach
                                       
                                    </select>
                                </div>
                            </div>

                            
                            <div class="col-lg-4">
                                <div class="form-group">
                                    {{ Form::label('New LGA Name', 'New LGA Ward', ['class' => 'form-control-label']) }}
                                    {{ Form::text('ward_name', null, ['class' => 'form-control']) }}
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
