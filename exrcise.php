
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <title>Days of the Week</title>
</head>
<body>
  <div class="container">
    <h2>Days of the Week</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Exercise</th>
          <th>Output</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Exercise 1: Creating an array</td>
          <td>
            <?php
            $daysOfWeek = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
            echo "<pre>" . print_r($daysOfWeek, true) . "</pre>";
            ?>
          </td>
        </tr>
        <tr>
          <td>Exercise 2: Manipulating arrays</td>
          <td>
            <?php
            array_push($daysOfWeek, "Sunday");
            echo "<pre>" . print_r($daysOfWeek, true) . "</pre>";
            ?>

          </td>
        </tr>
        <tr>
          <td>Exercise 3: Accessing elements</td>
          <td><?php echo $daysOfWeek[0] ?></td>

          <td>
            <?php
            echo $daysOfWeek[1];
            ?>
          </td>
        </tr>
        <tr>
          <td>Exercise 4: Modifying the array</td>
          <td>
            <?php
            $daysOfWeek[2] = "Thursday";
            echo "<pre>" . print_r($daysOfWeek, true) . "</pre>";
            ?>
          </td>
        </tr>
        <tr>
          <td>Exercise 5: Array traversal</td>
          <td>
            <?php
            echo "<ul>";
            foreach ($daysOfWeek as $day) {
              echo "<li>$day</li>";
            }
            echo "</ul>";
            ?>
          </td>
        </tr>
        <tr>
          <td>Exercise 6: Associative array</td>
          <td>
            <?php
            $daysAssoc = [
              "Monday" => "Lundi",
              "Tuesday" => "Mardi",
              "Wednesday" => "Mercredi",
              "Thursday" => "Jeudi",
              "Friday" => "Vendredi",
              "Saturday" => "Samedi",
              "Sunday" => "Dimanche"
            ];
            echo "<pre>" . print_r($daysAssoc, true) . "</pre>";
            ?>
          </td>
        </tr>
        <tr>
          <td>Exercise 7: Searching in an array</td>
          <td>
            <?php
            if (in_array("Monday", $daysOfWeek)) {
              echo "The day 'Monday' exists in the array.";
            } else {
              echo "The day 'Monday' does not exist in the array.";
            }
            ?>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>
