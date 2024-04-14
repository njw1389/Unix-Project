<?php
    session_start();
    include '../dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Search Results</title>
        <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 30px;
                    background-color: #f0f0f0;
                }

                h1 {
                    margin-top: 0;
                    text-align: center;
                    font-size: 40px;
                    text-decoration: underline;
                }

                .result {
                    background-color: #ffffff;
                    padding: 20px;
                    margin-bottom: 20px;
                    border-radius: 5px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                }

                .result h3 {
                    margin-top: 0;
                }

                .result p {
                    margin-bottom: 10px;
                }

                .button {
                    display: inline-block;
                    background-color: #6246ea;
                    border: none;
                    color: white;
                    padding: 8px 16px;
                    text-decoration: none;
                    margin: 4px 2px;
                    cursor: pointer;
                    border-radius: 3px;
                }

                .back-to-search {
                    display: block;
                    background-color: #3a3b3c;
                    border: none;
                    color: white;
                    padding: 8px 16px;
                    text-decoration: none;
                    margin: 20px auto;
                    cursor: pointer;
                    border-radius: 3px;
                    text-align: center;
                    width: 200px;
                }
    </style>
    </head>
    <body>
        <h1>Search Results</h1>
        
        <?php
        if (isset($_GET['search_query'])) {
            $search_query = $_GET['search_query'];
            $search_terms = explode(' ', $search_query);

            $sql = "SELECT * FROM UnixSite WHERE ";
            $sql_conditions = [];

            foreach ($search_terms as $term) {
                $sql_conditions[] = "name LIKE CONCAT('%', ?, '%') OR description LIKE CONCAT('%', ?, '%')";
            }

            $sql .= implode(' OR ', $sql_conditions);
            $stmt = $conn->prepare($sql);

            if (!$stmt) {
                echo "Error: " . $conn->error;
            } else {
                $types = str_repeat('ss', count($search_terms));
                $params = array_merge($search_terms, $search_terms);
                $stmt->bind_param($types, ...$params);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='result'>";
                        echo "<h3>" . htmlspecialchars($row["name"]) . "</h3>";
                        echo "<p>" . htmlspecialchars($row["description"]) . "</p>";
                        echo "<a href='" . htmlspecialchars($row["page_url"]) . "' class='button'>Go to Page</a>";
                        echo "</div>";
                    }
                } else {
                    echo "No results found.";
                }
                $stmt->close();
            }
        }
        ?>

        <a href="<?php echo isset($_SESSION['previous_page']) ? $_SESSION['previous_page'] : 'index.php'; ?>" class="back-to-search">Back to search</a>
    </body>
</html>