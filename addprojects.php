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
        <form action="projects.php" method="POST">
            <label for="title">Title: </label><input type="text" id="title" name="title">
            <label for="description">Description: </label><textarea id="description" name="description"></textarea>
            <div id="skillsBox">
                <p>Skills: </p>
                <div>
                    <div>
                        <input type="checkbox" id="HTML" name="checks">
                        <label for="HTML">HTML</label>
                        <input type="checkbox" id="PHP" name="checks">
                        <label for="PHP">PHP</label>
                        <input type="checkbox" id="CSS" name="checks">
                        <label for="CSS">CSS</label>
                        <input type="checkbox" id="Javascript" name="checks">
                        <label for="Javascript">Javascript</label>
                        <input type="checkbox" id="Python" name="checks">
                        <label for="Python">Python</label>
                    </div>
                    <div>
                        <input type="checkbox" id="Java" name="checks">
                        <label for="Java">Java</label>
                        <input type="checkbox" id="SQL" name="checks">
                        <label for="SQL">SQL</label>
                        <input type="checkbox" id="C#" name="checks">
                        <label for="C#">C#</label>
                        <input type="checkbox" id="GDScript" name="checks">
                        <label for="GDScript">GDScript</label>
                        <input type="checkbox" id="Shell" name="checks">
                        <label for="Shell">Shell</label>
                    </div>
                </div>
            </div>
            <label for="image">Image: </label><input type="file" id="image">
            <div id="buttonDiv">
                <button type="submit">Add Project</button>
                <button>Go Back</button>
            </div>
        </form>
    </div>
</body>
</html>