<nav class="navbar navbar-expand-sm  navbar-dark bg-dark sticky-top">
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
      <li class="dropdown">
          <a class="btn btn-sm btn-secondary dropdown-toggle nav-link" href="#" 
            role="button" id="dropdownMenuLink" data-toggle="dropdown" 
            aria-haspopup="true" aria-expanded="false">

            3 курс
          </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="ajax.php">AJAX</a>
            <a class="dropdown-item" href="chat.php">Чат</a>
          </div>
      </li>
      <!-- <li class="nav-item">
      	<a class="nav-link" href="ajax.php">AJAX</a>
      </li> -->
    </ul>
    <form class="form-inline ml-auto">
	    <button class="btn btn-outline-light" type="button" 
	    	onclick="location.href='sign_in_screen.php';">Вход
      </button>
	    <button class="btn btn-link" type="button"
	    	onclick="location.href='registration.php';">Регистрация
      </button>
  	</form>	
</nav>
