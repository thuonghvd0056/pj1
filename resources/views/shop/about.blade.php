@extends('layouts.master')
@section('title')
    Laravel Shopping Cart
@endsection
@section('slide-show')
    @include('partials.slideshow')
@endsection
@section('content')
    <div class="author-green">
        <div class="info">
            <img src="http://placekitten.com/g/500/500" class="profile" />
            <h2 class="name">Kitten Doe</h2>
            <div class="social">
                <a href="#" class="zocial-facebook"></a>
                <a href="#" class="zocial-twitter"></a>
                <a href="#" class="zocial-googleplus"></a>
            </div>
        </div>
        <div class="about">
            <p class="bio">Cat ipsum dolor sit amet, stare at ceiling. Rub face on everything rub face on everything for whos the baby. Lick butt. Shake treat bag run in circles and whos the baby behind the couch throwup on your pillow. Swat at dog chase mice or claw drapes. Mark territory need to chase tail chew foot, yet hunt anything that moves.</p>
        </div>
    </div>

    <div class="author-turquoise">
        <div class="info">
            <img src="http://placekitten.com/500/500" class="profile" />
            <h2 class="name">Kitten Doe</h2>
            <div class="social">
                <a href="#" class="zocial-facebook"></a>
                <a href="#" class="zocial-twitter"></a>
                <a href="#" class="zocial-googleplus"></a>
            </div>
        </div>
        <div class="about">
            <p class="bio">Shake treat bag leave dead animals as gifts so sun bathe. Missing until dinner time. Shake treat bag play time shake treat bag chase imaginary bugs yet make muffins so chew iPad power cord. Flop over stick butt in face hide when guests come over, flop over for hate dog. Climb leg throwup on your pillow find something else more interesting rub face on everything, yet under the bed attack feet. Leave hair everywhere. Stare at ceiling inspect anything brought into the house, or mark territory but mark territory chew foot need to chase tail sun bathe. Stand in front of the computer screen shake treat bag chew foot climb leg and nap all day sweet beast. Intrigued by the shower flop over, but sweet beast play time nap all day for sun bathe.</p>
        </div>
    </div>

    <div class="author-purple">
        <div class="info">
            <img src="http://placekitten.com/700/700" class="profile" />
            <h2 class="name">Kitten Doe</h2>
        </div>
        <div class="about">
            <p class="bio">Climb leg stick butt in face. Streeeeeeetch climb leg hunt anything that moves sun bathe throwup on your pillow. Give attitude give attitude or chew iPad power cord. Play time behind the couch mark territory chase mice and sun bathe hide when guests come over find something else more interesting. Intently stare at the same spot whos the baby, all of a sudden cat goes crazy.</p>
        </div>
    </div>

    <div class="author-red">
        <div class="info">
            <img src="http://placekitten.com/g/500/500" class="profile" />
            <h2 class="name">Kitten Doe</h2>
        </div>
        <div class="about">
            <p class="bio">Sleep on keyboard cat snacks hide when guests come over find something else more interesting attack feet or rub face on everything for give attitude. Why must they do that rub face on everything chew iPad power cord give attitude.</p>
        </div>
    </div>
    <style>
        @import url(http://weloveiconfonts.com/api/?family=zocial);
        [class*="zocial-"]:before {
            font-family: 'zocial', sans-serif;
            font-syle: normal;
        }
        .author-green {
            border: 1px solid #25a25a;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px;
            background: #2bc06a;
            -webkit-flex-flow: row wrap;
            justify-content: space-around;
        }
        .author-green .info {
            text-align: center;
            align-items: center;
            float: left;
            color: #fff;
            padding-top: 20px;
            flex: 1 100%;
        }
        @media all and (min-width: 600px) {
            .author-green .info {
                flex: 1;
            }
        }
        .author-green .info .name {
            font-weight: 300;
            font-family: 'Open Sans Condensed', sans-serif;
            margin-top: -5px;
        }
        .author-green .info .social {
            margin-top: -23px;
        }
        .author-green .info .social a {
            text-decoration: none;
            color: #40d47e;
            padding: 5px;
        }
        .author-green .info .social a:hover {
            color: #7ee2a8;
        }
        .author-green .info img {
            border-radius: 50%;
            height: 100px;
            width: 100px;
        }
        .author-green .about {
            float: right;
            color: #fff;
            font-family: 'Open Sans', sans-serif;
            background-color: #2ecc71;
            flex: 1 100%;
        }
        @media all and (min-width: 600px) {
            .author-green .about {
                flex: 2;
            }
        }
        .author-green .about .bio {
            padding: 10px;
        }
        .author-green ::-moz-selection {
            background-color: #54d98c;
            color: #fff;
        }
        .author-green ::selection {
            background-color: #54d98c;
            color: #fff;
        }
        .author-turquoise {
            border: 1px solid #148f77;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px;
            background: #18af91;
            -webkit-flex-flow: row wrap;
            justify-content: space-around;
        }
        .author-turquoise .info {
            text-align: center;
            align-items: center;
            float: left;
            color: #fff;
            padding-top: 20px;
            flex: 1 100%;
        }
        @media all and (min-width: 600px) {
            .author-turquoise .info {
                flex: 1;
            }
        }
        .author-turquoise .info .name {
            font-weight: 300;
            font-family: 'Open Sans Condensed', sans-serif;
            margin-top: -5px;
        }
        .author-turquoise .info .social {
            margin-top: -23px;
        }
        .author-turquoise .info .social a {
            text-decoration: none;
            color: #1dd2af;
            padding: 5px;
        }
        .author-turquoise .info .social a:hover {
            color: #55e7ca;
        }
        .author-turquoise .info img {
            border-radius: 50%;
            height: 100px;
            width: 100px;
        }
        .author-turquoise .about {
            float: right;
            color: #fff;
            font-family: 'Open Sans', sans-serif;
            background-color: #1abc9c;
            flex: 1 100%;
        }
        @media all and (min-width: 600px) {
            .author-turquoise .about {
                flex: 2;
            }
        }
        .author-turquoise .about .bio {
            padding: 10px;
        }
        .author-turquoise ::-moz-selection {
            background-color: #28e1bd;
            color: #fff;
        }
        .author-turquoise ::selection {
            background-color: #28e1bd;
            color: #fff;
        }
        .author-purple {
            border: 1px solid #804399;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px;
            background: #954eb1;
            -webkit-flex-flow: row wrap;
            justify-content: space-around;
        }
        .author-purple .info {
            text-align: center;
            align-items: center;
            float: left;
            color: #fff;
            padding-top: 20px;
            flex: 1 100%;
        }
        @media all and (min-width: 600px) {
            .author-purple .info {
                flex: 1;
            }
        }
        .author-purple .info .name {
            font-weight: 300;
            font-family: 'Open Sans Condensed', sans-serif;
            margin-top: -5px;
        }
        .author-purple .info .social {
            margin-top: -23px;
        }
        .author-purple .info .social a {
            text-decoration: none;
            color: #a66bbe;
            padding: 5px;
        }
        .author-purple .info .social a:hover {
            color: #c6a0d5;
        }
        .author-purple .info img {
            border-radius: 50%;
            height: 100px;
            width: 100px;
        }
        .author-purple .about {
            float: right;
            color: #fff;
            font-family: 'Open Sans', sans-serif;
            background-color: #9b59b6;
            flex: 1 100%;
        }
        @media all and (min-width: 600px) {
            .author-purple .about {
                flex: 2;
            }
        }
        .author-purple .about .bio {
            padding: 10px;
        }
        .author-purple ::-moz-selection {
            background-color: #b07cc6;
            color: #fff;
        }
        .author-purple ::selection {
            background-color: #b07cc6;
            color: #fff;
        }
        .author-red {
            border: 1px solid #d62c1a;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px;
            background: #e53f2e;
            -webkit-flex-flow: row wrap;
            justify-content: space-around;
        }
        .author-red .info {
            text-align: center;
            align-items: center;
            float: left;
            color: #fff;
            padding-top: 20px;
            flex: 1 100%;
        }
        @media all and (min-width: 600px) {
            .author-red .info {
                flex: 1;
            }
        }
        .author-red .info .name {
            font-weight: 300;
            font-family: 'Open Sans Condensed', sans-serif;
            margin-top: -5px;
        }
        .author-red .info .social {
            margin-top: -23px;
        }
        .author-red .info .social a {
            text-decoration: none;
            color: #ea6153;
            padding: 5px;
        }
        .author-red .info .social a:hover {
            color: #f29f97;
        }
        .author-red .info img {
            border-radius: 50%;
            height: 100px;
            width: 100px;
        }
        .author-red .about {
            float: right;
            color: #fff;
            font-family: 'Open Sans', sans-serif;
            background-color: #e74c3c;
            flex: 1 100%;
        }
        @media all and (min-width: 600px) {
            .author-red .about {
                flex: 2;
            }
        }
        .author-red .about .bio {
            padding: 10px;
        }
        .author-red ::-moz-selection {
            background-color: #ed7669;
            color: #fff;
        }
        .author-red ::selection {
            background-color: #ed7669;
            color: #fff;
        }
    </style>
@endsection