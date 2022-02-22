<div style="padding-top: 50px">
  <div class="row">
    <div class="col-1"></div>

    <div class="col-5">
      <h3 class="u-text-center">Jednoduché účtovnictvo</h3>
      <table class="table">
        <thead>
          <tr>
            <th><abbr title="Title1">Počet záznamov za mesiac</abbr></th>
            <th><abbr title="Title2">Cena za záznam neplatca DPH</abbr></th>
            <th><abbr title="Title3">Cena za záznam platca DPH</abbr></th>
          </tr>
          </thead>
          <tfoot>
          <?php foreach ($accountingItems as $item): ?>
          <?php if ($item->type === 'Jednoduché účtovnictvo' || $item->type === '1'): ?>
            <tr>
              <th><abbr title="Title1">do <?= $item->entries_per_month ?></abbr></th>
              <th><abbr title="Title2">do <?= $item->taxpayer_price ?> EUR</abbr></th>
              <th><abbr title="Title3">do <?= $item->non_taxpayer_price ?> EUR</abbr></th>
            </tr>
          <?php endif ?>
          <?php endforeach ?>
          </tfoot>
      </table>
    </div>
    
    <div class="col-5">
      <h3 class="u-text-center">Podvojné účtovnictvo</h3>
      <table class="table">
        <thead>
          <tr>
            <th><abbr title="Title1">Počet záznamov za mesiac</abbr></th>
            <th><abbr title="Title2">Cena za záznam neplatca DPH</abbr></th>
            <th><abbr title="Title3">Cena za záznam platca DPH</abbr></th>
          </tr>
          </thead>
          <tfoot>
          <?php foreach ($accountingItems as $item): ?>
          <?php if ($item->type === 'Podvojné účtovnictvo' || $item->type === '0'): ?>
            <tr>
              <th><abbr title="Title1">do <?= $item->entries_per_month ?></abbr></th>
              <th><abbr title="Title2">do <?= $item->taxpayer_price ?> EUR</abbr></th>
              <th><abbr title="Title3">do <?= $item->non_taxpayer_price ?> EUR</abbr></th>
            </tr>
          <?php endif ?>
          <?php endforeach ?>
          </tfoot>
      </table>
    </div>

    <div class="col-1"></div>
  </div>
</div>

<div class="row" style="padding-top: 50px">
  <div class="col-3"></div>

  <div class="col-6">
    <h3 class="u-text-center">Účtovné úkony</h3>
    <table class="table">
      <thead>
        <tr>
          <th><abbr title="Title1">Názov</abbr></th>
          <th><abbr title="Title2">Cena</abbr></th>
        </tr>
        </thead>
        <tfoot>
        <?php foreach ($accountingActivities as $activity): ?>
        <?php if ($activity->type === '0'): ?>
          <tr>
            <th><abbr title="Title1"><?= $activity->name ?></abbr></th>
            <th><abbr title="Title2"><?= $activity->price ?> €</abbr></th>
          </tr>
        <?php endif ?>
        <?php endforeach ?>
      </tfoot>
    </table>
  </div>

  <div class="col-3"></div>
</div>

<div class="row" style="padding-top: 50px">
  <div class="col-3"></div>

  <div class="col-6">
    <h3 class="u-text-center">Mzdy a personalistika</h3>
    <table class="table">
      <thead>
        <tr>
          <th><abbr title="Title1">Názov</abbr></th>
          <th><abbr title="Title2">Cena</abbr></th>
        </tr>
        </thead>
        <tfoot>
        <?php foreach ($accountingActivities as $activity): ?>
        <?php if ($activity->type === '1'): ?>
          <tr>
            <th><abbr title="Title1"><?= $activity->name ?></abbr></th>
            <th><abbr title="Title2"><?= $activity->price ?> €</abbr></th>
          </tr>
        <?php endif ?>
        <?php endforeach ?>
      </tfoot>
    </table>
  </div>

  <div class="col-3"></div>
</div>
