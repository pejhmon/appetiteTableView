<?php require_once 'dbconnection.php'; ?>
<?php include 'header.php'; ?>

<div class='container'>
    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>id</th>
                    <th>group</th>
                    <th>password</th>
                    <th>nhsnumber</th>
                    <th>dateofbirth</th>
                    <th>gender</th>
                    <th>activitylevel</th>
                    <th>registrationtimestamp</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query  = "SELECT * FROM users";
                    $result = sqlsrv_query($conn, $query);
                    confirm_query($result);     
                ?>
                <?php
                    while($row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)){
                ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["group"]; ?></td>
                        <td><?php echo $row["password"]; ?></td>
                        <td><?php echo $row["nhsnumber"]; ?></td>
                        <td><?php echo $row["dateofbirth"]; ?></td>
                        <td><?php echo $row["gender"]; ?></td>
                        <td><?php echo $row["activitylevel"]; ?></td>
                        <td><?php echo $row["registrationtimestamp"]; ?>
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