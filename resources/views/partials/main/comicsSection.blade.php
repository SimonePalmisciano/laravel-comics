<?php
$comics = config("comics");
// var_dump($comics);
?>

<section class="comics-section">
    <div class="bg">
        <div class="container">
            <div class="list-comics">
                <ul>
                    @foreach ($comics as $comic)
                        <li>
                            <x-card-comics>
                                <x-slot:src>{{$comic['thumb']}}</x-slot:src>
                                <x-slot:title>{{$comic['title']}}</x-slot:title>
                                <x-slot:series>{{$comic['series']}}</x-slot:series>
                            </x-card-comics>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>