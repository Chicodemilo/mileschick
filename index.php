<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<meta name="keywords" content="Miles Chick Web Developer Austin">
	<meta name="description" content="Hello World, This is the personal web site for Miles Chick, who among other things, is a web developer living in Austin Texas.">
	<title>M I L E S * C H I C K</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/mileschick.js"></script>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Economica" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">

    <link rel='stylesheet' media='only screen and (min-width: 976px)' href='css/mileschick.css' />
    <link rel='stylesheet' media='only screen and (max-width: 975px)' href='css/lil_mileschick.css' />
    <link rel='stylesheet' media='only screen and (max-width: 675px)' href='css/tiny_mileschick.css' />

    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-89555865-1', 'auto');
	  ga('send', 'pageview');

	</script>


   <!--
	***************** HELLO! *******************

	You must be serious if you're viewing source.

	So let me first say hi (Hi) and then say a few things about the site...

	You're probably wondering... why put all that jquery stuff on here (like the animated letters and the motion background.) Well I kind of felt like I had to.  If it were up to me, I'd just put some links to the sites I've worked on and let them stand for themselves.  But it seems like every portfolio site has some crazy js on it... as if to say, "Hey look, I can make stuff move with Javascript!" So I guess felt compelled to do the same thing.

	Most of the js on this site is linked, so if you want to see it use the link to my github account. You can also view the code to the other sites I've built there. Not all of my sites are in public repositories, I had to make some of them private because of things you don't want the general public seeing. You can look at those too, if you want, just let me know.

	Finally, let me say about myself, I'm probably the most well rounded developer you're looking at.  

	I don't mean that in a, "I know the most languages" way. I mean it in the breadth of my experience, I've been in sales, I've run my own company (and still do), I've been a teacher, I've been a carpenter, I've been a reporter, I've been a disk jockey, I've been an actor (and still am). My point is, I know how to survive in lots of different situations, I understand how businesses work, and I know that the key to success lies in the attitude you have when you approach a problem. And if business can be distiled in to one sentence it's, "Solve problems to get sales." Feel free to credit me when you use that.  So, I'm a person that writes code that also understands the big picture and how the tech fits into it.  And that's an intangible you probably won't find with others

	*************** GOODBYE! *********************
   -->

   
</head>
<body>
	<div id="miles_image">
		
		
		<!-- <div id="film_overlay"> -->
			<!-- <img src="images/film_overlay.png" alt="film overlay"> -->
		<!-- </div> -->
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
					<div id="web_dev" class="inline_links">EXAMPLES</div>
					<div id="contact" class="inline_links">CONTACT</div>
				</div>
			</div>
			<div id="box_one" class="hidden boxes">
				<div class="title_box">
					<?php 
						for ($i=0; $i < 150; $i++) { 
							echo "<div class='color_boxes_one'>ABOUT</div>";
							// echo "<div class='color_boxes_two'>ABOUT</div>";
							// echo "<div class='color_boxes_three'>ABOUT</div>";
						}
					?>
				</div>
				<div class="content_box">
					Hello,<br><br>
					I'm Miles Chick and I'm a Web Developer in Austin, Texas.<br><br>

					The reason I became a web developer is so that I could make things that haven't been made yet. I like building new things.<br><br>

					If you're looking to work with me here's what you need to know... <br><br>
					I've worn enough hats in my life to be a 'Big Picture' developer.  I've owned and run busnesses and I can probably 'get' what you're trying to achieve.  And I'll, most likely, match your level of excitement.  <br><br>

					So let's talk about what I can bring to your business, or even if you have an idea and just want to hash it out with a developer, I'm your guy. Like I said, I really dig new ideas. If you're in Austin, use the contact form and we can go have coffee.<br><br>
				</div>
			</div>
			<div id="box_two" class="hidden boxes">
				<div class="title_box">
					<?php 
						for ($i=0; $i < 150; $i++) { 
							echo "<div class='color_boxes_one'>EXAMPLES</div>";
							// echo "<div class='color_boxes_two'>WEB DEV</div>";
							// echo "<div class='color_boxes_three'>WEB DEV</div>";
						}
					?>
				</div>
				<div class="content_box">
					All the sites below were written front to back by me. And in most cases I designed them.<br><br>

					PHP is my prefered backend language.<br><br>

					My prefered MCV frame-work is CodeIgniter.<br><br>

					Jquery is a friend of mine but for some of the more complex animations, I've used create.js.

					<br><br>Here's my <a href="https://github.com/Chicodemilo" target="blank" alt="miles repo">github repo</a> althought a lot of my work needs to be in private repos - saftey first.

					<ul>
						  <li>
						  	<a href="https://www.greatsite.apartments" rel="nofollow" target="blank">greatsite.apartments</a><br>
						  	<span class="site_description">This is really like 8 sites in one. After a customer buys the service, their apartment comunities' website is auto-created. They can then login and admin their new site and use any of the templates - so I made all of the templates on the site too. Pretty complex backend. Also, dig the cool JS Sales Register at the bottom of the page.</span>

						  </li>
						  <li>
						  	<a href="http://www.abileneseniorsmagazine.com" rel="nofollow" target="blank">abileneseniorsmagazine.com</a><br>
						  	<span class="site_description">Look at the animation on the index page... I took an old postcard of downtown Abilene and made the flag wave, birds fly, and cars drive up and down the main street. And I also designed the logo that is currently being used on the magazine.</span>

						  </li>
						  <li>
						  	<a href="https://www.sanangelo.apartments" rel="nofollow" target="blank">sanangelo.apartments</a><br>
						  	<span class="site_description">Site visitors have tools for searching for an apartment, advertisers have a backend to admin their pages, and the site owner has tools add, edit or delete everything else. At first glance it seems simple, but there's a lot going on here with the backend. Oh, the blog on the site writes itself - crazy huh?!?</span>

						  </li>
						  <li>
						  	<a href="gardner-austin/index.php" rel="nofollow" target="blank">gardner-austin.com</a><br>
						  	<span class="site_description">I was hired to make this 'Coming Soon' site for a restaurant. They were under a time crunch, I think most things in the restaurant industry are under a time crunch. It's hosted on my site because the restaurant isn't coming soon any more. A pretty site... I was handed PDFs from a designer and kicked it out super fast.</span>

						  </li>
						  
					</ul>
				</div>
			</div>
			<div id="box_three" class="hidden boxes">
				<div class="title_box">
					<?php 
						for ($i=0; $i < 150; $i++) { 
							echo "<div class='color_boxes_one'>CONTACT</div>";
							// echo "<div class='color_boxes_two'>CONTACT</div>";
							// echo "<div class='color_boxes_three'>CONTACT</div>";
						}
					?>
				</div>
				<div class="content_box">
					WHAT'S YOUR NAME:
					<input type="text" name="name" id="name" maxlength="65">
					<input type="text" name="last_name" id="last_name" value="">
					WHAT'S YOUR EMAIL:
					<input type="text" name="email" id="email" maxlength="50">
					WHAT'S YOU NEEDIN':					
					<textarea name="message" id="message" cols="30" rows="10" maxlength="400"></textarea>
					<button type="submit" name="submit" id="submit">SEND</button>
					<div class="feedback">
						
					</div>
					<div class="under_feedback">
						&nbsp;
					</div>

				</div>
			</div>
		</div>

	</div>
	
	
</body>
</html>
