Solve a function problem

Function inputs : 
-yearIncome
-credit (credit that user wants to claim)
- children (optional)
- business (optional)

<------------------------------------------------------>

GENERAL GUIDE : 

IF :

yearIncome < 20000  => CREDITMAX = 5000
yearIncome > 30000 && $yearIncome < 50000 => CREDITMAX = 10000
yearIncome > 50000 && $yearIncome < 70000 => CREDITMAX = 15000
yearIncome > 70000 && $yearIncome < 100000 => CREDITMAX = 30000
yearIncome > 100000  => CREDITMAX = 50000

<------------------------------------------------------>

ANALYZING INPUTS PASSED TO A FUNCTION AND VARIABLES INSIDE OF IT 
CREDITMAX && CREDIT VALUES 

-PARAMETERS
Credit - input that is passed to the function via parameter 
yearIncome - input that is indicating year income of costumer

-FUNCTION VARIABLES
$$$value - the bank standard and state's standard for a credit 
creditMax - variable declared inside if statement

if yearIncome < $$$value
    creditMax = num
    if credit > creditMax
        // suggest creditMax value to a costumer
        return creditMax
        else (credit < creditMax)
        // example credit = 5000 & yearIncome = 50000 - creditMax would be 15000 in this case but user wants 5000 packet so let him take it
            return credit

<------------------------------------------------------>

IF STATEMENTS AND SWITCHES
Analyzing the structure of if statements inside function
IF statement is a core concept in this case
--------------------------------------------------------------------------------------
Structure : IF yearIncome < upperBorder && yearIncome > bottomBorder -> creditMax = $$$
--------------------------------------------------------------------------------------
MORE CLOSER GUIDE :
It is functioning kinda like tier list
The idea of function is just to sort costumer's tier by its yearIncome 
By following concept's of a @GENERAL GUIDE that is included in header of a script 
The function is just checking all cases of yearIncome that could happen in the Program
Starting from most lower case to a most higher case in the program 

Example :
if yearIncome < 50000 && yearIncome > 30000 -> creditMax = 10000

First IF statement in a function:
 if $yearIncome < 20000 && $yearIncome > 10000 { 
    $creditMax = 5000;
    if ($credit > $creditMax) { 
        // suggest creditMax value to a costumer
        return $creditMax as "credit" and $responseTxt as JSON file
        }
        else (credit < creditMax) { 
            return $credit as JSON file
        }
 }
