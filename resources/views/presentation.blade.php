@extends('layouts.app')

@section('title', 'Le club — AOL Rugby')
@section('meta_description', "Histoire, valeurs et équipes de l'AOL Rugby : un club formateur qui fait grandir ses joueurs de l'école de rugby jusqu'à la compétition.")

@section('content')

<header class="page-header">
    <div class="container">
        <p class="eyebrow">Le club</p>
        <h1>L'AOL Rugby, une histoire de terrain</h1>
        <p>De l'école de rugby à la première équipe, un club formateur porté par ses licenciés, ses bénévoles et son territoire.</p>
    </div>
</header>

{{-- Histoire --}}
<section class="section">
    <div class="container">
        <div class="split">
            <div class="section-head">
                <p class="eyebrow">Notre histoire</p>
                <h2>Un club né sur le terrain, construit par ses joueurs</h2>
                <p>
                    L'AOL Rugby est né de la passion d'une poignée de joueurs et de bénévoles décidés à faire vivre
                    le rugby sur leur territoire. Saison après saison, le club a grandi autour d'une conviction simple :
                    le rugby forme des joueurs, mais surtout des personnes.
                </p>
                <p>
                    Aujourd'hui, le club rassemble plusieurs catégories, de l'école de rugby aux séniors, portées par
                    des éducateurs formés et une communauté de supporters fidèles au stade chaque week-end.
                </p>
                <a href="{{ route('contact') }}" class="btn btn-ghost-dark">Nous rejoindre</a>
            </div>
            <div class="split__media" aria-hidden="true">
                <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/Equipe_AOL.jpg') }}" alt="Photo d'un match de rugby à l'AOL Rugby" width="300%" height="300">
            </div>
        </div>
    </div>
</section>

{{-- Valeurs --}}
<section class="section section--alt">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">Nos valeurs</p>
            <h2>Ce qui se joue avant le coup d'envoi</h2>
            <p>Trois principes qui guident le club, sur le terrain comme en dehors.</p>
        </div>
        <div class="grid-3">
            <article class="value-card">
                <span class="num">01</span>
                <h3>Respect</h3>
                <p>De l'arbitre, de l'adversaire et du maillot : la première règle du rugby, avant toutes les autres.</p>
            </article>
            <article class="value-card">
                <span class="num">02</span>
                <h3>Solidarité</h3>
                <p>Un pack ne porte personne seul. Sur le terrain comme au club-house, on avance ensemble.</p>
            </article>
            <article class="value-card">
                <span class="num">03</span>
                <h3>Transmission</h3>
                <p>Les anciens forment les jeunes, les jeunes réveillent les anciens. Le club se construit sur la durée.</p>
            </article>
        </div>
    </div>
</section>

{{-- Chiffres clés --}}
<section class="section">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">Le club en chiffres</p>
            <h2>Une saison au tableau</h2>
        </div>
        <div class="scoreboard">
            <div class="scoreboard__item">
                <div class="value">1975</div>
                <div class="label">Année de création</div>
            </div>
            <div class="scoreboard__item">
                <div class="value">220+</div>
                <div class="label">Licenciés</div>
            </div>
            <div class="scoreboard__item">
                <div class="value">6</div>
                <div class="label">Catégories</div>
            </div>
            <div class="scoreboard__item">
                <div class="value">3</div>
                <div class="label">Entraînements / semaine</div>
            </div>
        </div>
    </div>
</section>

{{-- Équipes --}}
<section class="section section--alt">
    <div class="container">
        <div class="section-head">
            <p class="eyebrow">Nos équipes</p>
            <h2>Pour toutes et tous</h2>
        </div>
    <ul class="teams-list">
        <li>
            <span class="name">École de rugby</span>
            <ul class="schedule">
                <li>
                    <span class="schedule__day">Mercredi</span>
                    <span class="schedule__time">13h&nbsp;–&nbsp;15h</span>
                </li>
            </ul>
        </li>
        <li>
            <span class="name">Loisir</span>
            <ul class="schedule">
                <li>
                    <span class="schedule__day">Mardi &amp; vendredi</span>
                    <span class="schedule__time">19h&nbsp;–&nbsp;21h</span>
                </li>
                <li>
                    <span class="schedule__day">Dimanche</span>
                    <span class="schedule__time">11h&nbsp;–&nbsp;13h</span>
                </li>
            </ul>
        </li>
    </ul>
    </div>
</section>

<section class="cta-band">
    <div class="container">
        <h2>Envie de nous rencontrer&nbsp;?</h2>
        <p>Venez essayer un entraînement, poser vos questions ou simplement passer nous voir au stade.</p>
        <a href="{{ route('contact') }}" class="btn btn-primary">Contacter le club</a>
    </div>
</section>

@endsection
