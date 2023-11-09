$marka1="bmw";
$marka2="mercedes";
$marka="audi";

echo "en sevdiğim araba" .$marka1."dir";
echo "en sevdiğim araba" .$marka2."dir";

$markalar2= array("audi", "bmw", "mercedes");

echo gettype($markalar2)."<br>";
echo $markalar2[0]."<br>";
echo $markalar2[1]."<br>";
echo $markalar2[2]."<br>";

$sayilar=array(1,2,3,4,5,6,7,8,9,10);
$isimler=array("ali","veli","ahmet","mehmet","ayşe");

$sayilar[0]="bir";
$sayilar[1]="iki";
$sayilar[2]="üç";
$sayilar[3]="dört";
$sayilar[4]="beş";

echo "$sayilar[0] <br>";
echo "$sayilar[1] <br>";
echo "$sayilar[2] <br>";
echo "$sayilar[3] <br>";
echo "$sayilar[4] <br>";

#döngüler-loop
echo  "$isimler[0].<br>";

echo "araba markası: $markalar2[0] <br>";
echo "araba markası: $markalar2[1] <br>";
echo "araba markası: $markalar2[2] <br>";
?>
 