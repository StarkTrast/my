 <?php
	session_start();
	require_once '../function/classes.php';
	require_once '../function/constants.php';
	require_once 'function/classes.php';
	$con = new connekt_db();
	$word= new word_correct;
	$data = date ("Y-m-d H:i");
	$xml_doc = new domDocument("1.0", "utf-8");
	$menuArray['gidrofilnoye-maslo']= array ('name' => 'Гидрофильное масло', 'idSite' => '1000', 'idRozetka' => '4657292');
	$menuArray['mitsellyarnaya-voda-remuver']= array ('name' => 'Мицелярная вода, ремувер', 'idSite' => '1010', 'idRozetka' => '4657298');
	$menuArray['ochishchayushchiye-penki-geli-dlya-umyvaniya']= array ('name' => 'Очищающие пенки, гели для умывания', 'idSite' => '1020', 'idRozetka' => '4657274');
	$menuArray['enzimnaya-pudra-dlya-umyvaniya']= array ('name' => 'Энзимная пудра для умывания', 'idSite' => '1030', 'idRozetka' => '4657274');
	$menuArray['pilingi-skraby-dlya-litsa']= array ('name' => 'Пилинги, скрабы для лица', 'idSite' => '1040', 'idRozetka' => '4657304');
	$menuArray['ochishchyayushchiye-sredstva-dlya-por']= array ('name' => 'Очищающие средства для пор', 'idSite' => '1050', 'idRozetka' => '4657274');
	$menuArray['tonery-sprei-misty']= array ('name' => 'Тонеры, спреи, мисты', 'idSite' => '1060', 'idRozetka' => '4657316');
	$menuArray['toniziruyushchiye-pedy-dlya-litsa']= array ('name' => 'Тонизирующие пэды для лица', 'idSite' => '1070', 'idRozetka' => '4657304');
	$menuArray['essentsii-dlya-litsa']= array ('name' => 'Эссенции для лица', 'idSite' => '1080', 'idRozetka' => '4657286');
	$menuArray['syvorotki-dlya-litsa']= array ('name' => 'Сыворотки для лица', 'idSite' => '1090', 'idRozetka' => '4657286');
//	$menuArray['sredstva-ot-akne-chernykh-tochek-i-vospaleniy']= array ('name' => 'Средства от акне, черных точек и воспалений', 'idSite' => '1100', 'idRozetka' => '4657286');
	$menuArray['tkanevyye-maski-dlya-litsa']= array ('name' => 'Тканевые маски для лица', 'idSite' => '1110', 'idRozetka' => '4657310');
	$menuArray['gidrogelevyye-maski']= array ('name' => 'Гидрогелевые маски', 'idSite' => '1120', 'idRozetka' => '4657310');
	$menuArray['Alginatnyye-maski']= array ('name' => 'Альгинатные маски', 'idSite' => '1130', 'idRozetka' => '4657310');
	$menuArray['kremovyye-nochnyye-maski']= array ('name' => 'Ночные кремовые маски', 'idSite' => '1140', 'idRozetka' => '4657262');
	$menuArray['puzyrkovyye-maski-co2-o2']= array ('name' => 'Пузырьковые маски, СО2-О2', 'idSite' => '1150', 'idRozetka' => '4657310');
	$menuArray['maski-plenki-ochishchayushchiye']= array ('name' => 'Маски-пленки, очищающие маски', 'idSite' => '1160', 'idRozetka' => '4657310');
	$menuArray['maski-i-bandazhi-dlya-korrektsii-ovala-litsa']= array ('name' => 'Маски и бандажи для коррекции овала лица', 'idSite' => '1170', 'idRozetka' => '4657310');
	$menuArray['krem-dlya-litsa']= array ('name' => 'Крем для лица', 'idSite' => '1180', 'idRozetka' => '4657262');
