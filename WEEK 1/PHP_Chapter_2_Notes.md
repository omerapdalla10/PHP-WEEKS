PHP Fundamentals and Control Structures
=======================================

Learn the core of PHP in one read. This guide takes you from your first echo to nested loops. It follows the Chapter 2 slides by Lecturer Yahye Ali Isse, MSc in Data Science.


What you will learn
-------------------

- How PHP files work and how to run them
- Output with echo and print
- Quotes, comments, and coding style
- Variables, naming rules, and data types
- Constants and operators
- Conditional statements: if, if else, elseif, switch, and the ternary operator
- Loops: while, do while, for, and foreach
- break, continue, and nested loops


1. How PHP files work
---------------------

PHP borrows part of its syntax from C and Java. It mixes the best features of other languages into an easy scripting language.

Key facts:

- PHP files end with the .php extension.
- A web server passes every .php file to the PHP processor.
- A PHP file mixes three things: plain text, HTML code, and PHP script.
- Place your files in the root folder of your web server. In XAMPP this is C:/xampp/htdocs. In WAMP this is C:\wamp\www.

Run your first page:

1. Write the page in your editor and save it as Index.php. If you use Notepad, set Save as type to All Files.
2. Start the web server.
3. Open http://localhost/Index.php in your browser.

The sample page holds a normal HTML skeleton. Inside the body it prints a line of text, adds a br tag, then uses PHP to print HELLO WORLD PHP!!!

Rules for the PHP part:

- The PHP part starts with <?php and ends with ?>.
- All PHP code sits between these two tags.
- Every PHP statement ends with a semicolon.
- Use HTML tags and attributes as usual in the HTML part.
- Embed HTML tags in an echo or print statement too. Use single quotes around the attribute values.


2. Output with echo and print
-----------------------------

Both echo and print send text from the server to your browser. Both are constructs, so parentheses are optional. A construct is a built-in language feature, not a normal function.

How they differ:

- print returns a value. echo does not.
- echo is faster.
- echo accepts several parameters separated by commas. print accepts only one.
- print works inside a larger expression such as a ternary. echo does not.

Examples:

- echo with two parameters, such as "Using echo with " and "two parameters", works.
- print with two parameters gives an error.
- A ternary with print in both branches works. The same ternary with echo gives an error.

A ternary operator is a short form of an if else statement. Its pattern is condition, then a question mark, then the value for true, then a colon, then the value for false.


3. Quotation marks
------------------

HTML holds many quote marks, so PHP gives you two kinds.

- Single quotes: PHP prints the text exactly as written. With a set to 10, echo 'Hello $a' prints Hello $a.
- Double quotes: PHP reads the text for special characters such as variables. With a set to 10, echo "Hello $a" prints Hello 10.

Use double quotes when you want a variable value inside your text.


4. Comments
-----------

Comments explain your code. PHP ignores them. You have three ways to write one:

- Multi-line comment: start with a forward slash and a star. End with a star and a forward slash.
- Single line comment: start with a double forward slash. Place it on its own line or after code, for example after a line to add 10 to x.
- Single line comment with the pound sign at the start.


5. Variables
------------

A variable is a location in computer memory. It holds a value for your program at run time.

- You do not declare a variable before you use it.
- You do not declare its type.
- A variable changes its type as often as you want.
- Every variable starts with a dollar sign.

Naming rules:

- After the dollar sign, the name starts with a letter or an underscore.
- The name holds only letters, digits, and underscores.
- The name has no spaces.
- Names are case-sensitive. $name and $Name are two different variables.
- Keywords work as names, but this is bad practice.
- Keywords such as if, else, while, and echo are not case-sensitive. Class names and function names are not case-sensitive either.

Naming styles for names with several words:

- Snake case: $user_name
- Camel case: $userName
- Pascal case: $UserName
- Kebab case: $user-name is not allowed in PHP.


6. Data types
-------------

A variable behaves by the type of value it holds. The four basic types are:

- Integers
- Floating-point numbers (real numbers)
- Strings
- Booleans

A string is a sequence of letters, numbers, special characters, and arithmetic values. Create one with single or double quotes.

Two string functions:

- strlen counts characters. For 'Welcome to PHP Republic' it returns 23.
- str_word_count counts words. For the same text it returns 4.


7. Constants
------------

A constant works like a variable, but you never change its value.

- Follow the variable naming rules, but leave off the dollar sign.
- Create a constant only with the define function.
- The pattern is define with a name in quotes and a value.
- The value is any valid PHP expression, except arrays and objects.
- Write constant names in uppercase. This is good practice.

Example: define PI as 3.14. Then echo the text "Value of PI is: " and PI as two parameters. The page shows Value of PI is: 3.14.


8. Operators
------------

Operators handle math, comparison, and logic.

- Assignment: =
- Arithmetic: addition, subtraction, multiplication, division, and modulus (%)
- Arithmetic assignment: +=, -=, /=, %=, and the multiplication version
- Comparison: <, <=, >, >=, ==, !=
- Logical: &&, ||, !
- Concatenation: the dot (.)
- Increment and decrement: ++ and --
- Ternary: the question mark and colon pair, the only ternary operator in PHP

Operand counts:

- Unary operators take one operand. Examples are $a++ and !$a.
- Binary operators take two operands. Most operators fall here.
- The ternary operator takes three operands. It returns the first value if the expression is TRUE and the second if it is FALSE.

Operator precedence, from high to low:

1. Parentheses
2. Increment and decrement
3. Logical not (!)
4. Multiplication, division, modulus
5. Addition, subtraction, concatenation
6. Comparison for inequality (<, <=, >, >=)
7. Comparison for equality (==, !=)
8. Logical and (&&)
9. Logical or (||)
10. Assignment operators (=, +=, -=, /=, .=, %=, and the others)
11. and
12. or

When you doubt the order, add parentheses.


9. Three control structures
---------------------------

- Sequential: statements run in the order you write them. This is the default.
- Conditional: the program runs or skips code based on criteria.
- Loop: the program repeats code based on criteria.


10. Conditional statements
--------------------------

Conditionals send your program down different paths at run time. PHP supports if, switch, and the ternary operator.

The if statement

- Set month to "March". If month equals "March", the page prints It's springtime.
- Set a to 2 and b to 3. Four checks run in turn. The page prints 2 is less than 3 and 2 is less than or equal to 3.

The if else statement

Add an else branch to run code when the if expression is false.

- Set marks to 48. The test is marks at or above 50. The result is false, so the page prints Not pass.

The elseif statement

Chain several tests with elseif. Many PHP developers write else if instead. Both work.

- Set marks to 87. The tests run in this order: 90 or more, 80 or more, 50 or more, then else.
- The second test is true, so the page prints the second message. Only one branch runs.

The switch statement

switch compares one value against a list of cases.

- The sample switch checks a page variable against Home, About, News, Login, and Links.
- Each case prints You selected followed by its name.
- Each case ends with break. Without break, PHP keeps running the next cases.
- default runs when no case matches. Place it last or leave it out. The sample default prints Unrecognized selection.

A second example sets answer to 'N'. The first case tests for y or Y. The second tests for n or N. The default prints an error message. Here the second case is true, so the page prints The answer was no.

The ternary operator

The ternary operator replaces a short if else block.

- Example: echo fuel at or below 1 as Fill tank now, otherwise There's enough fuel.


11. Loops
---------

Loops repeat tasks. A common use is to go through the rows of a database query result.

Every loop needs four things:

- The name of the loop variable (the loop counter)
- The starting value of the loop variable
- The condition to continue the loop
- The step to change the loop variable on each pass

Four loop types:

- while: repeats a block as long as the condition is true.
- do while: runs the block once, then repeats as long as the condition is true.
- for: repeats a block a set number of times.
- foreach: repeats a block for each element in an array.

Practice task: compare the four loops. Pick your favorite and write down why.

The while loop

- Set i to 1. While i is 15 or less, print i and add 1. The page prints the numbers 1 to 15.
- Set count to 1. While count is 12 or less, print count times 12 and add 1. The page prints the 12 times table with a br tag after each line.

The do while loop

The do while loop checks its condition at the end of each pass. The loop always runs at least once, even if the condition is false.

- Factorial of 5: set result to 1 and n to 5. Multiply result by n, then lower n by 1. Repeat while n is above 0.
- The math is 5 times 4 times 3 times 2 times 1. The page prints 120.

The for loop

A for loop keeps the start, the condition, and the step in one line.

- Count from 1 to 12 and print each line of the 12 times table.
- Count from 1 to 15 and print each number with a br tag.
- Count from 1 to 10 and print The square of each number. The dot joins text and values together.


12. break and continue
----------------------

- break ends a loop in the middle of a pass.
- continue skips the rest of one pass and starts the next one.

break example: set i to 1. Print i and add 1 on each pass. Stop when i reaches 10. The page prints 1 to 9.

continue example: set i to 0. Add 1 on each pass. If i is even, skip it. Otherwise print it. The page prints the odd numbers from 1 to 15.


13. Nested loops
----------------

Place one loop inside another. The next example builds a multiplication table with two loops.

- The outer loop counts rows from 1 to 12.
- The inner loop counts columns from 1 to 12.
- The inner body prints row times column.

Format the output in an HTML table to see a neat grid.


Common mistakes
---------------

- A missing semicolon at the end of a statement causes a parse error.
- print with two parameters gives an error. Use echo for several values.
- A dollar sign in front of a constant name breaks the code.
- A variable name with the wrong letter case points to a different variable.
- A switch case without break runs the next case too.
- A do while loop always runs once, so check your starting values.


Next step
---------

Open Index.php and type in one example from each section. Change the values and watch the output change. Start with the grade checker from your earlier work, then build the 12 by 12 multiplication table.
