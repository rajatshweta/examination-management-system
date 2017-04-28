<?php
mysql_connect("localhost","root") or die("could not find database");
mysql_select_db("result") or die("could not find db!");
 
$output='';

if(isset($_POST['submit']))

{
  //echo"<pre>";
  //print_r($_POST['search']);die;
  if(!empty($_POST['search']))
  {

    $searchq=$_POST['search'];

    $searchq=preg_replace("#[^0-9a-z]#i","",$searchq);

    $query=mysql_query("SELECT * FROM engadget WHERE roll_no LIKE '%$searchq%' ") or die("could not find query!");

    $count= mysql_num_rows($query);
    
    if($count==0)
    {
      $output='there was no result!';

    } else 
     { 
      while($row=mysql_fetch_array($query))
      {   $sn=$row['roll_no'];
           $sn1=$row['student_name'];
           $sn2=$row['fathers_name'];
           $sn3=$row['English'];
           $sn4=$row['math'];
           $sn5=$row['physics'];
           $sn6=$row['chemistry'];
           $sn7=$row['computer_science'];
           $sn8=$row['total'];
           $sn9=$row['percentage'];
           $output .='<div >Roll no:'.$sn.'<br /> Student name :'.$sn1.'<br />Fathers name: '.$sn2.'<br/> English:'.$sn3.' <br/>Math:'.$sn4.'<br/>Physics: '.$sn5.'<br/>Chemistry: '.$sn6.'<br/>Computer science:  '.$sn7.'<br/>Total marks: '.$sn8.'<br/>Percentage: '.$sn9.'%</div>';
    
      }

     }
   }
}
?>


 
<html>
<head>
<title> i dont know </title>
<link rel="stylesheet" type="text/css" href="main.css">
<link href="https://fonts.googleapis.com/css?family=Poiret+One|Lobster|Josefin+Slab|Open+Sans+Condensed:300" rel="stylesheet">




</head>
<body >
 

  
<div class="container">
   
    
    <div class="topright">
 
  
</div>
</div>


   <h4 align="center">Secondary School Examination (Class 12) Results 2017</h4>
    <p>
   <div class='At'> 
 

<form action ="index.php" method="POST">
  <fieldset>
    
     Name of student<br>
    <input type="text" name="firstname" placeholder="Enter student name" size="40">
    <br>
    Roll no<br>
    <input type="number" name="search"  placeholder="Enter roll no here" >
    <br><br>
    <input type="submit" name="submit" value="Search">
    <form action="index.php"  method="post">
    <input type="reset" name="reset">
    </form>
  </fieldset>
</form>


 <div style="background-color:lavender; align:center; border:4px solid #C0C0C0; padding:5px">
<?php
  print("$output");
 ?>
 </div>

 <a href="http://localhost/projiii/login.html">for edits .. LOGIN(admin)</a>


 
 

 


 


</p>
</div>
</body>
</html>
