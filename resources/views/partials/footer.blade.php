@php
$linksFooter =[
    'DC COMICS'=>[
        'Characters',
        'Comics',
        'Movie',
        'TV',
        'Games',
        'Videos',
        'News'
    ],
    'DC'=>[
        'Terms Of Use',
        'Privacy policy(New)',
        'Ad Choices',
        'Advertising',
        'Jobs',
        'Subscriptions',
        'Talent Workshops',
        'CPSC Certificates',
        'Ratings',
        'Shop Help',
        'Contact Us'
    ],
    'SITES'=>[
        'DC',
        'MAD Magazine',
        'DC Universe',
        'DC Power Visa'
    ],
    'SHOP'=>[
        'Shop DC',
        'Shop DC collectibles'
    ]
];
$socialFooter =[
    'footer-facebook.png',
    'footer-twitter.png',
    'footer-youtube.png',
    'footer-pinterest.png',
    'footer-periscope.png'
]
@endphp
<footer>
    <section id="footer-top">
        <div class="container">
            <div class="row g-0">
                <div class="col-6">
                    <ul class="d-flex flex-wrap">
                        @foreach($linksFooter as $key => $link)
                        <li class="m-3">
                            <h4 class="text-white">
                                {{$key}}
                            </h4>
                            <ul>
                                @foreach($link as $key=> $elem)
                                <li>
                                    <a class="footer-link" href="">
                                        {{$elem}}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach
                    </ul>
                    <p>
                        All Site Content TIM and 2020 DC Entertaiment, unless otherwise <a class=" underline"href="">noted here</a> . ALl rights reserverd.<br><a href="">Cookies Settigs</a>
                    </p>
                </div>
                <div class="col-6">

                </div>
            </div>
        </div>
    </section>
    <section id="footer-bottom">
        <div class="container d-flex justify-content-between pt-3 pb-3">
            <div>
                <button type="button" class="btn btn-outline-primary text-white">SING-UP NOW!</button>
           </div>
           <div class="d-flex social">
                <h4 class="me-2 text-primary ">
                    FOLLOW US
                </h4>
                @foreach($socialFooter as $elem)
                <div class="me-2">
                    <img src="{{ Vite::asset('resources/img/'.$elem) }}" alt="{{$elem}}">
                </div>
                @endforeach
           </div>
        </div>
    </section>
</footer>
