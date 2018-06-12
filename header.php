<?php
/**
 * HEADER
 * This is the template that displays all of the <head> section and everything
 * up until <main>
 *
 * @author Svyatoslav Polishchuk (year 2018)
 * @version 1.0
 *
 **==========================================================================**/

global $environment;
global $eventDates;
global $pageTitle;
global $pageDescription;
global $pageKeywords;
?>

<!DOCTYPE HTML>
<html>
<head>
	<!-- default things -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="cache-control" content="public">

	<!-- a bit of SEO -->
	<title>Interaction Design &mdash; <?php echo ucfirst($pageTitle); ?> &mdash; Reveal 2018</title>
    <meta name="description" content="<?php echo ucfirst($pageDescription); ?>">
	<meta name="keywords" content="<?php echo ucfirst($pageKeywords); ?>">
	<meta name="author" content="Svyatoslav Polishchuk">
    <meta name="copyright" content="&copy; 2018 Svyatoslav Polishchuk">
	<meta name="robots" content="index,follow">

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo url ?>assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo url ?>assets/images/apple-touch-icon.png" sizes="144x144" type="image/x-icon">

	<!-- CSS -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,400,700" rel="stylesheet">
	<link href="<?php echo url ?>assets/css/styles.css" rel="stylesheet" >


	<!-- Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120677393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-120677393-1');
	</script>

	<!-- Easter egg -->
	<?php include path . 'header-egg.php'; ?>
