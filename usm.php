<?php require_once 'dbconnection.php'; ?>
<?php include 'header.php'; ?>

<div class='container'>
    <div class="row">
        <br/><br/><br/><br/><br/><br/><br/>
        
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>id</th>
                    <th>userid</th>
                    <th>datetime</th>
                    <th>symptomtable</th>
                    <th>symptomid</th>
                    <th>symptom</th>
                    <th>rating</th>
                    <th>comment</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query  = "SELECT * FROM usersymptommanifest";
                    $result = sqlsrv_query($conn, $query) or die("Query failed");
                ?>
                <?php
                    while($row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)){
                ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["userid"]; ?></td>
                        <td><?php echo $row["datetime"]; ?></td>
                        <td><?php echo $row["symptomtable"]; ?></td>
                        <td><?php echo $row["symptomid"]; ?></td>
                        <td><?php echo $row["symptom"]; ?></td>
                        <td><?php echo $row["rating"]; ?></td>
                        <td><?php echo $row["comment"]; ?></td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>