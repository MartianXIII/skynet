@extends('layouts.master')

@section('head')
    @section('title')
        Contact Mars Martian
    @stop
@stop

@section('header')
    <!-- Page Header -->
    <header class="intro-header" style="background-image: url('img/blog_contact.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>Get at Me Ya'll</h1>
                        <hr class="small">
                        <span class="subheading">Questions? Concerns? Inquisitries? Simple Exquisities?</span>
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
                <p>If you would prefer to contact me here as opposed to Twitter - Email - or Whatever - Then fill this out below to message me and I'll get back to you in the Future! The fuuuuuuutureee ~~~~~</p>
                <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
                <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
                <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
                {{ Form::open(array('action' => 'MeController@emailMe', 'class' => 'form-horizontal', 'id' => 'createPost')) }}
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name" id="name" name="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Email Address</label>
                            <input type="email" class="form-control" placeholder="Email Address" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Words of Wisdom(message)</label>
                            <textarea rows="5" class="form-control" placeholder="Words of Wisdom(Message)" id="message" name="message" required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-send"></span>
                                Send
                            </button>
                        </div>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@stop
