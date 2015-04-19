<?php 
/**
 * This is a Alpha pagecontroller.
 *
 */
// Include the essential config-file which also creates the $alpha variable with its defaults.
include(__DIR__.'/config.php'); 


// Add style for csource
$alpha['stylesheets'][] = 'css/source.css';


// Create the object to display sourcecode
//$source = new CSource();
$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..'));


// Do it and store it all in variables in the Alpha container.
$alpha['title'] = "Mina kursredovisningar";

$alpha['main'] = <<<EOD
<div id="content">
			<h1>Mina kursredovisningar</h1>
EOD;

$alpha['report'][] = <<<EOD
	<div class="datebox" style="float: right;">
		<span class="month">Apr</span> 
		<span class="day">05</span> 
		<span class="year">2015</span>
	</div>
	<h2>Kom igång med programmering i PHP</h2>
	<p><em>Då var denna kurs påbörjad och första kursmomentet avklarat. Upplägget känns igen från htmlphp-kursen, dock kändes det inte lika pedagogiskt upplagt utan väldigt mycket blev man tilldelad utan att det förklarades. Jag var dock inne och tittade lite på de kommande momenten och mycket av de frågor som har dykt upp kommer att få sitt svar längre fram. Förhoppningsvis blir det snart klarare och lättare att förstå alla bitar som man har byggt i detta moment.</em></p>
	
	<p>
		<strong>Vilken utvecklingsmiljö använder du??</strong><br>
		När jag utvecklar använder jag mig utav Coda som editor då den tillåter mig att editera filer direkt på webbservern (något som jag inte har lyckats hitta likvärdigt stöd för i Sublime Text ännu). Min lokala miljö består utav MAMP, och som webbläsare använder jag vanligtvis Safari och Chrome.
	</p>
	<p>
		<strong>Berätta hur det gick att jobba igenom guiden “20 steg för att komma igång PHP”, var något nytt eller kan du det?</strong><br>
		Har tidigare läst kursen "Databaser, HTML, CSS och skriptbaserad PHP-programmering" så det mesta var repetition.
	</p>
	<p>	
		<strong>Vad döpte du din webbmall Anax till?</strong><br>
		Jag döpte min webbmall till Alpha eftersom den kommer vara starten på alla webbprojekt. 
		
		<p>Jag passade på att göra en ny stil till hemsidan, delvis baserad på den jag utvecklade i htmlphp-kursen. Gjorde en simple logga och satsade på röd som accentfärg, tanken är att denna layout sedan kan återanvändas i de efterkommande kurserna.</p>
	</p>
	<p>
		<strong>Vad anser du om strukturen i Anax, gjorde du några egna förbättringar eller något du hoppade över?</strong><br>
		
		Strukturen i Anax känns ovan för tillfället då jag tidigare aldrig jobbat med MVC, utan endast skriptbaserad PHP, men det känns absolut som att det är ett bra sätt att arbeta på, så detta ska bli riktigt kul. Känns dock som att jag har en hel del att lära mig när det kommer till hur man lägger upp OOP. 
		 
		 <p>Jag la till en hel del i template som jag tyckte fattades eller helt enkelt kunde förbättras. Exempelvis stoppade jag in lite meta-taggar för att kunna bygga SEO-anpassade sidor. Sedan så stoppade jag även in stöd för Google Tag Manager, vilket jag själv har börjat använda nyligen istället för att lägga in Google Analytics direkt på sidan. Jag länkade även till normalize.css samt en kopia av senaste jQuery (som backup om jquery.com skulle vara otillgängligt).</p>
	</p>
	<p>
		<strong>Gick det bra att inkludera source.php? Gjorde du det som en modul i ditt Anax?</strong><br>
		Det var inga problem att inkludera source.php, vilket jag lade till som en egen modul i Alpha. 
	</p>
	<p>
		<strong>Gjorde du extrauppgiften med GitHub?</strong><br>
		Eftersom jag länge har haft tankar på att börja arbeta med GitHub så såg jag detta som en perfekt anledning att börja, jag gjorde därför den extrauppgiften och det gick bra. 
	</p>
	<div class="report-footer">
	<a href="http://dbwebb.se/oophp/kmom01">Instruktioner</a> | <a href="http://dbwebb.se/oophp/kmom01#resultat_redovisning">Redovisning</a>
	</div>
EOD;

foreach($alpha['report'] as $report)
	$alpha['main'] .= "<article class='justify report'>$report</article>"; 

$alpha['main'] .= "</div>"; 

// Finally, leave it all to the rendering phase of Alpha.
include(ALPHA_THEME_PATH);