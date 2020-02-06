<!doctype html>
<html lang="ru">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- main CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PhP-3</title>
</head>
<body>
	<div class="container">
		<h1>Список дел</h1>
		<form class="form" action="/add.php" method="post">
			<input class="form-control" type="text" name="task" id="task" placeholder="Нужно сделать">
			<button class="btn btn-success" type="submit" name="sendTask">Отправить</button>
		</form>

		<?php 
				require 'configDB.php';

				echo '<ul>';
				$query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');
				while ($row = $query->fetch(PDO::FETCH_OBJ)) {
					echo '<li><b>'.$row->task.'</b><a href="/delete.php?id='.$row->id.'"><button>Удалить</button></a></li>';
				}
				echo '</ul>';
		?>
	</div>
	<!-- /.container -->

<!-- Optional JavaScript -->

<!-- main JS -->
<script src="js/script.js" ></script>


</body>
</html>