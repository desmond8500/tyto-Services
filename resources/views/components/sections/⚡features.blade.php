<?php

use Livewire\Component;

new class extends Component
{
    public $nav;
    public $content;

    function mount()
    {
        $this->nav = (object) array(
            (object) array('id' => 1, 'icon' => 'bi bi-fire', 'title' => 'Détection Incendie'),
            (object) array('id' => 2, 'icon' => 'bi bi-camera', 'title' => 'Vidéo Surveillance'),
            (object) array('id' => 3, 'icon' => 'bi bi-lock', 'title' => "Controle d'accès"),
            (object) array('id' => 4, 'icon' => 'bi bi-bell', 'title' => "Alarme Anti Intrusion"),
            (object) array('id' => 5, 'icon' => 'bi bi-brightness-high', 'title' => "Domotique"),
        );

        $this->content = (object) array(
            (object) array(
                'id' => 1,
                'title' => 'Détection Incendie',
                'description' => "
                    Nous proposons des solutions de détection incendie avancées pour protéger vos locaux et vos employés.
                    Nos systèmes sont conçus pour détecter rapidement les incendies, alerter les occupants et les services
                    d\'urgence, et minimiser les risques de dommages matériels et corporels.


                    ",
                'image' => 'Selecao-1.0.0/assets/img/working-1.jpg',
            ),
            (object) array(
                'id' => 2,
                'title' => 'Vidéo Surveillance',
                'description' => 'Nous proposons des solutions de vidéosurveillance avancées pour assurer la sécurité de vos locaux et de vos biens. Nos systèmes sont conçus pour offrir une surveillance en temps réel, une détection d\'intrusion et un enregistrement vidéo de haute qualité.',
                'image' => 'Selecao-1.0.0/assets/img/working-2.jpg',
            ),
            (object) array(
                'id' => 3,
                'title' => 'Controle d\'accès',
                'description' => 'Nous proposons des solutions de contrôle d\'accès avancées pour sécuriser vos locaux et protéger vos biens. Nos systèmes sont conçus pour gérer les accès aux zones sensibles, suivre les mouvements des personnes et garantir la sécurité de vos installations.',
                'image' => 'Selecao-1.0.0/assets/img/working-3.jpg',
            ),
            (object) array(
                'id' => 4,
                'title' => 'Alarme Anti Intrusion',
                'description' => 'Nous proposons des solutions d\'alarme anti-intrusion avancées pour protéger vos locaux et vos biens. Nos systèmes sont conçus pour détecter les intrusions, alerter les occupants et les services d\'urgence, et minimiser les risques de dommages matériels et corporels.',
                'image' => 'Selecao-1.0.0/assets/img/working-4.jpg',
            ),
            (object) array(
                'id' => 5,
                'title' => 'Domotique',
                'description' => 'Nous proposons des solutions de domotique avancées pour améliorer le confort et la sécurité de votre maison ou de votre entreprise. Nos systèmes sont conçus pour automatiser et contrôler les appareils électriques, les systèmes de chauffage et de climatisation, l\'éclairage et          la sécurité, offrant ainsi une expérience de vie plus pratique et plus agréable.',
                'image' => 'Selecao-1.0.0/assets/img/working-4.jpg',
            ),
        );
    }
};
?>

<div>
    <section id="features" class="features section">

        <div class="container">

            <ul class="nav nav-tabs row  d-flex" data-aos="fade-up" data-aos-delay="100">
                @foreach ($nav as $navitem)
                    <li class="nav-item col">
                        <a class="nav-link @if($loop->first) active show @endif" data-bs-toggle="tab" data-bs-target="#features-tab-{{ $navitem->id }}">
                            <i class="{{ $navitem->icon }}"></i>
                            <h4 class="d-none d-lg-block">{{ $navitem->title }}</h4>
                        </a>
                    </li>
                @endforeach
            </ul><!-- End Tab Nav -->

            <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
                @foreach ($content as $contentitem)
                    <div class="tab-pane fade @if($loop->first) active show @endif" id="features-tab-{{ $contentitem->id }}">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h3>{{ $contentitem->title }}</h3>
                                <p class="fst-italic">
                                    {!! nl2br($contentitem->description) !!}
                                </p>
                                {{-- <ul>
                                    <li><i class="bi bi-check2-all"></i>
                                        <spab>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</spab>
                                    </li>
                                    <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in
                                            voluptate velit</span>.</li>
                                    <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea
                                            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                                            trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                                </ul>
                                <p>
                                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate
                                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                    non proident, sunt in
                                    culpa qui officia deserunt mollit anim id est laborum
                                </p> --}}
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ $contentitem->image }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End Tab Content Item -->
                @endforeach


            </div>

        </div>

    </section><!-- /Features Section -->
</div>
