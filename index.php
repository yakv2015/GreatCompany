

	<!-- session_start();


		require_once'php/dbconnect.php'; // Подключаемся к базе данных

		//
		// if (isset($_GET['page']) && $_GET['page'] > 0) //номер страницы
		// {
		// 	$page = $_GET['page'];
		// }

		// else $page = 1;

		// $arr_coursor = $page - 1;

		 // Find out how many items are in the table
	// $items = $db->query("SELECT SQL_CALC_FOUND_ROWS * FROM books_info");
	// while ($res = mysqli_fetch_array($items)) {
	// 	$total = $res[0];
	// }

	// 	$limit = 5; //сколько записей на странице

	// 	$pages = ceil($total / $limit); // кол-во страниц

	// The "back" link
	// $prevlink = ($page > 1) ? '<a href="?page=' . ($page - 1) . '" title="Previous page"><img src="../images/arrow-left.png" class="arrow-img"><div class="arrow-text">Предыдущая страница</div></a>' : '<span class="disabled"><img src="../images/arrow-left-non.png" class="arrow-img" style = "padding-top:2px;"><div class="arrow-text">Предыдущая страница</div>';

	// The "forward" link
	// $nextlink = ($page < $pages) ? '<a href="?page=' . ($page + 1) . '" title="Next page"><img src="../images/arrow-right.png" class="arrow-img"><div class="arrow-text">Следующая страница</div> </a>' : '<img src="../images/arrow-right-non.png" class="arrow-img" style = "padding-top:2px;"><div class="arrow-text">Следующая страница</div>';

	// $query_select_book_image = "SELECT book_image_sm FROM books_info WHERE column_id = ?i ORDER BY id DESC";
	// $query_select_autor = "SELECT book_autor FROM books_info WHERE column_id = ?i ORDER BY id DESC";
	// $query_select_book_name = "SELECT book_name FROM books_info WHERE column_id = ?i ORDER BY id DESC";
	// $query_select_text_indent = "SELECT text_indent FROM books_info WHERE column_id = ?i ORDER BY id DESC";
	// $query_select_id = "SELECT id FROM books_info WHERE column_id = ?i ORDER BY id DESC";


	// ini_set('display_errors','Off');

 -->

