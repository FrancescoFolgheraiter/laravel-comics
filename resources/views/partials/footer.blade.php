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
]
@endphp
<footer>
    <section>
        <div class="container text-white">
            <div class="row">
                <div class="col-6">
                    <ul class="d-flex flex-wrap">
                        @foreach($linksFooter as $key => $link)
                        <li class="m-3">
                            <h4>
                                {{$key}}
                            </h4>
                            <ul>
                                @foreach($link as $key=> $elem)
                                <li>
                                    {{$elem}}
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            ciao
        </div>
    </section>
</footer>
