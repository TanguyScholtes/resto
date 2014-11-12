@extends('layouts.default')

@section('banner')
    <div class="banner" name="prlx1">
        <span class="banner-title">Galerie <span class="letter-spacing">P</span>hotos</span>
    </div>
@stop

@section('content')
    <div class="main-container-index">
        <div class="main wrapper clearfix">

            <div class="art1 main-article">
                <h2>RestoRallye du 15 mai à Huy</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div> <!-- main-article -->

        </div> <!-- #main -->
    </div> <!-- #main-container -->

            <div name="prlx1" class="main-container-back">
        <div class="main wrapper clearfix">

            <div class="main-article">
                <h2>Qu'a-t-on mangé ?</h2>
                    <p>Ce RestoRallye était un peu spécial car nous avons décidés de rester sur une thématique "gastronomie italienne"</p>
                <p>Voici un petit exemple de ce que nous avons pu manger :</p>
                 <ul class="desc-menu">
                    <li class="desc-menu-plat"><span>Entrée froide</span>
                        <ul>
                            <li>Tomates mozarella accompagnées d'un apéritif</li>
                            <li>Restaurant <a target="_blank" href="http://www.resto.be/restaurant/4500-huy/48129-mamma-mia/">MAMMA MIA</a></li>
                        </ul>
                    </li>
                    <li class="desc-menu-plat"><span>Entrée chaude</span>
                        <ul>
                            <li>Minestrone (Potage italien aux légumes)</li>
                            <li>Restaurant<a target="_blank" href="http://www.resto.be/restaurant/4500-huy/108400-losteria/">L'OSTERIA</a></li>
                        </ul>
                     </li>
                     <li class="desc-menu-plat"><span>Plat Principal</span>
                        <ul>
                            <li>Pizza (garniture au choix)</li>
                            <li>Restaurant<a target="_blank" href="http://www.resto.be/restaurant/4500-huy/35659-le-barabas/">LE BARABAS</a></li>
                        </ul>
                     </li>
                </ul>
            </div> <!-- main-article -->

        </div> <!-- #main -->
    </div> <!-- #main-container -->

      <div class="main-container-index">
        <div class="main wrapper clearfix">

            <div class="main-article">
                <h2>Galerie photos</h2>
                <ul class="galerie-photo">
                    <li class="cadre-photo"></li>
                    <li class="cadre-photo"></li>
                    <li class="cadre-photo"></li>
                    <li class="cadre-photo"></li>
                    <li class="cadre-photo"></li>
                    <li class="cadre-photo"></li>
                    <li class="cadre-photo"></li>
                    <li class="cadre-photo"></li>
                    <li class="cadre-photo"></li>
                    <li class="cadre-photo"></li>
                    <li class="cadre-photo"></li>
                    <li class="cadre-photo"></li>
                    <li class="cadre-photo"></li>
                    <li class="cadre-photo"></li>
                    <li class="cadre-photo"></li>
                    <li class="cadre-photo"></li>
                    <li class="cadre-photo"></li>
                    <li class="cadre-photo"></li>
                    <li class="cadre-photo"></li>
                    <li class="cadre-photo"></li>
                </ul>
            </div> <!-- main-article -->

        </div> <!-- #main -->
    </div> <!-- #main-container -->

    <div name="prlx1" class="main-container-back">
        <div class="main wrapper clearfix">

            <div class="main-article">
                    <div id="disqus_thread"></div>
                        <script type="text/javascript">
                            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                            var disqus_shortname = 'restorallye'; // required: replace example with your forum shortname

                            /* * * DON'T EDIT BELOW THIS LINE * * */
                            (function() {
                                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                                dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                            })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

            </div> <!-- main-article -->


        </div> <!-- #main -->
    </div> <!-- #main-container -->

@stop
