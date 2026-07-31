<?php 
$socials = config("socialLinksName");
?>


<section class="socialSection">
    <div class="bg">
        <div class="container">
            <div>
                <button>
                    SIGN-UP NOW!
                </button>
            </div>
            <div>
                <h4>
                    FOLLOW US
                </h4>
                <div class="social">
                    <ul>
                        @foreach ($socials as $social)
                        <li> {{$social['name']}}
                            <a href="{{$social['link']}}">
                                <img src="{{Vite::asset($social['src'])}}" alt="{{$social['name']}}">
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>