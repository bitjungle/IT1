db01 - Hva er en database?
==========================
**En database er en organisert samling av data, for eksempel tabeller, spørringer og rapporter.**

## Databasesystemer

Det finnes flere ulike databasebasesystemer, men den mest brukte typen i dag er det som kalles for en relasjonsdatabase. I en relasjonsdatabase er dataene organisert i tabeller, og det kan lages sammenkoblinger mellom tabellene i databasen.

## Eksempel

Tenk deg at vi har en database som holder rede på lagerbeholdning, menyer, oppskrifter og salg i en hurtigmatrestaurant. I databasen har vi fire tabeller:

**Tabell: Lagerbeholdning**

| Varenavn               | Beholdning |
| ---------------------- |----------: |
| Hamburger 150 g        | 90         |
| Hamburger 200 g        | 447        |
| Tomatskiver            | 1232       |
| Sylteagurkskiver       | 987        |
| Cheddarostskiver       | 376        |
| Jarlsbergostskiver     | 83         |
| Burgerbrød             | 1995       | 

**Tabell: Meny**

| Menynavn          | Pris  |
| ----------------- |-----: |
| Superburger       | 89    |
| Cheeseburger      | 99    |
| Veggis            | 49    |

**Tabell: Oppskrift**

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

**Tabell: Salg**

| Menynavn         | Antall | Sum  | Dato             |
| ---------------- | -----: | ---: | ---------------- |
| Superburger      | 2      | 178  | 2015-06-26 13:04 |
| Veggis           | 2      |  98  | 2015-06-26 13:07 |
| Superburger      | 1      |  89  | 2015-06-26 13:11 |
| Cheeseburger     | 3      | 297  | 2015-06-26 13:13 |


TODO: Si noe om rader og kolonner. Antyde noe om sammenkobling av tabeller.

