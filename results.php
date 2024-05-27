<?php
  $Max = $_POST['max'];
  $Min = $_POST['min'];
  $Result = "";
  $Valid = true;
if (min&&max){
    //Checking if min is less than max
    if (Number($Min)<Number($Max)){
    $currentNumber = Number($Min)-1;
      //looping through each number, and adding it to the result
      while ($currentNumber<Number($Max)){
        $currentNumber +=1
        $Result = $Result.. $currentNumber + " ";
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
   echo "Result: "..$Result;
  } else{
    //Display error
   echo "Please enter 2 valid numbers, and make sure that you have entered a min number that is less than your max number";
  }
?>