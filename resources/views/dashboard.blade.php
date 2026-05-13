@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <h2 class="text-center mb-4">Dashboard</h2>

    <div class="alert alert-success text-center">
        Estás logueado correctamente ✅
    </div>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body text-center">
                    <h5>Vehículos</h5>
                    <p>Gestionar inventario</p>
                    <a href="#" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body text-center">
                    <h5>Solicitudes</h5>
                    <p>Revisar solicitudes</p>
                    <a href="#" class="btn btn-warning">Ver más</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body text-center">
                    <h5>Mensajes</h5>
                    <p>Ver mensajes</p>
                    <a href="#" class="btn btn-success">Ver más</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection