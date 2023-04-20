<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/style.css">
    <title>Add Contact</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="list-contact.php">List Contact</a></li>
            <li><a href="create-contact.php">Add Contact</a></li>
        </ul>
    </nav>

    <form class="p-3" action="store-contact.php" method="post">
        <fieldset>
            <legend class="form-group">Add Contact Form</legend>
            <br>
            <div class="form-group">
                <label>Full name <b class='red'>*</b></label>
                <input type="text" name="full_name" placeholder="Full name">
            </div>
            <div class="form-group">
                <label>Nickname</label>
                <input type="text" name="nickname" placeholder="Nickname">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="example@domain.com">
            </div>
            <div class="form-group">
                <label>Phone <b class='red'>*</b></label>
                <input type="tel" name="phone" placeholder="+964(0) 000 000 00 00">
            </div>
            <div class="form-group">
                <label>Address</label>
                <textarea cols="30" name="address" placeholder="Street, City, Country"></textarea>
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
                <button>Save Change</button>
            </div>
            <?php
            if (isset($_GET['code'])) {
                if ($_GET['code'] == 1) {
                    echo "Seccesfully added ";
                }
                if ($_GET['code'] == 2) {
                    echo "Failed to add please fill all requiered Fileds";
                }
            }
            ?>
        </fieldset>
    </form>


</body>

</html>