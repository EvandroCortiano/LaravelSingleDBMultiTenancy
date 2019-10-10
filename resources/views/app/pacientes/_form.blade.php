@component('form._form_group',['field' => 'nome'])
    {{ Form::label('nome','Nome') }}
    {{ Form::text('nome',null,['class' => 'form-control'.($errors->has('nome')?' is-invalid':'')]) }}
@endcomponent
