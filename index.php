<?php
$config = parse_ini_file('config.ini', true);
// $environment = $config['ENVIRONMENT']
// $URL_BASE = $config[$environment['URL_BASE']]
	$data = [
		'pageTitle' => 'CS3270 | Home',

	];

include_once('src/views/head.view.php');
?>




<?php include_once('src/views/head.view.php') ?>

<body>
	<header class="header">

<h1>Cayden Odegard</h1>

	</header>

	  <?php include_once('src/views/nav.view.php') ?>

	<div class="container">
		<article class="article">

		<p>

			<table>
				<tr>
				<th    class="altTable2"><strong>Why am I taking this class?</strong></th>
				<td   class="altTable">I am taking this class because I want to be able to create better and more useful websites and utilize the skills better, as well as this counting towards
					the requirements of the Computer Science degree I am working towards.</td>
			  </tr>
			  <tr>  
				<th    class="altTable"><strong>What do I want to take away from this class?</strong></th>
				<td    class="altTable2">I want to take away a better understanding of php, and just coding in general.</td>
			  </tr>
			  </table>

		</p>
	
	</article>
	</div>

	
	<?php include_once('src/views/footer.view.php') ?>