<a href="php/authorization.php"> adioufbhpdifbhpiuabhp </a>
	<div class="main-1 color3 book-all">

	<div class="book-img">
	 		<?php
	 	 	 	$book_image = $db->getAll($query_select_book_image, 1);
			 	$res = array_shift($book_image[$arr_coursor]);
			 	echo '<img src="images/bookshelves/small/'.$res.'"/>';
			?>
		</div>
	 	<div class="book-autor">
	 		<?php
		 	 		$book_autor = $db->getAll($query_select_autor, 1);
		 	 		echo array_shift($book_autor[$arr_coursor]);
		 	 	?>
	 	</div>
	 	<div class="book-name">
	 		<?php
	 	 	 	$book_name = $db->getAll($query_select_book_name, 1);
			 	echo array_shift($book_name[$arr_coursor]);
			?>
	 	</div>
	 	<div class="text-indent">
	 		<?php
	  		$text_indent = $db->getAll($query_select_text_indent, 1);
		 		echo array_shift($text_indent[$arr_coursor]);
	    ?>
	 	</div>
	 	<?php
		$book_id = $db->getAll($query_select_id, 1);
		 	$book_id_1 = array_shift($book_id[$arr_coursor]);
		 	$_SESSION['book_id_1'] = $book_id_1;
	 	?>
	 	<div class="ref">
	 		<form action="../php/about.php" method="post"> <input type="submit" name="btn-1" value=" " class="btn"> <form>
	 	</div>
	</div>





	<div class="main-6">
	<img src="../images/22.jpg" class="bookfire">
	</div>

	<div class="main-7">
		Узнавайте новые миры!
	</div>


	<div class="main-2 color3 book-all">
	<div class="book-img">
	 		<?php
	 	 	 	$book_image = $db->getAll($query_select_book_image, 2);
			 	$res = array_shift($book_image[$arr_coursor]);
			 	echo '<img src="images/bookshelves/small/'.$res.'"/>';
			?>
		</div>
	 	<div class="book-autor">
	 		<?php
		 	 	 	$book_autor = $db->getAll($query_select_autor, 2);
		 	 		echo array_shift($book_autor[$arr_coursor]);

			?>
	 	</div>
	 	<div class="book-name">
	 		<?php
	 	 	 	$book_name = $db->getAll($query_select_book_name, 2);
			 	echo array_shift($book_name[$arr_coursor]);
			?>
	 	</div>
	 	<div class="text-indent">
	 		<?php
	  		$text_indent = $db->getAll($query_select_text_indent, 2);
		 		echo array_shift($text_indent[$arr_coursor]);
	    ?>
	 	</div>
	 	<?php
		$book_id = $db->getAll($query_select_id, 2);
		 	$book_id_2 = array_shift($book_id[$arr_coursor]);
		 	$_SESSION['book_id_2'] = $book_id_2;
	 	?>
	 	<div class="ref">
	 		<form action="../php/about.php" method="post"> <input type="submit" name="btn-2" value=" " class="btn"> <form>
	 	</div>
	</div>


	<div class="main-3 color4 book-all">
	<div class="book-img">
	 		<?php
	 	 	 $book_image = $db->getAll($query_select_book_image, 3);
			 	$res = array_shift($book_image[$arr_coursor]);
			 	echo '<img src="images/bookshelves/small/'.$res.'"/>';
			?>
		</div>
	 	<div class="book-autor">
	 		<?php
		 	 	 	$book_autor = $db->getAll($query_select_autor, 3);
		 	 		echo array_shift($book_autor[$arr_coursor]);
			?>
	 	</div>
	 	<div class="book-name">
	 		<?php
	 	 	 	$book_name = $db->getAll($query_select_book_name, 3);
			 	echo array_shift($book_name[$arr_coursor]);
			?>
	 	</div>
	 	<div class="text-indent">
	 		<?php
	  		$text_indent = $db->getAll($query_select_text_indent, 3);
		 		echo array_shift($text_indent[$arr_coursor]);
	    ?>
	 	</div>
	 	<?php
		$book_id = $db->getAll($query_select_id, 3);
		 	$book_id_3 = array_shift($book_id[$arr_coursor]);
		 	$_SESSION['book_id_3'] = $book_id_3;
	 	?>
	 	<div class="ref">
	 		<form action="../php/about.php" method="post"> <input type="submit" name="btn-3" value=" " class="btn"> <form>
	 	</div>
	</div>


	<div class="main-4 color5 book-all">
	<div class="book-img">
	 		<?php
	 	 	 	$book_image = $db->getAll($query_select_book_image, 4);
			 	$res = array_shift($book_image[$arr_coursor]);
			 	echo '<img src="images/bookshelves/small/'.$res.'"/>';
			?>
		</div>
	 	<div class="book-autor">
	 		<?php
		 	 	 	$book_autor = $db->getAll($query_select_autor, 4);
		 	 		echo array_shift($book_autor[$arr_coursor]);
			?>
	 	</div>
	 	<div class="book-name">
	 		<?php
	 	 	 	$book_name = $db->getAll($query_select_book_name, 4);
			 	echo array_shift($book_name[$arr_coursor]);
			?>
	 	</div>
	 	<div class="text-indent">
	 		<?php
	  		$text_indent = $db->getAll($query_select_text_indent, 4);
		 		echo array_shift($text_indent[$arr_coursor]);
	    ?>
	 	</div>
	 	<?php
		$book_id = $db->getAll($query_select_id, 4);
		 	$book_id_4 = array_shift($book_id[$arr_coursor]);
		 	$_SESSION['book_id_4'] = $book_id_4;
	 	?>
	 	<div class="ref">
	 		<form action="../php/about.php" method="post"> <input type="submit" name="btn-4" value=" " class="btn"> <form>
	 	</div>
	</div>


	<div class="main-5 color1 book-all">
	<div class="book-img">
	 		<?php
	 	 	 	$book_image = $db->getAll($query_select_book_image, 5);
			 	$res = array_shift($book_image[$arr_coursor]);
			 	echo '<img src="images/bookshelves/small/'.$res.'"/>';
			?>
		</div>
	 	<div class="book-autor">
	 		<?php
		 	 	 	$book_autor = $db->getAll($query_select_autor, 5);
		 	 		echo array_shift($book_autor[$arr_coursor]);
		 	 	?>
	 	</div>
	 	<div class="book-name">
	 		<?php
	 	 	 	$book_name = $db->getAll($query_select_book_name, 5);
			 	echo array_shift($book_name[$arr_coursor]);
			?>
	 	</div>
	 	<div class="text-indent">
	 		<?php
	  		$text_indent = $db->getAll($query_select_text_indent, 5);
		 		echo array_shift($text_indent[$arr_coursor]);
	    ?>
	 	</div>
	 	<?php
		$book_id = $db->getAll($query_select_id, 5);
		 	$book_id_5 = array_shift($book_id[$arr_coursor]);
		 	$_SESSION['book_id_5'] = $book_id_5;
	 	?>
	 	<div class="ref">
	 		<form action="../php/about.php" method="post"> <input type="submit" name="btn-5" value=" " class="btn"> <form>
	 	</div>
	</div>


	<div class="arr-left">
		<?php echo $prevlink ?>
	</div>
	<div class="center-page">
		<?php  echo   '<span class="page-text"> Страница <br/></span>', $page, ' из ', $pages  ?>
	</div>
	<div class="arr-right ">
		<?php echo $nextlink ?>
	</div>