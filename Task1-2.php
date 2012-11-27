/**Assumption: 
*	function accepts a positive integer range and, for each increment in the range, prints:
*   - "Fizz" if a multiple of 3
*   - "Buzz" if a multiple of 5
*   - "Bazz" instead of an integer after consecutive Fizzes/Buzzes but not after FizzBuzz
*   - The integer itself otherwise.
*/
<?php
function f($list){
    $result = '';
	for ($i = 0; $i < count($list); $i++)
    {
        if ($list[$i]%15 == 0)
            $result .= "FizzBuzz ";
        elseif ($list[$i]%5 == 0)
            $result .= " Buzz ";
        elseif ($list[$i]%3 ==0)
            $result .= "Fizz ";
        else
            if ($i > 2 and ($list[$i-1] % 3 == 0 or $list[$i-1] % 5 == 0) and ($list[$i-2] % 3 == 0 or $list[$i-2] % 5 == 0))
                $result .= "Bazz ";
            else
                $result .= $list[$i] . " ";
	}
    return $result;
}
  
$a =  range(3, 31);
echo f($a);
?>