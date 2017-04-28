<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Http\Response;

use DB;

use Cookie;

class Products extends Controller {
    //
    public function products(Request $request){ 
    	$products = DB::select('select * from products');
    	return view("pages.products", ['products' => $products, 'title' => 'Products']);
   	}


   	public function recent(Request $request){
   		//1.1 get recent products from cookie
    	$recent_products = unserialize($request->cookie('recent_product'));
    	$products = array();
    	if ($recent_products != null && count($recent_products) > 0) {
    		$sql_statement = 'select * from products where id in (';
    		foreach ($recent_products as $product_id) {
    			$sql_statement = $sql_statement.$product_id.",";
    		}
    		$sql_statement = substr($sql_statement, 0, -1);
    		$sql_statement = $sql_statement.")";
    		$products = DB::select($sql_statement);
    		$products = $this->order_products($products, $recent_products);
    	}

    	return view("pages.products", ['products' => $products, 'title' => '5 Recent Products']);
   	}


   	public function most_visited(Request $request){ 
   		//1.1 get most visisted from cookie
    	$most_visited = unserialize($request->cookie('most_visited'));
    	$products = array();

    	if ($most_visited != null && count($most_visited) > 0) {

    		//get top 5 most visisted product ids
    		$most_visited_ids = array();
    		arsort($most_visited);
    		foreach ($most_visited as $product_id => $count) {
    			array_push($most_visited_ids, $product_id);
    		}
    		$most_visited_ids = array_splice($most_visited_ids, 0, 5);

    		$sql_statement = 'select * from products where id in (';
    		foreach ($most_visited_ids as $product_id) {
    			$sql_statement = $sql_statement.$product_id.",";
    		}
    		$sql_statement = substr($sql_statement, 0, -1);
    		$sql_statement = $sql_statement.")";
    		$products = DB::select($sql_statement);
    		$products = $this->order_products($products, $most_visited_ids);
    	}

    	return view("pages.products", ['products' => $products, 'title' => '5 Frequently Visited Products']);
   	}


   	public function product(Request $request, $id){ 
    	$products = DB::select("select * from products where id = ".$id);

    	//1.1 get recent products cookie
    	$recent_products = unserialize($request->cookie('recent_product'));
    	if ($recent_products == null) {
    		$recent_products = array();
    	}

    	//1.2 if product_id already exists in recent products, delete it
    	$index = array_search($id ,$recent_products);
    	while($index !== FALSE ) {
    		unset($recent_products[$index]);
    		$index = array_search($id ,$recent_products);
    	}

		  //1.3 add this product id to the front of recent products array
    	array_unshift($recent_products, $id);
    	$recent_products = array_splice($recent_products, 0, 5);


    	//2.1 get most visisted cookie
    	$most_visited = unserialize($request->cookie('most_visited'));
    	if ($most_visited == null) {
    		$most_visited = array();
    	}

    	//2.2 if the page has already been visited, get count from cookies
    	$page_count = 0;
    	if (array_key_exists($id, $most_visited)) {
    		$page_count = $most_visited[$id];
    	}

    	//2.3 increment count and update in most_visited
    	$page_count = $page_count + 1;
    	$most_visited[$id] = $page_count;

    	//3.1 return response with cookie
    	$minutes = 180;
    	return response()
            ->view("pages.product", ['product' => $products[0]], 200)
            ->cookie('recent_product', serialize($recent_products), $minutes)
            ->cookie('most_visited', serialize($most_visited), $minutes);
    	// return view("pages.product", ['product' => $products[0]]);
   	}

   	public function order_products($products, $ordered_product_ids) {
   		$ordered_products = array();
   		$products_map = array();
   		foreach ($products as $product) {
   			$id = $product->id;
   			$products_map[$id] = $product;
   		}

   		foreach ($ordered_product_ids as $product_id) {
   			array_push($ordered_products, $products_map[$product_id]);
   		}

   		return $ordered_products;
   	}
}
