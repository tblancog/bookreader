# Book Reader Challenge
Read a pdf, count its words and tell if is prime number or not the times they repeat.

## Summary
First I had to design some tests, first I had in mind to make browser tests, for example: test it navigates to index, test it submits a pdf file, test it redirects with error validation, etc. But I just realized that Laravel started working with _"Dusk"_ for this kind of tests from PHP 5.4, but I didn't really had the time to read and find out how it works, also it required some setup. That was my very first challenge.

## Testing
Since I couldn't make browser testing I started making feature testing:
1. Tested that a a pdf file can exist in storage.
2. A pdf file can be read by a 3rd party plugin and it outputs plain text.
3. Count different words in plain file and then output them to an array.

## How I started working
1. Made a simple form, a jumbotron layout from bootstrap, just one file field besides csrf input and submit button.
2. Created two routes, index "/" and "/upload"
3. Created a controller PdfController with upload method
4. Validated that pdf files with pdf extension, pdf mime type, and no more than 1 mb could be submitted.
5. Created a Pdf Repository to put some business logic there to handle storage, plain text extraction and word counting.
6. Output results to a view, therefore I had to create that view.
7. Showed results using a table.
8. Made another repo to check number operations, I needed a function to check if a number is prime.
9. In results view everytime I loop, I check if the number of occurrences is a prime number.
10. And then I started bugfixing

## What could be improved?
I had another solution in mind for counting words, but i ran out of time for this. For browser testing It would be nice to read and use browser testing with Dusk.

## Other challenges faced
I when i created this fresh Laravel installation phpunit I couldn't execute it, so instead trying to find out the error I downloaded a phpunit .phar to quickly execute tests, it worked.

## Download
Just clone this repository

## Execute tests
```bash
php phpunit.phar tests/ --testdox
```
