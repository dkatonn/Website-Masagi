<?php
    $brand = array_map(function ($pro){ return $pro['item_brand']; }, $product_shuffle);
    $unique = array_unique($brand);
    sort($unique);
    shuffle($product_shuffle);

// request method post
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['special_price_submit'])){
        // call method addToCart
        $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
    }
}

?>        
        
        <!-- Kategori -->
        <section id="kategori">
            <div class="container">
                <h4 class="font-mon font-size-20">Kategori</h4>
                <div id="filters" class="button-group text-right font-roboto font-size-16">
                    <button class="btn is-checked" data-filter="*">Semua Kategori</button>
                    <?php
                     array_map(function ($brand){
                      printf('<button class="btn" data-filter=".%s">%s</button>', $brand, $brand);
                  }, $unique);
                    ?>
                </div>
            
                <div class="grid mb-lg-3">
                  <?php array_map(function($item){ ?>
                    <div class="grid-item border <?php echo $item['item_brand'] ?? "Brand"; ?> ">
                      
                     <div class="item py-2" style="width: 200px;">
                      <div class="product justify-content-center align-items-center">
                        <a href="#"><img src="<?php echo $item['item_image'] ?? "./assets/nasi.jpg"; ?>" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                          <h6><?php echo $item['item_name'] ?? "Unknown"; ?></h6>
                          <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                          </div>
                          <div class="price py-2">
                            <span>Rp.<?php echo $item['item_price'] ?? 0 ?></span>
                          </div>
                          <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1'; ?>">
                                <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                <?php
                                if (in_array($item['item_id'], $in_cart ?? [])){
                                    echo '<button type="submit" disabled class="btn btn-success font-size-12">In the Cart</button>';
                                }else{
                                    echo '<button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php }, $product_shuffle) ?>
        </div>
    </div>
</section>
        <!-- !Kategori -->