<?php
  $Max = $_POST['max'];
  $Min = $_POST['min'];
  $Result = "";
  $Valid = true;
if ($Min&&$Max){
    //Checking if min is less than max
    if ($Min<$Max){
    $currentNumber = $Min-1;
      //looping through each number, and adding it to the result
      while ($currentNumber<$Max){
        $currentNumber +=1;
        $Result .= $currentNumber . " ";
      }
    } else{
      //warn user if min is greater than max
        $Result = false;    
    }
  } else{
    //warn user if they didnt enter 2 valid numbers
    $Result = false;
  }
?>
<?php
  if ($Valid == true){
    //Display result
   echo "Result: ".$Result;
  } else{
    //Display error
   echo "Please enter 2 valid numbers, and make sure that you have entered a min number that is less than your max number";
  }
?>