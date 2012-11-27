/**Task 1 - 1
*	Assumption: 
*	function accepts a positive integer range and, for each increment in the range, prints:
*   - "Fizz" if a multiple of 3
*   - "Buzz" if a multiple of 5
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
            $result .= $list[$i] . " "; 
    }
	return $result;
}

$a =  range(3, 18);
echo f($a);
?>