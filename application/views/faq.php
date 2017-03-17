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

 <div class="container-fluid">
    <div class="row" style="text-align:center">
                     <center><h2><br><br>Frequently Asked Questions</h2> <br></center>
                            
 
                        <div class="row" style="padding-left:280px;padding-right:280px">
                            <div class="col-md-6">
                                <div class="">
                                    <a href="#collapseOne" data-toggle="collapse" aria-expanded="false" aria-controls="collapseOne">
                                        Who is an Alumni Mentor?
                                    </a>
 
                                    <hr style="color:black;opacity:0.8;">
 
                                    <div class="collapse well" id="collapseOne">
                                        An Alumni Mentor is a guide, friend and resource who shares her/his  KGP experience to help pave the way for students to succeed at KGP and beyond. A KGP Alumni Mentor derives satisfaction from helping KGP students fulfil their dreams.<br>
                                    </div>
                                </div>
 
                                <div class="">
                                    <a href="#collapseTwo" data-toggle="collapse" aria-controls="collapseTwo" aria-expanded="false">
                                        How Will I Benefit as a Mentor?
                                    </a>
 
                                    <hr>
              
 
                                    <div class="well collapse" id="collapseTwo">
                                        We believe that mentoring will be a positive and enriching experience for you. Specifically,we hope you will:<br>
                                         <br>
                                         <div class="list-group">
                                            <li class="list-group-item">
                                                •   Refine your coaching and mentoring skills.
                                            </li>
                                            <li class="list-group-item">
                                                •   Develop meaningful connections with students. 
                                            </li>
                                            <li class="list-group-item">
                                                •   Learn about the KGP of today and the next generation.
                                            </li>
                                            <li class="list-group-item">
                                                •   Experience a reconnection with your Alma Mater. 
                                            </li>
                                            
                                        </div><!--list-group-item ends -->
 
                                     </div>
                                </div><!--Container12 Ends -->
 
                                <div class="">
                                    <a href="#collapseThree" data-toggle="collapse" aria-controls="collapseThree" aria-expanded="false">
                                        How will the Mentee Benefit?
                                    </a>
 
                                    <hr>
 
                                    <div class="well collapse" id="collapseThree">
                                        Following are some general ways we hope the students will benefit from being in a mentoring relationship:
                                        <div class="list-group">
                                            <li class="list-group-item">
                                                •   Build a professional network 
                                            </li>
                                            <li class="list-group-item">
                                                •   Develop and enhance professional and communication skills 
                                            </li>
                                            <li class="list-group-item">
                                                •   Connect academics and career; acquire advice on experiences and courses that would be of greatest benefit 
                                            </li>
                                            <li class="list-group-item">
                                                •   Explore new ideas and areas of interest 
                                            </li>
                                            <li class="list-group-item">
                                                •   Gain exposure to career options, advice and job search tips 
                                            </li>
                                        </div><!--list-group-item ends -->
                                    </div>
                                </div><!--container13 ends -->
 
                                <div>
                                    <a href="#oneFour" data-toggle="collapse" aria-controls="oneFour" aria-expanded="false">
                                        Role of A Mentor?
                                    </a>
                                    <hr>
                                    <div class="well collapse" id="oneFour">
                                        <div class="list-group">
                                            <li class="list-group-item">
                                                <span class="label label-primary">Motivator:</span> 
                                                Expresses belief and confidence in the mentee’s abilities, and encourages the mentee to try new things.
                                            </li>
                                            <li class="list-group-item">
                                                <span class="label label-info">Resource:</span>
                                                Teaches and advises the mentee on how to make professional contacts, and introduces the mentee to new ideas and own experiences.
                                            </li>
                                            <li class="list-group-item">
                                                <span class="label label-primary">Supporter:</span>
                                                Encourages open and honest dialogue, and listens to and responds to the needs of the mentee.
                                            </li>
                                            <li class="list-group-item">
                                                <span class="label label-success">Coach:</span>
                                                Helps the mentee develop, and work to achieve, realistic and meaningful goals.
                                            </li>
                                        </div><!--list-group ends -->
                                    </div>
                                </div><!--container14 ends -->
 
                            </div><!--col-md-6 ends -->
 
                            <div class="col-md-6">
                                <div class="">
                                    <a href="#collapseFour" data-toggle="collapse" aria-controls="collapseFour" aria-expanded="false">
                                        What is Expected of the Mentee?
                                    </a>
                                    <hr>
                                    <div class="well collapse" id="collapseFour">
                                        Before a student can search for a mentor, they must attend a mandatory orientation in which they are instructed to think about what they want out of a mentoring relationship. They are informed of our expectations, which include:
                                        <div class="list-group">
                                            <li class="list-group-item">
                                                •   Spend at least two hours per month building the mentoring relationship 
                                            </li>
                                            <li class="list-group-item">
                                                •   Make the first contact with the selected mentor and respond to all communication 
                                            </li>
                                            <li class="list-group-item">
                                                •   Set specific goals for the mentoring relationship with mentor 
                                            </li>
                                            <li class="list-group-item">
                                                •   Agree and commit to expectations and goals set with the mentor 
                                            </li>
                                            <li class="list-group-item">
                                                •   Be appropriate in their requests of their mentor, in particular, in NOT asking for a job or sponsorship
                                            </li>
                                            <li class="list-group-item">
                                                •   Approach the mentoring relationship with an open mind, professionalism and respect 
                                            </li>
                                        </div>
                                        <footer>Be receptive to suggestions and feedback </footer>
                                    </div>
                                </div><!--container21 ends -->
 
                                <div class="">
                                    <a href="#collapseFive" data-toggle="collapse" aria-controls="collapseFive" aria-expanded="false">
                                        The Matching process
                                    </a>
                                    <hr>
                                    <div class="well collapse" id="collapseFive">
                                        <div class="list-group">
                                            <li class="list-group-item">
                                                •   Both the mentee and the mentor register for the program through an online form .
                                            </li>
                                            <li class="list-group-item">
                                                •   Based on the preferences filled in the form and factors like place, year and grades, Mentors are allotted to the mentees on the basis of a predefined code.
                                            </li>
                                            <li class="list-group-item">
                                                •   There can be situations where the mentor is not allotted any mentee or vice versa due to the preferences made, in such a case the mentor would be notified through an email and the allotment shall then be done manually.
                                            </li>
                                        </div>
                                    </div>
                                </div><!--container22 ends -->
 
                                <div class="">
                                    <a href="#collapseSixth" data-toggle="collapse" aria-controls="collapseSixth" aria-expanded="false">
                                        <!-- ONCE A MATCH IS MADE -->Once a Match is made
                                    </a>
                                    <hr>
                                    <div class="well collapse" id="collapseSixth">
                                        <div class="list-group">
                                            <li class="list-group-item">
                                                •   We advise you to connect with your mentee through social networking platforms.
                                            </li>
                                            <li class="list-group-item">
                                                •   Have few informal sessions with your mentee for ice breaking.
                                            </li>
                                            <li class="list-group-item">
                                                •   If the mentee does not respond to your conversations do write to us.
                                            </li>
                                            <li class="list-group-item">
                                                •   Your feedback is our prime critic, do respond to our feedback forms to make this program a success.
                                            </li>
                                        </div>
                                    </div>
                                </div><!--container23 -->
 
                                <div>
                                    <a href="#twoFour" data-toggle="collapse" aria-controls="twoFour" aria-expanded="false">
                                        The Mentoring Relationship
                                    </a>
                                    <hr>
                                    <div class="well collapse" id="twoFour">
                                        For mentoring to be successful there must be a reciprocal and comfortable relationship between the mentor and the mentee. Both parties must work to make the relationship successful by being open-minded, respectful and keeping to the expectations they have set for the relationship. Ideally, the mentor-mentee relationship will be a mutually beneficial one, as the mentor learns from the mentee and the mentee from the mentor.
                                    </div>
                                </div><!--container24 ends -->
                            </div><!--col-md-6 ends -->
                        </div>
    <div class="row" style="text-align:center">
        <div class="col-md-12">
            <center><h2><br>How to go about Mentorship Programme?</h2> <br></center>
            <h4><i>"Like all good relationships, mentorship is also a two-way street."</i></h2><br>
        </div>
        <div class="col-md-6 para-left">
            <center>
                <h3 id="circle">Mentee</h3>
                <h3>Don’t ask, "Will you be my mentor"</h3>
                <p>Mentorship relationships start with a mutual connection-and mentors often select mentee based on their performance and potential. So shift your thinking from "If I get a mentor, I’ll excel" to "If I excel, I will get a mentor." You will be allotted alumni mentors whose career path aligns with your goals.</p>
            </center>
        </div>

        <div class="col-md-6 para-right">
            <center>
            <h3 id="circle">Mentor</h3>
            <h3>Mentoring—it’s never too early</h3>
            <p>No matter what stage you’re at in your career, you can mentor a student. If you’re farther along in your career, pay it forward by investing in a student’s just starting out. And if you’re early in your career, find a student who’s coming up behind you or a student who’s interested in your field. Don’t underestimate the value of your input-you may have just been through what they are experiencing.</p>
            </center>
        </div>
    </div>
    <hr width="80%">
    <div class="row" style="text-align:center">
        <div class="col-md-6 para-left">
            <center>
            <h3 id="circle">Mentee</h3>
            <h3 id="sub">Your mentor’s time is valuable-treat it that way</h3>
            <p>Show your mentor you value his/her time by using it wisely. Avoid meeting or calling just to catch up or asking questions you can find answers to yourself. Instead, come to them with thoughtful questions and be ready to discuss real challenges you’re facing. Then listen carefully to their recommendations and report back on your progress.  The mentor is more likely to continue to invest in you if you’re acting on the input—and the impact on your career is visible.</p>
            </center>
        </div>

        <div class="col-md-6 para-right">
            <center>
            <h3 id="circle">Mentor</h3>
            <h3>Invest in your mentee's success</h3>
            <p>Commit time and energy to developing your mentee. Make yourself available and take the time to understand their questions and give them thoughtful and thorough input. Ask your mentee for regular updates. The more you understand his/her progress—and what’s working and what's not, the more effective you can be as a mentor. If the mentee is not using your time wisely, be clear about your expectations and set guidelines for your time together. You'll both benefit from getting into a good rhythm.</p>
            </center>
        </div>
    </div>
    <hr width="80%">
    <div class="row" style="text-align:center">
        <div class="col-md-6 para-left">
            <center>
            <h3 id="circle">Mentee</h3>
            <h3>View feedback as a gift</h3>
            <p>Make sure you don’t fall into the trap of not providing with honest feedback with your mentor. Solicit the feedback whenever you can by asking specific questions like, “How can I improve?” and “What am I not doing that I should be?” The more you ask for and accept their feedback, the faster you’ll learn—and odds are they’ll respect your openness and willingness to grow.</p>
            </center>
        </div>

        <div class="col-md-6 para-right">
            <center>
            <h3 id="circle">Mentor</h3>
            <h3>Give open, honest input-even when it’s hard</h3>
            <p>Direct, actionable feedback is a gift. Look for opportunities to give your mentee specific input for improving performance and learning new skills. Whenever possible, share your input in the moment, when it’s most effective. If you hold back to protect your mentee’s feelings, you’re not helping them. Remember, your honest feedback will help them advance more quickly.</p>
            </center>
        </div>
    </div> <br>
    <footer style="background-color:black; color:white; text-align:center; padding:10px; position:relative; bottom:0px; width:100%">&copy; Students' Alumni Cell, IIT Kharagpur
    <ul class="soc">
        <li><a class="soc-facebook"  href="//www.facebook.com/iitkgp.alumnicell?fref=ts&ref=br_tf" target="_blank"></a></li>
        <li><a class="soc-twitter"   href="//twitter.com/IITKgpAlumni"target="_blank"></a></li>
        <li><a class="soc-linkedin"  href="//www.linkedin.com/edu/school?id=13500&trk=prof-following-school-logo"target="_blank"></a></li>
        <li><a class="soc-youtube soc-icon-last" href="//www.youtube.com/channel/UCtnSs1CT59Rd8L6VlOAxzRA"target="_blank"></a></li>
    </ul>
 </footer>
    </div>
    
 </body>
 

 </html>
