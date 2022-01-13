@extends('layouts.app')
@push('pg_btn')
    <a href="{{ route('slider.create') }}" class="btn btn-sm btn-neutral">Create Slider</a>
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
                                    <th scope="col" class="sort" data-sort="name">Image</th>
                                    <th scope="col" class="sort" data-sort="budget">Position</th>
                                    <th scope="col" class="sort" data-sort="completion">Display</th>
                                    <th scope="col" class="sort" data-sort="status">State</th>
                                   
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                              @if (count($sliders) > 0)
                                  
                              @foreach ($sliders as $slider)
                              <tr>
                               <td>
                                <div class="media align-items-center">
                                    <a href="#" class="avatar rounded-circle mr-3">
                                        <img alt="Image placeholder" src="{{$slider->image}}">
                                    </a>
                                   
                                </div>
                               </td>
                                <td class="budget">
                                 {{$slider->position}}
                                </td>
                                <td class="budget">
                                 {{$slider->status}}
                                </td>
                               
                                <td>
                                   {{$slider->state->name ?? ''}}
                                </td>
                                      
                        <td class="text-center">
                            @can('destroy-user')
                            {!! Form::open(['route' => ['slider.destroy', $slider],'method' => 'delete',  'class'=>'d-inline-block dform']) !!}
                            @endcan
                            @can('view-user')
                            <a class="btn btn-primary btn-sm m-1" data-toggle="tooltip" data-placement="top" title="View and edit slider details" href="{{route('slider.show', $slider)}}">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>
                            @endcan
                            @can('update-slider')
                            <a class="btn btn-info btn-sm m-1" data-toggle="tooltip" data-placement="top" title="Edit slider details" href="{{route('slider.edit',$slider)}}">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                            </a>
                            @endcan
                            @can('destroy-slider')
                                <button type="submit" class="btn delete btn-danger btn-sm m-1" data-toggle="tooltip" data-placement="top" title="Delete slider" href="">
                                    <i class="fas fa-trash"></i>
                                </button>
                            {!! Form::close() !!}
                            @endcan
                        </td>
                            </tr>
                              @endforeach
                              @else
                              <div class="alert alert-info block" role="alert">
                                <strong>Info!</strong> No Slider Found
                            </div>
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
            $('#slider').on('change', function(e) {
                let slider_id = e.target.value;
                $.ajax({
                    url: "{{ route('getLga') }}",
                    type: "POST",
                    data: {
                        slider_id: slider_id
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
