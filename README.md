# PHP Recursive Function Bug
This repository demonstrates a potential bug in a PHP recursive function and its solution.
The `processData` function recursively processes an array.  However, the recursive calls may overflow the stack if not handled correctly. The bug highlights the importance of careful base-case considerations when employing recursion in PHP to avoid stack overflow errors.
The solution includes improved error handling and demonstrates best practices for using recursion.