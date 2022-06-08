<?php

$url = 'https://persis-api.kodelab.co/api/persis/organisation/org1';
$data = file_get_contents($url);
$result = json_decode($data, true);

print'
	<h1>O nama</h1>
		<h2>Fight site, najbolji hrvatski site o borilačkim sportovima!</h2>
		<video width="50%" controls poster="video/Cover.png" >
		  <source src="video/mma_highlights.mp4" type="video/mp4">
		  Your browser does not support HTML5 video.
		</video>
		<p><b>Naziv tvrtke</b>: '. $result["name"] .'</p>
		<p><b>Opis</b>: '. $result["description"] .'</p>
		<p><b>OIB</b>: '. $result["oib"] .'</p>
	</main><br>
		<p>Social media:<br>
			<a href="https://www.facebook.com/Fight-Site-206239519413221/" target="_blank"><img src="img/facebook.png" alt="Facebook" title="Facebook" style="width:24px; margin-top:0.4em"></a>
		</p>
';
?>