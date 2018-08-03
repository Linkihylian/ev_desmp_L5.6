@extends('layouts/layout')

@section ('title','Login')

@section ('contenido')
  <div class="row">

              {{ Form::open(array('url' => 'foo/bar')) }}
                <div class="form-group">
                {{ Form::text('usuario', null, array('placeholder' => 'Usuario', 'class' =>'text-center form-control mb-1', 'maxlength'=>'8', 'required'=> 'required',)) }}
                {{ Form::password('secret', array('placeholder'=> 'Contraseña', 'class'=>'text-center form-control mb-2 mt-1', 'required'=> 'required'))}}
                {{ Form::button('<a><i class="fas fa-user"></i> Ingresar</a>',array('class'=> 'btn btn-primary btn-block login mb-1 mt-3', 'type'=> 'submit'))  }}
                {{ Form::button('<a><i class="fas fa-lock"></i> Olvidastes tu contraseña?</a>',array('class'=> 'text-white btn btn-warning btn-block login mt-1'))  }}
                </div>
              {{ Form::close() }}
</div>
@endsection
