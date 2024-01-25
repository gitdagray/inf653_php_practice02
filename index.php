<?php
/* 
   Place your output code inside the HTML list items for 
   each question comment.

   Non-output PHP logic & values can be placed underneath  
   the questions near the top of the file. See Example 01.
   
   Do not change any of the other code in this file.
*/

/* EXAMPLE: 
   01: create an if statement that outputs
   "x is greater than 5" when the condition is true
*/
$x = 6;
// Don't change the value of $x above


/* 02: create an if else statement that outputs
   "y is greater than 5" when the condition is true
   and "y is less than or equal to 5" when false
*/
$y = 4;
// Don't change the value of $y above


/* 03: create an if elseif else statement that outputs
   "z is greater than 5" when the if condition is true,
   "z is equal to 5" when the elseif condition is true,
   and "z is less than 5" when both are false
   Use an identical (aka strict) equals operator for the elseif.
*/
$z = 5;
// Don't change the value of $z above


/* 04: create a switch statement that outputs
   "Great weather!" when $w is equal to "sunny",
   "Bad weather" when $w is equal to "cloudy",
   and "Average weather" for any other value.
*/
$w = "cloudy";
// Don't change the value of $w above


/* 05: create a switch statement that outputs
   "Freshman" when $grade is equal to "9",
   "Sophomore" when $grade is equal to "10",
   "Junior" when $grade is equal to "11",
   "Senior" when $grade is equal to "12",
   and "Not in High School" for any other value.
*/
$grade = "10";
// Don't change the value of $grade above


/* 06: create an array named ledzep with the following values:
   "Robert", "JPJ", "Jimmy", "John"
   Output "John" from the array
*/
// Create the array on the next line.



/* 07: create a variable named arrlength
   Use the proper PHP function to get the length of 
   the ledzep array you created above.
   Output the variable arrlength to display the correct length.
*/
// Create the variable on the next line.



/* 08: Loop through the ledzep array with a for loop.
   Output "Hello, Robert" and repeat for each element in the array. 
   Put a <br> element at the end of each line of output so 
   your HTML output looks like:
   Hello, Robert
   Hello, JPJ
   etc.
*/


/* 09: Create an associative array named vh with the following
   key / value pairs:
   "vocals": "Dave"
   "guitar": "Eddie"
   "bass": "Michael"
   "drums": "Alex"
   Output the following phrase using the vh array associations:
   "Van Halen band members include Dave, Eddie, Michael, and Alex."
*/
// Create the array on the next line.


/*10: Loop through the vh associative array from #9 above with foreach.
   Output "Key: vocals, Value: Dave" and repeat for each key/value pair. 
   Put a <br> element at the end of each line of output so 
   your HTML output looks like:
    Key: vocals, Value: Dave
    Key: guitar, Value: Eddie
    etc.
*/


/*11: Create a function named simpleMsg that outputs
  "Here is a simple message" when it is called.
  Remember to call the function in the output section, too.
*/
// Create the function below.


/*12: Create a function named hello that has a
   $name parameter. If you pass in the argument 
   "Dave" when you call the function, it 
   should output "Hello Dave!"
   It should work with other argument values, too.
*/
$myName = "Walt";
// Don't change the value of $myName above

/* NOTE: It is important to understand the variable name
   that holds the argument value does NOT have to be
   the same as the $name parameter in the definition
   of the function. Functions should be reusable.
   You should be able to pass in different argument
   variables and your function should still work.
*/
/* Create the function below. Call the function and 
pass in the $myName value as an argument in the output 
section */ 


/*13: Create a function named addTwo that accepts
  two parameters, $x and $y, and returns their sum.
  Create a variable named $myTotal and set it equal
  to the value returned from the function.
  Call the addTwo with the arguments 15 and 3.
  Output the value of $myTotal.
*/
// Create the function and variable below.


/*14: Create a function named getFirst that accepts
  an $array parameter and returns the first value
  of the array. Create a variable named $myFirst
  and set it equal to the value returned from the
  function. Call getFirst with the $blt variable
  provided as the argument.
  Output the value of $myFirst.
*/
$blt = array("bacon", "lettuce", "tomato", "toast", "mayo");
// Don't change the value of $blt above
// Create the function and variable below.


/*15: Create a function named getLast that accepts
  an $array parameter and returns the last value
  of the array. Create a variable named $myLast
  and set it equal to the value returned from the
  function. Call getLast with the $blt variable
  from above provided as the argument.
  Output the value of $myLast.
*/
// Create the function and variable below.


?>

<html>

<head>
    <title>INF653 Practice 02</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mocha/8.1.1/mocha.css"
        integrity="sha512-Ytt2foRGKdIInPXwyS3gxRvfTv4n2wi7uB7neCLH1LjExT+PKBeQu6LNVB4QpHaJqx7m2btagBs4kqxYC1QNFg=="
        crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <main>
        <ul>
            <li>Got Your User ID? (You created it last week)</li>
            <li>Complete Your Assignment?</li>
            <li>If so, you are ready to click submit.</li>
        </ul>
        <button id="submitButton">Submit Your Assignment</button>
        <p>Your output should only be in the ordered list below.</p>
        <ol>
            <li id="1"><?php if ($x > 5) {
                echo "x is greater than 5"; 
              }
            ?></li>
            
            <li id="2"><?php /* #2 output here */ ?></li>
            <li id="3"><?php /* #3 output here */ ?></li>
            <li id="4"><?php /* #4 output here */ ?></li>
            <li id="5"><?php /* #5 output here */ ?></li>
            <li id="6"><?php /* #6 output here */ ?></li>
            <li id="7"><?php /* #7 output here */ ?></li>
            <li id="8"><?php /* #8 output here */ ?></li>
            <li id="9"><?php /* #9 output here */ ?></li>
            <li id="10"><?php /* #10 output here */ ?></li>
            <li id="11"><?php /* #11 output here */ ?></li>
            <li id="12"><?php /* #12 output here */ ?></li>
            <li id="13"><?php /* #13 output here */ ?></li>
            <li id="14"><?php /* #14 output here */ ?></li>
            <li id="15"><?php /* #15 output here */ ?></li>
        </ol>
    </main>

    <div id="mocha"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mocha/8.1.1/mocha.min.js"
        integrity="sha512-vOMXB+Rjob/NIG88cgEK+t6Uuf0zJIzQrfKH8VFc7AW18y/rzszRXaKPNAPf1ePv2hQ3eYR8yEu4S85Np3DhLA=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chai/4.2.0/chai.min.js"
        integrity="sha512-x3BwhuxT44pOQZanacQyDnrB2r1L1AUfjUaefYArTHR9sHEvvy3NSnnm5Z7GAl5YPc3+GEWFT0S34obDSzUvaQ=="
        crossorigin="anonymous"></script>
    <script>
    mocha.setup("bdd");
    </script>
    <script src="https://serene-roentgen-345cd7.netlify.app/tests/inf653_php_practice02Test.min.js"></script>
    <script>
    mocha.run();
    </script>
    <script src="https://serene-roentgen-345cd7.netlify.app/util/inf653_php_util.min.js"></script>

</body>

</html>