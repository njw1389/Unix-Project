<?php
    session_start();
    $_SESSION['previous_page'] = $_SERVER['REQUEST_URI'];

    $title = "RM Command";
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
            rm - This command is used to remove/delete files or directories
        </p>
        <h2>COMMAND</h2>
        <figure class="centeredIMG">
            <img class="maxWidth500" src="<?php echo $path; ?>inc/images/rm_command.png" alt="image of entering 'rm' command in terminal">
        </figure>
        <h2>OUTPUT</h2>
        <figure class="centeredIMG">
            <img class="maxWidth500" src="<?php echo $path; ?>inc/images/rm_output.png" alt="image of output of 'rm' command in terminal">
        </figure>
        <p>
            In this example, a new directory named "spare_files" was created.  You will notice that after displaying a long listing of the directory contents,
            the newly created directory can be seen in the list.
        </p>
        <p>
            <a href="<?php echo $path; ?>commands/mv.php">Previous Page</a>
            <a href="./chmod.php">Next Page</a>
        </p>
    </section>
</main>

<?php
    include($path."inc/footer.php");
?>