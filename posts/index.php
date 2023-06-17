<?php


$conn = require_once 'Connection.php';
$notes = $conn->getNotes();

$selectedNote = [
    'id' => '',
    "title" => '',
    "note_description" => '',
    "date_of_note" => ''
];
if (isset($_GET['id'])) {
    $selectedNote = $conn->getNoteById($_GET['id']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notes App</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
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
</body>

</html>