</head>
<body class="page-<?php echo $pageTitle ?>">
	<div class="container">
		<header>
			<div class="logo-wrapper">
				<a href="<?php echo url ?>" class="logo-link">
					<svg class="logo-svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
						 viewBox="0 0 104 40" style="enable-background:new 0 0 104 40;" xml:space="preserve">
						<style type="text/css">
							.st0{fill:#08F6FF;}
							.st1{fill:#0AB4F6;}
							.st2{fill:#26AAAC;}
							.st3{fill:#0D9BFF;}
							.st4{fill:#0A33D3;}
							.st5{fill:#C14AA2;}
							.st6{fill:#262693;}
							.st7{fill:#452E9D;}
							.st8{fill:#5C36C6;}
							.st9{fill:#7D3398;}
							.st10{fill:#FFBE4F;}
							.st11{fill:#F4179D;}
							.st12{fill:#F46140;}
							.st13{fill:#F98057;}
							.st14{fill:#1D1D1B;}
						</style>
						<g id="app">
							<polygon class="st0" points="0,30 17.3,20 0,10 	"/>
							<polygon class="st1" points="0,30 17.3,40 17.3,20 	"/>
							<polygon class="st2" points="11.5,30.1 17.3,26.7 17.3,20 11.5,23.3 	"/>
							<polygon class="st3" points="5.7,20 11.5,16.6 17.3,20 11.5,23.3 	"/>
							<polygon class="st4" points="11.5,30.1 5.7,26.7 5.7,20 11.5,23.3 	"/>
						</g>
						<g id="experiental">
							<polygon class="st5" points="34.6,30 17.3,20 17.3,40 	"/>
							<polygon class="st6" points="34.6,30 34.6,10 17.3,20 	"/>
							<polygon class="st7" points="28.9,20 23.1,16.6 17.3,20 23.1,23.3 	"/>
							<polygon class="st8" points="23.1,30.1 17.3,26.7 17.3,20 23.1,23.3 	"/>
							<polygon class="st9" points="28.9,20 28.9,26.7 23.1,30.1 23.1,23.3 	"/>
						</g>
						<g id="hybrid">
							<polygon class="st10" points="17.3,0 0,10 17.3,20 34.6,10 	"/>
							<polygon class="st11" points="11.5,9.9 11.5,16.6 17.3,20 17.3,13.3 	"/>
							<polygon class="st12" points="23.1,9.9 23.1,16.6 17.3,20 17.3,13.3 	"/>
							<polygon class="st13" points="11.5,9.9 17.3,6.6 23.1,9.9 17.3,13.3 	"/>
						</g>
						<g id="text">
							<path id="design" class="st14" d="M75.2,24.9c0.3-0.3,0.6-0.4,0.9-0.4c0.7,0,1.1,0.5,1.1,1.5v3.7H79v-3.9c0-0.8-0.2-1.4-0.7-1.9
								c-0.5-0.5-1-0.7-1.7-0.7s-1.3,0.3-1.8,0.8v-0.7h-1.8v6.5h1.8v-3.6C74.7,25.6,74.9,25.2,75.2,24.9 M69.4,30.2
								c-0.4,0.3-0.9,0.5-1.6,0.5c-0.7,0-1.3-0.2-1.9-0.7l-0.7,1.4c0.4,0.3,0.8,0.5,1.3,0.7s1,0.2,1.5,0.2c0.9,0,1.7-0.3,2.4-0.8
								c0.3-0.3,0.6-0.6,0.8-1.1s0.3-1,0.3-1.5v-5.6h-1.8v0.9c-0.5-0.6-1.1-0.9-1.9-0.9c-0.8,0-1.5,0.3-2,0.9c-0.6,0.6-0.9,1.4-0.9,2.4
								c0,1,0.3,1.7,0.9,2.3c0.6,0.6,1.3,0.9,2.1,0.9c0.8,0,1.6-0.3,2.1-0.9C70,29.3,69.8,29.8,69.4,30.2 M69.3,27.6
								C69,27.9,68.6,28,68.2,28c-0.4,0-0.8-0.2-1.1-0.5c-0.3-0.3-0.5-0.7-0.5-1.2c0-0.5,0.2-0.9,0.5-1.2c0.3-0.3,0.7-0.4,1.1-0.4
								c0.4,0,0.8,0.1,1.1,0.4c0.3,0.3,0.4,0.7,0.4,1.2C69.7,26.8,69.6,27.3,69.3,27.6 M62.8,22.7c0.3,0,0.5-0.1,0.8-0.3
								c0.2-0.2,0.3-0.5,0.3-0.8s-0.1-0.5-0.3-0.8c-0.2-0.2-0.5-0.3-0.8-0.3c-0.3,0-0.5,0.1-0.8,0.3c-0.2,0.2-0.3,0.5-0.3,0.8
								s0.1,0.5,0.3,0.8C62.3,22.6,62.5,22.7,62.8,22.7 M63.7,23.2h-1.8v6.5h1.8V23.2z M60.1,26.3c-0.2-0.1-0.4-0.3-0.6-0.3
								c-0.2-0.1-0.5-0.2-0.9-0.3c-0.4-0.1-0.7-0.2-0.9-0.3c-0.2-0.1-0.3-0.2-0.3-0.4c0-0.3,0.3-0.5,0.8-0.5c0.6,0,1.1,0.2,1.7,0.6
								l0.7-1.2c-0.8-0.5-1.5-0.8-2.3-0.8c-0.8,0-1.4,0.2-1.9,0.6c-0.5,0.4-0.7,0.9-0.7,1.5s0.2,1,0.7,1.4c0.2,0.2,0.5,0.3,0.6,0.3
								c0.2,0.1,0.5,0.2,0.8,0.3c0.4,0.1,0.6,0.2,0.8,0.4c0.2,0.1,0.3,0.3,0.3,0.4c0,0.2-0.1,0.3-0.2,0.4c-0.1,0.1-0.3,0.1-0.6,0.1
								c-0.8,0-1.5-0.3-2.2-0.8l-0.8,1.1c0.4,0.3,0.9,0.6,1.4,0.8c0.5,0.2,1,0.3,1.5,0.3c0.7,0,1.3-0.2,1.8-0.6c0.5-0.4,0.7-0.9,0.7-1.5
								C60.8,27.1,60.5,26.6,60.1,26.3 M53,25.8h-2.8c0-0.4,0.2-0.7,0.5-0.9c0.3-0.2,0.6-0.3,1-0.3c0.4,0,0.7,0.1,0.9,0.3S53,25.4,53,25.8
								 M53.3,27.7c-0.4,0.4-0.9,0.6-1.6,0.6c-0.4,0-0.7-0.1-1.1-0.3c-0.3-0.2-0.5-0.5-0.6-0.9h4.7v-1c0-0.9-0.3-1.7-0.9-2.2
								c-0.6-0.5-1.4-0.8-2.3-0.8c-0.9,0-1.7,0.3-2.3,0.9c-0.7,0.6-1,1.4-1,2.4c0,1,0.3,1.8,1,2.4c0.6,0.6,1.5,0.9,2.4,0.9
								c1,0,1.8-0.3,2.6-1L53.3,27.7z M42.9,25.2c0.3-0.4,0.7-0.5,1.1-0.5c0.4,0,0.8,0.2,1.1,0.5c0.3,0.3,0.4,0.8,0.4,1.3s-0.1,1-0.4,1.3
								s-0.6,0.5-1.1,0.5c-0.4,0-0.8-0.2-1.1-0.5c-0.3-0.3-0.5-0.8-0.5-1.3C42.4,26,42.5,25.5,42.9,25.2 M45.4,28.8v0.9h1.8v-8.9h-1.8V24
								c-0.5-0.6-1.1-0.8-1.9-0.8c-0.8,0-1.5,0.3-2.1,0.9c-0.6,0.6-0.9,1.4-0.9,2.4s0.3,1.8,0.9,2.4c0.6,0.6,1.3,1,2,1
								C44.3,29.8,44.9,29.5,45.4,28.8"/>
							<path id="interaction" class="st14" d="M100.2,14.6c0.3-0.3,0.6-0.4,0.9-0.4c0.7,0,1.1,0.5,1.1,1.5v3.7h1.8v-3.9
								c0-0.8-0.2-1.4-0.7-1.9c-0.5-0.5-1-0.7-1.7-0.7c-0.7,0-1.3,0.3-1.8,0.8v-0.7H98v6.5h1.8v-3.6C99.8,15.2,99.9,14.9,100.2,14.6
								 M95.9,13.7c-0.6-0.6-1.5-1-2.4-1c-1,0-1.8,0.3-2.4,1c-0.6,0.6-1,1.4-1,2.4s0.3,1.7,1,2.4c0.6,0.6,1.5,1,2.4,1c1,0,1.8-0.3,2.4-1
								c0.6-0.6,1-1.4,1-2.4S96.5,14.4,95.9,13.7 M92.3,14.8c0.3-0.3,0.7-0.5,1.2-0.5c0.5,0,0.9,0.2,1.2,0.5c0.3,0.3,0.5,0.8,0.5,1.3
								s-0.2,1-0.5,1.3c-0.3,0.3-0.7,0.5-1.2,0.5c-0.5,0-0.9-0.2-1.2-0.5c-0.3-0.3-0.5-0.8-0.5-1.3S92,15.2,92.3,14.8 M88,12.4
								c0.3,0,0.5-0.1,0.8-0.3c0.2-0.2,0.3-0.5,0.3-0.8c0-0.3-0.1-0.5-0.3-0.8c-0.2-0.2-0.5-0.3-0.8-0.3c-0.3,0-0.5,0.1-0.8,0.3
								C87.1,10.8,87,11,87,11.3c0,0.3,0.1,0.5,0.3,0.8C87.5,12.3,87.7,12.4,88,12.4 M88.9,12.9h-1.8v6.5h1.8V12.9z M85.8,14.2v-1.3h-1.6
								v-1.9h-1.8v1.9h-0.8v1.3h0.8v3c0,0.7,0.2,1.3,0.6,1.7c0.4,0.4,1,0.6,1.6,0.6c0.6,0,1.2-0.3,1.8-0.8l-0.7-1.3
								c-0.2,0.3-0.5,0.5-0.9,0.5c-0.2,0-0.3-0.1-0.5-0.2c-0.1-0.1-0.2-0.3-0.2-0.6v-2.9H85.8z M77.2,17.4c-0.3-0.3-0.5-0.7-0.5-1.3
								c0-0.5,0.2-1,0.5-1.3c0.3-0.3,0.7-0.5,1.2-0.5c0.3,0,0.6,0.1,0.9,0.2c0.3,0.1,0.6,0.3,0.8,0.6l0.9-1.2c-0.4-0.4-0.8-0.7-1.3-0.9
								c-0.5-0.2-0.9-0.3-1.4-0.3c-0.9,0-1.7,0.3-2.4,0.9c-0.7,0.6-1,1.4-1,2.4c0,1,0.3,1.8,1,2.4c0.7,0.6,1.5,0.9,2.5,0.9
								c1,0,1.9-0.4,2.7-1.3L80,16.9c-0.5,0.6-1,0.9-1.6,0.9C78,17.8,77.6,17.7,77.2,17.4 M71.7,17.7c-0.2,0.2-0.5,0.3-0.8,0.3
								c-0.3,0-0.6-0.1-0.7-0.2c-0.2-0.1-0.3-0.3-0.3-0.5c0-0.4,0.4-0.7,1.1-0.7h1.1v0.3C72.1,17.2,72,17.5,71.7,17.7 M73.9,15.2
								c0-0.8-0.2-1.5-0.7-1.9c-0.5-0.4-1.1-0.6-1.9-0.6c-1.1,0-2.1,0.3-2.9,0.9l0.8,1.2c0.2-0.2,0.5-0.3,0.9-0.5c0.3-0.1,0.7-0.2,1-0.2
								c0.7,0,1.1,0.3,1.1,1v0h-1.3c-0.8,0-1.5,0.2-2,0.5c-0.5,0.3-0.7,0.8-0.7,1.5c0,0.7,0.2,1.2,0.7,1.6c0.5,0.4,1,0.6,1.7,0.6
								c0.7,0,1.3-0.3,1.7-0.9v0.8h1.7V15.2z M67.5,14.5l0-1.7c-0.4,0-0.7,0.1-1.1,0.3c-0.3,0.2-0.6,0.4-0.9,0.7v-0.9h-1.8v6.5h1.8v-2.8
								c0-0.6,0.1-1.1,0.4-1.5c0.3-0.4,0.7-0.6,1.2-0.6H67.5z M60.9,15.5h-2.8c0-0.4,0.2-0.7,0.5-0.9c0.3-0.2,0.6-0.3,1-0.3
								c0.4,0,0.7,0.1,0.9,0.3C60.7,14.8,60.9,15.1,60.9,15.5 M61.2,17.3c-0.4,0.4-0.9,0.6-1.6,0.6c-0.4,0-0.7-0.1-1.1-0.3
								c-0.3-0.2-0.5-0.5-0.6-0.9h4.7v-1c0-0.9-0.3-1.7-0.9-2.2c-0.6-0.5-1.4-0.8-2.3-0.8c-0.9,0-1.7,0.3-2.3,0.9c-0.7,0.6-1,1.4-1,2.4
								s0.3,1.8,1,2.4c0.6,0.6,1.5,0.9,2.4,0.9c1,0,1.8-0.3,2.6-1L61.2,17.3z M55.3,14.2v-1.3h-1.6v-1.9h-1.8v1.9h-0.8v1.3h0.8v3
								c0,0.7,0.2,1.3,0.6,1.7c0.4,0.4,1,0.6,1.6,0.6c0.6,0,1.2-0.3,1.8-0.8l-0.7-1.3c-0.2,0.3-0.5,0.5-0.9,0.5c-0.2,0-0.3-0.1-0.5-0.2
								c-0.1-0.1-0.2-0.3-0.2-0.6v-2.9H55.3z M46.4,14.6c0.3-0.3,0.6-0.4,0.9-0.4c0.7,0,1.1,0.5,1.1,1.5v3.7h1.8v-3.9
								c0-0.8-0.2-1.4-0.7-1.9c-0.5-0.5-1-0.7-1.7-0.7c-0.7,0-1.3,0.3-1.8,0.8v-0.7h-1.8v6.5H46v-3.6C46,15.2,46.1,14.9,46.4,14.6
								 M41.8,12.4c0.3,0,0.5-0.1,0.8-0.3c0.2-0.2,0.3-0.5,0.3-0.8c0-0.3-0.1-0.5-0.3-0.8c-0.2-0.2-0.5-0.3-0.8-0.3
								c-0.3,0-0.5,0.1-0.8,0.3c-0.2,0.2-0.3,0.5-0.3,0.8c0,0.3,0.1,0.5,0.3,0.8C41.3,12.3,41.5,12.4,41.8,12.4 M42.7,12.9h-1.8v6.5h1.8
								V12.9z"/>
						</g>
					</svg>
				</a>
				<div class="dates"><?php echo $eventDates ?></div>
			</div>

			<?php
				// do not include the menu if it's teaser website with a countdown
				if ($pageTitle != 'home') {
					include path . 'header-menu.php';
				};
			?>
		</header>
