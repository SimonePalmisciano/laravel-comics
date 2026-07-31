<?php
$dcComicsLinks = config("dcComicsLinks");
$shopLinks = config("shopLinks");
$dcLinks = config("dcLinks");
$sitesLinks = config("sitesLinks");
?>

<section class="dcComicsLinks-section">
    <div class="banner-bg">
        <div class="container">
            <div class="dc-comics">
                <h4>DC COMICS</h4>
                <ul>
                    @foreach ($dcComicsLinks as $link)
                    <a href="{{$link['url']}}">{{$link["text"]}}</a>
                    @endforeach
                </ul>
            </div>
            <div class="dc-comics">
                <h4>SHOP</h4>
                <ul>
                    @foreach ($shopLinks as $link)
                    <a href="{{$link['url']}}">{{$link["text"]}}</a>
                    @endforeach
                </ul>
            </div>
            <div class="dc-comics">
                <h4>DC</h4>
                <ul>
                    @foreach ($dcLinks as $link)
                    <a href="{{$link['url']}}">{{$link["text"]}}</a>
                    @endforeach
                </ul>
            </div>
            <div class="dc-comics">
                <h4>SITES</h4>
                <ul>
                    @foreach ($sitesLinks as $link)
                    <a href="{{$link['url']}}">{{$link["text"]}}</a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>