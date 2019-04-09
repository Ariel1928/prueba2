@extends('books.layout')

@section('content')

<h1 class="text-center">AGREGAR LIBROS</h1>
<div class="container">
<form action="{{ route('books.store') }}" method="POST">

@csrf
<hr>
<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
    <form method="post">
     <div class="form-group ">
      <label class="control-label requiredField" for="Titulo">
       Name
       <span class="asteriskField">
        *
       </span>
      </label>
      <input class="form-control" id="Titulo" name="Titulo" type="text"/>
     </div>
     <div class="form-group ">
      <label class="control-label " for="Descripcion">
       Descripci&oacute;n
      </label>
      <input class="form-control" id="Descripcion" name="Descripcion" type="text"/>
     </div>
     <div class="form-group">
      <div>
       <button class="btn btn-primary " name="submit" type="submit">
        enviar
       </button>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>


</form>



@endsection 