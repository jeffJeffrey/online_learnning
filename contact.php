<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/contact.css">
    <script src="./javaScript/contact.js"></script>
    <title> Contact</title>
</head>
<body>
    <div class="container">
        <div class="formcontainer">
           <form action="./traitementMail.php" id="form" method="GET">
             <div class="cont"> 
                <h1>
                  <div class="c">c</div>ontact</h1>
             </div>
             <div class="env"><h2> envoyez un message</h2></div>
             <div class="champs">
               <input type="text" placeholder=" entre le nom" id="name" onkeyup="verifNom()" name = "nom">
               <div id="erreurnom"></div>
               <input type="email" placeholder="adresse email" id="email" onkeyup="verifEmail()" name = "email">
               <div id="erreuremail"></div>
             </div> 
              <div class="text"> 
                  <textarea name="message" id="" cols="43" rows="4">message</textarea>
              </div>
  
              <button type="submit" class="but" id="butsubmit" name="submit" onclick="verif()">envoyez</button>
              <button type="reset" class="but" id="butreset" onclick="reset()">annuler</button>
           </form>




           
            
        </div>
    </div>
</body>
</html>