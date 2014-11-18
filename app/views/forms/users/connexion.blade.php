@extends('layouts.default')

@section('banner')
<div class="banner" name="prlx1">
    <span class="banner-title">Connexion</span>
    <!-- <form class="connect" method="post" action="#">
        <label for="connect-email">Adresse Email</label>
        <input type="email" name="connect-email" id="connect-email">

        <label for="connect-psswd">Mot de passe</label>
        <input type="password" name="connect-password" id="connect-psswd">

        <input type="submit" value="Connectez-vous">

        <label>Vous devez <a href="inscription.html">créer un compte</a> afin de pouvoir vous connecter</label>
    </form> -->
    {{ Form::open(['class'=>'connect']) }}
        {{ Form::label('connect-email', 'Email') }}
        {{ Form::email('connect-email', '', ['id'=>'connect-email']) }}
        {{ $errors->first('email', '<span>:message</span>') }} <!-- Message d'erreur -->

        {{ Form::label('connect-psswd', 'Mot de passe') }}
        {{ Form::password('connect-psswd', '', ['id'=>'connect-psswd']) }}
        {{ $errors->first('password', '<span>:message</span>') }} <!-- Message d'erreur -->

        @if(Session::get('message'))
            <div>
                <span>{{ Session::get('message') }}</span>
            </div>
        @endif

        {{ Form::submit('Connectez-vous') }}
    {{ Form::close() }}
</div>
@stop
