<?php
    session_start();
    $bookmarks = (isset($_SESSION['bookmarks'])) ? $_SESSION['bookmarks'] : array();
    
    if (isset($_POST['clear'])){
        $_SESSION['bookmarks']  = [];
    }
    if (isset($_POST['x'])){
        array_splice($_SESSION['bookmarks'], $_POST['id'],1);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions and Cookies!</title>
</head>
<style>
    body{
        background-color: gray;
    }
    h1 ,h2{
        padding-top: 10%;
    }
    button,#submit{
       margin: 5%;
       width: 50%
    }
    div div{
        text-align: center;
    }
    .container{
        margin: 0 auto;
        width: 20%;
        background-color: lavender;
    }
    #bookmark,#url{
        width: 80%;
    }
    #x{
        width: 5%;
        padding-right: 12.5px;
    }
</style>
<body>
    <div>
        <div class="container">
        <h1>Sessions and Cookies!</h1>
        <form action="SD208Exercise6-1.php" method= "POST">
            <label for="bookmark">Bookmark</label> <br>
            <input type="text" id="bookmark" name= "bookmark"> <br>
            <label for="url">URL</label> <br>
            <input type="text" id="url" name="url"> <br>
            <button type="submit" name ="add" >Add Bookmark</button>
            <input name="clear" type="submit" id="submit"value="Clear All">

            <p style="color: darkred
            ;">
            <?php
            if(isset($_POST['add']) and $_POST['bookmark'] != ''){
                array_push($bookmarks, [$_POST['bookmark'],$_POST['url']]);
                $_SESSION['bookmarks'] = $bookmarks;
            }elseif (isset($_POST['add']) and $_POST['bookmark'] == '') {
                echo "Nothing to add! Bookmark is Empty!";
            }
            ?>
            </p>
        </form>
    <?php if(isset($_SESSION['bookmarks'])):
                for($id= 0; $id < count($_SESSION['bookmarks']); $id++):?>    
            <a href="<?php echo $_SESSION['bookmarks'][$id][1]?>">
            <?php echo $_SESSION['bookmarks'][$id][0]?></a>
            <form  action="SD208Exercise6-1.php" method="POST">
                <input type="hidden" name ="id" value="<?php echo $id;?>">
                <input name="x" type="submit" value="x" id="x">
            </form> 
        <?php endfor?>
    <?php endif?>
        </div>
    </div>
</body>

</html>