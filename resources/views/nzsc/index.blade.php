@extends('layouts.app')
@push('pg_btn')
@can('create-user')
    <a href="{{ route('zones.create') }}" class="btn btn-sm btn-neutral">Create New Zone</a>
@endcan
@endpush
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-header bg-transparent">
                    <div class="row">
                        <div class="col-lg-8">
                            <h3 class="mb-0">All National, Zonal and State Coordinators</h3>
                        </div>
                        <div class="col-lg-4">
                    {!! Form::open(['route' => 'users.index', 'method'=>'get']) !!}
                        <div class="form-group mb-0">
                        {{ Form::text('search', request()->query('search'), ['class' => 'form-control form-control-sm', 'placeholder'=>'Search users']) }}
                    </div>
                    {!! Form::close() !!}
                </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <div>
                            <table class="table table-hover align-items-center">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col">Zonal Coordinator</th>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Zone</th>
                                    <th scope="col">State</th>
                                    {{-- <th scope="col">Photo</th> --}}
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                @foreach($zones as $zone)
                                    <tr>
                                        <th scope="row">
                                            {{$zone->user->name}}
                                        </th>

                                        <td>
                                            <div class="avatar-group">
                                                @if ($zone->user->profile_photo)
                                                <img alt="Image placeholder"
                                                    class="avatar avatar-sm rounded-circle"
                                                    data-toggle="tooltip" data-original-title="{{$zone->user->name}}"
                                                    src="{{ asset($zone->user->profile_photo) }}">
                                                @else
                                                <i class="far avatar avatar-sm rounded-circle fa-user"></i>
                                                @endif
                                            </div>
                                        </td>

                                        <td class="budget">
                                            {{$zone->zone}}
                                        </td>

                                        <td class="budget">
                                           @foreach ($zone->zone_states as $zone_state)
                                               
                                               <span class="badge badge-primary text-black">{{$zone_state->state->name}}</span>
                                               <span class="badge badge-primary text-black">{{$zone_state->user->name}}</span>
                                           @endforeach
                                        </td>
                                       <td class="text-center">
                                            @can('manage-dnc')
                                            {!! Form::open(['route' => ['zones.destroy', $zone],'method' => 'delete',  'class'=>'d-inline-block dform']) !!}
                                            @endcan
                                            {{-- @can('manage-dnc')
                                            <a class="btn btn-primary btn-sm m-1" data-toggle="tooltip" data-placement="top" title="View and edit user details" href="{{route('dnc.show', $zone)}}">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                            @endcan --}}
                                            @can('manage-dnc')
                                            <a class="btn btn-info btn-sm m-1" data-toggle="tooltip" data-placement="top" title="Edit user details" href="{{route('zones.edit',$zone)}}">
                                                <i class="fa fa-edit" aria-hidden="true"></i>
                                            </a>
                                            @endcan
                                            @can('manage-dnc')
                                                <button type="submit" class="btn delete btn-danger btn-sm m-1" data-toggle="tooltip" data-placement="top" title="Delete DNC" href="">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            {!! Form::close() !!}
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot >
                                <tr>
                                    <td colspan="6">
                                        {{$zones->links()}}
                                    </td>
                                </tr>
                                </tfoot>
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
        jQuery(document).ready(function(){
            $('.delete').on('click', function(e){
                e.preventDefault();
                let that = jQuery(this);
                jQuery.confirm({
                    icon: 'fas fa-wind-warning',
                    closeIcon: true,
                    title: 'Are you sure!',
                    content: 'You can not undo this action.!',
                    type: 'red',
                    typeAnimated: true,
                    buttons: {
                        confirm: function () {
                            that.parent('form').submit();
                            //$.alert('Confirmed!');
                        },
                        cancel: function () {
                            //$.alert('Canceled!');
                        }
                    }
                });
            })
        })

    </script>
@endpush
