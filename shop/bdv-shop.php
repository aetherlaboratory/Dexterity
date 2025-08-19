<form class="woocommerce-ordering" method="get">
	<select name="orderby" class="orderby" aria-label="Shop order">
					<option value="menu_order"  selected='selected'>Default sorting</option>
					<option value="popularity" >Sort by popularity</option>
					<option value="rating" >Sort by average rating</option>
					<option value="date" >Sort by latest</option>
					<option value="price" >Sort by price: low to high</option>
					<option value="price-desc" >Sort by price: high to low</option>
			</select>
	<input type="hidden" name="paged" value="1" />
	</form>



<ul class="products columns-4">


<?php require_once get_template_directory() .'/bdv-loop.php';?>




</ul>
</main></div>
<footer>