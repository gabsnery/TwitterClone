<?php

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
    }else{
        echo "Erro na consulta de tweets no banco de dados.";
    }

    //------------------CONTAGEM SEGUIDORES
    $sql = "SELECT *  from user_followers where id_user_followed = $id_user";

    $resultado_id = mysqli_query($link,$sql);

    if ($resultado_id){
           $row_cnt = mysqli_num_rows($resultado_id);
           $contagemFollowers = $row_cnt;
    }else{
        echo "Erro na consulta de tweets no banco de dados.";
    }
    // -- quantidade tweets
    // -- quantidade seguidores
?>

<div class="col-md-3"> <!-- Usuario, contagem de tweets e seguidores-->
		 			<div class="panel panel-default">
		 				<div class="panel-body">
		 					<h4><?= $_SESSION['user']?></h4>
		 					<hr/>
							<div class="col-md-6" id="quantidade_tweets">TWEETS<br/><?=$contagemTweets?></div>
							<div class="col-md-6" id="quantidade_seguidores">SEGUIDORES</br><?=$contagemFollowers?></div>
						 </div>
					 </div>
				</div> <!--/ Usuario, contagem de tweets e seguidores-->