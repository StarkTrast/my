 <?php
 session_start();
 require_once '../../accsess/constants.php';
 require_once '../../function/classes.php';
 require_once 'import_base/vp_menu2.php';    //   
  ini_set('max_execution_time', '600');
 $base= new connekt_db();
 $myData=new baseGoods();
 $lincMyData= $base->connekt ($myData);
 
 
   $importData=new baseConnection("vyprekra.mysql.tools", "vyprekra_db", "SjMz9sWR", "vyprekra_db");
//  $importData=new baseConnection("localhost", "root", "", "vyprekra_db");
 $lincImportData= $base->connekt ($importData);
 $importDataResult=$base->select($lincImportData, "SELECT * FROM `goods_base` WHERE `country`<>'Italy'");
	
	while ($rowImportData = mysqli_fetch_assoc ($importDataResult)){
	$menu1Save="";
	$menu2Save="";
	$menu3Save="";
	$menuTipSave="";
	$menu1Arr=explode (" ", $rowImportData['menu2']);
		foreach ($menu1Arr as $key => $value) {
			if (isset($menu2Array[trim($value)]))   {
				$menu1Save=$menu1Save.$menu2Array[trim($value)]['bs']['menu1'];
				$menu2Save=$menu2Save.$menu2Array[trim($value)]['bs']['menu2'];
				$menu3Save=$menu3Save.$menu2Array[trim($value)]['bs']['menu3'];
				$menuTipSave=$menuTipSave.$menu2Array[trim($value)]['bs']['menuTip'];
				}
		}
	$fotoAdress1="";
	$fotoAdress2="";
	$fotoAdress3="";
	if ($rowImportData['foto1']<>"") $fotoAdress1="fotoVP/".$rowImportData['foto1'];
	if ($rowImportData['foto2']<>"") $fotoAdress2="fotoVP/".$rowImportData['foto2'];
	if ($rowImportData['foto3']<>"") $fotoAdress3="fotoVP/".$rowImportData['foto3'];
	$availability="";
	if ($rowImportData['availability']=="r")  $availability="r";
	if ($rowImportData['sale_price']!="" OR $rowImportData['sale_price']!=0)  $availability="r";
	if (!is_numeric($rowImportData['price']) AND strpos($rowImportData['price'], "*") === false)  $availability="r";
	$cost_price=ceil($rowImportData['price']-$rowImportData['price']/10);
	$price=ceil($rowImportData['price']+$rowImportData['price']/10);
		$arrayChSave= array ('art' => 100000+$rowImportData['art'], 
							'name' => $rowImportData['name'], 
							'name_rus' => $rowImportData['name_rus'], 
							'country' => $rowImportData['country'], 
							'firm' => "~".$rowImportData['firm']."@", 
							'description' => $rowImportData['desc'], 
							'quantity' => 0, 
							'price' => $price, 
							'cost_price' => $cost_price, 
							'stok_price' => "", 
							'amount' => $rowImportData['amount'], 
							'foto1' => $fotoAdress1, 
							'foto2' => $fotoAdress2, 
							'foto3' => $fotoAdress3, 
							'menu1' => $menu1Save, 
							'menu2' => $menu2Save, 
							'menu3' => $menu3Save, 
							'menu_tip' => $menuTipSave, 
							'menu_amount' => "polnii-obem", 
							'availability' => $availability, 
							'number' => 1000, 
							'number_popular' => 1000, 
							'number_recommended' => 1000, 
							'number_stock' => 1000, 
							'title' => $rowImportData['name_rus']." ".$rowImportData['name'], 
							'short_desc' => substr($rowImportData['desc'], 0, 200), 
							'key_words' => $rowImportData['name_rus'].", ".$rowImportData['name'], 
							'application' => "", 
							'ingredient' => "", 
							'active_substance' => "", 
							'age' => "", 
							'function' => "", 
							'incompatible' => "", 
							'productCondition' => ""
							);
							$artSeec=100000+$rowImportData['art'];
		$MyDataResult=$base->select($lincMyData, "SELECT * FROM `goods_base` WHERE `art`='".$artSeec."'");
		if ($rowID=mysqli_fetch_assoc ($MyDataResult) ){

			$arrayChSave2= array(
								'idAI' => $rowID['id'],
								'price' => $price, 
								'cost_price' => $cost_price, 
								'availability' => $availability
								);
			
			$base->change ($lincMyData, "goods_base", $arrayChSave2);

		}  else {
			$base->save ($lincMyData, "goods_base", $arrayChSave);
		}
}
		
		              
	

 
 
 
 ?>