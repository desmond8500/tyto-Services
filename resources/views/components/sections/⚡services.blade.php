<?php

use Livewire\Component;

new class extends Component
{
    public $services;

    function mount(){
        $this->services = (object) array(
            (object) array(
                'id'=> '1',
                'icon'=> 'bi bi-cash-stack',
                'color'=>'#0dcaf0',
                'title'=>'Etude et conception technique',
                'description'=>'P.'
            ),
            (object) array(
                'id'=> '2',
                'icon'=> 'bi bi-calendar4-week',
                'color'=>'#0dcaf0',
                'title'=>'Fourniture de matériel et installation',
                'description'=>'P.'
            ),
            (object) array(
                'id'=> '3',
                'icon'=> 'bi bi-chat-text',
                'color'=>'#0dcaf0',
                'title'=>'Maintenance préventive et curative',
                'description'=>'P.'
            ),
            (object) array(
                'id'=> '4',
                'icon'=> 'bi bi-credit-card-2-front',
                'color'=>'#0dcaf0',
                'title'=>'Formation',
                'description'=>'P.'
            ),
            (object) array(
                'id'=> '5',
                'icon'=> 'bi bi-globe',
                'color'=>'#0dcaf0',
                'title'=>'Support',
                'description'=>'P.'
            ),
            (object) array(
                'id'=> '6',
                'icon'=> 'bi bi-clock',
                'color'=>'#0dcaf0',
                'title'=>'Télémaintenance',
                'description'=>'P.'
            ),
        );
    }
};
?>

<div>
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Services</h2>
            <p>Ce que nous proposons</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item  position-relative">
                            <div class="icon">
                                <i class="{{ $service->icon }}" style="color: {{ $service->color }};"></i>
                            </div>
                            <a href="service-details.html" class="stretched-link">
                                <h3>{{ $service->title }}</h3>
                            </a>
                            <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores
                                iure perferendis tempore et consequatur.</p>
                        </div>
                    </div><!-- End Service Item -->
                @endforeach
            </div>

        </div>

    </section><!-- /Services Section -->
</div>
