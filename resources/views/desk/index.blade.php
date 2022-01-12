@extends('layouts.app')
@push('pg_btn')
    <a href="{{route('desk.create')}}" class="btn btn-sm btn-neutral">Create Desk</a>
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
                                    <th scope="col" class="sort" data-sort="name">Name</th>
                                    <th scope="col" class="sort" data-sort="budget">Post</th>
                                    <th scope="col" class="sort" data-sort="status">Image</th>
                                    <th scope="col" class="sort" data-sort="completion">Completion</th>
                             
                                </tr>
                            </thead>
                            <tbody class="list">
                     @if (count($desks)>0)
                         
                     @foreach ($desks as $desk)
                         
                     <tr>
                        <th scope="row">
                            {{$desk->name}}
                        </th>
                        <td class="budget">
                          {{$desk->post}}
                        </td>
                        <td>
                            <div class="media align-items-center">
                                <a href="#" class="avatar rounded-circle mr-3">
                                    <img alt="Image placeholder" src="{{$desk->user_photo}}">
                                </a>
                               
                            </div>
                        </td>
                        
                        
                        <td class="text-center">
                            @can('destroy-user')
                            {!! Form::open(['route' => ['desk.destroy', $desk],'method' => 'delete',  'class'=>'d-inline-block dform']) !!}
                            @endcan
                            @can('view-user')
                            <a class="btn btn-primary btn-sm m-1" data-toggle="tooltip" data-placement="top" title="View and edit desk details" href="{{route('desk.show', $desk)}}">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>
                            @endcan
                            @can('update-desk')
                            <a class="btn btn-info btn-sm m-1" data-toggle="tooltip" data-placement="top" title="Edit desk details" href="{{route('desk.edit',$desk)}}">
                                <i class="fa fa-edit" aria-hidden="true"></i>
                            </a>
                            @endcan
                            @can('destroy-desk')
                                <button type="submit" class="btn delete btn-danger btn-sm m-1" data-toggle="tooltip" data-placement="top" title="Delete desk" href="">
                                    <i class="fas fa-trash"></i>
                                </button>
                            {!! Form::close() !!}
                            @endcan
                        </td>
                    </tr>
                    
                     @endforeach

                     @else
                     <div class="alert alert-info block" role="alert">
                        <strong>Info!</strong> No Desk Found
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

        // Deelete

        
    </script>
@endpush
