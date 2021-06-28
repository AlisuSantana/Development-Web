{{-- extendendo o layout padrão --}}
@extends('layouts.master_page')

{{-- title page --}}
@section('title', 'Home Page')



{{-- wrapper page start --}}
@section('wrapper-start')
    @parent
@stop

  {{-- sidebar page start --}}
  @section('nav-menu')
      @parent
  @stop    
  {{-- sidebar page end --}}

  {{-- wrapper main page start --}}
  @section('main_content-start')
      @parent
  @stop
      
  
    {{-- main page start --}}
    @section('content')
      <table class="table table-hover table-info ">
        <thead>
          <tr>
            <th scope="col">Projeto</th>
            <th scope="col">Enviado</th>
            <th scope="col">Data</th>
            <th scope="col">Diário</th>
          </tr>
        </thead>
        @foreach ($dataQuerys as $dataQuery)    
              <tbody class="">
                <tr>
                  <th scope="row"> {{ $dataQuery->nm_project }}  </th>
                  <td>  {{ $dataQuery->nm_email_recipient }} </td>
                  <td>  {{ $dataQuery->dt_diary }} </td>
                  <td>  <a class="text-decoration-none" href="{{ route('diary.show', ['diary_id' => $dataQuery->cd_diary]) }}">Visualizar</a> </td>
                </tr>
              </tbody>
        @endforeach
      </table>
    @stop
    {{-- main page end --}}

  {{-- wrapper main page end --}}
  @section('main_content-end')
    @parent
  @stop

{{-- wrapper page end --}}
@section('wrapper-end')
@parent
@stop

