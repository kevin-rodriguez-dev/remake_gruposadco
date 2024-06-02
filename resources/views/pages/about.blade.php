@extends('layouts.app') 
@section('content')
<!-- About Area Start -->

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="section-tittle mb-55">
                <div class="front-text">
                    <h2 class="">Nosotros</h2>
                </div>
                <span class="back-text">Nosotros</span>
            </div>
            <div class="support-caption">
                <p>
                    Nos destacamos por la ejecución, dirección y construcción de obras mediante sistemas innovadores, tanto con el equipo, insumos y recursos humanos capacitados. Estableciendo así la calidad, eficiencia y pronta ejecución
                    de los proyectos asignados a nuestra responsabilidad, dentro de los plazos contractualmente establecidos por nuestros clientes. Asegurándonos de tal manera, la satisfacción y aprobación de las obras realizadas.
                </p>
                <p>
                    Somos una empresa 100% salvadoreña, fundada en el año 2012, dedicada a la industria de la construcción, siempre a la vanguardia. Con el compromiso, responsabilidad y honestidad, así también con la pasión por la
                    construcción y la satisfacción del cliente que es lo que nos distingue, nos comprometemos a que su proyecto concluya en el mejor tiempo y por consecuente en el mejor costo posible sin sacrificar la calidad. Es por eso
                    que mejoramos cualquier presupuesto en materiales y condiciones similares.
                </p>
                <p>Contamos con profesionales y personal de amplia experiencia en el ramo. Nuestro valor agregado es la mejor atención personalizada, el mejor presupuesto y tiempo con un buen control de obra.</p>
            </div>
        </div>
    </div>
    <div class="row g-2">
        <div class="col-md-6">
            <div class="card p-3 text-center px-4">
                <div class="user-image">
                    <img src="{{asset('/img/about/ecology.png')}}" width="80" />
                </div>

                <div class="user-content">
                    <h5 class="mb-3">Misión</h5>
                    <p>
                        Construir junto con nuestros clientes proyectos sólidos y perdurables que contribuyan a mejorar la calidad de vida de nuestros conciudadanos
                    </p>
                </div>
                <div class="service-icon">
                    <img src="{{ asset('img/icon/services_icon1.png') }}" alt="" />
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card p-3 text-center px-4">
                <div class="user-image">
                    <img src="{{asset('/img/about/save-the-world.png')}}" width="80" />
                </div>

                <div class="user-content">
                    <h5 class="mb-3">Visión</h5>
                    <p>
                        Ser una primera opción de nuestros clientes para realizar sus proyectos con calidad, seguridad y puntualidad, a nivel Nacional
                    </p>
                </div>
                <div class="service-icon">
                    <img src="{{ asset('img/icon/services_icon1.png') }}" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Area End -->
@endsection
