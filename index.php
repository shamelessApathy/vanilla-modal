<html>
<head>
	<link href="styles.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<div class='container'>
		<div class='cart-modal'>
			<button class='cart-modal-close'>X</button>
			<h4 style='text-align:center;'>Shopping Cart</h4>
			<div class="variable-product-desc">
				<ul>
					<li id="variable-name"></li>
					<li id="variable-price"></li>
				</ul>
				<div style="margin-left:50px;" id="variable-img"></div>
			</div>
		</div>
		<div class='left-sidebar-container'>
			<div class='left-sidebar'>
				<ul>
					<li>Iterate over filters</li>
					<li>Iterate over filters</li>
					<li>Iterate over filters</li>
					<li>Iterate over filters</li>
					<li>Iterate over filters</li>
					<li>Iterate over filters</li>
					<li>Iterate over filters</li>
					<li>Iterate over filters</li>
					<li>Iterate over filters</li>
					<li>Iterate over filters</li>
				</ul>
			</div>
		</div>
		<div class='content'>
			<div class='cart-header'>
				<label style="float:left;">Dealership Groups</label>
				<label style='float:left; margin-left:5px;'>Other</label>
			</div>
			<div class='cart-interaction-container'>
				<select class='cart-select-dropdown'>
					<option>One</option>
					<option>One</option>
					<option>One</option>
					<option>One</option>
					<option>One</option>
					<option>One</option>
					<option>One</option>
					<option>One</option>
					<option>One</option>
					<option placeholder="Dealer Groups" selected>Dealer Groups</option>
				</select>
				<select class='cart-select-dropdown'>
					<option>One</option>
					<option>One</option>
					<option>One</option>
					<option>One</option>
					<option>One</option>
					<option>One</option>
					<option>One</option>
					<option>One</option>
					<option>One</option>
					<option>One</option>
					<option selected>Something else</option>
				</select>
				<button class='cart-main-button'>CART</button>
				<div class='clear'></div>
			</div>
			<div class='main-item-area'>
				<div class='item-row'>
					<div class='item-picture-container'>
						<img src="placeholder.png"/>
					</div>
					<div class='item-desc-container'>
						Unique Item Description
					</div>
					<!-- remember each item will need a data-attribute to identify it by it's button click, you'll need to create some type of unique ID -->
					<button data-img="placeholder.png" data-price="99.99" data-name="Need a Name" data-unique="Unique ID" class='item-add-to-cart'>ADD TO CART</button>
				</div>				
				<div class='item-row'>
					<div class='item-picture-container'>
						<img src="placeholder.png"/>
					</div>
					<div class='item-desc-container'>
						Unique Item Description
					</div>
					<!-- remember each item will need a data-attribute to identify it by it's button click, you'll need to create some type of unique ID -->
					<button data-img="placeholder.png" data-price="99.99" data-name="Need a Name" data-unique="Unique ID" class='item-add-to-cart'>ADD TO CART</button>
				</div>
				<div class='item-row'>
					<div class='item-picture-container'>
						<img src="placeholder.png"/>
					</div>
					<div class='item-desc-container'>
						Unique Item Description
					</div>
					<!-- remember each item will need a data-attribute to identify it by it's button click, you'll need to create some type of unique ID -->
					<button data-img="placeholder.png" data-price="99.99" data-name="Need a Name" data-unique="Unique ID" class='item-add-to-cart'>ADD TO CART</button>
				</div>
				<div class='item-row'>
					<div class='item-picture-container'>
						<img src="placeholder.png"/>
					</div>
					<div class='item-desc-container'>
						Unique Item Description
					</div>
					<!-- remember each item will need a data-attribute to identify it by it's button click, you'll need to create some type of unique ID -->
					<button data-img="placeholder.png" data-price="99.99" data-name="Need a Name" data-unique="Unique ID" class='item-add-to-cart'>ADD TO CART</button>
				</div>						
			</div>
		</div>
	</div>
</body>

<script src="script.js" rel="javascript" type="text/javascript"></script>
</html>
