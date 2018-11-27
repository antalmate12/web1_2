<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <title>ZH</title>

 
 

    <script type="text/javascript" src="main.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<link rel="stylesheet" href="style.css">

  </head>
  <body>
  <div class="main">
    <div class="content">
      <h1>WEB-PROGRAMOZÁS I</h1>
      
      <form name="regisztracio" method="post" onsubmit="return ellenoriz()" action="feldolgoz.php">

       <table>
         <tr>
           <td>

            <h3>Regisztráció:</h3>
              <table>
                <tr>
                  <td><label>Email:</label></td>
                  <td><input type="text" id="email" name="email" size="20" required></td>
                </tr>
                <tr>
                <td><label>Név:</label></td>
                  <td><input type="text" id="nev" name="nev" size="20" required ></td>
                </tr>
                <tr>
                <td><label>Jelszó:</label></td>
                  <td><input id="jelszo" type="password" size="20" name="jelszo"  required></td>
                </tr>
                <tr>
                <td><label>Kor:</label> </td>
                  <td><input id="kor" type="number" min="18" max=120 name="kor" size="20"  required></td>
                </tr>
              </table>
<br>
              <input class="btn btn-primary" id="kuld" onclick="ellenoriz();" type="submit" value="Küldés">
              <input class="btn btn-secondary" type="reset" value="Törlés">
            </td>
            <td>
                <img src="https://gamf.uni-neumann.hu/core/templates/pae_v2/gfx/pae-logo_hu.svg" alt="nje">
            </td>
         </tr>
       </table>

          


     

    </form>
      
   </div>
  </div>
   
  </body>
</html>