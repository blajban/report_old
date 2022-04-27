Skapa klasser och använd dem i webbsidor
----------------------------------------

Börja med att utveckla dina klasser och testa dem i webbsidor enligt följande.

[OK] Skapa en kontroller i Symfony där du kan skapa webbsidor för denna delen av uppgiften.

[OK] Gör en förstasida card som länkar till samtliga undersidor för denna uppgiften. Detta är din “landningssida” för denna uppgiften. Placera länken till sidan i din navbar så den är lätt att nå.

[OK] Skapa klasser för att hantera 
    [OK] kort (card) 
    [OK] och kortlek (deck). 

    
* Skapa en sida card/deck som visar samtliga kort i kortleken sorterade per färg och värde. Ess kan vara antingen 1 eller 14 beroende av vilket kortspel man spelar.
    * GÖR EVENTUELLT OM HÄR SÅ ATT DEN ÄR RÄTT SORTERAD

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

* Committa alla filer och lägg till en tagg 2.0.0. Om du gör uppdateringar så ökar du taggen till 2.0.1, 2.0.2, 2.1.0 eller liknande.

* Kör dbwebb test kmom02 för att kolla att du inte har några fel.

* Pusha upp repot till GitHub, inklusive taggarna.

* Gör en dbwebb publishpure report och kontrollera att att det fungerar på studentservern.
