@extends('layout2.app')
@section('title', '|Bureau-onderzoek')
@section('content')
<div class="container mx-auto px-4">
    <div class="grid-cols-3 md:grid">
        <div class="h-full px-4 py-2 col-span-2">
            <h1 class="text-blue-700 text-3xl md:text-6xl pt-8 px-4">Bureau-onderzoek</h1>
            <p class="py-4 px-4 text-lg">De eerste stap in het traject van archeologisch onderzoek is het uitvoeren van een bureau-onderzoek.
                Bij het bureau-onderzoek worden alle
                   bekende aardwetenschappelijke, archeologische,
                  historisch-geografische en historische gegevens van het plangebied en de directe omgeving onderzocht.
                  Deze gegevens worden samengebracht in een archeologisch verwachtingsmodel.</p>
                    <p class="py-4 px-4 text-lg">Het verwachtingsmodel vertelt of er archeologische waarden aanwezig kunnen zijn, uit welke archeologische periode ze stammen,
                        waar ze uit bestaan,
                           op welke diepte ze liggen en of ze verstoord kunnen zijn in meer recente tijden.<br>
                          Op basis van het verwachtingsmodel wordt bepaald in hoeverre vervolgonderzoek noodzakelijk is. Vaak wordt het bureau-onderzoek
                           gecombineerd met een
                           <a href="verkennend-booronderzoek">verkennend booronderzoek</a>, om zo een
                          betere uitspraak te kunnen doen over de verwachting. Dit scheelt uiteindelijk in de kosten en tijd.</p>
                             
        </div>
        <div class="h-full px-4 py-6">
            <div class="md:w-2/3 mx-auto"><img src="/img/logo.png" class="w-full mx-auto py-4"></div>
            <div class="md:w-2/3 mx-auto"><img src="/images/haatland-detail-web.jpg" alt="" class="w-full mx-auto"></div>
            
        </div>
    </div>
</div>
<!-- end of text section -->
@endsection