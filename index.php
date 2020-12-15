<!DOCTYPE html>
<!--
Created by Aram Hernandez for Lab 10 WEB BASED SCRIPTING
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dice Aram Hernandez Garduno</title>
        <style>
            table, th, td {
                border: 1px solid black;
            }
        </style>
    </head>
    <?php include 'dice.php' ?>
    <body>
        <h1> Roll Dice 36,000 times </h1>
        <table>
            <tr>
                <th>Sum of dice</th>
                <th>Total Times Rolled</th>
            </tr>
            <?php
            $dice = new Dice();
            $dice->multipleRoll();



            for ($i = 2; $i <= 12; $i++) {
                echo "<tr>";
                echo "<td>";
                echo $i;
                echo "</td>";


                echo "<td>";
                echo $dice->t[$i];
                echo "</td>";
                echo"</tr>";
            }
            ?>


        </table>

        <p>Click reload to run script again </p>
    </body>
</html>
