<?php
    session_start();
    $_SESSION['previous_page'] = $_SERVER['REQUEST_URI'];

    $title = "CP Command";
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
            cp - The cp command is used to copy files or directories.  It’s syntax is cp &lt;item to copy&gt; &lt;destination&gt;
        </p>
        <h2>COMMAND</h2>
        <figure class="centeredIMG">
            <img class="maxWidth500" src="<?php echo $path; ?>inc/images/cp_command.png" alt="image of entering 'cp' command in terminal">
        </figure>
        <h2>OUTPUT</h2>
        <figure class="centeredIMG">
            <img class="maxWidth500" src="<?php echo $path; ?>inc/images/cp_output.png" alt="image of output of 'cp' command in terminal">
        </figure>
        <p>
            In this example, the MLB_File was copied into the MLB directory.  You will notice that there was no obvious output.
            This is by design - you will not receive confirmation of successful commands, only when an error occurs.
        </p>
        <p>
            <a href="<?php echo $path; ?>commands/cd.php">Previous Page</a>
            <a href="./mv.php">Next Page</a>
        </p>
    </section>
</main>

<?php
    include($path."inc/footer.php");
?>