<?php
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
}); //align two optional vertical / horizontal 
	//layer is for css 
	//arrowright is for icon on each layer
	//data object format fromm backend
    // target for first ul
		</script>
   </head>
   <body>
   
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
									 <li><a  href='javascript:void(0)?deal_status_=in_progress'>In Progress</a></li>
									 <li><a  href='javascript:void(0)?deal_status_=lodged'>Lodged</a></li>
								</ul>
					   </li> 
					   <li ><a href='javascript:void(0)'>All Work</a>
								<ul>
									 <li><a  href='javascript:void(0)'>Unassigned Task</a></li>
									 <li><a  href='javascript:void(0)?deal_status_=requisitioned'>!Requisitioned</a>
											<ul>
												 <li class ="sub"><a  href='javascript:void(0)'>Unassigned Task</a></li>
												 <li class ="sub"><a  href='javascript:void(0)'>User List</a></li>
											</ul>
									</li>
								</ul>
					  </li> 
					  <li ><a href='javascript:void(0)'>eCase</a>
								<ul>
									 <li><a  href='javascript:void(0)'>Create eCase</a></li>
									 <li><a  href='javascript:void(0)?action=eCase&retrieve=n'>Edit eCase</a></li>
									 <li><a  href='javascript:void(0)'>Share eCase</a></li>
									 <li><a  href='javascript:void(0)'>Internal Instrument Transfer </a></li>
									 <li><a  href='javascript:void(0)'>External Instrument Transfer </a></li>
									 <li><a  href='javascript:void(0)?type=MS'>Multiple Signing and Payment</a></li>
									 <li><a href='javascript:void(0)'>Physical Submission Slip</a></li>
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
									 <li><a  href='javascript:void(0)?action=AgentSetup&retrieve=n'>Authorised Agent</a></li>
									 <li><a  href='javascript:void(0)?action=GazettedWitness&retrieve=n'>Authorised Witness</a></li>
									 <li><a  href='javascript:void(0)?action=Company'>Company Profile</a></li>
								</ul>
					  </li> 
					  <li ><a href='javascript:void(0)'>System Administration</a>
								<ul>
									 <li><a  href='javascript:void(0)?action=ELPublicUser_&retrieve=Y'>User Account Setup</a></li>
									 <li><a  href='javascript:void(0)?action=UserGroupEL&retrieve=Y'>User Group Setup</a></li>
								</ul>
					  </li> 
					  <li ><a href='javascript:void(0)'>Reports</a>
							  <ul>
								 <li><a href='javascript:void(0)'>Activity Log</a></li>
								 <li><a href='javascript:void(0)?deal_status_=requisitioned'>Payment Acknowledgement Slip</a>
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
										<a href='javascript:void(0)?deal_status_=requisitioned'>!Requisitioned</a>
											<ul>
												 <li ><a  href='javascript:void(0)'>Unassigned Task</a></li>
												 <li ><a  href='javascript:void(0)'>User List</a></li>
											</ul>
									 </li>
									 <li><a  href='javascript:void(0)?deal_status_=in_progress'>In Progress</a></li>
									 <li><a  href='javascript:void(0)?deal_status_=lodged'>Lodged</a></li>
								</ul>
					   </li> 
					   <li ><a href='javascript:void(0)'>All Work</a>
								<ul>
									 <li><a  href='javascript:void(0)'>Unassigned Task</a></li>
									 <li><a  href='javascript:void(0)?deal_status_=requisitioned'>!Requisitioned</a>
											<ul>
												 <li class ="sub"><a  href='javascript:void(0)'>Unassigned Task</a></li>
												 <li class ="sub"><a  href='javascript:void(0)'>User List</a></li>
											</ul>
									</li>
								</ul>
					  </li> 
					  <li ><a href='javascript:void(0)'>eCase</a>
								<ul>
									 <li><a  href='javascript:void(0)'>Create eCase</a></li>
									 <li><a  href='javascript:void(0)?action=eCase&retrieve=n'>Edit eCase</a></li>
									 <li><a  href='javascript:void(0)'>Share eCase</a></li>
									 <li><a  href='javascript:void(0)'>Internal Instrument Transfer </a></li>
									 <li><a  href='javascript:void(0)'>External Instrument Transfer </a></li>
									 <li><a  href='javascript:void(0)?type=MS'>Multiple Signing and Payment</a></li>
									 <li><a href='javascript:void(0)'>Physical Submission Slip</a></li>
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
									 <li><a  href='javascript:void(0)?action=AgentSetup&retrieve=n'>Authorised Agent</a></li>
									 <li><a  href='javascript:void(0)?action=GazettedWitness&retrieve=n'>Authorised Witness</a></li>
									 <li><a  href='javascript:void(0)?action=Company'>Company Profile</a></li>
								</ul>
					  </li> 
					  <li ><a href='javascript:void(0)'>System Administration</a>
								<ul>
									 <li><a  href='javascript:void(0)?action=ELPublicUser_&retrieve=Y'>User Account Setup</a></li>
									 <li><a  href='javascript:void(0)?action=UserGroupEL&retrieve=Y'>User Group Setup</a></li>
								</ul>
					  </li> 
					  <li ><a href='javascript:void(0)'>Reports</a>
							  <ul>
								 <li><a href='javascript:void(0)'>Activity Log</a></li>
								 <li><a href='javascript:void(0)?deal_status_=requisitioned'>Payment Acknowledgement Slip</a>
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
		 
		</ul> 
	</nav>
  
   </body>
</html>
