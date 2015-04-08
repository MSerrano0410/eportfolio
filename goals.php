<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Marvin Serrano's Portfolio</title>
		<link rel = "stylesheet" type = "text/css" href = "css/main.css" />
		<link href="http://fonts.googleapis.com/css?family=Ubuntu:bold" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Vollkorn" rel="stylesheet" type="text/css">
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
							What are my goals?
						</div>
					</div>
					<div id = "main_content">
						<span class = "paragraph_title">My Goals...</span>
						<p class = "paragraph">
							We all have goals in life. Whether it's a short-term goal like finishing dinner before their family gets home,
							or a long-term goal like becoming a world-renowned chef, goals are one of many similarities between every
							human being. So, what are my goals?<br /><br />
							First, I want to learn. I want to better myself as a software developer, as a professional, and as a human being.
							I want to better understand the technology that pervades every aspect of our lives, so that I may use this
							knowledge to make a difference in the lives of others. One of my favorite quotes from Sophocles summarizes my 
							mission perfectly: "Look and you will find it -- what is unsought will go undetected." I want to create software
							that will make folks aware of tools and resources they can use to help any area of their life.<br /><br />
							<span id = "short_goals_title" class = "paragraph_title">Short-term Goals</span> <span class = "paragraph_title">Long-term Goals</span>
							<ul id = "short_goals">
								<li>Learn languages I do not know, such as Ruby (especially Ruby on Rails).</li>
								<li>Find tutoring and volunteer software development opportunities to improve my skills.</li>
								<li>Work on my portfolio and side projects to improve upon my existing skillset.</li>
								<li>Create training plan with local and online software seminars and classes, such as JAVAOne.</li>
								<li>Find additional venues to learn about recent updates in the field of software development.</li>
								<li>Contribute to open-source projects via venues such as Github.</li>
							</ul>
							<ul id = "long_goals">
								<li>Continue to improve upon my existing skillset, and seek to learn something new every day.</li>
								<li>Work for an organization that shares my passion for software and making a difference in people's lives.</li>
								<li>Apply the critical thinking and personal skills acquired from my experiences in my everyday life, to become a better person.</li>
								<li>Reach beyond my Bachelor's in Information Technology to acquire a Master's in Computer Science.</li>
							</ul>
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