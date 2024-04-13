<?php
// $config = parse_ini_file('config.ini', true);
// $environment = $config['ENVIRONMENT'];
// $URL_BASE = $config[$environment['URL_BASE']];
	$data = [
		'pageTitle' => 'CS3270 | Assignments',
        'pageHeader' => 'Assignments',
        'assignments' => [
            [
                'assignTitle' => 'Assignment 1: Home Page',
                'assignLink' => 'https://cs.bemidjistate.edu/vp1139go/',
                'assignLinkName' => 'My Home Page',
            ],
            [
                'assignTitle' => 'Assignment 2: About Page',
                'assignLink' => 'https://cs.bemidjistate.edu/vp1139go/aboutme.php',
                'assignLinkName' => 'My About Page',
            ],
            [
                'assignTitle' => 'Assignment 3: Refactor',
                'assignLink' => 'https://github.com/kdqn/Advanced-Web',
                'assignLinkName' => 'My github (Home page link should be refactored)',
            ],
            [
                'assignTitle' => 'Assignment 4: Bank',
                'assignLink' => 'cs.bemidjistate.edu/vp1139go/banking/',
                'assignLinkName' => 'Banking Website',
            ],
            [
                'assignTitle' => 'Assignment 5: Objects',
                'assignLink' => 'https://github.com/kdqn/Assignment5',
                'assignLinkName' => 'OOP Recruitment Page GitHub',
            ],
            [
                'assignTitle' => 'Assignment 6: Projects View',
                'assignLink' => 'https://cs.bemidjistate.edu/vp1139go/projects.php',
                'assignLinkName' => 'Projects Page',
            ]
        ]
		
	];

include_once('src/views/head.view.php');
?>
<body>
	<header class="header">


<h1><?php echo $data['pageHeader']?></h1>

	</header>

  <?php include_once('src/views/nav.view.php') ?>


	<main class="container">
		<article class="article">
<body>
<dl>
<?php
for ($i = 0; $i < count($data['assignments']); $i++) {
    echo "<dt><h2>" . $data['assignments'][$i]['assignTitle'] . "</h2></dt>";
    echo "<dd><a href='" . $data['assignments'][$i]['assignLink'] . "'>" . $data['assignments'][$i]['assignLinkName'] . "</a></dd><br>";
}
?>
</dl>
</body>
</article>
</main>
<?php include_once('src/views/footer.view.php') ?>