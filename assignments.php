<?php
$config = parse_ini_file('config.ini', true);
// $environment = $config['ENVIRONMENT']
// $URL_BASE = $config[$environment['URL_BASE']]
	$data = [
		'pageTitle' => 'CS3270 | Assignments',
		
	];

include_once('src/views/head.view.php');
?>
<body>
    <h1>Content coming soon... </h1>
</body>
<?php include_once('src/views/nav.view.php') ?>
<?php include_once('src/views/footer.view.php') ?>