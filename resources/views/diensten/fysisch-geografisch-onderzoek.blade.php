@extends('layout2.app')
@section('title', '|Fysisch geografisch onderzoek')
@section('content')
<div class="container mx-auto px-4">
    <div class="grid-cols-3 md:grid">
        <div class="h-full px-4 py-2 col-span-2">
            <h1 class="text-blue-700 text-3xl md:text-6xl pt-8 px-4">Fysisch geografisch onderzoek</h1>
            <p class="py-4 px-4 text-lg">Bij opgravingen (proefsleuven, begeleidingen en definitieve opgravingen) moeten de archeologische bevindingen
                vaak in een breder landschappelijk kader worden geplaatst. Hiertoe moeten de profielen, die tijdens de opgraving worden gemaakt,
                door een fysisch-geograaf worden geïnterpreteerd.<br> ArcheoSupport beschikt over een fysisch geograaf die deze interpretaties kan
                 maken en rapporteren.</p>
                    
        </div>
        <div class="h-full px-4 py-6">
            <div class="md:w-2/3 mx-auto"><img src="/img/logo.png" class="w-full mx-auto py-4"></div>
            <div class="md:w-2/3 mx-auto"><img src="/images/samengesteld-bakelprofiel-klein.jpg" alt="archeologisch grondprofiel bakel" class="w-full mx-auto"></div>
            
        </div>
    </div>
</div>
<!-- end of text section -->
@endsection