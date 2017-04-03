<?php
#defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="icon" href="img/p.png">
    <title>Welcome to Mentorship-Portal</title>
    <link rel='stylesheet' href='../css/social_icon.css'>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Generic page styles -->
    <style type="text/css">
        body{

            font-family: Century gothic;
        }

        @media only screen and (max-width:769px){
            #mentor_reg{
                margin-left: 0px;
            }

        }

        #bg {
            height: 400px;
            width: 100%;
            background-size:100% 100%;
        }
        #nav {
            position: relative;
            top: 20px;

        }
        #quotes {
            width: 60px;
            height: 60px;
        }

        #box2 {
            padding: 10px;
            min-height: 240px;
            text-align: center;
            background:rgba(255,255,255,.5);
            position: relative;
            margin-left:10px;
            box-shadow: 0px 0px 4px #777;
        }
        div.al {
            padding: 10px;
            background:rgba(255,255,255,.75);
            position: relative;
            margin:2px auto;
            text-align:justify;
            box-shadow: 0px 0px 15px #777;
            border-radius:7px;
        }
        div.all {
            padding: 10px;
            background:rgba(255,255,255,.75);
            position: relative;
            margin:2px auto;
            text-align:justify;
            box-shadow: 0px 0px 10px #777;
        }
        #logo
        {
            margin: 0 0 0 0 ;
            padding: 0 0 0 0 ;
        }
        #register
        {
            padding: 0 0 10px 0;
            width: 100%;
        }
        #register-btn
        {
            width: 100%;
            line-height: 40px;
            font-size: 20px;
            color:black;
            border-color: black;
        }
        #register-form
        {
            position: relative;
            top: -20px;
        }
        .logo{
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .white{
            color: white;
        }
        .jumbotron {
            text-align: center;
            background-color: transparent;
        }
        .container a{
            color: black;
        }
        .collapse {
            text-align: justify;
        }
        .well {
            /*background-color: transparent;*/
        }
        .list-group-item {
            /*background-color: transparent;*/
        }
        #menu3 {
            background-color: #87CEFA;
            border-radius:10px;
        }
        .abc {
            text-align: center;
            min-height: 670px;

        }
        .abc a {
            text-decoration: none;
            color: white;
            opacity:;

        }
        .abc hr{
            color: black;
            opacity: 0.8;
        }

        #circle{
            padding-top: 40px;
            height: 120px;
            width: 120px;
            border-radius:50%;
            border-width: 3px;
            border-style: solid;
            border-color: grey;
            background-color: grey;
            color:white;
        }

        .para-right{
            padding:0px 200px 0px 50px
        }

        .para-left{
            padding:0px 50px 0px 200px
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0;
        }
        .nav_list{
            font-size: 1.2em;
            text-align: right;
            padding: 0px;
            margin: 0;
        }
        .navbar-inverse .navbar-nav>li>a{
            color: #2f4c73;
            border-radius: .2em;
        }
        .navbar-inverse .navbar-nav>li>a:hover{
            background-color: #2f4c73;
            color: white;
            transition: .4s;
        }
        @media only screen and (max-width:950px){

            .navbar-collapse.collapse{
                display: none!important;
            }
        }

        .card{
            box-shadow: 0 4px 5px 0 rgba(0, 0, 0, 0.2), 0 4px 11px 0 rgba(0, 0, 0, 0.19);
        }
        .card:hover{
            box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.2), 0 8px 22px 0 rgba(0, 0, 0, 0.19);
        }

        optgroup[label="Core Fields"]{
            font-size: 2em;
        }

        @media screen and (min-width: 400px) {

            .modal-dialog {
                width: 80%; /* New width for default modal */
            }
            .modal-sm {
                width: 80%; /* New width for small modal */
            }
        }

        @media screen and (min-width: 992px) {
            .modal-lg {
                width: 950px; /* New width for large modal */
            }
        }



    </style>
</head>
<body>

<div style="background-color: white;height: 90px;border-color:#2f4c73;" class="navbar navbar-inverse navbar-fixed-top" role="navigation">

    <div class="navbar-header">
        <button style="display: none" type="button" class="navbar-toggle " data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a style="padding: 0px;margin-left: 0px" class="navbar-brand" href="#"><img height="93" src="../img/samp_logo.png" alt=""></a>
    </div>
    <div id="nav_pc" style="margin-top: 1.4em" class="collapse navbar-collapse">

        <ul style=" margin-right: 10px"  class="nav navbar-nav navbar-right ">

            <li class="nav_list"><a href="../">Home</a></li>
            <li class="nav_list"><a href="#contact">Contact us</a></li>
            <li class="nav_list"><a href="../index.php/faq">FAQs</a></li>
        </ul>

    </div>
