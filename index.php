<?php 
  require "functions.php";
  
  $questions = randomize(
    json_decode(file_get_contents('questions.json'), 1)
  );
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiz Generator</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Questions: <?php echo count($questions); ?></h1>
  <?php foreach ($questions as $question) : ?>
  
  <div class="question">
    <p><strong><?php echo $question["text"]; ?></strong></p>
    <ol>
      <?php foreach ($question["answers"] as $answer) : ?>
        <li><?php echo $answer; ?></li>
      <?php endforeach; ?>
    </ol>
  </div>
  <?php endforeach; ?>
</body>
</html>