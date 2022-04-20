<!-- Sorry Robin labyu <3-->
<?php 
$host = "localhost";
$port = "3306";
$dbUserName = "root";
$dbPassword = "root";
$dbName = "tgr_merch";
$tableDB = "orders";
$pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbName;user=$dbUserName;password=$dbPassword"); ?>
<!DOCTYPE html>
<html>
<head>
<title>Insert title here</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

</head>
    <body>
     <div>
        <table border="1">
                <tr>
                    <th>ID<th>
                    <th>Order ID</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Customer Number</th>
                    <th>Customer Email</th>
                    <th>Customer Address</th>
                    <th>Merch Type</th>
                    <th>Merch Price</th>
                    <th>Courier Choice</th>
                    <th>Courier Number</th>
                    <th>Order Status</th>
                    <th>Payment Status</th>
                </tr>
                <?php
                    function outputMySQLToHTMLTable(pdo $pdo, string $table)
                    {
                        $tableNames = $pdo->query('SHOW TABLES')->fetchAll(PDO::FETCH_COLUMN);
                        $stmt = $pdo->query('SELECT * FROM '.$table);
                        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        $columnCount = $stmt->columnCount();
                        if ($data) {
                            foreach ($data as $row) {
                                echo '<tr>';
                                foreach ($row as $cell) {
                                    echo '<td>'.htmlspecialchars($cell).'</td>';
                                }
                                echo '</tr>';
                            }
                        } else {
                            echo '<tr><td colspan="'.$columnCount.'">No records in the table!</td></tr>';
                        }
                        echo '</table>';
                    }

                    outputMySQLToHTMLTable($pdo, $tableDB);
                ?>
        </table>
    </div>
    <?php
        if(isset($_POST['insert']))
        {
            $OrderID = $_REQUEST['OrderID'];
            $LastName = $_REQUEST['LastName'];
            $FirstName = $_REQUEST['FirstName'];
            $CustomerNumber = $_REQUEST['CustomerNumber'];
            $CustomerEmail = $_REQUEST['CustomerEmail'];
            $CustomerAddress = $_REQUEST['CustomerAddress'];
            $MerchType = $_REQUEST['MerchType'];
            $MerchPrice = $_REQUEST['MerchPrice'];
            $CourierChoice = $_REQUEST['CourierChoice'];
            $CourierNumber = $_REQUEST['CourierNumber'];
            $OrderStatus = $_REQUEST['OrderStatus'];
            $PaymentStatus = $_REQUEST['PaymentStatus'];
            $sql = "INSERT INTO $tableDB (`OrderID`, `LastName`, `FirstName`, `CustomerNumber`, `CustomerEmail`, `CustomerAddress`, `MerchType`, `MerchPrice`, `CourierChoice`, `CourierNumber`, `OrderStatus`, `PaymentStatus`) 
                    VALUES ('$OrderID', '$LastName', '$FirstName', '$CustomerNumber', '$CustomerEmail', '$CustomerAddress', '$MerchType', '$MerchPrice', '$CourierChoice', '$CourierNumber', '$OrderStatus', '$PaymentStatus')"; 
            if($pdo->query($sql))
            {
                echo '<h3>Successful</h3>';
                header('Location:databaseControl.php?status=SUCCESS');
            }
            else
            {
                echo '<h3>Unsuccessful, Retry</h3>';
            }
        }
        else
        {
            echo '<h3>Failure</h3>';
        }
    ?>
    <h3>Insert</h3>
    <form action="#" method="post">
        <input data-aos="zoom-out-right" data-aos-delay="1400" data-aos-duration="1400" type="text" name="OrderID"
                    class="form-field" placeholder="Order ID" />
        <input data-aos="zoom-out-right" data-aos-delay="1600" data-aos-duration="1400" type="text" name="LastName"
                    class="form-field" placeholder="Last Name" />
        <input data-aos="zoom-out-right" data-aos-delay="1400" data-aos-duration="1400" type="text" name="FirstName"
                    class="form-field" placeholder="First Name" />
        <input data-aos="zoom-out-right" data-aos-delay="1600" data-aos-duration="1400" type="text" name="CustomerNumber"
                    class="form-field" placeholder="Customer Number" />
        <input data-aos="zoom-out-right" data-aos-delay="1400" data-aos-duration="1400" type="text" name="CustomerEmail"
                    class="form-field" placeholder="Customer Email" />
        <input data-aos="zoom-out-right" data-aos-delay="1600" data-aos-duration="1400" type="text" name="CustomerAddress"
                    class="form-field" placeholder="Customer Address" />
        <input data-aos="zoom-out-right" data-aos-delay="1400" data-aos-duration="1400" type="text" name="MerchType"
                    class="form-field" placeholder="Merch Type" />
        <input data-aos="zoom-out-right" data-aos-delay="1600" data-aos-duration="1400" type="text" name="MerchPrice"
                    class="form-field" placeholder="Merch Price" />
        <input data-aos="zoom-out-right" data-aos-delay="1400" data-aos-duration="1400" type="text" name="CourierChoice"
                    class="form-field" placeholder="CourierChoice" />
        <input data-aos="zoom-out-right" data-aos-delay="1600" data-aos-duration="1400" type="text" name="CourierNumber"
                    class="form-field" placeholder="CourierNumber" />
        <input data-aos="zoom-out-right" data-aos-delay="1400" data-aos-duration="1400" type="text" name="OrderStatus"
                    class="form-field" placeholder="Order Status" />
        <input data-aos="zoom-out-right" data-aos-delay="1600" data-aos-duration="1400" type="text" name="PaymentStatus"
                    class="form-field" placeholder="Payment Status" />
		<input data-aos="zoom-out" data-aos-delay="1800" data-aos-duration="1400" type="submit"
				    value="Insert" name="insert" />
    </form>

    <h3>Update</h3>
    <form action="#" method="post">
        <input data-aos="zoom-out-right" data-aos-delay="1400" data-aos-duration="1400" type="text" name="ID"
                    class="form-field" placeholder="ID" />
        <label for="dataColumn">Column</label>
        <select id="dataColumn" name="dataColumn">
                    <option value="OrderID">Order ID</option>
                    <option value="LastName">Last Name</option>
                    <option value="FirstName">First Name</option>
                    <option value="CustomerNumber">Customer Number</option>
                    <option value="CustomerEmail">Customer Email</option>
                    <option value="CustomerAddress">Customer Address</option>
                    <option value="MerchType">Merch Type</option>
                    <option value="MerchPrice">Merch Price</option>
                    <option value="CourierChoice">Courier Choice</option>
                    <option value="CourierNumber">Courier Number</option>
                    <option value="OrderStatus">Order Status</option>
                    <option value="PaymentStatus">Payment Status</option>
        </select>
        <input data-aos="zoom-out-right" data-aos-delay="1600" data-aos-duration="1400" type="text" name="dataReplacement"
                    class="form-field" placeholder="Insert Data" />
        <input data-aos="zoom-out" data-aos-delay="1800" data-aos-duration="1400" type="submit"
				    value="Insert" name="Update" />
    </form>
    <?php 
        if(isset($_POST['Update']))
        {
            $dataColumn = $_POST['dataColumn'];
            $dataReplacement = $_POST['dataReplacement'];
            $id = $_POST['ID'];
            $sql = "UPDATE $tableDB SET $dataColumn='$dataReplacement' WHERE ID=$id";
            if($pdo->query($sql) === TRUE)
            {
                echo "<h3>Successful</h3>";
                header('Location:databaseControl.php?status=SUCCESS');
            }
        }
    ?>

    <h3>Delete</h3>
    <form method="POST">
    <input data-aos="zoom-out-right" data-aos-delay="1400" data-aos-duration="1400" type="text" name="ID"
                    class="form-field" placeholder="ID" />
    <input data-aos="zoom-out" data-aos-delay="1800" data-aos-duration="1400" type="submit"
				    value="Delete" name="delete" />
    </form>
    <?php 
        if(isset($_POST['delete']))
        {
            $id = $_POST['ID'];
            $sql = "DELETE FROM $tableDB WHERE ID = $id";
            // echo "Are you sure to delete $id?";
            // echo '<input type="submit" name="yes" value="Yes"></input> <input type="submit" name="no" value="No"></input>';
            // if(isset($_POST['yes']))
            // {
                 if($pdo->query($sql) === TRUE)
                {
                    echo "<h3>Successful</h3>";
                    header('Location:databaseControl.php?status=SUCCESS');
                }
            //}            
        }
    ?>
    
</body>
</html>

