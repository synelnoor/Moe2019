<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $sambutan->id !!}</p>
</div>

<!-- Dosen Field -->
<div class="form-group">
    {!! Form::label('dosen', 'Dosen:') !!}
    <p>{!! $sambutan->dosen !!}</p>
</div>

<!-- Judul Field -->
<div class="form-group">
    {!! Form::label('judul', 'Judul:') !!}
    <p>{!! $sambutan->judul !!}</p>
</div>

<!-- Sambutan Field -->
<div class="form-group">
    {!! Form::label('sambutan', 'Sambutan:') !!}
    <p>{!! $sambutan->sambutan !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $sambutan->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $sambutan->updated_at !!}</p>
</div>

