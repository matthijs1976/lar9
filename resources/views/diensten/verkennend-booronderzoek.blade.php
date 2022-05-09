@extends('layout2.app')
@section('title', '|Verkennend booronderzoek')
@section('content')
<div class="container mx-auto px-4">
    <div class="grid-cols-3 md:grid">
        <div class="h-full px-4 py-2 col-span-2">
            <h1 class="text-blue-700 text-3xl md:text-6xl pt-8 px-4">Verkennend booronderzoek</h1>
            <p class="py-4 px-4 text-lg">De verkennende fase wordt meestal uitgevoerd als een verkennend booronderzoek, bij voorkeur in combinatie met het bureau-onderzoek.
                Het doel van dit onderzoek is het in kaart brengen van de bodemopbouw en de mate van verstoring van het terrein. Deze twee factoren kunnen
                verregaande gevolgen hebben voor de archeologische verwachting van het plangebied. De bodemopbouw kan anders zijn dan verwacht, waardoor ook de
                verwachting verandert, of de bodem blijkt dermate verstoord te zijn waardoor überhaubt geen archeologische resten meer te verwachten zijn.
                De combinatie van een bureau-onderzoek en een verkennend booronderzoek leidt tot een nauwkeuriger verwachtingsmodel dan een bureau-onderzoek alleen.
                 De combinatie van een bureau-onderzoek met een verkennend inventariserend booronderzoek bespaart de initiatiefnemer niet alleen de tijd en kosten van
                 een dubbel onderzoek, maar leidt ook tot een veel beter advies met betrekking tot eventuele vervolgstappen.
                 </p>
                    <p class="px-4 text-lg text-blue-700">
                        <a href="inventariserend-booronderzoek">Terug naar inventariserend booronderzoek.</a></p>                           
                             
        </div>
        <div class="h-full px-4 py-6">
            <div class="md:w-2/3 mx-auto"><img src="/img/logo.png" class="w-full mx-auto py-4"></div>
            <div class="md:w-2/3 mx-auto"><img src="/images/petra-vondstverwerking-kleinJPG.jpg" alt="vondstverwerking" class="w-full mx-auto"></div>
            
        </div>
    </div>
</div>
<!-- end of text section -->
@endsection