</div>

<!-- </div> <br> <br><center><div class="" style="width: 90%"><center><h2 id="testimonials"> <br> <br> Testimonials
            </h2><hr>

        <div class="row">
            <div class="col l4"></div>

        </div>


        </center></div></center>

-->

<div style="width: 80%;margin-left: 15em">

    <center><h2 id="testimonials"><br> <br> <br> Icebreaker</h2></center>
    <hr>

    <div class="row" >
        <div class="col-md-8">
            <img src="../img/a.png" alt="" id="quotes" />

            <p style="font-size: 25px">   It was wonderful. My mentor was very friendly and interactive. He suggested me to mail or call him any time if I need any guidance. I definitely plan to have a lot of future interactions with him and make the best out of his lifetime of experience.
                <br>
                <img src="../img/b.png" alt="" id="quotes" class="pull-right" />


            </p>
        </div>

        <div class="col-md-4" >	<br><br><img src="../img/rajarshi.jpg" class="img img-circle" width="200px" height="200px">
            <br><br>	<b style="position:relative;left:60px;">Rajarshi Saha</b>
        </div>
    </div><hr>
    <div class="row">
        <div class="col-md-8">
            <img src="../img/a.png" alt="" id="quotes" />
            <p style="font-size: 25px">  It was great. Talking to someone with so much of experience (20+ years in the industry) always clears up your doubts and definitely helps in making future choices. My mentor was very humble and helpful. Thank you, Students' Alumni Cell for connecting me to him. <br>
                <img src="../img/b.png" alt="" id="quotes" class="pull-right" />


            </p></div>

        <div class="col-md-4"><br><img src="../img/vaishal.jpg" class="img img-circle"  width="200px" height="200px"><br><br><b style="position:relative;left:60px;">Vaishal Shah</b></div>
    </div><hr>
    <div class="row">
        <div class="col-md-8">
            <img src="../img/a.png" alt="" id="quotes" />
            <p style="font-size: 25px">My mentor is very experienced. He shared with me the detailed intricacies of a successful life, how important it is to follow your passion and continue what you love alongside your career.  It was a wonderful experience and I look forward to learning a lot from him.<br>
                <img src="../img/b.png" alt="" id="quotes" class="pull-right" />
            </p>
        </div>

        <div class="col-md-4"><img src="../img/siddharth.jpg" class="img img-circle" width="200px" height="200px"><br><br><b style="position:relative;left:60px;">Siddharth Jindal</b></div>
        </p>
    </div>
    <hr>
    <div class="col-md-8">
        <img src="../img/a.png" alt="" id="quotes" />

        <p style="font-size: 25px">
            It was nice and up to my expectations. Most of my doubts and confusions about my future plans became clear and I got some great insights related to my goals.
            <br>
            <img src="../img/b.png" alt="" id="quotes" class="pull-right" />


        </p>
    </div>

    <div class="col-md-4" >	<br><br><img src="../img/jithin.jpg" class="img img-circle" width="200px" height="200px">
        <br><br>	<b style="position:relative;left:60px;">Jithin Sukumar</b>
    </div>
    <hr>
    <div class="col-md-8">
        <img src="../img/a.png" alt="" id="quotes" />

        <p style="font-size: 25px">
            Ice Breaker was really great. My mentor and I shared a whole lot of things. He was really very helpful and told me to keep in touch and even update him with my progress.
            <br>
            <img src="../img/b.png" alt="" id="quotes" class="pull-right" />


        </p>
    </div>

    <div class="col-md-4" >	<br><br><img src="../img/sudutt.jpg" class="img img-circle" width="200px" height="200px">
        <br><br>	<b style="position:relative;left:60px;">Sudutt Uday Harne</b>
    </div>
</div>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br><br>
<footer style="background-color:black; color:white; text-align:center; padding:10px; position:relative; bottom:0px; width:100%">&copy; Students' Alumni Cell, IIT Kharagpur
    <ul class="soc">
        <li><a class="soc-facebook"  href="//www.facebook.com/iitkgp.alumnicell?fref=ts&ref=br_tf" target="_blank"></a></li>
        <li><a class="soc-twitter"   href="//twitter.com/IITKgpAlumni"target="_blank"></a></li>
        <li><a class="soc-linkedin"  href="//www.linkedin.com/edu/school?id=13500&trk=prof-following-school-logo"target="_blank"></a></li>
        <li><a class="soc-youtube soc-icon-last" href="//www.youtube.com/channel/UCtnSs1CT59Rd8L6VlOAxzRA"target="_blank"></a></li>
    </ul>
</footer>

</body>


</html>
