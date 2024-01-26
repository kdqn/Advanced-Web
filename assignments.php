<?php
$config = parse_ini_file('config.ini', true);
// $environment = $config['ENVIRONMENT'],
// $URL_BASE = $config[$environment['URL_BASE']],
	$data = [
		'pageTitle' => 'CS3270 | Assignments',
        'assignments' => [
            [
                'assignNum' => 'Assignment 1:',
                'assignLink' => 'cs.bemidjistate.edu/banking',
                'assignLinkName' => 'Banking Website',
            ],
            [
                'assignNum' => 'Assignment 2:',
                'assignLink' => '',
                'assignLinkName' => 'TBD',
            ],
            [
                'assignNum' => 'Assignment 3:',
                'assignLink' => '',
                'assignLinkName' => 'TBD',
            ]
        ]
		
	];

include_once('src/views/head.view.php');
?>
<body>
    <h1>Assignments:</h1>
    <h2><?php echo $data['assignments'][0]['assignNum'] ?></h2> <br>
    <a href="<?php echo $data['assignments'][0]['assignLink'] ?>"><?php echo $data['assignments'][0]['assignLinkName'] ?></a>
    <h2><?php echo $data['assignments'][1]['assignNum'] ?></h2> <br>
    <a href="<?php echo $data['assignments'][1]['assignLink'] ?>"><?php echo $data['assignments'][1]['assignLinkName'] ?></a>
    <h2><?php echo $data['assignments'][2]['assignNum'] ?></h2> <br>
    <a href="<?php echo $data['assignments'][2]['assignLink'] ?>"><?php echo $data['assignments'][2]['assignLinkName'] ?></a>
</body>
<?php include_once('src/views/nav.view.php') ?>
<?php include_once('src/views/footer.view.php') ?>