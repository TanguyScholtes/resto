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
            {{ Form::open(['class'=>'inscription']) }}
                <fieldset>

                    
                    {{ Form::label('company', 'Société') }}
                    {{ Form::text('company', '') }}
                    
                    {{ Form::label('name', 'Nom') }}<span>*</span> 
                    {{ Form::text('name', '') }}
                    
                    {{ Form::label('firstname', 'Prénom') }}<span>*</span> 
                    {{ Form::text('firstname', '') }}<br />
                    


                    {{ Form::label('address-street', 'Rue') }}<span>*</span> 
                    {{ Form::text('address-street', '') }}

                    {{ Form::label('address-number', 'Numéro') }}<span>*</span>
                    {{ Form::number('address-number', '', ['min'=>1]) }}<br />

                    {{ Form::label('address-postalCode', 'Code postal') }}<span>*</span> 
                    {{ Form::number('address-postalCode', '', ['min'=>1]) }}<br />

                    {{ Form::label('address-town', 'Ville') }}<span>*</span> 
                    {{ Form::text('address-town ', '') }}<br />


                    
                    {{ Form::label('phone', 'Numéro de Téléphone') }}<span>*</span> 
                    {{ Form::text('phone', '') }}
                    
                    {{ Form::label('fax', 'Numéro de Fax') }} 
                    {{ Form::text('fax', '') }}
                    
                    {{ Form::label('email', 'Email') }}<span>*</span> 
                    {{ Form::email('email', '') }}
                    
                    <button>Valider l'inscription</button>
                     
                </fieldset>
            {{ Form::close() }}
            <!--<form action="#" method="post" class="inscription">
                <fieldset>
                    <legend>À propos de vous</legend>

                    <label for="company">Société</label> <input id="company" type="text" name="company" placeholder="ASBL RestoRallye" /><br>
                    <label for="name">Nom</label><span>*</span> <input id="name" type="text" name="name" placeholder="Durant" /><br>
                    <label for="firstname">Prénom</label><span>*</span> <input id="firstname" type="text" name="firstname" placeholder="Alain" /><br>
                    <label for="adress">Adresse</label><span>*</span> <input id="adress" type="text" name="adress" placeholder="Rue des gourmands n°12" /><br>
                    <label for="postalcode">Code postal</label><span>*</span> <input id="postalcode" type="text" name="postalcode" placeholder="1234" /><br>
                    <label for="city">Ville</label><span>*</span> <input id="city" type="text" name="city" placeholder="Yummyville" /><br>
                    <label for="phone">Téléphone</label><span>*</span> <input id="phone" type="text" name="phone" placeholder="0471 38 06 38" /><br>
                    <label for="fax">Fax</label> <input id="fax" type="text" name="fax" /><br>
                    <label for="email">Email</label><span>*</span> <input id="email" type="text" name="email" placeholder="exemple@restorallye.be" /><br>
                    <label for="emailConfirm">Confirmez l'email</label><span>*</span> <input id="emailConfirm" type="text" />
                </fieldset>

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