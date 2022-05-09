@extends('layout2.app')
@section('title', '|Object fotografie')
@section('content')
<div class="container mx-auto px-4">
    <div class="grid-cols-3 md:grid">
        <div class="h-full px-4 py-2 col-span-2">
            <h1 class="text-blue-700 text-3xl md:text-6xl pt-8 px-4">Object fotografie</h1>
            <p class="py-4 px-4 text-lg">ArcheoSupport kan al Uw archeologische objecten fotograferen. Vaak is dit een goedkopere oplossing dan het laten tekenen van de voorwerpen,
                terwijl het toch goede en duidelijke resultaten geeft.</p>
                    <p class="py-4 px-4 text-lg">Het is afhankelijk van de opdracht in het <a href="opstellen-pve" class="underline underline-offset-2">Programma van Eisen</a> voor welke oplossing gekozen wordt.</p>
                             
        </div>
        <div class="h-full px-4 py-6">
            <div class="md:w-2/3 mx-auto"><img src="/img/logo.png" class="w-full mx-auto py-4"></div>
            <div class="md:w-2/3 mx-auto"><img src="/images/lakenlood.jpg" alt="laken lood" class="w-full mx-auto"></div>
            
        </div>
    </div>
</div>
<!-- end of text section -->
@endsection