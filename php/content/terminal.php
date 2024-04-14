<?php
    session_start();
    $_SESSION['previous_page'] = $_SERVER['REQUEST_URI'];

    $title = "Terminal";
    $path = "../";
    include($path."inc/header.php");
    include($path."inc/nav.php");
?>
        
<main>
    <section id="singular">
        <h2>Terminal:</h2>
        <p>
            Accessing the terminal is generally performed by clicking an icon which resembles the following:
        </p>
        <figure class="centeredIMG">
            <img id = "terminal" src="<?php echo $path;?>inc/images/terminal.png" alt="terminal icon">
        </figure>
        <p>
            The terminal may also be referred to as the shell or the command line.  Only the keyboard is used when interacting with the terminal.
            Some useful operations are that pressing the up arrow will recall the last command entered.  Continuing to the press the up arrow will
            recall previously entered commands.  The tab key is used as an auto-complete.  It can serve two functions: both auto-completing if enough
            of the command has been entered and is unambiguous, and, if auto-completed, giving the user a sort of confirmation that the command will be accepted.
        </p>
    </section>
</main>

<?php
    include($path."inc/footer.php");
?>