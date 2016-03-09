@extends('layouts.master')

@section('head')
    @section('title')
        Mars Martian - home
    @stop
@stop

@section('header')
    <!-- Page Header -->
    <header class="intro-header" style="background-image: url('/img/blog_home.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Mars Martian</h1>
                        <hr class="small">
                        <span class="subheading">Programmer - Creative Enthusiast</span>
                        <span class="subheading">
                            {{-- <span class="glyphicon glyphicon-wrench"></span>
                            <span class="glyphicon glyphicon-wrench"></span> --}}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop

@section('content')
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                @if(Auth::check() && (Auth::id() == 1))
                <h3>
                    <a class="post-subtitle" href="{{{ action('PostsController@getManage') }}}">
                        Manage Blog
                    </a>
                </h3>
                <hr>
                <h3>
                    <a class="post-subtitle" href="{{{ action('UsersController@getList') }}}">
                        Manage Users
                    </a>
                </h3>
                <hr>
                @endif

                @if(Auth::check())
                <h3>
                    <a class="post-subtitle" href="{{{ action('PostsController@create') }}}">
                        Make Blog Post
                    </a>
                </h3>
                <hr>
                @endif

                <div class="post-preview">
                    <a href="post">
                        <h2 class="post-title">
                            <a href="{{{ action('PostsController@index') }}}">
                                Blog Index
                            </a>
                        </h2>
                        <p class="post-subtitle">
                            Blog!
                        </p>
                </div>
                <hr>

                <div class="post-preview">
                    <a href="post">
                        <h2 class="post-title">
                            <a href="{{{ action('MeController@showPortfolio') }}}">Portfolio</a>
                        </h2>
                        <p class="post-subtitle">
                            Projects!
                        </p>
                </div>
                <hr>

                <div class="post-preview">
                    <a href="post">
                        <h2 class="post-title">
                            <a href="{{{ action('MeController@showAbout') }}}">
                                About Me
                            </a>
                        </h2>
                        <p class="post-subtitle">
                            Here's my
                            <a href="{{{ action('MeController@showResume') }}}">
                                Resume
                            </a>
                            && some other stuff!
                        </p>
                </div>
            </div>
        </div>
    </div>
@stop
