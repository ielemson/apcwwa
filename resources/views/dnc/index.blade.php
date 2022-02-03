@extends('layouts.app')
@push('pg_btn')
@can('create-user')
    <a href="{{ route('dnc.create') }}" class="btn btn-sm btn-neutral">Create New DNC</a>
@endcan
@endpush
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-header bg-transparent">
                    <div class="row">
                        <div class="col-lg-8">
                            <h3 class="mb-0">All DNC</h3>
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
                                    <th scope="col">Name</th>
                                    <th scope="col">Post</th>
                                    <th scope="col">Order</th>
                                    <th scope="col">Photo</th>
                                    {{-- <th scope="col">Photo</th> --}}
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                @foreach($dncs as $dnc)
                                    <tr>
                                        <th scope="row">
                                            {{$dnc->user->name}}
                                        </th>
                                        <td class="budget">
                                            {{$dnc->post}}
                                        </td>
                                        <td>
                                            {{$dnc->dnc_order}}
                                        </td>
                                       
                                        <td>
                                            <div class="avatar-group">
                                                @if ($dnc->user->profile_photo)
                                                <img alt="Image placeholder"
                                                    class="avatar avatar-sm rounded-circle"
                                                    data-toggle="tooltip" data-original-title="{{$dnc->user->name}}"
                                                    src="{{ asset($dnc->user->profile_photo) }}">
                                                @else
                                                <i class="far avatar avatar-sm rounded-circle fa-user"></i>
                                                @endif
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            @can('manage-dnc')
                                            {!! Form::open(['route' => ['dnc.destroy', $dnc],'method' => 'delete',  'class'=>'d-inline-block dform']) !!}
                                            @endcan
                                            @can('manage-dnc')
                                            <a class="btn btn-primary btn-sm m-1" data-toggle="tooltip" data-placement="top" title="View and edit user details" href="{{route('dnc.show', $dnc)}}">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                            @endcan
                                            @can('manage-dnc')
                                            <a class="btn btn-info btn-sm m-1" data-toggle="tooltip" data-placement="top" title="Edit user details" href="{{route('dnc.edit',$dnc)}}">
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
                                        {{$dncs->links()}}
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
