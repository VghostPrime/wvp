<!DOCTYPE html>


    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bejelentkezés</title>   
        <meta name="description" content="Weiss pszihologus">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="pszihologus.css">    
    </head>
<body>

    
</div>

    

</div>
<div class="loginFormContainer">
    <form action="">
            <!-- Headings for the form -->
            <div class="headingsContainer">
                <h3>Jelentkezzen be!</h3>
                <p>Írja be felhasználónevét és jelszavát!</p> 
            </div>

            <!-- Main container for all inputs -->
            <div class="mainContainer">
                <!-- Username -->
                <label for="username">Felhasználónév</label>
                <input type="text" placeholder="" name="username" required>

                <br><br>

                <!-- Password -->
                <label for="pswrd">Jelszavak</label>
                <input type="password" placeholder="" name="pswrd" required>

                <!-- sub container for the checkbox and forgot password link -->
                
                <div class="subcontainer-1">
                
                        
                        Emlékezzen rám!
                        <input type="checkbox" checked="checked" name="remember" style="width: 15px; display:right;">
                    
                    
                
                </div>


                <!-- Submit button -->
                <button type="submit">Login</button>

                <!-- Sign up link -->
                <p class="register">Még nincs regisztrálva?  <a href="regisztracio">Regisztráljon itt!</a></p>
                <p class="forgotpsd"> <a href="#">Elfelejtettem a jelszavam!</a></p>

            </div>

        </form>
    </div>
</body>
</html>
<?php



?>