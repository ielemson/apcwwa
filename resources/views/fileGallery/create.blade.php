@extends('layouts.app')
@push('pg_btn')
    <a href="{{route('gallery.index')}}" class="btn btn-sm btn-neutral">All Gallery</a>
@endpush
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-5">
                <div class="card-body">
                    <form method="post" action="{{url('file')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                      
                              <div class="input-group control-group increment" >
                                <input type="file" name="filename[]" class="form-control">
                                <div class="input-group-btn"> 
                                  <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                                </div>
                              </div>
                              <div class="clone hide">
                                <div class="control-group input-group" style="margin-top:10px">
                                  <input type="file" name="filename[]" class="form-control">
                                  <div class="input-group-btn"> 
                                    <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                  </div>
                                </div>
                              </div>
                      
                              <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>
                      
                        </form>  
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')

<script type="text/javascript">


    $(document).ready(function() {

      $(".btn-success").click(function(){ 
         
          var htmlInput = $(".clone").html();
          $(".increment").after(htmlInput);
          alert(htmlInput)
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").count();
      });

    });

</script>
@endpush