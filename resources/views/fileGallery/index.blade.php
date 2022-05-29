@extends('layouts.app')
@push('pg_btn')
@can('create-user')
    <a href="{{ route('gallery.create') }}" class="btn btn-sm btn-neutral">Create New Gallery</a>
@endcan
@endpush
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class=" mb-5">
                <div class="card-header bg-transparent">
                    <div class="row">
                        <div class="col-lg-8">
                            <h3 class="mb-0 text-white">All DNC</h3>
                        </div>
                     
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                       
                        @if (count($galleries) > 0)
                            
                        @foreach ($galleries as $gallery)
                            
                        <div class="col-md-4">
    
                            <div class="card ">
                                <img class="card-img-top" src="{{$gallery->image_path}}" alt="Card image cap" style="max-height:30vh; width:100%">
                                <div class="card-body">
                                    <h5 class="card-title">{{$gallery->caption}}</h5>
                                    <p class="card-text">{{$gallery->title}}</p>
                                    {!! Form::open(['route' => ['gallery.destroy', $gallery],'method' => 'delete',  'class'=>'d-inline-block dform']) !!}
                                    <a href="{{route('gallery.edit',$gallery)}}" class="btn btn-primary">Edit</a>
                                    @can('manage-gallery')
                                    <a href="{{route('gallery.destroy',$gallery)}}" class="btn btn-danger delete">Delete</a>
                                    @endcan
                                   
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>

                        @endforeach
                        @else
                        
                        <div class="alert alert-info" role="alert">
                            <strong>Info!</strong> No Gallery Available 
                        </div>   
                        @endif
                       
                     
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
