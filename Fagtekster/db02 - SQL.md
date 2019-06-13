db02 - SQL
==========
**SQL (Structured Query Language) er et programmeringsspråk som er laget spesielt for å håndtere data som er lagret i et relasjonsdatabasesystem. Språket ble utviklet av IBM tidlig på 1970-tallet, og det ble en internasjonal standard siden 1986. Men selv om SQL er standardisert finnes det i mange ulike dialekter og varianter. Eksempler på relasjonsdatabasesystemer som alle har sine egne variasjoner av SQL er Oracle RDBMS, MySQL, PostgreSQL, Microsoft SQL Server og SQLite.**

![Edgar F. Codd, mannen som oppfant relasjonsmodellen - den teoretiske basisen for relasjonsdatabaser. Foto: &copy; IBM](https://upload.wikimedia.org/wikipedia/en/5/58/Edgar_F_Codd.jpg)<br/>
*Edgar F. Codd, mannen som oppfant relasjonsmodellen - den teoretiske basisen for relasjonsdatabaser. Foto: &copy; IBM*

## SQL-språket

SQL-språket kan deles inn i tre hovedkategorier:
 * DDL (Data Definition Language) som brukes for å definere databasestrukturer, for eksempel opprette databaser eller tabeller.
 * DML (Data Manipulation Language) som brukes for å opprette, velge ut, oppdatere og slette data i en database.
 * DCL (Data Control Language) som brukes for kontrolloperasjoner, for eksempel gi en bruker tilgang til en tabell i en database.
 
## En oversikt over SQL-syntaksen

**SQL er et standardisert språk for å beskrive relasjonsdatabaser og spørringer. Standarden ble formalisert av American National Standards Institute (ANSI) i 1986, og revidert i 1989 og 1992. SQL 92 ble formelt vedtatt av International Organization for Standards (ISO) som ISO 9075.**

Siden 1992 har ISO oppdatert standarden flere ganger, og den nåværende versjonen er SQL 2011. Historien om databaser er lang og kompleks. Mange av de mest kjente SQL-systemene ble til før det fantes noen standard, og nyere databasesystemer kan ha arvet kode fra eldre systemer. For at gamle databaser fortsatt skal fungere, må databasesystemene dra med seg mange eldre varianter av SQL. Dermed har det oppstått mange dialekter og varianter av språket.

Hva betyr dette for deg? Du må være klar over at uansett hva slags variant av SQL du skriver vil det vanligvis være noen noen leverandørspesifikke ting du må ta hensyn til, og du må være forberedt på å gjøre noen endringer for at det skal fungere på et annet system. I dette kurset skal du lære om de kjernefunksjonene i SQL som støttes av alle de store databasesystemer. Når det er sagt, er det viktig å forstå at mange detaljer varierer fra system til system.

Et SQL-setning begynner med et nøkkelord og avsluttes med et semikolon. Her er en setning som henter ut alt innholdet i en tabell:

``` sql
SELECT * FROM tabell;
```

Et nøkkelord er et reservert ord som har en spesiell betydning i et programmeringsspråk. At de er reserverte betyr for eksempel at du ikke kan bruke disse nøkkelordene som navn på tabeller eller eller kolonner. I SQL-setningen ovenfor er `SELECT` og `FROM` nøkkelord.

<div class="note warning">
  <h5>Skrivefeil</h5>
  <p>Vær obs på at dersom du skriver nøkkelordene feil, for eksempel `SELEKT` istedenfor `SELECT`, vil det være katastrofalt for programmet ditt. Det er ikke rom for noen skrivefeil i koden.</p>
</div>

SQL skiller ikke mellom store og små bokstaver i nøkkelordene, så dette er akkurat det samme som forrige eksempel:

``` sql
select * from tabell;
```

I dette kurset vil allikevel alle SQL-nøkkelord bli skrevet med store bokstaver, selv om dette altså ikke er nødvendig. Med store bokstaver blir det enklere for deg å se hva som er SQL-nøkkelord og hva som er andre ting i koden.

Kommentarer i SQL kan skrives inn etter to bindestreker og et mellomrom:

``` sql
SELECT * FROM tabell; -- Dette er en kommentar.
```

Et SQL-uttrykk kan ha ett eller flere betingelser som må oppfylles for hver rad som velges. La oss si at vi skal finne ingredienser og mengder som inngår når vi skal lage menyen `Superburger`. Vi finner det slik:

``` sql
SELECT * FROM Oppskrift WHERE Menynavn = 'Superburger';
```

Her har vi to betingelser. Først sier vi at vi skal hente rader fra tabellen Oppskrift (en FROM-betingelse), men i tillegg krever vi at det kun skal hentes ut rader som gjelder for menyen `Superburger` (en WHERE-betingelse). Legg også merke til at tekststrenger i SQL skrives mellom apostrofer (').

Vi kan også bruke logiske uttrykk i SQL, for eksempel når vi vil finne de varene vi har færre enn 100 igjen av i lagerbeholdningen vår:

``` sql
SELECT * FROM Lagerbeholdning WHERE Beholdning < 100;
```

Vi kan også ordne resultatene etter ulike kriterier. La oss si at vi vil se alle varer hvor det er færre enn 100 igjen, og vi vil ha lista alfabetisert på varenavnet:

``` sql
SELECT * FROM Lagerbeholdning WHERE Antall < 100 ORDER BY Varenavn;
```

SQL-strukturen er enkel, men uttrykkene vi kan sette opp kan være veldig komplekse og gjøre avanserte operasjoner i databasen. I dette kurset skal vi holde uttrykkene på et forholdsvis enkelt nivå.

## Opprette og slette tabeller

**Her skal vi se på hvordan vi oppretter og sletter tabeller i en SQL-database.**

Nå skal vi opprette en tabell hvor vi skal holde rede på lagerbeholdningen av råvarer i en hurtigmat-restaurant. Tabellen skal ha to kolonner, en for varenavnet og en for antallet vi har igjen av den aktuelle råvaren. Vi setter opp tabellen med denne SQL-setningen i SQLite:

``` sql
CREATE TABLE Lagerbeholdning (
  Varenavn CHAR(255) PRIMARY KEY,
  Beholdning INTEGER
);
```

I MySQL gjøres det slik:

``` sql
CREATE TABLE Lagerbeholdning (
  Varenavn CHAR(255),
  Beholdning INTEGER,
  PRIMARY KEY (Varenavn)
);
```

Her sier vi at vi skal opprette tabellen `Lagerbeholdning`, og det som står mellom parantesene () er kolonnenavnene og datatypen til hver enkelt kolonne. Vi bruker et komma for å skille mellom kolonnene, men det skal ikke være noe komma etter den siste kolonnedefinisjonen.

<div class="note warning">
  <h5>Tabellnavn kan ikke ha mellomrom</h5>
  <p>Husk at tabellnavn og kolonnenavn ikke kan inneholde mellomrom. Bruk `_` som ordskille dersom du bruker navn som inneholder flere ord. Eksempel: `mitt_veldig_lange_tabellnavn`.</p>
</div>

Det er en del viktige ting å tenke gjennom når du oppretter en tabell, og en av disse tingene er hvilken datatype hver enkelt kolonne skal ha. Her er det en del variasjon mellom ulike databasesystemer, så det er viktig at du leser gjennom dokumentasjonen for databasesystemet du bruker. Finn den datatypen som passer best, og vær sikker på at du forstår hva den innebærer.

Vi ønsker at kolonna `Varenavn` i vår tabell skal være en samling med tegn (CHAR eller CHARACTER), men begrenset oppad til maks 255 tegn.

I tabeller ønsker vi som oftest også å ha en kolonne med innhold som unikt identifiserer hver enkelt rad. Dette kalles for en primærnøkkel, og vi skal se nærmere på både primærnøkler og andre nøkler senere. I vår tabell velger vi at kolonna `Varenavn` er en primærnøkkel.

En av konsekvensene av at vi velger `Varenavn` som primærnøkkel er at vi ikke kan ha to varer med identiske navn. Hver enkelt vare i tabellen må ha et navn som unikt identifiserer varen. Senere skal vi også se på hva vi kan gjøre for å slippe å sjekke at alle varenavnene er unike.

Om du ikke trenger tabellen lenger, kan du slette den. Vær helt sikker på hva du gjør, for her har du ingen angremuligheter. Slik sletter du hele tabellen:

``` sql
DROP TABLE Lagerbeholdning;
```

**TODO** Forklare ALTER

## Legge inn og slette rader i en tabell

**Nå skal vi se på hvordan vi kan legge inn nye rader i en tabell, og hvordan vi kan slette rader.**

La oss fylle tabellen `Lagerbeholdning` med litt innhold:

``` sql
INSERT INTO Lagerbeholdning VALUES ('Salatblader Crispi', 8376);
INSERT INTO Lagerbeholdning VALUES ('Grove burgerbrød Bakerverkstedet', 344);
INSERT INTO Lagerbeholdning VALUES ('Ketchup-poser Edda', 540);
```

La oss si at vi tar ut en ketchup-pose fra lageret. Da må vi oppdatere lagerbeholdningen, antall ketchup-poser må reduseres med en. Det kan vi gjøre slik:

``` sql
UPDATE Lagerbeholdning SET Beholdning = Beholdning - 1 WHERE Varenavn = 'Ketchup-poser Edda';
```

Vi kan også slette rader i tabellen:

``` sql
DELETE FROM Lagerbeholdning WHERE Varenavn = 'Salatblader Crispi';
```
Her sletter vi kun den raden i tabellen som har varenavnet `Salatblader Crispi`, alle rader som har et annet varenavn er ikke berørt.

**TODO** Velge fra en tabell og sette inn i en annen:

``` sql
INSERT INTO Superburgersalg (Antall, Dato) SELECT Salg (Antall, Dato) WHERE Menynavn = 'Superburger';
```

**TODO** Forklare NULL

## Verdien NULL

**TODO**

NULL er ikke 0.

## Tabellnøkler

**I Norge er det 730 menn som heter Jan Johansen. Dersom vi lager et databasesystem for å holde oversikt over personer, hvordan skal vi skille alle disse Jan Johansen-ene fra hverandre?**

Vi trenger et eller annet som er unikt for hver enkelt person, og en vanlig måte å gjøre dette på er å dele ut unike personnummer til hvert enkelt individ. Det er én og bare én person som kan ha et gitt personnummer. Dersom vi søker etter individet med personnummeret 123456 78901 vet vi at det bare kan være én enkelt person.

I tabellene i en SQL-database ønsker vi ofte at verdiene i minst en kolonne i tabellen er unik for hver enkelt rad. En tabell med personinformasjon kan for eksempel se slik ut:

| Personnummer      | Fornavn  | Etternavn
| ----------------- |--------- | ---------
| 123456 78901      | Jan      | Johansen
| 345678 90123      | Jan      | Johansen
| 567890 12345      | Jan      | Johansen
| 789012 34567      | Jan      | Johansen
| 901234 56789      | Jan      | Johansen

Vi kaller kolonner som har unike verdier for en nøkkel. Noen ganger kan en tabell ha mer enn en kolonne med unike verdier. Vi sier da at vi har flere **kandidatnøkler**, de er kandidater til å bli en **primærnøkkel** i tabellen.
    
 Ofte er det sånn at vi ikke har noen kolonne som naturlig kan brukes som primærnøkkel, fordi vi ikke er sikre på at verdiene i kolonna alltid vil være unike for hver enkelt rad i tabellen. Da er det vanlig å lage en kolonne som inneholder heltallverdier, hvor vi sørger for at vi aldri bruker samme heltall flere ganger. Ofte kalles slike kolonner for `ID` eller noe liknende.
 
 Vi henter fram lagerbeholdningstabellen fra hurtigmatrestauranten vår igjen:
 
| Varenavn               | Beholdning |
| ---------------------- |----------: |
| Hamburger 150 g        | 90         |
| Hamburger 200 g        | 447        |
| Tomatskiver            | 1232       |
| Sylteagurkskiver       | 987        |
| Cheddarostskiver       | 376        |
| Jarlsbergostskiver     | 83         |
| Burgerbrød             | 1995       |

Når vi laget denne tabellen gikk vi ut ifra at varenavnet alltid ville være unikt, men er det lurt å anta dette? Kanskje bytter vi leverandør av 150 grams hamburgere en gang i framtida, og ønsker å skille gamle og nye varer fra hverandre? Det kan i alle fall være lurt å ta høyde for endringer i framtida, så derfor legger vi inn en ny ID-kolonne i tabellen vår som er unik for hver enkelt vare i tabellen:
  
VareID | Varenavn               | Beholdning |
-----: | ---------------------- |----------: |
1      | Hamburger 150 g        | 90         |
2      | Hamburger 200 g        | 447        |
3      | Tomatskiver            | 1232       |
4      | Sylteagurkskiver       | 987        |
5      | Cheddarostskiver       | 376        |
6      | Jarlsbergostskiver     | 83         |
7      | Burgerbrød             | 1995       |

Nå ser det kanskje ut som om vi bare har laget radnummer i tabellen vår, slik vi for eksempel har i regneark. Sånn er det ikke i SQL. I en SQL-tabell har ikke radene noen spesiell rekkefølge, så vi kan ikke be om å få en spesiell rad i tabellen. Ønsker vi å referere til en spesiell rad i tabellen må vi selv sørge for å lage en primærnøkkel i tabellen.

Ulike SQL-systemer har forskjellige måter å opprette primærnøkler på, så du må alltid sjekke i dokumentasjonen for systemet du jobber med for å finne ut hvordan det skal gjøres. Her kan du se hvordan det gjøres i MySQL og i SQLite:

**MySQL**

``` sql
CREATE TABLE Lagerbeholdning (
  VareID INTEGER NOT NULL AUTO_INCREMENT,
  Varenavn CHAR(255),
  Beholdning INTEGER,
  PRIMARY KEY(VareID)
);
```

**SQLite**

``` sql
CREATE TABLE Lagerbeholdning (
  VareID INTEGER PRIMARY KEY,
  Varenavn CHAR(255),
  Beholdning INTEGER
);
```

Når vi har laget denne tabellen trenger vi ikke å lage noen verdi for `VareID` selv, det gjøres helt automatisk. Vi kan sette inn nye rader i tabellen slik:

``` sql
INSERT INTO Lagerbeholdning (Varenavn, Beholdning) VALUES ('Jalapeño', 1500);
INSERT INTO Lagerbeholdning (Varenavn, Beholdning) VALUES ('Løkringer', 2930);
```


## Filtrering av data med WHERE, LIKE og IN

**Når du henter data fra en SQL-tabell vil du som oftest ikke ha hele tabellen, du vil bare hente ut det som stemmer med noen gitte kriterier. For å angi kriteriene bruker du nøkkelordet `WHERE` etterfulgt av kriteriene dine.**

``` sql
SELECT * FROM Lagerbeholdning WHERE Beholdning < 100;
```

``` sql
SELECT * FROM Lagerbeholdning WHERE Varenavn LIKE '%skive%';
```

``` sql
SELECT * FROM Lagerbeholdning WHERE Varenavn LIKE '%skive%' ORDER BY Beholdning;
```

``` sql
SELECT * FROM Lagerbeholdning WHERE Beholdning < 100 AND Varenavn LIKE '%skive%' ORDER BY Beholdning DESC;
```

``` sql
SELECT * FROM Lagerbeholdning WHERE Varenavn IN ('Cheddarostskiver', 'Jarlsbergostskiver');
```

## Fjerne duplikater med SELECT DISTINCT

**TODO**

Fjerne duplikater

## Relasjoner

**Nå skal vi gå litt grundigere til verks når vi planlegger databasen til hurtigmatrestauranten.**

Tidligere har vi sett at vi kan sette opp en tabell for oppskrifter til hurtigmatrestauranten på denne måten:

| Menynavn          | Ingrediens         | Antall |
| ----------------- |------------------- | -----: |
| Superburger       | Hamburger 150      | 1      |
| Superburger       | Tomatskiver        | 2      |
| Superburger       | Sylteagurkskiver   | 1      |
| Superburger       | Burgerbrød         | 1      |
| Cheeseburger      | Hamburger 200 g    | 1      |
| Cheeseburger      | Cheddarostskiver   | 2      |
| Cheeseburger      | Burgerbrød         | 1      |
| Veggis            | Tomatskiver        | 4      |
| Veggis            | Jarlsbergostskiver | 1      |
| Veggis            | Burgerbrød         | 1      |

Dersom vi for eksempel vil ha oppskriften for Cheeseburger, kan vi spørre slik:

``` sql
SELECT * FROM Oppskrift WHERE Menynavn = 'CheeseBurger';
```

Dette ville fungert, men det kan lett oppstå problemer. Hva om vi for eksempel ved en feil la inn en rader i tabellen som er identiske med rader som er der fra før?

| Menynavn          | Ingrediens         | Antall |
| ----------------- |------------------- | -----: |
| Superburger       | Hamburger 150      | 1      |
| Superburger       | Tomatskiver        | 2      |
| Superburger       | Sylteagurkskiver   | 1      |
| Superburger       | Burgerbrød         | 1      |
| Cheeseburger      | Hamburger 200 g    | 1      |
| Cheeseburger      | Cheddarostskiver   | 2      |
| Cheeseburger      | Burgerbrød         | 1      |
| Veggis            | Tomatskiver        | 4      |
| Veggis            | Jarlsbergostskiver | 1      |
| Veggis            | Burgerbrød         | 1      |
| Cheeseburger      | Hamburger 200 g    | 1      |
| Cheeseburger      | Cheddarostskiver   | 2      |
| Cheeseburger      | Burgerbrød         | 1      |

Kjører vi spørringen på nytt, får vi nå dobbelt opp av alle ingrediensene for Cheeseburger. Vi må slette de radene som ble lagt inn ved en feil, men hvordan gjør vi det? Vi har ikke noe som unikt identifiserer hver rad i tabellen vår, og det er dermed ikke mulig å bare slette de tre radene som står nederst.

Vi må innføre en kolonne med verdier som vi er sikre på at alltid er unike. Vi lager kolonna `OppskriftID` som består av positive heltall (INTEGER), og sørger for at databasesystemet alltid sørger for å sette inn et unikt tall i denne kolonna for hver enkelt rad. Nå ser tabellen vår slik ut:

|OppskriftID | Menynavn          | Ingrediens         | Antall |
|----------: | ----------------- |------------------- | -----: |
|1           | Superburger       | Hamburger 150      | 1      |
|2           | Superburger       | Tomatskiver        | 2      |
|3           | Superburger       | Sylteagurkskiver   | 1      |
|4           | Superburger       | Burgerbrød         | 1      |
|5           | Cheeseburger      | Hamburger 200 g    | 1      |
|6           | Cheeseburger      | Cheddarostskiver   | 2      |
|7           | Cheeseburger      | Burgerbrød         | 1      |
|8           | Veggis            | Tomatskiver        | 4      |
|9           | Veggis            | Jarlsbergostskiver | 1      |
|10          | Veggis            | Burgerbrød         | 1      |

Den nye kolonna med ID-er gjør vi til en primærnøkkel for tabellen. Vi gjør tilsvarende for alle de andre tabellene i hurtigmatrestaurantdatabasen vår. Nå kan vi bruke ID-kolonnene vi har laget i alle tabellene som referanser når vi skal henvise fra en tabell til noe som ligger i en annen tabell.

|OppskriftID | MenyID | VareID | Antall |
|----------: | -----: |------: | -----: |
|1           | 1      | 1      | 1      |
|2           | 1      | 3      | 2      |
|3           | 1      | 4      | 1      |
|4           | 1      | 7      | 1      |
|5           | 2      | 2      | 1      |
|6           | 2      | 5      | 2      |
|7           | 2      | 7      | 1      |
|8           | 3      | 3      | 4      |
|9           | 3      | 6      | 1      |
|10          | 3      | 7      | 1      |


Tilsvarende ser nå menytabellen slik ut:

|MenyID | Menynavn          | Pris  |
|-----: | ----------------- |-----: |
|1      | Superburger       | 89    |
|2      | Cheeseburger      | 99    |
|3      | Veggis            | 49    |

Lagerbeholdningtabellen ser slik ut:

|VareID | Varenavn               | Beholdning |
|-----: | ---------------------- |----------: |
|1      | Hamburger 150 g        | 90         |
|2      | Hamburger 200 g        | 447        |
|3      | Tomatskiver            | 1232       |
|4      | Sylteagurkskiver       | 987        |
|5      | Cheddarostskiver       | 376        |
|6      | Jarlsbergostskiver     | 83         |
|7      | Burgerbrød             | 1995       | 

Slik setter vi opp tabellene våre i SQLite:

``` sql
CREATE TABLE Lagerbeholdning (
  VareID INTEGER PRIMARY KEY,
  Varenavn CHAR(255),
  Beholdning INTEGER
);

CREATE TABLE Meny (
  MenyID INTEGER PRIMARY KEY,
  Menynavn CHAR(255),
  Pris FLOAT
);

CREATE TABLE Oppskrift (
  OppskriftID INTEGER PRIMARY KEY,
  MenyID INTEGER,
  VareID INTEGER,
  Antall INTEGER
);

CREATE TABLE Salg (
  SalgID INTEGER PRIMARY KEY,
  MenyID INTEGER,
  Antall INTEGER,
  Sum FLOAT,
  Dato TIMESTAMP
);
```

I MySQL setter vi opp tabellene slik:

``` sql
CREATE TABLE Lagerbeholdning (
  VareID INTEGER,
  Varenavn CHAR(255),
  Beholdning INTEGER,
  PRIMARY KEY (VareID)
);

CREATE TABLE Meny (
  MenyID INTEGER,
  Menynavn CHAR(255),
  Pris FLOAT,
  PRIMARY KEY (MenyID)
);

CREATE TABLE Oppskrift (
  OppskriftID INTEGER,
  MenyID INTEGER,
  VareID INTEGER,
  Antall INTEGER,
  PRIMARY KEY (OppskriftID)
);

CREATE TABLE Salg (
  SalgID INTEGER,
  MenyID INTEGER,
  Antall INTEGER,
  Sum FLOAT,
  Dato TIMESTAMP,
  PRIMARY KEY (SalgID)
);
```

## JOIN

**TODO**

TODO

## TRANSACTION

**I databaser er det ofte nødvendig at vi er helt sikre på at flere verdier oppdateres samtidig. Da kan vi bruke funksjonen `TRANSACTION`.**

Når vi gjør et salg i hurtigmatrestauranten registrerer vi det i tabellen Salg. Samtidig er det viktig at vi oppdaterer Lagerbeholdningen. Om bare én av disse tabellene blir oppdatert, vil vi få et avvik mellom varebeholdningen og hva vi faktisk har solgt. 

``` sql
BEGIN TRANSACTION;
  INSERT INTO Salg (MenyID, Antall, Sum, Dato) VALUES (1, 1, 89, DATETIME('now'));
  UPDATE Lagerbeholdning SET Beholdning = (Beholdning - 1) WHERE VareID = 1;
END TRANSACTION;
```

