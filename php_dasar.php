<?php
	function luasLingkaran ($angka){
        return M_PI*$angka*$angka;
    }
    
    function kelilingLingkaran ($angka){
        return 2*M_PI*$angka;
    }
    
    function luasPersegi ($panjang, $luas){
        return $panjang*$luas;
    }
    
	for($i=1; $i<=100; $i++){
    	if($i%3==0 && $i%5==0){
        	printf('%.2f', luasPersegi($i/3, $i/5));
            echo '<br>';
        }else if($i%3==0){
           	printf('%.2f', luasLingkaran($i/3));
            echo '<br>';
        }else if($i%5==0){
         	printf('%.2f', kelilingLingkaran($i/5));
            echo '<br>';
        }else{
          	printf('%.2f', $i);
            echo '<br>';
        }
    }
?>
