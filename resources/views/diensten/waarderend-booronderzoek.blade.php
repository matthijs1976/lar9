@extends('layout2.app')
@section('title', '|Waarderend booronderzoek')
@section('content')
<div class="container mx-auto px-4">
    <div class="grid-cols-3 md:grid">
        <div class="h-full px-4 py-2 col-span-2">
            <h1 class="text-blue-700 text-3xl md:text-6xl pt-8 px-4">Waarderend booronderzoek</h1>
            <p class="py-4 px-4 text-lg">Als binnen een plangebied archeologische waarden aanwezig zijn, moet worden
                vastgesteld of deze waarden behoudenswaardig zijn en zal een waarderend inventariserend veldonderzoek
                moeten worden uitgevoerd. In een aantal specifieke gevallen, met name bij vuursteenvindplaatsen, kan
                dit door middel van een karterend booronderzoek. In de overige gevallen zal meestal een waarderend
                poefsleuvenonderzoek worden uitgevoerd</p>
                    <p class="px-4 text-lg text-blue-700"><a href="inventariserend-booronderzoek">Terug naar Inventariserend booronderzoek</a></p>
                             
                             
        </div>
        <div class="h-full px-4 py-6">
            <div class="md:w-2/3 mx-auto"><img src="/img/logo.png" class="w-full mx-auto py-4"></div>
            <div class="md:w-2/3 mx-auto"><img src="/images/gutskern.jpg" alt="gutskern" class="w-full mx-auto"></div>
            
        </div>
    </div>
</div>
<!-- end of text section -->
@endsection