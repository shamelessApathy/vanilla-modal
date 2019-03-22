document.addEventListener("DOMContentLoaded", function(){
	var Cart = function(){
		this.init = function()
		{
			this.modal = document.getElementsByClassName("cart-modal")[0];
			this.modalName = document.getElementById('variable-name');
			this.modalPrice = document.getElementById('variable-price');
			this.modalImg = document.getElementById('variable-img');
			this.closeModal = document.getElementsByClassName("cart-modal-close")[0];
		}
		this.hideModal = function()
		{
			this.modal.setAttribute("style", "margin-top:-1500px");
		}.bind(this)
		this.closeListener = function()
		{
			this.closeModal.addEventListener("click", this.hideModal);
		}
		this.showModal = function(element)
		{
			// pull data-attributea
			var name = element.getAttribute("data-name");
			var price = element.getAttribute("data-price");
			var img = element.getAttribute("data-img");

			this.modalName.innerHTML = name;
			this.modalPrice.innerHTML = price;
			this.modalImg.innerHTML = "<img src='" + img +"'/>";

			// Pull Modal from hidden place
			this.modal.setAttribute("style", "margin-top:0");
		}.bind(this)
		this.eventListeners = function(el)
		{
			var element = el;
			element.addEventListener('click', function(){
				this.showModal(element);
			}.bind(this));
		}.bind(this)
		this.init();
		this.closeListener();
	}

	var newCart = new Cart();
	var allTheButtons = document.getElementsByClassName("item-add-to-cart");
	// Right here I'm iterating through the array above and call the instantiated class newCart and it's function eventListener()
	// Passing it the element attribute of allTheButtons[i]

	for (var i = 0; i < allTheButtons.length; i++)
	{
		newCart.eventListeners(allTheButtons[i]);
	}
});