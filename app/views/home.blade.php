@extends('layouts.default')

@section('banner')
<div class="banner" name="prlx1">
    <span class="banner-title">RestoRallye</span>
    <span class="banner-subtitle">Prochain RestoRallye à Liège<br>Le 12 Novembre 2014</span>
    <a href="inscription.html" class="banner-button">À table !</a>
</div>
@stop

@section('content')

<div class="main-container-index">
    <div class="main wrapper clearfix">
        <div class="main-article art1">
            <h2>Le prochain RestoRallye se déroulera à Liège !</h2>
            <p>
                La Cité Ardente accueillera à nouveau un RestoRallye ce 31 octobre à l'occasion d'Halloween !
            </p>
			<p>
			La soirée débutera dans rien de moins que l'Archeoforum de Liège, spécialement décoré pour l'occasion. Si cette expérience gastronomique d'un autre monde ne vous fait pas peur, vous pouvez d'hors et déjà vous inscrire pour cette soirée qui s'annonce effroyablement délicieuse !
			</p>
            <p>
                <a class="links" href="inscription.html">S'inscrire au prochain RestoRallye</a>
            </p>
        </div> <!-- main-article -->
    </div> <!-- #main -->
</div> <!-- #main-container -->
        
<div name="prlx1" class="main-container-back">
    <div class="main wrapper clearfix">
        <div class="main-article art2">
            <h2>RestoRallye, mais qu'est-ce que c'est ?</h2>
            <p>
                RestoRallye est une ASBL animée par une équipe de bénévoles qui propose un concept basé sur l'adage <span>« Dis-moi ce que tu manges je te dirai d’où tu viens »</span>.
            </p>
            <p>
                RestoRallye offre la possibilité à ses « gastronomades » de faire la connaissance en une seule soirée de plusieurs restaurants d'une localité. Pour les participants, c’est aussi l’occasion de découvrir une nouvelle région de manière originale et ludique.
            </p>
            <img src="img/foule1.jpg">
            <p>
                <a class="links" href="about.html">En savoir plus à propos de RestoRallye</a>
            </p>
        </div> <!-- main-article -->
    </div> <!-- #main -->
</div> <!-- #main-container -->
        
<div class="main-container-index">
    <div class="main wrapper clearfix">
        <div class="main-article">
            <h2>Voir les soirées précédentes</h2>
            <ul class="galerie-photo">
                <li class="cadre-photo">{{ link_to_route('event', 'Éven. 1') }}</li>
                <li class="cadre-photo">{{ link_to_route('event', 'Éven. 1') }}</li>
                <li class="cadre-photo">{{ link_to_route('event', 'Éven. 1') }}</li>
                <li class="cadre-photo">{{ link_to_route('event', 'Éven. 1') }}</li>
                <li class="cadre-photo">{{ link_to_route('event', 'Éven. 1') }}</li>
                <li class="cadre-photo">{{ link_to_route('event', 'Éven. 1') }}</li>
                <li class="cadre-photo">{{ link_to_route('event', 'Éven. 1') }}</li>
                <li class="cadre-photo">{{ link_to_route('event', 'Éven. 1') }}</li>
                <li class="cadre-photo">{{ link_to_route('event', 'Éven. 1') }}</li>
                <li class="cadre-photo">{{ link_to_route('event', 'Éven. 1') }}</li>
                <li class="cadre-photo">{{ link_to_route('event', 'Éven. 1') }}</li>
                <li class="cadre-photo">{{ link_to_route('event', 'Éven. 1') }}</li>
                <li class="cadre-photo">{{ link_to_route('event', 'Éven. 1') }}</li>
                <li class="cadre-photo">{{ link_to_route('event', 'Éven. 1') }}</li>
            </ul>
        </div> <!-- main-article -->
    </div> <!-- #main -->
</div> <!-- #main-container -->
        
<div name="prlx1" class="main-container-back">
    <div class="main wrapper clearfix">
        <div class="main-article art3">
            <h2>Dernier évènement organisé</h2>
            <p>
                Le dernier RestoRallye s'est déroulé le 12 novembre dans la belle ville de Liège.
            </p>
            <p>
                Nos RestoRallyens ont donc eu l'occasion de découvrir le Palais Curtius, de se promener un peu dans la Cité Ardente et de déguster des plats variés dans 3 restaurants : La Rive Gauche, La Fortuna Del Quadrifoglio et La Bouffonnerie.
            </p>
            <img src="img/foule2.jpg">
            <p>
                <a class="links" href="#">En lire plus à propos du dernier RestoRallye</a>
            </p>
        </div> <!-- main-article -->
    </div> <!-- #main -->
</div> <!-- #main-container -->

@stop