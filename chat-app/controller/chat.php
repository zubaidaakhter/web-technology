<?php 
  session_start();
  include_once "sql_connection.php";
  ?>
<html> 
<head>
  <link rel ="stylesheet" type="text/css" href="../css/chat.css">
</head>
<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
          $user_id = mysqli_real_escape_string($conn, $_GET['username']);
          $sql = mysqli_query($conn, "SELECT * FROM chat WHERE id = {$id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: homege.html");
          }
        ?>
        
        
        <div class="details">
          <span><?php echo $row['username']. " " . $row['email'] ?></span>
          <p><?php echo $row['status']; ?></p>
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="id" name="id" value="<?php echo $id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <input type="submit" value="Confirm" name="Confirm" class="button1">
      </form>
    </section>
  </div>
<script type="text/javascript" src="../js/chat.js"></script>
  

</body>
</html>
