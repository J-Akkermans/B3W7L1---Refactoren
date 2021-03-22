<?php
    include 'resources/Functions/db_connection.php';



    // $data = $pdo->query( "SELECT `id`,`name`,`attack`,`avatar`,`health`,`defense` FROM `characters` ORDER BY `characters`.`name` ASC" );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Characters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<header><h1>Alle <?php echo $aantal ?> characters uit de database</h1>

</header>
<div id="container">
<?php 
while($CharData = $data->fetch())
{
    
    ?>
    <a class="item" href="character.php?id=<?php echo $CharData['id'] ?>">
        <div class="left">
            <img class="avatar" src="resources/images/<?php echo $CharData['avatar'] ?>">
        </div>
        <div class="right">
            <h2><?php echo $CharData['name'] ?></h2>
            <div class="stats">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php echo $CharData['health'] ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?php echo $CharData['attack'] ?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> <?php echo $CharData['defense'] ?></li>
                </ul>
            </div>
        </div>
        <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
    </a>
    <?php
}
?>
</div>

<footer>&copy; Jenna Akkermans 2021</footer>
</body>
</html>