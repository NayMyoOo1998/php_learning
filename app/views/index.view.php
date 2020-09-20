<?php require "partials/head.view.php" ?>
<ul>

    <?php foreach ($tasks as $task) : ?>
        <?php if ($task->completed) : ?>
            <strike>
                <li><?= $task->description ?></li>
            </strike>
        <?php else : ?>
            <li><?= $task->description ?></li>
        <?php endif; ?>
    <?php endforeach; ?>

</ul>

<h2>Add New Item</h2>
<form action="/add-todos" method="post">
    <label for="">Name: </label><input type="text" name="name" required is-invalid>
    <br>
    <br>
    <label for="email">Email: </label>
    <input type="email" name = "email" is-invalid required>
    <input type="submit" value="Submit" name="submit">
</form>


<ul>
    <?php foreach($users as $user): ?>
    <li><?=$user->name?> =======> <?= $user->email ?></li>
    <?php endforeach ;?>
</ul>

<?php require "partials/footer.view.php"; ?>