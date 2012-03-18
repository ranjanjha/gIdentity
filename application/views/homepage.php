<<<<<<< HEAD
    <div class="container homepage">
=======
    <div class="container">
>>>>>>> de54931b01c41db3d17a23c92acdb1243acfcef4

   

    <div class="row">
      <div class="span8">
        
<<<<<<< HEAD
      	<div class="hero-unit banner-home">
=======
      	<div class="hero-unit">
>>>>>>> de54931b01c41db3d17a23c92acdb1243acfcef4
   			<h1>gIdentity</h1>
    		<p>A Global Identity Manager</p>
    		<p>
    			<?php echo anchor("site/about", "Learn more",'class="btn btn-primary btn-large"'); ?>
    		</p>
    	</div>
      </div>


      <div class="span4">
        <div class="signup">
        <?php 
  	$attributes = array('class' => 'well', 'id' => 'signup_homepage');
  	echo form_open('signup/stage1', $attributes);?>    
    
            <fieldset>
              <legend>Sign Up</legend>
        
              <label>Your Email</label>
              <input name="username" type="text" class="span3" placeholder="john@example.com…">          
        
              <label>Full Name</label>
              <input name="full_name" type="text" class="span3" placeholder="Name Plz.">          
         
              <div class="form-actions">
                <button class="btn btn-primary" type="submit">Register</button>
              </div>            
            </fieldset>
          </form>
        </div>
      </div>

    </div>