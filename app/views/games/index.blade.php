@extends('layouts.master')

@section('head')
    @section('title')
        Mars Martian - Gameover
    @stop
@stop

@section('header')
    <!-- Page Header -->
    <header class="intro-header" style="background-image: url('/img/blog_home.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Game room</h1>
                        <hr class="small">
                        <span class="subheading">are you entertained?</span>
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

                <div class="post-preview">
                    <a href="post">
                        <h2 class="post-title">
                            <a href="{{{ action('GamesController@showSimon') }}}">Simons So Simple - Simon the Simp</a>
                        </h2>
                        <p class="post-subtitle">
                            Simon Says / Simple Simon clone.
                        </p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post">
                        <h2 class="post-title">
                            <a href="{{{ action('GamesController@showWhackAMole') }}}">Game2</a>
                        </h2>
                        <p class="post-subtitle">
                            ???
                        </p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post">
                        <h2 class="post-title">
                            <a href="{{{ action('GamesController@showRolldice') }}}">Game3</a>
                        </h2>
                        <p class="post-subtitle">
                            ???
                        </p>
                </div>
                <hr>
                <div class="post-preview">
                    <a href="post">
                        <h2 class="post-title">
                            <a href="{{{ action('GamesController@sayHello') }}}">Game fow</a>
                        </h2>
                        <p class="post-subtitle">
                            ???
                        </p>
                </div>
            </div>
        </div>
    </div>
@stop
