<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Recipe</title>
</head>

<body>
    <form action="add.php" method="post">
        <label for="title"> Title :
            <input type="text" name="title" id="title" maxlength="255" required>
        </label>
        <label for="description">Description : <br>
            <textarea name="description" id="description" cols="30" rows="10" required></textarea>
        </label>
        <button>Add</button>
    </form>
</body>

</html>