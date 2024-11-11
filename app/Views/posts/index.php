<!DOCTYPE html>
<html>

<head>
    <title>Posts</title>
</head>

<body>
    <h1>Post List</h1>
    <a href="/posts/create">Create New Post</a>
    <ul>
        <?php foreach ($posts as $post): ?>
            <li>
                <a href="/posts/show?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>
                <a href="/posts/edit?id=<?= $post['id'] ?>">Edit</a>
                <form action="/posts/delete" method="POST">
                    <input type="hidden" name="id" value="<?= $post['id'] ?>">
                    <button type="submit">Delete</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>