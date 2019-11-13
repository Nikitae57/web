<nav class="navbar navbar-expand-sm navbar-default navbar-dark bg-dark fixed-top">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Мини-блог</a>
    </div>
    <ul class="navbar-nav">
      <li class="nav-item">
      	<a class="nav-link" href="about.php">О нас</a>
      </li>
      <li class="nav-item">
      	<a class="nav-link" href="contacts.php">Контакты</a>
      </li>
      <li class="nav-item">
      	<a class="nav-link" href="about_you.php">О вас</a>
      </li>
      <li class="nav-item">
      	<a class="nav-link" href="ajax.php">AJAX</a>
      </li>
    </ul>
    <div class="login_info ml-auto">
    	<span class="navbar-text">
    		<?php 
				$username = getCreds()[0];
				echo $username;
			?>
  		</span>
  		<?php
			if (isset($_GET[content]) && strpos($_GET[content], "lab") !== false) {
				$contentTag = $_GET[content];
				echo 
				'
				<button class="btn btn-link" type="button"
	    			onclick="location.href=\'edit_content.php?content={$contentTag}\';">Редактировать
      			</button>
				';
			}
		?>
    </div>
</nav>