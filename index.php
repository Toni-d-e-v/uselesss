<h1>Ussles webiste:</h1>

<?php
if( isset($_GET['submit']) )
{
    //be sure to validate and clean your variables
    $val1 = htmlentities($_GET['val1']);
   
    

    //then you can use them in a PHP function. 
    echo ("Letters:");
    
    if (strlen($val1) == 1){
      echo ("First type something gosh.");
      echo strlen($val1);
    } else {
      echo strlen($val1);
      echo ("Words:");
      echo str_word_count($val1);
    } 

    
}

?>
<?php



?>


<form action="" method="get">
    Input: 
    <input type="text" name="val1" id="val1"></input>

    <?php echo "I will tell you how meny letters are."; ?>

    <br></br>



    <p></p>
    <input type="submit" name="submit" value="send"></input>
</form>
Make slider go brrr!
<form action="" method="POST">
    <input type="range" min="1" max="12" step="1" value="1" id="foo" name="passengers" onchange='document.getElementById("bar").value = "Slider Value = " + document.getElementById("foo").value;'/>

<br />
<input type=submit value=Submit />
</form>

<?php
$slider = $_POST["passengers"];
if(isset($_POST["passengers"])){
    echo "Slider goes brrrr:".$_POST["passengers"];
    // Your Slider value is here, do what you want with it. Mail/Print anything..
} else{
Echo "Make slider go brrrrrrr!";
} 
if ($slider == 12){
    echo ("Brrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr!");

}
if ($slider == 1){
  echo ("Slider no brr :((");

}
?>
<p>WIll btc pump</p>
<button onclick="window.location.href='https://www.youtube.com/watch?v=_PXU0thDHCU&t=9s';">
yes
<button onclick="window.location.href='https://www.youtube.com/watch?v=_PXU0thDHCU&t=9s';">
no
<button onclick="window.location.href='https://www.youtube.com/watch?v=_PXU0thDHCU&t=9s';">
idk
</body>
</html>
