<?php

use Livewire\Component;

new class extends Component
{
    public $menus;

    function mount()
    {
        $this->menus = (object) array(
            (object) array('name'=> 'Accueil', 'route'=>'', 'href'=>'#hero'),
            (object) array('name'=> 'A propos', 'route'=>'', 'href'=>'#about'),
            (object) array('name'=> 'Services', 'route'=>'', 'href'=>'#services'),
            // (object) array('name'=> 'Portfolio', 'route'=>'', 'href'=>'#portfolio'),
            // (object) array('name'=> 'Equipe', 'route'=>'', 'href'=>'#team'),
            (object) array('name'=> 'Blog', 'route'=>'', 'href'=>'blog.html'),
            (object) array('name'=> 'Contact', 'route'=>'', 'href'=>'#contact'),
        );
    }

};
?>

<div>
    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="src/logo/Brand Model.png" alt="">
                <h1 class="sitename">TYTO SERVICES</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    @foreach ($menus as $menu)
                        <li><a href="{{ $menu->href }}">{{ $menu->name }}</a></li>
                    @endforeach

                    <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                                class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li><a href="#">Dropdown 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                        class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="#">Deep Dropdown 1</a></li>
                                    <li><a href="#">Deep Dropdown 2</a></li>
                                    <li><a href="#">Deep Dropdown 3</a></li>
                                    <li><a href="#">Deep Dropdown 4</a></li>
                                    <li><a href="#">Deep Dropdown 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Dropdown 2</a></li>
                            <li><a href="#">Dropdown 3</a></li>
                            <li><a href="#">Dropdown 4</a></li>
                        </ul>
                    </li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

        </div>
    </header>
</div>
