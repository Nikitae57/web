<div id="menu">
	<?php
		$links = [
			"Лабораторная работа #1" => ["/?content=lab1", "12.02.2019"],
			"Лабораторная работа #2" => ["/?content=lab2", "26.02.2019"],
			"Лабораторная работа #3" => ["/?content=lab3", "12.03.2019"],
			"Лабораторная работа #4" => ["/?content=lab4", "26.03.2019"],
			"Лабораторная работа #5" => ["/?content=lab5", "Скоро"]
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