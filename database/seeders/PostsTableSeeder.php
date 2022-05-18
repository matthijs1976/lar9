<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Vuurstenen schrabber uit Terborg gebruikt door een rechtshandig persoon?',
            'body' => 'Bij een opgraving in Terborg (Gld.), uitgevoerd door Econsultancy werden enkele stukken vuursteen aangetroffen. Dit materiaal is bestudeerd door Joshua Veldhuis, vuursteenspecialist van ArcheoSupport. Hoewel het aantal vondsten gering was, was wel duidelijk dat het ging om de resten van een bewoningslocatie. Het enige aangetroffen werktuig is een kleine schrabber. De basis van deze, intensief bewerkte, schrabber was door middel van retouchering stomp gemaakt. Dit wijst erop dat de schrabber waarschijnlijk niet was geschacht, maar in de hand werd gehouden. De naar links aflopende werkrand suggereert dat het gaat om een schrabber die door een rechtshandig persoon werd gebruikt.',
                'fototitle' => 'Vuurstenen schrabber.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Groningen in de 17e eeuw een groene stad',
                'body' => 'Tonko Ufkes deed onderzoek naar de bomen en het onderhoud hiervan in de stad Groningen in de 17e eeuw. Uit dit archiefonderzoek blijkt dat er een actief beleid werd gevoerd ten aanzien van de beplanting en onderhoud van bomen. De stadswallen waren beplant met iepen, die met hun wortels de wallen consolideerden. Lindebomen omzoomden de Vismarkt en de Ossenmarkt, waar ze beschutting, schaduw en verkoeling brachten bij de waren- en veemarkt. Ook zullen esthetische motieven mee hebben gespeeld. De bomen vormden in de 17e eeuw een vanzelfsprekend onderdeel van de inrichting van vestingwerken en pleinen en ze werden systematisch aangeplant in de openbare ruimte.',
                'fototitle' => 'Boteringeboog 1793',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Baanbrekend nieuws over domesticatie van schaap, mei 2014',
            'body' => 'Hijlke Buitenhuis publiceerde samen met collega\'s een baanbrekende studie over de domesticatie van het schaap, in het Amerikaanse tijdschrift PNAS. Hijlke doet onderzoek naar de oorsprong en ontwikkeling van de domesticatie van huisdieren en dan met name schapen en geiten, in Centraal Anatolië, Turkije. Bij grootschalige opgravingen op de tell Aşıklı Höyük (http://www.asiklihoyuk.org/) nabij Akseray zijn concrete aanwijzingen gevonden dat wilde voorouders van de schapen in gevangenschap werden gehouden, rond 8500 v. Chr. De overgang van wilde naar gedomesticeerde dieren kon hier voor het eerst goed in kaart worden gebracht. Niet alleen in Amerika, maar ook in Europa is dit onderzoek door vakgenoten met grote belangstelling ontvangen (bekijk het artikel). ArcheoSupport is dan ook zeer trots op deze bijdrage van Hijlke.',
                'fototitle' => 'Centraal Anatolië, Turkije',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Compleet aanbod specialistisch onderzoek',
                'body' => 'Sinds 1 april 2014 is het team van ArcheoSupport versterkt met Gertie Bergsma. Met haar specialisme Fysische antropologie levert Gertie een wezenlijke bijdrage in de reconstructie van het leven van onze voorouders. De studie van menselijk botmateriaal geeft informatie over leeftijd, lengte en geslacht van de overledene, maar vertelt soms ook iets over ziektes, voedselpatronen en familierelaties. Gertie\'s specialisme omvat zowel menselijk botmateriaal als menselijke crematieresten. Met de aanwinst van fysische antropologie, kan ArcheoSupport u nu het complete pakket aan uitwerking van archeologisch vondstmateriaal bieden.',
                'fototitle' => 'Martini skelet',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Nu ook archeobotanisch onderzoek bij ArcheoSupport',
                'body' => 'ArcheoSupport heeft sinds kort een nieuwe medewerker, Frits Vrede. Frits heeft zeer veel ervaring met archeobotanisch onderzoek. Frits is gespecialiseerd in het onderzoek van botanische macroresten, hout en houtskool. Voor de Gemeente Groningen heeft Frits zeer veel botanisch onderzoek gedaan uit opgravingen in de stad en het buitengebied. De analyse van dit materiaal levert een schat aan informatie over het eetpatroon van onze voorouders, maar ook over het toenmalige milieu en landschap, en de manier waarop het landschap werd geëxploiteerd.',
                'fototitle' => 'Rogge akker',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Runderbegraving in Muiden',
                'body' => 'Bij een opgraving in Muiden is een nagenoeg compleet runderskelet gevonden. Hijlke Buitenhuis heeft dit skelet bestudeerd. Dit rund is hier begraven in de Nieuwe Tijd, in de 17e eeuw of iets later. Het blijkt te gaan om een koe met een schofthoogte van ruim 1,20 meter en een leeftijd van ca. 6 jaar. Het dier is niet geslacht voor consumptie, maar mogelijk is wel de huid van het karkas gestroopt. Wellicht was de koe ziek, en moest het daarom worden afgemaakt.',
                'fototitle' => 'Runderskelet',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Nieuw: historisch onderzoek',
                'body' => 'ArcheoSupport verwelkomt een nieuwe medewerker, Tonko Ufkes. Tonko heeft als historicus een zeer ruime ervaring in archiefonderzoek en is gespecialiseerd in de 16e en 17e eeuw. Historisch onderzoek kan van groot belang zijn voor archeologisch onderzoek. Er kan nieuwe of meer gedetailleerde informatie worden verkregen, en historisch onderzoek laat bij uitstek de menselijke kant van het verleden zien.',
                'fototitle' => 'Historisch onderzoek',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}