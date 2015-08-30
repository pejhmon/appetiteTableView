<?php require_once 'dbconnection.php'; ?>
<?php include 'header.php'; ?>

<div class='container'>
    <div class="row">
        <br/><br/><br/><br/><br/><br/><br/>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>id</th>
                    <th>admin</th>
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
                    $result = sqlsrv_query($conn, $query) or die("Query failed");
                ?>
                <?php
                    while($row = sqlsrv_fetch_array($result)){
                ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["admin"]; ?></td>
                        <td><?php echo $row["password"]; ?></td>
                        <td><?php echo $row["nhsnumber"]; ?></td>
                        <td><?php echo $row["dateofbirth"]; ?></td>
                        <td><?php echo $row["gender"]; ?></td>
                        <td><?php echo $row["activitylevel"]; ?></td>
                        <td><?php echo date_format($row["registrationtimestamp"],'d/m/Y H:i:s'); ?></td>
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
