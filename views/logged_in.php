<?php include('_header.php'); ?>

<?php
echo WORDING_YOU_ARE_LOGGED_IN_AS . $_SESSION['user_name'] . "<br />";
?>
<body class="ui-panel-page-container-a ">
	<div data-role="page" data-theme="a" >
		<div data-role="header" data-position="inline">
		<a href="#optionsPanel" class="ui-btn-left ui-btn ui-btn-inline ui-mini ui-corner-all ui-btn-icon-right ui-icon-gear"></a>
			<h1>UNC BUCKet List</h1>
		</div>
	<div class="ui-content jqm-content" data-theme="a">

	<div >
	
			<div data-role="tabs" id="tabs">
		      <div data-role="navbar">
			    <ul>
			      <li><a href="#profile">Profile</a></li>
			      <li><a href="#tasks" >Tasks</a></li>
			    </ul>
		      </div>
		      <div id="profile"  data-role="content"  >
		      
		      		<div class="ui-body-a ui-body-inherit ui-corner-all" data-inset="true"> 
		      			<h1> &nbsp User Name</h1>
		      			<h3> &nbsp Tasks Complete</h3>
		      			<h3> &nbsp Ammount Donated</h3>

		      		</div>
		      </div>
		      <div id="tasks" >

		        <ul data-role="listview" data-inset="true" data-filter-placeholder="Look up a task" data-filter="true" >
					<li><a href="#task">Attend a show at Memorial Hall</a></li>
					<li><a href="task.php?task=2">Attend TedXUNC</a></li>
					<li><a href="task.php?task=3">Attend the Eve Ball</a></li>
					<li><a href="task.php?task=4">Blueberry Wheat release day at TOPO</a></li>
					<li><a href="task.php?task=5">Brunch at the Carolina Inn</a></li>
					<li><a href="task.php?task=6">Carrboro Farmers Market</a></li>
					<li><a href="task.php?task=7">Climb the Bell Tower on Senior Day</a></li>
					<li><a href="task.php?task=8">Complete a DTH crossword puzzle</a></li>
					<li><a href="task.php?task=9">Cookout at a dorm</a></li>
					<li><a href="task.php?task=10">Crash a student tour</a></li>
					<li><a href="task.php?task=11">Dance Marathon</a></li>
					<li><a href="task.php?task=12">Do a Habitat Build</a></li>
					<li><a href="task.php?task=13">Do the 2 AM walk of shame from Davis to the UL</a></li>
					<li><a href="task.php?task=14">Drink an extra large coffee at the Daily Grind</a></li>
					<li><a href="task.php?task=15">Drink from the Old Well on the first day of classes</a></li>
					<li><a href="task.php?task=16">Duke Botanical Gardens</a></li>
					<li><a href="task.php?task=17">Durham Bulls game</a></li>
					<li><a href="task.php?task=18">Eat lunch at the counter of Sutton’s Drug Store</a></li>
					<li><a href="task.php?task=19">Fall asleep in a couch at Graham Memorial for an inappropriate amount of time</a></li>
					<li><a href="task.php?task=20">Football tailgate</a></li>
					<li><a href="task.php?task=21">Friday on the Front Porch at the Carolina Inn</a></li>
					<li><a href="task.php?task=22">Get a Blue Cup from He’s Not Here</a></li>
					<li><a href="task.php?task=23">Get a kvetch published in the DTH</a></li>
					<li><a href="task.php?task=24">Get covered in paint at the Holi celebration at Polk Place</a></li>
					<li><a href="task.php?task=25">Get ice cream at Maple View Farms in Carrboro</a></li>
					<li><a href="task.php?task=26">Get on the risers for a basketball game</a></li>
					<li><a href="task.php?task=27">Get your picture on the wall of Sutton’s</a></li>
					<li><a href="task.php?task=28">Go hiking</a></li>
					<li><a href="task.php?task=29">Go on the roof of a building on campus</a></li>
					<li><a href="task.php?task=30">Go stargazing in Kenan Stadium</a></li>
					<li><a href="task.php?task=31">Go to a baseball game in the spring</a></li>
					<li><a href="task.php?task=32">Go to a Clef Hangers concert</a></li>
					<li><a href="task.php?task=33">Go to ConvergeNC</a></li>
					<li><a href="task.php?task=34">Go to Duke’s campus wearing a UNC shirt</a></li>
					<li><a href="task.php?task=35">Go to the Carolina Tiger Rescue</a></li>
					<li><a href="task.php?task=36">Go to the Senior Etiquette Dinner</a></li>
					<li><a href="task.php?task=37">Go to Wilson Library and pretend you’re in Hogwarts</a></li>
					<li><a href="task.php?task=38">Go to your favorite professor’s office hours</a></li>
					<li><a href="task.php?task=39">Halloween on Franklin St.</a></li>
					<li><a href="task.php?task=40">Hammock…everywhere</a></li>
					<li><a href="task.php?task=41">Have a picnic in the arboretum</a></li>
					<li><a href="task.php?task=42">Have your picture taken with Rameses</a></li>
					<li><a href="task.php?task=43">Hive five Roy Williams</a></li>
					<li><a href="task.php?task=44">Introduce yourself to Chancellor Folt</a></li>
					<li><a href="task.php?task=45">IP3 for a game</a></li>
					<li><a href="task.php?task=46">Jordan Lake day</a></li>
					<li><a href="task.php?task=47">Karaoke – anywhere.</a></li>
					<li><a href="task.php?task=48">Linda’s Late Night</a></li>
					<li><a href="task.php?task=49">Listen to some bluegrass at Fridays on the Front Porch at the Carolina Inn</a></li>
					<li><a href="task.php?task=50">Make a gingerbread house in the Great Hall during finals</a></li>
					<li><a href="task.php?task=51">Make money by participating in a research study on campus</a></li>
					<li><a href="task.php?task=52">Memorize the words to James Taylor’s “Carolina In My Mind”</a></li>
					<li><a href="task.php?task=53">Merritt’s</a></li>
					<li><a href="task.php?task=54">Morehead Planetarium show</a></li>
					<li><a href="task.php?task=55">Paint a cube in The Pit</a></li>
					<li><a href="task.php?task=56">Paint yourself blue for a football game</a></li>
					<li><a href="task.php?task=57">Participate in Wilson Library Clue</a></li>
					<li><a href="task.php?task=58">Picnic in the Arboretum</a></li>
					<li><a href="task.php?task=59">Picture in front of the Greetings from Chapel Hill sign</a></li>
					<li><a href="task.php?task=60">Pit-sit for a student organization</a></li>
					<li><a href="task.php?task=61">Play basketball in Woolen Gym</a></li>
					<li><a href="task.php?task=62">Play Cards Against Humanity at Zog’s</a></li>
					<li><a href="task.php?task=63">Play in the fountain at Bynum Circle</a></li>
					<li><a href="task.php?task=64">Play racquetball at Fetzer Gym</a></li>
					<li><a href="task.php?task=65">Play volleyball at a sand court</a></li>
					<li><a href="task.php?task=66">Read an issue of each student publicatio</a></li>
					<li><a href="task.php?task=67">Read an issue of the DTH cover to cover</a></li>
					<li><a href="task.php?task=68">Ride a full circle of the P2P route</a></li>
					<li><a href="task.php?task=69">Run or walk a 5k on campus for charity</a></li>
					<li><a href="task.php?task=70">Rush Franklin after beating Dook – and run all the way there from the Dean Dome</a></li>
					<li><a href="task.php?task=71">Saturdays in Saxaphaw</a></li>
					<li><a href="task.php?task=72">See (or participate) in the library streaking during finals</a></li>
					<li><a href="task.php?task=73">See a movie at the Varsity Theater</a></li>
					<li><a href="task.php?task=74">See a movie in the Union</a></li>
					<li><a href="task.php?task=75">See a star show at the Morehead Planetarium</a></li>
					<li><a href="task.php?task=76">Shiki sushi boat</a></li>
					<li><a href="task.php?task=77">Sign your friend up for clubs at Fall Fest – without his or her knowledge</a></li>
					<li><a href="task.php?task=78">Sit on the Davie Poplar bench – with someone else</a></li>
					<li><a href="task.php?task=79">Stand on your feet for 24 hours with UNC Dance Marathon</a></li>
					<li><a href="task.php?task=80">Study at a Carrboro coffee shop</a></li>
					<li><a href="task.php?task=81">Sunrise Biscuit Kitchen</a></li>
					<li><a href="task.php?task=82">Survive LDOC</a></li>
					<li><a href="task.php?task=83">Sutton’s</a></li>
					<li><a href="task.php?task=84">Tailgate for a football game</a></li>
					<li><a href="task.php?task=85">Take a walk across campus early in the morning before anyone else is awake</a></li>
					<li><a href="task.php?task=86">TOPO dance floor with the lights on</a></li>
					<li><a href="task.php?task=87">TOPO distillery tour</a></li>
					<li><a href="task.php?task=88">Visit the basketball museum at the Dean Dome</a></li>
					<li><a href="task.php?task=89">Watch the sun set from the 8th floor of Davis Library</a></li>
					<li><a href="task.php?task=90">Watch the sunrise in Polk Place</a></li>
					<li><a href="task.php?task=91">Weaver Street Sunday</a></li>
					<li><a href="task.php?task=91">Weaver Street Sunday</a></li>
					<li><a href="task.php?task=92">Win Back Bar trivia</a></li>
					<li><a href="task.php?task=93">Ye Olde Waffle Shop</a></li>
		        </ul>
		      </div>
		    </div>
	</div>


        
	</div>
	<div data-role="panel" id="optionsPanel" data-position="left" data-display="overlay" data-theme="a">

        <h3>Settings</h3>
        <div>
    <a href="index.php?logout"><?php echo WORDING_LOGOUT; ?></a>
    <a href="edit.php"><?php echo WORDING_EDIT_USER_DATA; ?></a>
</div>

       		<a href="#popupLogOut" class="ui-shadow ui-btn ui-corner-all" data-rel="popup">Log Out</a>
        <a href="#main" data-rel="close" class="ui-btn ui-shadow ui-corner-all ui-btn-a ui-icon-delete ui-btn-icon-left ui-btn-inline">Close</a>

       
				
					</div> 
					<div data-role="popup" id="popupLogOut" data-theme="a" data-position-to="window" class="ui-corner-all" align="center" ><h3>Are You Sure?</h3>
					<div>
					<a href="#main" data-rel="close" class="ui-btn ui-shadow ui-corner-all ui-btn-a ui-btn-inline">Yes</a>

					<a href="#main" data-rel="close" class="ui-btn ui-shadow ui-corner-all ui-btn-a ui-btn-inline">No</a>
					</div>
					</div>

      

		</div>
  <div data-role="page" id="task" data-theme="a" data-position-to="window" class="ui-corner-all">
		   <div>
		   	 <img border="0" src="BUCKetListLogo.png" alt="Logo" height="20%">
		   	 <div>WHERE AM I?</div>
		   </div>


<?php include('_footer.php'); ?>
