<?php

$conn = require_once '../auth.php';
use Connection as conn;
include_once "../layout/header.php";
$conn = new conn;
$notes = $conn->getNotes();

if (isset($_COOKIE["session"])) {
    // User is logged in
    $username = $_COOKIE["session"];
} else {
    // User is not logged in
    header("Location: login.html");
    exit();
}

$selectedNote = [
    0 => [
    'id' => '',
    "title" => '',
    "note_description" => '',
    "date_of_note" => ''
    ]
];
if (isset($_GET['id'])) {
    $selectedNote = $conn->getNoteById($_GET['id']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Notes App</title>
</head>

<body>
    <?php include_once "../layout/navbar.php"; ?>
    <div>
        <form class="new-note" action="save.php" method="post">
            <input type="hidden" name="id" value="<?php echo $selectedNote[0]['id'] ?>">
            <input type="text" name="title" placeholder="Note title" autocomplete="off"
                value="<?php echo $selectedNote[0]['title'] ?>">
            <textarea name="note_description" cols="30" rows="4"
                placeholder="Note Description"><?php echo $selectedNote[0]['note_description']; ?></textarea>
            <button>
                <?php if ($selectedNote[0]['id']): ?>
                    Update Note
                <?php else: ?>
                    New Note
                <?php endif; ?>
            </button>
        </form>
        <div class="notes">
            <?php foreach ($notes as $note): ?>
                <div class="note">
                    <div class="title">
                        <a href="?id=<?php echo $note['id'] ?>"><?php echo $note['title'] ?></a>
                    </div>
                    <div class="description">
                        <?php echo $note['note_description'] ?>
                    </div>
                    <small>
                        <?php echo $note['date_of_note'] ?>
                    </small>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $note['id'] ?>">
                        <button class="close">X</button>
                    </form>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <?php include_once "../layout/footer.php"; ?>

</body>

</html>
