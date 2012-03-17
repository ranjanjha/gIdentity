 	<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#"><?php echo $project_name; ?></a>
          <div class="nav-collapse">
            <ul class="nav">
              <li><?php echo anchor('api', 'APIs')?></li>              
              <li><?php echo anchor('site/faq', 'FAQs')?></li>
              <li><?php echo anchor('site/about', 'About')?></li>
            </ul>
          </div><!--/.nav-collapse -->
          <form class="navbar-form pull-right">
            <input type="text" class="span2" placeholder="username…">
            <input type="text" class="span2" placeholder="password…">
            <input type=submit class="btn" value="Login">
          </form>


        </div>
      </div>
    </div>