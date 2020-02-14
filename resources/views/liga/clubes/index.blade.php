@extends('layouts.master')

@section('content1')
    <div class="btn-group">
        <a href="/clubes/create" class="btn btn-info" >Añadir Club</a>
    </div>
                      
    <div class="row">
        @foreach( $clubes as $club)
            <div class="col-xs-6 col-sm-4 col-md-3 text-center">
                <a href="{{ url('/clubes/' . $club->idClub ) }}">
                    <img src="{{$club -> escudo }}" style="height:200px"/>
                    <h4 style="min-height:45px;margin:5px 0 10px 0">{{$club -> nomClub}} </h4>
                    <a class="btn btn-primary btn-xs" href="{{action('ClubController@edit', $club->idClub)}}" >Editar</span></a>
                          
                    <form action="{{action('ClubController@destroy', $club->idClub)}}" method="post">
                      {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger btn-xs" type="submit">Eliminar</span></button>               
                </a>
            </div>
        @endforeach  
    </div>  
@endsection

