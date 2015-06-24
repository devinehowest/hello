 <!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript">
	  WebFontConfig = {
	  	google: { families: [ 'Roboto:400,700:latin' ] }
	  };
	  (function() {
	    var wf = document.createElement('script');
	    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
	      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
	    wf.type = 'text/javascript';
	    wf.async = 'true';
	    var s = document.getElementsByTagName('script')[0];
	    s.parentNode.insertBefore(wf, s);
	  })(); </script>
	<meta charset="UTF-8">
	<title>Hello</title>
	<link rel="stylesheet" type="text/css" href="css/screen.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
</head>
<body>

	<audio preload>  
		<source src="snd/hello.ogg"/>  
		<source src="snd/hello.mp3"/>  
	</audio>

	<section>
		<header>
			<h1>function hello(){
			<br/>
			<span class="code">return "it is you we're looking for";</span>
			}</h1>
		</header>
			<a href="http://www.devine.be">We</a> zoeken een <em>nieuwe collega</em> die mee kan praten over zaken zoals:
			<br/>
			<ul class="skills">
				<li class="skill">het JavaScript framework van de week</li>
				<li class="skill">CSS preprocessors</li>
				<li class="skill">of je al dan niet puntkomma's moet plaatsen</li>
				<li class="add"><a href="https://github.com/devinehowest/hello/blob/master/data/skills.json">vul zelf aan</a></li>
			</ul>

			<p>Je hebt ook wel wat te vertellen over de laatste nieuwe manier om een flatdesign schaduw te leggen en een hamburgermenu is voor jou niet iets uit de McDonald’s.</p>

			<p>Elke dag mag je je uitleven in uitdagende lessen met onze Deviners. Je maakt hen met een <em>hands on approach</em> wegwijs in de wondere wereld van <em>(front-end) webdevelopment.</em></p>
			<p>Je wil hen laten <em>schitteren in de digitale sterrenhemel</em> want dan schitter jij ook. Je krijgt de kans om je organisatorische talenten te ontplooien in verschillende uitdagingen van een alumni café tot een reis naar het nerd wonderland in <em>Silicon Valley.</em></p>

			<p>
				<input type="checkbox" name="" checked value=""/> I'm in
			</p>


			<form class="submit" action="http://www.howest.be/documenten/vacatures/2015048%20praktijk%20lector%20design%20en%20development.pdf" method="get" accept-charset="utf-8">
				<input type="submit" name="" value="submit"/>
			</form>
	</section>
	<script src="js/app.js"></script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-36126725-1', 'auto');
	  ga('send', 'pageview');
	</script>
</body>
</html>