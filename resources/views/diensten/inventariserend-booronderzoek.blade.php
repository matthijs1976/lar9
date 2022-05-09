@extends('layout2.app')
@section('title', '|Inventariserend booronderzoek')
@section('content')
<div class="container mx-auto px-4">
    <div class="grid-cols-3 md:grid">
        <div class="h-full px-4 py-2 col-span-2">
            <h1 class="text-blue-700 text-3xl md:text-6xl pt-8 px-4">Inventariserend booronderzoek</h1>
            <p class="py-4 px-4 text-lg">Als uit het  <a href="bureau-onderzoek" class="underline underline-offset-2">bureau-onderzoek</a> is gebleken dat het plangebied een archeologische verwachting heeft,
                is de eerst volgende stap het uitvoeren van een inventariserend veldonderzoek. Dit inventariserend veldonderzoek verloopt in drie fases:
                 verkennend, karterend en waarderend. De verkennende fase wordt meestal uitgevoerd als een verkennend booronderzoek, bij voorkeur in combinatie
                  met het <a href="bureau-onderzoek" class="underline underline-offset-2">bureau-onderzoek</a>.
                Het doel van dit onderzoek is het in kaart brengen van de bodemopbouw en de mate van verstoring van het plangebied. </p>
                <p class="py-2 px-4 text-lg text-blue-700"><a href="verkennend-booronderzoek" class="underline underline-offset-2">Meer over verkennend booronderzoek</a></p>
               
                    <p class="py-4 px-4 text-lg">Als uit de verkennende fase blijkt dat er kans is op archeologische resten, dan wordt er een karterend onderzoek uitgevoerd.
                        Het doel van een karterend onderzoek is om vast te stellen of er sprake is van archeologische waarden.
                        Dit karterende onderzoek wordt doorgaans uitgevoerd als booronderzoek of <a href="proefsleuvenonderzoek" class="underline underline-offset-2">proefsleuvenonderzoek</a>.</p>
                        <p class="py-2 px-4 text-lg text-blue-700"><a href="karterend-booronderzoek" class="underline underline-offset-2">Meer over karterend booronderzoek</a></p>
               
                             <p class="py-4 px-4 text-lg">Als uit het vooronderzoek blijkt dat er sprake is van archeologische resten, dan moet een waarderend onderzoek uitmaken of deze  behoudenswaardig zijn.
                                Dit waarderende onderzoek kan worden uitgevoerd door middel van een waarderend booronderzoek of een <a href="proefsleuvenonderzoek" class="underline underline-offset-2">proefsleuvenonderzoek</a>.<br>
                                </p>
                             <p class="py-2 px-4 text-lg text-blue-700"><a href="waarderend-booronderzoek" class="underline underline-offset-2">Meer over waarderend booronderzoek</a></p>
                            
        </div>
        <div class="h-full px-4 py-6">
            <div class="md:w-2/3 mx-auto"><img src="/img/logo.png" class="w-full mx-auto py-4"></div>
            <div class="md:w-2/3 mx-auto"><img src="/images/gutskern.jpg" alt="gutskern" class="w-full mx-auto"></div>
            
        </div>
    </div>
</div>
<!-- end of text section -->
@endsection