 <?php 
    session_start();

     $usuario_app = Array(
         array('id' => 1, 'email' => 'emailTest@gmail.com', 'senha' => 'malconx'),
         array('id' => 2, 'email' => 'userTest@gmail.com', 'senha' => 'mulatox')
     );

     $usuario_autenticado = false;

     foreach( $usuario_app as $user){
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
        }
     }   

     if( $usuario_autenticado){
            $_SESSION['autenticado'] ="SIM";

            header('location: home.php');
     }else{
        $_SESSION['autenticado'] ="NÂO";

        header('location: index.php?login=erro2');
       
     }


    //echo'<pre>';
    //print_r($_POST);
  // echo'</pre>'; 
    
 ?>
