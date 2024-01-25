<?php
$config = parse_ini_file('config.ini', true);
// $environment = $config['ENVIRONMENT']
// $URL_BASE = $config[$environment['URL_BASE']]
	$data = [
		'pageTitle' => 'CS3270 | About Me',
		
	];

include_once('src/views/head.view.php');
?>
<body>
	<header class="header">


<h1>About Me</h1>

	</header>

  <?php include_once('src/views/nav.view.php') ?>

  <div><img src="images/pfpcayden.jpg" alt="A picture of me"></div>
	<main class="container">
		<article class="article">

		<p>
      <b>Fun fact about myself?</b> <br> <br>
      A fun fact about me, is my entire education history. I have been homeschooled most of my life, except for a few classes
       I took at BHS and now I am a full-time PSEO student at BSU. I got my first college 
       credits at age 12 through a CLEP test and have earned quite a few more throughout my highschool years.
      I am planning to graduate with my Bachelor's Degree in Computer Science before I turn 19. 
      I am currently 16 and have 50ish credits and hope to graduate within the next 3 years. <br>
       <br> <b>Why did I choose CS?</b>   <br> <br>
      I chose computer science because I have always had a fascination with computers, and my 
      dad also does computer science related stuff for his job. Most other potential degrees
      seemed boring to me, and coding and how computers work and the design elements of them have
      always fascinated me. <br> <br>
       <b>What do I want to do once I graduate?</b> <br> <br>
       I would like to spend some time travelling and just having fun with friends, and then 
       get a job (either as a web developer or some other kind of programmer) and put my degree to use. I plan on spending
       time outdoors doing stuff I enjoy as well, such as mountain biking, rock climbing, and camping, 
       potentially spending a considerable amount of time just camping and travelling around the United States.

		</p>
	
	</article>
</main>


	
<?php include_once('src/views/footer.view.php') ?>