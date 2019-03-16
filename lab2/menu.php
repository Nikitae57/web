<div id="menu">
	<?php
		$links = [
			"Лабораторная работа #1" => ["index.php", "12.02.2019"],
			"Лабораторная работа #2" => ["laboratory_work_2.php", "26.02.2019"],
			"Лабораторная работа #3" => ["laboratory_work_3.php", "12.03.2019"],
			"Лабораторная работа #4" => ["laboratory_work_4.php", "Скоро"],
			"Лабораторная работа #5" => ["laboratory_work_5.php", "Скоро"]
		];

		foreach ($links as $key => $value) {
			echo 
				"<a class='menu_item' href='$value[0]'>
					<div class='blog_entry'>
						$key
						<div class='blog_entry_date'>
							$value[1]
						</div>
					</div>
				</a>";
		}
	?>		
 </div>