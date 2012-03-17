<div class="container">
<div class="row">
<div class="span6">
  <p>Please, DO Fill The Information Correctly.</p>
  <?php 
  	$attributes = array('class' => 'well', 'id' => 'signup_stage2');
  	echo form_open('signup/stage2', $attributes);?>    
    
  	<?php  //username
	echo form_label('Enter your name', 'username');	
	$data = array(
              'name'        => 'username',
			  'class'		=> 'span3',
              'id'          => 'username',
              'value'       => set_value('username'),
              'maxlength'   => '45',
              'placeholder'	=> 'Username...'
            );
	echo form_input($data); ?>    
    <span class="help-inline">Optional!</span>
    




  	<?php  //password
	echo form_label('Password', 'password');	
	$data = array(
              'name'        => 'password',
			  'class'		=> 'span3',
              'id'          => 'password',
              'value'       => set_value('password'),
              'maxlength'   => '45',
              'placeholder'	=> 'Choose a password...'
            );
	echo form_password($data); ?>    
    <span class="help-inline">Required</span>




  	<?php  //confirm password
	echo form_label('Confirm Password', 'password2');	
	$data = array(
              'name'        => 'password2',
			  'class'		=> 'span3',
              'id'          => 'password2',
              'value'       => set_value('password2'),
              'maxlength'   => '45',
              'placeholder'	=> 'Confirm Password...'
            );
	echo form_password($data); ?>    
    <span class="help-inline">Required</span>



	<?php echo form_fieldset('Personal Information'); ?>
  	
	<?php  // father name
	echo form_label('Father\'s Name', 'fathername');	
	$data = array(
              'name'        => 'fathername',
			  'class'		=> 'span3',
              'id'          => 'fathername',
              'value'       => set_value('fathername'),
              'maxlength'   => '45',
              'placeholder'	=> 'Enter your father\'s name...'
            );
	echo form_input($data); ?>    
    <span class="help-inline">optional</span>


	<?php  // Mother name
	echo form_label('Mother\'s Name', 'mothername');	
	$data = array(
              'name'        => 'mothername',
			  'class'		=> 'span3',
              'id'          => 'mothername',
              'value'       => set_value('mothername'),
              'maxlength'   => '45',
              'placeholder'	=> 'Enter your mother\'s name...'
            );
	echo form_input($data); ?>    
    <span class="help-inline">optional</span>


	<?php  // Sex
	echo form_label('Sex', 'sex');	?>
    <select name="sex">
    <option value="Male" <?php echo set_select('sex', 'm', TRUE); ?> >Male</option>
    <option value="Female" <?php echo set_select('sex', 'f'); ?> >Female</option>
    </select>     
    <span class="help-inline">optional</span>

<?php  // Voter Id
	echo form_label('Voter Id No.', 'VoterId');	
	$data = array(
              'name'        => 'VoterId',
			  'class'		=> 'span3',
              'id'          => 'VoterId',
              'value'       => set_value('VoterId'),
              'maxlength'   => '10',
              'placeholder'	=> 'Enter Voter Id No.'
            );
	echo form_input($data); ?>    
    <span class="help-inline">optional</span>
    
    <?php  // PAN CARD
	echo form_label('Pan Card No.', 'PanCard');	
	$data = array(
              'name'        => 'PanCard',
			  'class'		=> 'span3',
              'id'          => 'PanCard',
              'value'       => set_value('PanCard'),
              'maxlength'   => '10',
              'placeholder'	=> 'Enter Pan Card No.'
            );
	echo form_input($data); ?>    
    <span class="help-inline">optional</span>
    
     <?php  // Passport
	echo form_label('Passport No.', 'Passport');	
	$data = array(
              'name'        => 'Passport',
			  'class'		=> 'span3',
              'id'          => 'Passport',
              'value'       => set_value('Passport'),
              'maxlength'   => '10',
              'placeholder'	=> 'Enter Passport No.'
            );
	echo form_input($data); ?>    
    <span class="help-inline">optional</span>
    	
        <?php  // UID
	echo form_label('UID No.', 'uid');	
	$data = array(
              'name'        => 'uid',
			  'class'		=> 'span3',
              'id'          => 'uid',
              'value'       => set_value('uid'),
              'maxlength'   => '30',
              'placeholder'	=> 'Enter uid No.'
            );
	echo form_input($data); ?>    
    <span class="help-inline">optional</span>
    
     <?php  // Driving Licence
	echo form_label('Driving Licence No.', 'drivingLicence');	
	$data = array(
              'name'        => 'drivingLicence',
			  'class'		=> 'span3',
              'id'          => 'drivingLicence',
              'value'       => set_value('drivingLicence'),
              'maxlength'   => '10',
              'placeholder'	=> 'Enter driving Licence No.'
            );
	echo form_input($data); ?>    
    <span class="help-inline">optional</span>
    
     <?php  // Photo
	echo form_label('Photo', 'photo');	
	$data = array(
              'name'        => 'photo',
			  'class'		=> 'span3',
              'id'          => 'photo',
              'value'       => set_value('photo'),
              'maxlength'   => '10',
              'placeholder'	=> 'Enter url address'
            );
	echo form_input($data); ?>    
    <span class="help-inline">optional</span>or
    <input type="File" class="span3" placeholder="Type something…">
<span class="help-inline">Upload ur pic!</span>
    
    
	<?php echo form_fieldset_close(); ?>


    <button type="submit" class="btn">Submit</button>
  </form>
  <div>
    <div class="span6"> </div>
  </div>
</div>
