<?php
$hs="localhost";
$us="root";
$ps="root";
$conn = mysqli_connect("$hs","$us","$ps");
mysqli_select_db($conn,"storyera");
$result= mysqli_query($conn,"SELECT * FROM stories;");

?>
<style>
    
    </style>
    <div >


    
    <?php
    
    while($row = mysqli_fetch_assoc($result)){
    //echo $row['subjectname'].'<br>';
    
    $title=$row['title'];
    $name=$row['name'];
    $description=$row['description'];
    $img=$row['img'];
    $location=$row['location'];
    $category=$row['category'];
    
    echo'
    


<div style = " margin-left: 10px;">
    <span class="card">
    <h1 style = "font-size : 10px" class="price">title : '.$title.'</h1>
  <img src = "'.$img.'" style = "width : 80px ;height : 100px">
  <h1  style = "height:40px; font-size : 13px;color : white;padding: 0px 10px;">Author : '.$name.'</h1>
  <p style = "font-size :12px ; color : ;" class="price">'.$description.'</p>
  <h2 style = "font-size : 10px" class="price">location : '.$location.'</h2>
  <h2 style = "font-size : 10px" class="price">category : '.$category.'</h2>
  
</span>
</div>




   
                   
              

';
}
?>

</div>