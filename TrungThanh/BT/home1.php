<?php
	function GiaiThua($SoNhap){
		$temp=(int)$SoNhap;
		for($i=1;$i<$temp;$i++){
			$SoNhap*=$i;
		}
		return $SoNhap;
	}
	
	function DaoNguocChuoi($Chuoi){
		$temp=strlen($Chuoi);
		for($i=0;$i<$temp;$i++){
			$MangChuoi=$Chuoi[$i];
		}
		return $MangChuoi;
	}
	
	function XapSep($arr){
		$DoDai=count($arr);
		$temp=0;
		for($i=0;$i<$DoDai;$i++){
			if($arr[$i]<$arr[$i+1]){
				$arr[$i]=$temp;
				$arr[$i+1]=$arr[$i];
				$temp=$arr[$i+1];
			}
		}
		for($i=0;$i<$DoDai;$i++){
			echo $arr[$i];		
		}				
	}
	
	//echo (DaoNguocChuoi('abc'));
	$arr=[1,3,2,5];
	XapSep($arr);
	
?>
