<?php
    session_start();
    $_SESSION['previous_page'] = $_SERVER['REQUEST_URI'];

    $title = "CD Command";
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
            cd - Change directory works on a hierarchical format.
        </p>
        <h2>COMMAND WITH OUTPUT</h2>
        <figure class="centeredIMG">
            <img class="maxWidth500" src="<?php echo $path; ?>inc/images/cd_command_output.png" alt="image of entering 'cd' command and viewing its output in terminal">
        </figure>
        <p>
            In this example, we moved from the /home/student directory into the MLB directory.  After entering the PWD command, we can see that we’ve
            descended into the /home/student/MLB directory.  Two dots (..) means back up a level, dot-dash (./) means the current level.
            Ex. cd.. would return the user to the  /home/student directory.  cd ./MLB would indicate that, from the current directory, move into
            the MLB directory.  The best advice to learn cd is to practice and experiment because you can’t hurt anything by changing directories.
        </p>
        <p>
            <a href="<?php echo $path; ?>commands/pwd.php">Previous Page</a>
            <a href="./cp.php">Next Page</a>
        </p>
    </section>
</main>

<?php
    include($path."inc/footer.php");
?>