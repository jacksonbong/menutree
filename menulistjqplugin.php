<?php
// for create ul li based on ul array
	$ul_array = [
					'mywork' => array(
										'testing' => array(
																'testinglayer2',
										
										
										),
										
										'testing2' => array(
																'testinglayer2',
										
										
										),
										
										'testing3' => array(
																'testinglayer2',
										
										
										)
											
									),
									
				   'allwork' => array(
										'testing',
										
										'testing2',
										
										'testing3' 
											
									)
	
	
	
				];
				
				
    //print_r(json_encode($ul_array));



?>
<!--

	author :jackson chai
	date : 5/8/2019
-->

<html>
   <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="menutree.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	    <script type="text/javascript" src="menutree.js"></script>
		<script>
$(document).ready(function (){
    $('nav ul:first-child').menutree({ align: 'horizontal',layer: true , arrowright:"<span class='glyphicon glyphicon-chevron-right' style='float:right;'></span>"}); // , data: <?php echo (json_encode($ul_array)); ?>,target: $('#ulmenulist')
}); 
	//align two optional vertical / horizontal 
	//layer is for css 
	//arrowright is for icon on each layer
	//data object format from backend
   	// target for first ul
		</script>
   </head>
   <body>
    <div class="container" >
	  <header>
	   <nav class="navbar">
			<ul id="ulmenulist">
				<li>
				<a href = "#" >Menu</a>
					<ul>
						   <li>
								<a href='javascript:void(0)'>Testing level 1</a>
									<ul>
										 <li>
											<a href='javascript:void(0)'>Testing level 2</a>
												<ul>
													 <li ><a  href='javascript:void(0)'>Testing level 3</a>
														<ul>
															 <li ><a  href='javascript:void(0)'>Testing level 4</a></li>
															 <li ><a  href='javascript:void(0)'>User List</a></li>
														</ul>
															 
													 </li>
													 <li ><a  href='javascript:void(0)'>User List</a></li>
												</ul>
										 </li>
										 <li><a  href='javascript:void(0)'>In Progress</a></li>
										 <li><a  href='javascript:void(0)'>Lodged</a></li>
									</ul>
						   </li> 
						   <li ><a href='javascript:void(0)'>All Work</a>
									<ul>
										 <li><a  href='javascript:void(0)'>Unassigned Task</a></li>
										 <li><a  href='javascript:void(0)'>!testing</a>
												<ul>
													 <li class ="sub"><a  href='javascript:void(0)'>Unassigned Task</a></li>
													 <li class ="sub"><a  href='javascript:void(0)'>User List</a></li>
												</ul>
										</li>
									</ul>
						  </li> 
						  <li ><a href='javascript:void(0)'>testing</a>
									<ul>
										 <li><a  href='javascript:void(0)'>Create testing</a></li>
										 <li><a  href='javascript:void(0)'>Edit testing</a></li>
										 <li><a  href='javascript:void(0)'>Share testing</a></li>
									</ul>
						  </li> 
						  <li ><a href='javascript:void(0)'>My Message</a>
									<ul>
										 <li><a  href='javascript:void(0)'>Inbox</a></li>
										 <li><a  href='javascript:void(0)'>Trash</a></li>
									</ul>
						  </li> 
						  <li ><a href='javascript:void(0)'>My Profile</a>
									<ul>
										 <li><a  href='javascript:void(0)'>User Profile</a></li>
										 <li><a  href='javascript:void(0)'>Change Password</a></li>
										 <li><a  href='javascript:void(0)'>User Account Request</a></li>
									</ul>
						  </li> 
						  <li ><a href='javascript:void(0)'>My Company</a>
									<ul>
										 <li><a  href='javascript:void(0)'>testing12344 1</a></li>
										 <li><a  href='javascript:void(0)'>testing12344 2</a></li>
										 <li><a  href='javascript:void(0)'>Company Profile</a></li>
									</ul>
						  </li> 
						  <li ><a href='javascript:void(0)'>System Administration</a>
									<ul>
										 <li><a  href='javascript:void(0)'>User Account Setup</a></li>
										 <li><a  href='javascript:void(0)'>User Group Setup</a></li>
									</ul>
						  </li> 
						  <li ><a href='javascript:void(0)'>Reports</a>
								  <ul>
									 <li><a href='javascript:void(0)'>Activity Log</a></li>
									 <li><a href='javascript:void(0)'>Payment Acknowledgement Slip</a>
											<ul>
												 <li ><a  href='javascript:void(0)'>Unassigned Task</a></li>
												 <li ><a  href='javascript:void(0)'>User List</a></li>
											</ul>
									 </li>
									 
								</ul>
						   </li>
						</ul> 
			 </li>	
			  <li><a href="#">Page 1</a></li>
			  <li><a href="#">Page 2</a>
					<ul>
						   <li>
								<a href='javascript:void(0)'>My Work</a>
									<ul>
										 <li>
											<a href='javascript:void(0)'>!testing</a>
												<ul>
													 <li ><a  href='javascript:void(0)'>Unassigned Task</a></li>
													 <li ><a  href='javascript:void(0)'>User List</a></li>
												</ul>
										 </li>
										 <li><a  href='javascript:void(0)'>In Progress</a></li>
										 <li><a  href='javascript:void(0)'>Lodged</a></li>
									</ul>
						   </li> 
						   <li ><a href='javascript:void(0)'>All Work</a>
									<ul>
										 <li><a  href='javascript:void(0)'>Unassigned Task</a></li>
										 <li><a  href='javascript:void(0)'>!testing</a>
												<ul>
													 <li class ="sub"><a  href='javascript:void(0)'>Unassigned Task</a></li>
													 <li class ="sub"><a  href='javascript:void(0)'>User List</a></li>
												</ul>
										</li>
									</ul>
						  </li> 
						  <li ><a href='javascript:void(0)'>testing</a>
									<ul>
										 <li><a  href='javascript:void(0)'>Create testing</a></li>
										 <li><a  href='javascript:void(0)'>Edit testing</a></li>
										 <li><a  href='javascript:void(0)'>Share testing</a></li>
									</ul>
						  </li> 
						  <li ><a href='javascript:void(0)'>My Message</a>
									<ul>
										 <li><a  href='javascript:void(0)'>Inbox</a></li>
										 <li><a  href='javascript:void(0)'>Trash</a></li>
									</ul>
						  </li> 
						  <li ><a href='javascript:void(0)'>My Profile</a>
									<ul>
										 <li><a  href='javascript:void(0)'>User Profile</a></li>
										 <li><a  href='javascript:void(0)'>Change Password</a></li>
										 <li><a  href='javascript:void(0)'>User Account Request</a></li>
									</ul>
						  </li> 
						  <li ><a href='javascript:void(0)'>My Company</a>
									<ul>
										 <li><a  href='javascript:void(0)'>testing12344 1</a></li>
										 <li><a  href='javascript:void(0)'>testing12344 2</a></li>
										 <li><a  href='javascript:void(0)'>Company Profile</a></li>
									</ul>
						  </li> 
						  <li ><a href='javascript:void(0)'>System Administration</a>
									<ul>
										 <li><a  href='javascript:void(0)'>User Account Setup</a></li>
										 <li><a  href='javascript:void(0)'>User Group Setup</a></li>
									</ul>
						  </li> 
						  <li ><a href='javascript:void(0)'>Reports</a>
								  <ul>
									 <li><a href='javascript:void(0)'>Activity Log</a></li>
									 <li><a href='javascript:void(0)'>Payment Acknowledgement Slip</a>
											<ul>
												 <li ><a  href='javascript:void(0)'>Unassigned Task</a></li>
												 <li ><a  href='javascript:void(0)'>User List</a></li>
											</ul>
									 </li>
									 
								</ul>
						   </li>
						</ul> 
			  
			  </li>
			  <li><a href="#">Page 3</a></li>
			 <li><a href="#">Page 4</a>
					<ul>
						   <li>
								<a href='javascript:void(0)'>My Work</a>
									<ul>
										 <li>
											<a href='javascript:void(0)'>!testing</a>
												<ul>
													 <li ><a  href='javascript:void(0)'>Unassigned Task</a></li>
													 <li ><a  href='javascript:void(0)'>User List</a></li>
												</ul>
										 </li>
										 <li><a  href='javascript:void(0)'>In Progress</a></li>
										 <li><a  href='javascript:void(0)'>Lodged</a></li>
									</ul>
						   </li> 
						   <li ><a href='javascript:void(0)'>All Work</a>
									<ul>
										 <li><a  href='javascript:void(0)'>Unassigned Task</a></li>
										 <li><a  href='javascript:void(0)'>!testing</a>
												<ul>
													 <li class ="sub"><a  href='javascript:void(0)'>Unassigned Task</a></li>
													 <li class ="sub"><a  href='javascript:void(0)'>User List</a></li>
												</ul>
										</li>
									</ul>
						  </li> 
						  <li ><a href='javascript:void(0)'>testing</a>
									<ul>
										 <li><a  href='javascript:void(0)'>Create testing</a></li>
										 <li><a  href='javascript:void(0)'>Edit testing</a></li>
										 <li><a  href='javascript:void(0)'>Share testing</a></li>
									</ul>
						  </li> 
						  <li ><a href='javascript:void(0)'>My Message</a>
									<ul>
										 <li><a  href='javascript:void(0)'>Inbox</a></li>
										 <li><a  href='javascript:void(0)'>Trash</a></li>
									</ul>
						  </li> 
						  <li ><a href='javascript:void(0)'>My Profile</a>
									<ul>
										 <li><a  href='javascript:void(0)'>User Profile</a></li>
										 <li><a  href='javascript:void(0)'>Change Password</a></li>
										 <li><a  href='javascript:void(0)'>User Account Request</a></li>
									</ul>
						  </li> 
						  <li ><a href='javascript:void(0)'>My Company</a>
									<ul>
										 <li><a  href='javascript:void(0)'>testing12344 1</a></li>
										 <li><a  href='javascript:void(0)'>testing12344 2</a></li>
										 <li><a  href='javascript:void(0)'>Company Profile</a></li>
									</ul>
						  </li> 
						  <li ><a href='javascript:void(0)'>System Administration</a>
									<ul>
										 <li><a  href='javascript:void(0)'>User Account Setup</a></li>
										 <li><a  href='javascript:void(0)'>User Group Setup</a></li>
									</ul>
						  </li> 
						  <li ><a href='javascript:void(0)'>Reports</a>
								  <ul>
									 <li><a href='javascript:void(0)'>Activity Log</a></li>
									 <li><a href='javascript:void(0)'>Payment Acknowledgement Slip</a>
											<ul>
												 <li ><a  href='javascript:void(0)'>Unassigned Task</a></li>
												 <li ><a  href='javascript:void(0)'>User List</a></li>
											</ul>
									 </li>
									 
								</ul>
						   </li>
						</ul> 
			  
			  </li><li><a href="#">Page 5</a>
					<ul>
						   <li>
								<a href='javascript:void(0)'>My Work</a>
									<ul>
										 <li>
											<a href='javascript:void(0)'>!testing</a>
												<ul>
													 <li ><a  href='javascript:void(0)'>Unassigned Task</a></li>
													 <li ><a  href='javascript:void(0)'>User List</a></li>
												</ul>
										 </li>
										 <li><a  href='javascript:void(0)'>In Progress</a></li>
										 <li><a  href='javascript:void(0)'>Lodged</a></li>
									</ul>
						   </li> 
						   <li ><a href='javascript:void(0)'>All Work</a>
									<ul>
										 <li><a  href='javascript:void(0)'>Unassigned Task</a></li>
										 <li><a  href='javascript:void(0)'>!testing</a>
												<ul>
													 <li class ="sub"><a  href='javascript:void(0)'>Unassigned Task</a></li>
													 <li class ="sub"><a  href='javascript:void(0)'>User List</a></li>
												</ul>
										</li>
									</ul>
						  </li> 
						  <li ><a href='javascript:void(0)'>testing</a>
									<ul>
										 <li><a  href='javascript:void(0)'>Create testing</a></li>
										 <li><a  href='javascript:void(0)'>Edit testing</a></li>
										 <li><a  href='javascript:void(0)'>Share testing</a></li>
									</ul>
						  </li> 
						  <li ><a href='javascript:void(0)'>My Message</a>
									<ul>
										 <li><a  href='javascript:void(0)'>Inbox</a></li>
										 <li><a  href='javascript:void(0)'>Trash</a></li>
									</ul>
						  </li> 
						  <li ><a href='javascript:void(0)'>My Profile</a>
									<ul>
										 <li><a  href='javascript:void(0)'>User Profile</a></li>
										 <li><a  href='javascript:void(0)'>Change Password</a></li>
										 <li><a  href='javascript:void(0)'>User Account Request</a></li>
									</ul>
						  </li> 
						  <li ><a href='javascript:void(0)'>My Company</a>
									<ul>
										 <li><a  href='javascript:void(0)'>testing12344 1</a></li>
										 <li><a  href='javascript:void(0)'>testing12344 2</a></li>
										 <li><a  href='javascript:void(0)'>Company Profile</a></li>
									</ul>
						  </li> 
						  <li ><a href='javascript:void(0)'>System</a>
									<ul>
										 <li><a  href='javascript:void(0)'>User Account Setup</a></li>
										 <li><a  href='javascript:void(0)'>User Group Setup</a></li>
									</ul>
						  </li> 
						  <li ><a href='javascript:void(0)'>Reports</a>
								  <ul>
									 <li><a href='javascript:void(0)'>Activity Log</a></li>
								
								</ul>
						   </li>
						</ul> 
			  
			  </li>
			  
			</ul> 
		</nav>
		</header>
		<div class ="content">
			<p>
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget nisi non sapien iaculis euismod a eget metus. Curabitur in placerat nisl. Phasellus scelerisque consectetur lectus quis commodo. Etiam porta laoreet est ac facilisis. Donec hendrerit ex metus, id placerat risus bibendum eu. Nam dignissim magna eu nisl accumsan viverra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ultrices, augue non efficitur euismod, arcu mauris porttitor turpis, sit amet posuere elit tortor sit amet orci. Vestibulum condimentum, tortor nec tincidunt pharetra, arcu est faucibus est, porttitor faucibus sem magna et nunc. Pellentesque ac ipsum at magna ultricies egestas. Pellentesque at sapien tellus. Integer vestibulum velit ut libero rhoncus condimentum.

	Sed nec purus vitae est tristique facilisis in auctor nibh. Quisque hendrerit velit vel faucibus dapibus. Aliquam eleifend et eros id laoreet. Proin sit amet lectus pharetra, placerat felis quis, iaculis dui. Phasellus consectetur imperdiet massa, at rhoncus ex ultrices quis. Nullam imperdiet tincidunt ante, sit amet sagittis turpis pulvinar non. Phasellus at quam arcu. Nullam dignissim libero ut sodales malesuada. Curabitur vitae rhoncus metus. Curabitur viverra urna sapien, nec porta neque congue accumsan. Fusce quis bibendum mauris. Integer feugiat tempus dolor, in suscipit justo lacinia ut. Proin euismod est sollicitudin efficitur tincidunt. Integer ut turpis varius, venenatis augue at, malesuada sem. Praesent in iaculis mauris, eu tempor nisl.

	Suspendisse sit amet felis ut felis bibendum commodo id at nibh. Nunc pretium varius venenatis. Duis diam nibh, ornare non nisl sed, vehicula auctor tortor. Curabitur ac ligula vitae ex pulvinar iaculis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed venenatis urna commodo, bibendum sem eu, finibus erat. Sed pretium eros felis, eget imperdiet metus vestibulum vitae. Praesent pharetra mi et velit auctor convallis. Sed pulvinar nibh sed eros suscipit vulputate. Maecenas consectetur odio ut odio mollis accumsan. Phasellus libero diam, sagittis sed urna vel, tristique eleifend erat. Aenean et placerat lacus.

	Proin eleifend turpis a arcu efficitur interdum. Donec ultrices quam vel ex porta, ac tempor est gravida. Pellentesque ornare magna quis tortor pretium tempor. Mauris posuere auctor lacinia. Nullam rhoncus pharetra sodales. Proin auctor pharetra purus, vel semper libero dapibus at. Donec rhoncus tristique dui non tincidunt. Fusce lacinia in mi eget tempor. Mauris ac ante dignissim, sodales metus a, euismod sem. Proin condimentum finibus luctus. Curabitur leo velit, malesuada ac aliquam ut, finibus sit amet mauris. Aenean sed mauris euismod, ultrices mauris in, fringilla ligula. Donec porta, sem vel gravida venenatis, elit felis auctor nunc, et ultricies libero nisi non mi.

	Etiam sed felis eget odio gravida rhoncus. In porta tortor quis nunc ultricies placerat. Donec vestibulum vehicula velit. Praesent aliquet tortor id convallis elementum. Nullam eleifend justo et nisi euismod vulputate. Etiam elementum ut libero eget dapibus. Quisque congue erat mi, eget bibendum ipsum mollis efficitur. Phasellus eleifend non felis quis tempus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin imperdiet vehicula pretium. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
		
			</p>
		</div>
  
   </body>
</html>
