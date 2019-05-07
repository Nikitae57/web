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
	<div id="nav_group_login">
		<span class="nav_item_login">
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
