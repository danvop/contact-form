<!-- header section -->
<?php require 'partials/header.php' ?>

<!-- body section -->
<!-- navs -->
<?php require 'partials/navs.php' ?>
<!-- navbar -->
<?php require 'partials/navbar.php' ?>

<div class="container">

<?php foreach ($contacts as $row) : ?>
  

  <div class="card m-1" id="card-id-<?=$row['id']?>" >
    <!-- card-header -->
    <div class="card-header d-flex">

      <div class="my-auto">
        <div><?=$row['user_name']?></div>
        <!-- carbon data -->
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
      <div class="card-footer d-flex">
        <!-- define archive or restore button  -->
        <?php if($navHeader === "Contacts") : ?>
          <a class="btn btn-secondary" onclick="messageArchive(<?=$row['id']?>)"><img src="img/fa-archive-30-ffffff.png" alt=""></a>
        <?php else : ?>
          <a class="btn btn-info" onclick="messageRestore(<?=$row['id']?>)"><img src="img/fi-upload-30-ffffff.png" alt=""></a>
        <?php endif ?>

        <button class="btn btn-primary ml-auto mr-2">
          <a href="mailto:<?=$row['user_email']?>?subject=<?=$mail_subject?>" target="_blank">
          <img src="img/fa-envelope-white-30.png" alt="">
        </a>      
        </button>
        <a class="btn btn-success" href="tel:<?=$row['user_phone']?>"><img src="img/fa-phone-30-ffffff.png" alt=""></a>
        
        
        <!-- fa-archive-30-ffffff -->
        <!-- for active make arhive button -->
        <!-- for archived make restore button -->
        <!-- AJAX -->
      </div>
    </div>
  </div>

<?php endforeach; ?>


<!-- container ends -->
</div>
<script>

function messageArchive(id){
  $.ajax({
  method: "POST",
  url: "contact-archive.php",
  data: { id: id}
})
    .done(function(){
      $("#card-id-"+id).fadeOut()
    });
  
}
function messageRestore(id){
  $.ajax({
  method: "POST",
  url: "contact-restore.php",
  data: { id: id}
  })
    .done(function(){
      $("#card-id-"+id).fadeOut()
    });
    
}

</script>


<!-- footer section -->
<?php require 'partials/footer.php'; ?>



