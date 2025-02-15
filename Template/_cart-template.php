        <!-- Keranjang -->
        <section id="cart" class="py-3">
            <div class="container-fluid w-75">
                <h5 class="font-mon font-size-20">Keranjang Saya</h5>

                <!-- Item Keranjang Saya -->
                 <div class="row">
                    <div class="col-sm-9">
                        <!-- cart item1 -->
                            <div class="row border-top py-3 mt-3">
                                <div class="col-sm-2">
                                    <img src="../assets/crispy chicken steak.jpg" style="height: 120px;" alt="cart1" class="img-fluid">
                                </div>
                                <div class="col-sm-8">
                                    <h5 class="font-baloo font-size-20">Crispy Chicken Steak</h5>
                                    <!-- product rating -->
                                    <div class="d-flex">
                                        <div class="rating text-warning font-size-12">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="far fa-star"></i></span>
                                          </div>
                                          <!-- <a href="#" class="px-2 font-open font-size-14">20,534 ratings</a> -->
                                    </div>
                                    <!--  !product rating-->

                                    <!-- product qty -->
                                        <div class="qty d-flex pt-2">
                                            <div class="d-flex font-open w-25">
                                                <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                                <input type="text" data-id="pro1" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                                <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                            </div>
                                            <button type="submit" class="btn font-roboto text-danger px-3 border-right">Delete</button>
                                            <button type="submit" class="btn font-roboto text-danger">Save for Later</button>
                                        </div>
                                    <!-- !product qty -->

                                </div>

                                <div class="col-sm-2 text-right">
                                    <div class="font-size-20 text-danger font-baloo">
                                        Rp<span class="product_price">32.000</span>
                                    </div>
                                </div>
                            </div>
                        <!-- !cart item1 -->
                        <!-- cart item -->
                            <div class="row border-top py-3 mt-3">
                                <div class="col-sm-2">
                                    <img src="../assets/Steak1.jpg" style="height: 120px;" alt="cart1" class="img-fluid">
                                </div>
                                <div class="col-sm-8">
                                    <h5 class="font-baloo font-size-20">Steak</h5>
                                    <!-- product rating -->
                                    <div class="d-flex">
                                        <div class="rating text-warning font-size-12">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="far fa-star"></i></span>
                                          </div>
                                          <!-- <a href="#" class="px-2 font-open font-size-14">20,534 ratings</a> -->
                                    </div>
                                    <!--  !product rating-->

                                    <!-- product qty -->
                                        <div class="qty d-flex pt-2">
                                            <div class="d-flex font-open w-25">
                                                <button class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
                                                <input type="text" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                                <button class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                            </div>
                                            <button type="submit" class="btn font-roboto text-danger px-3 border-right">Delete</button>
                                            <button type="submit" class="btn font-roboto text-danger">Save for Later</button>
                                        </div>
                                    <!-- !product qty -->

                                </div>

                                <div class="col-sm-2 text-right">
                                    <div class="font-size-20 text-danger font-baloo">
                                        Rp<span class="product_price">46.000</span>
                                    </div>
                                </div>
                            </div>
                        <!-- !cart item -->
                    </div>
                    <!-- subtotal section-->
                    <div class="col-sm-3">
                        <div class="sub-total border text-center mt-2">
                            <h6 class="font-size-12 font-mon text-success py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery.</h6>
                            <div class="border-top py-4">
                                <h5 class="font-baloo font-size-20">Subtotal (2 item):&nbsp; <span class="text-danger">Rp<span class="text-danger" id="deal-price">46.000</span> </span> </h5>
                                <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
                            </div>
                        </div>
                    </div>
                    <!-- !subtotal section-->
                </div>
                 </div>
                <!-- !Item Keranjang Saya -->
            </div>
         </section>
        <!-- !Keranjang -->