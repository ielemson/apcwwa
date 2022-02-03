@extends('layouts.app')
@push('pg_btn')
    <a href="{{ route('state.create') }}" class="btn btn-sm btn-neutral">Create States</a>
@endpush
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card mb-5">
            <div class="card-header">
                <h3>Tables</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div>
                        <table class="table align-items-center">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">State</th>
                                    <th scope="col" class="sort" data-sort="name">Slogan</th>
                                    <th scope="col" class="sort" data-sort="budget">LGA</th>
                                    <th scope="col" class="sort" data-sort="budget">LGA-Total</th>
                                    <th scope="col" class="sort" data-sort="status">Ward</th>
                                    {{-- <th scope="col" class="sort" data-sort="completion">Completion</th> --}}
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                              @if (count($states) > 0)
                                  
                              @foreach ($states as $state)
                              <tr>
                               <td>
                                   {{$state->name}}
                               </td>
                               <td>
                                   {{$state->slogan}}
                               </td>

                               <td class="budget">
                                {{count($state->lgas)}}
                               
                             </td>
                                <td class="budget">
                                    @foreach ($state->lgas as $lga)
                                  <span class="badge badge-pill badge-default">{{$lga->name}}</span>
                                    @endforeach
                                </td>
                                
                                <td>
                                   @foreach ($state->wards as $ward)
                                       
                                       <span class="badge badge-pill badge-default">{{$ward->name}}</span>
                                   @endforeach
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-info" href="{{route('state.show',$state->id)}}">view</a>
                                    <a class="btn btn-sm btn-primary" href="{{route('state.edit',$state->id)}}">Edit</a>
                                </td>
                            </tr>
                              @endforeach
                              @else
                                  
                              @endif
                            </tbody>
                        </table>
                    </div>
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
