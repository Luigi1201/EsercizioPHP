<html>
    <head>
        <title>CONTROLLO LOGIN</title>
        <meta name="author" content="Riggi Luigi">
        <meta name="description" content="Consegna informatica-controllo login">
    </head>
    <body>
        <?php
            $validità=false;
            if(isset($_POST['username']) && isset($_POST['password'])){
                $usernameInserito=$_POST['username'];
                $passwordInserita=$_POST['password'];
                if($usernameInserito!=null && $passwordInserita!=null){
                    
                    $filename='../credenziali.csv';
                    $filecsv = array_map('str_getcsv', file($filename));
                    array_walk($filecsv,function(&$a)use ($filecsv){
                        $a=array_combine($filecsv[0],$a);
                    });
                    array_shift($filecsv); 
                    
                    for($i=0;$i<count($filecsv);$i++){
                        $usernameCorretto=$filecsv[$i]['username'];
                        $passwordCorretta=$filecsv[$i]['password'];
                        if($usernameInserito==$usernameCorretto && $passwordInserita==$passwordCorretta){
                            $validità=true;
                        }   
                    }
                }else{
                        echo '<stong>'."!!! NON SONO STATI INSERITI ENTRAMBI I PARAMETRI !!!".'</strong>';
                    }   
                if($validità == true){
                    header("location: ../php/homepageAfterLogin.php?usernameInserito=$usernameInserito");
                }else{
                    echo '<strong><br>USERNAME O PASSWORD ERRATI! NON PUOI ACCEDERE AI CONTENUTI</strong>';
                }
            }
        ?>
    </body>
</html>



