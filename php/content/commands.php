<?php
    session_start();
    $_SESSION['previous_page'] = $_SERVER['REQUEST_URI'];

    $title = "Commands";
    $path = "../";
    include($path."inc/header.php");
    include($path."inc/nav.php");
?>
        
<main class="sideNav">
    <section>
        <?php include($path."inc/side_nav.php")?>
    </section>
    <section>
        <h2>Common Commands & Syntax:</h2>
        <p>
            Note: Commands are case sensitive
            <br>  
            man - One of the most important commands, man (short for manual pages) provides helpful documentation.  Appending the command
            in question to man brings up the commands “man pages.”  For example, man ls accesses the manual pages for the ls command.
              
            The format of the man pages is generally in the following format:
        </p>  
        <h2>NAME</h2>
        <p>
            The name of the command or function, followed by a one-line description of what it does.
        </p>     
        <h2>SYNOPSIS</h2>
        <p>
            In the case of a command, a formal description of how to run it and what command line options it takes. For program functions,
            a list of the parameters the function takes and which header file contains its declaration.
        </p>     
        <h2>DESCRIPTION</h2>
        <p>     
            A textual description of the functioning of the command or function.
        </p>     
        <h2>EXAMPLES</h2>
        <p>      
            Some examples of common usage.
        </p>      
        <h2>SEE ALSO</h2>
        <p>
            A list of related commands or functions.
        </p>          
        <h2>COMMAND</h2>
        <figure class="centeredIMG">
            <img class="maxWidth500" src="<?php echo $path;?>inc/images/man_command.png" alt="image of entering 'man ls' command in terminal">
        </figure>
        <h2>OUTPUT</h2>
        <figure class="centeredIMG">
            <img class="maxWidth500" src="<?php echo $path;?>inc/images/man_output.png" alt="image of output of 'man ls' command in terminal">
        </figure>
        <p>
            <a href="<?php echo $path;?>/commands/ls.php">Next Page</a>
        </p>
</main>

<?php
    include($path."inc/footer.php");
?>