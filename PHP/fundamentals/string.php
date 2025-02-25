<?php 
/* 
    A string literal can be specified in four different ways:

    * single quoted
    * double quoted
    * heredoc syntax
    * nowdoc syntax
*/

// single quoted

echo 'This is simple string.';

echo 'you can also embedded newlines in
strings this way it is
okay to do.';

echo 'Arnold once said: "I\'ll be back"'; // outputs: Arnold once said: "I'll be back"

echo 'You deleted C:\\*.*?'; // outputs: You deleted C:\*.*?
echo 'You deleted C:\*.*?'; // outputs: You deleted C:\*.*?

echo 'This will not expand: \n a newline'; // outputs: This will not expand: \n a newline
echo 'Variables do not $expand $either'; // outputs: Variables do not $expand $either


// Double quoted

// \n means newline
echo "You can also embedded newlines in \n strings this way it is \n okay to do.";
// \t means horizontal tab
echo "Hello how \tare you?";
// \v means vertical tab
echo "Hello how \vare you?";
// \\ means backslash
echo "This is backslash \\";
// \$ means dollar sign
echo "Price \$300";
// \" means double quoted
echo "This is \"beautiful\"";
$age = 21;
echo "My age is $age. \n";

// Heredoc
// no indentation
echo <<<END
        A
         B
          C
\n
END;

// 4 spaces of indentation
echo <<<END
        a
       b
      c
    END;


    // Nowdoc 

    // Nowdocs are to single-quoted strings what heredocs are to double-quoted strings. A nowdoc is specified similarly to a heredoc, but no String interpolation is done inside a nowdoc


$str = "String";
$first = $str[0];
echo $first; // outputs: S
$third = $str[2];
echo $third; // outputs: r

$string = "String";
$string[-3] = "o";
echo "Changing the character at index -3 to o gives {$string}."; // Outputs: Changing the character at index -3 to o gives Strong.

echo 5 + "5 cats";