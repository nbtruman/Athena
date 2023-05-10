<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST" id="testForm">
        <label for="boxOne">Box One</label>
        <input type="checkbox" name="boxOne" id="boxOne" <?php if(isset($_POST["boxOne"])) echo "checked='checked'";?> >
        <br>
        <label for="boxTwo">Box Two</label>
        <input type="checkbox" name="boxTwo" id="boxTwo" <?php if(isset($_POST["boxTwo"])) echo "checked='checked'";?> >
        <br>
        <label for="boxThree">Box Three</label>
        <input type="checkbox" name="boxThree" id="boxThree" <?php if(isset($_POST["boxThree"])) echo "checked='checked'";?> >
    </form>
    <?php
        if(count($_POST) > 0){
            foreach($_POST as $check_box => $value){
    ?>
        <p><?=$check_box?> is <?=$value?></p>
    <?php
            }
        }
    ?>
    <script src="./functions.js"></script>
</body>
</html>