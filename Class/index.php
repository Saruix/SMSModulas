f
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Registration Form</title>
</head>

<body>

    <div>
        <Form action="" method="post">
            <input type="text" name="class_name" placeholder="Class Name">
            <input type="text" name="class_code" placeholder="Class Code">
            <input type="text" name="class_teacher" placeholder="Class Teacher Name">
            <input type="text" name="Class_addedDate" placeholder="Class Added Date">
            <button type="submit" name="addClass">Add Class</button>
        </Form>
    </div>
    <div>
        <table border="2" width="100%" cellspecing="6" style="text-align:center; margin-top:2em;">
            <thead>
                <tr>
                    <th>S.N</th>
                    <th>Class Name</th>
                    <th>Class Code</th>
                    <th>Class Teacher</th>
                    <th>Class Added Date</th>
                    <th>Action</th>
                </tr>
            </thead>
        <body>
            <?php
            include './Api/Auto/AutoLoaderIndex.php';
            $classes = new Classes();
            $classes->fetchClasses();
            ?>
        </body>        
        </table>
    </div>

    <script src="./Assets/JS/Model.jss"></script>
</body>

</html>