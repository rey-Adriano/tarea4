@extends('layouts.app')

@section('content')
    
        <div class="container py-5 " >
         
          <div class="row" >
            <div class="col-lg-3">
              <div class="card mb-1">
                <div class="card-body text-center">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                    class="rounded-box img-fluid" style="width: 150px;">
                  <h5 class="my-3" ><b> {{ Auth::user()->name }} {{ Auth::user()->apellido }}</b></h5>
                  <hr>
                  <p class="text-muted mb-4" class="fs-1" ><b>FACULTAD: </b>{{ Auth::user()->facultad }}</p>
                  <hr>
                  <p class="text-muted mb-4" class="fs-1"><b>CICLO: </b>{{ Auth::user()->ciclo }}</p>
                
                </div>
              </div>
              
            </div>
            
            <div class="col-lg-9"  style="background-color:rgb(165, 221, 235)">
                <div class="card ">     
                  <div class="row " >
                      <div class="col-md-12">
                        
                              <div class="card-header" align= " center">{{ __('Sesiones') }}</div>

                              <div class="card-body">
                                  @if (session('status'))
                                      <div class="alert alert-success" role="alert">
                                          {{ session('status') }}
                                      </div>
                                  @endif

                                  {{ __('Bienvenido Sistema de matricula de la Universidad') }}
                                
                              </div>
                          </div>
                      </div>
                  </div>
            </div>
          </div>
          
        </div>
 
     
</div>
@endsection
