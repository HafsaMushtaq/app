<?php
if(isset($_POST["id"]) && !empty($_POST["id"])){

//include database configuration file
include('connection/connect.php');


//count all rows except already displayed
$queryAll = mysqli_query($connect,"SELECT COUNT(*) as num_rows FROM images WHERE image_id > ".$_POST['id']." ORDER BY image_id DESC");
$row = mysqli_fetch_assoc($queryAll);
$allRows = $row['num_rows'];

$showLimit = 4;

//get rows query
$query = mysqli_query($connect, "SELECT * FROM images WHERE image_id > ".$_POST['id']." ORDER BY image_id ASC LIMIT ".$showLimit);

//number of rows
$rowCount = mysqli_num_rows($query);

if($rowCount > 0){ 
    while($row = mysqli_fetch_assoc($query)){ 
        $tutorial_id = $row["image_id"]; ?>
        <?php 
           echo " <div class=\"col-md-3 col-sm-6\">
                        <div class=\"single-shop-product\">
                            <div class=\"product-upper\">
                                <img src=".$row["image_path"]." alt=".$row["image_name"]."> 
                                </div>
                                <h2><a href=\"#\">".$row["product_name"]."</a></h2>
                                <div class=\"product-carousel-price\">
                                    <ins>".$row["original_price"]."</ins> <del>$999.00</del>
                                </div>  
                                
                                <div class=\"product-option-shop\">
                                    <a class=\"add_to_cart_button\" data-quantity=\"1\" data-product_sku=\"\" data-product_id=\"70\" rel=\"nofollow\" href=\"#\">Add to cart</a>
                                </div>                       
                            </div>
                        </div>";

         ?>
<?php } ?>
<?php if($allRows > $showLimit){ ?>
    <div class="show_more_main" id="show_more_main<?php echo $tutorial_id; ?>">
        <span id="<?php echo $tutorial_id; ?>" class="show_more" title="Load more posts">Show more</span>
        <span class="loding" style="display: none;"><span class="loding_txt">Loading…</span></span>
    </div>
<?php } ?>  
<?php 
    } 
}
?>