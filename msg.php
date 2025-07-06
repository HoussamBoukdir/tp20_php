<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            width: 50%;
            margin: auto;
            
        }

        textarea{
            width: 400px;
            height: 100px;
        }

        input{
            background: blue;
            color: white;
            border: 0;
            border-radius: 5px;
            height: 30px;
        }

        a{
            color: blue;
        }
    </style>
</head>
<body>
   <div>
     <h1>un petit livre d'or</h1>
    <p>taper votre message</p>
    <form action="msg.php" method="post">
    <textarea name="txt" id=""  ></textarea> <br>
    <input type="submit" value="Envoyer le message" name="btn"> <br>
    <a href="" name="aff">voir les messages</a>
    </form>
    
   </div>
</body>
</html>
<?php


if(isset($_POST['txt'])){
    $text = $_POST['txt'];
    $f = fopen("messages.txt", "w");
    if($text){
        fwrite($f,$text);
        fclose($f);
        echo "le message a bien ete enregistrer";
    }else{
        echo "aucune message n'a ete saisi";
    }
};


?>