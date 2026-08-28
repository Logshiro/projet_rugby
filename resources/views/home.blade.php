@extends('layouts.app')

@section('title', 'AOL Rugby — Club de rugby officiel')
@section('meta_description', "Bienvenue à l'AOL Rugby : un club formateur, familial et compétitif. Découvrez notre histoire, nos équipes et rejoignez la mêlée.")

@section('content')
<section class="hero">
    <div class="container">
        <div class="hero__content">
            <p class="eyebrow">Club de rugby</p>
            <h1 class="hero__club">AOL<br><span>Rugby</span></h1>
            <p class="hero__tagline">
                Un club où l'engagement sur le terrain se prolonge dans les valeurs qu'on porte hors du terrain :
                le respect, la solidarité et la transmission, de l'école de rugby à la première équipe.
            </p>
            <a href="{{ route('presentation') }}" class="text-link">
                Découvrir le club
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" aria-hidden="true">
                    <path d="M3 9h12M10 4l5 5-5 5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </div>
</section>
@endsection
