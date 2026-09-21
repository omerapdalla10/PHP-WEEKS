PHP Basics Practice
===================

Learn PHP output and if statements with three short scripts. Each script comes from your screenshots. Run them, change the values, and watch the results change.


What you get
------------

This project holds three examples:

- Grade checker: reads a student mark and prints a grade.
- Index.php: prints text from PHP inside an HTML page.
- Age checker: prints a message based on age.


What you need
-------------

- XAMPP with Apache installed
- A code editor such as VS Code
- A browser

Save every PHP file in a project folder inside C:\xampp\htdocs. Apache only runs files from this location.


How to run
----------

1. Open the XAMPP Control Panel.
2. Click Start next to Apache.
3. Save your file with the .php extension in your project folder inside htdocs.
4. Open your browser and go to http://localhost/ followed by your project folder and file name.
5. Refresh the page after each edit.

Do not double click the file. Your browser will show raw code instead of the result.


Example 1: Grade checker
------------------------

Goal: check a student mark and print the matching grade.

The script stores a mark in a variable named marks. It tests the conditions in order from the top. The first true condition runs. PHP skips the rest.

The rules:

- Above 100 prints: invalid marks
- 90 to 100 prints: Grade: A
- 80 to 89 prints: Grade: B
- 70 to 79 prints: Grade: C
- 60 to 69 prints: Grade: D
- Below 60 prints: Grade: F

Try it. The screenshot sets marks to 101, so the page shows invalid marks. Change marks to 85 and the page shows Grade: B.

Order matters. The invalid check comes first. Without it, a mark of 101 would earn an A.

Improve it:

- The script accepts negative marks. A mark of -5 prints Grade: F. Add a check for values below 0.
- The script mixes else if, elseif, and else IF. PHP accepts all three. Pick elseif and use it everywhere.


Example 2: Index.php
--------------------

Goal: print text from PHP inside an HTML page.

The file starts as a normal HTML page with a head, a meta charset tag, and a title. The PHP block opens inside the body and runs three output lines:

- echo prints Hello, World!
- print prints Welcome to PHP
- echo prints an h1 heading with the text Hello, World HTML tag version

What you see in your browser: the first two messages sit side by side on one line, then the heading appears in large text below them.

Improve it:

- Add a br tag after the first two messages so each one gets its own line.
- Change the title from Document to a name for your page.


Example 3: Age checker
----------------------

Goal: print a message based on age.

The rules:

- Above 40 prints: You're ADULTY.
- Above 20 and up to 40 prints: You're a young adult.
- 20 or below prints: You're a young.

Each message ends with a br tag, so every message appears on its own line.

Set up your variable first. The screenshot never gives age a value. Add a line above the if block to set age to 25. Then the page shows: You're a young adult. Without this line, PHP shows an undefined variable warning.

Improve it:

- Change You're ADULTY to You're an adult.
- Change You're a young to You're young.
- Test the edges. An age of 40 prints young adult. An age of 20 prints young.


Common mistakes
---------------

- A missing semicolon at the end of a line causes a parse error.
- A stopped Apache server makes the page fail to load.
- A file saved outside htdocs never appears on localhost.
- A file saved as .html or .txt never runs PHP code.


Next step
---------

Start Apache and open each example on localhost. Test marks of 95, 72, and 30. Test ages of 15, 30, and 50. Once all paths print the right message, add your own rule to each script.
