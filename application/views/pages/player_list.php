<div class="club">
  <div class="club-list">
    <img src="images/more.png" class="info-icon" />
    <h3>MOST POPULAR PLAYERS</h3>
    <div class="club-header">
      <div>
        <a href="#">#</a>
      </div>
      <div>
        <a href="#">Club</a>
      </div>
      <div>
        <a href="#">City</a>
      </div>
      <div>
        <a href="#">Country</a>
      </div>

    </div>
    <?php $i = 0;
    foreach ($Players as $player) : ?>
      <div class="club-box">
        <div class="club-det">
          <a href="#"><?= ++$i ?></a>
        </div>
        <div>
          <a href="players/profile?id=<?=$player['id']?>"><?= $player['name'] ?></a>
        </div>
        <div>
          <a href="#"><?= $player['city'] ?></a>
        </div>
        <div>
          <a href="#"><?= $player['country'] ?></a>
        </div>

      </div>
    <?php endforeach; ?>

    <a href="#" class="read-more-link">Read More </a>
  </div>
  <!-- ------------------------------------------------------------------------------------------------------------- -->
  <div class="club-list">
    <img src="images/more.png" class="info-icon" />
    <h3>MOST VIEW CLUBS</h3>
    <div class="club-header">
      <div>
        <a href="#">#</a>
      </div>
      <div>
        <a href="#">Club</a>
      </div>
      <div>
        <a href="#">City</a>
      </div>
      <div>
        <a href="#">Country</a>
      </div>

    </div>
    <?php $i = 0;
    foreach ($Player as $players) : ?>
      <div class="club-box">
        <div class="club-det">
          <a href="#"><?= ++$i ?></a>
        </div>
        <div>
          <a href="#"><?= $players['name'] ?></a>
        </div>
        <div>
          <a href="#"><?= $players['city'] ?></a>
        </div>
        <div>
          <a href="#"><?= $players['country'] ?></a>
        </div>

      </div>
    <?php endforeach; ?>

    <a href="#" class="read-more-link">Read More </a>
  </div>
  <!-- -------------------------------------------------------------------------------------------------------------- -->
  <div class="club-list">
    <img src="images/more.png" class="info-icon" />
    <h3>MOST VIEW CLUBS</h3>
    <div class="club-header">
      <div>
        <a href="#">#</a>
      </div>
      <div>
        <a href="#">Club</a>
      </div>
      <div>
        <a href="#">City</a>
      </div>
      <div>
        <a href="#">Country</a>
      </div>

    </div>
    <?php $i = 0;
    foreach ($Player as $players) : ?>
      <div class="club-box">
        <div class="club-det">
          <a href="#"><?= ++$i ?></a>
        </div>
        <div>
          <a href="#"><?= $players['name'] ?></a>
        </div>
        <div>
          <a href="#"><?= $players['city'] ?></a>
        </div>
        <div>
          <a href="#"><?= $players['country'] ?></a>
        </div>

      </div>
    <?php endforeach; ?>

    <a href="#" class="read-more-link">Read More </a>
  </div>
</div>



<!-- -------------profile-sidebar----------- -->