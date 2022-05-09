@extends('layout2.app')
@section('title', '|Archeologisch Onderzoek')
@section('content')
<div class="container mx-auto px-4">
    <div class="grid md:grid-cols-3">
        <div class="h-full px-4 py-2 col-span-2">
            <h1 class="text-blue-700 text-3xl md:text-6xl pt-8 px-4">Verplicht archeologisch onderzoek</h1>
            <p class="py-4 px-4">Sinds 2007 is bij wet bepaald dat, voordat de bodem wordt verstoord, eerst moet
                 worden onderzocht of er archeologische waarden worden bedreigd. En als blijkt dat dat er (behoudenswaardige)
                  archeologische waarden aanwezig zijn, dan moet worden gestreefd naar het behoud van deze waarden. Dit kan
                   door de archeologische resten te laten zitten en de plannen aan te passen, of door ze op te graven. De wet
                    bepaalt ook dat de initiatiefnemer verantwoordelijk is voor de kosten van het onderzoek.</p>
                    <p class="py-4 px-4">Of archeologisch onderzoek noodzakelijk is, blijkt vaak bij de aanvraag van bijvoorbeeld
                         een omgevingvergunning bij de gemeente of een ontgrondingsvergunning bij de provincie. Als voorwaarde voor
                          de vergunningverlening moet de initiatiefnemer kunnen aantonen dat er geen waarden worden bedreigd.</p>
        </div>
        <div class="h-full px-4 py-2">
            <div class="w-full md:w-2/3 mx-auto"><img src="/images/ArcheoSupport2.jpg" class="w-full mx-auto"></div>
        </div>
    </div>
</div>
<!-- end of text section -->
<!-- start of text section2 -->
<div class="container mx-auto px-4">
    <div class="grid md:grid-cols-3 ">
        <div class="h-full hidden md:block px-4 py-8">
            <div class="w-full mx-auto"><img src="/images/ruischerbrug_topo.jpg" class="w-full mx-auto"></div>
        </div>
        <div class="h-full px-4 py-2 col-span-2">
            <h1 class="text-blue-700 text-3xl md:text-6xl pt-8 px-4">Onderzoek in stappen</h1>
            <p class="py-4 px-4"> Archeologisch onderzoek verloopt in een aantal opeenvolgende stappen. Na elke stap wordt door de bevoegde overheid
                (meestal de gemeente) besloten of een volgende stap moet worden uitgevoerd.. </p>
            <p class="py-4 px-4">In de eerste stap, het bureau-onderzoek, wordt aan de hand van bekende gegevens een archeologisch verwachtingsmodel opgesteld.
                Als er sprake is van een archeologische verwachting of er mogelijk archeologische waarden aanwezig zijn, gaat het onderzoek
                 door naar de volgende stap.  </p>
            <p class="py-4 px-4">In de tweede stap, het inventariserend veldonderzoek, wordt het verwachtingsmodel getoetst en aangevuld.
                Afhankelijk van de fase en de verwachting zal het inventariserend veldonderzoek worden uitgevoerd door middel van een inventariserend booronderzoek,
                een proefsleuvenonderzoek of bijvoorbeeld met behulp van grondradar of een oppervlaktekartering.
                Het inventariserend booronderzoek doorloopt drie fases: een verkennende, karterende en waarderende fase,
                waarin achtereenvolgend de volgende vragen worden beantwoord: kunnen er daadwerkelijk resten aanwezig zijn, zijn er resten aanwezig en
                zijn deze resten behoudenswaardig.  </p>
            <p class="py-4 px-4">Als uit het inventariserend veldonderzoek is gebleken dat er behoudenswaardige archeologische waarden aanwezig zijn, moeten deze worden beschermd.
                Dit kan door de bouwplannen dusdanig aan te passen dat de resten bewaard blijven (behoud in situ) of door de resten op te graven door middel van een definitieve
                opgraving of archeologische begeleiding (behoud ex situ).  </p>
            <p class="py-4 px-4">  </p>
        </div>
    </div>
</div>
@endsection