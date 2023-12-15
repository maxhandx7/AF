@extends('layouts.main')
@section('title', 'PortFolio')
@section('styles')
@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')
    <div class="container mt-4 d-flex justify-content-center">
        <div class="row">
            <div class="col-12">
                <div class="row portfolio-grid">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                        <figure class="effect-text-in">
                            <img src="{{ asset('melody/images/samples/300x300/1.jpg') }}" alt="image" />
                            <figcaption>
                                <h4>SHIIPP</h4>
                                <p>Desarrollo de aplicación web, que permita la reserva de cupos para embarcaciones 
                                    turísticas en buenaventura</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                        <figure class="effect-text-in">
                            <img src="{{ asset('melody/images/samples/300x300/2.jpg') }}" alt="image" />
                            <figcaption>
                                <h4>VENTAS</h4>
                                <p>Solución eficiente y fácil de usar para gestionar productos, 
                                    proveedores, clientes y facturación en negocios de menor 
                                    escala</p>  
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                        <figure class="effect-text-in">
                            <img src="{{ asset('melody/images/samples/300x300/3.jpg') }}" alt="image" />
                            <figcaption>
                                <h4>AGENDA</h4>
                                <p>Solución práctica y funcional para administrar tus contactos 
                                    y organizar tu día </p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                        <figure class="effect-text-in">
                            <img src="{{ asset('melody/images/samples/300x300/4.jpg') }}" alt="image" />
                            <figcaption>
                                <h4>Spa & veterinaria</h4>
                                <p>Solución completa y fácil de usar para administrar clientes, 
                                    servicios y registros médicos de forma eficiente y segura.</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                        <figure class="effect-text-in">
                            <img src="{{ asset('melody/images/samples/300x300/5.jpg') }}" alt="image" />
                            <figcaption>
                                <h4>Hospital Santa barbara</h4>
                                <p>Solucion agil para el manejo de citas basicas del centro de salud
                                     del municipio de Iscuande Nariño</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
