<?php
    session_start();
    $_SESSION['previous_page'] = $_SERVER['REQUEST_URI'];

    $title = "MV Command";
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
            mv - This command, although named move, should only be used to rename files.  It's syntax is mv &lt;file name&gt; &lt;new file name&gt;
        </p>
        <h2>COMMAND</h2>
        <figure class="centeredIMG">
            <img class="maxWidth500" src="<?php echo $path; ?>inc/images/mv_command.png" alt="image of entering 'mv' command in terminal">
        </figure>
        <figure class="centeredIMG">
            <img class="maxWidth500" src="<?php echo $path; ?>inc/images/mv_output.png" alt="image of output of 'mv' command in terminal">
        </figure>
        <p>
            In this example, the MLB_File was renamed to MLB_File_spare.  Remember, after entering a command, if nothing is displayed afterward, the command was successful.
        </p>
        <p>
            <a href="<?php echo $path; ?>commands/cp.php">Previous Page</a>
            <a href="./mkdir.php">Next Page</a>
        </p>
    </section>
</main>

<?php
    include($path."inc/footer.php");
?>