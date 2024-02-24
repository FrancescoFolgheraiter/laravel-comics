@php
    $linksHeader = [
        [
            'url' => '/',
            'label' => 'DC',
        ],
        [
            'url' => '/characters',
            'label' => 'characters',
        ],
        [
            'url' => '/comics',
            'label' => 'comics',
        ],
        [
            'url' => '/movies',
            'label' => 'movies',
        ],
        [
            'url' => '/tv',
            'label' => 'tv',
        ],
        [
            'url' => '/games',
            'label' => 'games',
        ],
        [
            'url' => '/collectibles',
            'label' => 'collectibles',
        ],
        [
            'url' => '/videos',
            'label' => 'videos',
        ],
        [
            'url' => '/fans',
            'label' => 'fans',
        ],
        [
            'url' => '/news',
            'label' => 'news',
        ],
        [
            'url' => '/shop',
            'label' => 'shop',
        ],
    ];
@endphp

<header>
    <section>
        <div class="container d-flex justify-content-end text-white p-1">
            <div class="me-5">
                DC POWER VISA
            </div>
            <div>
                ADDITIONAL DC SITES
            </div>
        </div>
    </section>
    <section>
        <nav class="container d-flex align-items-center ">
            <ul class="d-flex list-unstyled justify-content-between align-items-center flex-grow-1 mb-1">
                @foreach ($linksHeader as $link)
                    <li class="h-100">
                        <a class="p-3" href="{{ $link['url'] }}">
                            @if ($link['label']== 'DC')
                            <div class="logo">
                                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Dc-logo">
                            </div>
                            @elseif($link['label']== 'shop')
                                {{ $link['label'] }}
                            @else
                            {{ $link['label'] }}
                            @endif
                        </a>
                    </li>
    
                @endforeach
            </ul>
            <div>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary " type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                  </form>
            </div>
        </nav>
    </section>
</header>
