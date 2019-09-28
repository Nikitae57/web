<nav class="navbar navbar-expand-sm navbar-default navbar-dark bg-dark fixed-top">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Мини-блог</a>
    </div>
    <ul class="navbar-nav">
      <li class="nav-item active">
      	<a class="nav-link" href="index.php">Домашняя</a>
      </li>
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


<div id="navigation">
 	<a href="index.php">
		<span class="nav_item">
	 		Домашняя
	 	</span>	
 	</a>
	<a href="about.php">
 		<span class="nav_item">
 			О нас
		</span>	
 	</a>
 	<a href="contacts.php">
 		<span class="nav_item">
			Контакты
 		</span>
	</a>
	<a href="about_you.php">
 		<span class="nav_item">
			О вас
 		</span>
	</a>
	<a href="ajax.php">
 		<span class="nav_item">
			AJAX
 		</span>
	</a>
	<div id="nav_group_login">
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
				"<span class='nav_item_login'>
					<a href='edit_content.php?content={$contentTag}' style='color:#fff; border:1px solid #fff'>Редактировать
					</a>
				</span>
				";
			}
		?>
		<a href="sign_out.php">
			<span class="nav_item_login">
				Выход
			</span>
		</a>
	</div>
 </div> 
