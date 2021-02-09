<!DOCTYPE html>
<head>
<style>

*{margin:0px;}

h1{
    
    color:black;
}

h2{ width:300px;
    text-align:center;
    color:white;
    margin-left:25%;
  background:#330033;
   

}

.h1{

    background-color:#330033;
    color:white;
    text-align:center;
}

.h3{
    text-align:center;
}


</style>

</head>
<body>

<h1 class="h1">STONE PAPER SCISSOR</h1>
<h1 class="h3"><img src="sps.jpg"></h1>

<table>
<tr>
<?php
$count=0;
$ritu=0;

echo "<td>";
echo "<h1>Ritu<h1>";
$random=rand(1,3);



    switch($random){
        case "1":
            print '<img src="scissor.jpg">';
            break;

        case "2":
            print '<img src="paper.jpg">';
            break;

        case "3":
            print '<img src="stone.jpg">';
            break;
        default: echo "u didnt mention";
        }
      
echo "</td>";

echo "<td>";
echo "<h1>vs<h1>";
echo "</td>";




echo "<td>";
        echo "<h1>vaibhav<h1>";


     
        $ran=rand(1,3);



    switch($ran){
        case "1":
            print '<img src="scissor.jpg">';
            break;

        case "2":
            print '<img src="paper.jpg">';
            break;

        case "3":
            print '<img src="stone.jpg">';
            break;
        default: echo "u didnt mention";
        }
 
        echo "</td>";


        if($ran==$random)
        {

            echo"<h2>THE MATCH IS DRAW</h2>";
        }



        
        else if($ran=="1" && $random=="2")
        {

            echo"<h2>vaibhav JHA is winner</h2>";
            $count++;
        }

        else if($ran=="1" && $random=="3")
        {

            echo"<h2>RITU JHA is winner</h2>";
            $ritu++;
        }

        else if($ran=="2" && $random=="1")
        {

            echo"<h2>RITU JHAis winner</h2>";
            $ritu++;
        }

        
        else if($ran=="2" && $random=="3")
        {

            echo"<h2>VAIBHAV JHA is winner</h2>";
            $count++;
        }

        
        else if($ran=="3" && $random=="1")
        {

            echo"<h2>VAIBHAV is winner</h2>";
            $count++;
        }

        
        else if($ran=="3" && $random=="2")
        {

            echo"<h2>RITU JHA is winner</h2>";
            $ritu++;
        }

     

?>
</tr>
</table>
</body>
