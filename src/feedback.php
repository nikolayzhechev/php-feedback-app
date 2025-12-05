<?php
require_once 'config/db.php';

$feedbackQuery = mysqli_query($conn, "SELECT * FROM feedback ORDER BY date DESC");
$feedback = mysqli_fetch_all($feedbackQuery, MYSQLI_ASSOC);

if (isset($_POST['delete'])) {
  $id = $_POST['id'];

  $query = $conn->prepare("DELETE FROM feedback WHERE ID = ?");
  $query->bind_param("i", $id);
  $query->execute();

  if ($query->affected_rows > 0) {
    header("Location: feedback.php");
    exit;
  } else {
    echo "No record found or failed to delete.";
  }
  
  $query->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Leave Feedback</title>
</head>
<body>
<?php include 'components/header.php'; ?>

<main>
  <div class="container d-flex flex-column align-items-center">
   
    <h2>Feedback</h2>

    <?php if(empty($feedback)): ?>
      <p class="lead mt3">There is no feedback.</p>
    <?php endif; ?>

    <?php foreach($feedback as $item): ?>
      <div class="card my-3 w-75">
        <div class="card-body text-center">
          <?php echo $item['body']; ?>
          <p class="text-seconday mt-2">By <?php echo $item['name']; ?> on <?php echo $item['date']; ?> </p>
        </div>
<!-- add if current user has created feedback post check -->
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
          <input type="hidden" name="id" value="<?= $item['id'] ?>">
          <button type="submit" name="delete">Remove</button>
          <button type="submit" name="edit">Edit</button>
        </form>
      </div>
    <?php endforeach; ?>
</main>

<?php include 'components/footer.php'; ?>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