//	$menuArray['uvlazhnyayushchiy-krem-dlya-lits']= array ('name' => 'Увлажняющий крем для лица', 'idSite' => '1190', 'idRozetka' => '4657262');
//	$menuArray['krem-ot-morshchin']= array ('name' => 'Крем от морщин/Лифтинг крем', 'idSite' => '1200', 'idRozetka' => '4657262');
//	$menuArray['osvetlyayushchiy-krem']= array ('name' => 'Осветляющий крем', 'idSite' => '1210', 'idRozetka' => '4657262');
	$menuArray['gel-dlya-litsa']= array ('name' => 'Гель для лица', 'idSite' => '1220', 'idRozetka' => '4657262');
	$menuArray['emulsii-losony-dlya-litsa']= array ('name' => 'Эмульсии, лосьоны для лица', 'idSite' => '1230', 'idRozetka' => '4657262');
	$menuArray['kremy-pod-glaza']= array ('name' => 'Кремы под глаза', 'idSite' => '1240', 'idRozetka' => '4657262');
	$menuArray['syvorotki-dlya-glaz']= array ('name' => 'Сыворотки для глаз', 'idSite' => '1250', 'idRozetka' => '4657286');
	$menuArray['patchi-pod-glaza']= array ('name' => 'Патчи под глаза', 'idSite' => '1260', 'idRozetka' => '4657280');
	$menuArray['ukhod-za-gubami']= array ('name' => 'Уход за губами', 'idSite' => '1270', 'idRozetka' => '4657256');
	$menuArray['solntsezashchitnyye-sredstva']= array ('name' => 'Солнцезащитные средства', 'idSite' => '1280', 'idRozetka' => '2048517');
	$menuArray['aksessuary-dlya-kozhi-litsa']= array ('name' => 'Аксессуары для кожи лица', 'idSite' => '1290', 'idRozetka' => '4657334');
	$menuArray['nabory-ukhodovoy-kosmetiki-dlya-litsa']= array ('name' => 'Наборы уходовой косметики для лица', 'idSite' => '1300', 'idRozetka' => '4657328');
//	$menuArray['ukhod-za-polostyu-rta']= array ('name' => 'Уход за полостью рта', 'idSite' => '1310', 'idRozetka' => '2099087');
	$menuArray['geli-skraby-dlya-dusha']= array ('name' => 'Гели для душа', 'idSite' => '1320', 'idRozetka' => '4657532');
	$menuArray['geli-kremy-losony-dlya-tela']= array ('name' => 'Гели, кремы, лосьоны для тела', 'idSite' => '1330', 'idRozetka' => '4657502');
	$menuArray['dezodoranty']= array ('name' => 'Дезодоранты', 'idSite' => '1340', 'idRozetka' => '4657478');
	$menuArray['korrektsii-figury']= array ('name' => 'Коррекции фигуры', 'idSite' => '1350', 'idRozetka' => '4657484');
	$menuArray['ukhod-za-rukami-i-nogtyami']= array ('name' => 'Уход за руками и ногтями', 'idSite' => '1360', 'idRozetka' => '2048752');
	$menuArray['ukhod-za-nogami']= array ('name' => 'Уход за ногами', 'idSite' => '1370', 'idRozetka' => '4657466');
	$menuArray['bb-cc-kremy']= array ('name' => 'ВВ, СС кремы', 'idSite' => '1380', 'idRozetka' => '4658462');
	$menuArray['kushons']= array ('name' => 'Кушоны', 'idSite' => '1390', 'idRozetka' => '4658456');
	$menuArray['tonalnyye-osnovy-praymery-bazy-pod-makiyazh']= array ('name' => 'Тональные основы, праймеры, базы под макияж', 'idSite' => '1400', 'idRozetka' => '4658450');
	$menuArray['pudry-dlya-litsa']= array ('name' => 'Пудры для лица', 'idSite' => '1410', 'idRozetka' => '4658468');
	$menuArray['khaylayter-konsiler-dlya-litsa']= array ('name' => 'Хайлайтер для лица', 'idSite' => '1420', 'idRozetka' => '4658444');
	$menuArray['tush-dlya-resnits']= array ('name' => 'Тушь для ресниц', 'idSite' => '1430', 'idRozetka' => '4658480');
//	$menuArray['podvodka-teni-dlya-glaz']= array ('name' => 'Подводка, тени для глаз', 'idSite' => '1440', 'idRozetka' => '4658492');
	$menuArray['syvorotka-dlya-resnits']= array ('name' => 'Сыворотка для ресниц', 'idSite' => '1450', 'idRozetka' => '4657322');
	$menuArray['karandashi-tint-dlya-brovey']= array ('name' => 'Карандаши, тинт для бровей', 'idSite' => '1460', 'idRozetka' => '4658486');
