@extends('layout2.app')
@section('title', '|Karterend booronderzoek')
@section('content')
<div class="container mx-auto px-4">
    <div class="grid-cols-3 md:grid">
        <div class="h-full px-4 py-2 col-span-2">
            <h1 class="text-blue-700 text-3xl md:text-6xl pt-8 px-4">Karterend booronderzoek</h1>
            <p class="py-4 px-4 text-lg">Als in de verkennende fase blijkt dat het plangebied nog steeds een archeologische verwachting heeft,
                dan zal een karterend onderzoek moeten worden uitgevoerd. Dit onderzoek heeft tot doel vast te stellen of er archeologische
                waarden aanwezig zijn binnen het plangebied. Het onderzoek zal in de meeste gevallen worden uitgevoerd als booronderzoek of
                proefsleuvenonderzoek. Welke methode wordt gekozen, is afhankelijk van de verwachting. Een karterend booronderzoek is alleen
                zinvol als er een hoge concentratie vondsten wordt verwacht of er een archeologische laag aanwezig is. Wanneer voornamelijk
                grondsporen worden verwacht, is een proefsleuvenonderzoek de meest geëigende optie. ArcheoSupport voert ook karterende booronderzoeken
                uit. In het geval van relatief kleine locaties kan dit onderzoek te gelijkertijd worden uitgevoerd met het verkennend booronderzoek,
                om tijd en kosten te besparen.</p>               
                    <p class="py-2 px-4 text-lg text-blue-700"><a href="inventariserend-booronderzoek">Terug naar Inventariserend booronderzoek</a></p>
                            
        <div class="h-full px-4 py-6">
            <div class="md:w-2/3 mx-auto"><img src="/img/logo.png" class="w-full mx-auto py-4"></div>
            <div class="md:w-2/3 mx-auto"><img src="/images/gutskern.jpg" alt="gutskern" class="w-full mx-auto"></div>
            
        </div>
    </div>
</div>
<!-- end of text section -->
@endsection