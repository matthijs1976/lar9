@extends('layout2.app')
@section('title', '|Proefsleuvenonderzoek')
@section('content')
<div class="container mx-auto px-4">
    <div class="grid-cols-3 md:grid">
        <div class="h-full px-4 py-2 col-span-2">
            <h1 class="text-blue-700 text-3xl md:text-6xl pt-8 px-4">Proefsleuvenonderzoek</h1>
            <p class="py-4 px-4 text-lg">Als uit een archeologisch <a href="bureau-onderzoek" class="underline underline-offset-2">bureau-onderzoek</a> en
                 <a href="inventariserend-booronderzoek" class="underline underline-offset-2">inventariserend booronderzoek</a> is gebleken dat er een gerede kans is op archeologische resten,
                dan kan is de volgende stap om dit te onderzoeken door middel van het graven van proefsleuven.
                ArcheoSupport heeft in oktober 2014 van de Rijksdienst voor het Cultureel Erfgoed te Amersfoort een opgravingsvergunning verkregen
                 voor het doen van proefsleuvenonderzoek en opgravingen. Op een efficiënte wijze kan ArcheoSupport proefsleuvenonderzoek uitvoeren.
                  Uiteraard verzorgen wij een rapportage en, indien gewenst, kan voor een vervolgonderzoek een
                   <a href="opstellen-pve" class="underline underline-offset-2">Progamma van Eisen</a>
                   worden geschreven door een van onze KNA-senior-archeologen.</p>
                    
        </div>
        <div class="h-full px-4 py-6">
            <div class="md:w-2/3 mx-auto"><img src="/img/logo.png" class="w-full mx-auto py-4"></div>
            <div class="md:w-2/3 mx-auto"><img src="/images/eext-proefsleuf.jpg" alt="proefsleuf in eext" class="w-full mx-auto"></div>
            
        </div>
    </div>
</div>
<!-- end of text section -->
@endsection