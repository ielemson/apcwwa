@extends('layouts.app')
@push('pg_btn')
    <a href="{{route('service.create')}}" class="btn btn-sm btn-neutral">Create Service</a>
@endpush
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class=" mb-5">
            <div class="card-header">
                <h3>Services</h3>
            </div>
            <div class="card-body">
                
                  
                    @if (count($services)> 0)
                    <div class="row">
                    @foreach ($services as $service)

                    <div class="col-md-4">

                        <div class="card d-inline-block">
                            <img class="card-img-top"
                                src="{{$service->featured_image}}"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$service->title}}</h5>
                                <p class="card-text">{!!\Illuminate\Support\Str::limit($service->content, 100, $end='...') !!}</p>
                             
                                <div class="btn-group">
                                    <a href="#" class="btn btn-primary">Edit</a>
                                    <a href="#" class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    @endforeach
                    @else
                    <div class="alert alert-info block" role="alert">
                    <strong>Info!</strong> No Services Found
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

