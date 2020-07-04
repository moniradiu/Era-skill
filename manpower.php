<!DOCTYPE html>
<html lang="en">

    <!-- header start -->
        <?php 
            include('include/head.php');
        ?>
    <!-- ./header end -->
        
    <body>
         <!-- navberr start -->
        <?php 
        include('include/navbar.php');
        ?>
        <!-- navber end -->
        <style type="text/css">
            .page_title{
                color: #fff;
                position: absolute;
                text-align: center;
                display: block;
                width: 100%;
                top: 163px;
                font-family: fantasy;
                font-size: 76px;
            }

            .checkout-wrapper{padding-top: 40px; padding-bottom:40px; background-color: #fafbfa;}
            .checkout{    background-color: #fff;
                border:1px solid #eaefe9;
                
                font-size: 14px;}
            .panel{margin-bottom: 0px;}
            .checkout-step {
                
                border-top: 1px solid #f2f2f2;
                color: #666;
                font-size: 14px;
                padding: 30px;
                position: relative;
            }

            .checkout-step-number {
                border-radius: 50%;
                border: 1px solid #666;
                display: inline-block;
                font-size: 12px;
                height: 32px;
                margin-right: 26px;
                padding: 6px;
                text-align: center;
                width: 32px;
            }
            .checkout-step-title{ font-size: 18px;
                font-weight: 500;
                vertical-align: middle;display: inline-block; margin: 0px;
                }
            
            .checout-address-step{}
            .checout-address-step .form-group{margin-bottom: 18px;display: inline-block;
                width: 100%;}

            .checkout-step-body{padding-left: 60px; padding-top: 30px;}

            .checkout-step-active{display: block;}
            .checkout-step-disabled{display: none;}

            .checkout-login{}
            .login-phone{display: inline-block;}
            .login-phone:after {
                content: '+91 - ';
                font-size: 14px;
                left: 36px;
            }
            .login-phone:before {
                content: "";
                font-style: normal;
                color: #333;
                font-size: 18px;
                left: 12px;
                    display: inline-block;
                font: normal normal normal 14px/1 FontAwesome;
                font-size: inherit;
                text-rendering: auto;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }
            .login-phone:after, .login-phone:before {
                position: absolute;
                top: 50%;
                -webkit-transform: translateY(-50%);
                transform: translateY(-50%);
            }
            .login-phone .form-control {
                padding-left: 68px;
                font-size: 14px;
                
            }
            .checkout-login .btn{height: 42px;     line-height: 1.8;}
            
            .otp-verifaction{margin-top: 30px;}
            .checkout-sidebar{background-color: #fff;
                border:1px solid #eaefe9; padding: 30px; margin-bottom: 30px;}
            .checkout-sidebar-merchant-box{background-color: #fff;
                border:1px solid #eaefe9; margin-bottom: 30px;}
            .checkout-total{border-bottom: 1px solid #eaefe9; padding-bottom: 10px;margin-bottom: 10px; }
            .checkout-invoice{display: inline-block;
                width: 100%;}
            .checout-invoice-title{    float: left; color: #30322f;}
            .checout-invoice-price{    float: right; color: #30322f;}
            .checkout-charges{display: inline-block;
                width: 100%;}
            .checout-charges-title{float: left; }
            .checout-charges-price{float: right;}
            .charges-free{color: #43b02a; font-weight: 600;}
            .checkout-payable{display: inline-block;
                width: 100%; color: #333;}
            .checkout-payable-title{float: left; }
            .checkout-payable-price{float: right;}

            .checkout-cart-merchant-box{ padding: 20px;display: inline-block;width: 100%; border-bottom: 1px solid #eaefe9;
            padding-bottom: 20px; }
            .checkout-cart-merchant-name{color: #30322f; float: left;}
            .checkout-cart-merchant-item{ float: right; color: #30322f; }
            .checkout-cart-products{}

            .checkout-cart-products .checkout-charges{ padding: 10px 20px;
                color: #333;}
            .checkout-cart-item{ border-bottom: 1px solid #eaefe9;
                box-sizing: border-box;
                display: table;
                font-size: 12px;
                padding: 22px 20px;
                width: 100%;}
            .checkout-item-list{}
            .checkout-item-count{ float: left; }
            .checkout-item-img{width: 60px; float: left;}
            .checkout-item-name-box{ float: left; }
            .checkout-item-title{ color: #30322f; font-size: 14px;  }
            .checkout-item-unit{  }
            .checkout-item-price{float: right;color: #30322f; font-size: 14px; font-weight: 600;}


            .checkout-viewmore-btn{padding: 10px; text-align: center;}

            .header-checkout-item{text-align: right; padding-top: 20px;}
            .checkout-promise-item {
                background-repeat: no-repeat;
                background-size: 14px;
                display: inline-block;
                margin-left: 20px;
                padding-left: 24px;
                color: #30322f;
            }
            .checkout-promise-item i{padding-right: 10px;color: #43b02a;}
        </style>
         <!-- slider start -->
         <div class="head" style="height:300px;">
                
                 <canvas id="canvas"></canvas>
                 <h2 class="page_title">Man Power</h2>
                 
        </div>
        <!-- ./slider end -->


             
                 <!--  row 5 start -->
            <div class="container-fluid pt-5 pb-10" style="background-image: url('images/industry-2.png'); background-repeat: repeat-x;
  background-position:bottom;">
              
                <div class="container">
                    <!-- row 2 strart -->
                            

                    <div class="row">
                                <div class="col-md-12">
                                    <h2 class="text-headline">OUR PEOPLE</h2>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <p class="font_Size">
                                                As a company striving for the best, we demand the same for
                                                our staff. Our people are our reputation and the sustainable
                                                future of our company. We succeed because we have good
                                                people, sharing the same core values and working jointly
                                                towards common goals, that’s why our peo ple are the most
                                                valued asset, and at ERA SKILL they are part of the family.
                                                <br>
                                                We value relationships with the people we serve, our
                                                community, clients, suppliers and associates. Believing that
                                                people are the backbone of success; we are proud of the
                                                achievement, dedication, skill, and integrity of all our
                                                employees, and their unique contributions in building our
                                                success.
                                                    
                                             </p>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <img src="images/man.PNG"  style="width:100%;" class="img-fluid rounded">
                                        </div>

                                        <div class="col-md-6 col-sm-12">
                                            <img src="images/power.png"  style="width:100%;" class="img-fluid rounded">
                                        </div>

                                        <div class="col-md-6 col-sm-12">
                                            <p class="font_Size">
                                                    <br>
                                                    <br>
                                                    <br>
                                                    Era Skill Industrial Services offers an extensive range of services to suit each client accordingly. We
                                                    offer a superb MEP & Renovation facility including mechanical, electrical, operations and
                                                    maintenance, backed by Initial Group's organization. We are managed by a professional team of
                                                    engineers, architects and support staff to provide commercial and personalized services to our
                                                    clients.
                                            </p>
                                        </div>
                                     
                                    
                                    </div>
                                </div>
    
                            </div>
                            <hr>
                            

                           
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="text-headline">Category of Manpower</h2>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <div id="accordion" class="checkout">
                                                    <div class="panel checkout-step">
                                                        <div> <span class="checkout-step-number">1</span>
                                                            <h4 class="checkout-step-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" >OFFICE STAFF </a></h4>
                                                        </div>
                                                        <div id="collapseOne" class="collapse in">
                                                            <div class="checkout-step-body">
                                                                <ul class="list-unstyled">
                                                                        <li>Administrator </li>
                                                                        <li>Autocad - Operator </li>
                                                                        <li>Computer - Operator</li>
                                                                        <li>Driver, Light Duty </li>
                                                                        <li>Permit Receiver</li>
                                                                        <li>Material Controler </li>
                                                                        <li>Document Controller</li>
                                                                        <li>Store Keeper</li>
                                                                    </ul>
                                                                <div class="row">
                                                                    <div class="col-lg-8">
                                                                        <div class="checkout-login">
                                                                    
                                                                        </div>
                                                                        <!-- /input-group -->
                                                                    </div>
                                                                    <!-- /.col-lg-6 -->
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel checkout-step">
                                                        <div role="tab" id="headingTwo"> <span class="checkout-step-number">2</span>
                                                            <h4 class="checkout-step-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" > QC/ SAFETY </a> </h4>
                                                        </div>
                                                        <div id="collapseTwo" class="panel-collapse collapse">
                                                            <div class="checkout-step-body">
                                                                <div class="checout-address-step">
                                                                    <div class="row">
                                                                    <ul class="list-unstyled">
                                                                        <li>Safety Supervisor</li>
                                                                        <li>Autocad - Operator</li>
                                                                        <li>Safety Inspector</li>
                                                                        <li>Safety Officer</li>
                                                                        <li>Environment Cordinator </li>
                                                                        <li>QA/QC Supervisor </li>
                                                                        <li>QA/QC Inspector Mechanical </li>
                                                                        <li>QA/QC Inspector Structural</li>
                                                                        <li>QA/QC Inspector Scaffolding  </li>
                                                                        <li>Scaffolding Supervosor </li>
                                                                        <li>QA/QC Inspector, Welding</li>
                                                                        <li>QA/QC Inspector,welding</li>
                                                                        <li>QA/QC Inspector Painting & Coting 7</li>
                                                                        <li>QA/QC Inspector RTFI  </li>
                                                                        <li>QA/QC Inspector RTR </li>
                                                                        <li>Engineer, Mechanical Static </li>
                                                                        <li>Engineer, Structure </li>
                                                                    </ul>
                                                                    </div>
                                                                </div>
                                                                <a class="collapsed btn btn-default" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"> Next </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel checkout-step">
                                                        <div role="tab" id="headingThree"> <span class="checkout-step-number">3</span>
                                                            <h4 class="checkout-step-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"  >MECHANICAL TEAM</a> </h4>
                                                        </div>
                                                        <div id="collapseThree" class="panel-collapse collapse">
                                                            <div class="checkout-step-body">
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <ul class="list-unstyled">
                                                                            <li>Mechanical Supervisor</li>
                                                                            <li>Mechanical Foreman </li>
                                                                            <li>Mill Wright Foreman </li>
                                                                            <li>Mill Wright  </li>
                                                                            <li>Mechanical Techanician</li>
                                                                            <li>Mechanical Fitter  </li>
                                                                            <li>Document Controller</li>
                                                                            <li>Mechanical Helper</li>
                                                                        </ul>
                                                                    
                                                                    </div>
                                                                </div>
                                                            
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="panel checkout-step">
                                                        <div role="tab" id="headingFour"> <span class="checkout-step-number">4</span>
                                                            <h4 class="checkout-step-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">GRE TEAM</a> </h4>
                                                        </div>
                                                        <div id="collapseFour" class="panel-collapse collapse">
                                                            <div class="checkout-step-body">
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <ul class="list-unstyled">
                                                                            <li>RTR Supervisor</li>
                                                                            <li>GRE Laminator Foreman</li>
                                                                            <li>Pipe Laminator (RTR)</li>
                                                                         
                                                                        </ul>
                                                                    
                                                                    </div>
                                                                </div>
                                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel checkout-step">
                                                        <div role="tab" id="headingFive"> <span class="checkout-step-number">5</span>
                                                            <h4 class="checkout-step-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">PIPING TEAM</a> </h4>
                                                        </div>
                                                        <div id="collapseFive" class="panel-collapse collapse">
                                                            <div class="checkout-step-body">
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <ul class="list-unstyled">
                                                                            <li>Piping Supervisor </li>
                                                                            <li>Piping Foreman</li>
                                                                            <li>Pipe Fabricator</li>
                                                                            <li>Pipe Fitter</li>
                                                                            <li>Granderman</li>
                                                                            <li>Hydro Test Foreman</li>
                                                                            <li>Line Chaker Man (Pipe)</li>
                                                                            
                                                                        </ul>
                                                                    
                                                                    </div>
                                                                </div>
                                                            
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="panel checkout-step">
                                                        <div role="tab" id="headingSix"> <span class="checkout-step-number">6</span>
                                                            <h4 class="checkout-step-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix"  >STRUCTURAL TEAM</a> </h4>
                                                        </div>
                                                        <div id="collapseSix" class="panel-collapse collapse">
                                                            <div class="checkout-step-body">
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <ul class="list-unstyled">
                                                                            <li>Structure Supervisor </li>
                                                                            <li>Structure Foreman  </li>
                                                                            <li>Structural Fabricator</li>
                                                                            <li>Structural Fitter </li>
                                                                            <li>Steel Erector 25 </li>
                                                                            <li>Iron Worker Foreman  </li>
                                                                            <li>Iron Worker</li>
                                                                            <li>Gas Cater</li>
                                                                        </ul>
                                                                    
                                                                    </div>
                                                                </div>
                                                            
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="panel checkout-step">
                                                        <div role="tab" id="headingSeven"> <span class="checkout-step-number">7</span>
                                                            <h4 class="checkout-step-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">PAINTING TEAM</a> </h4>
                                                        </div>
                                                        <div id="collapseSeven" class="panel-collapse collapse">
                                                            <div class="checkout-step-body">
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <ul class="list-unstyled">
                                                                            <li>Painting Supervisor </li>
                                                                            <li>Painting Foreman  </li>
                                                                            <li>Painter (Spray) </li>
                                                                            <li>Sand Blaster  </li>
                                                                            <li>Painter (Ruller)</li>
                                                                          
                                                                        </ul>
                                                                    
                                                                    </div>
                                                                </div>
                                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                             </div> 

                                             <div class="col-md-6 col-sm-12">
                                                <div id="accordion" class="checkout">
                                                    <div class="panel checkout-step">
                                                        <div> <span class="checkout-step-number">8</span>
                                                            <h4 class="checkout-step-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse8" >TANK/VASSEL TEAM </a></h4>
                                                        </div>
                                                        <div id="collapse8" class="collapse in">
                                                            <div class="checkout-step-body">
                                                                <ul class="list-unstyled">
                                                                        <li>Administrator </li>
                                                                        <li>Autocad - Operator </li>
                                                                        <li>Computer - Operator</li>
                                                                        <li>Driver, Light Duty </li>
                                                                        <li>Permit Receiver</li>
                                                                        <li>Material Controler </li>
                                                                        <li>Document Controller</li>
                                                                        <li>Store Keeper</li>
                                                                    </ul>
                                                                <div class="row">
                                                                    <div class="col-lg-8">
                                                                        <div class="checkout-login">
                                                                    
                                                                        </div>
                                                                        <!-- /input-group -->
                                                                    </div>
                                                                    <!-- /.col-lg-6 -->
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel checkout-step">
                                                        <div role="tab" id="headingTwo"> <span class="checkout-step-number">9</span>
                                                            <h4 class="checkout-step-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse9" >WELDING TEAM</a> </h4>
                                                        </div>
                                                        <div id="collapse9" class="panel-collapse collapse">
                                                            <div class="checkout-step-body">
                                                                <div class="checout-address-step">
                                                                    <div class="row">
                                                                    <ul class="list-unstyled">
                                                                        <li>Safety Supervisor</li>
                                                                        <li>Autocad - Operator</li>
                                                                        <li>Safety Inspector</li>
                                                                        <li>Safety Officer</li>
                                                                        <li>Environment Cordinator </li>
                                                                        <li>QA/QC Supervisor </li>
                                                                        <li>QA/QC Inspector Mechanical </li>
                                                                        <li>QA/QC Inspector Structural</li>
                                                                        <li>QA/QC Inspector Scaffolding  </li>
                                                                        <li>Scaffolding Supervosor </li>
                                                                        <li>QA/QC Inspector, Welding</li>
                                                                        <li>QA/QC Inspector,welding</li>
                                                                        <li>QA/QC Inspector Painting & Coting 7</li>
                                                                        <li>QA/QC Inspector RTFI  </li>
                                                                        <li>QA/QC Inspector RTR </li>
                                                                        <li>Engineer, Mechanical Static </li>
                                                                        <li>Engineer, Structure </li>
                                                                    </ul>
                                                                    </div>
                                                                </div>
                                                                <a class="collapsed btn btn-default" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"> Next </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel checkout-step">
                                                        <div role="tab" id="headingThree"> <span class="checkout-step-number">10</span>
                                                            <h4 class="checkout-step-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse10"  >RIGGER TEAM</a> </h4>
                                                        </div>
                                                        <div id="collapse10" class="panel-collapse collapse">
                                                            <div class="checkout-step-body">
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <ul class="list-unstyled">
                                                                            <li>Administrator </li>
                                                                            <li>Autocad - Operator </li>
                                                                            <li>Computer - Operator</li>
                                                                            <li>Driver, Light Duty </li>
                                                                            <li>Permit Receiver</li>
                                                                            <li>Material Controler </li>
                                                                            <li>Document Controller</li>
                                                                            <li>Store Keeper</li>
                                                                        </ul>
                                                                    
                                                                    </div>
                                                                </div>
                                                            
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="panel checkout-step">
                                                        <div role="tab" id="headingThree"> <span class="checkout-step-number">11</span>
                                                            <h4 class="checkout-step-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse11"  >CIVIL TEAM</a> </h4>
                                                        </div>
                                                        <div id="collapse11" class="panel-collapse collapse">
                                                            <div class="checkout-step-body">
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <ul class="list-unstyled">
                                                                            <li>Administrator </li>
                                                                            <li>Autocad - Operator </li>
                                                                            <li>Computer - Operator</li>
                                                                            <li>Driver, Light Duty </li>
                                                                            <li>Permit Receiver</li>
                                                                            <li>Material Controler </li>
                                                                            <li>Document Controller</li>
                                                                            <li>Store Keeper</li>
                                                                        </ul>
                                                                    
                                                                    </div>
                                                                </div>
                                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel checkout-step">
                                                        <div role="tab" id="headingThree"> <span class="checkout-step-number">12</span>
                                                            <h4 class="checkout-step-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse12"  >SCAFFOLDER TEAM </a> </h4>
                                                        </div>
                                                        <div id="collapse12" class="panel-collapse collapse">
                                                            <div class="checkout-step-body">
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <ul class="list-unstyled">
                                                                            <li>Administrator </li>
                                                                            <li>Autocad - Operator </li>
                                                                            <li>Computer - Operator</li>
                                                                            <li>Driver, Light Duty </li>
                                                                            <li>Permit Receiver</li>
                                                                            <li>Material Controler </li>
                                                                            <li>Document Controller</li>
                                                                            <li>Store Keeper</li>
                                                                        </ul>
                                                                    
                                                                    </div>
                                                                </div>
                                                            
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="panel checkout-step">
                                                        <div role="tab" id="headingThree"> <span class="checkout-step-number">13</span>
                                                            <h4 class="checkout-step-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse13">E&I TEAM</a> </h4>
                                                        </div>
                                                        <div id="collapse13" class="panel-collapse collapse">
                                                            <div class="checkout-step-body">
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <ul class="list-unstyled">
                                                                            <li>Administrator </li>
                                                                            <li>Autocad - Operator </li>
                                                                            <li>Computer - Operator</li>
                                                                            <li>Driver, Light Duty </li>
                                                                            <li>Permit Receiver</li>
                                                                            <li>Material Controler </li>
                                                                            <li>Document Controller</li>
                                                                            <li>Store Keeper</li>
                                                                        </ul>
                                                                    
                                                                    </div>
                                                                </div>
                                                            
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="panel checkout-step">
                                                        <div role="tab" id="headingThree"> <span class="checkout-step-number">14</span>
                                                            <h4 class="checkout-step-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse14">INSULETOR /CLADER TEAM</a> </h4>
                                                        </div>
                                                        <div id="collapse14" class="panel-collapse collapse">
                                                            <div class="checkout-step-body">
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <ul class="list-unstyled">
                                                                            <li>Administrator </li>
                                                                            <li>Autocad - Operator </li>
                                                                            <li>Computer - Operator</li>
                                                                            <li>Driver, Light Duty </li>
                                                                            <li>Permit Receiver</li>
                                                                            <li>Material Controler </li>
                                                                            <li>Document Controller</li>
                                                                            <li>Store Keeper</li>
                                                                        </ul>
                                                                    
                                                                    </div>
                                                                </div>
                                                            
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="panel checkout-step">
                                                        <div role="tab" id="headingThree"> <span class="checkout-step-number">15</span>
                                                            <h4 class="checkout-step-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse15">OPERATOR TEAM</a> </h4>
                                                        </div>
                                                        <div id="collapse15" class="panel-collapse collapse">
                                                            <div class="checkout-step-body">
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <ul class="list-unstyled">
                                                                            <li>Administrator </li>
                                                                            <li>Autocad - Operator </li>
                                                                            <li>Computer - Operator</li>
                                                                            <li>Driver, Light Duty </li>
                                                                            <li>Permit Receiver</li>
                                                                            <li>Material Controler </li>
                                                                            <li>Document Controller</li>
                                                                            <li>Store Keeper</li>
                                                                        </ul>
                                                                    
                                                                    </div>
                                                                </div>
                                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                             </div> 
                                        </div> <!-- row 2-->
                                </div> <!-- 12 -->
                            </div>
                            <br>
                            
                           

                           <div class="row" style="padding-bottom:240px;">
                                <div class="col-md-12">
                                    <h2 class="text-headline">WE BUILD VALUE</h2>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <h4  class="text-headline text-center" style="background-color:#ddd; padding:20px;">TRANSPARENCY</h4>
                                                <img src="images/T1.PNG"  style="width:20%;display: block;margin-left: auto;margin-right: auto;width: 30%;" class="img-fluid rounded text-center">
                                                <p class="font_Size">
                                                    We promote an ethical, open and transparent conduct with all our stakeholders.
                                            
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <h4  class="text-headline text-center" style="background-color:#ddd; padding:20px;">EXCELLENCE</h4>
                                                    <img src="images/T2.PNG"  style="width:20%;display: block;margin-left: auto;margin-right: auto;width: 30%;" class="img-fluid rounded text-center">
                                                    <p class="font_Size">
                                                    We believe in competence and skill, in work that is well done and capable of exceeding clients expectations.
                                                
                                                    </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-12">
                                                <h4  class="text-headline text-center" style="background-color:#ddd; padding:20px;">RESPECT</h4>
                                                    <img src="images/T3.PNG"  style="width:20%;display: block;margin-left: auto;margin-right: auto;width: 20%;" class="img-fluid rounded text-center">
                                                    <p class="font_Size">

                                                    We respect people,diversity and the environment.
                                                
                                                    </p>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                            <h4  class="text-headline text-center" style="background-color:#ddd; padding:20px;">SOLIDITY</h4>
                                                    <img src="images/T4.PNG"  style="width:20%;display: block;margin-left: auto;margin-right: auto;width: 30%;" class="img-fluid rounded text-center">
                                                    <p class="font_Size">

                                                    We build infrastructures that last in time and promote sustainable development for current and future generations.
                                                 </p>
                                            </div>
                                        </div>
                               </div>
                            </div>

                    </div>

                
                <div class="clearfix"></div>
          </div><!--  container-fluid end -->

          
           <!-- ./row 5 end  -->


           

            <?php 
            include('include/footer.php');
            ?>
              <?php 
            include('include/footer-2.php');
            ?>

      <!-- fotter scripts start -->
        <?php 
            include('include/footer_script.php');
        ?>
      <!-- fotter scripts end --> 
 </body>

 </html>

 <script>
 var c = document.getElementById("canvas");
var ctx = c.getContext("2d");

function resize() {
    var box = c.getBoundingClientRect();
    c.width = box.width;
    c.height = box.height;
}

var light = {
    x: 160,
    y: 200
}

var colors = ["#f5c156", "#e6616b", "#5cd3ad"];

function drawLight() {
    ctx.beginPath();
    ctx.arc(light.x, light.y, 1000, 0, 2 * Math.PI);
    var gradient = ctx.createRadialGradient(light.x, light.y, 0, light.x, light.y, 1000);
    gradient.addColorStop(0, "#3b4654");
    gradient.addColorStop(1, "#2c343f");
    ctx.fillStyle = gradient;
    ctx.fill();

    ctx.beginPath();
    ctx.arc(light.x, light.y, 20, 0, 2 * Math.PI);
    gradient = ctx.createRadialGradient(light.x, light.y, 0, light.x, light.y, 5);
    gradient.addColorStop(0, "#fff");
    gradient.addColorStop(1, "#3b4654");
    ctx.fillStyle = gradient;
    ctx.fill();
}

function Box() {
    this.half_size = Math.floor((Math.random() * 50) + 1);
    this.x = Math.floor((Math.random() * c.width) + 1);
    this.y = Math.floor((Math.random() * c.height) + 1);
    this.r = Math.random() * Math.PI;
    this.shadow_length = 2000;
    this.color = colors[Math.floor((Math.random() * colors.length))];
  
    this.getDots = function() {

        var full = (Math.PI * 2) / 4;


        var p1 = {
            x: this.x + this.half_size * Math.sin(this.r),
            y: this.y + this.half_size * Math.cos(this.r)
        };
        var p2 = {
            x: this.x + this.half_size * Math.sin(this.r + full),
            y: this.y + this.half_size * Math.cos(this.r + full)
        };
        var p3 = {
            x: this.x + this.half_size * Math.sin(this.r + full * 2),
            y: this.y + this.half_size * Math.cos(this.r + full * 2)
        };
        var p4 = {
            x: this.x + this.half_size * Math.sin(this.r + full * 3),
            y: this.y + this.half_size * Math.cos(this.r + full * 3)
        };

        return {
            p1: p1,
            p2: p2,
            p3: p3,
            p4: p4
        };
    }
    this.rotate = function() {
        var speed = (60 - this.half_size) / 20;
        this.r += speed * 0.002;
        this.x += speed;
        this.y += speed;
    }
    this.draw = function() {
        var dots = this.getDots();
        ctx.beginPath();
        ctx.moveTo(dots.p1.x, dots.p1.y);
        ctx.lineTo(dots.p2.x, dots.p2.y);
        ctx.lineTo(dots.p3.x, dots.p3.y);
        ctx.lineTo(dots.p4.x, dots.p4.y);
        ctx.fillStyle = this.color;
        ctx.fill();


        if (this.y - this.half_size > c.height) {
            this.y -= c.height + 100;
        }
        if (this.x - this.half_size > c.width) {
            this.x -= c.width + 100;
        }
    }
    this.drawShadow = function() {
        var dots = this.getDots();
        var angles = [];
        var points = [];

        for (dot in dots) {
            var angle = Math.atan2(light.y - dots[dot].y, light.x - dots[dot].x);
            var endX = dots[dot].x + this.shadow_length * Math.sin(-angle - Math.PI / 2);
            var endY = dots[dot].y + this.shadow_length * Math.cos(-angle - Math.PI / 2);
            angles.push(angle);
            points.push({
                endX: endX,
                endY: endY,
                startX: dots[dot].x,
                startY: dots[dot].y
            });
        };

        for (var i = points.length - 1; i >= 0; i--) {
            var n = i == 3 ? 0 : i + 1;
            ctx.beginPath();
            ctx.moveTo(points[i].startX, points[i].startY);
            ctx.lineTo(points[n].startX, points[n].startY);
            ctx.lineTo(points[n].endX, points[n].endY);
            ctx.lineTo(points[i].endX, points[i].endY);
            ctx.fillStyle = "#2c343f";
            ctx.fill();
        };
    }
}

var boxes = [];

function draw() {
    ctx.clearRect(0, 0, c.width, c.height);
    drawLight();

    for (var i = 0; i < boxes.length; i++) {
        boxes[i].rotate();
        boxes[i].drawShadow();
    };
    for (var i = 0; i < boxes.length; i++) {
        collisionDetection(i)
        boxes[i].draw();
    };
    requestAnimationFrame(draw);
}

resize();
draw();

while (boxes.length < 14) {
    boxes.push(new Box());
}

window.onresize = resize;
c.onmousemove = function(e) {
    light.x = e.offsetX == undefined ? e.layerX : e.offsetX;
    light.y = e.offsetY == undefined ? e.layerY : e.offsetY;
}


function collisionDetection(b){
	for (var i = boxes.length - 1; i >= 0; i--) {
		if(i != b){	
			var dx = (boxes[b].x + boxes[b].half_size) - (boxes[i].x + boxes[i].half_size);
			var dy = (boxes[b].y + boxes[b].half_size) - (boxes[i].y + boxes[i].half_size);
			var d = Math.sqrt(dx * dx + dy * dy);
			if (d < boxes[b].half_size + boxes[i].half_size) {
			    boxes[b].half_size = boxes[b].half_size > 1 ? boxes[b].half_size-=1 : 1;
			    boxes[i].half_size = boxes[i].half_size > 1 ? boxes[i].half_size-=1 : 1;
			}
		}
	}
}
 
 </script>