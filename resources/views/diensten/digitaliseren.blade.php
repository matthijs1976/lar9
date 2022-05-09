@extends('layout2.app')
@section('title', '|Digitaliseren')
@section('content')
<div class="container mx-auto px-4">
    <div class="grid-cols-3 md:grid">
        <div class="h-full px-4 py-2 col-span-2">
            <h1 class="text-blue-700 text-3xl md:text-6xl pt-8 px-4">Digitaliseren</h1>
            <p class="py-4 px-4 text-lg">Bij het veldonderzoek worden de aangetroffen archeologische gegevens vastgelegd. Vaak gebeurt dit analoog,
                op watervaste tekenfolie of soms ook op papier. Voor de uitwerking van de resultaten en het deponeren moeten deze gegevens echter
                 digitaal gemaakt worden.</p>
                    <p class="py-4 px-4 text-lg">ArcheoSupport kan voor U de analoge veldtekeningen digitaliseren en de resultaten leveren aan archeologisch specialisten in de vorm van
                        een database maar ook in diverse kaartvormen. Het eindresultaat kan gedeponeerd worden bij de archeologische depots en het E-depot.</p>
                             
        </div>
        <div class="h-full px-4 py-6">
            <div class="md:w-2/3 mx-auto"><img src="/img/logo.png" class="w-full mx-auto py-4"></div>
            <div class="md:w-2/3 mx-auto"><img src="/images/bakel-huis2_klein.jpg" alt="huis in bakel" class="w-full mx-auto"></div>
            
        </div>
    </div>
</div>
<!-- end of text section -->
@endsection