//	$menuArray['tint-blesk-pomada-dlya-gub']= array ('name' => 'Тинт, блеск, помада для губ', 'idSite' => '1470', 'idRozetka' => '4658516');
//	$menuArray['pityevoy-kollagen']= array ('name' => 'Питьевой коллаген', 'idSite' => '1480', 'idRozetka' => '4658516');
//	$menuArray['vitaminy']= array ('name' => 'Витамины', 'idSite' => '1490', 'idRozetka' => '274789');
//	$menuArray['zhenshenevyy-koreyskiy-chay']= array ('name' => 'Женьшеневый корейский чай', 'idSite' => '1500', 'idRozetka' => '4625004');
	$menuArray['shampuni-dlya-volos']= array ('name' => 'Шампуни для волос', 'idSite' => '1510', 'idRozetka' => '4657710');
	$menuArray['konditsionery-dlya-volos']= array ('name' => 'Кондиционеры для волос', 'idSite' => '1520', 'idRozetka' => '4657722');
	$menuArray['maski-dlya-volos']= array ('name' => 'Маски для волос', 'idSite' => '1530', 'idRozetka' => '4657734');
	$menuArray['vosstanovleniye-i-lecheniye-v-ampulakh']= array ('name' => 'Восстановление и лечение в ампулах', 'idSite' => '1540', 'idRozetka' => '4657764');
	$menuArray['fillery-dlya-volos']= array ('name' => 'Филлеры для волос', 'idSite' => '1550', 'idRozetka' => '4657764');
	$menuArray['syvorotki-essentsii-dlya-volos']= array ('name' => 'Сыворотки, эссенции для волос', 'idSite' => '1560', 'idRozetka' => '4657770');
	$menuArray['piling-skrab-dlya-kozhi-golovy']= array ('name' => 'Пилинг, скраб для кожи головы', 'idSite' => '1570', 'idRozetka' => '4657794');
	$menuArray['sprei-misty-toniki-dlya-volos']= array ('name' => 'Спреи, мисты, тоники для волос', 'idSite' => '1580', 'idRozetka' => '4657788');
	$menuArray['masla-dlya-volos']= array ('name' => 'Масла для волос', 'idSite' => '1590', 'idRozetka' => '4657728');
//	$menuArray['sredstva-protiv-vypadeniya-volos']= array ('name' => 'Средства против выпадения волос', 'idSite' => '1600', 'idRozetka' => '4657770');
	$menuArray['okrashivaniye']= array ('name' => 'Окрашивание', 'idSite' => '1610', 'idRozetka' => '3565580');
//	$menuArray['ukladka-stayling']= array ('name' => 'Укладка/стайлинг', 'idSite' => '1620', 'idRozetka' => '4657788');
	$menuArray['pitatelnyy-krem-dlya-litsa']= array ('name' => 'Питательный крем для лица', 'idSite' => '1630', 'idRozetka' => '4657262');
	$menuArray['toothbrushes']= array ('name' => 'Зубные щетки', 'idSite' => '1640', 'idRozetka' => '4658150');
	$menuArray['toothpastes']= array ('name' => 'Зубные пасты', 'idSite' => '1650', 'idRozetka' => '4658138');
	$menuArray['shower-scrub']= array ('name' => 'Скраб для душа', 'idSite' => '1660', 'idRozetka' => '4657508');
	$menuArray['face-concealer']= array ('name' => 'Консилер для лица', 'idSite' => '1670', 'idRozetka' => '4658438');
	$menuArray['hair-cream']= array ('name' => 'Крем для волос', 'idSite' => '1680', 'idRozetka' => '4657782');
	$menuArray['dry-hair-shampoo']= array ('name' => 'Сухой шампунь для волос', 'idSite' => '1690', 'idRozetka' => '4657716');
	$menuArray['hair-styling-sprays']= array ('name' => 'Лаки-спреи для укладки волос', 'idSite' => '1700', 'idRozetka' => '4657752');
	$menuArray['hair-styling-fluids']= array ('name' => 'Флюиды для укладки волос', 'idSite' => '1710', 'idRozetka' => '4657776');
	
	$yml_catalog=$xml_doc->createElement("yml_catalog");
		$xml_doc->appendChild($yml_catalog);
		$yml_catalog->setAttribute("date", $data);
	
		$shop=$xml_doc->createElement("shop");
			$yml_catalog->appendChild($shop);
		
			$currensy_shop=$xml_doc->createElement("currencies");
				$shop->appendChild($currensy_shop);      ///  валюта
					$currensy=$xml_doc->createElement("currency");
					$currensy_shop->appendChild($currensy); 
					$currensy->setAttribute("id", "UAH");
					$currensy->setAttribute("rate", 1.00);
				
		$catalog=$xml_doc->createElement("categories");
		$shop->appendChild($catalog);
