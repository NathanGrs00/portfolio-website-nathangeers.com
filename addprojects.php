<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Add a project. | Nathan Geers</title>
    <link rel="stylesheet" href="public/css/newproject.css">
</head>
<body>
    <div class="wrapper" id="wrapper">
        <h2>Add a project</h2>
        <form action="main.php" method="POST">
            <label for="title">Title: </label><input type="text" id="title" name="title">
            <label for="description">Description: </label><textarea id="description" name="description"></textarea>
            <div id="skillsBox">
                <p>Skills: </p>
                <div>
                    <div>
                        <input type="checkbox" id="HTML" name="checks[]" value="HTML">
                        <label for="HTML">HTML</label>
                        <input type="checkbox" id="PHP" name="checks[]" value="PHP">
                        <label for="PHP">PHP</label>
                        <input type="checkbox" id="CSS" name="checks[]" value="CSS">
                        <label for="CSS">CSS</label>
                        <input type="checkbox" id="Javascript" name="checks[]" value="Javascript">
                        <label for="Javascript">Javascript</label>
                        <input type="checkbox" id="Python" name="checks[]" value="Python">
                        <label for="Python">Python</label>
                    </div>
                    <div>
                        <input type="checkbox" id="Java" name="checks[]" value="Java">
                        <label for="Java">Java</label>
                        <input type="checkbox" id="SQL" name="checks[]" value="SQL">
                        <label for="SQL">SQL</label>
                        <input type="checkbox" id="CSharp" name="checks[]" value="C#">
                        <label for="CSharp">C#</label>
                        <input type="checkbox" id="GDScript" name="checks[]" value="GDScript">
                        <label for="GDScript">GDScript</label>
                        <input type="checkbox" id="Shell" name="checks[]" value="Shell">
                        <label for="Shell">Shell</label>
                    </div>
                </div>
            </div>
            <label for="image">Image: </label><input type="file" id="image">
            <div id="buttonDiv">
                <button type="submit" name="Submit">Add Project</button>
                <button onclick="document.href='projects.php'">Go Back</button>
            </div>
        </form>
    </div>
</body>
</html>