@extends('layouts.master')

@section('head')
	<link rel="stylesheet" type="text/css" href="css/resume.css">
    @section('title')
        Mars Martian's Resume
    @stop
@stop

@section('header')
	<header class="intro-header" style="background-image: url('img/blog_resume.jpg')">
	    <div class="container">
	        <div class="row">
	            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
	                <div class="page-heading">
	                    <h1>Mars Martian</h1>
	                    <hr class="small">
	                    <span class="subheading">Full-Stack Developer | Earth, Milky-Way</span>
	                </div>
	            </div>
	        </div>
	    </div>
	</header>
@stop

@section('content')
	<h2 class="heading">Experience</h2>
	<hr>
	<section class="entry">
		<h3 class="title">Instructors Assistant</h3>
		<h4 class="city">San Antonio, TX</h4>
		<h5 class="date">October 2015 - Current 2016</h5>
		<h4 class="employer">Codeup Bootcamp</h4>
		<ul class="duties">
			<li>Mentor - Guide Current student body</li>
			<li>Cirriculum && Resource management, under staff guidance</li>
			<li>Organization && lead additional study halls && hackathons</li>
			<li>Push and Pull updates && feature additions to Codeup web Portal<li/>
		</ul>
	</section>
	<section class="entry">
		<h3 class="title">Web && Database Developer</h3>
		<h4 class="city">San Antonio, TX</h4>
		<h5 class="date">October 2015 - Current 2016</h5>
		<h4 class="employer">San Antonio Pets Alive!</h4>
		<ul class="duties">
			<li>Created and oversaw restructuring of old SQL database</li>
			<li>General management of webportal && community engagement</li>
			<li>Management of shelter api's and extended api usage</li>
		</ul>
	</section>
	<section class="entry">
		<h3 class="title">Programming Bootcamp Student</h3>
		<h4 class="city">San Antonio, TX</h4>
		<h5 class="date">June 2015 - October 2015</h5>
		<h4 class="employer">Codeup Bootcamp</h4>
		<ul class="duties">
			<li>Built full-stack, data-driven web applications</li>
			<li>Developed for web using Laravel MVC framework</li>
			<li>Practiced Agile Development in team and solo projects</li>
		</ul>
	</section>
	<section class="entry">
		<h3 class="title">Boulevardier Bartender</h3>
		<h4 class="city">San Antonio, TX</h4>
		<h5 class="date">February 2011 - November 2014</h5>
		<h4 class="employer">Boulevardier</h4>
		<ul class="duties">
			<li>Opened && opperated multiple Bar programs under guidance of Boulevardier group</li>
			<li>??</li>
			<li>??</li>
			<li>??</li>
		</ul>
	</section>
	<hr>
	<h2 class="heading">Education</h2>
	<hr>
	<section class="entry">
		<h3 class="title">San Antonio College</h3>
		<h4 class="city">San Antonio, TX</h4>
		<h5 class="date">June 2009 - June 2011</h5>
		<h4 class="employer">Associate of Arts</h4>
		<p class="duties">Humanities</p>
	</section>
	<section class="entry">
		<h3 class="title">Harvard Extension</h3>
		<h4 class="city">Web Portal, Earth</h4>
		<h5 class="date">June 2012 - June 2014</h5>
		<h4 class="employer">Bachelor of Arts</h4>
		<p class="duties">Computer Science - Humanities</p>
	</section>
	<hr>
	<h2 class="heading">Activities & Interests</h2>
	<hr>
	<section class="entry">
		<h3 class="title">Mentor</h3>
		<h4 class="city">San Antonio, TX</h4>
		<h5 class="date">August 2015</h5>
		<h4 class="employer">Trinity University</h4>
		<p class="duties">SoHacks 2 Coding Marathon</p>
	</section>
	<section class="entry">
		<h3 class="title">Musician</h3>
		<h4 class="city">Anaheim, CA</h4>
		<h5 class="date">Fall 2001 - Current 2016</h5>
		<h4 class="employer">Strings - Keys - Percussion</h4>
		<p class="duties">Composition - Digital/Analog Recording</p>
	</section>
	<section class="entry">
		<h3 class="title">Student Government</h3>
		<h4 class="city">San Antonio, TX</h4>
		<h5 class="date">2009 - 2011</h5>
		<h4 class="employer">San Antonio College</h4>
		<p class="duties">Student Body Treasurer - Student Activity Commitee Lead - Black Student Alliance President</p>
	</section>
@stop
