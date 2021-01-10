<html>
    <head>
        <title>CONTROLLO REGISTER</title>
        <meta name="author" content="Riggi Luigi">
        <meta name="description" content="Consegna informatica-controllo register">
    </head>
    <body>
        <?php
            $correct_=true;
            if(isset($_POST['username']) && isset($_POST['password'])){
 
                $usernameInserito=$_POST['username'];
                $passwordInserita=$_POST['password'];
                    
                $filename='../credenziali.csv';
                $filecsv = array_map('str_getcsv', file($filename));
                array_walk($filecsv,function(&$a)use ($filecsv){
                    $a=array_combine($filecsv[0],$a);
                });
                array_shift($filecsv); 
                  
                for($i=0;$i<count($filecsv);$i++){
                    $usernameInterno=$filecsv[$i]['username'];
                    $passwordInterno=$filecsv[$i]['password'];
                    if($usernameInserito==null){
                        $correct_=false;
                    }
                    if($passwordInserita==null){
                        $correct_=false;
                    }
                    if($usernameInserito == $usernameInterno && $passwordInserita == $passwordInterno){
                        $correct_=false;
                        echo "ERRORE, QUESTO UTENTE ESISTE GIA' ".'<br>';
                    }
                    if($usernameInserito == $usernameInterno){
                        $correct_=false;
                        echo "QUESTO USERNAME APPARTIENE AD UN ALTRO UTENTE".'<br>';
                    }
                }
                if($correct_){
                    $handler = fopen($filename, 'a');
                    fputcsv($handler, array($usernameInserito,$passwordInserita));
                    fclose($handler);
                    $ok="Registrazione effettuata con successo, ora puoi accedere con le tue nuove credenziali ! ";
                    header("location: LoginRegister.php?ok=$ok");     
                }else{
                    echo "ERRORE, RIPROVA!".'<br>';
                }
            }else{
                echo "ERRORE DURANTE LA REGISTRAZIONE,RIPROVARE";
            }
        ?>
    </body>
</html>
