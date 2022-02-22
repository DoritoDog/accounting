<!DOCTYPE html>
<html>
<head>
  <?= $this->Html->charset() ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $this->fetch('title') ?></title>
  <?= $this->Html->meta('icon') ?>

  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

  <?= $this->Html->css('cirrus') ?>
  <?= $this->fetch('meta') ?>
  <?= $this->fetch('css') ?>
  <?= $this->fetch('script') ?>
</head>
<body>
  <div class="header header-fixed unselectable header-animated">
    <div class="header-brand">
      <div class="nav-item no-hover">
        <?= $this->Html->link('Úvod', '/'); ?>
      </div>
      <div class="nav-item nav-btn" id="header-btn">
          <span></span>
          <span></span>
          <span></span>
      </div>
    </div>
    <div class="header-nav" id="header-menu">
      <div class="nav-center">
        <div class="nav-item"><?= $this->Html->link('Cenník', ['controller' => 'Pricing', 'action' => 'index']); ?></div>
        <div class="nav-item"><?= $this->Html->link('Objednať konzultáciu', ['controller' => 'Pricing', 'action' => 'index']); ?></div>
      </div>
    </div>
  </div>

  <div style="margin-top: 50px">
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
  </div>
</body>
</html>
