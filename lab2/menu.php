<div id="menu">
	<?php
		$links = [
			"Лабораторная работа #1" => ["/?content=content_lab1", "12.02.2019"],
			"Лабораторная работа #2" => ["/?content=content_lab2", "26.02.2019"],
			"Лабораторная работа #3" => ["/?content=content_lab3", "12.03.2019"],
			"Лабораторная работа #4" => ["/?content=content_lab4", "Скоро"],
			"Лабораторная работа #5" => ["/?content=content_lab5", "Скоро"]
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