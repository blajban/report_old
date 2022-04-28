Skapa klasser och använd dem i webbsidor
----------------------------------------

Börja med att utveckla dina klasser och testa dem i webbsidor enligt följande.

[OK] Skapa en kontroller i Symfony där du kan skapa webbsidor för denna delen av uppgiften.

[OK] Gör en förstasida card som länkar till samtliga undersidor för denna uppgiften. Detta är din “landningssida” för denna uppgiften. Placera länken till sidan i din navbar så den är lätt att nå.

[OK] Skapa klasser för att hantera 
    [OK] kort (card) 
    [OK] och kortlek (deck). 

    
[OK] Skapa en sida card/deck som visar samtliga kort i kortleken sorterade per färg och värde. Ess kan vara antingen 1 eller 14 beroende av vilket kortspel man spelar.

[OK] Skapa en sida card/deck/shuffle som visar samtliga kort i kortleken när den har blandats.

[OK] Skapa en sida card/deck/draw som drar ett kort från kortleken och visar upp det. Visa även antalet kort som är kvar i kortleken.

[OK] Skapa en sida card/deck/draw/:number som drar :number kort från kortleken och visar upp dem. Visa även antalet kort som är kvar i kortleken.

[OK] Kortleken skall sparas i sessionen så om man anropar sidorna draw och draw/:number så skall hela tiden antalet kort från korleken minskas tills kortleken är slut. När man gör card/deck/shuffle så kan kortleken återställas.

[OK] Skapa en sida card/deck/deal/:players/:cards som delar ut ett antal :cards från kortleken till ett antal :players och visar upp de korten som respektive spelare har fått. Visa även antalet kort som är kvar i kortleken. Här kan det vara bra att skapa klasser för player och cardHand eller liknande.


[OK] Skapa en sida card/deck2 som är en kortlek inklusive 2 jokrar. Visa kortleken på samma sätt som sidan card/deck. Här kan det troligen vara lämpligt med någon form av arv när du bygger koden. Försök återanvända Deck och bygg förslagsvis DeckWith2Jokers extends Deck.

Optionellt krav.
----------------------

*[OK]* Fundera på om du kan använda konstruktionen “interface” för att bygga din kod förberedd för återanvändning. Tänk att din kod jobbar mot ett interface DeckInterface istället för en hård implementation av Deck alternativt DeckWith2Jokers. Se om du kan uppdatera din kod och dina sidor så applikationen blir mer flexibel för implementationen av själva kortleken. Spelaren, korthanden, och utdelningen av korten samt blandningen bör ju inte behöva bry sig om vilka kort som ligger i kortleken.

Bygg JSON API
---------------

Börja med att utveckla dina klasser och testa dem i webbsidor enligt följande.

[OK] Skapa en kontroller i Symfony där du kan skapa ett JSON API för denna delen av uppgiften.

[OK] I din landningssida för card/ fortsätter du att länka till alla JSON routes som finns i denna delen av uppgiften.

[OK] Skapa en route GET card/api/deck som returnerar en JSON struktur med hela kortleken sorterad per färg och värde.

Optionella
-------------
Följande 3 krav är optionella. Gör dem om du känner att du har tid. Det är bra övning och träning.

* Skapa en route POST card/api/deck/shuffle som blandar kortleken och därefter returnerar en JSON struktur med kortleken.

* Skapa route POST card/api/deck/draw och card/api/deck/draw/:number som drar 1 eller :number kort från kortleken och visar upp dem i en JSON struktur samt antalet kort som är kvar i kortleken. Kortleken sparas i sessionen så om man anropar dem flera gånger så minskas antalet kort i kortleken.

* Skapa en sida card/api/deck/deal/:players/:cards som delar ut ett antal :cards från kortleken till ett antal :players och visar upp de korten som respektive spelare har fått i en JSON struktur. Visa även antalet kort som är kvar i kortleken.

Publicera
-------------

[OK] Committa alla filer och lägg till en tagg 2.0.0. Om du gör uppdateringar så ökar du taggen till 2.0.1, 2.0.2, 2.1.0 eller liknande.

[OK] Kör dbwebb test kmom02 för att kolla att du inte har några fel.

[OK] Pusha upp repot till GitHub, inklusive taggarna.

* Redovisningstext

* Gör en dbwebb publishpure report och kontrollera att att det fungerar på studentservern.


Redovisning
=============


    Förklara kort de objektorienterade konstruktionerna arv, komposition, interface och trait och hur de används i PHP.

    Berätta om din implementation från uppgiften. Hur löste du uppgiften, är du nöjd/missnöjd, vilken förbättringspotential ser du i din koden och dina klasser?
        undera på om du kan använda konstruktionen “interface” för att bygga din kod förberedd för återanvändning.

    Berätta hur det kändes att modellera ett kortspel med flödesdiagram och psuedokod. Var det något som du tror stödjer dig i din problemlösning och tankearbete för att strukturera koden kring en applikation?

    Vilken är din TIL för detta kmom?

Jag känner att jag har bra koll på arv och komposition. Arv är en är-relation, en student är en person. Person är basklassen och så ärver man person när man skapar student-klassen och får då med den funktionalitet som finns i basklassen. Komposition är en har-relation. En fotbollsplan har spelare, men fotbollsplanen kan vara utan spelare och en spelare är definitivt inte en fotbollsplan. Här skulle spelaren då existera som en variabel i fotbollsplan-klassen. 
Jag är relativt nöjd med hur det blev, försökte också utforska interface och traits i min kod.

Trait och interface är däremot nyheter för mig. Jag tänker att trait är som en liten byggsten som man kan lägga till i sina klasser, där traitet då innehåller färdig kod som helt enkelt bakas in i klassen och blir en del av klassen när koden körs. Interface däremot beskriver vilka krav en klass ska uppfylla, t ex vilka metoder som ska finnas, men lämnar implementationen till den som kodar. Trait och interface är definitivt mitt TIL den här gången och jag försökte använda båda i min implementation.

Card-klassen implementerar ett interface som förutom funktioner också innehåller ett antal konstanter, till exempel css-klasser och namn på färgerna. Jag har också några konstanter till färgerna så man slipper ange färgerna med strängar när man skapar kortet. Konstanterna gör också att de direkt kan mappas in i const-arrayerna med namn vilket funkar mycket bra. 

Man kan fundera på vilken nytta det första interfacet gjorde i form av återanvändbar kod, men om vi går vidare till Deck-klassen som implementerar ett deck-interface ser jag verkligen nyttan. Deck-interfacet skulle ju kunna användas även till andra typer av lekar, en magic-lek eller pokemon-lek eller vad som helst. Själva funktionaliteten eller koden i både card och deck är relativt simpel. 

För joker-leken gjorde jag ett arv och la helt enkelt till joker-korten i konstruktorn. För Player använde jag ett cardhand-interface och ett trait med implementationerna av cardhand-interfacet. Denna lösning kändes också väldigt bra, jag ser framför mig att Player-klassen skulle kunna implementera fler interfaces. Till exempel lade jag till spelarnamn i klassen, och där hade man såklart kunna tänka sig ett playerinfo-interface exempelvis. Controllern och att skicka data till template-filerna fungerade också bra.

Totalt sett ett kul kursmoment och jag tycker att det blev snyggt och prydligt på sidan.
