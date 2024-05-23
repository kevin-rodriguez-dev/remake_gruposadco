@extends('layouts.app') 

@section('content')
<main>
    <!-- Services Area Start -->
    <div class="services-area1 section-padding30">
        <div class="container">
            <!-- section tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-55">
                        <div class="front-text">
                            <h2 class="">NUESTROS SERVICIOS</h2>
                        </div>
                        <span class="back-text">Categorías</span>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse ($categories as $category)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-service-cap mb-30">
                        <div class="service-img">
                            <img src="assets/img/service/servicess1.png" alt="" />
                        </div>
                        <div class="service-cap">
                            <h4><a href="{{ route('servicio.show', $category['id']) }}">
                                {{ $category['nombre'] }}
                            </a></h4>
                            <a href="{{ route('servicio.show', $category['id']) }}" class="more-btn">Leer más <i class="ti-plus"></i></a>
                        </div>
                        <div class="service-icon">
                            <img src="assets/img/icon/services_icon1.png" alt="" />
                        </div>
                    </div>
                </div>
                @empty 
                <div class="col-lg-12">
                    <div class="section-tittle text-center mb-55">
                        <div class="front-text">
                            <h2 class="">No hay servicios disponibles</h2>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </div>
    <!-- Services Area End -->
</main>
@endsection
