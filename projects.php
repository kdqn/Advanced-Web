<?php
// $config = parse_ini_file('config.ini', true);
// $environment = $config['ENVIRONMENT'];
// $URL_BASE = $config[$environment['URL_BASE']];
	$data = [
		'pageTitle' => 'CS3270 | Projects',
        'pageHeader' => 'My Projects',
    'Content' => [
        [
            'projectTitle' => 'My Hangman Game',
            'projectLink' => 'https://cs.bemidjistate.edu/vp1139go/intro2web/himg.html',
            'projectLinkName' => 'Hangman',
            'projectDescription' => 'This is a project I completed as the final project for Intro to Web Design, and it creates a hangman game, and changes the hangman image each time you guess incorrectly, and if you guess the word before it\'s too late, then you win.',
            'usedLanguages' => 'HTML, CSS, JavaScript',
            ],
        [
            'projectTitle' => 'My Portfolio Page (in progress)',
            'projectLink' => 'cs.bemidjistate.edu/vp1139go/portfolio',
            'projectLinkName' => 'My Portfolio',
            'projectDescription' => 'This is a website I am creating to use on future projects, and I started making it as a requirement for the Advanced Web Dev class at BSU. I am going to (by the time it\'s completed) have used a good majority of the stuff I have learned throughout this past semester. ',
            'usedLanguages' => 'HTML, CSS, Javascript, MySQL, PHP',
            ],
        [
            'projectTitle' => 'Hangman 2',
            'projectLink' => '#',
            'projectLinkName' => 'N/A',
            'projectDescription' => 'I would like to eventually re-create the hangman I made as a previous project, focusing on improving the functionality and bugs that I had in my program, and improving the CSS and visual appeal of the webpage as well. I also would like to integrate a way to have multiple words as my solution, instead of just one fixed word all the time.',
            'usedLanguages' => 'Potentially: HTML, CSS, PHP, JavaScript',
        ],
        [
            'projectTitle' => 'Image Library',
            'projectLink' => '#',
            'projectLinkName' => 'N/A',
            'projectDescription' => 'I would like to potentially as an "addition" to my Portfolio page, add a Image Library of random pictures I have taken and display them using my knowledge of coding, and also to just demonstrate some of the cool things I have seen and places I have been.',
            'usedLanguages' => 'Potentially: HTML, CSS, PHP, JavaScript',
        ],

    ],
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
<?php
        for ($i = 0; $i < count($data['Content']); $i++) {
            echo "<h2>" . $data['Content'][$i]['projectTitle'] . "</h2><br>";
            echo "<a href='" . $data['Content'][$i]['projectLink'] . "'>" . $data['Content'][$i]['projectLinkName'] . "</a><br><br>";
            echo "<p>" . $data['Content'][$i]['projectDescription'] . "</p> <br>";
            echo "<b> Used Languages: </b>" . $data['Content'][$i]['usedLanguages'] . "<br>";
        }
?>
	</article>
</main>


	
<?php include_once('src/views/footer.view.php') ?>