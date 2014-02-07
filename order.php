<?php include "header.php";

if(isset($_POST['delete'])){ // Om man trycker på kanppen 'delete' körs funktionen för att ta bort en produkt från orderlist
	if($db->db_DeleteProductFromOrderlist($_POST['delete'])){
        echo "Produkten är nu borttagen från ordern";
	} else {
		echo "Kunde inte radera produkten från ordern";
	}
}

if(isset($_POST['update'])){
    if($db->db_UpdateDataToOrderlist($_POST[$_POST['update']],$_SESSION["OrderID"],$_POST['update'])){
        echo "Antalet produkter är nu uppdaterat!";
    } else {
        echo "Kunde inte uppdatera antalet produkter!";
    }
}

if(isset($_POST['checkout'])){
    if($db->db_CheckOutOrder($_SESSION["OrderID"])){
        echo "Du har nu checkat ut och din order kommer att behandlas";
    } else {
        echo "Din order har inte skickats iväg";
    }
}
?>
<article>
    <table id="sortable">
        <thead>
            <th><a href="#" class="sort" data-sort="name">Produktnamn</a></th>
            <th><a href="#" class="sort" data-sort="amount">Antal</a></th>
            <th></th>
            <th><a href="#" class="sort" data-sort="price">Pris</a></th>
            <th><a href="#" class="sort" data-sort="total">Totalt</a></th>
           
        </thead>
        <tbody>
            <?php
            $order[] = $db->db_GetProductsInCart($_SESSION["OrderID"]);
            echo '<form method="post" >';
            if($order == false){
                return "Error";
                }  else {
                $totalvalue = 0;
                for ($i = 0; $i < count($order[0]); $i++){
                    $product = $db->db_GetProduct($order[0][$i]["Product_ID"]);
                        echo '<tr>';
                        echo '<td class="name order_list"><a href="">'.$product["Name"].'</a></td>';
                        echo '<td class="amount order_list"><input name="'.$order[0][$i]["Product_ID"].'" value="'.$order[0][$i]["Amount"].'" ></td>';
                        echo '<td><button name="update" value="'.$order[0][$i]["Product_ID"].'">Uppdatera</button><button name="delete" value="'.$order[0][$i]["Product_ID"].'">Ta bort</button></td>';
                        echo '<td class="price order_list">'.$product["Price"].' kr</td>';
                        echo '<td class="total order_list">'.($product["Price"]*$order[0][$i]["Amount"]).' kr</td>';
                        echo '</tr>';
                        $totalvalue = $totalvalue + ($product["Price"]*$order[0][$i]["Amount"]);
                        }
                    }
                echo '</form>';
                ?>
        </tbody>
         <tfoot>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td class="totalvalue"><strong>Totalt  </strong></td>
                <td class="totalvalue"><?php echo $totalvalue;?> kr <em>(<?php echo ($totalvalue * 0.8)?> kr exkl.moms)</em></td>
            </tr>
        </tfoot>
    </table>
    <script>
    var options = {
        valueNames: [ "date", "customer", "ipadress", "orderid","checkedout" ]
    };
        
        var sortable = new List("sortable", options);
</script>
    <form method="post">
    <div class="ordernow">
        <p>Genom att trycka på Slutför beställning bekräftar du att din beställning kommer att skickas  inom 3-5 dagar. All betalning sker genom postförskott, detta innebär att du betalar när du hämtar ut ditt paket.</p>
        <button type="submit" name="checkout" class="check_out">Checka ut</button>
    </div>
        </form>
</article>

<?php include "footer.php"; ?>