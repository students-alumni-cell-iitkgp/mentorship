<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="utf-8">
 	<link rel="icon" href="img/p.png">
 	<title>Welcome to Mentorship-Portal</title>
 	<link rel='stylesheet' href='css/social_icon.css'>
 
 	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
 	<!-- Generic page styles -->
 	<style type="text/css">
 
    #mentor_reg{
    margin-left: -100px

    }

     @media only screen and (max-width:769px){
   
    #mentor_reg{

     margin-left: 0px;
    
    }


     }
 		::selection { background-color: #E13300; color: white; }
 		::-moz-selection { background-color: #E13300; color: white; }
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

    </style>
 </head>
 <body>
 <div style="background-color: white;height: 90px;border-color:#2f4c73 " class="navbar navbar-inverse navbar-fixed-top" role="navigation">
     <div class="container">
         <div class="navbar-header">
             <button style="display: none" type="button" class="navbar-toggle " data-toggle="collapse" data-target=".navbar-collapse">
                 <span class="sr-only">Toggle navigation</span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
             </button>
             <a style="padding: 0px;margin-left: 0px" class="navbar-brand" href="#"><img height="93" src="img/samp_logo.png" alt=""></a>
         </div>
         <div id="nav_pc" style="margin-top: 1.4em" class="collapse navbar-collapse">
             <button style="background-color:#2f4c73;border: 0px;font-stretch: expanded" onclick="window.open('img/brochure.pdf')"  class="btn btn-danger navbar-btn navbar-right">SAMP Brochure</button>
             <ul style=" margin-right: 10px"  class="nav navbar-nav navbar-right ">

                 <li class="nav_list"><a href="#">Home</a></li>
                 <li class="nav_list"><a href="#testimonials">Testimonials</a></li>
                 <li class="nav_list"><a href="#faq">FAQs</a></li>
                 <li class="nav_list"><a href="#contact">Contact us</a></li>
             </ul>

         </div>
     </div>
 </div>
 <!-- <div class="navbar z-depth-5" style="background-color:white; margin-bottom: 0px;">
      <div class="row" style="margin-top: 5px;width: 99.9%">
          <div class="col-md-3">
              <a href="http://www.sac.iitkgp.ac.in/"><img height="65" src="img/logo2.png" alt=""></a>
          </div>
          
          <div class="col-md-6">
                <h2 style="color: rgb(53,61,72);font-family: 'Open Sans',sans-serif;margin-left: 60px">Student Alumni Mentorship Programme</h2>
          </div>

          <div class="col-md-2">
              <img style="float: right;margin-right: -80px" height="70" src="img/logo1.jpg" alt="">
          </div>
      </div>
     </div>
 -->

 	<div id="bg">
 
 	  <div id="myCarousel" class="carousel slide" data-ride="carousel">
   <!-- Indicators -->
   <ol class="carousel-indicators">
     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
     <!-- <li data-target="#myCarousel" data-slide-to="1"></li> -->
     <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
     <!-- <li data-target="#myCarousel" data-slide-to="3"></li> -->
   </ol>
 
   <!-- Wrapper for slides -->
   <div class="carousel-inner" role="listbox" >
     <div class="item active">
       <img src="img/width.jpg" style="width: 100vw; height: 600px;">
      
     </div>
 
     <!-- <div class="item"> -->
       <!-- <img src="img/mentorslidertwo.jpg" style="width: 100vw; height: 450px;"> -->
       
     <!-- </div> -->
 
     <!-- <div class="item"> -->
       <!-- <img src="img/mentorshipsliderthree.png" style="width: 100vw; height: 450px;"> -->
       
     <!-- </div> -->
 
     <!-- <div class="item"> -->
       <!-- <img src="img/mentorshipsliderfour.jpg"  style="width: 100vw; height: 450px;"> -->
       
     <!-- </div> -->
   </div>
 
 </div>
 	
 </div> <br>
 <hr> <br>
 <br><br><br><br> <br>
 <div class="container-fluid">
 	<hr>
 	<div class="row">

 		
<div class="col-md-2"> </div>
		<div class="col-md-8" style="position:relative;left:25px;">
    <div class="row fluid">
    <div id="mentor_reg" class="col-md-3" align="center" style="" >
    <a data-toggle="modal" href="#registermentor" style="outline: none;">
    <img src="img/ment.png" style="max-width:100px;">
        <h3>Mentor Registration</h3>
      </a> </div>
      <div class="col-md-3" align="center" style="border-right: 1px solid lightgrey;padding-right: 80px;margin-left: 100px">
      <a data-toggle="modal" data-target="#registerstudent">
      <img src="img/mentee.png" style="max-width:100px;">
        <h3>Mentee Registration</h3>
      </a> </div>

		<div style="float: left;" class="col-md-6" align="center">
            <div class="row">
                <h3>LOG IN</h3><br>
                <div class="col-md-12"></div>
                <?php
                $this->load->helper('form');
                $for=array('class' => 'form-horizontal',

                    'method' => 'post',
                    'role' => 'form',
                );
                echo form_open('index.php/login',$for);
                ?>

                <div class="col-md-12">
                    <?php
                    $email1 = array('name' => 'eid' ,
                        'type' => 'email',
                        'class' => 'form-control',
                        'placeholder' => 'Enter Your Email',
                        'required' => 'required' );
                    echo form_input($email1);
                    ?>
                </div>
                <br>
                <br>
                <div class="col-md-12">
                    <?php
                    $pwd = array('name' => 'pass' ,
                        'type' => 'password',
                        'class' => 'form-control',
                        'placeholder' => 'Enter Your Password',
                        'required' => 'required' );
                    echo form_input($pwd);
                    ?>
                </div>
                <br>
                <hr>
                <div class="col-md-2" style="margin-right: 21px;padding-top: -5px;margin-top: -15px;margin-left: 36%">
                    <button  type="submit" class="btn btn-success">Log In</button>
                    </form>
                </div>
            </div>
        </div>


	</div>
      <hr> 
 			<br>
 			<div class="tab-content" style="width:100%">
 				<div id="home" class="tab-pane fade in active">
 					<img src="img/mentorship.jpg" style="position:relative;" width="100%" height="100" class="img img-rounded" />
 					<br/><br/>
                  
 					<h3>About Mentorship Program</h3>
 						The Student Alumni Mentorship programme was started in session 2010-11 by the Students’ Alumni Cell as an initiative to create a platform for the exchange of ideas and experience between the alumni and the current students of IIT Kharagpur.<br><br>
 						With an ocean of possibilities available, students often find it difficult to decide their way out into the future. There are lots of instances where students need  a mentor who can counsel and guide them through. The alumni can improve students' insight into various aspects of life.  Their journey and personal experiences can help the students and motivate them through this pivotal phase of life. Under this programme, we invite our alumni from across the world and from different fields to interact with the students and help them build their network and gain new perspective on the possibilities open to them after graduation.
 					<hr>
 				   <h3>Why choose this program</h3>
 						<h4  style="text-align:center;background-color:	#babfc6;color:white;border-radius:8px;">For Mentors</h4>
 						<p>As a successful member of the IIT Kharagpur alumni community, you have the power to inspire, motivate, and support IIT KGP students. Your knowledge, experience, and insight will help students open their eyes to the opportunities and challenges they will face after graduation.
 
 							When you serve as a mentor, you form meaningful, rewarding relationships that prepare students to be better employees and leaders, inspire them to stay connected with IIT Kharagpur, and motivate them to support the next generation of students. Mentors help perpetuate, grow, and strengthen IIT Kharagpur’s global alumni network.
 						</p>
 						<h4 style="text-align:center;background-color:	#babfc6;color:white;border-radius:8px;">For Mentees</h4>
 						<p>Mentees can expect to receive guidance to help them navigate various career options, learn invaluable skills for professional development and make new contacts expand their network.
 
 							Mentors and students form supportive relationships built on the shared experience of the KGP way of life, and connect one-on-one in a relaxed, informal way. It’s a valuable relationship that serves as an important complement to your classroom and action learning experiences, and makes for a richer KGP experience.
 						</p>
            <hr>
 					
 			<h3 id="testimonials">Testimonials</h3>
 					
 						<div class="row" >
 							<div class="col-md-8">
 								<img src="img/a.png" alt="" id="quotes" />
 
 								<p>    Mentorship is crucial for any individual whether a student or professional, and its importance is essential especially during the formative years in college. I signed up for this program with the objective to gain perspective and seek help from our experienced and extremely friendly alumni. His guidance helped me think and understand about the outside world, gain industry knowledge and valuable fundas which helped me perform well in college and outside. They know what is valued more when it comes to the professional world, hence I always prioritized my mentors advice - specifically maintaining a good CGPA. Interacting and keeping in touch with my mentor also helped improving my networking skills and connecting to more people.   
 									<br>
 									<img src="img/b.png" alt="" id="quotes" class="pull-right" />
 
 									
 								</p>
 							</div>
 							
 							<div class="col-md-4" >	<br><br><img src="img/t2.jpg" class="img img-circle" width="200px" height="200px">
 								<br><br>	<b style="position:relative;left:60px;">Ankit Gupta</b>
 							</div>
 						</div><hr>
 						<div class="row">
 							<div class="col-md-8">
 								<img src="img/a.png" alt="" id="quotes" />
 								<p>      The Alumni Student mentorship program is a nice initiative by the Students’ Alumni Cell. In today’s time a direction and support from an esteemed mentor can go a long way in helping someone. It was a great experience for me as I got to learn a lot from my mentor who provided me with insight into the world after college as well as their experience as a student and in the professional sphere. Getting mentorship from an Alumni is a great thing as they can provide better help as they have been a part of the same institution as you."
 									<br>
 									<img src="img/b.png" alt="" id="quotes" class="pull-right" />
 
 									
 								</p></div>
 								
 								<div class="col-md-4"><br><img src="img/t3.jpg" class="img img-circle"  width="200px" height="200px"><br><br><b style="position:relative;left:60px;">Pranshu Agrawal</b></div>
 							</div><hr>
 							<div class="row">
 								<div class="col-md-8">
 									<img src="img/a.png" alt="" id="quotes" />
 									<p>The Student Alumni Mentorship Programme is probably one of the best
 										initiatives taken by our institution in recent years. Through my
 										association with it, I can only say that although the path was clear for
 										me, it was dark. My mentor came in the form a torchlight.
 										<br>
 										<img src="img/b.png" alt="" id="quotes" class="pull-right" />	
 									</p>
 								</div>
 								
 								<div class="col-md-4"><img src="img/t1.jpg" class="img img-circle" width="200px" height="200px"><br><br><b style="position:relative;left:60px;">Gobind Singh</b></div>
 							</p>
 						</div>
 					</div>
 				</div>
        <hr>

 						<h3 id="faq" >Frequently Asked Questions</h3> <br>
 							
 
 						<div class="row">
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
 												•	Refine your coaching and mentoring skills.
 											</li>
 											<li class="list-group-item">
 												•	Develop meaningful connections with students. 
 											</li>
 											<li class="list-group-item">
 												•	Learn about the KGP of today and the next generation.
 											</li>
 											<li class="list-group-item">
 												•	Experience a reconnection with your Alma Mater. 
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
 												•	Build a professional network 
 											</li>
 											<li class="list-group-item">
 												•	Develop and enhance professional and communication skills 
 											</li>
 											<li class="list-group-item">
 												•	Connect academics and career; acquire advice on experiences and courses that would be of greatest benefit 
 											</li>
 											<li class="list-group-item">
 												•	Explore new ideas and areas of interest 
 											</li>
 											<li class="list-group-item">
 												•	Gain exposure to career options, advice and job search tips 
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
 												•	Spend at least two hours per month building the mentoring relationship 
 											</li>
 											<li class="list-group-item">
 												•	Make the first contact with the selected mentor and respond to all communication 
 											</li>
 											<li class="list-group-item">
 												•	Set specific goals for the mentoring relationship with mentor 
 											</li>
 											<li class="list-group-item">
 												•	Agree and commit to expectations and goals set with the mentor 
 											</li>
 											<li class="list-group-item">
 												•	Be appropriate in their requests of their mentor, in particular, in NOT asking for a job or sponsorship
 											</li>
 											<li class="list-group-item">
 												•	Approach the mentoring relationship with an open mind, professionalism and respect 
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
 												•	Both the mentee and the mentor register for the program through an online form .
 											</li>
 											<li class="list-group-item">
 												•	Based on the preferences filled in the form and factors like place, year and grades, Mentors are allotted to the mentees on the basis of a predefined code.
 											</li>
 											<li class="list-group-item">
 												•	There can be situations where the mentor is not allotted any mentee or vice versa due to the preferences made, in such a case the mentor would be notified through an email and the allotment shall then be done manually.
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
 												•	We advise you to connect with your mentee through social networking platforms.
 											</li>
 											<li class="list-group-item">
 												•	Have few informal sessions with your mentee for ice breaking.
 											</li>
 											<li class="list-group-item">
 												•	If the mentee does not respond to your conversations do write to us.
 											</li>
 											<li class="list-group-item">
 												•	Your feedback is our prime critic, do respond to our feedback forms to make this program a success.
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
 						</div> <hr>
 
 				<h3 id="contact">Contact Us</h3>
 				
 	<div align="center">

 		<h2>Students' Alumni Cell</h2>
 		<h3>Office of Alumni Affairs & International Relations</h3>
 		<p>Indian Institute of Technology, Kharagpur</p>
 		<p>West Bengal, India. Pin :- 721302</p>
 		<!-- <p>Email: aao@hijli.iitkgp.ernet.in</p> -->
 		<p>Phone: +91-3222-281860</p>
 		<!-- <p>Email: mentorship@adm.iitkgp.ernet.in</p> -->
 		<p>In case of any suggestions or query please feel free to write to us at <a href="mailto: mentorship@adm.iitkgp.ernet.in">mentorship@adm.iitkgp.ernet.in</a></p>
 	</div>
          <a href="http://www.sac.iitkgp.ac.in/team.php" target="_blank" class="btn btn-success btn-block">
 									View Complete Team
 								</a>
 							

 							<br/>
 							
 							<div class="row">
 

 								<div class="col-md-4" style="font:bold 15px Calibri; text-align:center">
 									Vaibhav Chauhan<br>vaibhavchauhan612@gmail.com <br>+918145844393</div>
 
 									
 									<div class="col-md-4" style="font:bold 15px Calibri; text-align:center">
 										Mridul Pant <br>mridul2010@gmail.com<br>+919933935867</div>	
 									
 								<div class="col-md-4" style="position:relative;font:bold 15px Calibri; text-align:center">
 								Shruti Sagar<br>shruti.sagar.iitkgp@gmail.com  <br>+919933952668 </div> </div>
 							
  </div> </div> </div> 

 <br>
 <footer style="background-color:black; color:white; text-align:center; padding:10px; position:relative; bottom:0px; width:100%">&copy; Students' Alumni Cell, IIT Kharagpur
 	<ul class="soc">
 		<li><a class="soc-facebook"  href="//www.facebook.com/iitkgp.alumnicell?fref=ts&ref=br_tf" target="_blank"></a></li>
 		<li><a class="soc-twitter"   href="//twitter.com/IITKgpAlumni"target="_blank"></a></li>
 		<li><a class="soc-linkedin"  href="//www.linkedin.com/edu/school?id=13500&trk=prof-following-school-logo"target="_blank"></a></li>
 		<li><a class="soc-youtube soc-icon-last" href="//www.youtube.com/channel/UCtnSs1CT59Rd8L6VlOAxzRA"target="_blank"></a></li>
 	</ul>
 </footer>
 <div class="modal fade" id="registerstudent" role="dialog">
 	<div class="modal-dialog">
 
 		<!-- Modal content-->
 		<div class="modal-content">
 			<div class="modal-header">
 				<button type="button" class="close" data-dismiss="modal">&times;</button>
 				<h4 class="modal-title" style="text-align:center;">Register Here</h4>
 			</div>
 			<div class="modal-body">
 				<?php
 				$this->load->helper('form');
 				$a = array('class'=>'form-horizontal',
 					'method'=>'post',
 					'role'=>'form');
 				echo form_open('http://www.mentorship.iitkgp.ernet.in/index.php/users',$a);					

 				?>
 				<div class="form-group">
 					<div class="col-sm-12">
 						<?php
 						$fname = array('name' => 'name' ,
 							'class' => 'form-control',
 							'placeholder' => 'Enter Your Name',
 							'required' => 'required' );
 						echo form_input($fname);
 						?>
 					</div>
 
 
 
 				</div>
 
 				<div class="form-group">
 					<div class="col-sm-12">
 						<?php
 						$femail = array('name' => 'email' ,
 							'type' => 'email',
 							'class' => 'form-control',
 							'placeholder' => 'Enter Your Email',
 							'required' => 'required' );
 						echo form_input($femail);
 						?>
 					</div>
 
 
 
 				</div>
 				<div class="form-group">
 					<div class="col-sm-12">
 						<?php
 						$fpass = array('name' => 'password' ,
 							'class' => 'form-control',
 							'placeholder' => 'Enter Your Password',
 							'type' => 'password',
 							'required' => 'required' );
 						echo form_input($fpass);
 						?>
 					</div>
 
 
 
 				</div>
 			<!--
 			<div class="form-group">
 				<div class="col-sm-12">
 					<?php/*
 					$fp = array('name' => 'password1' ,
 						'class' => 'form-control',
 						'placeholder' => 'Enter Your Password Again',
 						'type' => 'password' );
 					echo form_input($fp);
 					*/?>
 				</div>
 			</div>
 		-->
 		<div class="form-group">
 			<div class="col-sm-12">
 				<select name='department' class='form-control' >
 					<option value='0'>Select Your Department</option>
 					<option value="AE">Aerospace Engineering</option>
 					<option value="AG">Agricultural & Food Engineering</option>
 					<option value="AR">Architecture & Regional Planning</option>
 					<option value="BT">Biotechnology</option>
 					<option value="CE">Civil Engineering</option>
 					<option value="CH">Chemical Engineering</option>
 					<option value="CS">Computer Science & Engineering</option>
 					<option value="CY">Chemistry</option>
 					<option value="EE">Electrical Engineering</option>
 					<option value="EC">Electronics & Electrical Communication Engineering</option>
 					<option value="GG">Geology & Geophysics</option>
 					<option value="HS">Humanities & Social Sciences</option>
 					<option value="IM">Industrial & Systems Engineering</option>
 					<option value="MA">Mathematics</option>
 					<option value="ME">Mechanical Engineering</option>
 					<option value="MT">Metallurgical & Materials Engineering</option>
 					<option value="MI">Mining Engineering</option>
 					<option value="NA">Ocean Engineering & Naval Architecture</option>
 					<option value="PH">Physics</option>
 					<option value="ATDC">Advanced Techology Development Center</option>
 					<option value="CET">Center for Educational Technology</option>
 					<option value=CYE"">Cryogenic Engineering</option>
 					<option value="MS">Materials Science</option>
 					<option value="ORALS">Oceans, Rivers, Atmosphere and Land Sciences</option>
 					<option value="CBE">P K Sinha Centre for Bio Energy</option>
 					<option value="REC">Reliability Engineering Centre</option>
 					<option value="RTC">Rubber Technology Centre</option>
 					<option value="RDC">Rural Development Centre</option>
 					<option value="GSSST">G S Sanyal School of Telecommunications</option>
 					<option value="IT">Information Technology</option>
 					<option value="RMSEE">Rajendra Mishra School of Engineering Entrepreneurship</option>
 					<option value="RGSIPL">Rajiv Gandhi School of Intellectual Property Law</option>
 					<option value="MST">Medical Science & Technology</option>
 					<option value="SB">School of Bioscience</option>
 					<option value="SEST">School of Environment Science and Technology</option>
 					<option value="SES">School of Energy Science</option>
 					<option value="SNST">School of Nano-Science and Technology</option>
 					<option value="SWS">School of Water Resources</option>
 					<option value="VGSOM">Vinod Gupta School of Management</option>
 
 				</select>	
 			</div>
 
 
 
 		</div>
 		<div class="form-group">
 			<div class="col-sm-12">
 				<select name='hall' class='form-control'>
 					<option value='0'>Select Your Hall</option>
 					<option value="SAM">Ashutosh Mukherjee  Hall</option>
 					<option value="AZ">Azad  Hall</option>
 					<option value="BCR">B C Roy  Hall</option>
 					<option value="BRAH">B R Ambedkar  Hall</option>
 					<option value="GH">Gokhale  Hall</option>
 					<option value="HJB">Homi Bhabha  Hall</option>
 					<option value="JCB">J C Bose  Hall</option>
 					<option value="LLR">Lala Lajpat Rai  Hall</option>
 					<option value="LBS">Lalbahadur Sastry  Hall</option>
 					<option value="MMM">Madan Mohan Malviya  Hall</option>
 					<option value="MS">Megnad Saha  Hall</option>
 					<option value="MT">Mother Teresa  Hall</option>
 					<option value="NH">Nehru  Hall</option>
 					<option value="PT">Patel  Hall</option>
 					<option value="RK">Radha Krishnan  Hall</option>
 					<option value="RP">Rajendra Prasad  Hall</option>
 					<option value="RLB">Rani Laxmibai  Hall</option>
 					<option value="SN">Sarojini Naidu / Indira Gandhi  Hall</option>
 					<option value="VS">Vidyasagar  Hall</option>
 					<option value="ZH">Zakir Hussain  Hall</option>
 				</select>					
 			</div>
 
 			<!--div class="form-group">
 				<div class="col-sm-12">
 					<?php
 					$fb = array(
 						'name' => '',
 						'class' => 'form-control',
 						'type' => 'submit',
 						'value' => 'Submit'
 						 );
 					echo form_button($fb);
 					?>
 				</div>	
 			</div-->
 			<?php //echo form_close(); 
 			?>
 
 		</div> 
 		<div id="">
 			<div class="form-group">
 				<div class="col-sm-12">
 					<?php
 					$froll = array('name' => 'roll' ,
 						'class' => 'form-control',
 						'placeholder' => 'Enter Your Roll',
 						'required' => 'required' );
 					echo form_input($froll);
 					?>
 				</div>
 
 
 
 			</div>
 			<div class="form-group">
 				<div class="col-sm-12">
 					<?php
 					$fcg = array('name' => 'cgpa' ,
 						'class' => 'form-control',
 						'type' => 'decimal',
 						'placeholder' => 'Enter Your Cgpa',
 						'required' => 'required' );
 					echo form_input($fcg);
 					?>
 				</div>
 
 
 
 			</div>
 			<div class="form-group">
 				<div class="col-sm-12">
 					<?php 
 					$fphone = array('name' => 'phone',
 						'class' => 'form-control',
 						'placeholder' => 'Enter Your Phone No.',
 						'type' => 'number',
 
 						'required' => 'required');
 					echo form_input($fphone);
 					?>
 				</div>
 			</div>
 
 			<div class="form-group">
 				<div class="col-sm-12">
 					<?php /*
 					$fcad = array('name' => 'current',
 						'class' => 'form-control',
 						'placeholder' => 'Enter Your Current Academic Year');
 					echo form_input($fcad);
 					*/?>
 					<select name='current' class='form-control'>
 						<option value='-1'>Choose your Current Academic Year</option>
 						<option value='1'>1</option>
 						<option value='2'>2</option>
 						<option value='3'>3</option>
 						<option value='4'>4</option>
 						<option value='5'>5</option>
 						<option value='6'>6</option>
 					</select>	
 				</div>
 
 			</div>
 			<div class="form-group">
 				<div class="col-sm-12">
 					<br>
 					<?php
 					$question1 = array('name' => 'q1',
 						'class' => 'form-control',
 						'placeholder' => 'What is the most important thing you wish to know from your mentor ?',
 						'required' => 'required');
 					echo form_input($question1);
 					echo '<br>';
 					$question2 = array('name' => 'q2',
 						'class' => 'form-control',
 						'placeholder' => 'What do you want to be done to facilitate mentorship for you?',
 						'required' => 'required');
 					echo form_input($question2);
 					?>
 				</div>
 			</div>
 			<div class="form-group" >
 				<div class="col-sm-12" >
 					<h4>In which field do you want to  be Mentored?</h4>
 					<select name='pref1' class='form-control'>
 					<option value='-1'>Choose your 1st Preference</option>
            <option value='1'>Aerospace Engineering</option>
            <option value='2'>Agricultural & Food Engineering</option>
            <option value='3'>Architecture & Regional Planning</option>
            <option value='4'>Banking & Finance</option>
            <option value='5'>Biotechnology</option>
            <option value='6'>Civil Engineering</option>
            <option value='7'>Chemical Engineering</option>
            <option value='8'>Civil Services</option>
            <option value='9'>Computer Science & Engineering</option>
            <option value='10'>Management Consultancy</option>
            <option value='11'>Chemistry</option>
            <option value='12'>Electrical Engineering</option>
            <option value='13'>Electronics & Electrical Communication Engineering</option>
            <option value='23'>Entrepreneurship</option>
            <option value='14'>Geology & Geophysics</option>
            <option value='15'>Humanities & Social Sciences</option>
            <option value='16'>Industrial & Systems Engineering</option>
            <option value='17'>Mathematics</option>
            <option value='18'>Mechanical Engineering</option>
            <option value='19'>Metallurgical & Materials Engineering</option>
            <option value='20'>Mining Engineering</option>
            <option value='21'>Ocean Engineering & Naval Architecture</option>
            <option value='22'>Physics</option>
            <option value='23'>Data Analytics</option>
            <option value='24'>Software Development</option>

 					</select>
 				</div>
 			</div>
 			<div class="form-group">
 				<div class="col-sm-12">
 					<select name='pref2' class='form-control'>
 						<option value='-1'>Choose your 2nd Preference</option>

            <option value='1'>Aerospace Engineering</option>
            <option value='2'>Agricultural & Food Engineering</option>
            <option value='3'>Architecture & Regional Planning</option>
            <option value='4'>Banking & Finance</option>
            <option value='5'>Biotechnology</option>
            <option value='6'>Civil Engineering</option>
            <option value='7'>Chemical Engineering</option>
            <option value='8'>Civil Services</option>
            <option value='9'>Computer Science & Engineering</option>
            <option value='10'>Management Consultancy</option>
            <option value='11'>Chemistry</option>
            <option value='12'>Electrical Engineering</option>
            <option value='13'>Electronics & Electrical Communication Engineering</option>
            <option value='23'>Entrepreneurship</option>
            <option value='14'>Geology & Geophysics</option>
            <option value='15'>Humanities & Social Sciences</option>
            <option value='16'>Industrial & Systems Engineering</option>
            <option value='17'>Mathematics</option>
            <option value='18'>Mechanical Engineering</option>
            <option value='19'>Metallurgical & Materials Engineering</option>
            <option value='20'>Mining Engineering</option>
            <option value='21'>Ocean Engineering & Naval Architecture</option>
            <option value='22'>Physics</option>
            <option value='23'>Data Analytics</option>
            <option value='24'>Software Development</option>

 					</select>
 				</div>
 			</div>
 			<div class="form-group">
 				<div class="col-sm-12">
 					<select name='pref3' class='form-control'>
 						 <option value='-1'>Choose your 3rd Preference</option>
            <option value='1'>Aerospace Engineering</option>
            <option value='2'>Agricultural & Food Engineering</option>
            <option value='3'>Architecture & Regional Planning</option>
            <option value='4'>Banking & Finance</option>
            <option value='5'>Biotechnology</option>
            <option value='6'>Civil Engineering</option>
            <option value='7'>Chemical Engineering</option>
            <option value='8'>Civil Services</option>
            <option value='9'>Computer Science & Engineering</option>
            <option value='10'>Management Consultancy</option>
            <option value='11'>Chemistry</option>
            <option value='12'>Electrical Engineering</option>
            <option value='13'>Electronics & Electrical Communication Engineering</option>
            <option value='23'>Entrepreneurship</option>
            <option value='14'>Geology & Geophysics</option>
            <option value='15'>Humanities & Social Sciences</option>
            <option value='16'>Industrial & Systems Engineering</option>
            <option value='17'>Mathematics</option>
            <option value='18'>Mechanical Engineering</option>
            <option value='19'>Metallurgical & Materials Engineering</option>
            <option value='20'>Mining Engineering</option>
            <option value='21'>Ocean Engineering & Naval Architecture</option>
            <option value='22'>Physics</option>
            <option value='23'>Data Analytics</option>
            <option value='24'>Software Development</option>

 					</select>
 				</div>
 			</div>
 		</div>
 		
 		<div class="form-group"	>	
 			<div class="col-sm-12">		
 				<button   name="sub1" style="width:100%" class="btn btn-lg btn-success" >Submit</button>		
 			</div>			
 		</div>
 
 	</form>
 </div>
 <div class="modal-footer">
 	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
 </div>
 </div>
 
 </div>
 </div>
 <div class="modal fade" id="registermentor" role="dialog">
 	<div class="modal-dialog">
 
 		<!-- Modal content-->
 		<div class="modal-content">
 			<div class="modal-header">
 				<button type="button" class="close" data-dismiss="modal">&times;</button>
 				<h4 class="modal-title" style="text-align:center;">Register  Here</h4>
 			</div>
 			<div class="modal-body">
 
 				<?php
 				$this->load->helper('form');
 				$a = array('class'=>'form-horizontal',
 					'method'=>'post',
 					'role'=>'form');

 				echo form_open('http://www.mentorship.iitkgp.ernet.in/index.php/users',$a);					
 				?>
 				<div class="form-group">
 					<div class="col-sm-12">
 						<?php
 						$fname = array('name' => 'name' ,
 							'class' => 'form-control',
 							'placeholder' => 'Enter Your Name',
 							'required' => 'required' );
 						echo form_input($fname);
 						?>
 					</div>
 
 
 
 				</div>
 
 				<div class="form-group">
 					<div class="col-sm-12">
 						<?php
 						$femail = array('name' => 'email' ,
 							'type' => 'email',
 							'class' => 'form-control',
 							'placeholder' => 'Enter Your Email',
 							'required' => 'required' );
 						echo form_input($femail);
 						?>
 					</div>
 
 
 
 				</div>
 				<div class="form-group">
 					<div class="col-sm-12">
 						<?php
 						$fpass = array('name' => 'password' ,
 							'class' => 'form-control',
 							'placeholder' => 'Enter Your Password',
 							'type' => 'password',
 							'required' => 'required' );
 						echo form_input($fpass);
 						?>
 					</div>
 
 
 
 				</div>
 			<!--
 			<div class="form-group">
 				<div class="col-sm-12">
 					<?php/*
 					$fp = array('name' => 'password1' ,
 						'class' => 'form-control',
 						'placeholder' => 'Enter Your Password Again',
 						'type' => 'password' );
 					echo form_input($fp);
 					*/?>
 				</div>
 			</div>
 		-->
 		<div class="form-group">
 			<div class="col-sm-12">
 				<select name='department' class='form-control'>
 					<option value='0'>Select Your Department</option>
 					<option value="AE">Aerospace Engineering</option>
 					<option value="AG">Agricultural & Food Engineering</option>
 					<option value="AR">Architecture & Regional Planning</option>
 					<option value="BT">Biotechnology</option>
 					<option value="CE">Civil Engineering</option>
 					<option value="CH">Chemical Engineering</option>
 					<option value="CS">Computer Science & Engineering</option>
 					<option value="CY">Chemistry</option>
 					<option value="EE">Electrical Engineering</option>
 					<option value="EC">Electronics & Electrical Communication Engineering</option>
 					<option value="GG">Geology & Geophysics</option>
 					<option value="HS">Humanities & Social Sciences</option>
 					<option value="IM">Industrial & Systems Engineering</option>
 					<option value="MA">Mathematics</option>
 					<option value="ME">Mechanical Engineering</option>
 					<option value="MT">Metallurgical & Materials Engineering</option>
 					<option value="MI">Mining Engineering</option>
 					<option value="NA">Ocean Engineering & Naval Architecture</option>
 					<option value="PH">Physics</option>
 					<option value="ATDC">Advanced Techology Development Center</option>
 					<option value="CET">Center for Educational Technology</option>
 					<option value="CYE">Cryogenic Engineering</option>
 					<option value="MS">Materials Science</option>
 					<option value="ORALS">Oceans, Rivers, Atmosphere and Land Sciences</option>
 					<option value="CBE">P K Sinha Centre for Bio Energy</option>
 					<option value="REC">Reliability Engineering Centre</option>
 					<option value="RTC">Rubber Technology Centre</option>
 					<option value="RDC">Rural Development Centre</option>
 					<option value="GSSST">G S Sanyal School of Telecommunications</option>
 					<option value="IT">Information Technology</option>
 					<option value="RMSEE">Rajendra Mishra School of Engineering Entrepreneurship</option>
 					<option value="RGSIPL">Rajiv Gandhi School of Intellectual Property Law</option>
 					<option value="MST">Medical Science & Technology</option>
 					<option value="SB">School of Bioscience</option>
 					<option value="SEST">School of Environment Science and Technology</option>
 					<option value="SES">School of Energy Science</option>
 					<option value="SNST">School of Nano-Science and Technology</option>
 					<option value="SWS">School of Water Resources</option>
 					<option value="VGSOM">Vinod Gupta School of Management</option>
 
 				</select>	
 			</div>
 
 
 
 		</div>
 
 		<div id="f2" style="">
 			<div class="form-group">
 				<div class="col-sm-12">
 					<?php 
 					$fpasout = array('name' => 'pout',
 						'class' => 'form-control',
 						'placeholder' => 'Enter Your Year Of Graduation',
 						'required' => 'required');
 					echo form_input($fpasout);
 					?>
 				</div>
 			</div>
 
 			<div class="form-group">
 				<div class="col-sm-3">

 					<h4>Preferred No. Of Mentees</h4>
 				</div>
 				<div class="col-sm-4">
 					<select name='mentee' class="form-control">
 						<option value="1">One</option>
 						<option value="2">Two</option>
 						<option value="3">Three</option>
 						<option value="4">Four</option>
 					</select>
 				</div>
 			</div>
 			<h4>In which field do you want to Mentor in?</h4>
 			<div class="form-group">
 				<div class="col-sm-12">
 					<select name='pref1' class='form-control'>
 						<option value='-1'>Choose your 1st Preference</option>
 						<option value='1'>Aerospace Engineering</option>
 						<option value='2'>Agricultural & Food Engineering</option>
 						<option value='3'>Architecture & Regional Planning</option>
 						<option value='4'>Banking & Finance</option>
 						<option value='5'>Biotechnology</option>
 						<option value='6'>Civil Engineering</option>
 						<option value='7'>Chemical Engineering</option>
 						<option value='8'>Civil Services</option>
 						<option value='9'>Computer Science & Engineering</option>
 						<option value='10'>Management Consultancy</option>
 						<option value='11'>Chemistry</option>
 						<option value='12'>Electrical Engineering</option>
 						<option value='13'>Electronics & Electrical Communication Engineering</option>
 						<option value='23'>Entrepreneurship</option>
 						<option value='14'>Geology & Geophysics</option>
 						<option value='15'>Humanities & Social Sciences</option>
 						<option value='16'>Industrial & Systems Engineering</option>
 						<option value='17'>Mathematics</option>
 						<option value='18'>Mechanical Engineering</option>
 						<option value='19'>Metallurgical & Materials Engineering</option>
 						<option value='20'>Mining Engineering</option>
 						<option value='21'>Ocean Engineering & Naval Architecture</option>
 						<option value='22'>Physics</option>
 					</select>
 				</div>
 			</div>
 			<div class="form-group">
 				<div class="col-sm-12">
 					<select  onchange="f1(this)" class='form-control'>
 						<option value='-1'>Do You Want More Preferences</option>
 						<option >Yes</option>
 						<option>No</option>
 					</select>
 				</div>
 			</div>
 			
 			
 			<div id="f1" style="display:none;">
 				<div class="form-group">
 					<div class="col-sm-12">
 						<select name='pref2' class='form-control'>
 							<option value='-1'>Choose your 2nd Preference</option>
 							<option value='1'>Aerospace Engineering</option>
 							<option value='2'>Agricultural & Food Engineering</option>
 							<option value='3'>Architecture & Regional Planning</option>
 							<option value='4'>Banking & Finance</option>
 							<option value='5'>Biotechnology</option>
 							<option value='6'>Civil Engineering</option>
 							<option value='7'>Chemical Engineering</option>
 							<option value='8'>Civil Services</option>
 							<option value='9'>Computer Science & Engineering</option>
 							<option value='10'>Management Consultancy</option>
 							<option value='11'>Chemistry</option>
 							<option value='12'>Electrical Engineering</option>
 							<option value='13'>Electronics & Electrical Communication Engineering</option>
 							<option value='23'>Entrepreneurship</option>
 							<option value='14'>Geology & Geophysics</option>
 							<option value='15'>Humanities & Social Sciences</option>
 							<option value='16'>Industrial & Systems Engineering</option>
 							<option value='17'>Mathematics</option>
 							<option value='18'>Mechanical Engineering</option>
 							<option value='19'>Metallurgical & Materials Engineering</option>
 							<option value='20'>Mining Engineering</option>
 							<option value='21'>Ocean Engineering & Naval Architecture</option>
 							<option value='22'>Physics</option>
 						</select>
 					</div>
 				</div>
 				<div class="form-group">
 					<div class="col-sm-12">
 						<select name='pref3' class='form-control'>
 							<option value='-1'>Choose your 3rd Preference</option>
 							<option value='1'>Aerospace Engineering</option>
 							<option value='2'>Agricultural & Food Engineering</option>
 							<option value='3'>Architecture & Regional Planning</option>
 							<option value='4'>Banking & Finance</option>
 							<option value='5'>Biotechnology</option>
 							<option value='6'>Civil Engineering</option>
 							<option value='7'>Chemical Engineering</option>
 							<option value='8'>Civil Services</option>
 							<option value='9'>Computer Science & Engineering</option>
 							<option value='10'>Management Consultancy</option>
 							<option value='11'>Chemistry</option>
 							<option value='12'>Electrical Engineering</option>
 							<option value='13'>Electronics & Electrical Communication Engineering</option>
 							<option value='23'>Entrepreneurship</option>
 							<option value='14'>Geology & Geophysics</option>
 							<option value='15'>Humanities & Social Sciences</option>
 							<option value='16'>Industrial & Systems Engineering</option>
 							<option value='17'>Mathematics</option>
 							<option value='18'>Mechanical Engineering</option>
 							<option value='19'>Metallurgical & Materials Engineering</option>
 							<option value='20'>Mining Engineering</option>
 							<option value='21'>Ocean Engineering & Naval Architecture</option>
 							<option value='22'>Physics</option>
 						</select>
 					</div>
 				</div>
 			</div>
 			<h3 class="center"> Contact Details </h3>
 			<div class="form-group">
 				<div class="col-sm-12">
 					<?php 
 					$fphone = array('name' => 'phone',
 						'class' => 'form-control',
 						'placeholder' => 'Enter Your Phone No.',
 						'type' =>'number',
 						'required' => 'required');
 					echo form_input($fphone);
 					?>
 				</div>
 			</div>
 			<div class="form-group">
 				<div class="col-sm-12">
 					<?php 
 					$firm = array('name' => 'firm',
 						'class' => 'form-control',
 						'placeholder' => 'Enter Your Organisation');
 					echo form_input($firm);
 					?>
 				</div>
 			</div>
 			<div class="form-group">
 				<div class="col-sm-12">
 					<?php 
 					$fd = array('name' => 'des',
 						'class' => 'form-control',
 						'placeholder' => 'Enter Your Designation');
 					echo form_input($fd);
 					?>
 				</div>
 			</div>
 
 
 		</div>
 		<div class="form-group"	>	
 			<div class="col-sm-12">		
 				<button   name="sub2" style="width:100%" class="btn btn-lg btn-success" >Submit</button>		
 			</div>			
 		</div>
 
 	</form>
 
 </div>
 
 
 <div class="modal-footer">
 	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
 </div>
 
 </div>
 
 </div>
 
 </div>
 
 
 
 
 
 <?php
 if(isset($_GET['err'])) {
 	if($_GET['err']=='user') {
 		echo "<script> alert('Incorrect Username'); </script>";
 	}
 	else if($_GET['err']=='pass') {
 		echo "<script> alert('Incorrect Password'); </script>";
 	}
 }
 ?>
 
 
 <script type="text/javascript">
 	function f1(x){
 		if(x.options[x.selectedIndex].text=="Yes") {
 			document.getElementById("f1").style.display="block";
 		}
 		else {
 			document.getElementById("f1").style.display="none";
 		}
 	}
 	function f2(x){
 		if(x.options[x.selectedIndex].text=="mentor") {
 			document.getElementById("f2").style.display="block";
 		}
 		else {
 			document.getElementById("f2").style.display="none";
 		}
 	}
 
 
 </script>
 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 
 </body>
 

 </html>