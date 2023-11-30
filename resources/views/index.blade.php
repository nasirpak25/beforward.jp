@extends('layouts.main')

@section('main-container')
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 border p-0 d-none d-lg-block">
                
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header text-danger" id="headingOne">
                            <button class="accordion-button rounded-0 bg-white" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span> <i class="fa-solid fa-cart-shopping me-2" style="color: #e66b02;"></i></span>
                                Inquiries & Buy Now
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <a href="#" class="inner-link">Issue InVoice & Reserve</a>
                            </div>
                        </div>
                    </div>
                
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed bg-white" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span><i class="fa-solid fa-lock me-2" style="color: #e66b20;"></i></span> RESERVED
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p><a href="#" class="inner-link">All Reserved Vehicle / items</a></p>
                                <p><a href="#" class="inner-link">Download Invoice</a></p>
                                <p><a href="#" class="inner-link">Upload Proof of Payment</a></p>
                                <p><a href="#" class="inner-link">Change Consignee Info</a></p>
                            </div>
                        </div>
                    </div>
                
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed rounded-0  bg-white" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree">
                                <span><i class="fa-solid fa-circle-check me-2" style="color: #e66b02;"></i></span>
                                PURCHASED
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <a href="#" class="inner-link">Track Shipments</a>
                            </div>
                        </div>
                    </div>
                
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed rounded-0  bg-white" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                aria-controls="collapseFour">
                                <span><i class="fa-solid fa-user me-2" style="color: #e66b02;"></i></span>
                                ACCOUNT SETTINGS
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                               <p> <a href="#" class="inner-link">Account Information</a></p>
                               <p> <a href="#" class="inner-link">Consignee Information</a></p>
                               <p> <a href="#" class="inner-link">Check Your Deposit</a></p>
                               <p> <a href="#" class="inner-link">Language Preferences</a></p>
                               <p> <a href="#" class="inner-link">Update Your Password</a></p>
                               <p> <a href="#" class="inner-link">Favorites</a></p>
                               <p> <a href="#" class="inner-link">Notify Me</a></p>
                               <p> <a href="#" class="inner-link">Save Search</a></p>
                            </div>
                        </div>
                    </div>
                
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed rounded-0  bg-white" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                aria-controls="collapseFive">
                                <span><i class="fa-brands fa-product-hunt me-2" style="color: #e66b02;"></i></span>
                                BF POINT
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <a href="#" class="inner-link">Point History</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-12 col-lg-10 mb-5">
                <div class="row">
                    <div class="col py-3 d-flex">
                        <a class="me-2 a-class" href="#">Dashboard</a>
                        <a class="mx-2 a-class" href="#">INQUIRIES & BUY NOW </a>
                        <a class="mx-2 a-class" href="#">Issue Invoice & Reserve</a>
                    </div>
                    <div class="">
                        <h4 class="fw-bold">Issue Invoice & Reserve</h4>
                        <p class="">It contains all the quotations you have requested.</p>
                    </div>
                    <div class="d-div m-auto d-block"></div>
                </div>
                <div class="row mb-3">
                    <div class="row mt-5 pt-4">
                        <h6 class="fw-bold text-center">NO ITEMS FOUND</h6>
                        <p class="text-center p-text">Browse the stock and enquire/get a quote for the item you like</p>
                        <span class="text-center"><button type="button"
                                class="border-0 rounded fw-semibold py-2 px-5 mt-4 shadow text-white">BROWSE OUR
                                STOCK</button></span>
                        <p class="text-center mt-5">Return to this page to review list of inquired vehicles</p>
                    </div>
                </div>
                <!-- <p class="m-0">Recommendations for you</p> -->
                <!-- <div class="row m-auto dd-div px-1 py-3">
                    <div class="col-2 card">
                        <div class="card-img">
                            <img src="Assets/car-1.jpg" width="100%" alt="">
                        </div>
                        <div class="card-text">
                            <p>
                                <span><a class="class-heading fw-medium" href="#">2015 MERCEDES-BENZ GLA-CLASS </a>
                                </span><br>
                                <span class="vehicle">Vehicle Price: </span><br><span
                                    class="price">$13,130</span><br><span class="saving">Save: <span
                                        class="text-danger">8%</span> </span>
                            </p>
                        </div>
                    </div>
                    <div class="col-2 card">
                        <div class="card-img">
                            <img src="Assets/car-1.jpg" width="100%" alt="">
                        </div>
                        <div class="card-text">
                            <a class="class-heading" href="#">2015 MERCEDES-BENZ GLA-CLASS </a><br>
                            <span class="vehicle">Vehicle Price: </span><br><span class="price">$13,130</span><br><span
                                class="saving">Save: 8%</span>
                        </div>
                    </div>
                    <div class="col-2 card">
                        <div class="card-img">
                            <img src="Assets/car-1.jpg" width="100%" alt="">
                        </div>
                        <div class="card-text">
                            <a class="class-heading" href="#">2015 MERCEDES-BENZ GLA-CLASS </a><br>
                            <span class="vehicle">Vehicle Price: </span><br><span class="price">$13,130</span><br><span
                                class="saving">Save: 8%</span>
                        </div>
                    </div>
                    <div class="col-2 card">
                        <div class="card-img">
                            <img src="Assets/car-1.jpg" width="100%" alt="">
                        </div>
                        <div class="card-text">
                            <a class="class-heading" href="#">2015 MERCEDES-BENZ GLA-CLASS </a><br>
                            <span class="vehicle">Vehicle Price: </span><br><span class="price">$13,130</span><br><span
                                class="saving">Save: 8%</span>
                        </div>
                    </div>
                    <div class="col-2 card">
                        <div class="card-img">
                            <img src="Assets/car-1.jpg" width="100%" alt="">
                        </div>
                        <div class="card-text">
                            <a class="class-heading" href="#">2015 MERCEDES-BENZ GLA-CLASS </a><br>
                            <span class="vehicle">Vehicle Price: </span><br><span class="price">$13,130</span><br><span
                                class="saving">Save: 8%</span>
                        </div>
                    </div>
                    <div class="col-2 card">
                        <div class="card-img">
                            <img src="Assets/car-1.jpg" width="100%" alt="">
                        </div>
                        <div class="card-text">
                            <a class="class-heading" href="#">2015 MERCEDES-BENZ GLA-CLASS </a><br>
                            <span class="vehicle">Vehicle Price: </span><br><span class="price">$13,130</span><br><span
                                class="saving">Save: 8%</span>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>

    @endsection
 