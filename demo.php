<?php 
include 'connection/connect.php';

$limit=12; // rows to return 
$numresults="select * from images order by image_id";
$numrows=$connect->query($numresults); 

// next determine if offset has been passed to script, if not use 0 
if (empty($offset)) { 
    $offset=1; 
} 

// get results 
$result="select * ". 
    "from TABLE". 
    "order by image_id ".$offset.",".$limit; 

// now you can display the results returned 
while ($data=$result->fetch_assoc()) { 
    // include code to display results as you see fit 
    echo " <div class=\"col-md-3 col-sm-6\">
                        <div class=\"single-shop-product\">
                            <div class=\"product-upper\">
                                <img src=".$row["image_path"]." alt=".$row["image_name"]."> 
                                </div>
                                <h2><a href=\"#\">".$row["display_name"]."</a></h2>
                                <div class=\"product-carousel-price\">
                                    <ins>".$row["price"]."</ins> <del>$999.00</del>
                                </div>  
                                
                                <div class=\"product-option-shop\">
                                    <a class=\"add_to_cart_button\" data-quantity=\"1\" data-product_sku=\"\" data-product_id=\"70\" rel=\"nofollow\" href=\"#\">Add to cart</a>
                                </div>                       
                            </div>
                        </div>";
} 

// next we need to do the links to other results 

if ($offset==1) { // bypass PREV link if offset is 0 
    $prevoffset=$offset-20; 
    print "<a href=\"$PHP_SELF?offset=$prevoffset\">PREV</a> &nbsp; \n"; 
} 

// calculate number of pages needing links 
$pages=intval($numrows/$limit); 

// $pages now contains int of pages needed unless there is a remainder from division 
if ($numrows%$limit) { 
    // has remainder so add one page 
    $pages++; 
} 

for ($i=1;$i<=$pages;$i++) { // loop thru 
    $newoffset=$limit*($i-1); 
    print "<a href=\"$PHP_SELF?offset=$newoffset\">$i</a> &nbsp; \n"; 
} 

// check to see if last page 
if (!(($offset/$limit)==$pages) && $pages!=1) { 
    // not last page so give NEXT link 
    $newoffset=$offset+$limit; 
    print "<a href=\"$PHP_SELF?offset=$newoffset\">NEXT</a><p>\n"; 
} 

?> 