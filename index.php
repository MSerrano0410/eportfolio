<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Marvin Serrano's Portfolio</title>
		<link rel = "stylesheet" type = "text/css" href = "css/main.css" />
		<link href="http://fonts.googleapis.com/css?family=Ubuntu:bold" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Vollkorn" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet" type="text/css">	
		<link rel="stylesheet" href="js/dropit/dropit.css" type="text/css" />
		<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type = "text/javascript" src = "js/main.js"></script>		
	</head>
	<body>
		<div id = "wrapper">
			<div id = "back_top_banner">
				<div id = "name">
					MARVIN SERRANO
				</div>
				<div id = "header_social">
					<div class = "social_icon">
						<a href = "https://twitter.com/marvinrserrano" target = "_blank" title = "My Twitter page.">
							<img src = "img/twitter.png" />
						</a>
					</div>
					<div class = "social_icon">
						<a href = "https://www.linkedin.com/profile/view?id=360366020" target = "_blank" title = "My LinkedIn Profile.">
							<img src = "img/linkedin.png" />						
						</a>
					</div>
					<div class = "social_icon">
						<a href = "http://smorgastech.wordpress.com" target = "_blank" title = "My blog.">
							<img src = "img/wordpress.png" />
						</a>
					</div>
					<div class = "social_icon">
						<a href = "https://github.com/MSerrano0410" target = "_blank" title = "My Github account.">
							<img src = "img/github.png" />					
						</a>
					</div>
				</div>
				<div id = "tagline">
					"Saving the world one bug fix at a time."
				</div>
				<div id = "top_menu">					
					<ul  id = "main_menu">
						<li>
							<a href = "index.php">HOME</a>
						</li>
						<li>
							<a href = "goals.php">MY GOALS</a>
						</li>
						<li>
							<a href = "resume.php">MY RESUME</a>
							
						</li>
						<li>
							<a href = "projects.php">MY PROJECTS</a>
						</li>
						<li>
							<a href = "about.php">ABOUT ME</a>
						</li>
						<li>
							<a href = "contact.php">CONTACT ME</a>
						</li>
					</ul>
				</div>
				<div id = "content">
					<div id = "content_title">
						<div id = "content_title_inner">
							Welcome to my portfolio!
						</div>
					</div>
					<div id = "main_content">
						<span class = "paragraph_title">Hello, World!</span>
						<p class = "paragraph">
							Ever since I saw a Nintendo console bring together a dysfunctional family at the age of 6, I have been
							fascinated by how software can make a difference in the world. Whether it was helping a Penn State
							Engineering professor create a website for his new students during my Information Technology studies there,
							or creating an online presence for my father's landlord and close friend for free, I have always been
							after the pursuit of knowledge in the software development field in the interest of making a difference.<br /><br />
							
							Now, with over seven years of experience as a software developer, I hope to use my public sector, 
							private sector, and freelance web development experience to help others. Whether it's creating apps to
							simplify their lives, personal and business websites to help people and companies get off of the ground,
							or creating mobile and web applications for a good cause, my goal is to use my work to make a difference.
							Every place I worked at gave as much to me as I did to them, and I hope to work hard for an organization
							that strives to make a difference, whether in their local community, or at a global level. <br /><br />
							Please enjoy my journey of self-discovery that is my portfolio, and thank you for taking the time to visit.<br /><br />
							Sincerely,<br />
							Marvin Serrano<br /><br />
							P.S. Please enjoy a video by my high school class, that helped inspire me to take this direction with my career, and my life.
							<div id = "video_div">
								<iframe width="300" height="300" src="https://www.youtube.com/embed/VDsW3i0DTGk" frameborder="0" allowfullscreen></iframe>
							</div>
							
						</p>
					</div>
					<div id = "side-bar">
						<div id = "tweet_top">
							<img id = "tweet_bird" src = "img/tweet.png" />
							<span class = "side_title">Recent Tweets</span>
						</div>
						<div id = "twitter_news">
							<?php
								include 'php/tweets.php';
							?>
						</div><br /><br />
						<div id = "blog">
							<img id = "wordpress" src = "img/wordpress_large.png" />
							<div id = "blog_title" class = "side_title">Recent Blog Posts</div>
						</div>
						<div id = "blog_feed">
							<?php 
								include 'php/blog.php';
							?>
						</div>
					</div>
				</div>
				<div id = "footer">
					<div id = "footer_contact">
						<span id = "footer_title">Contact Me</span>
						<p id = "footer_content">
							2810 Rosemary Lane<br />
							Falls Church, VA 22042<br /><br />
							<a href = "mailto:mserrano0410@gmail.com">mserrano0410@gmail.com</a><br /><br />
							571-499-3359
						</p>
					</div>
					
					<div id = "footer_follow">
						<div id = "footer_social_box">
							<span id = "footer_social_title">Follow Me On</span>
							<p id = "footer_content">
								<div id = "footer_social">
									<div class = "social_icon">
										<a href = "https://twitter.com/marvinrserrano" target = "_blank" title = "My Twitter page.">
											<img src = "img/twitter.png" />
										</a>
									</div>
									<div class = "social_icon">
										<a href = "https://www.linkedin.com/profile/view?id=360366020" target = "_blank" title = "My LinkedIn Profile.">
											<img src = "img/linkedin.png" />						
										</a>
									</div>
									<div class = "social_icon">
										<a href = "http://smorgastech.wordpress.com" target="_blank" title = "My blog.">
											<img src = "img/wordpress.png" />
										</a>
									</div>
									<div class = "social_icon">
										<a href = "https://github.com/MSerrano0410" target = "_blank" title = "My Github account.">
											<img src = "img/github.png" />					
										</a>
									</div>
								</div>
							</p>
						</div>
					</div>
					
					<div id = "footer_linkbacks">
						<span id = "footer_title">Links</span><br /><br />
						<div id = "footer_link_content">
							<a href = "index.php">Home</a><br/>
							<a href = "goals.php">My Goals</a><br />
							<a href = "resume.php">My Resume</a><br />
							<a href = "projects.php">My Projects</a><br />
							<a href = "about.php">About Me</a><br />
						</div>
					</div>
				</div>
				<div id = "copyright">
					<a href = "https://plus.google.com/u/0/102813042286912975539/posts" target = "_blank">&#169; Marvin Serrano</a>
				</div>
			</div>
		</div>
	</body>
</html>