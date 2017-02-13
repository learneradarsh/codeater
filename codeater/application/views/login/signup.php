<?=link_tag('assests/css/animate-custom.css', 'stylesheet');?>
<?=link_tag('assests/css/style3.css', 'stylesheet');?>
<?=link_tag('assests/css/demo.css', 'stylesheet');?>
        <div class="container">
            
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
		<?php
		if($this->session->flashdata('password_match_failed')!=null)
		{
		    echo "<div class='alert alert-danger alert-dismissible' role='alert'>
			  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			      <span aria-hidden='true'>&times;</span>
			  </button>
			   <center><strong>Please Enter Same Password</strong></center>
			  </div>";
		}
		else if($this->session->flashdata('login_failed')!=null)
		{
		    echo "<div class='alert alert-danger alert-dismissible' role='alert'>
			  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			      <span aria-hidden='true'>&times;</span>
			  </button>
			   <center><strong>".$this->session->flashdata('login_failed')."</strong></center>
			  </div>";
		}
		else if($this->session->flashdata('errorVerify')!=null)
		{
		    echo "<div class='alert alert-danger alert-dismissible' role='alert'>
			  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			      <span aria-hidden='true'>&times;</span>
			  </button>
			   <center><strong>".$this->session->flashdata('errorVerify')."</strong></center>
			  </div>";
		}

		?>                    
			<div id="wrapper">
                            <div id="register" class="animate form">
                             
	                     <?= form_open('login/do_register','autocomplete = "on"');?>       	    
				<h1> Sign up </h1> 
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u">Your username</label>
                                    <input id="usernamesignup" name="usernamesignup" required="required" type="text" placeholder="UserName" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup" name="emailsignup" required="required" type="email" placeholder="Email"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="passwordsignup" required="required" type="password" placeholder="********"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required="required" type="password" placeholder="********"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" value="Sign up"/> 
								</p>
                                <p class="change_link">  
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            <?= form_close();?>
                        </div>

                        <div id="login" class="animate form">
                            <?= form_open('login/do_login','autocomplete = "on"');?>  
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="UserName"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="********" /> 
                                </p>
                                <p class="keeplogin"> 
                                    <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
                                    <label for="loginkeeping">Keep me logged in</label>
                                </p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
                                </p>
                                <p class="change_link">
                                    Not a member yet ?
                                    <a href="#toregister" class="to_register">Join us</a>
                                </p>
                            <?= form_close();?>
                        </div>
						
                    </div>
                </div>
            </section>
        </div>
        <!-- script files ---->