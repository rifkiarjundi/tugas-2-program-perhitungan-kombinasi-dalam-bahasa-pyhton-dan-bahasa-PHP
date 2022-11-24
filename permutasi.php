<form method="post">
 Ketik jumlah obyek : 
 <input type="number" name="n"><br>
 Ketik jumlah urutan : 
 <input type="number" name="r"><br>
 <input type="submit" name="bHitung" value="Hitung Permutasi">
</form>
<?php
function hitungfaktorial($F) {
	$F=$F;
	$f=1;
	for ($x=1;$x<=$F;$x++) {
		$f=$f*$x;
	}
    return $f;
}
if (isset($_POST['bHitung'])) {
	$n=$_POST['n'];
	$r=$_POST['r'];
	$a=hitungfaktorial($n);
	$b=$n-$r;
	$c=hitungfaktorial($b);
	$permutasi=$a/$c;
	echo 'Permutasi dari sejumlah '.$n.' obyek dengan urutan sebanyak '.$r.' adalah :'.$permutasi;
}
?>
