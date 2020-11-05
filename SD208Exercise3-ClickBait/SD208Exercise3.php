<?php 
    define("TITLE", "Click Bait Headlines");
    if(isset($_POST["submit"])) {
        $clickBait = strtolower($_POST["originalHeadline"]);
        $clickbait_words = array("scientists", "doctors", "hate", "stupid", "weird", "simple", "tricked", "shocked me", "you'll never believe", "hack", "epic", "unbelievable");
        $replacement_words = array("so-called scientists", "so-called doctors", "aren't threatened by", "average", "completely normal", "ineffective", "method", "is no different than the others", "you won't really be surprised by", "slightly improve", "boring", "normal");
        
        $honestHeadline = str_replace($clickbait_words, $replacement_words, $clickBait);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo TITLE; ?></title>
        <style>
            body{
            background-image:url("https://proranktracker.com/blog/wp-content/uploads/2019/03/ISS_3071_00559b.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
        div div{
        text-align: center;
        
    }
    .container{
        width: 50%;
        background-color: rgba(190, 190, 190, 0.8);
        margin: 0 auto;
        padding: 2% 2%;
        min-height: 400px;
    }
    hr{
        width: 50%;
    }
    h1{
        color: palevioletred;
    }
    button{
            background-color: palevioletred;
            margin: 2%;
        }
        </style>
    </head>
    
    <body>
        <div>   
            <div class="container">
            <h1><?php echo TITLE; ?></h1>
            <p>Turn everything reliable!</p>
                <form action="" method="post">
                    <textarea placeholder = "Paste a clickbait headline!"name="originalHeadline">
                    </textarea>
                    <br>
                    <button type="submit"name="submit">Change the Clickbait Headline!</button>
                </form>
                <br>
            <?php
                if(isset($_POST["submit"])) {
                    echo "<strong>Original Headline</strong><h4>".ucwords($clickBait)."</h4><hr>";   
                    echo "<strong >Honest Headline</strong><h4>".ucwords($honestHeadline)."</h4>";   
                }
            ?>
            </div>
            
        </div>
    </body>
</html>