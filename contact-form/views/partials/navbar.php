<nav class="navbar navbar-expand-lg navbar-light bg-light">
<!-- show contacts link as brand link -->
  <a class="navbar-brand" href="..">Home</a>
  <a class="navbar-brand"><?= isset($activeContacts) ? 'Contacts' : 'Archived' ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?= isset($activeContacts) ? 'active' : '' ?>">
        <a class="nav-link" href="contacts-show.php">Contacts</a>
      </li>
      <li class="nav-item
      <?= isset($activeArchive) ? 'active' : '' ?>
      ">
        <a class="nav-link" href="contacts-show-archive.php">
        Arhived</a>
      </li>
  </div>
</nav>