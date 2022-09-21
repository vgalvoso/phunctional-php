<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="public/res/img/logoblue.png" type="image/x-icon">
    <title>Timed</title>
    <link rel="stylesheet" href="public/css/mystyle.css">
    <link rel="stylesheet" href="public/css/icons.css">
    <script src="public/js/htmx.min.js"></script>
    <script src="public/js/vanscript.js"></script>
</head>
<body class="">
    <nav class="bg-primary">
        <div class="bg-primary pad-big">
            <h1 class="text-header white" id="page_title">Manage Users</h1>
        </div>
        <ul>
            <li hx-get="admin/users" hx-target="#main" onclick="setHtml('page_title','Manage Users')">Users</li>
            <li hx-get="admin/projects" hx-target="#main" onclick="setHtml('page_title','Manage Projects')">Projects</li>
        </ul>
        <div>
            <form action="api/logout" method="post">
                <button class="bg-white red bold border border-red round">Logout</button>
            </form>
        </div>
    </nav>
    <div id="main" hx-get="admin/users" hx-trigger="load">
        
    </div>
</body>
</html>