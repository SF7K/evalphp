<body>
    <? require_once './templates/navbar.php'; ?>
    <?
        if(isset($_GET['message'])) {
            echo '<p>'. $_GET['message'] .'</p>';
        }
    ?>

    <form action="./controllers/connectUser.php" method="POST">
        <label for="username">Username : </label>
        <input type="text" name="username" required><br/>
        <label for="password">Password : </label>
        <input type="password" name="password" required><br/>
        <input type="submit" value="Submit">
    </form>      
</body>
</html>