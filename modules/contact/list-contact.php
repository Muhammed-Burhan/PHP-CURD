<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style.css">
    <title>List Contact</title>
    <style>
    table {
        width: 100%;
    }

    table,
    th,
    td {
        border: 1px solid black;
    }
    </style>
</head>

<body>
    <nav>
        <ul>
            <li><a href=" list-contact.php">List Contact</a></li>
            <li><a href=" create-contact.php">Add Contact</a></li>
        </ul>
    </nav>

    <h4>List of Contacts</h4>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Full name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
                <th></th>
            </tr>
        </thead>
        <tbody id="rows">
            <?php
            require_once "../../config/connection.php";
            $select = $db->prepare('SELECT * FROM contacts');
            $select->execute();
            $row = $select->fetchAll(PDO::FETCH_OBJ);
            $n = 1;
            foreach ($row as $key) {
                echo "<tr>
                <td>$n</td>
                <td>$key->full_name</td>
                <td>$key->phone</td>
                <td>$key->email</td>
                <td>$key->address</td>
                <td>
                <a href='edit-contact.php?id=$key->id'>Edit</a> <a href='delete-contact.php?id=$key->id'>Delete</a>
                </td>
                </tr>";
                $n++;
            }
            ?>
        </tbody>
    </table>
    <?php
    if (isset($_GET['code'])) {
        if ($_GET['code'] == 1) {
            echo "Seccesfully deleted ";
        }
        if ($_GET['code'] == 2) {
            echo "Failed to delete";
        }
    }
    ?>
</body>

</html>