<?php require_once 'dbconnection.php'; ?>
<?php include 'header.php'; ?>

<div class='container'>
    <div class="row">
        <br/><br/><br/><br/><br/><br/><br/>
        
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>foodcode</th>
                    <th>userid</th>
                    <th>datetime</th>
                    <th>foodname</th>
                    <th>edibleproportion</th>
                    <th>energy_kcal</th>
                    <th>protein_g</th>
                    <th>water_g</th>
                    <th>fat_g</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query  = "SELECT * FROM userfoodlist";
                    $result = sqlsrv_query($conn, $query);
                    confirm_query($result);     
                ?>
                <?php
                    while($row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC)){
                ?>
                    <tr>
                        <td><?php echo $row["foodcode"]; ?></td>
                        <td><?php echo $row["userid"]; ?></td>
                        <td><?php echo $row["datetime"]; ?></td>
                        <td><?php echo $row["foodname"]; ?></td>
                        <td><?php echo $row["edibleproportion"]; ?></td>
                        <td><?php echo $row["energy_kcal"]; ?></td>
                        <td><?php echo $row["protein_g"]; ?></td>
                        <td><?php echo $row["water_g"]; ?>
                        <td><?php echo $row["fat_g"]; ?>
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