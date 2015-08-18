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
                    <th>gender</th>
                    <th>weight</th>
                    <th>activitylevel</th>
                    <th>formulacalories</th>
                    <th>formulaprotein</th>
                    <th>formulafluid</th>
                    <th>additionalcalories</th>
                    <th>additionalprotein</th>
                    <th>additionalfluid</th>
                    <th>additionalactivitylevel</th>
                    <th>finalcalories</th>
                    <th>finalprotein</th>
                    <th>finalfluid</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query  = "SELECT * FROM userrequirementsmanifest";
                    $result = sqlsrv_query($conn, $query) or die("Query failed");
                ?>
                <?php
                    while($row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)){
                ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["userid"]; ?></td>
                        <td><?php echo $row["datetime"]; ?></td>
                        <td><?php echo $row["gender"]; ?></td>
                        <td><?php echo $row["weight"]; ?></td>
                        <td><?php echo $row["activitylevel"]; ?></td>
                        <td><?php echo $row["formulacalories"]; ?></td>
                        <td><?php echo $row["formulaprotein"]; ?></td>
                        <td><?php echo $row["formulafluid"]; ?></td>
                        <td><?php echo $row["additionalcalories"]; ?></td>
                        <td><?php echo $row["additionalprotein"]; ?></td>
                        <td><?php echo $row["additionalfluid"]; ?></td>
                        <td><?php echo $row["additionalactivitylevel"]; ?></td>
                        <td><?php echo $row["finalcalories"]; ?></td>
                        <td><?php echo $row["finalprotein"]; ?></td>
                        <td><?php echo $row["finalfluid"]; ?></td>
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