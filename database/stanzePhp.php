<!-- PHP -->
<?php
    include_once __DIR__.'.\dbCall.php';
    ?>
        <table style="text-align: center;">
            <thead>
                <tr>
                    <th>id</th>
                    <th>numero stanza</th>
                </tr>
            </thead>
            <?php

            $sql = "SELECT id, room_number FROM stanze";
            $result = $conn->query($sql);
            if ($result && $result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    ?>
                        <tbody>
                            <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['room_number'] ?></td>
                            </tr>
                        </tbody>
                <?php
                }
            } elseif ($result) {
                ?>
                    <tbody>
                        <tr>
                            <td colspan="2"><?php echo 'NOT RESULTS'] ?></td>
                            <
                        </tr>
                    </tbody>
            <?php

            } else {
                ?>
                    <tbody>
                        <tr>
                            <td colspan="2"><?php echo 'ERROR'] ?></td>
                            <
                        </tr>
                    </tbody>
            <?php
            }
            ?>
            </table>
            <?php
    $conn->close();
?>
