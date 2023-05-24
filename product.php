<!doctype html>
<html>
<head>
    <title>BSIS-APPDEV</title>
	   <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/prodcss.css">



    <style>
	
        .card {
            width: 400x;
        }

        body {
            background: #e8e4c9;
        }

        .add-to-cart-button {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
		.bottom-right {
    position: bottom;
    bottom: 0;
    right: 0;
    text-align: right;
    color: black;
    background-color: transparent;
    padding: 10px;
    font-size: 14px;
  }
  .custom-button {
  background-color: #e8e4c9;

  color: black; 
 
}

.custom-button:hover {
  background-color: skyblue;

}
    </style>
</head>
<body>


 
    <div class="container mt-5">
	<div class="d-flex flex-wrap align-items-center justify-content-between">
      <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
        <img src="apple.png" alt="Apple" width="32" height="32" class="me-2">
      </a>
      <a href="product.php" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none ml-auto">
        <img src="bag.png" alt="Shopping Bag" width="30" height="30" class="me-2">
      </a>
    </div>
	
	<br>
	<br>
	<br>
	<br>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card p-3 bg-white">
                    <i class="fa fa-apple"></i>
                    <div class="about-product text-center mt-2">
                        <img src="iphonese.jpg" width="300">
                        <div>
                            <h4>Iphone SE</h4>
                            <h6 class="mt-0 text-black-50">Apple pro display XDR</h6>
                        </div>
                    </div>
                    <div class="stats mt-2">
                        <div class="d-flex justify-content-between p-price"><span>Pro Display XDR</span><span>$5,999</span></div>
                        <div class="d-flex justify-content-between p-price"><span>Pro stand</span><span>$999</span></div>
                        <div class="d-flex justify-content-between p-price"><span>Vesa Mount Adapter</span><span>$199</span></div>
                    </div>
                    <div class="d-flex justify-content-between total font-weight-bold mt-4"><span>Total</span><span>$7,197.00</span></div>
                    <div class="add-to-cart-button">
            <button class="btn custom-button" data-toggle="modal" data-target="#cartModal">Add to Cart</button>
			<div class="modal fade" id="cartModal">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control input-lg" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Contact no.">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" style="font-size:20px; color:gray;">Address</textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Submit Order</button>
            </div>
        </div>
    </div>
</div>
        </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card p-3 bg-white">
                    <i class="fa fa-apple"></i>
                    <div class="about-product text-center mt-2">
                        <img src="ip12.jpg" width="300">
                        <div>
                            <h4>Iphone 12</h4>
                            <h6 class="mt-0 text-black-50">Apple pro display XDR</h6>
                        </div>
                    </div>
                    <div class="stats mt-2">
                        <div class="d-flex justify-content-between p-price"><span>Pro Display XDR</span><span>$5,999</span></div>
                        <div class="d-flex justify-content-between p-price"><span>Pro stand</span><span>$999</span></div>
                        <div class="d-flex justify-content-between p-price"><span>Vesa Mount Adapter</span><span>$199</span></div>
                    </div>
                    <div class="d-flex justify-content-between total font-weight-bold mt-4"><span>Total</span><span>$7,197.00</span></div>
                     <div class="add-to-cart-button">
            <button class="btn custom-button" data-toggle="modal" data-target="#cartModal">Add to Cart</button>
			<div class="modal fade" id="cartModal">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control input-lg" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Contact no.">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" style="font-size:20px; color:gray;">Address</textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Submit Order</button>
            </div>
        </div>
    </div>
</div>
        </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card p-3 bg-white">
                    <i class="fa fa-apple"></i>
                    <div class="about-product text-center mt-2">
                        <img src="ip13.jpg" width="300">
                        <div>
                            <h4>Iphone 13</h4>
                            <h6 class="mt-0 text-black-50">Apple pro display XDR</h6>
                        </div>
                    </div>
                    <div class="stats mt-2">
                        <div class="d-flex justify-content-between p-price"><span>Pro Display XDR</span><span>$5,999</span></div>
                        <div class="d-flex justify-content-between p-price"><span>Pro stand</span><span>$999</span></div>
                        <div class="d-flex justify-content-between p-price"><span>Vesa Mount Adapter</span><span>$199</span></div>
                    </div>
                    <div class="d-flex justify-content-between total font-weight-bold mt-4"><span>Total</span><span>$7,197.00</span></div>
                    <div class="add-to-cart-button">
            <button class="btn custom-button" data-toggle="modal" data-target="#cartModal">Add to Cart</button>
			<div class="modal fade" id="cartModal">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control input-lg" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Contact no.">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" style="font-size:20px; color:gray;">Address</textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Submit Order</button>
            </div>
        </div>
    </div>
</div>
        </div>
                </div>
            </div>
			<div class="col-md-4 mb-4">
                <div class="card p-3 bg-white">
                    <i class="fa fa-apple"></i>
                    <div class="about-product text-center mt-2">
                        <img src="ip14.jpg" width="300">
                        <div>
                            <h4>Iphone 14</h4>
                            <h6 class="mt-0 text-black-50">Apple pro display XDR</h6>
                        </div>
                    </div>
                    <div class="stats mt-2">
                        <div class="d-flex justify-content-between p-price"><span>Pro Display XDR</span><span>$5,999</span></div>
                        <div class="d-flex justify-content-between p-price"><span>Pro stand</span><span>$999</span></div>
                        <div class="d-flex justify-content-between p-price"><span>Vesa Mount Adapter</span><span>$199</span></div>
                    </div>
                    <div class="d-flex justify-content-between total font-weight-bold mt-4"><span>Total</span><span>$7,197.00</span></div>
                     <div class="add-to-cart-button">
            <button class="btn custom-button" data-toggle="modal" data-target="#cartModal">Add to Cart</button>
			<div class="modal fade" id="cartModal">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control input-lg" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Contact no.">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" style="font-size:20px; color:gray;">Address</textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Submit Order</button>
            </div>
        </div>
    </div>
</div>
        </div>
                </div>
            </div>
			<div class="col-md-4 mb-4">
                <div class="card p-3 bg-white">
                    <i class="fa fa-apple"></i>
                    <div class="about-product text-center mt-2">
                        <img src="iphone14promax.jpg" width="300">
                        <div>
                            <h4>Iphone 14 Pro</h4>
                            <h6 class="mt-0 text-black-50">Apple pro display XDR</h6>
                        </div>
                    </div>
                    <div class="stats mt-2">
                        <div class="d-flex justify-content-between p-price"><span>Pro Display XDR</span><span>$5,999</span></div>
                        <div class="d-flex justify-content-between p-price"><span>Pro stand</span><span>$999</span></div>
                        <div class="d-flex justify-content-between p-price"><span>Vesa Mount Adapter</span><span>$199</span></div>
                    </div>
                    <div class="d-flex justify-content-between total font-weight-bold mt-4"><span>Total</span><span>$7,197.00</span></div>
                     <div class="add-to-cart-button">
            <button class="btn custom-button" data-toggle="modal" data-target="#cartModal">Add to Cart</button>
			<div class="modal fade" id="cartModal">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control input-lg" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Contact no.">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" style="font-size:20px; color:gray;">Address</textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Submit Order</button>
            </div>
        </div>
    </div>
</div>
        </div>
                </div>
            </div>
			<div class="col-md-4 mb-4">
                <div class="card p-3 bg-white">
                    <i class="fa fa-apple"></i>
                    <div class="about-product text-center mt-2">
                        <img src="ip14max.jpg" width="300">
                        <div>
                            <h4>Iphone 14 Pro Max</h4>
                            <h6 class="mt-0 text-black-50">Apple pro display XDR</h6>
                        </div>
                    </div>
                    <div class="stats mt-2">
                        <div class="d-flex justify-content-between p-price"><span>Pro Display XDR</span><span>$5,999</span></div>
                        <div class="d-flex justify-content-between p-price"><span>Pro stand</span><span>$999</span></div>
                        <div class="d-flex justify-content-between p-price"><span>Vesa Mount Adapter</span><span>$199</span></div>
                    </div>
                    <div class="d-flex justify-content-between total font-weight-bold mt-4"><span>Total</span><span>$7,197.00</span></div>
                     <div class="add-to-cart-button">
            <button class="btn custom-button" data-toggle="modal" data-target="#cartModal">Add to Cart</button>
			<div class="modal fade" id="cartModal">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control input-lg" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Contact no.">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" style="font-size:20px; color:gray;">Address</textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Submit Order</button>
            </div>
        </div>
    </div>
</div>
        </div>
                </div>
            </div>
			<div class="col-md-4 mb-4">
                <div class="card p-3 bg-white">
                    <i class="fa fa-apple"></i>
                    <div class="about-product text-center mt-2">
                        <img src="macbookair.jpg" width="300">
                        <div>
                            <h4>MacBook Air</h4>
                            <h6 class="mt-0 text-black-50">Apple pro display XDR</h6>
                        </div>
                    </div>
                    <div class="stats mt-2">
                        <div class="d-flex justify-content-between p-price"><span>Pro Display XDR</span><span>$5,999</span></div>
                        <div class="d-flex justify-content-between p-price"><span>Pro stand</span><span>$999</span></div>
                        <div class="d-flex justify-content-between p-price"><span>Vesa Mount Adapter</span><span>$199</span></div>
                    </div>
                    <div class="d-flex justify-content-between total font-weight-bold mt-4"><span>Total</span><span>$7,197.00</span></div>
                     <div class="add-to-cart-button">
            <button class="btn custom-button" data-toggle="modal" data-target="#cartModal">Add to Cart</button>
			<div class="modal fade" id="cartModal">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control input-lg" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Contact no.">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" style="font-size:20px; color:gray;">Address</textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Submit Order</button>
            </div>
        </div>
    </div>
</div>
        </div>
                </div>
            </div>
			<div class="col-md-4 mb-4">
                <div class="card p-3 bg-white">
                    <i class="fa fa-apple"></i>
                    <div class="about-product text-center mt-2">
                        <img src="macbookpro.jpg" width="300">
                        <div>
                            <h4>MacBook Pro</h4>
                            <h6 class="mt-0 text-black-50">Apple pro display XDR</h6>
                        </div>
                    </div>
                    <div class="stats mt-2">
                        <div class="d-flex justify-content-between p-price"><span>Pro Display XDR</span><span>$5,999</span></div>
                        <div class="d-flex justify-content-between p-price"><span>Pro stand</span><span>$999</span></div>
                        <div class="d-flex justify-content-between p-price"><span>Vesa Mount Adapter</span><span>$199</span></div>
                    </div>
                    <div class="d-flex justify-content-between total font-weight-bold mt-4"><span>Total</span><span>$7,197.00</span></div>
                    <div class="add-to-cart-button">
            <button class="btn custom-button" data-toggle="modal" data-target="#cartModal">Add to Cart</button>
			<div class="modal fade" id="cartModal">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control input-lg" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Contact no.">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" style="font-size:20px; color:gray;">Address</textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Submit Order</button>
            </div>
        </div>
    </div>
</div>
        </div>
                </div>
            </div>
			<div class="col-md-4 mb-4">
                <div class="card p-3 bg-white">
                    <i class="fa fa-apple"></i>
                    <div class="about-product text-center mt-2">
                        <img src="macmini.jpg" width="300">
                        <div>
                            <h4>Mac Mini</h4>
                            <h6 class="mt-0 text-black-50">Apple pro display XDR</h6>
                        </div>
                    </div>
                    <div class="stats mt-2">
                        <div class="d-flex justify-content-between p-price"><span>Pro Display XDR</span><span>$5,999</span></div>
                        <div class="d-flex justify-content-between p-price"><span>Pro stand</span><span>$999</span></div>
                        <div class="d-flex justify-content-between p-price"><span>Vesa Mount Adapter</span><span>$199</span></div>
                    </div>
                    <div class="d-flex justify-content-between total font-weight-bold mt-4"><span>Total</span><span>$7,197.00</span></div>
                    <div class="add-to-cart-button">
            <button class="btn custom-button" data-toggle="modal" data-target="#cartModal">Add to Cart</button>
			<div class="modal fade" id="cartModal">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control input-lg" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Contact no.">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" style="font-size:20px; color:gray;">Address</textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Submit Order</button>
            </div>
        </div>
    </div>
</div>
        </div>
                </div>
            </div>
			
			<div class="col-md-4 mb-4">
                <div class="card p-3 bg-white">
                    <i class="fa fa-apple"></i>
                    <div class="about-product text-center mt-2">
                        <img src="airpods2ndgen.jpg" width="300">
                        <div>
                            <h4>AirPods 2nd Generation</h4>
                            <h6 class="mt-0 text-black-50">Apple pro display XDR</h6>
                        </div>
                    </div>
                    <div class="stats mt-2">
                        <div class="d-flex justify-content-between p-price"><span>Pro Display XDR</span><span>$5,999</span></div>
                        <div class="d-flex justify-content-between p-price"><span>Pro stand</span><span>$999</span></div>
                        <div class="d-flex justify-content-between p-price"><span>Vesa Mount Adapter</span><span>$199</span></div>
                    </div>
                    <div class="d-flex justify-content-between total font-weight-bold mt-4"><span>Total</span><span>$7,197.00</span></div>
                    <div class="add-to-cart-button">
            <button class="btn custom-button" data-toggle="modal" data-target="#cartModal">Add to Cart</button>
			<div class="modal fade" id="cartModal">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control input-lg" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Contact no.">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" style="font-size:20px; color:gray;">Address</textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Submit Order</button>
            </div>
        </div>
    </div>
</div>
        </div>
                </div>
            </div>
			
			<div class="col-md-4 mb-4">
                <div class="card p-3 bg-white">
                    <i class="fa fa-apple"></i>
                    <div class="about-product text-center mt-2">
                        <img src="airpods2ndgenpro.jpg" width="300">
                        <div>
                            <h4>AirPods 2nd Generation Pro</h4>
                            <h6 class="mt-0 text-black-50">Apple pro display XDR</h6>
                        </div>
                    </div>
                    <div class="stats mt-2">
                        <div class="d-flex justify-content-between p-price"><span>Pro Display XDR</span><span>$5,999</span></div>
                        <div class="d-flex justify-content-between p-price"><span>Pro stand</span><span>$999</span></div>
                        <div class="d-flex justify-content-between p-price"><span>Vesa Mount Adapter</span><span>$199</span></div>
                    </div>
                    <div class="d-flex justify-content-between total font-weight-bold mt-4"><span>Total</span><span>$7,197.00</span></div>
                    <div class="add-to-cart-button">
            <button class="btn custom-button" data-toggle="modal" data-target="#cartModal">Add to Cart</button>
			<div class="modal fade" id="cartModal">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control input-lg" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Contact no.">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" style="font-size:20px; color:gray;">Address</textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Submit Order</button>
            </div>
        </div>
    </div>
</div>
        </div>
                </div>
            </div>
			
			
			<div class="col-md-4 mb-4">
                <div class="card p-3 bg-white">
                    <i class="fa fa-apple"></i>
                    <div class="about-product text-center mt-2">
                        <img src="airpods3rdgen.jpg" width="300">
                        <div>
                            <h4>AirPods 3rd Generation</h4>
                            <h6 class="mt-0 text-black-50">Apple pro display XDR</h6>
                        </div>
                    </div>
                    <div class="stats mt-2">
                        <div class="d-flex justify-content-between p-price"><span>Pro Display XDR</span><span>$5,999</span></div>
                        <div class="d-flex justify-content-between p-price"><span>Pro stand</span><span>$999</span></div>
                        <div class="d-flex justify-content-between p-price"><span>Vesa Mount Adapter</span><span>$199</span></div>
                    </div>
                    <div class="d-flex justify-content-between total font-weight-bold mt-4"><span>Total</span><span>$7,197.00</span></div>
                     <div class="add-to-cart-button">
            <button class="btn custom-button" data-toggle="modal" data-target="#cartModal">Add to Cart</button>
			<div class="modal fade" id="cartModal">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control input-lg" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Contact no.">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" style="font-size:20px; color:gray;">Address</textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Submit Order</button>
            </div>
        </div>
    </div>
</div>
        </div>
                </div>
            </div>
			
				<div class="col-md-4 mb-4">
                <div class="card p-3 bg-white">
                    <i class="fa fa-apple"></i>
                    <div class="about-product text-center mt-2">
                        <img src="ipadprod.jpg" width="300">
                        <div>
                            <h4>iPad Pro</h4>
                            <h6 class="mt-0 text-black-50">Apple pro display XDR</h6>
                        </div>
                    </div>
                    <div class="stats mt-2">
                        <div class="d-flex justify-content-between p-price"><span>Pro Display XDR</span><span>$5,999</span></div>
                        <div class="d-flex justify-content-between p-price"><span>Pro stand</span><span>$999</span></div>
                        <div class="d-flex justify-content-between p-price"><span>Vesa Mount Adapter</span><span>$199</span></div>
                    </div>
                    <div class="d-flex justify-content-between total font-weight-bold mt-4"><span>Total</span><span>$7,197.00</span></div>
                    <div class="add-to-cart-button">
            <button class="btn custom-button" data-toggle="modal" data-target="#cartModal">Add to Cart</button>
			<div class="modal fade" id="cartModal">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control input-lg" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Contact no.">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" style="font-size:20px; color:gray;">Address</textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Submit Order</button>
            </div>
        </div>
    </div>
</div>
        </div>
                </div>
            </div>
			
			
				<div class="col-md-4 mb-4">
                <div class="card p-3 bg-white">
                    <i class="fa fa-apple"></i>
                    <div class="about-product text-center mt-2">
                        <img src="ipadair.jpg" width="300">
                        <div>
                            <h4>iPad Air</h4>
                            <h6 class="mt-0 text-black-50">Apple pro display XDR</h6>
                        </div>
                    </div>
                    <div class="stats mt-2">
                        <div class="d-flex justify-content-between p-price"><span>Pro Display XDR</span><span>$5,999</span></div>
                        <div class="d-flex justify-content-between p-price"><span>Pro stand</span><span>$999</span></div>
                        <div class="d-flex justify-content-between p-price"><span>Vesa Mount Adapter</span><span>$199</span></div>
                    </div>
                    <div class="d-flex justify-content-between total font-weight-bold mt-4"><span>Total</span><span>$7,197.00</span></div>
                     <div class="add-to-cart-button">
            <button class="btn custom-button" data-toggle="modal" data-target="#cartModal">Add to Cart</button>
			<div class="modal fade" id="cartModal">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control input-lg" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Contact no.">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" style="font-size:20px; color:gray;">Address</textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Submit Order</button>
            </div>
        </div>
    </div>
</div>
        </div>
                </div>
            </div>
			
				<div class="col-md-4 mb-4">
    <div class="card p-3 bg-white">
        <i class="fa fa-apple"></i>
        <div class="about-product text-center mt-2">
            <img src="ipadril.jpg" width="300">
            <div>
                <h4>iPad</h4>
                <h6 class="mt-0 text-black-50">Apple pro display XDR</h6>
            </div>
        </div>
        <div class="stats mt-2">
            <div class="d-flex justify-content-between p-price"><span>Pro Display XDR</span><span>$5,999</span></div>
            <div class="d-flex justify-content-between p-price"><span>Pro stand</span><span>$999</span></div>
            <div class="d-flex justify-content-between p-price"><span>Vesa Mount Adapter</span><span>$199</span></div>
        </div>
        <div class="d-flex justify-content-between total font-weight-bold mt-4"><span>Total</span><span>$7,197.00</span></div>
        <div class="add-to-cart-button">
            <button class="btn custom-button" data-toggle="modal" data-target="#cartModal">Add to Cart</button>
			<div class="modal fade" id="cartModal">
    <div class="modal-dialog">
        <div class="modal-content">
            
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control input-lg" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Contact no.">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" style="font-size:20px; color:gray;">Address</textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal">Submit Order</button>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
</div>




 <div class="bottom-right">
  <p>All products showcased are the property of Apple Inc.</p>
  <p>&copy; 2023 - eternity</p>
</div>


			
			
			
        </div>
    </div>

</body>

</html>
