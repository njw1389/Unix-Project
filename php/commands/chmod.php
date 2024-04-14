<?php
    session_start();
    $_SESSION['previous_page'] = $_SERVER['REQUEST_URI'];

    $title = "CHMOD Command";
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
            chmod - Used to update permissions on a file or directory.  Although the default values are generally safe and sufficient,
            if there are problems with access, file and directory permissions can be modified using many different conventions.
        </p>
        <figure class="centeredIMG">
            <img class="maxWidth200" src="<?php echo $path; ?>inc/images/permissions.png" alt="image of how permissions are laid out and what they represent">
        </figure>
        <p>
            Syntax to change permissions is chmod u=&lt;permissions&gt;, g=&lt;permissions&gt;,o=&lt;permissions&gt; &lt;file name&gt;
        </p>
        <h2>COMMAND</h2>
        <figure class="centeredIMG">
            <img class="maxWidth500" src="<?php echo $path; ?>inc/images/chmod_command.png" alt="image of entering 'chmod' command in terminal">
        </figure>
        <p>
            In this example, the user and the user’s group were given full permissions to the MLB_File, and everyone else was given permissions to only read
            and write to the MLB_File.
        </p>
        <p>
            <a href="<?php echo $path; ?>commands/rm.php">Previous Page</a>
            <a href="./cat.php">Next Page</a>
        </p>
</main>

<?php
    include($path."inc/footer.php");
?>