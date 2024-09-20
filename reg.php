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

    <hr style="clear:both; margin:0;" size="1">  

</div>
<div class="regFormContainer">
    <form action="reg_ir.php" method=post>
        <!-- Headings for the form -->
        <div class="headingsContainer">
            <h3>Jelentkezzen be!</h3>
            <p>Írja be a felhasználónevét és jelszavát!</p>
        </div>

        <!-- Main container for all inputs -->
        <div class="mainContainer">
            <!-- Username -->
            <label for="username">Felhasználónév</label>
            <input type="text" placeholder="" name="unick" required>

            <!-- Username -->
            <label for="username">Email</label>
            <input type="text" placeholder="" name="uemail" required>

            <br><br>

            <!-- Password -->
            <label for="pswrd">Jelszavak</label>
            <input type="password" placeholder="Legalább 8 karakter" name="upw1" required>

            <!-- Password -->
            <label for="pswrd">Jelszavak</label>
            <input type="password" placeholder="" name="upw2" required>

            <br><br>

            <!-- sub container for the checkbox and forgot password link -->



            <!-- Submit button -->
            <button type="submit">Regisztráció</button>

            <!-- Login link -->
            <p class="register">Már van fiókja?  <a href="belepes">Jelentkezzen be itt!</a></p>


        </div>

    </form>
</div>
</body>
</html>
<?php



?>