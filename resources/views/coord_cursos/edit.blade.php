@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Coord Curso
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($coordCurso, ['route' => ['coordCursos.update', $coordCurso->idcoordcurso], 'method' => 'patch']) !!}

                        @include('coord_cursos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection