@extends('layouts.app')
@section('title', 'Home')

@section('content')


    <section id="follow-ticket">
        <div class="follow-ticket">
            <div class="col-md-6">

                <div class="login-area">
                    <div class="login-front">
                        <div>

                            <img width="250" src="{{asset('uploads')}}/{{$settings['logo']}}" alt="logo">
                            <p>
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">


                <a href="{{url('/new/ticket')}}" class="btn btn-default"><button class="btn btn-primary-outline" >Create New Ticket</button></a>


            </div>

        </div>

    </section>
    <hr>
    <div style="background-color: #213C51" class="row">
        <div class="container">
            <div class="col-md-6">

                <center><h1 style="color: #fff; margin-top: 200px;">
                        NDVHS SAHOOLAT

                    </h1>
                    <p style="color: #fff; margin-top: 20px;">
                        Download and register complaints via the app

                    </p>


                    <a href="https://apps.apple.com/us/app/ndvhs-sahoolat/id1554987413">
                        <img width="300" src="http://sahoolat.ndvhs.com/uploads/get_it_on_app_store.png">
                    </a>
                </center>

            </div>
            <div class="col-md-6">
                <img width="500" src="http://sahoolat.ndvhs.com/uploads/iphone_mockup.png">
            </div>
        </div>
    </div>
    <hr>
    <div style="background-color: #213C51" class="row">

        <div class="col-md-6">
            <center>
                <img width="400" src="http://sahoolat.ndvhs.com/uploads/note_10.png">
            </center>
        </div>
        <div class="col-md-6">

            <center><h1 style="color: #fff; margin-top: 200px;">
                    NDVHS SAHOOLAT

                </h1>
                <p style="color: #fff; margin-top: 20px;">
                    Download and register complaints via the app

                </p>


                <a href="sahoolat.apk">
                    <img width="300" src="http://sahoolat.ndvhs.com/uploads/get_it_on_play_store.png">
                </a>
            </center>

        </div>
    </div>
    {{--<section id="login-role">--}}
    {{--<div class="login-role">--}}
    {{--<div class="container">--}}
    {{--<div class="text-area">--}}

    {{--<h1>Try Login With Different Roles</h1>--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-offset-2 col-md-8">--}}
    {{--<div class="row">--}}
    {{--<div class="col-sm-4">--}}
    {{--<div class="login-home-box">--}}
    {{--<h3><i class="fa fa-user"></i> Admin</h3>--}}
    {{--<ul>--}}
    {{--<li>--}}
    {{--<i class="fa fa-user"></i><strong>username:</strong> admin</li>--}}
    {{--<li><i class="fa fa-lock"></i><strong>Password:</strong> 12345678</li>--}}

    {{--</ul>--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--<div class="col-sm-4">--}}
    {{--<div class="login-home-box">--}}
    {{--<h3><i class="fa fa-user"></i> Client</h3>--}}
    {{--<ul>--}}
    {{--<li><i class="fa fa-user"></i><strong>username:</strong> client</li>--}}
    {{--<li><i class="fa fa-lock"></i><strong>Password:</strong> 12345678</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-sm-4">--}}
    {{--<div class="login-home-box">--}}
    {{--<h3><i class="fa fa-user"></i> Staff</h3>--}}
    {{--<ul>--}}
    {{--<li><i class="fa fa-user"></i><strong>username:</strong> staff</li>--}}
    {{--<li><i class="fa fa-lock"></i><strong>Password:</strong> 12345678</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}


    <div class="content faq">
        <div class="container">
            <h1>Search Our FAQ</h1>
            <ul class="nav nav-tabs">
                @foreach($departmetns as $departmetn)
                    <li>
                        <a href="#{{str_replace(' ', '-', strtolower($departmetn)) }}" data-toggle="tab">
                            {{ucwords($departmetn) }} <i class="fa fa-caret-up"></i>
                        </a>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content">
                @foreach($departmetns as $departmetn)
                    <div id="{{str_replace(' ', '-', strtolower($departmetn)) }}" class="tab-pane ">
                        @foreach($faqs as $faq)
                            @if(str_replace(' ', '-', strtolower($faq['departments']['name'])) == str_replace(' ', '-', strtolower($departmetn)))
                                <div class="tab-text">
                                    <a data-toggle="collapse" class="" href="#{{$faq['id']}}">
                                        <i class="fa fa-plus"></i> {{$faq['subject']}}
                                    </a>
                                    <div id="{{$faq['id']}}" class="panel-collapse collapse in">
                                        <p>
                                            {{$faq['description']}}
                                        </p>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop