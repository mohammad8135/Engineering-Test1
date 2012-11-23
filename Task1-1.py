#Task 1 - 1
#Assumption: 
#	function accepts a positive integer range and, for each increment in the range, prints:
#   - "Fizz" if a multiple of 3
#   - "Buzz" if a multiple of 5
#   - The integer itself otherwise.
# 	- It is possible to test the application in www.codeskulptor.org which is especial web based python programming

def f(list):
    result = ""
    for i in range(len(list)):
        if list[i]%15 == 0:
            result += "FizzBuzz "
        elif list[i]%5 == 0:
            result += " Buzz "
        elif list[i]%3 ==0:
            result += "Fizz "
        else:
            result += str(list[i]) + " " 
    return result
    

print f(range(12,21))