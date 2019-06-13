# PHP

**PHP er et server-side programmeringsspråk som vanligvis kjøres på en web-server. At PHP er server-side betyr at det ikke kjøres i nettleseren din, slik som for eksempel JavaScript. PHP kan brukes for å arbeide med SQL-databaser, og for å lage dynamiske HTML-sider.**

- [PHP](#php)
  - [1. Klienter og tjenere](#1-klienter-og-tjenere)
  - [2. Introduksjon til PHP](#2-introduksjon-til-php)
  - [3. Lage nettsider med PHP](#3-lage-nettsider-med-php)
  - [4. Variabler](#4-variabler)
    - [4.1 Strenger](#41-strenger)
    - [4.2 Aritmetiske operatorer og matematikk](#42-aritmetiske-operatorer-og-matematikk)
    - [4.3 Tellere](#43-tellere)
    - [4.4 Boolske variabler](#44-boolske-variabler)
  - [5. Sammenlikninger og kontrollstrukturer](#5-sammenlikninger-og-kontrollstrukturer)
    - [5.1 - if](#51---if)
    - [5.2 - switch](#52---switch)
  - [6. Tabeller](#6-tabeller)
    - [6.1 Array](#61-array)
    - [6.2 Assosiativ tabell](#62-assosiativ-tabell)
    - [6.3 Flerdimensjonale tabeller](#63-flerdimensjonale-tabeller)
  - [7. Funksjoner](#7-funksjoner)
    - [7.1 Innebygde funksjoner](#71-innebygde-funksjoner)
    - [7.2 Definere egne funksjoner](#72-definere-egne-funksjoner)
    - [7.3 Statiske variabler](#73-statiske-variabler)
  - [8. Løkker](#8-l%C3%B8kker)
    - [8.1 foreach](#81-foreach)
    - [8.2 for](#82-for)
    - [8.3 while](#83-while)
  - [9. Lese data fra URL (GET)](#9-lese-data-fra-url-get)
  - [10. Lese data fra HTML-skjemaer (POST)](#10-lese-data-fra-html-skjemaer-post)
  - [11. Lagre data fra side til side (SESSION)](#11-lagre-data-fra-side-til-side-session)
  - [12. Lagre data fra besøk til besøk (COOKIE)](#12-lagre-data-fra-bes%C3%B8k-til-bes%C3%B8k-cookie)
  - [13. Vanlige brukerfeil i PHP](#13-vanlige-brukerfeil-i-php)
  - [14. Dynamiske nettsider med SQL og PHP](#14-dynamiske-nettsider-med-sql-og-php)
    - [14.1 Koble til en SQL-database med PHP](#141-koble-til-en-sql-database-med-php)
      - [14.1.1 MySQL](#1411-mysql)
      - [14.1.2 SQLite](#1412-sqlite)

## 1. Klienter og tjenere

En **tjener** (engelsk: "server") er et dataprogram som tilbyr tjenester til andre dataprogrammer. De dataprogrammene som bruker tjenestene, kalles **klienter (engelsk: client)**.

Nettleseren på din datamaskin er et eksempel på en klient. Den mottar tjenester fra for eksempel en web-tjener (eller "web-server"). Figuren nedenfor viser hvordan denne prosessen foregår. Nettleseren din kan for eksempel be om å få fila `hallo.html`. Tjeneren finner fila (med alle tilhørende bilder, CSS- og javascript-filer), og sender den tilbake til nettleseren din.

![Klient og tjener uten PHP](https://raw.githubusercontent.com/fagstoff/IT1/master/Illustrasjoner/klient-tjener-apache-php-mysql-1.png)

Ofte gjør tjenerene mye mer enn bare å sende deg HTML-filer når du ber om det. De kan for eksempel kjøre programkode skrevet i PHP, og de kan be en database-tjener om data. Alt dette skjer når du for eksempel ber om en enkelt fil som heter `hallo.php`, se figuren nedenfor.

![Klient og tjener med PHP](https://raw.githubusercontent.com/fagstoff/IT1/master/Illustrasjoner/klient-tjener-apache-php-mysql-2.png)

> ### Oppgaver
>   1. Sett dere sammen to og to. En av dere skal nå forklare den første figuren ovenfor med egne ord, og så skal den andre forklare den neste figuren.
>   2. Se på appene du har på mobilen din. Tror du at noen av dem bruker klient-tjener-modellen? Gjør gjerne noen [nettsøk](https://www.google.no/search?q=client+server+examples+mobile+apps) for å forsøke å finne ut av det.

## 2. Introduksjon til PHP

**PHP er et programmeringsspråk som hovedsakelig brukes for å lage dynamiske nettsider. En dynamisk nettside er en nettside som kan ha varierende innhold og layout avhengig av brukervalg eller andre hendelser.** 

Et eksempel på en dynamisk nettside er [valutakalkulatoren til tolletaten](https://www.toll.no/no/verktoy/valutakurser/). Det som vises på siden er avhengig av beløpet du skriver inn, valutaen du velger og kursen på det tidspunktet du besøker siden.

Kode som er skrevet i PHP må alltid stå mellom startkoden `<?php` og sluttkoden `?>`. Linjer som bare er kommentarer (ikke er kode som skal utføres) starter med `//`. Et enkelt PHP-program som skriver ut teksten *Hallo verden* kan se slik ut:

``` php
<?php
//Dette er en kommentar
echo "Hallo verden\n";
?>
```

Vi avslutter alle linjer i PHP med et semikolon `;`. Koden `\n` betyr ny linje i utskriften fra programmet. For å skrive ut noe fra programmet vårt, bruker vi kommandoen `echo`.

![Rasmus Lerdorf, skaperen av PHP. Foto: William Stadtwald Demchick (CC BY-SA)](https://upload.wikimedia.org/wikipedia/commons/thumb/6/66/Rasmus_Lerdorf_August_2014_%28cropped%29.JPG/800px-Rasmus_Lerdorf_August_2014_%28cropped%29.JPG) <br/>
*Rasmus Lerdorf, skaperen av PHP. Foto: William Stadtwald Demchick (CC BY-SA)*

> ### Oppgaver
>  1. Lag en "Hallo verden"-side hvor du bare bruker HTML (ikke noe PHP-kode). Kall siden `hallo.html`, og legg den på en web-server.
>  2. Bruk nettet og finn ut når PHP ble til. Finn også ut hvilken versjon som er den nyeste.
>  3. Bruk nettet for å finne fem kjente nettsteder som bruker PHP.

## 3. Lage nettsider med PHP

**Nå skal vi lage nettsider med PHP. Jeg forutsetter at du har grunnleggende kunnskap om HTML og CSS fra før. Du må også ha tilgang til en web-tjener med støtte for PHP.**

Det som kommer ut fra PHP blir ikke til HTML-kode helt av seg selv. I HTML-koden nedenfor brukes taggen `<div style="white-space: pre; font-family: monospace;">` for at det som kommer ut fra PHP skal være greit å lese. Senere skal vi lære å lage "skikkelig" HTML-kode fra PHP.

``` php
<!DOCTYPE html>
<html lang="no">
  <head>
    <meta charset="utf-8">
    <title>Testside med PHP</title>
  </head>
  <body>
    <div style="white-space: pre; font-family: monospace;"> 
<?php
// Her kan du lime inn PHP-koden du vil teste

?>
    </div>
  </body>
</html>
```

Du kan bruke malen ovenfor for å teste all PHP-koden som er gitt i dette kurset. Kopier koden du vil teste, og lim det inn på riktig plass i malen ovenfor. Lagre filen med en `.php` filendelse, og last den opp på en web-server. Nå kan du teste koden med nettleseren din.

> ### Oppgaver
>   1. Lag en "Hallo verden"-side hvor du bare bruker PHP. Kall siden `hallo.php`, og legg den på en web-server. Lag den slik at siden ser identisk ut med `hallo.html` som du laget tidligere.
>   2. Endre koden på siden din sånn at den skriver ut navnet ditt istedenfor "Hallo verden".

## 4. Variabler

**I dataprogrammering er en variabel et lagringssted som har et symbolsk navn (en identifikator) og en verdi. Her skal vi se på ulike variabeltyper som du kan bruke i PHP.**

Variabler i PHP kan være av fire ulike datatyper:

  * Integer - heltall, for eksempel -4 eller 19
  * Float - desimaltall, for eksempel 3.1416 (punktum brukes som desimalskilletegn)
  * String - tekststrenger, for eksempel "Hallo verden!"
  * Boolean - en variabel som bare kan ha to verdier (sant/usant)

Dette må du vite om variabler i PHP:

  * Starter med et $-tegn
  * Vi tilordner verdi med et likhetstegn: `$var = verdi`
  * Vi kan også ha sammensatte datatyper i Array eller Object, det skal vi se på senere

### 4.1 Strenger

Her skal vi se nærmere på variabeltypen `String` i PHP.

Strenger starter og slutter med et dobbelt anførselstegn `"`. Det er også mulig å bruke enkle anførselstegn `'`, men de fungerer på en litt annen måte. Det er greiest å bruke dobbelt anførselstegn.

Vi lager variablene $var1 og $var2 og fyller dem med tekststrenger. Så slår vi sammen innholdet i de to variabmlene ved å bruke `.` (punktum).

``` php
<?php
$var1 = "Hei du.";
$var2 = "Hallo!";
echo $var1 . $var2;
?>
```

Vi legger til linjeskift ved å bruke kommandoen `\n`. Vær oppmersom på at dette bare gir en ny linje i HTML-koden, men at det ikke nødvendigvis vises i nettleseren. Vanligvis bruker vi `<p>`eller `<br>`når vi vil ha et nytt avsnitt eller en ny linje.

``` php
<?php
echo "Etter denne linja kommer et linjeskift \n";
?>
```

I eksemplet over var det ikke noe mellomrom mellom de to tekststrengene, det kan vi fikse.

``` php
<?php
$var1 = "Hei du.";
$var2 = "Hallo!";
echo $var1 . " " . $var2;
echo "\n";
?>
```

Vi kan forenkle alt dette ved å plassere variablene mellom to doble anførselstegn `" "`. Da kan vi få inn variabelverdiene, mellomrommet og ny linje i en og samme operasjon.

``` php
<?php
$var1 = "Hei du.";
$var2 = "Hallo!";
echo "$var1 $var2 \n";
?>
```

Forsøk videre på egen hånd. Hva fungerer og hva fungerer ikke?

> ### Oppgaver
>   1. Ta utgangspunkt i siden `hallo.php` som du laget tidligere. Lag en variabel `$fornavn` som har fornavnet ditt som verdi. Endre koden din slik at siden nå viser resultatet av `echo "Hallo $fornavn"`. 
>   2. Ta utgangspunkt i forrige oppgave. Lag en variabel `$hilsen` og gi den verdien "Hei". Endre koden din slik at siden nå viser resultatet av `echo "$hilsen $fornavn"`. 

### 4.2 Aritmetiske operatorer og matematikk

Det er enkelt å gjøre matematikk i PHP. Her er en oversikt over de matematiske operatorene:

  * `$x + $y`      Addisjon
  * `$x - $y`      Subtraksjon
  * `$x * $y`      Multiplikasjon
  * `$x / $y`      Divisjon
  * `$x % $y`      Modulo-operasjon (rest etter divisjon av heltall)
  * `$x ** $y`     Eksponent (x opphøyd i y)
 
Her er et program som demonstrerer bruken av matematiske operatorer:

``` php
<?php
//Integer
$epler = 3;
$pærer = 4;
$frukt = $epler + $pærer;
echo "Antall frukt er $frukt \n";

//Float
$tall_1 = 2.71828; //Legg merke til at . brukes som desimalskille
$tall_2 = 3.14159; //Du kan også bruke funksjonen pi()
$tall_3 = $tall_1 ** $tall_2 - $tall_2;
//I eldre versjoner av PHP må du bruke denne koden:
//$tall_3 = pow($tall_1, $tall_2) - $tall_2;

echo "e opphøyd i pi minus pi er omtrent $tall_3 \n";
?>
```

> ### Oppgaver
>   3. Bruk HTML-malen som ble vist i forrige kapittel. Kopier og lim den inn i en ny fil som du kaller `testfil.php`. Så tar du koden som demonstrerer bruk av matematiske operatorer ovenfor, og limer inn på riktig plass i malen. Åpne siden i en nettleser, og sjekk at alt fungerer. Forsøk så å endre på verdiene til de ulike variablene. Observer hva som skjer.
>   4. Ta utgangspunkt i eksempelkoden som summerer epler og pærer. Legg til en variabel for bananer, og gi den verdien 7. Legg til nødvendig kode for å regne ut det nye tallet for totalt antall frukt. Legg også til nødvendig HTML-kode slik at du får en pen nettside som resultat.
>   5. Lag et enkelt program som beregner arealet av en sirkel med radius lik 4 (lag en variabel `$radius`). Resultatet skal vises som HTML med teksten "Arealet til en sirkel med radius 4 er lik 50.265482457" (antall desimaler i svaret kan variere). Forsøk nå å endre verdien til variablen `$radius`. Får du resultatene du forventer?


### 4.3 Tellere

Vi får ofte bruk for tellere i dataprogrammer, for eksempel når vi ønsker å telle hvor mange ganger en bestemt operasjon har blitt gjennomført. Det finnes spesielle operatorer i PHP for å øke (increment) og minske (decrement) verdien av en heltallsvariabel med 1. La oss se på hvordan de virker.

``` php
<?php
$var = 1; //Vi starter med verdien 1
echo "Verdien er $var \n";
$var++;
echo "Med ++ etter variablen blir verdien $var \n";
$var++;
echo "Med ++ etter variablen blir verdien $var \n";
$var--;
echo "Med -- etter variablen blir verdien $var \n";
$var--;
echo "Med -- etter variablen blir verdien $var \n";
?>
```

> ### Oppgaver
>   6. Ta utgangspunkt i eksempelkoden for å øke og minke heltallsvariabler. Legg til nødvendig HTML-kode slik at du får en pen nettside som resultat. Forsøk med ulike startverdier for `$var`. Får du det resultatet du forventer?
>   7. Lag en PHP-side hvor du lager en variabel `$alder`, og setter verdien lik alderen din. Nå skal du lage kode som skriver ut dette til HTML-siden: *"I fjor var jeg X år gammel. Nå er jeg Y år gammel. Neste år er jeg Z år gammel."*. Der hvor det står XYZ skal det være tall.

### 4.4 Boolske variabler

Når vi programmerer, får vi ofte bruk for en spesiell variabeltype som bare kan ha to verdier. Du kan tenke på denne som en lysbryter, hvor lyset enten er slått på eller er av. Vi kaller en slik datatype for en boolsk variabel. I PHP kan en boolsk variabel ha verdien  `true` eller `false`.

``` php
<?php
//Boolean
$heltsant = true;
$ikkesant = false;
echo "Variabelen heltsant er $heltsant \n";
echo "Variabelen ikkesant er $ikkesant \n";
?>
```

> ### Oppgaver
>   8. Lag et program som har en boolsk variabel `$bryter`. Gi den verdien `true` eller `false` (du velger selv). Skriv ut verdien til bryteren med denne kommandoen: `echo "Bryteren har nå verdien $bryter";`.

## 5. Sammenlikninger og kontrollstrukturer

**Når vi programmerer vil vi alltid ha bruk for å sammenlikne verdien til ulike variabler, og ta beslutninger om hva programmet skal gjøre ut ifra resultatet av sammenlikningene.**

Resultatet av sammenlikninger i PHP blir en boolsk variabel. De enkleste typene sammenlikninger er:

* `7 > 4` gir TRUE     (sant at 7 er større enn 4)
* `7 < 4` gir FALSE    (usant at 7 er ikke mindre enn 4)
* `7 == 4` gir FALSE    (usant at 7 er lik 4)
* `7 != 4` gir TRUE     (sant at 7 ikke er lik 4)

Vi kan også bruke større enn eller lik >= og mindre enn eller lik <=.

### 5.1 - if

Et `if`-uttrykk er en såkalt betinget struktur, det vil si at deler av programmet vårt bare skal utføres dersom noen spesifiserte betingelser er oppfylt. Du kan lese `if` som det norske ordet "dersom". 

En typisk `if`-struktur er ofte *"hvis en ting er sant så utfør dette, eller hvis en annen ting er sant så utfør dette, ellers utfører du dette"*.

Nedenfor ser du et eksempel på en slik type struktur.

``` php
<?php
$alder = 17;

//La oss først se om alderen er ulik fra 42
if ($alder != 42) {
    echo "Du er i alle fall ikke 42.\n";
}

//Vi sjekker alderen nærmere og skriver noen kloke ord avhengig av hva den er
if ($alder < 18) {
    echo "Du er ikke gammel nok!";  
} elseif ($alder >= 18 && $alder < 21) {
    echo "Du er over 18, men du er ikke 21 ennå.";
} elseif ($alder == 21) {
    echo "Oi, du er akkurat 21!";
} else {
    echo "Øy, du er en gamling.";
}
?>
```

> ### Oppgaver
>   1. Kopier eksempelkoden ovenfor, og endre på verdien til variablen `$alder`. Legg også til nødvendig HTML-kode slik at du får en pen nettside som resultat. Skrives korrekt respons ut når du endrer på alderen?
>   2. Lag et program med heltallsvariablene `$a = 3` og `$b = 6`. Deretter lager du en `if` kontrollstruktur som tester om summen av de to variablene er mindre enn 10, akkurat lik 10 eller større enn 10. Endre verdiene på `$a` og `$b` for å sjekke programmet ditt.

### 5.2 - switch

Det kan bli ganske kronglete når vi har mange else-if etter hverandre. Ofte kan det gjøres mer elegant med bruk av kommandoen `switch`.

I eksempelkoden nedenfor ser du et eksempel på bruk av `switch`.

``` php
<?php

$alder = 18;

switch($alder) {
    case 17 :
        echo "Du er 17";
        break;//Denne kommandoen gjør at programmet hopper ut av switch-løkka.
    case 18 :
        echo "Du er 18";
        break;
    case 19 :
        echo "Du er 19";
        break;
    case 20 :
        echo "Du er 20";
        break;
    case 21 :
        echo "Du er 21";
        break;
    default : //Dersom ingen av casene over passet...
        echo "Du er under 17 eller over 21";
        break;
}
?>
```

> ### Oppgaver
>   3. Kopier eksempelkoden ovenfor, og endre på verdien til variablen `$alder`. Legg til `case` for 16 og 22 år. Legg også til nødvendig HTML-kode slik at du får en pen nettside som resultat. Skrives korrekt respons ut når du endrer på alderen?
>   4. Finn fram programmet du laget for å beregne arealet av en sirkel. Nå skal du legge til kode som enten skriver ut teksten "Det var en liten sirkel" dersom arealet er mindre enn 1, og "Det var en stor sirkel" dersom arealet er større enn 1. Du kan selv velge om du vil bruke `switch` eller `if`. Legg til nødvendig HTML-kode for å få en nettside som viser resultatet på en pen måte.

## 6. Tabeller

**Her skal vi se på hvordan vi håndterer tabeller (engelsk: arrays) i PHP. Legg merke til at en tabell i PHP er noe helt annet enn en tabell i HTML. En tabell i PHP er en abstrakt datastruktur som brukes internt i programmet vårt, mens en tabell i HTML lages for å presentere data visuelt for oss.**

### 6.1 Array

La oss lage et testprogram hvor vi legger inn årstidene som tekststrenger. Programmet demonstrerer forskjellige måter å legge til og slette data. Tabellen vi jobber med her har bare én rad. I HTML vil tabellen se slik ut:

| Vår | Sommer | Høst |
|-----|--------|------|

I PHP lager vi tabellen med kommandoen `array`. For å referere til et bestemt element i en PHP-tabell, bruker vi en indeks. Legg merke til at PHP (og de fleste andre programmeringsspråk) begynner å telle på 0. Det første elementet i tabellen vil altså ha indeksen 0. 

I eksempelkoden nedenfor ser du hvordan vi kan lage tabellen, hente ut spesifikke verdier fra tabellen og legge til nye elementer i tabellen. Det er verken intuitivt eller enkelt å skjønne hva som skjer i denne koden, men prøv deg fram for å se hvordan endringene dine påvirker resultatet. 

Kommandoen `print_r` brukes for å skrive ut innholdet fra en array på en enkel måte. Den er kjekk å bruke under utviklingsarbeidet, men du vil sansynligvis ikke få bruk for den kommandoen i det ferdige programmet ditt.

``` php
<?php
//Definerer en array med tre årstider
$årstider = array("Vår", "Sommer", "Høst");
//Husk at indekser i PHP starter på 0
echo "Årstid 3 er $årstider[2] \n";

//Legger til en ny årstid bakerst i arrayet
$årstider[] = "Vinter";

//Skriver ut hele arrayen med årstidene
print_r($årstider);

//Hvis vi vil ha Vinter i starten av arrayet, kan vi gjøre slik:
array_unshift($årstider, "Vinter");

//Men nå har vi vinter både i starten og slutten
print_r($årstider);

//Vi fjerner den bakerste vinteren
array_pop($årstider);

//La oss se om det ble riktig
print_r($årstider);
?>
```

> ### Oppgaver
>   1. Ta utgangspunkt i eksempelkoden ovenfor, og lag en tabell med ukedagene fra mandag til fredag. Legg så til lørdag og søndag. Forsøk så å hente ut hver ukedag, og skriv ut resultatet. Hvilken indeks har tirsdag? Hvilken indeks har søndag? 

### 6.2 Assosiativ tabell

En assosiativ tabell (eng: associative array) er en tabelltype hvor vi gir indeksene navn istedenfor å referere til dem med et tall. I en assosiativ tabell sier vi at vi har et nøkkel-verdi-par (eng: key-value pair). Dette er en datastruktur som ofte gir mer mening og innhold til dataene vi lagrer.

La oss se på et eksempel hvor vi skal lagre informasjon om en person. Vi setter opp denne assosiative tabellen:

``` php
<?php
//Setter opp en assosiativ array
$persondata = array(
  "øyner" => "blå",
  "alder" => 49,
  "vekt" => 84.2,
  "kjønn" => "mann",
  "nerd" => true
);
print_r($persondata);

//Nå kan vi hente ut data fra arrayen med feltnavn som referanse
echo "Vekten er " . $persondata['vekt'];
?>
```

Assosiative tabeller er en veldig fin måte å strukturere data på, og det er lurt å gjenbruke strukturen når du samler data om samme "ting". La oss sette opp flere personer med den samme datastrukturen:

``` php
<?php
//Vi kan sette arrays inne i arrays, da kan vi få veldig ryddige og fine datastrukturer
$persondata = array(
    "unik_nøkkel_1" => array(
        "navn" => "Rune",
        "øyner" => "blå",
        "alder" => 49,
        "vekt" => 84.2,
        "kjønn" => "mann",
        "nerd" => true
    ),
    "unik_nøkkel_2" => array(
        "navn" => "Randi",
        "øyner" => "grønne",
        "alder" => 45,
        "vekt" => 67.4,
        "kjønn" => "kvinne",
        "nerd" => false
    )
);
print_r($persondata);

//La oss plukke ut noe data fra arrayet
echo $persondata['unik_nøkkel_1']['navn'] . " veier " . $persondata['unik_nøkkel_1']['vekt'] . " kg";
?>
```

> ### Oppgaver
>   2. Kopier eksempelkoden ovenfor. Lag en kodelinje som skriver ut alder og kjønn for Randi. Start kodelinja med kommandoen `echo`. Studer hvordan navn og vekt for Rune skrives ut. 
>   3. Ta utgangspunkt i eksempelkoden ovenfor, og legg inn persondata for flere personer. Legg også inn et ekstra element med informasjon om bosted. Rune bor i Skien og Randi bor i Bamble. Hvor bor du? 


### 6.3 Flerdimensjonale tabeller
Vi lager en flerdimensjonal tabell (eng: multi-dimensional array) hvor vi registrerer fotball-lag med poeng, scorede mål og baklengsmål. 

**TODO**

| Lag        | Poeng | Mål | Baklengs |
|------------|-------|-----|----------|
| Odd        | 64    | 32  | 14       |
| Rosenborg  | 58    | 24  | 11       |
| Lillestrøm | 40    | 27  | 16       |
| Brann      | 29    | 17  | 20       |

``` php
<?php
$tabell = array
  (
  array("Odd", 64, 32, 14),
  array("Rosenborg", 58, 24, 11),
  array("Lillestrøm", 40, 27, 16),
  array("Brann", 29, 17, 20)
  );

  print_r($tabell);

?>
```
Vi kan også lage en assosiativ array av denne tabellen:

``` php
<?php
$tabell = array
  (
  array(
    "lag" => "Odd", 
    "poeng" => 64, 
    "mål" => 32, 
    "baklengs" => 14),
  array(
    "lag" => "Rosenborg", 
    "poeng" => 58, 
    "mål" => 24, 
    "baklengs" => 11),
  array(
    "lag" => "Lillestrøm", 
    "poeng" => 40, 
    "mål" => 27, 
    "baklengs" => 16),
  array(
    "lag" => "Brann", 
    "poeng" => 29, 
    "mål" => 17, 
    "baklengs" => 20)
  );

  print_r($tabell);

?>
```



> ### Oppgaver
>   4. Legg ditt favorittlag til den flerdimensjonale assosiative tabellen ovenfor.

## 7. Funksjoner

**En funksjon er en sett av programinstruksjoner som utfører en spesifikk oppgave, og som vi samler og navngir for at den skal være enkelt å gjenbruke. PHP har mange innebygde funksjoner, her skal vi se på noen eksempler. Vi skal også se på hvordan vi kan definere våre egne funksjoner.**

### 7.1 Innebygde funksjoner

Her skal vi se på noen kjekke innebygde funksjoner i PHP. Det finnes mange fler enn det som vises nedenfor, du finner [en oversikt over funksjoner her](https://secure.php.net/manual/en/funcref.php).

PHP har mange [funksjoner for å jobbe med strenger](https://secure.php.net/manual/en/ref.strings.php). Vi kan for eksempel bruke funksjonen strlen() for å finne lengden av en streng:

``` php
$tekststreng = "Dette er en lang streng. Hvor mange tegn er det egentlig?";
echo "Det er " . strlen($tekststreng) . " tegn. \n";
```

Det finnes også mange [matematikk-funksjoner](https://secure.php.net/manual/en/refs.math.php), her er ett eksempel:

``` php
$pi = 3.1415926535897932384626433832795028841971693993751;
echo "Runder av pi til fire desimaler: " . round($pi, 4) . "\n";
```

[Datofunksjoner](https://secure.php.net/manual/en/refs.calendar.php) finner vi så klart også:

``` php
echo "Dato og klokkeslett akkurat nå: " . date("Y-m-d H:i:s") . "\n";
```

...og mange, mange andre funksjoner! Se [https://secure.php.net/manual/en/funcref.php](https://secure.php.net/manual/en/funcref.php) for mer informasjon.

> ### Oppgaver
>   1. Bruk `date()`-funksjonen, og lag en nettside som viser dagens dato på denne måten: "I dag er det mandag 26. november 2018." (men med dagens dato så klart). Les i [dokumentasjonen til `date()`](https://secure.php.net/manual/en/function.date.php) for å finne ut hvordan du skal gjøre det.

### 7.2 Definere egne funksjoner

Ofte vil du oppleve at du taster inn mer eller mindre samme kode om og om igjen, men at det ikke finnes noen innebygd PHP-funksjon som kan hjelpe deg. Da kan du definere dine egne funksjoner. Vi skal se på hvordan det gjøres.

Definisjoner av funksjoner starter alltid med nøkkelordet `function()`. Inne i parentesene etter `function()` skriver du variabelnavn på verdier som skal sendes inn i funksjonen. Du trenger ikke å sende noe inn i en funksjon.

Denne funksjonen sender ut strengen ping hver gang den kalles. Jepp, det heter "å kalle en funksjon" når du ber om at den skal utføres i programmet ditt.

``` php
function ping() {
    return "pong\n";
}
```

Denne funksjonen legger sammen to tall og returnerer resultatet.

``` php
function leggSammen($tall1, $tall2) {
    return $tall1 + $tall2;
}
```

Her er en funksjon som legger til litt tekst rundt navnet vi sender inn i funksjonen.

``` php
function hilsen($navn) {
    return "Hei $navn, hyggelig å høre fra deg.\n";
}
```

Variabler du oppretter inne i funksjonen vil ikke være tilgjengelige fra "utsiden" av funksjonen. Tisvarende er ikke variabler som finnes på utsiden av en funksjon automatisk tilgjengelige inne i funksjonen. Det er derfor du må definere de variablene som skal sendes inn i funksjonen. Dette kalles for "variable scoping", som betyr noe sånt som virkeområdet til en variabel.

``` php
function kvadratrot($tall) {
    $resultat = $tall ** (1/2);
    //Variablen $resultat er ikke tilgjengelig på utsiden av funksjonen, selv
    //om vi sender ut verdien her. Det er innholdet i variablen som sendes ut.
    return $resultat;
}
```

Her er et lite program som bruker funksjonene vi har definert ovenfor:

``` php
<?php
echo ping();
echo "To pluss fem er lik " . leggSammen(2, 5);
echo "\n";
echo hilsen('Rune');
echo hilsen('Haakon Magnus');
$tallet = 3;
echo "Kvadratroten av $tallet er " . kvadratrot($tallet);
echo "Vi får en feilmelding om vi prøver å referere til variablen $resultat utenfor funksjonen."
?>
```

> ### Oppgaver
>   2. Kopier eksempelkoden ovenfor. Legg også til nødvendig HTML-kode slik at du får en pen nettside som resultat. Å få dette eksemplet til å fungere er en litt større utfordring enn hva du har fått i de tidligere oppgavene. Nå må du også få med deg alle funksjonsdefinisjonene, og de må stå oppført før forste gang de kalles i koden. Klarer du det? Du kan slette den siste linja, den gir en feilmelding.
>   3. Se nøye på funksjonen som legger sammen to tall, og returnerer summen. Lag en funksjon som legger sammen tre tall, og returnerer summen.
>   4. For å finne kvadratroten av et tall, opphever du tallet i (1/2) slik som vist ovenfor. Skal du finne tredjeroten av et tall, opphever du i (1/3). Slik fortsetter det med fjerderot og femterot og så videre. Ta utgangspunkt i funksjonen `kvadratrot($tall)` og lag en ny funksjon `nrot($tall, $n)` som beregner n-te rot av et tall.

### 7.3 Statiske variabler

Variabler som bare eksisterer innenfor en funksjon, mister verdien hver gang funksjonen har utført jobben sin. Noen ganger ønsker vi at verdien skal huskes. Da kan vi bruke nøkkelordet `static`. De to funksjonene nedenfor har en teller som øker med 1 hver gang funksjonen kalles. Prøv å kjøre dette programmet, og legg merke til hva slags effekt static-nøkkelordet har.

``` php
<?php

function tellOgGlem() {
    $teller = 0;
    $teller++;
    echo "Telleren i tellOgGlem har nå verdien $teller \n";
}

function tellOgHusk() {
    static $teller = 0;
    $teller++;
    echo "Telleren i tellOgHusk har nå verdien $teller \n";
}

tellOgGlem();
tellOgGlem();
tellOgGlem();
echo "--------------------------------------\n";
tellOgHusk();
tellOgHusk();
tellOgHusk();
echo "--------------------------------------\n";
tellOgGlem();
tellOgHusk();
?>
```

## 8. Løkker

I programmering har vi ofte behov for å gjenta kode mange ganger. For å få til dette bruker vi det som kalles for "løkker". Her skal vi se på tre typer løkker i PHP: [foreach](https://secure.php.net/manual/en/control-structures.foreach.php), [for](https://secure.php.net/manual/en/control-structures.for.php) og [while](https://secure.php.net/manual/en/control-structures.while.php).

### 8.1 foreach

La oss tenke oss at vi har en liste med tall lagret i et `array`. Vi ønsker å multiplisere hvert enkelt tall med 2, og skrive ut resultatet. Løsningen på problemet kan formuleres slik på norsk: *"for hvert enkelt tall i lista, multiplisere tallet med 2"*. 

I PHP kan vi bruke `foreach` for å løse slike problemer. Nedenfor ser du programkoden som skal til. Eksemplet viser både hvordan vi lar den opprinnelige lista med tall være uforandret, og hvordan vi kan endre på tallene som er lagret i lista.

``` php
<?php
//Vi setter opp en liten tallrekke i et array
$tallrekke = array(1, 2, 3, 4);

//For hvert tall i dette arrayet skal vi gange det aktuelle tallet med 2
foreach($tallrekke as $tall) {
    $tall = $tall * 2;
    echo "Tallet er $tall \n";
}

//Vi har gjennomført multiplikasjonene og skrevet ut resultatene, 
//men det opprinnelige arrayet er uendret.
print_r($tallrekke);

//Nå gjennomfører vi den samme operasjonen, men refererer til den
//opprinnelige variabel i arrayet med tegnet &. Isteden for å opprette
//en ny variabel, har vi nå en referanse rett inn i arrayet vårt.
//Da kan vi endre på verdiene som ligger lagret der.
foreach($tallrekke as &$tall) {
    $tall = $tall * 2;
}
//Når vi er ferdige med operasjonen er det viktig at vi bryter variabelreferansen,
//ellers kan vi risikere å få uønskede verdier inn i arrayet.
unset($tall);

//Hvordan ser arrayet ut nå?
print_r($tallrekke);
?>
```

Vi kan også bruke `foreach` på assosiative tabeller. Det gjøres som vist i eksempelkoden nedenfor.

``` php
$person = array(
        "navn" => "Rune",
        "øyner" => "blå",
        "alder" => 49,
        "vekt" => 84.2,
        "kjønn" => "mann",
        "nerd" => true
    );

foreach($person as $key=>$val) {
  echo "$key har verdien $val \n";
}
```
### 8.2 for

Med `foreach` laget vi en løkke som opererte på en `array`, men vi må ha mulighet til å lage løkker selv om vi ikke har en array å jobbe med. Dersom vi vet hvor mange ganger en løkke skal utføres, kan vi bruke `for`.

I eksemplet nedenfor skal vi gå gjennom en tekststreng tegn for tegn. Aller først må vi finne ut hvor mange tegn det er totalt i tekststrengen. Det gjør vi med funksjonen [strlen](https://secure.php.net/manual/en/function.strlen.php). Vi lager også en indeks-variabel `$i` som starter på 0 og øker med 1 for hver repetisjon. Så lenge denne indeksen er mindre enn antall tegn i strengen, gjentar vi løkka. 

``` php
<?php
$var = 'Hei du';

//Bruker funksjonen strlen() for å finne ut hvor mange tegn det er i strengen.
$antalltegn = strlen($var);

//Vi går steg for steg gjennom strengen med indeksen $i i en for-løkke.
//I linja nedenfor står det:
//    start med at $i har verdien 0, og øk med 1 for hver løkke ($i++)
//    og fortsett så lenge verdien av $i er mindre enn lengden på strengen.
for ($i = 0; $i < $antalltegn; $i++) {
    //Skriver ut gjeldende bokstav i strengen
    echo "Indeks $i : $var[$i] \n";
}
?>
```

### 8.3 while

I tidligere eksempler har vi sett på `for`-løkker. Når du ikke vet hvor lenge du skal holde på i en løkke, kan det være kjekt å bruke `while`. Det er en type løkke som holder det gående så lenge et eller annet kriterium er sant. Som oftest spiller det ingen rolle om du bruker for-løkker eller while-løkker, bruk det som du føler at er mest logisk for deg.

I eksemplet nedenfor lager vi en variabel `$alder` som starter på 12 år. For hver gang vi gjentar løkken med `while`, øker verdien på variablen `$alder` med 1. Vi setter som krituerium for `while`-løkka at den skal fortsette så lenge `$under_18` er sann.

``` php
<?php
$alder = 12;
$under_18 = true;

while($under_18) {
    echo "Alderen er $alder \n";
    //Vi legger til 1 på alderen. Om den fortsatt er mindre enn 18
    //blir uttrykket nedenfor TRUE, større enn eller lik 18 gir FALSE.
    $alder++;
    $under_18 = ($alder < 18); 
}

echo "Nå er alderen $alder!";

//Eksperimenter gjerne med forskjellen på ++$alder og $alder++.
//
//Det finnes også en variant av while som sjekker kriteriet til slutt i løkka,
//og ikke i starten slik som vist over. Varianten skrives slik:
//do {
//    ...;
//} while ($under_18);
?>
```

> ### Oppgaver
>   1. Lag en `array` som inneholder tallene `1, 2, 3, 4, 5, 6, 7, 8, 9, 10`. Lag en løkke som deler hvert enkelt tall i arrayet på 2, og skriv ut resultatet. Bonusoppgave: klarer du å lage kode som skriver ut `partall!` eller `oddetall!` der hvor det passer?
>   2. Lag en teller som startet på tallet 1. Lag en løkke som opphøyer tallet med 2, og skriver ut resultatet. Løkka skal fortsette så lenge resultatet er mindre enn 1000.

## 9. Lese data fra URL (GET)

**Har du sett at URL-er av og til har både `?` og `&` og andre kryptiske tegn i seg? Dette er variabler (med verdier) som sendes fra nettleseren din til tjeneren. Her er et eksempel på en sånn URL:**

`http://www.eksempel.no/minside.php?minvariabel=Hallo%20verden`

Variablene i URL-en starter etter `?`, og `=` brukes for å sette en verdi til en variabel. I eksempelet over brukes også koden `%20` som gir et mellomrom.

På tjeneren må du skrive kode som kan ta imot den informasjonen som sendes via URL-en. Det gjøres med den spesielle PHP-variabelen `$_GET`. Her er et eksempel på hvordan 

``` php
<!DOCTYPE html>
<html lang="no">
  <head>
    <meta charset="utf-8">
    <title>Hente data fra URL med PHP</title>
  </head>
  <body>
    <p>
    <?php
      echo $_GET['minvariabel'];
    ?>
    </p>
  </body>
</html>
```

Du kan sende mer enn en variabel/verdi i URL-en ved å separere med symbolet `&` mellom hver variabel/verdi-par. Her er et litt mer komplisert eksempel:

`http://www.eksempel.no/skrivsetning.php?fornavn=Rune&stilling=lektor&skole=PVS`

For å motta alle disse variablene, kan du bruke denne koden:

``` php
<!DOCTYPE html>
<html lang="no">
  <head>
    <meta charset="utf-8">
    <title>Hente data fra URL med PHP</title>
  </head>
  <body>
    <p>
    Hei <?php echo $_GET['fornavn'] . " du er " . $_GET['stilling'] . " på " . $_GET['skole'];?>.
    </p>
  </body>
</html>
```

For å unngå at programmet vårt stopper med en feil, bør vi alltid teste om en variabel finnes før vi bruker den. Da kan vi bruke funksjonen `isset`. Her er et eksempel på hvordan vi kan bruke denne funksjonen:

``` php
<!DOCTYPE html>
<html lang="no">
  <head>
    <meta charset="utf-8">
    <title>Tester før bruk</title>
  </head>
  <body>
    <p>
    <?php 
      if (isset($_GET['navn'])) {
        echo "Hei " . $_GET['navn'];
      } else {
      	echo "Jeg fikk ikke med meg navnet ditt!";
      }
    ?>
    </p>
  </body>
</html>
```


> ### Oppgaver
>   1. Lag en nettside som henter to tall fra URL-en og multipliserer dem. Du skal gå inn på siden med denne URL-en (bytt ut www.eksempel.no): `http://www.eksempel.no/multipliser.php?tall1=5&tall2=7`. Resultatet av multiplikasjonen skal vises på nettsiden. Bruk eksemplene over som utgangspunkt for nettsiden din.
>   2. Forbedre programmet du laget i 1. ved å teste om `tall1` og `tall2` finnes før du multipliserer dem sammen.


## 10. Lese data fra HTML-skjemaer (POST)

**Et HTML-skjema på en web-side gir brukeren mulighet til å legge inn informasjon som kan sendes til en tjener for prosessering. Her skal vi se på hvordan du kan lage et slikt skjema, og hvordan du mottar dataene på tjeneren.**

HTML-skjemaer lages med taggen `<form>`, som inneholder en eller flere `<input>`-elementer. Vi skal lage siden `skjemaside.html` som inneholder et felt hvor brukeren kan taste inn tekst, og en knapp som brukeren kan trykke for å sende skjemainnholdet til tjeneren. 

Vi må også sette en parameter `action` i taggen `<form>`. Denne forteller tjeneren hva den skal gjøre når vi trykker på knappen for å sende skjemainnholdet. I dette tilfellet velger vi at siden `mottaksside.php` skal åpnes når brukeren trykker på knappen.

Det er viktig å sette et navn på alle `<input>`-elementene hvor brukeren legger inn data. Dette er variabelnavnene vi får når dataene sendes til tjeneren. Det brukeren har lagt inn i `<input>`-elementene blir verdien til variablene. 

Legg også merke til at `<input>`-elementene kan være av [ulike typer](https://www.w3schools.com/html/html_form_input_types.asp). Her velger vi typen `text`.

```HTML
<!DOCTYPE html>
<html lang="no">
  <head>
    <meta charset="utf-8">
    <title>Testside med HTML-skjema</title>
  </head>
  <body>
    <p>
    <form action="mottaksside.php" method="post">
      <input type="text" name="variabel">
      <input type="submit" value="Send">
    </form>
    </p>
  </body>
</html>
```

Nå må vi lage siden `mottaksside.php` som skal kjøres når brukeren trykker på knappen for å sende innholdet fra skjemaet på siden `skjemaside.html`. Innholdet i skjemaet blir lagt inn i den spesielle PHP-variabelen `$_POST`. Dette er en array, og du må bruke navnet du ga hver enkelt `<input>`-element for å hente ut innholdet.

``` php
<!DOCTYPE html>
<html lang="no">
  <head>
    <meta charset="utf-8">
    <title>Hente data fra URL med PHP</title>
  </head>
  <body>
    <p>
    <?php
      echo $_POST['variabel'];
    ?>
    </p>
  </body>
</html>
```

> ### Oppgaver
>   1. Utvid eksemplet ovenfor ved å lage et skjema hvor brukeren taster inn fornavn og etternavn. Oppdater mottakssiden slik at den skriver ut "Hei FORNAVN ETTERNAVN".
>   2. Det er mulig å sette opp et skjema slik at både skjemaet og mottaksfila er en og samme fil. Gjør om løsningen din fra forrige oppgave slik at du ikke trenger to filer. Husk å gi filen din filetternavnet `.php`. Du bør også bruke funksjonen [isset](https://secure.php.net/manual/en/function.isset.php) for å sjekke om de ulike `$_POST`-variablene eksisterer før du prøver å bruke dem.

## 11. Lagre data fra side til side (SESSION)

**Med `$_GET` og `$_POST` er det mulig å sende data fra en nettside til en annen, men du kan ikke lagre og behandle data på tvers av flere sider. For å løse dette problemet, kan du bruke variablen `$_SESSION` med de tilhørende funksjonene.**

Sesjonsvariabler brukes for eksempel for å "huske" om en bruker er pålogget eller ikke. Her er et enkelt eksempel hvor brukeren må taste inn riktig kodeord for å få tilgang. Når brukeren først har tastet inn riktig kodeord, vil dette bli husket for resten av sesjonen.

``` php
<?php
// Starter ny sesjonen eller fortsetter eksisterende sesjon
session_start();

// Kodeord som brukeren må taste inn riktig
$kodeord = "superhemmelig";

//Her legger vi inn det som skal vises på siden
$sidetekst = ""; 

// Funksjon som lager skjema for å taste inn kodeordet
function kodeordskjema() {
    $skjema = "<form action=\"kodeord.php\" method=\"post\">";
    $skjema .= "<input type=\"text\" name=\"brukerens_kodeord\">";
    $skjema .= "<input type=\"submit\" value=\"Send\">";
    $skjema .= "</form>";
    return $skjema;
}

// Nå tester vi vilken tilstand vi er i.
if (isset($_SESSION['kodeord_ok']) && $_SESSION['kodeord_ok'] == true) {
    // Brukeren har tastet inn et kodeord, og vi har sjekket at det er riktig.
    $sidetekst = "<p>Har tastet inn riktig kodeord for lenge siden.</p>";
} elseif (isset($_POST['brukerens_kodeord'])) {
    // Brukeren har tastet inn et kodeord, men vi har ikke sjekket det ennå.
    if ($_POST['brukerens_kodeord'] == $kodeord) {
        // Kodeordet er riktig,
        $_SESSION['kodeord_ok'] = true;
        $sidetekst = "<p>Du har tastet inn riktig kodeord. Veldig bra!</p>";
    } else {
        // Kodeordet er feil.
        $_SESSION['kodeord_ok'] = false;
        $sidetekst = "<p>Du har tastet inn <strong>FEIL</strong> kodeord.</p>";
        // Lager skjema for inntasting av kodeord.
        $sidetekst .= kodeordskjema();
    }
} else {
    // Brukeren har ikke tastet inn noe kodeord ennå.
    $sidetekst = "<p>Du har <strong>IKKE</strong> tastet inn riktig kodeord ennå.</p>";
    // Lager skjema for inntasting av kodeord.
    $sidetekst .= kodeordskjema();
}

?>
<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <title>Tester sesjon</title>
</head>
<body>
<?php
echo $sidetekst;
?>
</body>
</html>
```

## 12. Lagre data fra besøk til besøk (COOKIE)

**TODO**


## 13. Vanlige brukerfeil i PHP

**Når du programmerer i PHP vil det alltid dukke opp en del feil og problemer underveis. En valig arbeidsgang er å skrive litt kode, teste om alt fungerer, rette opp i feil som dukker opp og fortsette videre. Her er noen vanlige feil som jeg gjør og som du sikkert også kommer til å gjøre.**

* Skrivefeil: `ecco / echo`
* Manglende semikolon på slutten av en linje `;`
* Manglende lukkeklamme: `)]}`
* Manglende lukkeanførselstegn: `' "`
* Store og små bokstaver i variabelnavn: `$minvariabel / $minVariabel`
* Sammenblanding av tilordning `=` og sammenlikning `==`

To nyttige funksjoner for å lete etter feil i PHP-kode er `var_dump` og `debug_backtrace`. Her er et eksempel på bruk av `var_dump`. Med denne funksjonen ser du hvilken verdi variablen din har, og hvilken datatype den har.


``` php
<!DOCTYPE html>
<html lang="no">
  <head>
    <meta charset="utf-8">
    <title>Bruk av var_dump()</title>
  </head>
  <body>
    <p>
    <?php
      $var1 = 123;
      $var2 = "123";
      $var3 = 123.456
      $var4 = true;
      $var5 = array($var1, $var2, $var3, $var4);
      echo var_dump($var1);
      echo var_dump($var2);
      echo var_dump($var3);
      echo var_dump($var4);
      echo var_dump($var5);
    ?>
    </p>
  </body>
</html>
```

Med funksjonen `debug_backtrace` kan du se på all informasjon som leder fram til et spesifikt punkt i koden din. I eksemplet nedenfor brukes `debug_backtrace` for å få informasjon om hva som skjer i funksjonen `pluss`.

``` php
<!DOCTYPE html>
<html lang="no">
  <head>
    <meta charset="utf-8">
    <title>Bruk av debug_backtrace()</title>
  </head>
  <body>
    <p>
    <?php
      function pluss($a, $b) {
        var_dump(debug_backtrace());
        return $a + $b;
      }

      echo "Tre pluss fire er lik " . pluss(3, 4);
    ?>
    </p>
  </body>
</html>
```

Se også [PHP-manualen](https://secure.php.net/manual/en/) for hjelp til hvordan du bruker PHP.


## 14. Dynamiske nettsider med SQL og PHP

**TODO**

Forutsetter grunnleggende kunnskap om HTML


### 14.1 Koble til en SQL-database med PHP

**TODO**

Interaksjonen mellom PHP og databasesystemet:
 1. Opprette databaseforbindelsen
 2. Kjøre SQL-spørringen
 3. Bruke dataene som ble returnert fra spørringen
 4. Frigjøre dataene som ble returnert fra spørringen
 5. Lukke databaseforbindelsen

#### 14.1.1 MySQL

``` php
<?php
$dbhost = 'localhost';
$dbuser = 'brukernavn';
$dbpass = 'hemmeligPassord';
$dbname = 'testdatabase';
//Vi forsøker først å opprette forbindelsen med databasen (punkt 1.)
$dbconnection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//Vi sjekker om forbindelsen ble opprettet
if (mysqli_connect_errno()) {
    die('Kunne ikke opprette forbindelse med databasen: ' . mysqli_connect_error()) ;
}
//Vi gjør det vi skal i databasen (punkt 2. 3. og 4.) og lukker forbindelsen (punkt 5.)
mysqli_close($dbconnection);
?>
```

#### 14.1.2 SQLite

TODO: forklare objektorientering (veldig kort)

``` php
<?php
try {
    //Om noe går galt når vi oppretter forbindelsen, hopper programmet til catch()
    $dbconnection = new PDO('sqlite:testdatabase.sqlite'); 
	//Har vi kommet hit er forbindelsen opprettet. Vi gjør det vi skal, og lukker forbindelsen igjen.
	$dbconnection = NULL;
} catch (PDOException $error) {
    echo 'Kunne ikke opprette forbindelse med databasen: ' . $error->getMessage();
}
?>
```


