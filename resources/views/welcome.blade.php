@extends('layouts.frontLayout.front_app')

@section('content')

@include('layouts.frontLayout.sectionContent.section_banner')

<div class="principal principal-elevado ">
    <div class="container py-5">
        <h2 class="title text-center pb-3">Que es VeaInmuebles <strong>?</strong></h2>

        <!-- texto descripcion veainmuebles -->
        @include('layouts.frontLayout.sectionContent.section_description')
        <!-- /texto descripcion veainmuebles -->

        <!-- servivios -->
        @include('layouts.frontLayout.sectionContent.section_servicios')
        <!-- servivios -->

        <!-- carrusel -->
        @include('layouts.frontLayout.sectionContent.section_carrousel')
        <!-- carrusel -->

        <hr>
        <!-- grids |propiedades - agentes-->
        @include('layouts.frontLayout.sectionContent.section_grids')
        <!-- grids -->


        <!-- contactar -->
        @include('layouts.frontLayout.sectionContent.section_contactar')
        <!-- deseasvender -->

        <!-- testimonios -->
        @include('layouts.frontLayout.sectionContent.section_testimonios')
        <!-- testimonios -->

        <!-- suscripcion -->
        @include('layouts.frontLayout.sectionContent.section_suscription')
        <!-- suscripcion -->


        <!-- articulos de interess -->
        @include('layouts.frontLayout.sectionContent.section_article')
        <!-- articulos de interess -->

        <!-- clasificados  -->
        @include('layouts.frontLayout.sectionContent.section_clasificados')
        <!-- clasificados -->

    </div>
</div>

@endsection

