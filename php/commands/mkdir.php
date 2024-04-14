<?php
    session_start();
    $_SESSION['previous_page'] = $_SERVER['REQUEST_URI'];

    $title = "MKDIR Command";
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
            mkdir - The make directory command is used to create new directories.  It’s syntax is mkdir &lt;desired directory name&gt;
        </p>
        <h2>COMMAND</h2>
        <figure class="centeredIMG">
            <img class="maxWidth500" src="<?php echo $path; ?>inc/images/mkdir_command.png" alt="image of entering 'mkdir' command in terminal">
        </figure>
        <h2>OUTPUT</h2>
        <figure class="centeredIMG">
            <img class="maxWidth500" src="<?php echo $path; ?>inc/images/mkdir_output.png" alt="image of output of 'mkdir' command in terminal">
        </figure>
        <p>
            In this example, a new directory named “spare_files” was created.  You will notice that after displaying a long listing of the directory contents,
            the newly created directory can be seen in the list.
        </p>
        <p>
            <a href="<?php echo $path; ?>commands/mv.php">Previous Page</a>
            <a href="./rm.php">Next Page</a>
        </p>
    </section>
</main>

<?php
    include($path."inc/footer.php");
?>