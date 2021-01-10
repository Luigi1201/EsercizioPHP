<!DOCTYPE html>
<html>
    <head lang="it">
        <title>Login-Register</title>
        <meta charset="UTF-8">
        <meta name="author" content="Riggi Luigi">
        <meta name="description" content="Consegna informatica">
        <link rel="stylesheet" href="stile.css?ts=<?=time()?>&quot">
        <link rel="stylesheet" href="css/bootstrap.min.css?ts=<?=time()?>&quot">
         <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  
    </head>
    <body>
        <div class="container-fluid">
            <h5 style="width:100%;text-align:center"> 
                <?php 
                if(isset ($_GET['ok'])){
                    echo $_GET['ok'];
                }
                ?>
            </h5>
        </div>
        <div class="container-fluid" style="align-content:center">
            <div class="row" style="margin-top:100px">
                <h1 style="width:100%;text-align:center">EFFETTUA IL LOGIN</h1><br>
                <form method="POST" action="controllo_login.php" style="margin:auto">
                <table>
                    <tr>
                        <td>USERNAME:</td>
                        <td><input name="username" type="text"></td>
                    </tr>
                    <tr>
                        <td>PASSWORD:</td>
                        <td><input name="password" type="password"></td>
                    </tr>   
                    <tr>
                        <td colspan="2" style="text-align:center"><input type="submit" value="Login" name="Login"></td>
                    </tr>    
                </table>
                </form>
            </div>
            
            <div class="row" style="margin-top:100px">
                <h1 style="width:100%;text-align:center">OPPURE REGISTRATI QUI</h1>
                <form method="POST" action="controllo_register.php" style="margin:auto">
                <table>
                    <tr>
                        <td>USERNAME:</td>
                        <td><input name="username" type="text"></td>
                    </tr>
                    <tr>
                        <td>PASSWORD:</td>
                        <td><input name="password" type="password"></td>
                    </tr>   
                    <tr>
                        <td colspan="2" style="text-align:center"><input type="submit" value="Registrazione" name="Registrazione"></td>
                    </tr>    
                </table>
                </form>
            </div>
        </div>
        
        
        
    </body>
</html>    