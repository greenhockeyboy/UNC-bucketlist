<?php include('_header.php'); ?>

<div data-role="page" data-theme="a" >
		<div data-role="header" data-position="inline">
			<h1>UNC BUCKet List</h1>
		</div>

		<div data-role="content" data-theme="a" style="text-align: center;" >
			<img border="0" src="BUCKetListLogo.png" alt="Logo" height="50%">

			  <div>
           
                <div><a href="#popupLogin" class="ui-shadow ui-btn ui-corner-all" data-rel="popup">Log in</a></div>
         			<div data-role="popup" id="popupLogin" data-theme="a" data-position-to="window" class="ui-corner-all">
						<form method="post" action="index.php" name="loginform">
    						<label for="user_name"><?php echo WORDING_USERNAME; ?></label>
   							<input id="user_name" type="text" name="user_name" required />
    						<label for="user_password"><?php echo WORDING_PASSWORD; ?></label>
    						<input id="user_password" type="password" name="user_password" autocomplete="off" required />
    						<input type="checkbox" id="user_rememberme" name="user_rememberme" value="1" />
    						<label for="user_rememberme"><?php echo WORDING_REMEMBER_ME; ?></label>
    						<input type="submit" name="login" value="<?php echo WORDING_LOGIN; ?>" />
						</form>

						<a href="register.php"><?php echo WORDING_REGISTER_NEW_ACCOUNT; ?></a>
						<a href="password_reset.php"><?php echo WORDING_FORGOT_MY_PASSWORD; ?></a>	
					</div>
				</div>
					
			
              
                	
                <div><a href="register.php" class="ui-shadow ui-btn ui-corner-all" >Sign Up</a></div>
                  
			
			
			   
                <div><a href="#AboutUs" class="ui-shadow ui-btn ui-corner-all" data-rel="popup">About Us</a></div>
                
                <div data-role="popup" id="AboutUs" data-theme="a" data-position-to="window" class="ui-corner-all">
						
						<div><p>UNC BUCKET LIST BLURB</p></div>
							
						
					</div>
              
            </div>

        
	</div>


<?php include('_footer.php'); ?>
