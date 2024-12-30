<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sort Student Records</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 20px;
            /* display:flex;
            justify-content: center;
            align-items: center;
            flex-direction: column; */
        }

        table {
            margin: auto;
            border-collapse: collapse;
            width: 80%;
        }

        th,
        td {
            padding: 10px;
            border: 2px solid rgb(0, 0, 0);
        }

        th {
            background-color:rgba(249, 4, 4, 0.57);
        }
    </style>
</head>

<body>
    <h1>Sorted Student Records</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Grade</th>
        </tr>
        <?php
      $conn = new mysqli("localhost", "root", "", "student123");
      $students = $conn->query("SELECT * FROM student124")->fetch_all(MYSQLI_ASSOC);
      for ($i = 0; $i < count($students) - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($students); $j++) {
          if ($students[$j]['Name'] < $students[$min]['Name']) $min = $j;
        }
        $temp = $students[$min];
        $students[$min] = $students[$i];
        $students[$i] = $temp;
      }
      foreach ($students as $student) {
        echo "<tr><td>{$student['ID']}</td><td>{$student['Name']}</td><td>{$student['Grade']}</td></tr>";
      }
      $conn->close();
    ?>
    </table>
</body>

</html>