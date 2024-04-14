<?php
    session_start();
    $_SESSION['previous_page'] = $_SERVER['REQUEST_URI'];

    $title = "CAT Command";
    $path = "../";
    include($path."inc/header.php");
    include($path."inc/nav.php");
?>
        
<main class="sideNav">
    <section>
        <?php include($path."inc/side_nav.php") ?>
    </section>
    <section>
        <h2>Common Commands & Syntax:</h2>
        <p>
            Note: Commands are case sensitive
            <br>
            cat - Displays the text/contents of a file.  Syntax is cat &lt;filename&gt;                    
        </p>
        <h2>COMMAND</h2>
        <figure class="centeredIMG">
            <img class="maxWidth500" src="<?php echo $path; ?>inc/images/cat_command.png" alt="image of entering 'cat' command in terminal">
        </figure>
        <p>
            In this example, the script "ping_test.py" is output to the terminal.
        </p>
        <p>
            <a href="<?php echo $path; ?>commands/chmod.php">Previous Page</a>
        </p>
    </section>
</main>

<?php
    include($path."inc/footer.php");
?>