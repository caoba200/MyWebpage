<!DOCTYPE html>
<html>
    <head>
        <?php include '../../components/includes.php'; ?>
        <title>AJAX and JSON Test</title>
        <link rel="icon" type="image/png" href="../../favicon/homepage.png" />
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="form-container">
            <h2><i class="fab fa-github"></i> Find a GitHub User</h2>
            <form id="user-search">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search" id="search" name="search">

            </form>
        </div>

        <div id="search-result">

        </div>

        <script type="text/javascript" src="search.js"></script>
        <script type="text/javascript" src="eventListener.js"></script>
    </body>
</html>
