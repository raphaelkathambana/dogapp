<?php
include_once "layout/header.php";
require_once 'vendor/autoload.php';

use Connection as conn;
$conn = new conn;
$notes = $conn->getNotes();

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
    <?php include_once "layout/navbar.php"; ?>
    <div class="section-heading">
            <h3 class="text-center">Your Posts</h3>
        </div>
    <div>
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
        <div class="section-heading">
            <h3 class="text-center">Add A Note</h3>
        </div>
        <form class="new-note" action="save.php" method="post">
            <input type="hidden" name="id" value="<?php echo $selectedNote[0]['id'] ?>">
            <input class="form-control" type="text" name="title" placeholder="Note title" autocomplete="off"
                value="<?php echo $selectedNote[0]['title'] ?>">
            <textarea name="note_description" class="form-control" cols="30" rows="4"
                placeholder="Note Description"><?php echo $selectedNote[0]['note_description']; ?></textarea>
            <button class="form-control w-100 btn btn-lg btn-primary">
                <?php if ($selectedNote[0]['id']): ?>
                    Update Note
                <?php else: ?>
                    New Note
                <?php endif; ?>
            </button>
        </form>
        
      
    </div>
    <?php include_once "layout/footer.php"; ?>

</body>

</html>
