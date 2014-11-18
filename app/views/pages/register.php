<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Inscription - RestoRallye ASBL</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/styles.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

        <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.1.0.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="header-container">
            <header class="wrapper clearfix">
                <h1 class="title"><a href="index.html">RestoRallye</a><!--<span>La nouvelle vague gastronomique</span>--></h1>
                <nav>
                    <ul>
                        <li><a href="index.html">Accueil</a></li>
                        <li><a href="inscription.html">Inscription</a></li>
                        <li><a href="historique.html">Historique</a></li>
                        <li><a href="about.html">À propos</a></li>
                    </ul>
                </nav>
            </header>
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">

                <article>
   <h3>Inscription au prochain RestoRallye</h3>
                    <p>Le droit d’inscription à un RestoRallye est fixé à <em>57 € par participant.</em></p>
                    <p>Pour toute inscription ou renseignement complémentaire, remplissez le formulaire ci‐dessous ou envoyez‐nous un mail à : info@restorallye.be
                    </p>
                </article>

                <article>
                    <form action="#" method="post" class="inscription">
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
        					<label>Lieu et date</label> <div>
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
			         </form>
                </article>
                
                <img id="deco-form" src="img/food02.jpg" alt="Le bon repas ! Miam !" height="340" width="460">

            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
			<div class="contact">
				<h2>Contactez-nous !</h2>
				<p>
					<span>ASBL RestoRallye</span></br>
					<span>Tel. :</span> 0471 38 06 38</br>
					<span>Email :</span> info@restorallye.be</br>
				</p>
			</div>
			<div class="social">
				<h2>Réseaux sociaux</h2>
				<ul>
					<li><a href="https://www.facebook.com/RestoRallye"><img src="img/facebook.png" alt="Facebook"></a></li>
					<li><a href="#"><img src="img/twitter.png" alt="Twitter"></a></li>
				</ul>
			</div>
			<span id="legal">ASBL RestoRallye - 2014</span>
            </footer>
        </div>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
