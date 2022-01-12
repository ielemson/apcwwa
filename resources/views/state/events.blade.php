@extends('layouts.app')
@push('pg_btn')
    <a href="{{ route('state-event.create') }}" class="btn btn-sm btn-neutral">Create Events</a>
@endpush
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card mb-5">
            <div class="card-header">
                <h3>State Events</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div>
                        <table class="table align-items-center">
                            <thead class="thead-light">
                                <tr>
                                    <th >Title</th>
                                    <th >Image</th>
                                    <th >State</th>
                                    <th >Status</th>
                                    <th >Action</th>
                               
                                </tr>
                            </thead>
                            <tbody class="list">
                                @if (count($events)>0)
                                   
                                @foreach ($events as $event)
                                <tr>
                                    <td>
                                        {{$event->event_title}}
                                       </td>
                                   <td> <a href="#" class="avatar rounded-circle mr-3">
                                    <img alt="Image placeholder" src="{{$event->featured_image}}">
                                </a>
                            </td>
                                   
                                    <td class="budget">
                                   {{$event->state->name}}
                                    </td>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            
                                            @if ($event->status == 0)
                                            <i class="bg-warning"></i>
                                            <span class="status">pending</span>
                                            @else
                                            <i class="bg-success"></i>
                                            <span class="status">published</span> 
                                            @endif
                                            
                                        </span>
                                    </td>
                                
                                    {{-- <td class="btn-group">
                                        <a href="{{route('state-event.edit',$event->id)}}" class="btn btn-sm btn-primary">edit</a>
                                        <a href="{{route('state-event.destroy',$event->id)}}" class="btn btn-sm btn-danger">delete</a>
                                    </td> --}}
                                    <td class="text-center">
                                        @can('destroy-post')
                                        {!! Form::open(['route' => ['state-event.destroy', $event->id],'method' => 'delete',  'class'=>'d-inline-block dform']) !!}
                                        @endcan
                                        @can('view-post')
                                        <a class="btn btn-primary btn-sm m-1" data-toggle="tooltip" data-placement="top" title="View and edit post details" href="{{route('event.state',[strtolower($event->state->name),$event->event_slug])}}" target="_blank">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                        @endcan
                                        @can('update-post')
                                        <a class="btn btn-info btn-sm m-1" data-toggle="tooltip" data-placement="top" title="Edit post details" href="{{route('state-event.edit',$event)}}">
                                            <i class="fa fa-edit" aria-hidden="true"></i>
                                        </a>
                                        @endcan
                                        @can('destroy-post')
                                            <button type="submit" class="btn delete btn-danger btn-sm m-1" data-toggle="tooltip" data-placement="top" title="Delete post" href="">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        {!! Form::close() !!}
                                        @endcan
                                    </td>
                                    
                                </tr>
                                @endforeach
                                @else
                                    
                                @endif
                      
                            </tbody>
                        </table>
                       
                    </div>
                    
                </div>
                <div class="pagination-wrap text-center">
                    <ul class="pagination">
                        {!! $events->links() !!}
                    </ul>
                </div>
                <!-- Pagination Wrap -->
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

