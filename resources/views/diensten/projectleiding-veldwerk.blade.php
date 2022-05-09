@extends('layout2.app')
@section('title', '|Projectleiding veldwerk')
@section('content')
<div class="container mx-auto px-4">
    <div class="grid-cols-3 md:grid">
        <div class="h-full px-4 py-2 col-span-2">
            <h1 class="text-blue-700 text-3xl md:text-6xl pt-8 px-4">Projectleiding veldwerk</h1>
            <p class="py-4 px-4 text-lg">Wanneer u een opgravingsbedrijf in de arm hebt genomen voor het uitvoeren van een archeologisch onderzoek,
                dan wilt u graag dat dit zo voordelig mogelijk gebeurt. Er moet een goede verhouding tussen kosten en resultaat worden bereikt.
                Misschien hebt u een goede overeenkomst bereikt wat betreft de uitgebrachte offertes, maar u wilt ook weten of de uitvoering navenant
                is en of eventueel een post meerwerk werkelijk noodzakelijk of verplicht is. ArcheoSupport kan voor u deze problemen oplossen of u bijstaan
                om een goed resultaat te bereiken. Door de projectleiding over het veldwerk aan ons toe te vertrouwen bereikt u een optimaal rendement.</p>
                    <p class="py-4 px-4 text-lg">Als uit de verkennende fase blijkt dat er kans is op archeologische resten, dan wordt er een karterend onderzoek uitgevoerd.
                        Het doel van een karterend onderzoek is om vast te stellen of er sprake is van archeologische waarden.
                         Dit karterende onderzoek wordt doorgaans uitgevoerd als booronderzoek of proefsleuvenonderzoek.</p>
                             <p class="px-4 text-lg text-blue-700"><a href="karterend-booronderzoek">Meer over karterend booronderzoek</a></p>
                             <p class="py-4 px-4 text-lg">Als uit het vooronderzoek blijkt dat er sprake is van archeologische resten, dan moet een waarderend onderzoek uitmaken of deze  behoudenswaardig zijn.
                                Dit waarderende onderzoek kan worden uitgevoerd door middel van een waarderend booronderzoek of een proefsleuvenonderzoek.</p>
                             <p class="px-4 text-lg text-blue-700"><a href="waarderend-booronderzoek">Meer over waarderend booronderzoek</a></p>
                             
        </div>
        <div class="h-full px-4 py-6">
            <div class="md:w-2/3 mx-auto"><img src="/img/logo.png" class="w-full mx-auto py-4"></div>
            <div class="md:w-2/3 mx-auto"><img src="/images/bakelprofiel_klein.jpg" alt="profiel bakel" class="w-full mx-auto"></div>
            
        </div>
    </div>
</div>
<!-- end of text section -->
@endsection