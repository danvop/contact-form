<!-- header section -->
<?php require 'partials/header.php' ?>

<!-- body section -->

<div class="container">

<?php foreach ($stmt as $row) : ?>
  

  <div class="card m-1" >
    <!-- card-header -->
    <div class="card-header d-flex">

      <div class="my-auto">
        <div><?=$row['user_name']?></div>
        <small><?=$row['created_at']?></small>
      </div>

      <button class="btn btn-success ml-auto my-auto collapsed" type="button" data-toggle="collapse" data-target="#collapse<?=$row['id']?>">
        <img src="img/fa-chevron-down-30-ffffff.png" alt="">
      </button>
    
    </div>
    <!-- card-body -->
    <div id="collapse<?=$row['id']?>" class="collapse">
      <div class="card-body">
        <?=$row['message_body']?> 
      </div>
      <div class="card-footer">
        <button class="btn btn-primary">
          <a href="mailto:<?=$row['user_email']?>?subject=<?=$mail_subject?>" target="_blank">
          <img src="img/fa-envelope-white-30.png" alt="">
        </a>      
        </button>

        <a class="btn btn-success" href="tel:<?=$row['user_phone']?>"><img src="img/fa-phone-30-ffffff.png" alt=""></a> 

      </div>
    </div>
  </div>

<?php endforeach; ?>


<!-- container ends -->
</div>

<!-- footer section -->
<?php require 'partials/footer.php'; ?>


