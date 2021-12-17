<!--chapter 3 pages 132 - 133 -->
!<Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, inital-scale=1">
    <title> books and authors</title>
<head>
<body>
    <h1>books and authors</h1>
    <hr/>
    <?php
        $Books = array("the adventures of huckleberry finn", "nineteen eighty-four", "alice's adventures in wonderland", "the cat in the hat");

        $Authors = array("Mark twain", "George orwell", "Lewis Caroll", "Dr.Seuss")

        $RealNames = array("samual clemens" ,"eric blair", "charles dodson", "Theodor geisel")

        //this for loop will be able to loop through each array to provide their data in the output 
        for($i = 0; $i < count($books); ++$i){
            echo "<p>the real name of {$Authors[$i]},the author of \"{$Books[$i]}\", is {$RealNames[$i]}</p>";
        }

    ?>
</body>
</html>