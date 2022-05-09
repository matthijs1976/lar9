@extends('layout2.app')
@section('title', '|Opstellen PvA')
@section('content')
<div class="container mx-auto px-4">
    <div class="grid-cols-3 md:grid">
        <div class="h-full px-4 py-2 col-span-2">
            <h1 class="text-blue-700 text-3xl md:text-6xl pt-8 px-4">Opstellen PvA</h1>
            <p class="py-4 px-4 text-lg">Als een booronderzoek moet worden uitgevoerd is het niet nodig om een uitgebreid Programma van Eisen op te stellen.
                Er kan worden volstaan met een veel eenvoudiger Plan van Aanpak (PvA).</p>
                    <p class="py-4 px-4 text-lg">Dit Plan van Aanpak kan ArcheoSupport voor U opstellen, eventueel tegelijk met het uitvoeren van het
                         <a href="inventariserend-booronderzoek" class="underline underline-offset-2">inventariserend booronderzoek.</a></p>
                            
        </div>
        <div class="h-full px-4 py-6">
            <div class="md:w-2/3 mx-auto"><img src="/img/logo.png" class="w-full mx-auto py-4"></div>
            <div class="md:w-2/3 mx-auto"><img src="/images/boren-overdemaas-klein.jpg" alt="booronderzoek over de maas" class="w-full mx-auto"></div>
            
        </div>
    </div>
</div>
<!-- end of text section -->
@endsection