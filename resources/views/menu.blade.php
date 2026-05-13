@extends('layouts.app')

@section('content')

<style>
body{
    background: linear-gradient(135deg,#111,#1f1f1f);
    color:white;
}

.card-auto{
    background:#1a1a1a;
    border-radius:12px;
    overflow:hidden;
    transition:0.3s;
}

.card-auto:hover{
    transform:scale(1.02);
    box-shadow:0 0 20px rgba(255,120,0,0.5);
}

.img-auto{
    width:100%;
    height:250px;
    object-fit:cover;
}

.btn-auto{
    background: linear-gradient(45deg,#ff3c00,#ff8800);
    color:white;
    padding:10px 20px;
    border-radius:25px;
    text-decoration:none;
}
</style>

<div class="container mt-5">

    <h2 class="text-center mb-4 text-warning">
        Catálogo de Autos 🚗
    </h2>

    <!-- TOYOTA -->
    <div class="card-auto mb-4">
        <div class="row g-0 align-items-center">

            <div class="col-md-5">
                <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d" class="img-auto">
            </div>

            <div class="col-md-7 p-4">
                <h3>Toyota</h3>
                <p>Autos confiables y eficientes para uso diario.</p>

                <a href="#" class="btn-auto">Ver modelos</a>
            </div>

        </div>
    </div>

    <!-- BMW -->
    <div class="card-auto mb-4">
        <div class="row g-0 align-items-center">

            <div class="col-md-5">
                <img src="https://bieninformado.mx/wp-content/uploads/2024/03/bmw-m-series-seo-overview-ms-04.jpg" class="img-auto">
            </div>

            <div class="col-md-7 p-4">
                <h3>BMW</h3>
                <p>Vehículos de lujo con alto rendimiento.</p>

                <a href="https://youtu.be/2Qxt3IXpqVc" target="_blank" class="btn-auto">
                    Ver modelos
                </a>
            </div>

        </div>
    </div>

    <!-- CHEVROLET -->
    <div class="card-auto mb-4">
        <div class="row g-0 align-items-center">

            <div class="col-md-5">
                <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70" class="img-auto">
            </div>

            <div class="col-md-7 p-4">
                <h3>Chevrolet</h3>
                <p>Excelente relación calidad-precio.</p>

                <a href="#" class="btn-auto">Ver modelos</a>
            </div>

        </div>
    </div>

</div>

@endsection