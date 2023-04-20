<?php
require_once "../../config/connection.php";
$id = $_GET['id'];
$select = $db->prepare('SELECT * FROM contacts WHERE id=:id');
$select->execute(['id' => $id]);
$row = $select->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style.css">
    <title>Edit Contact</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="list-contact.php">List Contact</a></li>
            <li><a href="create-contact.php">Add Contact</a></li>
        </ul>
    </nav>

    <form class="p-3" action="update-contact.php" method="post">
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        <fieldset>
            <legend class="form-group">Edit Contact Form</legend>
            <br>
            <div class="form-group">
                <label>Full name <b class='red'>*</b></label>
                <input type="text" name="full_name" placeholder="Full name" value="<?= $row->full_name  ?>">
            </div>
            <div class="form-group">
                <label>Nickname</label>
                <input type="text" name="nickname" placeholder="Nickname" value="<?= $row->nickname  ?>">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="example@domain.com" value="<?= $row->email  ?>">
            </div>
            <div class="form-group">
                <label>Phone <b class='red'>*</b></label>
                <input type="tel" name="phone" placeholder="+964(0) 000 000 00 00" value="<?= $row->phone  ?>">
            </div>
            <div class="form-group">
                <label>Address</label>
                <textarea cols="30" name="address" placeholder="Street, City, Country"> <?= $row->address  ?> </textarea>
            </div>
            <div class="form-group">
                <label>Contact Types</label>
                <select name="type_id">
                    <option value="">Select Contact Type</option>
                    <option value="1">Friend</option>
                    <option value="2">Business</option>
                </select>
            </div>
            <div>
                <label></label>
                <button>Save Changes</button>
            </div>
        </fieldset>
        <?php
        if (isset($_GET['code'])) {
            if ($_GET['code'] == 1) {
                echo "contact Updated ";
            }
            if ($_GET['code'] == 2) {
                echo "Failed to update";
            }
        }
        ?>
    </form>

</body>

</html>