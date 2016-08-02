<?PHP

require_once("./include/fgcontactform.php");

$formproc = new FGContactForm();


//1. Add email address here.
//You can add more than one receipients, seperate by ,.
$formproc->AddRecipient(''); //<<---Put your email address here


//2. For better security set a random String
$formproc->SetFormRandomKey('CnRrspl1FyEylUj');


if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thank-you.php");
   }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Barton Junior Football Club</title>
        <meta name="keywords" content="Barton Junior Football Club" />
		<meta name="description" content="We are Barton Junior Football club, we cater for boys and girls between the ages of 5 and 16 at our home on Pasture Road, Barton upon Humber. We were the very first football team in our area to obtain the Football Association Charter Standard which we cherish greatly. We are a self-financing and voluntary organisation and have been operating very successfully for over 30 years,
					playing in the local junior football leagues with a fair amount of trophies won through the years." />
		<meta name="Author" content="Damien Johnson D Johnson ¦ Web Design">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="images/favicon.ico">
        
        <!-- Google Web Font Embed -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css'>

    
        <link href="css/style.css"  rel='stylesheet' type='text/css'>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    
    <body>

        <div class="top-bar" id="top">
            <div class="container">
                <div class="subheader">
                    <div id="phone" class="pull-left">
                            <img src="images/phone.png" alt="phone"/>
                            Club Secretary - Vaughan Foster - 01652 635611
                    </div>
                    <div id="email" class="pull-right">
                            <img src="images/email.png" alt="email"/>
                            Pasture Road Playing Fields, Pasture Road, Barton upon Humber, North Lincolnshire, DN18 5HZ.
                    </div>
                </div>
            </div>
        </div>
        <div class="top-menu">
            <div class="container">
                
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                                <a href="#" class="navbar-brand"><img src="images/badgelogo.jpg" alt="Barton Junior Football Club" title="Barton Junior Football Club" /><br /></a>
                        </div>
                        <div class="navbar-collapse collapse" id="nav-bar">
                            <ul class="nav navbar-nav navbar-right" style="margin-top: 40px;">
                                <li class="active"><a href="#top">HOME</a></li>
                                <li><a href="#about">TEAM INFO</a></li>
                                <li><a href="#portfolio">SPONSORS</a></li>
                                <li><a href="#contact">CONTACT & LOCATION</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        
        <div>
           
            <div id="carousel" class="carousel slide" data-ride="carousel">
                
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1></h1>
                                <p></p>
                                
                            </div>
                        </div>
                    </div>
                    
                
                <a class="left carousel-control" href="carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>

        <div class="welcome" id="welcome">
            <div class="container">
                <div class="slogan text-center">
                    <span class="txt_darkgrey"></span><span class="txt_orange">Welcome to the Barton Junior Football Club Website</span>
                    <p class="txt_slogan"><i>We cater for boys and girls between the ages of 5 and 16 at our home on Pasture Road, Barton upon Humber. We are a self-financing and voluntary organisation and have been operating very successfully for over 30 years,
					playing in the local junior football leagues with a fair amount of trophies won through the years. <br /><br />
					
					We were the very first football team in our area to obtain the Football Association Charter Standard which we cherish greatly.<br />
					What does this mean to you as a Parent or Guardian? - Well, all of the worries which you may have had regarding your child are taken care of. Such as, All of our Staff have been CRB Checked and hold approved coaching badges and first
					aid qualifications etc.</i></p>
                </div>	
            </div>
        </div>
        
        <div class="service">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="service-item">
                            <div>
                                <img src="images/rsz_ball.png" alt="icon" />
                                <span class="service-item-header">Training Facilities</span>
                            </div>
                            <p>Our ground has secure changing rooms, floodlit training areas and toilet facilities. <br /> <br />
							Most week nights you will find at least one of our teams training at the ground, whilst at weekends our teams will be competing in their relevant leagues or cup competitions. <br />
							At the end of each season, every player that has trained and played for the club will receive a club trophy at one of the clubs presentation evenings, which are very well attended.</p>
                            <div class="text-center">
                            	
                            </div>
                            <br class="clearfix"/>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="service-item" >
                            <div>
                                <img src="images/rsz_cup.jpg" alt="icon"/>
                                <span class="service-item-header">Fund Raising</span>
                            </div>
							<p>Our ground also boasts a 'tea hut' which will attend to yours and the players needs. <br /><br />
							During the year we also organise fund raising events to ensure such as a giant tombola at the Barton Christmas Festival, raffles and other events to ensure the smooth running. We also have an excellent relationship with local businesses who kindly sponsor our kits.<br /><br />
							<div class="text-center">
											<a href="donation.php" 
										class="btn-read-more btn btn-orange"> MAKE A DONATION</a>
										</div></p>
                            <div class="text-center">
                                
                            </div>
                            <br class="clearfix"/>
                        </div>
                        
                    </div>
                    
                    <div class="col-md-4">
                        <div class="service-item">
                            <div>
                                <img src="images/rsz_car.png" alt="icon"/>
                                <span class="service-item-header">Car Parking Facilities</span>
                            </div>
                            <p>Our latest addition to the ground is the provision of 'on-site' car parking facilities which have been very well received by our users.</p>
                            <div class="text-center">
                                
                            </div>
                            <br class="clearfix"/>
                        </div>
                        <br class="clearfix"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="team" id="about">
            <div class="container">
                <div class="row">
                    <div class="line-header">
                        <div class="text-center">
                            <hr class="team_hr team_hr_left"/><span>TEAM INFO<br /><br/> 2016 / 2017 Season</span>
                            <hr class="team_hr team_hr_right" />
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
                    <ul class="row row_team">
                        <li class="col-lg-3 col-md-3 col-sm-6 ">
                            <div class="text-center">
                                <div class="member-thumb">
                                    <img src="images/teambadge.jpg" class="img-responsive" alt="Barton Juniors" />
                                    <div class="thumb-overlay">
                                        	<div class="text-center">
											<a href="committee.php" 
										class="btn-read-more btn btn-orange"> VIEW TEAM</a>
										</div>
                                    </div>
                                </div>
                                <div class="team-inner">
                                    <p class="team-inner-header">Barton Junior Football Club</p>
                                    <p class="team-inner-subtext">Committee Members</p>
                                </div>
                            </div>
                        </li>
						
						<li class="col-lg-3 col-md-3 col-sm-6 ">
                            <div class="text-center">
                                <div class="member-thumb">
                                    <img src="images/teambadge.jpg" class="img-responsive" alt="Barton Juniors" />
                                    <div class="thumb-overlay">
                                        	<div class="text-center">
											<a href="satclub.php" 
										class="btn-read-more btn btn-orange"> VIEW TEAM</a>
										</div>
                                    </div>
                                </div>
                                <div class="team-inner">
                                    <p class="team-inner-header">Saturday Club</p>
                                    <p class="team-inner-subtext">Manager:<!--Need Someone Here--></p>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-3 col-sm-6 ">
                            <div class="text-center">
                                <div class="member-thumb">
                                    <img src="images/teambadge.jpg" class="img-responsive" alt="Under 7's" />
                                    <div class="thumb-overlay">
                                       	<div class="text-center">
											<a href="under7.php" 
										class="btn-read-more btn btn-orange"> VIEW TEAM</a>
										</div>
                                    </div>
                                </div>
                                <div class="team-inner">
                                    <p class="team-inner-header">Under 7's</p>
                                    <p class="team-inner-subtext">Manager: Dave Roberts</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-3 col-sm-6 ">
                            <div class="text-center">
                                <div class="member-thumb">
                                    <img src="images/u7.png" class="img-responsive" alt="Under 8s" />
                                    <div class="thumb-overlay">
										<div class="text-center">
											<a href="under8.php" 
										class="btn-read-more btn btn-orange"> VIEW TEAM</a>
										</div>
                                    </div>
                                </div>
                                <div class="team-inner">
                                    <p class="team-inner-header">Under 8's</p>
                                    <p class="team-inner-subtext">Manager: Darren Ingram</p>
                                </div>
                            </div>
                        </li>
                        <li class="col-lg-3 col-md-3 col-sm-6 ">
                            <div class="text-center">
                                <div class="member-thumb">
                                    <img src="images/u8team.png" class="img-responsive" alt="Under 9's" />
                                    <div class="thumb-overlay">
                                        <div class="text-center">
                                <a href="under9.php" 
                                	class="btn-read-more btn btn-orange"> VIEW TEAM</a>
								</div>
                           
                                    </div>
                                </div>
                                <div class="team-inner">
                                    <p class="team-inner-header">Under 9's</p>
                                    <p class="team-inner-subtext">Manager: Damien Johnson</p>
                                </div>
                            </div>
                        </li>
						<li class="col-lg-3 col-md-3 col-sm-6 ">
                            <div class="text-center">
                                <div class="member-thumb">
                                    <img src="images/teambadge.jpg" class="img-responsive" alt="Under 10" />
                                    <div class="thumb-overlay">
                                        	<div class="text-center">
											<a href="under10.php" 
										class="btn-read-more btn btn-orange"> VIEW TEAM</a>
										</div>
                                    </div>
                                </div>
                                <div class="team-inner">
                                    <p class="team-inner-header">Under 10's</p>
                                    <p class="team-inner-subtext">Manager: Martin Cox</p>
                                </div>
                            </div>
                        </li>
						<li class="col-lg-3 col-md-3 col-sm-6 ">
                            <div class="text-center">
                                <div class="member-thumb">
                                    <img src="images/u10team.png" class="img-responsive" alt="Under 11" />
                                    <div class="thumb-overlay">
                                        	<div class="text-center">
											<a href="under11.php" 
										class="btn-read-more btn btn-orange"> VIEW TEAM</a>
										</div>
                                    </div>
                                </div>
                                <div class="team-inner">
                                    <p class="team-inner-header">Under 11's</p>
                                    <p class="team-inner-subtext">Manager: Simon Burnett</p>
                                </div>
                            </div>
                        </li>
						<li class="col-lg-3 col-md-3 col-sm-6 ">
                            <div class="text-center">
                                <div class="member-thumb">
                                    <img src="images/u11team.png" class="img-responsive" alt="Under 12" />
                                    <div class="thumb-overlay">
                                        	<div class="text-center">
											<a href="under12.php" 
										class="btn-read-more btn btn-orange"> VIEW TEAM</a>
										</div>
                                    </div>
                                </div>
                                <div class="team-inner">
                                    <p class="team-inner-header">Under 12's</p>
                                    <p class="team-inner-subtext">Manager: Amy Griffiths</p>
                                </div>
                            </div>
                        </li>
						<li class="col-lg-3 col-md-3 col-sm-6 ">
                            <div class="text-center">
                                <div class="member-thumb">
                                    <img src="images/teambadge.jpg" class="img-responsive" alt="Under 12s" />
                                    <div class="thumb-overlay">
                                        	<div class="text-center">
											<a href="under12colts.php" 
										class="btn-read-more btn btn-orange"> VIEW TEAM</a>
										</div>
                                    </div>
                                </div>
                                <div class="team-inner">
                                    <p class="team-inner-header">Under 12 Colts</p>
                                    <p class="team-inner-subtext">Manager: Nik Ward</p>
                                </div>
                            </div>
                        </li>
						<li class="col-lg-3 col-md-3 col-sm-6 ">
                            <div class="text-center">
                                <div class="member-thumb">
                                    <img src="images/teambadge.jpg" class="img-responsive" alt="Under 13s" />
                                    <div class="thumb-overlay">
                                        	<div class="text-center">
											<a href="under13.php" 
										class="btn-read-more btn btn-orange"> VIEW TEAM</a>
										</div>
                                    </div>
                                </div>
                                <div class="team-inner">
                                    <p class="team-inner-header">Under 13's</p>
                                    <p class="team-inner-subtext">Manager: Richard Leech</p>
                                </div>
                            </div>
                        </li>
						<li class="col-lg-3 col-md-3 col-sm-6 ">
                            <div class="text-center">
                                <div class="member-thumb">
                                    <img src="images/teambadge.jpg" class="img-responsive" alt="Under 15s" />
                                    <div class="thumb-overlay">
                                        	<div class="text-center">
											<a href="under15.php" 
										class="btn-read-more btn btn-orange"> VIEW TEAM</a>
										</div>
                                    </div>
                                </div>
                                <div class="team-inner">
                                    <p class="team-inner-header">Under 15's</p>
                                    <p class="team-inner-subtext">Manager: Tim Bell</p>
                                </div>
                            </div>
                        </li>
						<li class="col-lg-3 col-md-3 col-sm-6 ">
                            <div class="text-center">
                                <div class="member-thumb">
                                    <img src="images/teambadge.jpg" class="img-responsive" alt="Under 16s" />
                                    <div class="thumb-overlay">
                                        	<div class="text-center">
											<a href="under16.php" 
										class="btn-read-more btn btn-orange"> VIEW TEAM</a>
										</div>
                                    </div>
                                </div>
                                <div class="team-inner">
                                    <p class="team-inner-header">Under 16's</p>
                                    <p class="team-inner-subtext">Manager: Dave Parker</p>
                                </div>
                            </div>
                        </li>

                    </ul>
            </div>
        </div>

        <div id="portfolio" >
            <div class="container">
                <div class="row">
                    <div class="line-header" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="txt_darkgrey">SPONSORS</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="gallery-category" style="font-size:16px; margin-top:80px;">
                        <div class="text-center">
                            <a>We would like to thank all of our current sponsors for their kind donations</a>							
                        </div>
                    </div>
                </div>


                <div class="clearfix"></div>
                <div class="text-center">
                    <ul class="project-gallery" >
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-graphic" >
                            
                                <div class="project-box">

                                    <img src="images/MADL_logo.jpg" class="img-responsive" alt="Making a difference Locally" />

                                    <div class="project-overlay">
                                        <h5>Making a Difference Locally</h5>
                                        <hr />
                                        <h4>Under 7's</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-creative" >
                            
                                <div class="project-box">
                                    <img src="images/newprime.png" class="img-responsive" alt="New Primebake Barton" />
                                    <div class="project-overlay">
                                        <h5>New Primebake Barton</h5>
                                        <hr />
                                        <h4>Under 8's</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
						<li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-inspiration" >
                            
                                <div class="project-box">
                                    <img src="images/bjuniorssponsor.jpg" class="img-responsive" alt="S Green Services Limited" />
                                    <div class="project-overlay">
                                        <h5>S Green Services Limited</h5>
                                        <hr />
                                        <h4>Under 9's</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-inspiration" >
                            
                                <div class="project-box">
                                    <img src="images/dlphoto.jpg" class="img-responsive" alt="David Lee (Photography) Limited" />
                                    <div class="project-overlay">
                                        <h5>David Lee (Photography) Limited</h5>
                                        <hr />
                                        <h4>Under 10's</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-design" >
                            
                                <div class="project-box">
                                    <img src="images/bjuniorssponsor.jpg" class="img-responsive" alt="Barton Junior Football Club" />
                                    <div class="project-overlay">
                                        <h5>Barton Junior Football Club</h5>
                                        <hr />
                                        <h4>Under 11's</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-inspiration" >
                            
                                <div class="project-box">
                                    <img src="images/u11spon.png" class="img-responsive" alt="Keigar Homes Ltd" />
                                    <div class="project-overlay">
                                        <h5>Keigar Homes Limited</h5>
                                        <hr />
                                        <h4>Under 12's</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="col-lg-2 col-md-2 col-sm-2  gallery gallery-inspiration" >
                            
                                <div class="project-box">
                                    <img src="images/mhsponsor.jpg" class="img-responsive" alt="Mart Hutton Builders Limited" />
                                    <div class="project-overlay">
                                        <h5>Mark Hutton Builders Ltd</h5>
                                        <hr />
                                        <h4>Under 12 Colts</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-design" >
                            
                                <div class="project-box">
                                    <img src="images/mcdonnike.png" class="img-responsive" alt="McDonalds / Nike Kit Scheme" />
                                    <div class="project-overlay">
                                        <h5>McDonalds / Nike</h5>
                                        <hr />
                                        <h4>Under 13's</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-creative" >
                            
                                <div class="project-box">
                                    <img src="images/bjuniorssponsor.jpg" class="img-responsive" alt="Simon Blakey" />
                                    <div class="project-overlay">
                                        <h5>Simon Blakey</h5>
                                        <hr />
                                        <h4>Under 15's</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
                        
                        <li class="col-lg-2 col-md-2 col-sm-2 gallery gallery-graphic" >
                            
                                <div class="project-box">
                                    <img src="images/wren.png" class="img-responsive" alt="Wren Kitchens" />
                                    <div class="project-overlay">
                                        <h5>Wren Kitchens</h5>
                                        <hr />
                                        <h4>Under 16's</h4>
                                    </div>
                                </div>
                            </a>
                        </li>
						
						
                        
                        

                    </ul>
                </div>
                <div class="clearfix"></div>
                <div class="row text-center">
                    <a class="btn_loadmore btn btn-lg btn-orange" href="prevsponsor.php" role="button">Previous Sponsors</a>
                </div>
            </div>
        </div> 

        <div id="contact">
            <div class="container">
                <div class="row">
                    <div class="line-header head_contact">
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="txt_darkgrey">CONTACT US</span>
                            <hr class="team_hr team_hr_right hr_gray"/>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="contact-map" id="map-canvas"> </div>  
                        <div class="clearfix"></div>
                        <i>You can find us at Pasture Road Playing Fields, Barton upon Humber, North Lincolnshire, DN18 5HZ</i>
                    </div>
                    <div class="col-md-4 contact_right">
                        <p>For further information please contact either the team manager directly or the Secretary using the form below.</p>
                        <p><img src="images/location.png" alt="icon 1" /> Secretary & Treasurer - Vaughan Foster</p>
                        <p><img src="images/phone1.png"  alt="icon 2" /> 01652 635611</p>
                        
                        <form class="form-horizontal" action="?php echo $formproc->GetSelfScript();" method="post" accept-charset="UTF-8">
						<input type='hidden' name='submitted' id='submitted' value='1'/>
						<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
						
						<!--<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />-->
						
						
                            <div class="form-group">
							
                            <input type="text" name="name" id= "name" class="form-control" value="<?php echo $formproc->SafeDisplay('name') ?>" placeholder="Your Name..." maxlength="40" />
                            </div>
                            <div class="form-group">
                            <input type="email" name="email" id = "email" class="form-control" value='<?php echo $formproc->SafeDisplay('email') ?>'  placeholder="Your Email..." maxlength="60" />
                            </div>
                            <div class="form-group">
                                <textarea  class="form-control" name="message" id="message" <?php echo $formproc->SafeDisplay('message') ?> style="height: 130px;" placeholder="Write down your message..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-orange pull-right">SEND</button>
                        </form>
                        	
                    </div>
                </div>
            </div>
        </div>


        <div class="tweets">
            <div class="container">
                <div class="row" style="margin-top:20px;">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-1">
                                <img src="images/quote.png" alt="icon" />
                        </div>
                        <div class="col-md-7 tweet_txt" >
                                <a class="twitter-timeline" data-height="250" data-theme="light" href="https://twitter.com/BartonjuniorsFC">Tweets by Barton Junior Football Club</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                        <div class="col-md-2">
                        </div>
                 </div>
            </div>
        </div>

        <div class="partners" >
            <div class="container">
                <div class="row">


                    <div class="line-header" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="txt_darkgrey">OUR PARTNERS</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                    <div class="clearfix"></div>


                    <div class="text-center">

                        <div style="margin-top:60px;">
                            <ul class="list-inline">
                                <li class="col-sm-2 col-md-2 partner-item">
                                    <a href="" target="_blank"></a>
                                </li>
                                <li class="col-sm-2 col-md-2 partner-item">
                                    <a href="http://full-time.thefa.com/Index.do?divisionseason=545566976&league=348508" target="_blank"><img src="images/caparo.jpg" class="img-responsive" alt="Caparo Junior Football League" /></a>
                                </li>
                                <li class="col-sm-2 col-md-2 partner-item">
                                    <a href="http://full-time.thefa.com/ListPublicFixture.do?divisionseason=54858851&league=902160902" target="_blank"><img src="images/jackkal.jpg" class="img-responsive" alt="Jack Kalson Football League" /></a>
                                </li>
                                <li class="col-sm-2 col-md-2 partner-item">
                                    <a href="http://www.lincolnshirefa.com/" target="_blank"><img src="images/lincsfa.png" class="img-responsive" alt="Lincs FA" /></a>
                                </li>
                                <li class="col-sm-2 col-md-2 partner-item">
                                    <a href="http://www.thefa.com/my-football/player/respect"target="_blank"><img src="images/respect.jpg" class="img-responsive" alt="The FA Respect" /></a>
                                </li>
                                <li class="col-sm-2 col-md-2 partner-item">
                                    <a href="#"></a>
                                </li>
                            </ul>

                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="footer" >
            <div class="container">
                <div class="row">
                    <div class="text-center">

                        <div class="footer_container">
                            <ul class="list-inline">
                                
                            <div class="height30"></div>
                            <a class="btn btn-lg btn-orange" href="#" role="button" id="btn-back-to-top">Back To Top</a>
                            <div class="height30"></div>
                        </div>
                        <div class="footer_bottom_content">
                   			<span><a href="" target="_blank">&copy 2016 D Johnson Web Design </a> </span>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"  type="text/javascript"></script>
        <script src="js/stickUp.min.js"  type="text/javascript"></script>
        <script src="js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
        <script src="js/script.js"  type="text/javascript"></script>
		<script type='text/javascript'>
		// <![CDATA[

			var frmvalidator  = new Validator("contactus");
			frmvalidator.EnableOnPageErrorDisplay();
			frmvalidator.EnableMsgsTogether();
			frmvalidator.addValidation("name","req","Please provide your name");

			frmvalidator.addValidation("email","req","Please provide your email address");

			frmvalidator.addValidation("email","email","Please provide a valid email address");

			frmvalidator.addValidation("message","maxlen=3048","The message is too long!");

									
		// ]]>
		</script>
		
    </body>
</html>