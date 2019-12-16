<?php 

	require_once('adminDB.php');

	function getAllCategory(){

		$conn = getConnection();
		$sql = "select * from category";
		$result = mysqli_query($conn,$sql);

		return $result;
	}

	function getProductLastId(){

		$conn = getConnection();
		$sql = "select max(pid) as 'pid' from product";
		$result = mysqli_query($conn,$sql);
		$data = mysqli_fetch_assoc($result);

		return $data;
	}

	function validName($name)
	{
		$letter = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',' ','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','-');
		$nameSplit = str_split($name);
		$flag = 0;
		foreach ($nameSplit as $key) {
			foreach ($letter as $c) {
				if ($key == $c) {
					$flag+=1;
				}
			}
		}
		return $flag;
	}


	function productAdd($pname,$subcat,$quan,$buy,$sell,$date,$des,$activity,$rname){

		$conn = getConnection();
		$sql1 = "select * from subcategory where subcat_name = '{$subcat}'";
		$result1 = mysqli_query($conn,$sql1);
		$sub = mysqli_fetch_assoc($result1);
		$subcatid = $sub['subcat_id'];

		$sql2 = "insert into product values ('','{$pname}','{$quan}','{$date}','{$buy}','{$sell}','{$des}','{$rname}','{$activity}','{$subcatid}')";
		if (mysqli_query($conn,$sql2)) {
			return true;
		}else{
			return false;
		}
	}

	function getAllProduct(){

		$conn = getConnection();
		$sql = "select product.pid, product.name, category.cat_name, 			subcategory.subcat_name, product.quantity, 						product.incoming_date, product.buying_price, 					product.selling_price, product.description, product.image, 		product.activity from product , category , subcategory where 	 product.subcat_id = subcategory.subcat_id and 					subcategory.cat_id = category.cat_id order by product.pid asc";
		$result = mysqli_query($conn,$sql);

		return $result;	
	}

	function getSearchProduct($key){

		$conn = getConnection();
		$sql = "select product.pid, product.name, category.cat_name, subcategory.subcat_name, product.quantity, product.incoming_date, product.buying_price, product.selling_price, product.description, product.image, product.activity from product , category, subcategory where product.subcat_id = subcategory.subcat_id and subcategory.cat_id = category.cat_id and product.name like '{$key}%'";
		$result = mysqli_query($conn,$sql);

		return $result;	
	}

	function deleteProduct($id){

		$conn = getConnection();
		$sql = "delete from product where pid = '{$id}'";
		if (mysqli_query($conn,$sql)) {
			return true;
		}else{
			return false;
		}
	}

 ?>