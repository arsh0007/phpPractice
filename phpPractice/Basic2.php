<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    *{
        margin:0;
        padding: 0;
        box-sizing:border-box;
    }
    .container{
        max-width: 80%;
        background-color:grey;
        margin:auto;
        margin-top:40px;
        padding:30px;
    }
</style>
</head>


<body>
    <div class="container">
        <h1>Php If/Else</h1>
        <p>Your party status is here: </p> 
        <!-- 
            if Else
            array
            loop-> for, foreach, while, do while
        -->
        <!-- <?php
            $age = 7;
            if($age>18)
            {
                echo" You can go the party.";
            }
            else if ($age == 7)
            {
                echo " You are 7 years old. ";
            } 
            else
            {
                echo " You can not go to party.";
            }


            echo "<br>";
            echo "<h1>Arrays</h1>";
        
            $language = array("PHP", "Python", "Nodejs", "C++");

                echo $language[0];
                echo "<br>";
                echo $language[1];
                echo "<br>";
                echo $language[2];
                echo "<br>";
                echo $language[3];

                echo "<br>";
                echo count($language);

            //Loops in php
            echo "<br>";
            echo "<h1>Loops</h1>";
            $a = 0;
            echo "<br> <h1>While Loop</h1>";
            while ($a <= 10) {
                
                echo "<br>The value of a is: ";
                echo $a;
                $a++;
            }

            $a = 0;
            while ($a < count($language)) {
                
                echo "<br>The value of Language is: ";
                echo $language[$a];
                $a++;
            }

            $a = 0;
            echo "<br><h1>do While Loop</h1>";
            do {
                echo "<br>The value of Language is: ";
                echo $a;
                $a++;
            } while ($a <= 10);

            echo "<br><h1>For Loop</h1>";
            $a=200;
            for ($a=0; $a < 10 ; $a++) { 
                echo "<br>The value of Language is: ";
                echo $a;
            }
            echo "<br><h1>Foreach Loop</h1>";
            foreach ($language as $value) {
                echo "<br> The Value is: ";
                echo $value;
            }

        ?> -->


        <!-- 
            Functions    
        -->
        <!-- <?php
            function print5()
            {
                echo"FIVE";
            }
            print5();
            print5();
            print5();
            print5();

            function printnum($nums)
            {
                echo "<br> Your number is: ";
                echo  $nums;
            }
            printnum(89);
        ?> -->



        <!-- 
            String
        -->
        <?php
            $str = "This is a String";
            echo $str;
            $lenn = Strlen($str);
            echo "<br>The Length of the string is: ". $lenn . "Thank You<br>";
            echo "<br>The number of word in the string is: ". str_word_count($str) . "Thank You<br>";
            echo "<br>The reversed string is: ". strrev($str) . "Thank You<br>";
            echo "<br>The search for is in this string is: ". strpos($str, "is") . "Thank You<br>";
            echo "<br>The replaced string is: ". str_replace("is", "at", $str ) . "Thank You<br>";
        ?>
    </div>
</body>
</html>