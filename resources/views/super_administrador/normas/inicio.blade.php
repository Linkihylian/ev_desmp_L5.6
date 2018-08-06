@extends('layouts/layout')
@extends('layouts/nav')
@section ('title','Normas')
@section("css")

@endsection
@section ('contenido')
<div class="card">
  <div class="card-body">

    <embed src="{{ url("normas.pdf") }}" height="800" width="100%">


  </div>
</div>
@endsection
@section('js')

@endsection
