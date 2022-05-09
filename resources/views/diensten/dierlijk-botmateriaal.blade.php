@extends('layout2.app')
@section('title', '|Dierlijk botmateriaal')
@section('content')
<div class="container mx-auto px-4">
    <div class="grid-cols-3 md:grid">
        <div class="h-full px-4 py-2 col-span-2">
            <h1 class="text-blue-700 text-3xl md:text-6xl pt-8 px-4">Dierlijk botmateriaal</h1>
            <p class="py-4 px-4 text-lg">Het archeozoölogisch onderzoek van ArcheoSupport bestaat in de eerste plaats uit het determineren van het dierlijk botmateriaal.
                Nadat voor zover mogelijk soort, leeftijd en geslacht van de diersoorten is bepaald en in een tabel is vastgelegd wordt er een
                 nadere beschrijving opgesteld. De zoogdierbotten, visresten, weekdieren etc. worden bestudeerd om een beeld te geven van de
                  voedselverzameling, het dieet, de agrarische economie en de natuurlijke omgeving.</p>
                    <p class="py-4 px-4 text-lg">Vaak kunnen ziektes van het vee worden aangetoond of slijtagesporen aan de beenderen die vertellen over de arbeidsinzet van de dieren.
                    Doordat de specialisten bij ArcheoSupport direct contact hebben met elkaar, kan er een levendige discussie ontstaan tussen de verschillende
                     disciplines, waardoor er een waardevolle bijdrage wordt geleverd aan het archeologische totaalbeeld en het opstellen van een eindrapport
                      van de opgraving.</p>
                             <p class="py-4 px-4 text-lg">De bestudering van het archeozoölogische materiaal wordt bij ArcheoSupport uitgevoerd 
                                 door <a href="/#">dr. Hijlke Buitenhuis</a>.</p>
                             
        </div>
        <div class="h-full px-4 py-6">
            <div class="md:w-2/3 mx-auto"><img src="/img/logo.png" class="w-full mx-auto py-4"></div>
            <div class="md:w-2/3 mx-auto"><img src="/images/hondeschedel-tiel.jpg" alt="schedel van een hond" class="w-full mx-auto"></div>
            
        </div>
    </div>
</div>
<!-- end of text section -->
@endsection