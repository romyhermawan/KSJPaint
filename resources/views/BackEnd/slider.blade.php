@extends('Master.MasterBack')
@section('content')

	<div class="container-fluid">
 	    <div class="col-md-2">
          <h2>Admin Slider</h2><br><br>
          <h4>Current Slider</h4>
      </div>

        <form role="form" action="/master/slider" method="post" enctype="multipart/form-data">
               <div class="col-md-12">
               <?php $count = 1; ?>
               @foreach($data as $datas)
                 <div class="col-md-2" align ="center">
                  <img class="img-rounded" src="{{asset($datas->url)}}" id="gambar" width="150px" heigth="150px"/>
                    Image<?php echo $count;?>
                 </div>
                 <?php $count++; ?>
                @endforeach
                </div>

      <div class="col-md-8" display="inline">
       <div id="boxFoto">
           
       </div>
        
        <button type="button" name="btnAdd" id="btnAdd" style="margin-top:20px;margin-bottom:15px">Add Picture</button>
        <button type="button" name="btnDelete" id="btnDelete">Delete</button>
        <input type="hidden" id="hiddenCounter" name="hiddenCounter" value="0">
      </div>
        @if (Session::has('message2'))
        <div class="col-md-6">
            <div class="alert alert-info">{{ Session::get('message2') }}</div><br>
        </div>
        @endif
     <div class="col-md-6"><br><br><br><br>
         <input type="submit" class="btn btn-info btn-lg" value="Update">
     </div>
     <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    </form><br><br><br>            
    </div> 	
      	<script>
        $(document).ready(function(){
            var counter = $('#hiddenCounter').val();
            $('#btnAdd').click(function(){
                counter++;
                var element = '<label class="slider'+counter+'">Image '+counter+'</label><input type="file" class="form-control slider'+counter+'" name="slider'+counter+'">';
                $('#boxFoto').append(element);
                $('#hiddenCounter').val(counter);
            });
              
           $('#btnDelete').click(function(){
               $('#boxFoto > .slider'+counter).remove();
               if(counter>0)counter--
               $('#hiddenCounter').val(counter);
           })
          
        });
        </script>

@stop()