<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="?">Home</a></li>
            <li><a href="?const=yo">yo</a></li>
            <li><a href="?const=aboutMe">About me</a></li>
            <li><a href="?const=nordine">Nordine</a></li>
            <li><a href="?const=said">Said</a></li>
        </ul>
    </nav>

    <?php if (isset($_GET['const']) && $_GET['const'] === 'yo'): ?>
        <h1>Yo</h1>
    <?php elseif (isset($_GET['const']) && $_GET['const'] === 'aboutMe'): ?>
        <h1>About me</h1>
    <?php elseif (isset($_GET['const']) && $_GET['const'] === 'nordine'): ?>
        <h1>Nordine</h1>
    <?php elseif (isset($_GET['const']) && $_GET['const'] === 'said'): ?>
        <h1>Said</h1>
    <?php else: ?>
        <h1>welcome</h1>
        <p>hello</p>
    <?php endif; ?>



</body>

</html>