<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include 'header.php' ?>

<div class="navBar">
	<ul id="navBar">
		<li value="1"><a href="index.php">   Home    </a></li>
		<li value="0"><a href="press.php">   Press   </a></li>
		<li value="0"><a href="events.php">  Events  </a></li>
		<li value="0"><a href="gallery.php"> Gallery </a></li>
		<li value="0"><a href="contact.php"> Contact </a></li>
	</ul>
	<div id="underline"></div> <!-- underline -->
</div> <!-- navBar -->

<body onload="menuSlider.init('navBar','underline')"> <!---->
	<div id="wrapper">
		<br />
		<div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
				<img src="images/slider/1.png" data-thumb="images/slider/1.png" alt="" data-transition="slideInLeft" title="#caption" />
                <img src="images/slider/2.png" data-thumb="images/slider/2.png" alt="" data-transition="slideInLeft" title="#caption" />
                <img src="images/slider/3.png" data-thumb="images/slider/3.png" alt="" data-transition="slideInLeft" title="#caption" />
                <img src="images/slider/4.png" data-thumb="images/slider/4.png" alt="" data-transition="slideInLeft" title="#caption" />
				<img src="images/slider/5.png" data-thumb="images/slider/5.png" alt="" data-transition="slideInLeft" title="#caption" />
				<img src="images/slider/6.png" data-thumb="images/slider/6.png" alt="" data-transition="slideInLeft" title="#caption" />
				<img src="images/slider/7.png" data-thumb="images/slider/7.png" alt="" data-transition="slideInLeft" title="#caption" />
            </div> <!-- slider -->
            
			<div id="caption" class="nivo-html-caption">
                <p>Click <a href="gallery.php">here</a> to see more pictures.</p>
            </div> <!-- caption -->
        </div> <!-- slider-wrapper theme-default -->
		
		<div id="bodyArea">
				<p>
					EKTheater has been presenting works of machinima theater, pieces in which video game characters are used as puppets, since 2007. 
					Each year, the group presents a classical story or collection of stories using video games. They have performed in various venues 
					including at the ART in Cambridge, MA. The group is comprised of students and alumni of the Pierrepont School in Westport, CT, and 
					is led by Eddie Kim.
				</p>
			
				<br />
			
				<p>
					&quot;...an impressive feat of engineering, coordination, and storytelling...&quot;
				</p>
				
				<p class="floatedRight">
					-The New York Times
				</p>
				
				<br /><br />
		</div> <!-- bodyArea -->
		
		<div id="footer"> 
			<p>Copyright 2013 Tyler Leite</p> 
		<div> <!-- footer -->
	</div> <!-- wrapper -->
	
	<!-- More scripts -->
	<script type="text/javascript" src="scripts/jquery.nivo.slider.js"></script>
	<script type="text/javascript">
	    $(window).load(function() {
		    $('#slider').nivoSlider({
			    pauseTime: 5000
		    });
	    });
	</script>
</body>
</html>
