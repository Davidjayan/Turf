<?php
ini_set('display_errors', 0);
$dbhost = "localhost";
$username = "root";
$password = "";
$database = "feedback";
$user=$_POST['user'];
$conn = new mysqli($dbhost, $username, $password, $database);
if ($conn->connect_error) {
  die("Couldn't connect");
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  
	  $flag1 = $_POST['flag1'];
      if($flag1=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=1"; 
         $conn->query($sql);
       }
	   $flag2 = $_POST['flag2'];
      if($flag2=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=2"; 
         $conn->query($sql);
       }
	   $flag3 = $_POST['flag3'];
      if($flag3=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=3"; 
         $conn->query($sql);
       }
	   $flag4 = $_POST['flag4'];
      if($flag4=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=4"; 
         $conn->query($sql);
       }
	   $flag5 = $_POST['flag5'];
      if($flag5=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=5"; 
         $conn->query($sql);
       }
	   $flag6 = $_POST['flag6'];
      if($flag6=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=6"; 
         $conn->query($sql);
       }
	   $flag7 = $_POST['flag7'];
      if($flag7=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=7"; 
         $conn->query($sql);
       }
	   $flag8 = $_POST['flag8'];
      if($flag8=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=8"; 
         $conn->query($sql);
       }
	   $flag9 = $_POST['flag9'];
      if($flag9=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=9"; 
         $conn->query($sql);
       }
	   $flag10 = $_POST['flag10'];
      if($flag10=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=10"; 
         $conn->query($sql);
       }
	   $flag11 = $_POST['flag11'];
      if($flag11=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=11"; 
         $conn->query($sql);
       }
	   $flag12 = $_POST['flag12'];
      if($flag12=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=12"; 
         $conn->query($sql);
       }
	   $flag13 = $_POST['flag13'];
      if($flag13=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=13"; 
         $conn->query($sql);
       }
	   $flag14 = $_POST['flag14'];
      if($flag14=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=14"; 
         $conn->query($sql);
       }
	   $flag15 = $_POST['flag15'];
      if($flag15=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=15"; 
         $conn->query($sql);
       }
	   $flag16 = $_POST['flag16'];
      if($flag16=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=16"; 
         $conn->query($sql);
       }
	   $flag17 = $_POST['flag17'];
      if($flag17=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=17"; 
         $conn->query($sql);
       }
	   $flag18 = $_POST['flag18'];
      if($flag18=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=18"; 
         $conn->query($sql);
       }
	   $flag19 = $_POST['flag19'];
      if($flag19=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=19"; 
         $conn->query($sql);
       }
	   $flag20 = $_POST['flag20'];
      if($flag20=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=20"; 
         $conn->query($sql);
       }
	   $flag21 = $_POST['flag21'];
      if($flag21=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=21"; 
         $conn->query($sql);
       }
	   $flag22 = $_POST['flag22'];
      if($flag22=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=22"; 
         $conn->query($sql);
       }
	   $flag23 = $_POST['flag23'];
      if($flag23=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=23"; 
         $conn->query($sql);
       }
	   $flag24 = $_POST['flag24'];
      if($flag24=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=24"; 
         $conn->query($sql);
       }
	   $flag25 = $_POST['flag25'];
      if($flag25=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=25"; 
         $conn->query($sql);
       }
	   $flag26 = $_POST['flag26'];
      if($flag26=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=26"; 
         $conn->query($sql);
       }
	   $flag27 = $_POST['flag27'];
      if($flag27=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=27"; 
         $conn->query($sql);
       }
	   $flag28 = $_POST['flag28'];
      if($flag28=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=28"; 
         $conn->query($sql);
       }
	   $flag29 = $_POST['flag29'];
      if($flag29=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=29"; 
         $conn->query($sql);
       }
	   $flag30 = $_POST['flag30'];
      if($flag30=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=30"; 
         $conn->query($sql);
       }
	   $flag31 = $_POST['flag31'];
      if($flag31=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=31"; 
         $conn->query($sql);
       }
	   $flag32 = $_POST['flag32'];
      if($flag32=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=32"; 
         $conn->query($sql);
       }
	   $flag33 = $_POST['flag33'];
      if($flag33=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=33"; 
         $conn->query($sql);
       }
	   $flag34 = $_POST['flag34'];
      if($flag34=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=34"; 
         $conn->query($sql);
       }
	   $flag35 = $_POST['flag35'];
      if($flag35=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=35"; 
         $conn->query($sql);
       }
	   $flag36 = $_POST['flag36'];
      if($flag36=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=36"; 
         $conn->query($sql);
       }
	   $flag37 = $_POST['flag37'];
      if($flag37=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=37"; 
         $conn->query($sql);
       }
	   $flag38 = $_POST['flag38'];
      if($flag38=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=38"; 
         $conn->query($sql);
       }
	   $flag39 = $_POST['flag39'];
      if($flag39=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=39"; 
         $conn->query($sql);
       }
	   $flag40 = $_POST['flag40'];
      if($flag40=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=40"; 
         $conn->query($sql);
       }
	   $flag41 = $_POST['flag41'];
      if($flag41=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=41"; 
         $conn->query($sql);
       }
	   $flag42 = $_POST['flag42'];
      if($flag42=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=42"; 
         $conn->query($sql);
       }
	   $flag43 = $_POST['flag43'];
      if($flag43=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=43"; 
         $conn->query($sql);
       }
	   $flag44 = $_POST['flag44'];
      if($flag44=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=44"; 
         $conn->query($sql);
       }
	   $flag45 = $_POST['flag45'];
      if($flag45=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=45"; 
         $conn->query($sql);
       }
	   $flag46 = $_POST['flag46'];
      if($flag46=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=46"; 
         $conn->query($sql);
       }
	   $flag47 = $_POST['flag47'];
      if($flag47=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=47"; 
         $conn->query($sql);
       }
	   $flag48 = $_POST['flag48'];
      if($flag48=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=48"; 
         $conn->query($sql);
       }
	   $flag49 = $_POST['flag49'];
      if($flag49=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=49"; 
         $conn->query($sql);
       }
	   $flag50 = $_POST['flag50'];
      if($flag50=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=50"; 
         $conn->query($sql);
       }
	   $flag51 = $_POST['flag51'];
      if($flag51=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=51"; 
         $conn->query($sql);
       }
	   $flag52 = $_POST['flag52'];
      if($flag52=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=52"; 
         $conn->query($sql);
       }
	   $flag53 = $_POST['flag53'];
      if($flag53=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=53"; 
         $conn->query($sql);
       }
	   $flag54 = $_POST['flag54'];
      if($flag54=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=54"; 
         $conn->query($sql);
       }
	   $flag55 = $_POST['flag55'];
      if($flag55=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=55"; 
         $conn->query($sql);
       }
	   $flag56 = $_POST['flag56'];
      if($flag56=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=56"; 
         $conn->query($sql);
       }
	   $flag57 = $_POST['flag57'];
      if($flag57=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=57"; 
         $conn->query($sql);
       }
	   $flag58 = $_POST['flag58'];
      if($flag58=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=58"; 
         $conn->query($sql);
       }
	   $flag59 = $_POST['flag59'];
      if($flag59=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=59"; 
         $conn->query($sql);
       }
	   $flag60 = $_POST['flag60'];
      if($flag60=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=60"; 
         $conn->query($sql);
       }
	   $flag61 = $_POST['flag61'];
      if($flag61=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=61"; 
         $conn->query($sql);
       }
	   $flag62 = $_POST['flag62'];
      if($flag62=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=62"; 
         $conn->query($sql);
       }
	   $flag63 = $_POST['flag63'];
      if($flag63=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=63"; 
         $conn->query($sql);
       }
	   $flag64 = $_POST['flag64'];
      if($flag64=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=64"; 
         $conn->query($sql);
       }
	   $flag65 = $_POST['flag65'];
      if($flag65=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=65"; 
         $conn->query($sql);
       }
	   $flag66 = $_POST['flag66'];
      if($flag66=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=66"; 
         $conn->query($sql);
       }
	   $flag67 = $_POST['flag67'];
      if($flag67=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=67"; 
         $conn->query($sql);
       }
	   $flag68 = $_POST['flag68'];
      if($flag68=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=68"; 
         $conn->query($sql);
       }
	   $flag69 = $_POST['flag69'];
      if($flag69=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=69"; 
         $conn->query($sql);
       }
	   $flag70 = $_POST['flag70'];
      if($flag70=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=70"; 
         $conn->query($sql);
       }
	   $flag71 = $_POST['flag71'];
      if($flag71=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=71"; 
         $conn->query($sql);
       }
	   $flag72 = $_POST['flag72'];
      if($flag72=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=72"; 
         $conn->query($sql);
       }
	   $flag73 = $_POST['flag73'];
      if($flag73=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=73"; 
         $conn->query($sql);
       }
	   $flag74 = $_POST['flag74'];
      if($flag74=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=74"; 
         $conn->query($sql);
       }
	   $flag75 = $_POST['flag75'];
      if($flag75=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=75"; 
         $conn->query($sql);
       }
	   $flag76 = $_POST['flag76'];
      if($flag76=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=76"; 
         $conn->query($sql);
       }
	   $flag77 = $_POST['flag77'];
      if($flag77=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=77"; 
         $conn->query($sql);
       }
	   $flag78 = $_POST['flag78'];
      if($flag78=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=78"; 
         $conn->query($sql);
       }
	   $flag79 = $_POST['flag79'];
      if($flag79=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=79"; 
         $conn->query($sql);
       }
	   $flag80 = $_POST['flag80'];
      if($flag80=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=80"; 
         $conn->query($sql);
       }
	   $flag81 = $_POST['flag81'];
      if($flag81=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=81"; 
         $conn->query($sql);
       }
	   $flag82 = $_POST['flag82'];
      if($flag82=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=82"; 
         $conn->query($sql);
       }
	   $flag83 = $_POST['flag83'];
      if($flag83=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=83"; 
         $conn->query($sql);
       }
	   $flag84 = $_POST['flag84'];
      if($flag84=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=84"; 
         $conn->query($sql);
       }
	   $flag85 = $_POST['flag85'];
      if($flag85=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=85"; 
         $conn->query($sql);
       }
	   $flag86 = $_POST['flag86'];
      if($flag86=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=86"; 
         $conn->query($sql);
       }
	   $flag87 = $_POST['flag87'];
      if($flag87=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=87"; 
         $conn->query($sql);
       }
	   $flag88 = $_POST['flag88'];
      if($flag88=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=88"; 
         $conn->query($sql);
       }
	   $flag89 = $_POST['flag89'];
      if($flag89=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=89"; 
         $conn->query($sql);
       }
	   $flag90 = $_POST['flag90'];
      if($flag90=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=90"; 
         $conn->query($sql);
       }
	   $flag91 = $_POST['flag91'];
      if($flag91=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=91"; 
         $conn->query($sql);
       }
	   $flag92 = $_POST['flag92'];
      if($flag92=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=92"; 
         $conn->query($sql);
       }
	   $flag93 = $_POST['flag93'];
      if($flag93=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=93"; 
         $conn->query($sql);
       }
	   $flag94 = $_POST['flag94'];
      if($flag94=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=94"; 
         $conn->query($sql);
       }
	   $flag95 = $_POST['flag95'];
      if($flag95=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=95"; 
         $conn->query($sql);
       }
	   $flag96 = $_POST['flag96'];
      if($flag96=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=96"; 
         $conn->query($sql);
       }
	   $flag97 = $_POST['flag97'];
      if($flag97=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=97"; 
         $conn->query($sql);
       }
	   $flag98 = $_POST['flag98'];
      if($flag98=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=98"; 
         $conn->query($sql);
       }
	   $flag99 = $_POST['flag99'];
      if($flag99=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=99"; 
         $conn->query($sql);
       }
	   $flag100 = $_POST['flag100'];
      if($flag100=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=100"; 
         $conn->query($sql);
       }
	   $flag101 = $_POST['flag101'];
      if($flag101=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=101"; 
         $conn->query($sql);
       }
	   $flag102 = $_POST['flag102'];
      if($flag102=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=102"; 
         $conn->query($sql);
       }
	   $flag103 = $_POST['flag103'];
      if($flag103=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=103"; 
         $conn->query($sql);
       }
	   $flag104 = $_POST['flag104'];
      if($flag104=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=104"; 
         $conn->query($sql);
       }
	   $flag105 = $_POST['flag105'];
      if($flag105=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=105"; 
         $conn->query($sql);
       }
	   $flag106 = $_POST['flag106'];
      if($flag106=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=106"; 
         $conn->query($sql);
       }
	   $flag107 = $_POST['flag107'];
      if($flag107=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=107"; 
         $conn->query($sql);
       }
	   $flag108 = $_POST['flag108'];
      if($flag108=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=108"; 
         $conn->query($sql);
       }
	   	  $flag109 = $_POST['flag109'];
      if($flag109=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=109"; 
         $conn->query($sql);
       }
	   	  $flag110 = $_POST['flag110'];
      if($flag110=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=110"; 
         $conn->query($sql);
       }
	   	  $flag111 = $_POST['flag111'];
      if($flag111=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=111"; 
         $conn->query($sql);
       }
	   	  $flag112 = $_POST['flag112'];
      if($flag112=="true")
	  {
	     $sql = "UPDATE booked SET status='true' , user_name='".$user."'where slotno=112"; 
         $conn->query($sql);
       }
	   
  $conn->close();
  echo "looks Cool! ;)<br>";
} else {
  die("NO bookings found!<br>");
}
$url = 'http://localhost/turf/payment.html';
header("Location: " . $url);
die();
?>
