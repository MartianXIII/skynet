@extends('layouts.master')

@section('head')
    <link rel="stylesheet" type="text/css" href="/css/about.css">
    @section('title')
        About Mars Martian
    @stop
@stop

@section('header')
    <header class="intro-header" style="background-image: url('img/blog_resume.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>¿About?</h1>
                        <hr class="small">
                        <span class="subheading">Who I is.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <h2 class="post-title">Skillset</h2>
                        <a href="{{{ action('MeController@showResume') }}}">
                            <h3 class="post-subtitle">
                                <span class="glyphicon glyphicon-link"></span>
                                Check out my resume.
                            </h3>
                        </a>

                    <h5>PHP</h5>
                    <div class="skill-bar">
                        <div class="skill-rate-on first"></div>
                        <div class="skill-rate-on second"></div>
                        <div class="skill-rate-on third"></div>
                        <div class="skill-rate-off fourth"></div>
                        <div class="skill-rate-off fifth"></div>
                        <div class="skill-rate-off sixth"></div>
                    </div>
                    <hr>

                    <h5>Laravel</h5>
                    <div class="skill-bar">
                        <div class="skill-rate-on first"></div>
                        <div class="skill-rate-on second"></div>
                        <div class="skill-rate-on third"></div>
                        <div class="skill-rate-on fourth"></div>
                        <div class="skill-rate-off fifth"></div>
                        <div class="skill-rate-off sixth"></div>
                    </div>
                    <hr>

                    <h5>MySql/NoSql</h5>
                    <div class="skill-bar">
                        <div class="skill-rate-on first"></div>
                        <div class="skill-rate-on second"></div>
                        <div class="skill-rate-on third"></div>
                        <div class="skill-rate-on fourth"></div>
                        <div class="skill-rate-off fifth"></div>
                        <div class="skill-rate-off sixth"></div>
                    </div>
                    <hr>

                    <h5>Javascript</h5>
                    <div class="skill-bar">
                        <div class="skill-rate-on first"></div>
                        <div class="skill-rate-on second"></div>
                        <div class="skill-rate-on third"></div>
                        <div class="skill-rate-on fourth"></div>
                        <div class="skill-rate-on fifth"></div>
                        <div class="skill-rate-off sixth"></div>
                    </div>
                    <hr>

                    <h5>Node JS</h5>
                    <div class="skill-bar">
                        <div class="skill-rate-on first"></div>
                        <div class="skill-rate-on second"></div>
                        <div class="skill-rate-on third"></div>
                        <div class="skill-rate-on fourth"></div>
                        <div class="skill-rate-on fifth"></div>
                        <div class="skill-rate-off sixth"></div>
                    </div>
                    <hr>

                    <h5>Bash-Unix</h5>
                    <div class="skill-bar">
                        <div class="skill-rate-on first"></div>
                        <div class="skill-rate-on second"></div>
                        <div class="skill-rate-on third"></div>
                        <div class="skill-rate-on fourth"></div>
                        <div class="skill-rate-off fifth"></div>
                        <div class="skill-rate-off sixth"></div>
                    </div>
                    <hr>

                    <h5>HTML5-CSS3</h5>
                    <div class="skill-bar">
                        <div class="skill-rate-on first"></div>
                        <div class="skill-rate-on second"></div>
                        <div class="skill-rate-on third"></div>
                        <div class="skill-rate-on fourth"></div>
                        <div class="skill-rate-on fifth"></div>
                        <div class="skill-rate-off sixth"></div>
                    </div>
                    <hr>

                    <h5>Documentation use</h5>
                    <div class="skill-bar">
                        <div class="skill-rate-on first"></div>
                        <div class="skill-rate-on second"></div>
                        <div class="skill-rate-on third"></div>
                        <div class="skill-rate-on fourth"></div>
                        <div class="skill-rate-on fifth"></div>
                        <div class="skill-rate-on sixth"></div>
                    </div>
                    <hr>
                </div>

                <div class="post-preview">
                    <a href="{{{ action('MeController@showPortfolio') }}}">
                        <h2 class="post-title">
                            Portfolio
                        </h2>
                        <h3 class="post-subtitle">
                            <span class="glyphicon glyphicon-link"></span>
                            The Stuff.
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="/">Mars Martian</a> on January 1, 2016</p>
                </div>
            </div>
        </div>
    </div>
@stop
