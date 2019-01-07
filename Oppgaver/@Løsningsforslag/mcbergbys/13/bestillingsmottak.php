<?php
//Før vi gir brukeren en bestillingsbekreftelse og lagrer bestillingen 
//i en database, må vi sjekke om vi har fått all nødvendig informasjon.
//Vi sier at vi "validerer" informasjonen som brukeren sender fra skjemaet.
//Foreløpig velger vi å bare sjekke brukerens telefonnummer og navn.

//Noen kan finne på å skrive telefonnummeret slik: 999 88 777.
//Vi fjerner alle mellomrom før vi sjekker om det er et gyldig nummer.
//Se http://php.net/manual/en/function.str-replace.php
if (isset($_POST['tlf'])) {
  $tlf = str_replace(" ","", $_POST['tlf']);
} else {
  $tlf = NULL;
}

//Nå er vi klare for å teste om det er et gyldig telefonnummer.
//Vi sjekker om det er et tall med 8 siffer. Dersom kravene ikke
//oppfylles sendes brukeren tilbake til forrige side.
//Se http://php.net/manual/en/function.is-numeric.php
//og http://php.net/manual/en/function.strlen.php
if (is_numeric($tlf) && strlen((string)$tlf) == 8) {//Vi har et gyldig nummer
  $tlf_ok = true;
} else {//Brukeren har ikke tastet inn telefonnummeret riktig
  $tlf_ok = false;
}

//Inputfeltet "navn" fra HTML-skjemaet er et tekstfelt, og av sikkerhetsmessige
//grunner er det lurt å gjøre noen sjekker her også. Vi velger å kode alle 
//spesialtegn i tekststrengen brukeren har tastet inn. Hvis brukeren for eksempel
//taster inn ">" vil det kodes til "&gt;".
if (isset($_POST['navn'])) {
  $navn = htmlspecialchars($_POST['navn']);
} else {
  $navn = NULL;
}

//I koden nedenfor henter vi resten av verdiene fra $_POST og setter interne variabler.
//Vi gjør en sjekk på innholdet i $_POST, og setter eventuelt de interne
//variablene til tomme verdier dersom det ikke finnes noe relatert innhold i $_POST.
//Ønsker du å gjøre en grundigere validering av disse verdiene i $_POST,
//kan du gjøre det her.

if (isset($_POST['burger'])) {
  $burger = $_POST['burger'];
} else {
  $burger = NULL;
}

if (isset($_POST['drikke'])) {
  $drikke = $_POST['drikke'];
} else {
  $drikke = NULL;
}

if (isset($_POST['tilbehør'])) {
  $tilbehør = $_POST['tilbehør'];
} else {
  $tilbehør = NULL;
}

if (isset($_POST['ekstra'])) {
  $ekstra = $_POST['ekstra'];
} else {
  $ekstra = NULL;
}

?>
<!DOCTYPE html>
<html lang="no">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="bitjungle">
    <title>Bestillingsmottak</title>
    <link rel="stylesheet" href="stiler/mcbergbys-2.css" />
  </head>
  <body>
    <nav>
      <ul>
        <li>
        <div id="logo"><img src="bilder/burger-1487481.svg" alt="McBergbys logo - CC0 midicomp" style="width: 40px;">McBergbys</div>
          
        </li>
        <li>
          <a href="index.html">Bestilling</a>
        </li>
        <li>
          <a href="om.html">Om McBergbys</a>
        </li>
        <li>
          <a href="hamburgerskolen.html">Burgerskolen</a>
        </li>
      </ul>
    </nav>
    <div class="hoved">
      <h1>Din bestilling</h1>     
<?php
//Nedenfor skal vi skrive ut en bestillingsbekreftelse.
if ($tlf_ok == false) {//Om det er noe galt med tlf-nummeret, gir vi en beskjed om det.
  echo "<p>Det er noe galt med telefonnummeret ditt! ";
  echo "Gå tilbake til bestillingsskjemaet og rett det opp ";
  echo "(trykk på tilbakeknappen i nettleseren din).</p>";
} else {//Dersom telefonnummeret er ok, kjøres koden nedenfor.
  echo "<p>Tusen takk for din bestilling {$navn}. ";
  echo "Vi har registrert bestillingen din på telefonnummer "; 
  echo "<strong>{$tlf}</strong>. "; 
  echo "Vennligst oppgi dette nummeret når du henter bestillingen din.</p>\n";
  echo "<p>";//Begynner et nytt avsnitt her
  if (isset($burger)) {//Brukeren har bestilt burger
    echo "Vi ser at du bestilte en {$burger}, det er et godt valg. ";
  }
  if (isset($drikke)) {//Brukeren har bestilt drikke
    if ($drikke == 'vann') {//Brukeren bestilte vann
      echo "Du bestilte vann, det er veldig bra! ";
    } else {//Brukeren bestilte noe annet enn vann
      echo "Du bestilte {$drikke}. ";
      echo "Jaja. Vann hadde vært et bedre valg, men du vet vel liksom best du da. ";
    }
  }
  if (isset($tilbehør)) {//Brukeren har bestilt tilbehør
    echo "Som tilbehør bestilte du {$tilbehør}. Greit nok.";
  }
  echo "</p>\n<p>";//Avslutter avsnitt og starter et nytt avsnitt
  
  //Nå skal vi se på hva brukeren eventuelt har bestilt av ekstra ting.
  //Først tester vi om vi faktisk har en array i variabelen $ekstra.
  //Se http://php.net/manual/en/function.is-array.php
  if(is_array($ekstra)) {
    echo "Vi noterte oss også at du bestilte litt ekstrautstyr til burgeren din. ";
    echo "Her er hva vi har registrert:</p>\n";
    echo "<ul>\n";
    //Nå jobber vi oss steg for steg gjennom hele lista, 
    //og skriver ut innholdet som en punktliste i HTML.
    //Se http://php.net/manual/en/control-structures.foreach.php
    foreach($ekstra as $e) {
      echo "<li>{$e}</li>\n";
    }
    echo "</ul>\n";
  }
}
?>
    
    <footer>
      <a href="personvern.html">Personvernerklæring</a>
    </footer>

    </div><!-- hoved -->
  </body>
</html>
