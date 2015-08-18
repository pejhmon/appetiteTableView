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
                    <th>weight</th>
                    <th>swollenfeet</th>
                    <th>swollenlegs</th>
                    <th>swollenabdomen</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query  = "SELECT * FROM userweightmanifest";
                    $result = sqlsrv_query($conn, $query) or die("Query failed");
                ?>
                <?php
                    while($row = sqlsrv_fetch_array($result)){
                ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["userid"]; ?></td>
                        <td><?php echo $row["datetime"]; ?></td>
                        <td><?php echo $row["weight"]; ?></td>
                        <td><?php echo $row["swollenfeet"]; ?></td>
                        <td><?php echo $row["swollenlegs"]; ?></td>
                        <td><?php echo $row["swollenabdomen"]; ?></td>
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