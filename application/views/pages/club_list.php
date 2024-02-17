<div class="club">
  <div class="club-list">
    <img src="images/more.png" class="info-icon" />
    <h3>MOST POPULAR CLUBS</h3>
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
    foreach ($Clubs as $club) : ?>
      <div class="club-box">
        <div class="club-det">
          <a href="#"><?= ++$i ?></a>
        </div>
        <div>
          <a href="clubs/profile?id=<?=$club['id']?>"><?= $club['club_name'] ?></a>
        </div>
        <div>
          <a href="#"><?= $club['city'] ?></a>
        </div>
        <div>
          <a href="#"><?= $club['country'] ?></a>
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
    foreach ($Club as $clubs) : ?>
      <div class="club-box">
        <div class="club-det">
          <a href="#"><?= ++$i ?></a>
        </div>
        <div>
          <a href="clubs/profile?id=<?=$club['id']?>"><?= $clubs['club_name'] ?></a>
        </div>
        <div>
          <a href="#"><?= $clubs['city'] ?></a>
        </div>
        <div>
          <a href="#"><?= $clubs['country'] ?></a>
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
    foreach ($Club as $clubs) : ?>
      <div class="club-box">
        <div class="club-det">
          <a href="clubs/profile?id=<?=$club['id']?>"><?= ++$i ?></a>
        </div>
        <div>
          <a href="#"><?= $clubs['club_name'] ?></a>
        </div>
        <div>
          <a href="#"><?= $clubs['city'] ?></a>
        </div>
        <div>
          <a href="#"><?= $clubs['country'] ?></a>
        </div>

      </div>
    <?php endforeach; ?>

    <a href="#" class="read-more-link">Read More </a>
  </div>
</div>



<!-- -------------profile-sidebar----------- -->