<?php
include "header.php";
require_once("DB.php");
?>

<h2>Här är dina ordrar</h2>

<table id="sortable">
        <thead>
            <th><a href="#" class="sort" data-sort="date">Datum</a></th>
            <th><a href="#" class="sort" data-sort="customer">Kund</a></th>
            <th><a href="#" class="sort" data-sort="ipadress">IP Adress</a></th>
            <th><a href="#" class="sort" data-sort="orderid">Order ID</a></th>
            <th><a href="#" class="sort" data-sort="checkedout">Utcheckad</a></th>
            <th><input placeholder="Sök.." class="form-control search"></th>
        </thead>
        <tbody class="list">
            <?php
            $userorders[] = $db->db_ListOrdersByUser($_SESSION["SSN"]);
            echo '<form method="post" >';
            if($userorders == false){
                echo "Error";
                }  else {
                    for ($i = 0; $i < count($userorders[0]); $i++){
                        echo '<tr>';
                        echo '<td class="date order_list">'.$userorders[0][$i]["Date"].'</td>';
                        echo '<td class="customer order_list">'.$userorders[0][$i]["Customer"].'</td>';
                        echo '<td class="ipadress order_list">'.$userorders[0][$i]["IP_Adress"].'</td>';
                        echo '<td class="orderid order_list">'.$userorders[0][$i]["ID"].'</td>';
                        echo '<td class="checkedout order_list">'.$userorders[0][$i]["HasCheckedOut"].'</td>';
                        echo '</tr>';
                            }
                        }
                    echo '</form>';
                    ?>
        </tbody>
    </table>
<script>
    var options = {
        valueNames: [ "date", "customer", "ipadress", "orderid","checkedout" ]
    };
        
        var sortable = new List("sortable", options);
</script>


<?php include "footer.php"; ?>