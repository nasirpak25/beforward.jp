<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Assets/bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Assets/style.css">
</head>

<body>


<link rel="stylesheet" href="Assets/bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/js/bootstrap.min.js">
   
    <nav class="navbar navbar-expand-lg rounded-0 bg-dark">
        <div class="container-fluid bg-dark rounded-0 bg-dark">
            <img class="logo mt-2" src="Assets/logo.png" width="15%" alt="">
            <span><a class="text-white fw-medium logo mx-4 mt-3" href="#">MY ACCOUNT</a></span>
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <p class="text-white"><span>Hello, mn6654111@gmail.com</span><br><span><img
                    src="Assets/icon_bf_point_small.png" width="10%"> BF Points: 20</span></p>
                </ul>
                <form class="d-flex flex-column flex-lg-row align-items-lg-start">
                    <button type="button" class="btn text-white px-3 mx-2 mt-2">
                        <i class="fa-solid fa-up-right-from-square me-2" style="color: white;"></i> Used cars
                    </button>
                    <button type="button" class="btn text-white px-3 mx-2 mt-2">
                        <i class="fa-solid fa-up-right-from-square me-2" style="color: white;"></i> Auto Parts
                    </button>
                    <button type="button" class="btn logout text-white px-3 mx-2 mt-2">
                        <i class="fa-solid fa-up-right-from-square me-2" style="color: white;"></i> Logout
                    </button>
                </form>
                <div class="accordion border-0 d-lg-none d-md-block" id="accordionExample">
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
        </div>
    </nav>