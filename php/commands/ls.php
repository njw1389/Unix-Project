<?php
    session_start();
    $_SESSION['previous_page'] = $_SERVER['REQUEST_URI'];

    $title = "LS Command";
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
            ls - Another commonly used command is ls.  Short for listing directory contents, ls will display what files and/or directories are in a given location.
        </p>
        <h2>COMMAND</h2>
        <figure class="centeredIMG">
            <img class="maxWidth500" src="<?php echo $path; ?>inc/images/ls_command.png" alt="image of entering 'ls' command in terminal">
        </figure>
        <h2>OUTPUT</h2>
        <figure class="centeredIMG">
            <img class="maxWidth500" src="<?php echo $path; ?>inc/images/ls_output.png" alt="image of output of 'ls' command in terminal">
        </figure>
        <p>
            In this example, the colors distinguish between different contents (i.e. directories, executable files, zipped files).
            A common argument appended to the ls command is -l which outputs a listing of the directory contents in a long format.
            The long format provides more detail, as well.
        </p>
        <h2>COMMAND</h2>
        <figure class="centeredIMG">
            <img class="maxWidth500" src="<?php echo $path; ?>inc/images/lsl_command.png" alt="image of entering 'ls -l' command in terminal">
        </figure>
        <h2>OUTPUT</h2>
        <figure class="centeredIMG">
            <img class="maxWidth500" src="<?php echo $path; ?>inc/images/lsl_output.png" alt="image of output of 'ls -l' command in terminal">
        </figure>
        <p>
            <a href="<?php echo $path; ?>content/commands.php">Previous Page</a>
            <a href="./pwd.php">Next Page</a>
        </p>
    </section>
</main>

<?php
    include($path."inc/footer.php");
?>