<?php
// Lesson 5, Section 5.2: Include a reusable header file.
include 'header.php';

// Lesson 5, Sections 5.4-5.6: Define a function with parameters.
// This function displays one bakery item and its price.
function show_item($name, $price) {
    echo '<div class="item">';
    echo '<h3>' . htmlspecialchars($name) . '</h3>';
    echo '<p>$' . number_format($price, 2) . '</p>';
    echo '</div>';
}
?>

<main>
    <section class="welcome">
        <h2>Welcome to Sweet Crumbs Bakery!</h2>
        <p>We love making fresh treats for our customers. Stop by for cookies, cupcakes, and bread baked with care.</p>
    </section>

    <section id="menu">
        <h2>Our Bakery Menu</h2>
        <p>Here are a few of our favorites:</p>
        <div class="menu-grid">
            <?php
            // Reuse the same function for each menu item.
            show_item('Chocolate Chip Cookies', 2.50);
            show_item('Vanilla Cupcake', 3.00);
            show_item('Banana Bread', 4.50);
            show_item('Cinnamon Roll', 3.75);
            ?>
        </div>
    </section>

    <section id="about">
        <h2>About Our Bakery</h2>
        <p>Sweet Crumbs Bakery is a small bakery that enjoys bringing people together through delicious baked goods. Our goal is to make every customer feel welcome.</p>
    </section>
</main>

<?php
// Lesson 5, Section 5.2: Include a reusable footer file.
include 'footer.php';
?>
