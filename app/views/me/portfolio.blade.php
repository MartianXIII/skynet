@extends('layouts.master')

@section('head')
    @section('title')
        Mars Martian's Portfolio
    @stop
@stop

@section('header')
	<header class="intro-header" style="background-image: url('/img/blog_portfolio.jpg')">
	    <div class="container">
	        <div class="row">
	            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
	                <div class="site-heading">
	                    <h1 class="portTitle">Projects</h1>
	                    <hr class="small">
	                    <span class="subheading portTitle">The things ive Broken ^^,!</span>
	                </div>
	            </div>
	        </div>
	    </div>
	</header>
@stop

@section('content')
	<div class="container">
		<!-- WikiWorld -->
        <div class="row">
            <div class="col-md-7">
                {{-- <a href="http://.com" target="_blank"> --}}
                    <img class="img-responsive" src="/img/WikiWorld.jpg" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>WikiWorld</h3>
                <h4>The World wide wiki</h4>
                <p>RESTFUL API Mashup - Wikipedia/MediaWiki Api attached to Google Maps allowing user to see all nearby Wikipedia articles. Also takes advantage of Custom Marker Api, Google Places api, and Search Filter.</p>
                <a class="btn btn-default" href="https://github.com/MartianXIII" target="_blank">
                	<span class="glyphicon glyphicon-link"></span>
                	Github
            	</a>
            </div>
        </div>
        <!-- /.row -->

        <hr>
		<!-- Update Project List -->
        {{-- <div class="row">
            <div class="col-md-7">
                <a href="#" target="_blank">
                    <img class="img-responsive" src="/img" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>Project2</h3>
                <h4>Subheader</h4>
                <p>???</p>
                <a class="btn btn-default" href="https://github.com/MartianXIII" target="_blank">
                	<span class="glyphicon glyphicon-link"></span>
                	Github
            	</a>
            </div>
        </div> --}}
        <!-- /.row -->

        <hr>
		<!-- Update Project -->
		{{-- <div class="row">
		    <div class="col-md-6 portfolio-item">
		        <a href="{{{ action('PostsController@index') }}}">
		            <img class="img-responsive" src="/img/" alt="">
		        </a>
		        <h3>
		            <a href="{{{ action('PostsController@index') }}}">Project3</a>
		        </h3>
		        <p>???</p>
		    </div>
		    <div class="col-md-6 portfolio-item">
		            <img class="img-responsive" src="/img/" alt="">
		        <h3>
		            Project3
		        </h3>
		        <p>????<a href="https://github.com/MartianXIII" target="_blank">Github</a>.</p>
		    </div>
		</div> --}}
    <!-- /.row -->

		<hr>

		<!-- Update Games -->
		{{-- <div class="row">
		    <div class="col-md-6 portfolio-item">
		            <img class="img-responsive" src="/img/" alt="">
		        <h3>
		            Project4
		        </h3>
		        <p>???<a href="https://github.com/MartianXIII">???</a>.</p>
		    </div>
		    <div class="col-md-6 portfolio-item">
		        <a href="{{{ action('GamesController@showWhackAMole') }}}">
		            <img class="img-responsive" src="/img/" alt="">
		        </a>
		        <h3>
		            <a href="{{{ action('GamesController@showWhackAMole') }}}">Project</a>
		        </h3>
		        <p>???</p>
		    </div>
		</div> --}}
    <!-- /.row -->

		<hr>

		<!-- Simon & Rolldice -->
		{{-- <div class="row">
		    <div class="col-md-6 portfolio-item">
		        <a href="{{{ action('GamesController@showSimon') }}}">
		            <img class="img-responsive" src="/img/" alt="">
		        </a>
		        <h3>
		            <a href="{{{ action('GamesController@showSimon') }}}">Project</a>
		        </h3>
		        <p>???</p>
		    </div>
		    <div class="col-md-6 portfolio-item">
		        <a href="{{{ action('GamesController@showRolldice') }}}">
		            <img class="img-responsive" src="/img/" alt="">
		        </a>
		        <h3>
		            <a href="{{{ action('GamesController@showRolldice') }}}">Project</a>
		        </h3>
		        <p>???</p>
		    </div>
		</div> --}}
    <!-- /.row -->

		<hr>

		{{-- <!-- Pagination -->
		<div class="row text-center">
		    <div class="col-lg-12">
		        <ul class="pagination">
		            <li>
		                <a href="#">«</a>
		            </li>
		            <li class="active">
		                <a href="#">1</a>
		            </li>
		            <li>
		                <a href="#">2</a>
		            </li>
		            <li>
		                <a href="#">3</a>
		            </li>
		            <li>
		                <a href="#">4</a>
		            </li>
		            <li>
		                <a href="#">5</a>
		            </li>
		            <li>
		                <a href="#">»</a>
		            </li>
		        </ul>
		    </div>
		</div> --}}<!-- /.row -->
	</div>
@stop
