@extends('layout2.app')
@section('title', '|Vondstverwerking')
@section('content')
<div class="container mx-auto px-4">
    <div class="grid-cols-3 md:grid">
        <div class="h-full px-4 py-2 col-span-2">
            <h1 class="text-blue-700 text-3xl md:text-6xl pt-8 px-4">Vondstverwerking</h1>
            <p class="py-4 px-4 text-lg">Na een archeologisch onderzoek dienen de vondsten gewassen, gezeefd, gedroogd, gesorteerd, geteld en zo stabiel mogelijk verpakt te worden (tot de uitwerking)
                opdat ze uitgewerkt kunnen worden door de materiaalspecialisten. Om de vondstverwerking zo goed mogelijk te laten plaatsvinden is het van het grootste belang dat
                deze wordt verricht in een ruimte waar men de beschikking heeft over alle benodigde faciliteiten.</p>
                    <p class="py-4 px-4 text-lg">AcheoSupport kan de vondstverwerking voor u verzorgen. Als totaalpakket of per onderdeel, afhankelijk van de wensen van de klant. Dat betekent dat we de vondsten ophalen,
                        wassen, sorteren, administreren en verwerken in de van toepassing zijnde database, zodat ze vervolgens direct  kunnen worden uitgewerkt door de materiaalspecialisten.
                        Als u na de rapportage van het onderzoek het materiaal wilt laten <a href="deponeren" class="underline underline-offset-2">deponeren</a>, dan kunt u hiervoor ook contact met ons opnemen.</p>
                             
                             
        </div>
        <div class="h-full px-4 py-6">
            <div class="md:w-2/3 mx-auto"><img src="/img/logo.png" class="w-full mx-auto py-4"></div>
            <div class="md:w-2/3 mx-auto"><img src="/images/petra-vondstverwerking-kleinJPG.jpg" alt="vondstverwerking" class="w-full mx-auto"></div>
            
        </div>
    </div>
</div>
<!-- end of text section -->
@endsection