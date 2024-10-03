<footer class="site-footer border-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 site-footer-left">
                <div class="row align-items-start">
                    <div class="site-logo col-lg-3">
                        <a href="{{ route('index') }}"><img
                                src="{{ asset('images/svg/KKSMARTDESIGN_CPF_LOGO_prop9.svg') }}" alt="LOGO"></a>
                    </div>
                    <div class="col-lg-9 mt-md-2 mt-xs-2">
                        <h2>Besoin d'aide ?</h2>
                        <p>Notre équipe est là pour vous accompagner à chaque étape de votre achat. Explorez notre
                            large gamme de produits et profitez d'une expérience d'achat fluide et sécurisée. Pour toute
                            question, n'hésitez pas à nous contacter !</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 mt-md-4 mt-xs-4 site-footer-right">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <ul>
                            <li>
                                <h2>A propos</h2>
                            </li>
                            <li><a href="{{ route('index') }}">Acceuil</a></li>
                            @if ($categories && $categories->count() > 0)
                                @foreach ($categories as $item)
                                    <li><a href="{{ route('categories', $item->slug) }}">{{ $item->name }}</a></li>
                                @endforeach
                            @else
                                <li><a href="{{ route('product') }}">Volailles</a></li>
                                <li><a href="{{ route('product') }}">Poissons & Fruits de mer</a></li>
                                <li><a href="{{ route('product') }}">Autres viandes</a></li>
                                <li><a href="{{ route('product') }}">Fruits & Légumes</a></li>
                                <li><a href="{{ route('product') }}">La cave</a></li>
                                <li><a href="{{ route('product') }}">Coffrets & Paniers</a></li>
                                <li><a href="{{ route('product') }}">CPF Store</a></li>
                            @endif
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <ul>
                            <li>
                                <h2>Contact</h2>
                            </li>
                            <li class="d-flex align-items-center gap-2"><span class="mdi mdi-facebook"></span>
                                <a href="https://www.facebook.com/share/8ExoYVHiVx74rwPt/?mibextid=LQQJ4d"
                                    target="_blank">Facebook</a>
                            </li>
                            <li class="d-flex align-items-center gap-2"><span class="mdi mdi-whatsapp"></span>
                                <p>+229 44430051</p>
                            </li>
                            <li class="d-flex align-items-center gap-2"><span class="mdi mdi-phone"></span>
                                <p>+229 44430051</p>
                            </li>
                            <li class="d-flex align-items-center gap-2"><span class="mdi mdi-map-marker"></span>
                                <p>En face SONEB Gbegamey, Cotonou, Benin</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="site-footer-bottom d-flex flex-column flex-md-row gap-0 gap-md-2 justify-content-center align-items-center mt-2">
            <a class="text-nowrap" href="javascript:void(0)">Mentions légales</a> <span class="mdi mdi-circle"></span>
            <a href="javascript:void(0)">CGV</a> <span class="mdi mdi-circle"></span>
            <a class="text-nowrap" href="javascript:void(0)">Politique de confidentialités</a>
        </div>
        <div class="mt-4">
            <p class="text-center">Copyright © 2024 - Réalisé par <a class="text-decoration-none"
                    href="https://kksmartcom.com/" target="_blank">KK SMART COM</a></p>
        </div>
    </div>
</footer>
