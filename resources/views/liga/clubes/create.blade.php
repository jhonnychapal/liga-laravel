@extends('layouts.master')
 
@section('content1')
     <div class="row" style="margin-top:40px">
          <div class="offset-md-3 col-md-6">
               <div class="card">
                    <div class="card-header text-center">
                         Añadir Club
                    </div>
                    <div class="card-body" style="padding:30px">
                         <form method="POST">
                              @csrf
                              <div class="form-group">
                                   <label for="nomClub">Nombre del Club</label>
                                   <input type="text" name="nomClub" id="nomClub" class="form-control">
                              </div>

                              <div class="form-group">
                                   <label for="entrebador">Entrenador</label>
                                   <input type="text" name="entrenador" id="entrenador" class="form-control">
                              </div>

                              <div class="form-group">
                                   <label for="estadio">Estadio</label>
                                   <input type="text" name="estadio" id="estadio" class="form-control">
                              </div>

                              <div class="form-group">
                                   <label for="liga">Liga</label>
                                   <input type="text" name="liga" id="liga" class="form-control">
                              </div>

                              <div class="form-group">
                                   <label for="escudo">Escudo</label>
                                   <input type="text" name="escudo" id="escudo" class="form-control">
                              </div>

                              <div class="form-group text-center">
                                   <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                   Añadir Club
                                   </button>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>
@stop
