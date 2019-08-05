# menutree

You just need menutree.js and menutree.css in your html.And dont forget the jQuery.min.js! Actually, if you don't care about the css style, the menutree.js is enough for you. This menutree.css is used in a project of mine, so it may not suit for you, just change it! Hope you make it more beautiful :)

!!!Ps: I'm a beginner, so my code is not well, please forgive me if my code brings you more problems. :) I'm working hard now! And welcome to commuicate with me, it can make my better ! I will be very happy if you come to me!


Email: bongze9@gmail.com


Start
step1:
js and css

  <link rel="stylesheet" type="text/css" href="menutree.css">
  <script type="text/javascript" src="jquery-3.2.0.min.js"></script>
  <script type="text/javascript" src="menutree.js"></script>
step2:
creat a dom 
<nav class="navbar">
		<ul id="ulmenulist">
    
    </ul>
</nav>
  
or already on dom

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
									 <li><a  href='javascript:void(0)?'>Authorised Agent</a></li>
									 <li><a  href='javascript:void(0)?'>Authorised Witness</a></li>
									 <li><a  href='javascript:void(0)?'>Company Profile</a></li>
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
									 <li><a  href='javascript:void(0)?'>Edit eCase</a></li>
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
									 <li><a  href='javascript:void(0)?'>Authorised Agent</a></li>
									 <li><a  href='javascript:void(0)?'>Authorised Witness</a></li>
									 <li><a  href='javascript:void(0)?'>Company Profile</a></li>
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
		 
		</ul> 
	</nav>
  

step3:
data
//for php 
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
?>
  var data =  <?php echo (json_encode($ul_array)); ?>;
step4:
init
already create on Dom
  $(document).ready(function (){
    $('nav ul:first-child').menutree({ align: 'horizontal',layer: true , arrowright:"<span class='glyphicon glyphicon-chevron-right' style='float:right;'></span>"});
  //align two optional vertical / horizontal 
  //layer is for css 
  //arrowright is for icon on each layer
  //data object format fromm backend
  // target for first ul
    });
    
    or create based on object
    
     $('nav ul:first-child').menutree({ align: 'horizontal',layer: true , arrowright:"<span class='glyphicon glyphicon-chevron-right' style='float:right;'></span>", data: <?php echo (json_encode($ul_array)); ?>,target: $('#ulmenulist')});



