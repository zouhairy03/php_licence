<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Exercises</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h2 style="text-align: center; background-color: green; margin-top: 15px;">PHP Exercises TP2</h2>
    <table class="table table-bordered">
      <tr>
        <th>Exercise</th>
        <th>Result</th>
      </tr>
      <tr>
        <td>Exercise 1: Arrays</td>
        <td>
          <?php
          $person = array(
              "last_name" => "Doe",
              "first_name" => "John",
              "age" => 30,
              "city" => "Paris"
          );
          echo "<ul>";
          foreach ($person as $key => $value) {
              echo "<li>" . $key . ": " . $value . "</li>";
          }
          echo "</ul>";
          ?>
        </td>
      </tr>
      <tr>
        <td>Exercise 2: Strings</td>
        <td>
          <?php
          $string = "Hello";
          echo "<p>Length of the string: " . strlen($string) . "</p>";
          echo "<p>Uppercase: " . strtoupper($string) . "</p>";
          ?>
        </td>
      </tr>
      <tr>
        <td>Exercise 3: Conditions</td>
        <td>
          <?php
          $number = 7;
          if ($number % 2 == 0) {
              echo "<p>The number is Even</p>";
          } else {
              echo "<p>The number is Odd</p>";
          }
          ?>
        </td>
      </tr>
      <tr>
        <td>Exercise 4: Arrays and Loops</td>
        <td>
          <?php
          $array = array(1, 2, 3, 4, 5);
          echo "<ul>";
          foreach ($array as $value) {
              echo "<li>" . $value . "</li>";
          }
          echo "</ul>";
          ?>
        </td>
      </tr>
      <tr>
        <td>Exercise 5: Strings and Conditions</td>
        <td>
          <?php
          $string = "I love PHP";
          if (strpos($string, "PHP") !== false) {
              echo "<p>The string contains the word 'PHP'.</p>";
          } else {
              echo "<p>The string does not contain the word 'PHP'.</p>";
          }
          ?>
        </td>
      </tr>
      <tr>
        <td>Exercise 6: Multidimensional Arrays</td>
        <td>
          <?php
          $students = array(
              array("name" => "Alice", "grades" => array(14, 15, 16)),
              array("name" => "Bob", "grades" => array(12, 13, 14))
          );
          foreach ($students as $student) {
              $name = $student["name"];
              $grades = $student["grades"];
              $average = array_sum($grades) / count($grades);
              echo "<p>Name: " . $name . ", Average: " . $average . "</p>";
          }
          ?>
        </td>
      </tr>
      <tr>
        <td>Exercise 7: Loops and Conditions</td>
        <td>
          <?php
          echo "<p>Odd numbers from 1 to 10:</p>";
          for ($i = 1; $i <= 10; $i++) {
              if ($i % 2 != 0) {
                  echo $i . " ";
              }
          }
          ?>
        </td>
      </tr>
      <tr>
        <td>Exercise 8: String Manipulation</td>
        <td>
          <?php
          $string = "Hello";
          echo "<p>Reversed string: " . strrev($string) . "</p>";
          ?>
        </td>
      </tr>
    </table>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
