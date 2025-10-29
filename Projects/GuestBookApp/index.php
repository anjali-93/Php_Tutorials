<!DOCTYPE html>
<html>
<head>
  <title>Guestbook</title>
</head>
<body>
  <h2>Guestbook</h2>

  <!-- Guestbook form -->
  <form method="post" action="save.php">
    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Message:</label><br>
    <textarea name="message" rows="5" required></textarea><br><br>

    <button type="submit">Sign Guestbook</button>
  </form>

  <hr>

  <h3>Messages:</h3>
  <?php
  $file = "guestbook.json";

  if (file_exists($file)) {
      $entries = json_decode(file_get_contents($file), true);

      if (!empty($entries)) {
          foreach ($entries as $entry) {
              echo "<p><strong>" . htmlspecialchars($entry['name']) . "</strong> (" . 
                   htmlspecialchars($entry['date']) . ")<br>" . 
                   nl2br(htmlspecialchars($entry['message'])) . "</p><hr>";
          }
      } else {
          echo "<p>No messages yet. Be the first to sign!</p>";
      }
  } else {
      echo "<p>No messages yet. Be the first to sign!</p>";
  }
  ?>
</body>
</html>
