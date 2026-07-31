<?php
$comics = config("comics");
// var_dump($comics);
?>

<section class="comics-section">
    <div class="bg">
        <div class="container text-center">
            <div class="list-comics row row-gap-4 text-white">
                @foreach ($comics as $comic)
                <div class="col-sm-12 col-md-4 col-lg-2">
                    <x-card-comics>
                        <x-slot:src>{{$comic['thumb']}}</x-slot:src>
                        <x-slot:title>{{$comic['title']}}</x-slot:title>
                        <x-slot:series>{{$comic['series']}}</x-slot:series>
                    </x-card-comics>
                </div>
                @endforeach
            </div>
            <button class="btn btn-primary">
                LOAD MORE
            </button>
        </div>
    </div>
</section>