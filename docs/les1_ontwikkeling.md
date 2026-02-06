How to use .md files: https://www.markdownguide.org/basic-syntax/

Goal: Stop guessing and start reasoning.

Task 1: MVC autopsy 
Identify: (edit-books)

what is the controller
V It is BooksController.

what is the model
X index.php communicates with the controller. 
> BooksDAO

what is the view
V books/edit.php is what actually gets shown when loading the page.

Trace one request:

X URL → controller → model → view → response
V URL → controller → model → controller → view → klaar

Whether the URL is changed or not, it has info which gets used to select the right controller. 
The controller communicates with the model to get data which is returned to the controller. The controller then gets the view.
--------------------------------------------------------------------------------------------------------------------------------------------------------------

# Task 2: One feature, at a time

You will implement small, complete features, one by one. For example:
- “Add a product”
- “Register a user”

You always enforce this workflow:

## What is the user action?
    [x] The user presses a button at the end of the page named "add" or "add book" which shows the form
    [] a form opens where the user can fill in the details of the book to then add it to the page

##  What controller and what method handles it?
    A new controller method(/function in controller class) called add.

## What data is needed?
    [] title
    [] author
    [] pub. year
    [] status
    [] bookcover

## Which model method does that?
    A new model method called addBook()

## Are there similar controller/model methods? Can they be converted?
    Yes. EditBookById can probably be converted to make it add books instead of edit them.

## Which view will be used and what does the view display?
    [] books/add.php. 
    [] The view will display lines where it asks for the specific data. eg. Title: ...... 
    [] At the end a button with "add book".


You answer the questions first, then you code.