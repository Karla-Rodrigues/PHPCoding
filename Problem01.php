<!DOCTYPE html>
<html>

<body>

      <?php

      /*
      Made by Karla Rodrigues - December 03, 2020
      
      Fix the bugs and improve the class “FizzBuzz” below with the following requirements:

      - The function prints the numbers from 1 to 100.
      - For multiples of three it prints 'Fizz' instead of the number
      - For multiples of five it prints 'Buzz' instead of the number
      - But, for numbers which are multiples of both three and five, it only prints 'FizzBuzz'
*/

      class FizzBuzz

      {

            function fizzbuzz()
            {

                  for ($i = 1; $i < 101; $i++) {

                        if ($i % 3 == 0 && $i % 5 == 0) {
                              echo '<p> FizzBuzz </p>';
                        } elseif ($i % 3 == 0) {
                              echo '<p> Fizz </p>';
                        } elseif ($i % 5 == 0) {
                              echo '<p> Buzz </p>';
                        } else {
                              echo "<p>" . $i . "</p>";
                        }
                  }
            }
      }

      $test = new FizzBuzz();

      ?>

</body>

</html>