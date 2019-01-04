<!DOCTYPE html>
<html>
<head>

<?php include "layouts/head.php"?>

</head>
<body>

<?php include "layouts/header.php"?>	

		<div id="bg-hitam" class="bg-dark">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-sm-12" id="kolom-1">
						<div class="text-1">
							<h1 class="text-white mb-3">Built for developers</h1>
							<p class="mb-4" id="text-atas">
	         		GitHub is a development platform inspired by the way you work. From <a href="#" class="text-white">open source</a> to <a href="#" class="text-white">business</a>, you can host and review code, manage projects, and build software alongside 28 million developers.
	        		</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-12" id="kolom-2">
						<div id="form-wrapper">
							<form id="login-top" action="index.html" method="post">
								<label class="text-secondary" for="username-top">Username</label>
								<input id="username-top" type="text" name="username" placeholder="Pick a username" required>

								<label class="text-secondary label-atas" for="email-top">Email</label>
								<input id="email-top" type="text" name="email" placeholder="you@example.com" required>

								<label class="text-secondary label-atas" for="password-top">Password</label>
								<input type="password" name="password" placeholder="Password" required>

								<a href="#" class="disabled text-success" id="text-form-1">Make sure it's at least 7 characters, including a number, and a lowercase letter.</a>

								<button type="submit" name="button" class="btn btn-success" id="button-login">Sign up for GitHub</button>

								<p class="text-secondary text-center" id="terms">By clicking “Sign up for GitHub”, you agree to our <a href="#">terms of service</a> and <a href="#">privacy statement</a>. We’ll occasionally send you account related emails.</p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="natfried" style="background: #0366d6;">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<img src="assets/img/welcometocat.svg">
					</div>
					<div class="col-md-8 py-4 text-light">
						<h2>Welcome, Nat!</h2>
						<p>Hear from Nat Friedman, our new CEO, on the future of GitHub</p>
						<a href="#" class="text-light font-weight-bold">Read the blog →</a>
					</div>
				</div>
			</div>
		</div>

		<div class="dots">
			<div class="container-fluid">
				<div class="row justify-content-md-center">
					<div class="col-md-7">
						<div class="dots-content text-center">
							<h1>Try GitHub Enterprise</h1>
							<p class="text-secondary">Use GitHub on-premises with your own servers or in a private cloud with <a href="">GitHub Enterprise</a>. Improve your developer efficiency with flexible deployment options, centralized permissions, hundreds of integrations, technical support, and more.</p>
							<button href="#" class="btn-primary" id="btn-dots">Contact Sales</button>
							<button href="#" class="text-primary" id="btn-dots-2">Start a free trial</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row justify-content-md-center">
				<div class="sponsor">
					<h3 class="text-secondary text-center">More than 1.8 million and businesses and organizations use GitHub</h3>
					<ul id="sponsor-list" class="d-flex flex-justify-center flex-items-center flex-wrap list-style-none mt-2 mt-md-3">
						<li class=""><img class="logo-img-sm px-2 px-sm-4 px-md-5 my-md-3" src="assets/img/airbnb-logo.png"></li>
						<li class=""><img class="logo-img-sm px-2 px-sm-4 px-md-5 my-md-3" src="assets/img/sap-logo.png"></li>
						<li class=""><img class="logo-img-sm px-2 px-sm-4 px-md-5 my-md-3" src="assets/img/ibm-logo.png"></li>	
						<li class=""><img class="logo-img-sm px-2 px-sm-4 px-md-5 my-md-3" src="assets/img/google-logo.png"></li>
						<li class=""><img class="logo-img-sm px-2 px-sm-4 px-md-5 my-md-3" src="assets/img/paypal-logo.png"></li>
						<li class=""><img class="logo-img-sm px-2 px-sm-4 px-md-4 my-md-3" src="assets/img/bloomberg-logo.png"></li>
						<li class=""><img class="logo-img-sm ml-4 px-2 px-sm-4 px-md-5 my-md-3" src="assets/img/spotify-logo.png"></li>
						<li class=""><img class="logo-img-sm px-2 px-sm-4 px-md-5 my-md-3" src="assets/img/swift-logo.png"></li>
						<li class=""><img class="logo-img-sm px-2 px-sm-4 px-md-5 my-md-3" src="assets/img/facebook-logo.png"></li>
						<li class=""><img class="logo-img-sm px-2 px-sm-4 px-md-5 my-md-3" src="assets/img/node-logo.png"></li>
						<li class=""><img class="logo-img-sm px-2 px-sm-4 px-md-5 my-md-3" src="assets/img/nasa-logo.png"></li>
						<li class=""><img class="logo-img-sm px-2 px-sm-4 px-md-5 my-md-3" src="assets/img/walmart-logo.png"></li>
					</ul>
				</div>
			</div>
		</div>


		<div class="container">
			<div class="row justify-content-md-center sponsor">
				<div class="col-md-8" id="sign-up-team">
					<h6 class="h5 text-center text-mono text-secondary font-weight-normal">GitHub for teams</h6>
					<h2 class="text-center" id="work-together">A Better way to work together</h2>
					<p class="text-center text-secondary">GitHub brings teams together to work through problems, move ideas forward, and learn from each other along the way.</p>
					<button class="d-flex mx-auto">Sign up your team →</button>
				</div>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row" id="robot-wrapper">
				 <div class="col-md-6 col-sm-12 mx-auto mx-lg-6 mb-sm-3">
				 	<img class="" src="assets/img/home-illo-team.svg">
				 </div>
				 <div class="col-lg-5 mx-auto">
				 	<div class="menu-robot robot-1">
				 		<h3>Write better code</h3>
				 		<p class="robot-content">Collaboration makes perfect. The conversations and code reviews that happen in Pull Requests help your team share the weight of your work and improve the software you build. <a href="#">Learn about code review.</a><svg class="octicon octicon-triangle-right text-blue" viewBox="0 0 6 16" version="1.1" width="6" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M0 14l6-6-6-6v12z"></path></svg></p>
				 		
				 	</div>
				 	<div class="menu-robot robot-1">
				 		<h3>Manage your chaos</h3>
				 		<p class="robot-content">Take a deep breath. On GitHub, project management happens in Issues and Projects, right alongside your code. All you have to do is mention a teammate to get them involved. <a href="#">Learn about project management.</a><svg class="octicon octicon-triangle-right text-blue" viewBox="0 0 6 16" version="1.1" width="6" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M0 14l6-6-6-6v12z"></path></svg></p>
				 		

				 	</div>
				 	<div class="menu-robot robot-1">
				 		<h3>Find the right tools</h3>
				 		<p class="robot-content">Browse and buy apps from GitHub Marketplace with your GitHub account. Find the tools you like or discover new favorites—then start using them in minutes. <a href="#">Learn about integrations.</a><svg class="octicon octicon-triangle-right text-blue" viewBox="0 0 6 16" version="1.1" width="6" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M0 14l6-6-6-6v12z"></path></svg></p>

				 	</div>
				 </div>
			</div>
		</div>
		
		<div class="container">
			<div class="row justify-content-md-center sponsor">
				<div class="col-md-7">
					<h6 class="text-center text-mono text-secondary font-16">Security and administration</h6>
					<h2 class="text-center font-48">Boxes? Check.</h2>
					<p class="text-secondary text-center font-21">We worry about your administrative and security needs so you don’t have to. From flexible hosting to authentication options, GitHub can help you meet your team’s requirements.</p>
					<button class="button-transparent d-flex mx-auto">See how GitHub works for bussinesses →</button>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row" id="verified">
				<div class="col-md-5">
					<div class="verified-content">
						<h3 class="font-21">Code security</h3>
						<p class="text-dark">Prevent problems before they happen. Protected branches, signed commits, and required status checks protect your work and help you maintain a high standard for your code.</p>
					</div>
					<div class="verified-content">
						<h3 class="font-21">Access controlled</h3>
						<p class="text-dark">Encourage teams to work together while limiting access to those who need it with granular permissions and authentication through SAML/SSO and LDAP.</p>
					</div>
				</div>
				<div class="col-md-1 offset"></div>
				<div class="col-md-5">
					<img src="assets/img/home-illo-business.png" id="verified-img">
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row justify-content-md-center sponsor">
				<div class="col-md-6" id="tiles">
					<div class="plans">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" class="mr-4" width="64px"><title>1clr-code-hosting</title><path d="M27 13h-9a1 1 0 0 0 0 2h9a1 1 0 0 0 0-2zM42 12a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0v-2a1 1 0 0 0-1-1zM46 12a1 1 0 0 0-1 1v2a1 1 0 0 0 2 0v-2a1 1 0 0 0-1-1zM27 28h-9a1 1 0 0 0 0 2h9a1 1 0 0 0 0-2zM42 31a1 1 0 0 0 1-1v-2a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1zM46 31a1 1 0 0 0 1-1v-2a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1z" fill="#23292f"></path><path d="M50 44h-1a13 13 0 0 0-4.68-9H48a3 3 0 0 0 3-3v-6a3 3 0 0 0-3-3h-5v-3h5a3 3 0 0 0 3-3v-6a3 3 0 0 0-3-3H16a3 3 0 0 0-3 3v6a3 3 0 0 0 3 3h5v3h-5a3 3 0 0 0-3 3v6a3 3 0 0 0 3 3h11.72a13 13 0 0 0-3.79 5.21A7 7 0 0 0 13.28 44 6 6 0 0 0 14 56h36a6 6 0 0 0 0-12zM15 17v-6a1 1 0 0 1 1-1h32a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1H16a1 1 0 0 1-1-1zm8 3h18v3H23zm-7 13a1 1 0 0 1-1-1v-6a1 1 0 0 1 1-1h32a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1h-7a12.9 12.9 0 0 0-10 0H16zm34 21H14a4 4 0 1 1 .09-8 1 1 0 0 0 1-.83 5 5 0 0 1 8.6-2.55 1 1 0 0 0 1.7-.42A11 11 0 0 1 47 45a1 1 0 0 0 1 1h2a4 4 0 0 1 0 8z" fill="#23292f"></path></svg>
						<div class="plans-text">
						<span class="heading-row-9">Hosted where you need it</span>
						<p class="text-secondary">Securely and reliably host your work on GitHub.com. Or, deploy GitHub Enterprise on your own servers or in a private cloud using Amazon Web Services, Azure or Google Cloud Platform.</p><br>
						<a href="#">Compare plans →</a>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row justify-content-md-center mt-5">
				<div class="col-lg-7">
					<h6 class="text-mono font-16 text-secondary text-center">Integrations</h6>
					<h2 class="text-center font-48">Build on GitHub</h2>
					<p class="text-center text-secondary font-21 mt-4 mb-5 mx-auto">Customize your process with GitHub apps and an intuitive API. Integrate the tools you already use or discover new favorites to create a happier, more efficient way of working.</p>
					<button class="button-transparent d-flex mx-auto font-weight-bold">Learn about integrations →</button>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="circle-wrapper">
					<ul id="circle-list">
						<li data-toggle="tooltip" data-placement="bottom" title="Slack"><img src="assets/img/slackhq.png"></li>
						<li data-toggle="tooltip" data-placement="bottom" title="ZenHub"><img src="assets/img/zenhubio.png"></li>
						<li data-toggle="tooltip" data-placement="bottom" title="Travis CI"><img src="assets/img/travis-ci.png"></li>
						<li data-toggle="tooltip" data-placement="bottom" title="Atom"><img src="assets/img/atom.png"></li>
						<li data-toggle="tooltip" data-placement="bottom" title="Circle CI"><img src="assets/img/circleci.png"></li>
						<li data-toggle="tooltip" data-placement="bottom" title="Google"><img src="assets/img/google.png"></li>
						<li data-toggle="tooltip" data-placement="bottom" title="Code Climate"><img src="assets/img/codeclimate.png"></li>
					</ul>
				</div>
			</div>
		</div>

		<div class="contanier">	
			<div class="row mt-5 mb-5 justify-content-md-center">
				<div class="col-lg-4">
					<p class="text-secondary text-center">Sometimes, there’s more than one tool for the job. Why not try something new?</p>
					<p class="text-primary text-center">Browse GitHub Marketplace →</a>
				</div>
			</div>
		</div>

			<div class="row mt-5 justify-content-md-center">
				<div class="col-lg-7">
					<p class="text-mono text-center text-secondary font-16">Community</p>
					<h2 class="text-center font-48">Welcome home, <br> developers</h2>
					<p class="text-center text-secondary font-21 mt-4">GitHub is home to the world’s largest community of developers and their projects...	</p>
				</div>
			</div>
		</div>

		<div class="row-14 mb-5 mt-5">
			<div class="dev-wrapper">
				<div class="list">
					<div class="listimg">
						<img class="devimg" src="assets/img/ariya.png">
					</div>
					<div class="listcontent">
						<span>Ariya Hidayat</span>
						<p>PhantomJS maintainer</p>
					</div>
				</div>

				<div class="list">
					<div class="listimg">
						<img class="devimg" src="assets/img/freakboy3742.png"></div>
					<div class="listcontent">
						<span>Russell Keith-Magee</span>
						<p>PyBee maintainer</p>
					</div>
				</div>

				<div class="list">
					<div class="listimg">
						<img class="devimg" src="assets/img/mailchimp.png">
					</div>
					<div class="listcontent">
						<span>MailChimp</span>
						<p>Marketing customer</p>
					</div>
				</div>

				<div class="list">
					<div class="listimg">
						<img class="devimg" src="assets/img/kris-nova.png">
					</div>
					<div class="listcontent">
						<span>Kris Nova</span>
						<p>Kubernetes/kops maintainer</p>
					</div>
				</div>

				<div class="list">
					<div class="listimg">
						<img class="devimg" src="assets/img/evanyou.png">
					</div>
					<div class="listcontent">
						<span>Evan You</span>
						<p>Vue maintainer</p>
					</div>
				</div>

				<div class="list">
					<div class="listimg">
						<img class="devimg" src="assets/img/mapbox.png">
					</div>
					<div class="listcontent">
						<span>Mapbox</span>
						<p>Software customer</p>
					</div>
				</div>

				<div class="list">
					<div class="listimg">
						<img class="devimg" src="assets/img/jessfraz.png">
					</div>
					<div class="listcontent">
						<span>Jess Frazelle</span>
						<p>Kubernetes, previously Docker maintainer</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row mb-5 mt-5 justify-content-md-center">
				<div class="col-lg-7 col-md-11 col-11">
					<p class="text-center text-secondary font-21 font-weight-norma">...whether you’re making your first commit or sending a Rover to Mars, there’s room for you here, too.</p>
				</div>
			</div>				
		</div>

		<div class="container">
			<div class="row py-5">
				<div class="col-lg-6 text-light" id="circle-wrapper">
					<div class="text-center text-white mx-auto mt-6 mb-3 m-md-3 p-5" id="circle-orange">
						<span class="num-1 font-40">96M*</span><br>
						<span class="text-o font-12">repositories worldwide</span>
					</div>
					<div class="mx-auto mt-6 mb-3 m-md-3 bg-primary text-light text-center p-4" id="circle-blue">
						<span class="num-1 font-40">31M*</span>
						<span class="text-o font-12">developers worldwide</span>
					</div>
					<div class="circle d-flex flex-column flex-justify-center text-center p-3 mx-auto mt-6 mb-3 m-md-3" id="circle-purple">
						<span class="num-1 font-40">2.1M*</span>
						<span class="text-o font-12">businesses and organizations worldwide</span>
					</div>
				</div>
				<div class="col-md-6">
					<div class="list-circle">
						<p>GitHub’s users create and maintain influential technologies alongside the world’s largest <br>
						<a id="link-1" href="#">open source community</a></p>
						<svg class="octicon octicon-triangle-right text-orange-light" viewBox="0 0 6 16" version="1.1" width="6" height="16" aria-hidden="true">
							<path fill-rule="evenodd" d="M0 14l6-6-6-6v12z"></path>
						</svg>
					</div>

					<div class="list-circle">
						<p><a id="link-2" href="#">Developers</a> use GitHub for personal projects, from experimenting with new programming languages to hosting their life’s work.</p>
						<svg class="octicon octicon-triangle-right text-orange-light" viewBox="0 0 6 16" version="1.1" width="6" height="16" aria-hidden="true">
							<path fill-rule="evenodd" d="M0 14l6-6-6-6v12z"></path>
						</svg>
					</div>

					<div class="list-circle">
						<p><a id="link-3" href="#">Businesses</a> of all sizes use GitHub to support their development process and to securely build software..</p>
						<svg class="octicon octicon-triangle-right text-orange-light" viewBox="0 0 6 16" version="1.1" width="6" height="16" aria-hidden="true">
							<path fill-rule="evenodd" d="M0 14l6-6-6-6v12z"></path>
						</svg>
					</div>
				</div>
			</div>
		</div>

		<div class="bg-dark py-5 py-md-5 py-lg-5">
			<div class="container">
				<div class="row inputs">
					<h2 class="mx-auto text-light text-center font-weight-normal" style="max-width: 920px">Get started for free — join the millions of developers already using GitHub to share their code, work together, and build amazing things.</h2>
				
						<div class="col-12 col-sm-8 col-lg-3 mx-auto mt-0 mx-lg-0 mb-3 mb-lg-0 px-3">
							<input type="text" name="" placeholder="Pick a username">
						</div>
						<div class="col-12 col-sm-8 col-lg-3 mx-auto mt-0 mx-lg-0 mb-3 mb-lg-0 px-3">
							<input type="text" name="" placeholder="Your email address">
						</div>
						<div class="col-12 col-sm-8 col-lg-3 mx-auto mt-0 mx-lg-0 mb-3 mb-lg-0 px-3">
							<input type="text" name="" placeholder="Password">
						</div>
						<div class="col-12 col-sm-8 col-lg-3 mx-auto mt-0 mx-lg-0 mb-3 mb-lg-0 px-3">
							<button type="submit" name="" class="btn btn-success" placeholder="">Sign up for GitHub</button>
						</div>
						
						<p class="text-center font-12 mx-auto" style="color: #6a737d">By clicking “Sign up for GitHub”, you agree to our <a href="" class="text-light">terms of service</a> and <a href="" class="text-light">privacy statement</a>. We’ll occasionally send you account related emails.</p>
				</div>
			</div>
		</div>
		<div class="py-5">
			<div class="container aaa">
				<div class="row">
					<div class="col-12 col-lg-4 mb-5" style="float: left">
						<svg height="30" class="octicon octicon-logo-github" viewBox="0 0 45 16" version="1.1" width="84" aria-hidden="true"><path fill-rule="evenodd" d="M18.53 12.03h-.02c.009 0 .015.01.024.011h.006l-.01-.01zm.004.011c-.093.001-.327.05-.574.05-.78 0-1.05-.36-1.05-.83V8.13h1.59c.09 0 .16-.08.16-.19v-1.7c0-.09-.08-.17-.16-.17h-1.59V3.96c0-.08-.05-.13-.14-.13h-2.16c-.09 0-.14.05-.14.13v2.17s-1.09.27-1.16.28c-.08.02-.13.09-.13.17v1.36c0 .11.08.19.17.19h1.11v3.28c0 2.44 1.7 2.69 2.86 2.69.53 0 1.17-.17 1.27-.22.06-.02.09-.09.09-.16v-1.5a.177.177 0 0 0-.146-.18zm23.696-2.2c0-1.81-.73-2.05-1.5-1.97-.6.04-1.08.34-1.08.34v3.52s.49.34 1.22.36c1.03.03 1.36-.34 1.36-2.25zm2.43-.16c0 3.43-1.11 4.41-3.05 4.41-1.64 0-2.52-.83-2.52-.83s-.04.46-.09.52c-.03.06-.08.08-.14.08h-1.48c-.1 0-.19-.08-.19-.17l.02-11.11c0-.09.08-.17.17-.17h2.13c.09 0 .17.08.17.17v3.77s.82-.53 2.02-.53l-.01-.02c1.2 0 2.97.45 2.97 3.88zm-8.72-3.61h-2.1c-.11 0-.17.08-.17.19v5.44s-.55.39-1.3.39-.97-.34-.97-1.09V6.25c0-.09-.08-.17-.17-.17h-2.14c-.09 0-.17.08-.17.17v5.11c0 2.2 1.23 2.75 2.92 2.75 1.39 0 2.52-.77 2.52-.77s.05.39.08.45c.02.05.09.09.16.09h1.34c.11 0 .17-.08.17-.17l.02-7.47c0-.09-.08-.17-.19-.17zm-23.7-.01h-2.13c-.09 0-.17.09-.17.2v7.34c0 .2.13.27.3.27h1.92c.2 0 .25-.09.25-.27V6.23c0-.09-.08-.17-.17-.17zm-1.05-3.38c-.77 0-1.38.61-1.38 1.38 0 .77.61 1.38 1.38 1.38.75 0 1.36-.61 1.36-1.38 0-.77-.61-1.38-1.36-1.38zm16.49-.25h-2.11c-.09 0-.17.08-.17.17v4.09h-3.31V2.6c0-.09-.08-.17-.17-.17h-2.13c-.09 0-.17.08-.17.17v11.11c0 .09.09.17.17.17h2.13c.09 0 .17-.08.17-.17V8.96h3.31l-.02 4.75c0 .09.08.17.17.17h2.13c.09 0 .17-.08.17-.17V2.6c0-.09-.08-.17-.17-.17zM8.81 7.35v5.74c0 .04-.01.11-.06.13 0 0-1.25.89-3.31.89-2.49 0-5.44-.78-5.44-5.92S2.58 1.99 5.1 2c2.18 0 3.06.49 3.2.58.04.05.06.09.06.14L7.94 4.5c0 .09-.09.2-.2.17-.36-.11-.9-.33-2.17-.33-1.47 0-3.05.42-3.05 3.73s1.5 3.7 2.58 3.7c.92 0 1.25-.11 1.25-.11v-2.3H4.88c-.11 0-.19-.08-.19-.17V7.35c0-.09.08-.17.19-.17h3.74c.11 0 .19.08.19.17z"></path></svg>
					</div>	
					<div class="col-6 col-sm-3 col-lg-2 mb-6 mb-md-2 pr-3 pr-lg-0 pl-lg-4" style="float: left">
						<ul class="font-14 text-secondary listaa">Product
							<li><a href="#">Features</a></l>
							<li><a href="#">Security</a></li>
							<li><a href="#">Business</a></li>
							<li><a href="#">Case Studies</a></li>
							<li><a href="#">Pricing</a></li>
							<li><a href="#">Resources</a></li>
						</ul>
		    		</div>

		    		<div class="col-6 col-sm-3 col-lg-2 mb-6 mb-md-2 pr-3 pr-lg-0 pl-lg-4" style="float: left">
						<ul class="font-14 text-secondary listaa">Platform
							<li><a href="#">Developer API</a></li>
							<li><a href="#">Partners</a></li>
							<li><a href="#">Atom</a></li>
							<li><a href="#">Electron</a></li>
							<li><a href="#">GitHub Desktop</a></li>
						</ul>
		    		</div>

		    		<div class="col-6 col-sm-3 col-lg-2 mb-6 mb-md-2 pr-3 pr-lg-0 pl-lg-4 lh15" style="float: left">
						<ul class="font-14 text-secondary listaa">Support
							<li><a href="#">Help</a></li>
							<li><a href="#">Community Forum</a></li>
							<li><a href="#">Training</a></li>
							<li><a href="#">Status</a></li>
							<li><a href="#">Contact GitHub</a></li>
						</ul>
		    		</div>

		    		<div class="col-6 col-sm-3 col-lg-2 mb-6 mb-md-2 pr-3 pr-lg-0 pl-lg-4" style="float: left">
						<ul class="font-14 text-secondary listaa">Company
							<li><a  href="#">About</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Press</a></li>
							<li><a href="#">Shop</a></li>
						</ul>
		    		</div>
		    	</div>
			</div>
		</div>

<?php include "layouts/footer.php" ?>
</body>

<script type="text/javascript">
	$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
</html>
