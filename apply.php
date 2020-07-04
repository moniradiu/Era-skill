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
         /* contact from */
                .divider-text {
                        position: relative;
                        text-align: center;
                        margin-top: 15px;
                        margin-bottom: 15px;
                    }
                    .divider-text span {
                        padding: 7px;
                        font-size: 12px;
                        position: relative;   
                        z-index: 2;
                    }
                    .divider-text:after {
                        content: "";
                        position: absolute;
                        width: 100%;
                        border-bottom: 1px solid #ddd;
                        top: 55%;
                        left: 0;
                        z-index: 1;
                    }

                    .btn-facebook {
                        background-color: #405D9D;
                        color: #fff;
                    }
                    .btn-twitter {
                        background-color: #42AEEC;
                        color: #fff;
                    }
        </style>
         <!-- slider start -->
         <div class="head" style="height:300px;">
                
                 <canvas id="canvas"></canvas>
                 <h2 class="page_title">Apply For Job</h2>
                 
        </div>
        <!-- ./slider end -->


             
                 <!--  row 5 start -->
            <div class="container-fluid pt-5 pb-5" style="background-image: url('images/back.PNG'); background-repeat: repeat-x;
                         background-position:bottom;">
              
                <div class="container">
                    <!-- row 2 strart -->
                            

                    <div class="row">
                            <div class="col-md-12">
                                   <!--  <h2 class="text-headline">Contact From</h2> -->
                                
                                    <div class="container">

                                       

                                        <div class="card bg-light">
                                            <article class="card-body mx-auto">
                                                <h4 class="card-title mt-3 text-center">Create Account</h4>
                                                <p class="divider-text">
                                                    <span class="bg-light">OR</span>
                                                </p>
                                                <form action="#" method="POST">
                                                    <div class="form-group input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                        </div>
                                                        <input name="" class="form-control" placeholder="Full name" type="text">
                                                    </div> <!-- form-group// -->
                                                    <div class="form-group input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                                        </div>
                                                        <input name="" class="form-control" placeholder="Email address" type="email">
                                                    </div> <!-- form-group// -->
                                                    <div class="form-group input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                                                        </div>
                                                        <select class="custom-select" style="max-width: 120px;">
                                                            <option selected="">+971</option>
                                                            <option value="1">+972</option>
                                                            <option value="2">+198</option>
                                                            <option value="3">+701</option>
                                                        </select>
                                                        <input name="" class="form-control" placeholder="Phone number" type="text">
                                                    </div> <!-- form-group// -->
                                                    <div class="form-group input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"> <i class="fa fa-building"></i> </span>
                                                        </div>
                                                        <select class="form-control">
                                                            <option selected=""> Select job type</option>
                                                            <option>Designer</option>
                                                            <option>Manager</option>
                                                            <option>Accaunting</option>
                                                        </select>
                                                    </div> <!-- form-group end.// -->
                                                    <div class="form-group input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                                        </div>
                                                        <input class="form-control" placeholder="Create password" type="password">
                                                    </div> <!-- form-group// -->
                                                    <div class="form-group input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                                        </div>
                                                        <input class="form-control" placeholder="Repeat password" type="password">
                                                    </div> <!-- form-group// -->                                      
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
                                                    </div> <!-- form-group// -->      
                                                    <p class="text-center">Have an account? <a href="">Log In</a> </p>                                                                 
                                                </form>
                                            </article>
                                        </div> <!-- card.// -->

                                    </div> 
                                    <!--container end.//-->

                             </div>
      
                    </div>

                </div>

                
                <!-- <div class="clearfix"></div> -->
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

 /* contact from */

 
 </script>

 