<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="Miles Chick Portfolio Web Development Acting">
	<meta name="description" content="Hello World, This is the personal web site for Miles Chick, who among other things, is a developer living in Austin Texas.  You may be here to looking for Miles Chick the actor.  Well, we're the same person, look for the ACTING link on the page and you'll see some of that stuff there.">
	<title>M I L E S * C H I C K</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/mileschick.js"></script>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Economica" rel="stylesheet">

    <link rel='stylesheet' media='only screen and (min-width: 976px)' href='css/mileschick.css' />
    <link rel='stylesheet' media='only screen and (max-width: 957px)' href='css/lil_mileschick.css' />
   <!--
	***************** HELLO! *******************

	You must be serious if you're viewing source.

	So let me first say hi (Hi) and then say a few things about the site...

	You're probably wondering... why put all that jquery stuff on here (like the animated letters and the motion background.) Well I kind of felt like I had to.  If it were up to me, I'd just put some links to the sites I've worked on and let them stand for themselves.  But it seems like every portfolio site has some crazy js on it... as if to say, "Hey look, I can make stuff move with Javascript!" So I guess felt compelled to do the same thing.

	Most of the js on this site is linked, so if you want to see it use the link to my github account. You can also view the code to the other sites I've built there. Not all of my sites are in public repositories, I had to make some of them private because of things you don't want the general public seeing. You can look at those too, if you want, just let me know.

	Finally, let me say about myself, I'm probably the most well rounded developer you're looking at.  

	I don't mean that in a, "I know the most languages" way. I mean it in the breadth of my experience, I've been in sales, I've run my own company (and still do), I've been a teacher, I've been a carpenter, I've been a reporter, I've been a disk jockey, I've been an actor (and still am). My point is, I know how to survive in lots of different situations, I understand how businesses work, and I know that the key to success lies in the attitude you have when you approach a problem. And if business can be distiled in to one sentence it's, "Solve problems to get sales." Feel free to credit me when you use that.  So, I'm a person that writes code that also understands the big picture and how the tech fits into it.  And that's an intangible you probably won't find with others.

	*************** GOODBYE! *********************

   -->
</head>
<body>
	<div id="miles_image">
		
		
		<div id="film_overlay">
			<!-- <img src="images/film_overlay.png" alt="film overlay"> -->
		</div>
		<div id="full_name">
			<div id="miles_name">
				<object data="images/letters/m.svg" type="image/svg+xml" class="words" id="m_letter"></object>	
				<object data="images/letters/i.svg" type="image/svg+xml" class="words" id="i_letter"></object>	
				<object data="images/letters/l.svg" type="image/svg+xml" class="words" id="l_letter"></object>	
				<object data="images/letters/e.svg" type="image/svg+xml" class="words" id="e_letter"></object>	
				<object data="images/letters/s.svg" type="image/svg+xml" class="words" id="s_letter"></object>	
			</div>
			<div id="chick_name">
				<object data="images/letters/c.svg" type="image/svg+xml" class="words" id="c_letter"></object>
				<object data="images/letters/h.svg" type="image/svg+xml" class="words" id="h_letter"></object>
				<object data="images/letters/i2.svg" type="image/svg+xml" class="words" id="i2_letter"></object>
				<object data="images/letters/c2.svg" type="image/svg+xml" class="words" id="c2_letter"></object>
				<object data="images/letters/k.svg" type="image/svg+xml" class="words" id="k_letter"></object>
			</div>
			<div id="lines" class="hidden">
				<object data="images/lines.svg" type="image/svg+xml"></object>
				<div id="links" class="hidden">
					<div id="about" class="inline_links">ABOUT MILES</div>
					<div id="web_dev" class="inline_links">WEB DEV</div>
					<div id="contact" class="inline_links">CONTACT</div>
				</div>
			</div>
			<div id="box_one" class="hidden boxes">
				<div class="title_box">
					<?php 
						for ($i=0; $i < 150; $i++) { 
							echo "ABOUT<br>";
						}
					?>
				</div>
				<div class="content_box">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum<br><br>

					didunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum<br><br>
				</div>
			</div>
			<div id="box_two" class="hidden boxes">
				<div class="title_box">
					<?php 
						for ($i=0; $i < 150; $i++) { 
							echo "WEB DEV<br>";
						}
					?>
				</div>
				<div class="content_box">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum<br><br>

					<ul>
						  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
						  <li>Aliquam tincidunt mauris eu risus.</li>
						  <li>Vestibulum auctor dapibus neque.</li>
						  <li>Nunc dignissim risus id metus.</li>
						  <li>Cras ornare tristique elit.</li>
						  <li>Vivamus vestibulum nulla nec ante.</li>
						  <li>Praesent placerat risus quis eros.</li>
						  <li>Fusce pellentesque suscipit nibh.</li>
						  <li>Integer vitae libero ac risus egestas placerat.</li>
						  <li>Vestibulum commodo felis quis tortor.</li>
						  <li>Ut aliquam sollicitudin leo.</li>
						  <li>Cras iaculis ultricies nulla.</li>
						  <li>Donec quis dui at dolor tempor interdum.</li>
						  <li>Vivamus molestie gravida turpis.</li>
						  <li>Fusce lobortis lorem at ipsum semper sagittis.</li>
						  <li>Nam convallis pellentesque nisl.</li>
						  <li>Integer malesuada commodo nulla.</li>
					</ul>
				</div>
			</div>
			<div id="box_three" class="hidden boxes">
				<div class="title_box">
					<?php 
						for ($i=0; $i < 150; $i++) { 
							echo "CONTACT<br>";
						}
					?>
				</div>
			</div>
		</div>

	</div>
	
	
</body>
</html>