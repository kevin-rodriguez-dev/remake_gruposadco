@extends('layouts.app') 

@section('content')
<!-- Services Details Start -->
<main>
    <!-- Services Details Start -->
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="single-services">
                    <!-- Carousel -->

                    <!-- End Carousel -->

                    <div class="details-caption">
                        @switch($id) 
                            @case(1)

                                <p>Los servicios de terracería, como una de las especialidades de Sadco, se han diversificado con el tiempo en diferentes modalidades y subespecialidades, tales como:</p>
                                <ol>
                                    @foreach ($services as $service)
                                        <li><i class="ti-hummer" style="color: orange;"></i>&nbsp;{{ $service['servicio'] }}</li>
                                    @endforeach
                                </ol>
                            @break 
                            @case(2)

                                <p>Las obras de mitigación necesitan de una ejecutoria de alta calidad, responsabilidad y exactitud. Sadco ofrece servicios de ejecución de este tipo de obras desde hace varios años con excelentes resultados.</p>

                                <h3>Entre los servicios dentro de esta categoría se encuentran:</h3>
                                <ol>
                                    @foreach ($services as $service)
                                        <li><i class="ti-hummer" style="color: orange;"></i>&nbsp;{{ $service['servicio'] }}</li>
                                    @endforeach
                                </ol>
                            @break 
                            @case(3)

                                <p>
                                    Otro de los servicios que Sadco ha ofrecido, han sido la ejecución de estructura vial, tanto en vías pavimentadas como en no pavimentadas en el sector público y privado (dentro de los desarrollos urbanísticos).
                                </p>

                                <h3>Entre los servicios tenemos:</h3>
                                <ol>
                                    @foreach ($services as $service)
                                        <li><i class="ti-hummer" style="color: orange;"></i>&nbsp;{{ $service['servicio'] }}</li>
                                    @endforeach
                                </ol>
                            @break 
                            @case(4)

                                <p>Los servicios de Sadco se amplían hasta la Agroindustria. Nuestro equipo humano tiene experiencia en plantaciones de árboles, ornamentación, palma africana, entre otros.</p>

                                <h3>Ejecutamos proyectos como:</h3>
                                <ol>
                                    @foreach ($services as $service)
                                        <li><i class="ti-hummer" style="color: orange;"></i>&nbsp;{{ $service['servicio'] }}</li>
                                    @endforeach
                                </ol>
                                <p>
                                    Todos los proyectos los desarrollamos con un grado de profesionalismo y responsabilidad. Durante años hemos tenido la oportunidad de servirle a las principales empresas transnacionales radicadas en Centroamérica
                                    en el sector.
                                </p>
                            @break 
                            @case(5)

                                <p>
                                    Como servicio adicional, tenemos renta de maquinaria de construcción para las necesidades de sus proyectos. No dude en consultarnos por cualquier equipo, independientemente del que sea; estamos enfocados en
                                    servir a nuestros clientes.
                                </p>
                            @break 
                            @case(6)
                                <p>Sadco es líder en proyectos de edificación, aplicando las mejores prácticas para superar las expectativas de nuestros clientes y garantizar el éxito de sus inversiones.</p>

                                <h3>Nuestra Experiencia:</h3>
                                <ol>
                                    @foreach ($services as $service)
                                        <li><i class="ti-hummer" style="color: orange;"></i>&nbsp;{{ $service['servicio'] }}</li>
                                    @endforeach
                                </ol>

                                <p>En cada proyecto garantizamos transparencia, integridad y precisión, asegurando el máximo valor para su inversión.</p>

                            @break 
                            @default
                                <p>No se encontraron detalles para esta categoría.</p>
                        @endswitch
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Details End -->
</main>
<!-- Services Details End -->
@endsection
