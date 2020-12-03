<!DOCTYPE html>
<html>

<body>

      <?php

      /*
      Made by Karla Rodrigues - December 03, 2020
      
      Implement the function in the class “VowelFinder” below. The requirements are:

      - Return unique vowels from a given string in the order they appear.
      - Bonus: implement the “Y” rule: A “Y” is a consonant if it begins a string and the string is greater than 1 character. Otherwise, a “Y” is considered a vowel.
*/

      class VowelFinder

      {

            public function findVowels($string)
            {
                  $lowerStr = strtolower($string);

                  $a = true;
                  $e = true;
                  $i = true;
                  $o = true;
                  $u = true;
                  $y = true;

                  $array = str_split($lowerStr);

                  for ($j = 1; $j < count($array); $j++) {

                        if ($array[$j] == 'a' && $a == true) {
                              echo '<p> A </p>';
                              $a = false;
                        } elseif ($array[$j] == 'e' && $e == true) {
                              echo '<p> E </p>';
                              $e = false;
                        } elseif ($array[$j] == 'i' && $i == true) {
                              echo '<p> I </p>';
                              $i = false;
                        } elseif ($array[$j] == 'o'  && $o == true) {
                              echo '<p> O </p>';
                              $o = false;
                        } elseif ($array[$j] == 'u'  && $u == true) {
                              echo '<p> U </p>';
                              $u = false;
                        } elseif ($array[$j] == 'y' && $array[$j - 1] == " " && $array[$j + 1] != " " && $y == true) {
                              echo '<p> Y </p>';
                              $y = false;
                        }
                  }

                  return $string;
            }
      }

      $test = new VowelFinder();
      $test->findVowels("MY CAT IS INSANE ABOUT YOGURT AND YODA");

      ?>

</body>

</html>