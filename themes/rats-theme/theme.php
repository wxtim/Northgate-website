
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=wCMS::get('config','siteTitle')?> - <?=wCMS::page('title')?></title>
	<meta name="description" content="<?=wCMS::page('description')?>">
	<meta name="keywords" content="<?=wCMS::page('keywords')?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="<?=wCMS::asset('css/style.css')?>">
        <link href='https://fonts.googleapis.com/css?family=Diplomata SC' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css?family=Alegreya|Alegreya+Sans|Almendra|Asul|Belleza|Eagle+Lake|Goudy+Bookletter+1911|IM+Fell+DW+Pica+SC|IM+Fell+English|IM+Fell+English+SC|Jim+Nightshade|Kotta+One|Philosopher|Quintessential|Redressed|Ultra" rel="stylesheet"> 
	<link rel="shortcut icon" href="/icon.png" type="image/x-icon">
	<link rel="icon" href="/icon.png" type="image/x-icon">
	<?=wCMS::css()?>

</head>
<body>
	<?=wCMS::alerts()?>
	<?=wCMS::settings()?>

	<nav class="navbar navbar-default">
		<div class="container">
			<div class="col-sm-5 text-center">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navMobile">&#9776;</button>
					<a href="<?=wCMS::url()?>"><h1><?=wCMS::get('config','siteTitle')?></h1></a>
				</div>
			</div>
			<div class="col-sm-7 text-center">
				<div class="collapse navbar-collapse" id="navMobile">
					<ul class="nav navbar-nav navbar-right">
						<?=wCMS::menu()?>

					</ul>
				</div>
			</div>
		</div>
	</nav>

	<div class="container">
		<div class="col-xs-12 col-sm-8">
			<div class="whiteBackground grayFont padding20 rounded5">
				<?=wCMS::page('content')?>

			</div>
		</div>
		<div class="col-xs-12 col-sm-4">
			<div class="visible-xs spacer20"></div>
			<div class="greenBackground padding20 rounded5">
				<?=wCMS::block('subside')?>

			</div>
		</div>
	</div>

	<footer class="container-fluid">
		<div class="padding20 text-right">
			<?=wCMS::footer()?>

		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<?=wCMS::js()?>

</body>
</html>
