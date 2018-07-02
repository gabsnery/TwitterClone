 <?php
 /*     session_start();

		 //echo $_COOKIE["user"];

		 
     if (!isset($_SESSION['user'])){
        header('Location : index.php?erro=2');
		 }

		 require_once('db.class.php');

     $id_user = $_SESSION['id'];

     $objDb = new db();
     $link = $objDb->conecta_mysql();
		//-----------------------CONTAGEM TWEETS
		//  $sql = "SELECT *  from tweet where id_user = $id_user";

		//  $resultado_id = mysqli_query($link,$sql);

		//  if ($resultado_id){
		// 		$row_cnt = mysqli_num_rows($resultado_id);
		// 		$contagemTweets = $row_cnt;
	 	// }else{
		// 	 echo "Erro na consulta de tweets no banco de dados.";
		//  }
		 //-----------------------CONTAGEM TWEETS OUTRA OPÇÃO
		 $sql = "SELECT COUNT(*) AS CONTAGEM  from tweet where id_user = $id_user";

		 $resultado_id = mysqli_query($link,$sql);

		 if ($resultado_id){
				$registro = mysqli_fetch_array($resultado_id,MYSQLI_ASSOC);
                $contagemTweets = $registro['CONTAGEM'];
                echo "<div data-quantidade_tweets='".$contagemTweets."'></div>";
	 	}else{
			 echo "Erro na consulta de tweets no banco de dados.";
		 }

		 //------------------CONTAGEM SEGUIDORES
		 $sql = "SELECT *  from user_followers where id_user_followed = $id_user";

		 $resultado_id = mysqli_query($link,$sql);

		 if ($resultado_id){
				$row_cnt = mysqli_num_rows($resultado_id);
                $contagemFollowers = $row_cnt;
                echo "<div data-quantidade_seguidores='".$contagemFollowers."'></div>";
	 	}else{
			 echo "Erro na consulta de tweets no banco de dados.";
	 	}
		 // -- quantidade tweets
		 // -- quantidade seguidores
 */
?> 