//		$sql_code_menu1="SELECT * FROM `menu`";
//		$linc_menu1=$con->select($sql_code_menu1);
			foreach ($menuArray as $key => $value) {
				$menu1=$xml_doc->createElement("category", $value['name']);
				$catalog->appendChild($menu1);
				$menu1->setAttribute("id", $value['idSite']);
				$menu1->setAttribute("rz_id", $value['idRozetka']);
			}
//		$sql_code_menu2="SELECT * FROM `menu_two`";
//		$linc_menu2=$con->select($sql_code_menu2);
//			while ($row2=mysqli_fetch_array($linc_menu2)) {
//				$menu2=$xml_doc->createElement("category", $row2[2]);
//				$catalog->appendChild($menu2);
//				$id_menu2=1000+$row2[0];
//				$menu2->setAttribute("id", $id_menu2);
//			}
		
		
//	$sql_code_menu1="SELECT * FROM `menu`";
//	$linc_menu1=$con->select($sql_code_menu1);
//		while ($row=mysqli_fetch_array($linc_menu1)) {
//			$menu1=$xml_doc->createElement("category", $row[1]);  //   создание меню 1-го уровня
//				$catalog->appendChild($menu1);
//				$id_menu1=100+$row[2];
//				$menu1->setAttribute("id", $id_menu1);
//					$sql_code_menu2="SELECT * FROM `menu_two` WHERE `menu`='$row[0]'";
//					$linc_menu2=$con->select($sql_code_menu2);
//						while ($row2=mysqli_fetch_array($linc_menu2)) {
//							$menu2=$xml_doc->createElement("category", $row2[2]);   //  создание меню 2-го уровня
//							$menu1->appendChild($menu2);
//							$id_menu2=1000+$row2[0];
//							$menu2->setAttribute("id", $id_menu2);
//							$menu2->setAttribute("parentId", $id_menu1);
//								$sql_code_menu3="SELECT * FROM `menu_three` WHERE `menu2`='$row2[1]'";
//								$linc_menu3=$con->select($sql_code_menu3);
//									while ($row3=mysqli_fetch_array($linc_menu3)) {
//										$menu3=$xml_doc->createElement("category", $row3[1]);   //  создание меню 3-го уровня
//										$menu2->appendChild($menu3);
//										$id_menu3=10000+$row3[3];
//										$menu3->setAttribute("id", $id_menu3);
//										$menu3->setAttribute("parentId", $id_menu2);
//									}
//						}					
//		}	
		
		
		$arr_stop_brand=array("Inebrya");  //  Бренды, которые не показывать
								
		$arr_stop_id=array("2883",   //  ID, которые не показывать
								"3827",
								"3826",
								"3825",
								"3824",
								"3750",
								"3223",
								"3224",
								"3225",
								"2658",
								"3172",
								"3171",
								"3264",
								"2361",
								"2500",
								"2501",
								"1921",
								"1969",
								"2849",
								"2214",
								"2428",
								"2429",
								"3176",
								"2200",
								"3836",
								"2202",
								"2895",
								"2691",
								"2967",
								"3679",
								"3006",
								"1941",
								"2379",
								"2929",
								"2883",
								"2830",
								"3679",
								"1483",
								"1479",
								"1481",
								"1480",
								"1491",
								"1492",
								"1498",
								"1495",
								"3744",
								"3185",
								"3176",
								"1489",
								"2944",
								"3714",
								"3883",
								"3881",
								"3884",
								"3880",
								"3886",
								"3885",
								"1978");
								
								
	$sgl_code_goods="SELECT * FROM `goods_base`";
	$linc_goods=$con->select($sgl_code_goods);
				$offers=$xml_doc->createElement("offers");
				$shop->appendChild($offers);
		while ($row=mysqli_fetch_array($linc_goods)) {
			$k=0;
			
			
			
			foreach ($arr_stop_brand as $key=>$value){
				if (strtolower($row[6])== strtolower($word->word_correct_to_base($value)))
				{
					$k=1;
				}
			}
			foreach ($arr_stop_id as $key=>$value){
				if ($row[0]== $value)
				{
					$k=1;
				}
			}
			
		if ($row[9]<>"r" AND $k==0  AND $row[3]<>"" AND !strstr($row[10], 'tovary-dlya-zdorovya')) {
				$offer=$xml_doc->createElement("offer");
				$offers->appendChild($offer);
				$offer->setAttribute("id", $row[0]);
				$offer->setAttribute("available", "true");
				$stock_quantity=$xml_doc->createElement("stock_quantity", "5");
					$offer->appendChild($stock_quantity);
				$good_url=	$xml_doc->createCDATASection("https://www.vyprekrasny.com.ua/?show=produse&option=".$row[0]);
					$url=$xml_doc->createElement("url");
					$offer->appendChild($url);
					$url->appendChild($good_url);
					
				$image_url="https://www.vyprekrasny.com.ua/foto_goods/".$row[8];
					$image=$xml_doc->createElement("picture", $image_url);
					$offer->appendChild($image);
					
					
					
				
				
				$preBrand=	str_replace('-',' ', $row[6]);
				
				$preNameRus= str_ireplace ($row[6], "", $row[15]);
				$preNameRus= str_ireplace ($preBrand, "", $preNameRus);
				$preNameRus= str_ireplace ("&nbsp;", " ", $preNameRus);
				$preNameRus= str_ireplace ("&amp;", " ", $preNameRus);
				
				$preNameRusAr= explode(",", $preNameRus);
				$preNameRus=$preNameRusAr[0];
				
				$preName=	str_ireplace ($row[6], "", $row[1]);
				$preName=	str_ireplace ($preBrand, "", $preName);
				$preName=	str_ireplace ("&nbsp;", "", $preName);
				$preName=	str_ireplace ("&amp;", "", $preName);
				
				
				$name_goods_full=$xml_doc->createCDATASection($preNameRus." ".$preBrand." ".$preName." ".$row[7]);
					$name=$xml_doc->createElement("name");
					$offer->appendChild($name);
					$name->appendChild($name_goods_full);
					
					
				$currencyId=$xml_doc->createElement("currencyId", "UAH");
				$offer->appendChild($currencyId);
				
				
				$brandStopPrise= array (
					"Terrazen" => ""
				);
				$realPrice=$row[3];
				if ($row[18]<>"") $realPrice=$row[18];
				if (!isset($brandStopPrise[$row[6]])) $realPrice=ceil($realPrice+$realPrice*0.08); 
				$price=$xml_doc->createElement("price", $realPrice);
				$offer->appendChild($price);
			//	echo $realPrice;
				
				$brand=str_replace('-',' ', $row[6]);
				if ($brand=="") $brand="Без бренда";
				$vendor=$xml_doc->createElement("vendor", $brand);
				$offer->appendChild($vendor);
				
				
				$description_text=$xml_doc->createCDATASection($row[2]);
					$description=$xml_doc->createElement("description");
					$offer->appendChild($description);
					$description->appendChild($description_text);
					

			$menu1_array=explode(" ", $row[11]);
			$category="";			
			foreach ($menu1_array as $key => $value) {
				if (isset($menuArray[trim($value)])) $category=$menuArray[trim($value)]['idSite'];
			}
			$categoryId=$xml_doc->createElement("categoryId", $category);
						$offer->appendChild($categoryId);	
						
					
//		if ($row[11]=="" OR $row[11]==" ") {
//			$menu1_array=explode(" ", $row[10]);
//			$sql_code_menu1="SELECT * FROM `menu` WHERE `angl`='".trim($menu1_array[1])."'";
//				$linc_menu1=$con->select($sql_code_menu1);
//					$row1=mysqli_fetch_array($linc_menu1);
//						$id_menu1=100+$row1[2];
//						$categoryId=$xml_doc->createElement("categoryId", $id_menu1);
//						$offer->appendChild($categoryId);
			
//		}
//			else {
//				$menu2_array=explode(" ", $row[11]);
//				$sql_code_menu2="SELECT * FROM `menu_two` WHERE `angl`='".trim($menu2_array[1])."'";
//				$linc_menu2=$con->select($sql_code_menu2);
//					$row2=mysqli_fetch_array($linc_menu2);
//						$id_menu2=1000+$row2[0];
//						$categoryId=$xml_doc->createElement("categoryId", $id_menu2);
//						$offer->appendChild($categoryId);
//			}
						
					
		$param=$xml_doc->createElement("param", $row[17]);
		$offer->appendChild($param);
		$param->setAttribute("name", "Страна производитель");	
		
		$param2=$xml_doc->createElement("param", $row[7]);
		$offer->appendChild($param2);
		$param2->setAttribute("name", "Объем");

		$menu1_array=explode(" ", $row[10]);
			$sql_code_menu1="SELECT * FROM `menu` WHERE `angl`='".trim($menu1_array[1])."'";
				$linc_menu1=$con->select($sql_code_menu1);
					$row1=mysqli_fetch_array($linc_menu1);
					$fraza=$row1[1];
					$param3=$xml_doc->createElement("param", $fraza);
					$offer->appendChild($param3);
					$param3->setAttribute("name", "Средство по уходу");
					
		
		$filterArrayAge=array(
							"30"=>"до 30 лет", 
							"30-40"=>"30 - 40 лет",
							"40-50"=>"40 - 50 лет",
							"50"=>"50 + лет"
			);
		
					
		if (json_decode($row[21]) <> null )  {        //  параметр возраст
		$age="";
			$filterArray=json_decode($row[21]);
			foreach ($filterArray as $key=>$value ) {
				$age=$age.$filterArrayAge[$value].",";
			}
			$age = substr($age,0,-1);
		$param3=$xml_doc->createElement("param", $age);
				$offer->appendChild($param3);
				$param3->setAttribute("name", "Возраст");
		}
		
		
		$filterArrayFor=array(
							"for-problem-skin"=>"Для проблемной кожи", 
							"moisturizing"=>"Увлажнение",
							"nutrition"=>"Питание",
							"for-adult-skin"=>"Для зрелой кожи",
							"collagen-cosmetics"=>"Косметика с коллагеном", 
							"peptide-cosmetics"=>"Косметика с пептидами",
							"hyaluronic-acid-cosmetics"=>"Косметика с гиалуроновой кислотой",
							"cosmetics-with-aha-bha-acids"=>"Косметика с AHA BHA кислотами",
							"cosmetics-for-bleaching-and-whitening"=>"Косметика для осветления и отбеливания", 
							"vitamin-c-cosmetics"=>"Косметика с витамином С",
							"retinol-cosmetics"=>"Косметика с ретинолом",
							"cosmetics-with-centella-asian"=>"Косметика с центеллой азиатской",
							"aloe-vera-cosmetics"=>"Косметика с Алоэ Вера",
							"cosmetics-with-snail"=>"Косметика с улиткой"
			);
			
			
		if (json_decode($row[22]) <> null)  {        //  параметр для чего
		$forF="";
			$filterArray=json_decode($row[22]);
			foreach ($filterArray as $key=>$value ) {
				$forF=$forF.$filterArrayFor[$value].",";
			}
			$forF = substr($forF,0,-1);
			$param3=$xml_doc->createElement("param", $forF);
				$offer->appendChild($param3);
				$param3->setAttribute("name", "Назначение");
		}
		
		
		
		$filterArraySkin=array(
							"for-all-skin-types"=>"Для всех типов кожи", 
							"for-problematic-and-sensitive-skin"=>"Для проблемной и чувствительной кожи",
							"for-dry-dehydrated-skin"=>"Для сухой обезвоженой кожи",
							"for-pores"=>"Для нормальной кожи",
							"for-oily-and-combination-skin"=>"Для жирной и комбинированой кожи"
			);
			
			
		if (json_decode($row[23]) <> null)  {        //  параметр для какой кожи
		$Skin="";
			$filterArray=json_decode($row[23]);
			foreach ($filterArray as $key=>$value ) {
				$Skin=$Skin.$filterArraySkin[$value].",";
			}
			$param3=$xml_doc->createElement("param", $Skin);
				$offer->appendChild($param3);
				$param3->setAttribute("name", "Тип кожи");	
		}
			
			
			
			
			
//			$goods=$xml_doc->createElement("item");
//			$items->appendChild($goods);
//			$id_goods=$row[0];
//			$goods->setAttribute("id", $id_goods);
//			$name_goods_full=$xml_doc->createCDATASection($row[15]." ".$row[1]);
//			$name_goods=$xml_doc->createElement("name");
//				$goods->appendChild($name_goods);
//				$name_goods->appendChild($name_goods_full);
//					$good_url=	$xml_doc->createCDATASection("https://www.vyprekrasny.com.ua/?show=produse&option=".$row[0]);
//					$url=$xml_doc->createElement("url");
//						$goods->appendChild($url);
//						$url->appendChild($good_url);
//			$keywords=$row[1];
//			$menu1_array=explode(" ", $row[10]);
//				foreach ($menu1_array as $key => $value) {
//					$sql_code_menu1="SELECT * FROM `menu` WHERE `angl`='".$value."'";
//					$linc_menu1=$con->select($sql_code_menu1);
//						while ($row1=mysqli_fetch_array($linc_menu1)) {
//							$id_menu1=100+$row1[2];
//							$categoryId=$xml_doc->createElement("categoryId", $id_menu1);
//							$goods->appendChild($categoryId);
//							$keywords=$keywords." ".$row1[3];
//						}
//					
//				}
//			$menu2_array=explode(" ", $row[11]);
//				foreach ($menu2_array as $key => $value) {
//					$sql_code_menu2="SELECT * FROM `menu_two` WHERE `angl`='".$value."'";
//					$linc_menu2=$con->select($sql_code_menu2);
//					while ($row2=mysqli_fetch_array($linc_menu2)) {
//						$id_menu2=1000+$row2[0];
//						$categoryId=$xml_doc->createElement("categoryId", $id_menu2);
//						$goods->appendChild($categoryId);
//						$keywords=$keywords." ".$row2[4];
//					}
//				}
//			$menu3_array=explode(" ", $row[16]);
//				foreach ($menu3_array as $key => $value) {
//					$sql_code_menu3="SELECT * FROM `menu_three` WHERE `angl`='".$value."'";
//					$linc_menu3=$con->select($sql_code_menu3);
//						while ($row3=mysqli_fetch_array($linc_menu3)) {
//							$id_menu3=10000+$row3[3];
//							$categoryId=$xml_doc->createElement("categoryId", $id_menu3);
//							$goods->appendChild($categoryId);
//							$keywords=$keywords." ".$row3[4];
//						}	
//				}
//			$priceuah=$xml_doc->createElement("priceuah", $row[3]);
//				$goods->appendChild($priceuah);
//			$image_url="https://www.vyprekrasny.com.ua/foto_goods/".$row[8];
//			$image=$xml_doc->createElement("image", $image_url);
//				$goods->appendChild($image);
//			$brand=str_replace('-',' ', $row[6]);
//			$vendor=$xml_doc->createElement("vendor", $brand);
//				$goods->appendChild($vendor);
//			$vendorCode=$xml_doc->createElement("vendorCode", $row[0]);
//				$goods->appendChild($vendorCode);
//			$country=$xml_doc->createElement("country", $row[17]);
//				$goods->appendChild($country);
//			$description=$xml_doc->createElement("description");
//				$goods->appendChild($description);
//				$description_text=$xml_doc->createCDATASection($row[2]);
//				$description->appendChild($description_text);
//				$available_cod="true";
//			if ($row[9]=="r"){
//				$available_cod="";
//			}
//			$available=$xml_doc->createElement("available", $available_cod);
//				$goods->appendChild($available);
//			$word_key=$xml_doc->createElement("keywords");
//				$goods->appendChild($word_key);
//				$key=$xml_doc->createCDATASection($keywords);
//				$word_key->appendChild($key);
				
				
				
         	} 
		}
		
	
	$xml_doc->save("../xml_rozetka.xml");
	?>