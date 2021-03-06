@extends('layouts.master')

@section('head')
    <link rel="stylesheet" type="text/css" href="/css/posts_show.css">
@stop

@section('header')
    <!-- Page Header -->
    <header class="intro-header" style="background-image: url('/img/blog_post.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>{{{ $post->title }}}</h1>
                        <h2 class="subheading">{{{ $post->sub_title }}}</h2>
                        <span class="meta">
                            @if ($post->created_at != $post->updated_at)
                                {{{ 'Updated by ' }}}
                            @else
                                {{{ 'Posted by ' }}}
                            @endif

                            <a href="{{{ action('UsersController@show', $post->user->id) }}}">
                                {{{ $post->user->username }}}
                            </a> on {{{ $post->updated_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A') }}}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop

@section('content')
    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div><img src="{{{ $post->img_url }}}"></div>

                    <p>{{ $post->body }}</p>

                    <p>
                        @foreach ($post->tags as $tag)
                            <a class="tags" href="#">
                                <span>#{{{ $tag->name }}}</span>
                            </a>
                        @endforeach
                    </p>

                    <a href="{{{ action('PostsController@index') }}}">
                        <button id="backBtn" class="btn btn-default">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            Back
                        </button>
                    </a>

                    @if(Auth::check() && Auth::id() == $post->user->id)

                    <a href="{{{ action('PostsController@edit', $post->id) }}}">
                        <button class="btn btn-default" id="edit">
                        <span class="glyphicon glyphicon-edit"></span>
                        Edit
                    </button>
                    </a>

                    <button class="btn btn-default" id="delete">
                        <span class="glyphicon glyphicon-remove"></span>
                        Delete
                    </button>

                    @endif

                    <div id="disqus_thread"></div>
                </div>

                {{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE', 'id' => 'formDelete')) }}
                {{ Form::close() }}

            </div>
        </div>
    </article>
@stop

@section('script')
    <script>
        "use strict";
        $(document).ready(function() {
            $('#delete').click(function() {
                var onConfirm = confirm('Are you sure you want to delete this? This action cannot be undone.');

                if(onConfirm) {
                    $('#formDelete').submit();
                }
            })
        });

        /* * * Disqus Script - Commenting * * */

        /* * * CONFIGURATION VARIABLES * * */
        var disqus_shortname = 'marsmartian';

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
@stop
