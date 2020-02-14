@extends('layouts.master')

@section('content1')
     <div class="row">
     @foreach( $jugadores as $jugador)
     @if($jugador -> club)
     <div class="col-xs-6 col-sm-4 col-md-3 text-center">
          <a href="{{ url('/clubes/jugadores' . $jugador->idClub ) }}">
               <img src="{{$jugador -> foto}}" style="height:200px"/>
               <h4 style="min-height:45px;margin:5px 0 10px 0">
                    {{$jugador -> nomJugador}}
               </h4>
          </a>
     </div>
     @endif
     @endforeach
     </div>
@stop