<?php include 'inc/header.php'?>
<?php 
  $sql = 'SELECT * FROM feedback';
  $result = mysqli_query($conn, $sql);
  $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
  <div class="container d-flex flex-column align-items-center">
   
    <h2>Past Feedback</h2>
    <!-- Doubt -->
    <?php if(empty($feedback)): ?>
      <p class="lead mt-3">There are no feedbacks</p>
      <?php endif; ?>
    <?php foreach($feedback as $feed): ?>
    <div class="card my-3 w-75">
     <div class="card-body text-center">
      <?php echo $feed['feedback']; ?>
      <div class="text-secondary mt-2">
        By <?php echo $feed['name']; ?>
        on <?php echo $feed['date']; ?>
      </div>
     </div>
   </div>
   <?php endforeach; ?>

   
   <?php include 'inc/footer.php'?>