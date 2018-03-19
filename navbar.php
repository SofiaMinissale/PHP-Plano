<!-- NAV BAR -->
	<header>
		<nav class="nav">
			<div class="logo">

				<a href="index.php"><img class="navbar-logo" src="./img/logotipo.png"></a>
			</div>
		<!-- MENU BASICO -->
			<div class="collapse navbar-collapse" id="navbar1">
				<ul class="nav navbar-nav">

					<?php if ($auth->estaLogueado()) : ?>
					<li class="active"><a href="userprofile.php">Home</a></li>
					<li class="active"><a href="logout.php">Logout</a></li>
					<?php else: ?>
					<li class="active"><a href="login.php">Usuarios Registrados</a></li>
					<li><a href="">Como funciona</a></li>
					<li><a href="./faq.php">FAQ</a></li>
					<?php endif; ?>
				</ul>
				
			</div>
		</nav>
	</header>

