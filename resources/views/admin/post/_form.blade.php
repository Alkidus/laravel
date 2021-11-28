<div class="form-group mt-3">
  {!! Form::label('name', 'Name:') !!}
  {!! Form::text('name', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group mt-3">
  {!! Form::label('category_id', 'Category:') !!}
  {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
</div>

{{-- <div class="form-group mt-3">
  {!! Form::label('img', 'Image:') !!}
  {!! Form::file('img', ['class'=>'form-control']) !!}
</div> --}}

 <div class="input-group">
   <span class="input-group-btn">
     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
       <i class="fa fa-picture-o"></i> Choose
     </a>
   </span>
   <input id="thumbnail" class="form-control" type="text" name="img">
 </div>
 <img id="holder" style="margin-top:15px;max-height:100px;">



<div class="form-group mt-3">
  {!! Form::label('description', 'Description:') !!}
  {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
</div>


{!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}



