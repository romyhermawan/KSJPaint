@extends('Master.MasterBack')
@section('content')

  <div class="container-fluid">
  
        <div class="col-md-12">
            <h2 class="text-center">Admin Logo</h2>
        
         <div class="col-md-12">
              <h3>Update Logo</h3><br><br>
              <h4 >Current Logo</h4>
               <img class="img-thumbnail" src="{{asset($data->url)}}" id="gambar" width="300px" heigth="300px"/><br>
                <form role="form" action="/master/logo" method="post" enctype="multipart/form-data">
                  <div class="form-group">

                    <input type="file" name="url">
                  </div>
                     @if (Session::has('message1'))
                        <div class="alert alert-info">{{ Session::get('message1') }}</div>
                    @endif
                 <input type="submit" class="btn btn-info btn-lg" value="Update">
                 <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                </form><br><br><br>
                </div>
      </div>

  </div> 

@stop()


 