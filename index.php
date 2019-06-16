<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Contact form</title>
</head>
<body>
    <div class="container">
    <form action="contact-add">

      <label for="form-name">Enter your name</label>
      <input type="text" name="name" id="form-name">

      <label for="form-email">Enter your email</label>
      <input type="email" name="email" id="form-email">

      <label for="form-textarea">What is your question?</label>
      <textarea name="question" id="" cols="30" rows="10" id="form-textarea"></textarea>

      <input type="submit">
      
    </form>
    </div>
    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
  <button type="button" class="btn btn-secondary">1</button>
  <button type="button" class="btn btn-secondary">2</button>

  <div class="btn-group" role="group">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Dropdown
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="#">Dropdown link</a>
      <a class="dropdown-item" href="#">Dropdown link</a>
    </div>
  </div>
</div>

<div class="container">
  <form action="faker.php">
    <button type="submit">Use Faker</button>
  </form>
</div>
</body>
</html>