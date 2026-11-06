# Sweet Crumbs Bakery — PHP Lesson 5 Project

## About the project
I created a simple bakery website to practice reusing code in PHP. The website has a shared header, a main page with bakery items, and a shared footer.

## Files
- `header.php` — website title, navigation, and opening HTML tags
- `index.php` — main content and a small PHP function for bakery items
- `footer.php` — contact information, copyright, and closing HTML tags
- `style.css` — colors, spacing, and layout

## How this relates to uCertify Lesson 5
- **5.2 Using require() and include():** `index.php` uses `include 'header.php';` and `include 'footer.php';`.
- **5.2.2 Website Templates:** The header and footer can be reused on other pages.
- **5.4 and 5.5 Defining Functions:** I wrote a `show_item()` function to display a menu item.
- **5.6 Using Parameters:** The function receives the item's name and price as parameters.

## How to run the website
1. Put all four website files in the same folder.
2. If you use XAMPP, copy the folder into `htdocs` and start Apache.
3. Open `http://localhost/Sweet_Crumbs_Bakery_Chapter5/index.php` in your browser.
4. You can also use PHP's built-in server: open a terminal in the project folder, run `php -S localhost:8000`, and visit `http://localhost:8000`.

## What I learned
This assignment helped me understand how `include()` lets me reuse the same header and footer instead of writing them again. I also practiced creating a PHP function with parameters and calling it more than once to show different bakery items. I used basic HTML and CSS to make the website easy to read.

## GitHub submission
Create a new repository, upload `header.php`, `index.php`, `footer.php`, `style.css`, and `README.md`, then submit the repository link to your professor.
