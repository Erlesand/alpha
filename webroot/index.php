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
$alpha['title'] = "Min kurshemsida";

$alpha['main'] = <<<EOD
<article class="justify border" style="width: 80%;">

			<h1>OM MIG</h1>
			<figure class="right top" id="photo-me">
				<img src="img/erlesand.jpg" alt="Lenny Erlesand">
				<figcaption>
					<p>I somras slog det mig att man inte blir brun av strålningen från datorskärmen så här är jag och vandrar i ravinerna på Kreta.</p>
				</figcaption>
			</figure>
			<p>Mitt namn är Lenny Erlesand, 29-årig skåning som för tillfället bor i Lund.</p>
			
			<p>Har tidigare läst Mechanical Engineering i England där jag bodde i 3 år och tog min examen därifrån våren 2007. Hösten 2007 började jag läsa ekonomi på Lunds universitet och tanken är att ta ut en dubbelexamen härifrån, en magister i nationalekonomi samt en kandidat i företagsekonomi. Jag började dock arbeta heltid 2010 så har fortfarande ett par kurser kvar att läsa innan jag kan ta ut mina examina.</p>
			
			<p>Webbutveckling är något som jag alltid har funnit intressant och jag har läst en hel del om det online. Tänkte därför att det kunde vara dags att läsa det på en högskola för att få en solid bas att stå på. För tillfället läser jag denna kurs i webbprogrammering, samt en introduktionskurs i Java, båda via BTH på distans. Tanken är att bygga på den kunskap jag får från dessa med mer avancerade kurser i framtiden.</p>
		
			<p>Min fritid spenderar jag med att läsa dessa distanskurser från BTH alternativt försöker jag utbilda mig en del inom digital marknadsföring; när jag inte gör det så försöker jag ta mig till gymmet för att röra lite på mig.</p>
			
	<footer class="byline">
		<figure class="right top"><img src="img/erlesand-face.png" alt="Close-up"></figure>
		<p>Lenny Erlesand är en utbildad ingenjör och hoppas på att bli klar med sina ekonomistudier innan han når pensionsåldern (vilken närmar sig med stormsteg!). Brinner för att lära sig nya saker, dagen han slutar utbilda sig är dagen han slutar andas.</p>
	</footer>
</article>
EOD;


// Finally, leave it all to the rendering phase of Alpha.
include(ALPHA_THEME_PATH);