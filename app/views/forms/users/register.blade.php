@extends('layouts.default')

@section('content')
<div class="main-container">
    <div class="main wrapper clearfix">

        <article>
            <h3>Inscription au prochain RestoRallye</h3>
            <p>Le droit d’inscription à un RestoRallye est fixé à <em>57 € par participant.</em></p>
            <p>Pour toute inscription ou renseignement complémentaire, remplissez le formulaire ci‐dessous ou envoyez‐nous un mail à : info@restorallye.be
            </p>
        </article>

        <article>
            {{ Form::open(['route'=>'#jaipasencorefaislaroute','class'=>'inscription']) }}
                <fieldset>
                    <legend>Inscription au site | {{link_to_route('login', 'Ou connectez-vous')}}</legend>
                    
                    {{ Form::label('company', 'Société') }}
                    {{ Form::text('company', '') }}
                    
                    {{ Form::label('name', 'Nom') }}<span>*</span> 
                    {{ Form::text('name', '') }}
                    
                    {{ Form::label('firstname', 'Prénom') }}<span>*</span> 
                    {{ Form::text('firstname', '') }}<br />

                    {{ Form::label('address-street', 'Rue') }}<span>*</span> 
                    {{ Form::text('address-street', '') }}

                    {{ Form::label('address-number', 'Numéro') }}<span>*</span>
                    {{ Form::text('address-number', '', ['min'=>1]) }}<br />

                    {{ Form::label('address-postalCode', 'Code postal') }}<span>*</span> 
                    {{ Form::text('address-postalCode', '', ['min'=>1]) }}<br />

                    {{ Form::label('address-town', 'Ville') }}<span>*</span> 
                    {{ Form::text('address-town ', '') }}<br />
                    
                    {{ Form::label('phone', 'Numéro de Téléphone') }}<span>*</span> 
                    {{ Form::text('phone', '') }}
                    
                    {{ Form::label('fax', 'Numéro de Fax') }} 
                    {{ Form::text('fax', '') }}
                    
                    {{ Form::label('email', 'Email') }}<span>*</span> 
                    {{ Form::email('email', '') }}
                    
                    {{ Form::label('password', 'Mot de passe') }}<span>*</span> 
                    {{ Form::password('password', '') }}
                    
                    {{ Form::label('password_confirmation', 'Confirmation du mot de passe')}}<span>*</span> 
                    {{ Form::password('password_confirmation') }}
                    
                    {{ Form::label('newsletter', 'S\'inscrire à la Newsletter')}}
                    {{ Form::checkbox('newsletter', '', ['checked'=>'checked'])}}
                    
                    <p><span>*</span>- Champs obligatoires.</p>
                    
                    <button>Valider l'inscription</button>
                     
                </fieldset>
            {{ Form::close() }}
            <!--<form action="#" method="post" class="inscription">

                <fieldset>
                    <legend>Inscription</legend>

                    <label for="groupname">Nom des personnes ou du groupe</label> <input id="groupname" type="text" name="groupname" placeholder="ASBL RestoRallye" /><br>
                    <label>Lieu et date</label>
                    <div>
                        <ul>
                            <li><input id="place1" type="radio" name="place" value="Seraing"><label for="place1">Seraing, le 21 octobre 2014</label></li>
                            <li><input id="place2" type="radio" name="place" value="Liege"><label for="place2">Liège, le 15 novembre 2014</label></li>
                            <li><input id="place3" type="radio" name="place" value="Flemalle"><label for="place3">Flémalle, le 31 décembre 2014</label></li>
                        </ul>
                    </div>
                                            
                    <label for="groupnumber">Nombre de personnes</label> <input id="groupnumber" type="number" name="groupnumber" min="1" max="5"><br>
                    <span class="places-left">Il reste 5 places pour cet événement</span>
                </fieldset>

                <button type="submit">Valider l'inscription</button>
             </form>-->
        </article>

        <img id="deco-form" src="img/food02.jpg" alt="Le bon repas ! Miam !" height="340" width="460">

    </div> <!-- #main -->
</div> <!-- #main-container -->

@stop