<table border="1" class="table">
      <tr>
        <td>photo</td>
        <td>name</td>
        <td>price</td>
        <td>description</td>
        <td>type</td>
        <td>update or delete</td>

        <?php
        //create the database connection
        include_once("config.php");
        $sql = "select * from appointment";
        if ($result = $conn->query($sql)) {
          if ($result->num_rows > 0) {


            while ($row = $result->fetch_assoc()) {

              echo "<tr>";
              echo "<td>" . $row['appt_id'] . "</td>";
              echo "<td>" . $row['pet_id'] . "</td>";
              echo "<td>" . $row['user_id'] . "</td>";
              echo "<td>" . $row['pet_type'] . "</td>";
              echo "<td>" . $row['pet_name'] . "</td>";
              echo "<td>" . $row['age'] . "</td>";
              echo "<td>" . $row['reason'] . "</td>";
              echo "<td>" . $row['date'] . "</td>";
              echo "<td>" . $row['time'] . "</td>";
              echo "<td>" . $row['owner_name'] . "</td>";
              echo "<td>" . $row['contact_no'] . "</td>";
              echo "</tr>";
            }
          }
        } 
        else {
          echo "no results";
        }

        $conn->close();
        ?>
    </table>