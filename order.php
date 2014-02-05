<?php
 include "header.php";
?>

<article>
    <h3>I min varukorg</h3>
    <h3>Pris</h3>
    <h3>Antal</h3>
    <h3>Ta bort</h3>
    
    <button type="button">X</button>
  
    <div id="ordernow">
    <button type="button">Slutför beställning</button>
    <p>Genom att trycka på Slutför beställning bekräftar du att din beställning kommer att skickas  inom 3-5 dagar. All betalning sker genom postförskott, detta innebär att du betalar när du hämtar ut ditt paket.</p>
    </div>
    
</article>


<table>
    <thead>
        <th><a href="#" class="sort" data-sort="name">Produktnamn</a></th>
        <th><a href="#" class="sort" data-sort="amount">Antal</a></th>
        <th></th>
        <th><a href="#" class="sort" data-sort="price">Pris</a></th>
    </thead>
    <tbody>
        <?php

        $order[] = $db->db_GetProductsInCart($_SESSION["OrderID"]);
        var_dump($order);
        var_dump($_SESSION["OrderID"]);

        echo '<form method="post" >';

        if($order == false){
        return "Error";
        }  else {
        
       
        for ($i = 0; $i < count($order[0]); $i++){
            $product = $db->db_GetProduct($order[0][$i]["Product_ID"]);
            echo '<h2>Product</h2>';
            var_dump($product);
            echo '<tr>';
            echo '<td class="name"><a href="">'.$product["Name"].'</a></td>';
            echo '<td class="amount"><input name="'.$order[0][$i]["Product_ID"].'" value="'.$order[0][$i]["Amount"].'" ></td>';
            echo '<td><button>Uppdatera</button><button>Ta bort</button></td>';
            echo '<td class="price"><a href="">'.$product["Price"].'</a></td>';
            echo '</tr>';
            
                }
            }

            echo '</form>';
            ?>
    </tbody>
</table>


<?php
include "footer.php";
?>