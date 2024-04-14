<?php
    session_start();
    $_SESSION['previous_page'] = $_SERVER['REQUEST_URI'];

    $title = "Filesystem";
    $path = "../";
    include($path."inc/header.php");
    include($path."inc/nav.php");
?>

<main>
    <section>
        <h2>Summary:</h2>
        <p>
            <ul>
                <li>~/ - the root directory</li>
                <li>~/bin - contains OS executable files</li>
                <li>~/dev - IO devices like flash drives</li>
                <li>~/etc - admin files</li>
                <li>~/lib - installed executables, by user</li>
                <li>~/lib64 - 64 bit executables</li>
                <li>~/tmp - temporary directory</li>
                <li>~/usr/bin - another /bin directory, user-specific</li>
                <li>~/usr/bin/x11 - GUI files</li>
                <li>~/usr/lib - another user specific /lib</li>
                <li>~/usr/ucb - contains university of berkeley files</li>
                <li>~/u - contains user home directory</li>
                <li>~/var - contains variable length files</li>
            </ul>
        </p>
    </section>
    <section>
        <h2>Details:</h2>
        <p>
            The disk that the operating system is installed on is mounted at /, or the root directory. Another abbreviation for this is ~,
            to indicate in case of duplicate directories. The /bin directory contains all executable files standard to installations. The /dev
            directory contains directories that represent all input and output devices, but is usually used for additional storage devices.
            The /etc directory contains miscellaneous administrative files, such as the password file or startup files. The /lib directory
            contains all additional programs installed on the host. This also applies to the /lib64 directory found in 64 bit hosts. The /tmp
            directory is a temporary directory used by programs and users, but should usually be empty. The /usr/bin directory can either be
            a redirection to the /bin directory or contain less common executable files, depending on the particular distribution of unix. The 
            /usr/bin/x11 directory contains files used for the graphical user interface. The /usr/lib directory is similar to the /usr.bin directory,
            except that it redirects to the /lib directory and contains less frequently used executable files. The /usr/local directory contains files
            installed by local administrators. The /usr/ucb directory contains utilities created by Berkeley University. The /u directory contains 
            user home directories. The /var directory is used to store variable length files, such as print spool files. 
        </p>
    </section>
</main>

<?php
    include($path."inc/footer.php");
?>