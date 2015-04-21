# ProjectTakda [![Build Status](https://magnum.travis-ci.com/jkcdarunday/ProjectTakda.svg?token=hgQhLPiqw3aLTCCAKbdz)](https://magnum.travis-ci.com/jkcdarunday/ProjectTakda)
A Course Offering Management System

Coding Conventions
==================

PHP Code
--------
The following rules are to be followed when it comes to PHP code:
  * Tabs are to be used for indentation
  * Lines should not exceed 80 characters.
  * Opening braces for class and procedure declarations shall always be in a line of its own following the declaration statement.
  * Opening braces for conditional statements shall always be on the same line as the conditional statement.
  * Closing braces for all kind of statements except for “else” and “else if” statements shall always be on a line of its own with the same indentation as the matching opening statement.
  * “Else if” and “else” statements shall have the closing bracket of their parent statement on the same line.
  * The names of classes and data structures shall begin with a capital letter with the succeeding words also beginning with capital letters.
  * The names of variables and procedures shall begin with a lowercase letter while the succeeding words begin with capital letters.
  * The names of procedures, classes, data structures, and variables shall be words that describe the function or variable with the leftmost being the most general word and the rightmost being the most specific word.
  * An “else” or “if else” conditional statement cannot use a curly bracket if the matching “if” statement.


HTML Code
---------
  * Tabs are to be used for indentation
  * Every opening tag will cause the next line to be indented unless closed in the same line
  * Closing tags shall be in a line of their own if the contents of the two matching tags are multiline
  * Closing tags shall be in the same line as the opening tag if the content is a single line
  * Closing tags on their own line will cause unindentation

CSS Code
--------
  * Tabs are to be used for indentation
  * Every opening bracket will cause the next line to be indented unless closed in the same line
  * Every closing bracket unindents

Javascript Code
---------------

Models, Views, and Controllers
------------------------------

### Models
  * These shall be named after the table that they are accessing
  * Only one model should signify one table
  * Filenames should be the same as the classname of the model object
  * Class names shall be the class name of the corresponding controller with "_model" appended
  * Filenames shall have the same capitalization as classnames
  * Example of class name: Test_model
  * Example of file name: Test_model.php

### Views
  * Filenames shall have no capitalization nor underscores
  * Example of file name test.php

### Controllers
  * These shall have the same class name as the model that they use without the appended "Model"
  * Multiple controllers may use the same model or view
  * Filenames should be the same as the classname of the controller object
  * Filenames shall have the same capitalization as classnames
  * Example of class name: Test
  * Example of file name: Test.php
