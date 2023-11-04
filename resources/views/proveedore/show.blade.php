@extends('tablar::page')

@section('title', 'View Proveedore')

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Datos de
                    </div>
                    <h2 class="page-title">
                        {{ $proveedore->nombre }}
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a href="{{ route('proveedore.index') }}" class="btn btn-primary d-none d-sm-inline-block">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            Regresar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    @if(config('tablar','display_alert'))
                        @include('tablar::common.alert')
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Detalles del Proveedores</h3>
                        </div>
                        <div class="card-body">
                            
<div class="form-group">
<strong>Nombre:</strong>
{{ $proveedore->nombre }}
</div>
<div class="form-group">
<strong>Direccion:</strong>
{{ $proveedore->direccion }}
</div>
<div class="form-group">
<strong>Telefono:</strong>
{{ $proveedore->telefono }}
</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


