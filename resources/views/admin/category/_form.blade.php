<div class="form-group mt-3">
    {!! Form::label( 'name', 'Category:') !!}
    {!! Form::text( 'name', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group mt-3">
    {!! Form::label( 'description', 'Description:') !!}
    {!! Form::textarea( 'description', null, ['class'=>'form-control']) !!}
</div>

{!! Form::submit('Save' ['class'=>'btn btn-primary']) !!}