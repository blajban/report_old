Krav

[OK] Gör en installation av Symfony och placera den i me/report. Den publika webbkatalogen skall ligga som me/report/public.

[OK] Skapa följande webbsidor, använd templatefiler och en templatemotor.
    [OK] Skapa en route / 
        [OK] som ger en presentation av dig själv inklusive en bild. Det är okey att vara anonym och hitta på en figur att presentera.
    [OK] Skapa en route /about 
        [OK] som berättar om kursen mvc och dess syfte. Länka till kursens Git-repo. Lägg till en representativ bild.
    [OK] Skapa en route /report där du 
        [OK] samlar dina redovisningstexter för kursens kmom.

[OK] Markdown-support: https://github.com/erusev/parsedown

[OK] Skapa en enhetlig style till webbplatsen. Du kan använda LESS/SASS eller liknande CSS preprocessorer. Du kan använda CSS ramverk.

* Sidorna skall ha en enhetlig layout och det skall finns:
    [OK] En tydlig header överst på varje sida, med eller utan bild.
    [OK] En navbar som gör att man kan navigera mellan samtliga sidor.?
    [OK] En footer längst ned som visar rimliga detaljer.

[OK] Skapa ett Git repo av katalogen me/report. Koppla samman repot med GitHub, GitLab eller liknande tjänst.

* Committa alla filer och lägg till en tagg 1.0.0. Om du gör uppdateringar så ökar du taggen till 1.0.1, 1.0.2, 1.1.0 eller liknande.

* Pusha upp repot till GitHub, inklusive taggarna.

* Kör dbwebb test kmom01 för att kolla att du inte har några fel.

* Gör en dbwebb publishpure report för att kolla att det fungerar på studentservern.
