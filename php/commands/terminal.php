<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terminal Practice</title>
    <link rel="stylesheet" href="./css/terminal.css">
    <?php
        $prompt = "[student@localhost ~]$ ";
    ?>
</head>
    <body>
        <div class="container">
            <div class="terminal" id="terminal">
                <div class="out">
                    <p>Welcome to the terminal! For a list of commands, type 'help'<br/>############################################################</p>
                </div>
                <form onsubmit="output(); return false;" action="javascript:output()" method="POST">
                    <div class="input-container">
                        <span class="prompt"><?php echo $prompt; ?></span>
                        <input type="text" id="input" name="input" autocomplete="off" autofocus>
                    </div>
                </form>
            </div>
            <div class="buttons">
                <a href="../index.php">Go Back To Home</a>
            </div>
        </div>
        <script>
            window.onload = function () {
                document.getElementById("input").addEventListener("keyup", function (event) {
                    if (event.keyCode === 13) {
                        event.preventDefault();
                        output();
                    }
                });

                document.getElementById("terminal").addEventListener("click", function (event) {
                    document.getElementById("input").focus();
                });
            };
            files = [];
            function output() {
                var outDiv = document.querySelector(".out");
                var outputText = ""; // Initialize an empty output string

                var userInput = document.getElementById("input").value;
                var userArgs = userInput.split(" ");
                console.log(userInput[0]);

                var newOutput = document.createElement("div"); // Use a div instead of a p tag for the output
                newOutput.classList.add("newOutput");

                var promptOutput = document.createElement("p");
                promptOutput.classList.add("prompt");
                promptOutput.innerHTML = '<?php echo $prompt; ?>' + userInput;
                newOutput.appendChild(promptOutput);

                var commandOutput = document.createElement("p");

                if (userArgs[0] === "help") {
                    outputText = "Commands  \t  cat \&lt;filename>  \t  cd \&lt;dirname>  \t  cp \&lt;source> \&lt;destination>  \t  ls  \t  mkdir \&lt;dirname>  \t  mv \&lt;source> \&lt;destination>  \t  pwd  \t  rm \&lt;filename>";
                } else if (userArgs[0] === "cat") {
                    if(userArgs[1] === "test.txt"){
                        outputText = "<p>Lorem ipsum dolor sit amet. Sit quidem rerum eum veritatis enim et officia aliquam est deleniti provident aut architecto minima eum sequi sint? Sed veritatis enim non laborum natus est velit incidunt est molestias explicabo At necessitatibus internos non corporis quae sed modi dolorum? Ut atque natus et consequatur sunt sit eaque aliquid est voluptates dolorem et sint optio in doloremque temporibus. Aut ipsa eius et laborum molestiae sed voluptas nihil aut rerum soluta vel laboriosam praesentium. </p><p>Aut amet incidunt quo placeat dolorum quo repudiandae accusamus. Sit libero cupiditate et autem ullam a culpa nihil qui galisum possimus id esse galisum est soluta ullam. </p><p>Sit repellat ullam rem dolorem recusandae est omnis doloribus. Est corporis veritatis rem necessitatibus natus et dolore impedit 33 suscipit aliquid. Id eaque numquam qui ullam minus nam quia suscipit ex delectus sint quo consequatur laboriosam non facilis dolorum? Qui velit dolor in quasi debitis ea incidunt repellendus id voluptatem repudiandae et odit libero At ducimus soluta. </p>"
                    } else if (userArgs[1] === "readme.txt"){
                        outputText = "This terminal is here for you to practice commands on. Type help to see a list of commands. As the filesystem is emulated, the 'cd', 'cp' and 'mv' commands will not work exactly as they would in a UNIX terminal."
                    }
                } else if (userArgs[0] === "cd") {
                    outputText = `This command would have made the working directory ${userArgs[1]}`;
                } else if (userArgs[0] === "ls") {
                    outputText = "readme.txt<br/>test.txt";
                    files.forEach((f) => {outputText += `<br/>${f}`});
                } else if(userArgs[0] === "mkdir"){
                    files.push(userArgs[1]);
                } else if (userArgs[0] === "mv"){
                    outputText = `This command would have moved ${userArgs[1]} to ${userArgs[2]}`;
                } else if (userArgs[0] === "cp"){
                    outputText = `This command would have copied ${userArgs[1]} to ${userArgs[2]}`;
                } else if (userArgs[0] === "pwd"){
                    outputText = "/usr/"
                } else if (userArgs[0] === "rm"){
                    files.forEach((f,i) => {if (userArgs[1] === f){files.splice(i,1)}});
                } else if (userArgs[0] === ""){
                    console.log("empty string");
                } else {
                    outputText = "Command not recognized! To see a list of commands, type 'help'";
                }
                commandOutput.innerHTML = outputText;
                newOutput.appendChild(commandOutput);
                outDiv.appendChild(newOutput);

                var newLine = document.createElement("br");
                outDiv.appendChild(newLine);

                document.getElementById("input").value = ""; // Clear the input field
                document.getElementById("input").focus(); // Focus the new input field
                outDiv.scrollTop = outDiv.scrollHeight; // Scroll to the bottom of the output div
                }
        </script>
    </body>
</html>