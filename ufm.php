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
                    <th>foodtable</th>
                    <th>foodcode</th>
                    <th>foodname</th>
                    <th>quantity</th>
                    <th>edibleproportion</th>
                    <th>energy_kcal</th>
                    <th>protein_g</th>
                    <th>water_g</th>
                    <th>carbohydrate_g</th>
                    <th>fat_g</th>
                    <th>meal</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query  = "SELECT * FROM userfoodmanifest";
                    $result = sqlsrv_query($conn, $query) or die("Query failed");
                ?>
                <?php
                    while($row = sqlsrv_fetch_array($result)){
                ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["userid"]; ?></td>
                        <td><?php echo date_format($row["datetime"],'d/m/Y H:i:s'); ?></td>
                        <td><?php echo $row["foodtable"]; ?></td>
                        <td><?php echo $row["foodcode"]; ?></td>
                        <td><?php echo $row["foodname"]; ?></td>
                        <td><?php echo $row["quantity"]; ?></td>
                        <td><?php echo $row["edibleproportion"]; ?></td>
                        <td><?php echo $row["energy_kcal"]; ?></td>
                        <td><?php echo $row["protein_g"]; ?></td>
                        <td><?php echo $row["water_g"]; ?>
                        <td><?php echo $row["carbohydrate_g"]; ?></td>
                        <td><?php echo $row["fat_g"]; ?></td>
                        <td><?php echo $row["meal"]; ?>
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