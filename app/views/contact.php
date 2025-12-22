<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= baseUrl() ?>/public/assests/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <h1>Welcome to the Contact Page</h1>

    <?php if (!empty($_SESSION['flash'])): ?>
        <div class="flash <?php echo htmlspecialchars($_SESSION['flash']['type']); ?>">
            <?php echo htmlspecialchars($_SESSION['flash']['message']); ?>
        </div>
        <?php unset($_SESSION['flash']); ?>
    <?php endif; ?>

    <?php if (!empty($messages) && is_array($messages)): ?>
        <section>
            <h2>Messages</h2>
            <ul>
                <?php foreach ($messages as $m): ?>
                    <li>
                        <strong><?php echo htmlspecialchars($m['username'] ?? $m['name'] ?? 'Anonymous'); ?></strong>
                        (<?php echo htmlspecialchars($m['email'] ?? ''); ?>)<br>
                        <?php echo nl2br(htmlspecialchars($m['message'] ?? '')); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
    <?php else: ?>
        <p>No messages yet.</p>
    <?php endif; ?>
</body>

</html>