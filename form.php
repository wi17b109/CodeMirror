<!DOCTYPE html>
<html>
	<head>
		<title>Lets Code</title>
		
		<!-- Theme -->
		<link rel="stylesheet" href="plugin/codemirror/lib/codemirror.css">
		<link rel="stylesheet" href="plugin/codemirror/theme/ambiance.css">
		<link rel="stylesheet" href="css/main.css">
		<!-- Script -->
		<script src="js/jquery.min.js"></script>
		<script src="plugin/codemirror/lib/codemirror.js"></script>
		<script src="plugin/codemirror/mode/clike/clike.js"></script>
		

	</head>
	<body>
		<div id="bild">
			<div id="wrap">
			<div id="header">
			</div>
			<div id="grad">
				<!-- Start Navigationsmenue -->
				<nav style="position:relative; z-index:3;">
					<ul>
						<li class="cat1">
							<a href="form.php">Startseite</a>
						</li>
						<li class="cat2">
							<a href="">Get Started</a>
							<ul>
								<li><a href="">Variablen setzen/verwenden</a></li>
							</ul>
						</li>
					</ul>
				</nav>
				<!-- Ende Navigationsmenue -->
				<div id="content">

					<div class ="beitrag">
						<h1>Beschreibung</h1>
						Ein paar nette Worte was diese Webseite macht
					</div>

					<div class="beitrag">
						<h1>About</h1>
						Wir haben diese Webseite erstellt
					</div>

					<div class="beitrag">
						<h1>Beispiel fuer Coden</h1>
						<div id="preview-comment"></div>
							<script>
								var editor = CodeMirror(document.getElementById("preview-comment"),{
									value:"namespace { \nenum Enum {\nVAL1, VAL2,VAL3",
									mode:"text/x-csharp",
									theme:"ambiance",
									lineNumbers:true
									});
							</script>
						</div>
				<!-- Infos ueber uns -->
					<div class="beitrag">
						<h1>Kontakt</h1>
						<h3>Teamleiter</h3>
						&nbsp;Lukas Feichtinger<br/>
						&nbsp;E-Mail: <a href="mailto:wi17b061@technikum-wien.at">wi17b061@technikum-wien.at</a><br /><br />
						<h3>Teammitglied</h3>
						&nbsp;Alexander Rathbauer<br/>
						&nbsp;E-Mail: <a href="mailto:wi17b109@technikum-wien.at">wi17b109@technikum-wien.at</a><br /><br/>
						<h3>Teammitglied</h3>
						&nbsp;Saskia Huemer<br/>
						&nbsp;E-Mail: <a href="mailto:wi18b092@technikum-wien.at">wi18b092@technikum-wien.at</a><br/><br/>
						<h3>Teammitglied</h3>
						&nbsp;Hui-Qing An Rinbnicsek<br/>
						&nbsp;E-Mail: <a href="mailto:wi17b115@technikum-wien.at">wi17b115@technikum-wien.at</a><br/><br/>
					</div>
				</div> <!--Ende Contend -->
				<div id="footer">
					&copy;LetsCode &DoubleVerticalBar; <a href="">Impressum</a>
				</div>
			</div>
		</div>
	</body>
</html>