McBergbys del 8X: Mobiltilpassede nettsider
===========================================
**McBerbys forskningsavdeling, eller avdeling X, har nylig blitt oppretta. De skal jobbe med løsninger for framtida, for eksempel utkjøring av bestillinger med [autonome kjøretøy](https://en.wikipedia.org/wiki/Autonomous_car) og betaling med [kryptovaluta](https://en.wikipedia.org/wiki/Cryptocurrency). Du har lyst på en jobb i den avdelinga, og for å vise hva du kan skal du mobiltilpasse McBergbys-nettsidene med biblioteket [Bootstrap](https://getbootstrap.com/).**

Oppgave
-------
Kopier de tre sidene du har laget fra før (i oppgavedelene fra 1 til 8) over i et nytt prosjekt. Ta også med alle mapper som inneholder bilder, videoer og stilark. Du skal legge inn Bootstrap i alle html-filene.

For å legge inn støtte for Bootstrap må du følge anvisningene som er gitt i [dokumentasjonen til Bootstrap](https://getbootstrap.com/docs/4.1/getting-started/introduction/#starter-template). Legg merke til at du må legge inn litt kode i `<head>...</head>` i html-filene dine, og tre nye `<script>`-elementer rett før `</body>` (i slutten av HTML-fila).

Når du har lagt inn støtte for Bootstrap kan du lese videre i [dokumentasjonen der](https://getbootstrap.com/docs/4.1/layout/overview/), og du kan se på [eksempler på bruk](https://getbootstrap.com/docs/4.1/examples/). Prøv deg fram, og se hva du kan få til med McBergbys-sidene. 

Du finner et litt avansert eksempel på hvordan du kan lage <a href="https://github.com/fagstoff/IT1/blob/master/Oppgaver/%40L%C3%B8sningsforslag/mcbergbys/08x/bootstrap_navbar_demo.html">en navigasjonsmeny på denne siden</a>. Alle CSS-klassene som brukes i eksemplet er Bootstrap-klasser. 

Du kan også bruke Bootstrap til å skalere bilder og videoer automatisk, avhengig av brukerens skjermbredde. Her er et eksempel på hvordan YouTube-videoen på hamburgerskolesiden kan skaleres:

``` html 
<div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/lz0IT4Uk2xQ?rel=0&amp;showinfo=0;start=17"
    allowfullscreen></iframe>
</div>
```



Ressurser
---------
* Du trenger en teksteditor og en nettleser til denne oppgaven. 
* Du må legge inn Bootstrap-støtte i henhold til anvisningene ovenfor.

Vurderingskriterier
-------------------
* Navigasjonsmeny på alle sidene som gjør det enkelt for besøkende å gå til ønsket side.
* Alle sidene skal fungere godt på en smal skjerm.
* HTML-siden skal validere uten feil og advarsler på [validator.w3.org](https://validator.w3.org/).
* Siden skal være utformet i henhold til kravene om universell utforming, så lang det er mulig.

Kompetansemål
-------------
* redigere nettsteder ved bruk av standardiserte oppmerkingsspråk
* utvikle nettsteder i henhold til planer og vurdere om krav til brukergrensesnitt er oppfylt

>Denne oppgaven er laget av [bitjungle](https://github.com/bitjungle).  
>Oppgaven er lisensiert under en
>[Creative Commons Navngivelse-DelPåSammeVilkår 4.0 Internasjonal lisens.
](http://creativecommons.org/licenses/by-sa/4.0/)
