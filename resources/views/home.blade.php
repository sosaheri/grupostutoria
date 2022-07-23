@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Gestionar grupos') }}</div>

                    <div class="card-body">

                        <h5>Lista de grupos actuales</h5>
                        <ul>
                            <li><a href="./editar">Grupo 1</a></li>
                            <li><a href="./editar">Grupo 2</a></li>
                            <li><a href="./editar">Grupo 3</a></li>
                            <li><a href="./editar">Grupo 4</a></li>
                            <li><a href="./editar">Grupo 5</a></li>
                            <li><a href="./editar">Grupo 6</a></li>
                            <li><a href="./editar">Grupo 7</a></li>
                            <li><a href="./editar">Grupo 8</a></li>
                            <li><a href="./editar">Grupo 9</a></li>
                        </ul>

                        <hr>

                        <h5>Crear grupo nuevo</h5>
                        <form>
                            
                            <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Nombre de Grupo</label>
                            <input type="text" id="disabledTextInput" class="form-control" >
                            </div>
                            
                            <div class="mb-3">
                                <label for="exampleName" class="form-label">Instructor</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>                    
                                 <div class="mb-3">
                                <label for="exampleName" class="form-label">Horario</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>     
                            <a class="btn btn-primary" href="./">Crear grupo</a>              
                            {{-- <button type="submit" class="btn btn-primary">Unirme al grupo</button> --}}
                        </form>
                    </div>
                </div>
            </div>
                        <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Configuración') }}</div>

                    <div class="card-body">
                            <form>
                                                    
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email Administrativo</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="admin@escuela.com">
                                    
                                </div>
                                    
                                <a class="btn btn-primary" href="#">Actualizar</a>              
                                {{-- <button type="submit" class="btn btn-primary">Unirme al grupo</button> --}}
                            </form>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
