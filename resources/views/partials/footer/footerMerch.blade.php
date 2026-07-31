<?php
$merchs = config("merchList");
?>

<section class="merch-section">
    <div class="banner-bg">
        <div class="container">
            <div className="list-merch">
                <ul>
                    @foreach ($merchs as $merch)
                        <li>
                            <x-cardMerch>
                                <x-slot:src>{{Vite::asset($merch['src'])}}</x-slot:src>
                                <x-slot:text>{{$merch["text"]}}</x-slot:text>
                            </x-cardMerch>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>