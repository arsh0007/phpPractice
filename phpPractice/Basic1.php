<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="cointainer">
        <?php
            define('PI', 3.14);


            echo "Hello World using php";
            echo "<br>";

            //variables.
            echo "<h1>Variables</h1>";
            $var1 = 89;
            $var2 = 56;
            echo $var1;
            echo "<br>";
            echo $var2;
            echo "<br>";


            //operators.
            // Arithmetic operators
            echo "<h1>Arithmetic Operator</h1>";
            echo "The Addition: ";
            echo $var1 + $var2;
            echo "<br>";

            echo "The subtraction: ";
            echo $var1 - $var2;
            echo "<br>";

            echo "The Multiplication: ";
            echo $var1 * $var2;
            echo "<br>";

            echo "The Devide: ";
            echo $var1 / $var2;
            echo "<br>";


            // Assignment operators
            echo "<h1>Assignment Operator</h1>";
            $newvar = $var1; 
            $newvar += 1;
            $newvar -= 1;
            $newvar *= 2;
            $newvar /= 2;
            echo "The value of new variable is: ";
            echo $newvar;


            // Comparison operators
            echo "<h1>Comparison Operator</h1>";
            echo "The value of 1==4 is : ";
            echo var_dump(1==4);
            echo "<br>";
            echo "The value of 1!=4 is : ";
            echo var_dump(1!=4);
            echo "<br>";
            echo "The value of 1>=4 is : ";
            echo var_dump(1>=4);
            echo "<br>";
            echo "The value of 1<=4 is : ";
            echo var_dump(1<=4);
            echo "<br>";


            // Increment operators
            echo "<h1>Increment Operator</h1>";
            echo $var1++;
            echo "<br>";
            echo $var1--;
            echo "<br>";
            echo ++$var1;
            echo "<br>";
            echo --$var1;
            echo "<br>";

            // Logical operators
            echo "<h1>Logical Operator</h1>";
            // and(&&)
            $myvar = (true and true);
            echo var_dump($myvar);
            echo "<br>";
            $myvar = (false and false);
            echo var_dump($myvar);
            echo "<br>";
            $myvar = (true and false);
            echo var_dump($myvar);
            echo "<br>";
            $myvar = (false and true);
            echo var_dump($myvar);
            echo "<br>";

            // or(||)
            $myvar = (true or true);
            echo var_dump($myvar);
            echo "<br>";
            $myvar = (false or false);
            echo var_dump($myvar);
            echo "<br>";
            $myvar = (true or false);
            echo var_dump($myvar);
            echo "<br>";
            $myvar = (false or true);
            echo var_dump($myvar);
            echo "<br>";

            // xor
            $myvar = (true xor true);
            echo var_dump($myvar);
            echo "<br>";
            $myvar = (false xor false);
            echo var_dump($myvar);
            echo "<br>";
            $myvar = (true xor false);
            echo var_dump($myvar);
            echo "<br>";
            $myvar = (false xor true);
            echo var_dump($myvar);
            echo "<br>";
        ?>


        <?php
            //DataTypes in php 
            echo "<h1>Data types in php</h1>";
            // 1. String
            echo "<h1>String</h1>";
            $var ="This is a String";
            echo var_dump($var);

            // 2. Integer
            echo "<h1>Integer</h1>";
            $var =67;
            echo var_dump($var);

            // 3. Float
            echo "<h1>Float</h1>";
            $var =67.5;
            echo var_dump($var);

            // 4. Boolean
            echo "<h1>Boolean</h1>";
            $var = true;
            echo var_dump($var);
            echo " </br>";
            //5.Array
            //6.Object
            echo PI;


        ?>

    </div>
</body>
</html>