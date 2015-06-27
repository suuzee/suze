<?php
	$product_data = array(
		array('product_name' => "衣服1", 'product_price' => 12.5, 'product_img' => '1.jpg'),
		array('product_name' => "衣服2", 'product_price' => 12.5, 'product_img' => '2.jpg'),
		array('product_name' => "衣服3", 'product_price' => 12.5, 'product_img' => '3.jpg'),
		array('product_name' => "衣服4", 'product_price' => 12.5, 'product_img' => '4.jpg'),
		array('product_name' => "衣服5", 'product_price' => 12.5, 'product_img' => '5.jpg'),
		array('product_name' => "衣服6", 'product_price' => 12.5, 'product_img' => '6.jpg'),
		array('product_name' => "衣服7", 'product_price' => 12.5, 'product_img' => '7.jpg'),
		array('product_name' => "衣服8", 'product_price' => 12.5, 'product_img' => '8.jpg'),
		array('product_name' => "衣服9", 'product_price' => 12.5, 'product_img' => '9.jpg'),
		array('product_name' => "衣服10", 'product_price' => 12.5, 'product_img' => '10.jpg'),
		array('product_name' => "衣服11", 'product_price' => 12.5, 'product_img' => '11.jpg'),
		array('product_name' => "衣服12", 'product_price' => 12.5, 'product_img' => '12.jpg')
	);
	
	
	$product_data2 = array(
	 	array('photo_thumb_width' => 405, 'photo_thumb_height' => 366, 'photo_thumb_src' => 'img/img1.jpg'),
	 	array('photo_thumb_width' => 384, 'photo_thumb_height' => 473, 'photo_thumb_src' => 'img/img2.jpg'),
	 	array('photo_thumb_width' => 411, 'photo_thumb_height' => 611, 'photo_thumb_src' => 'img/img3.jpg'),
	 	array('photo_thumb_width' => 407, 'photo_thumb_height' => 599, 'photo_thumb_src' => 'img/img4.jpg'),
	 	array('photo_thumb_width' => 392, 'photo_thumb_height' => 574, 'photo_thumb_src' => 'img/img5.jpg'),
	 	array('photo_thumb_width' => 500, 'photo_thumb_height' => 336, 'photo_thumb_src' => 'img/img6.jpg')
	);
	echo json_encode($product_data2);