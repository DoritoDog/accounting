<div class="hero fullscreen" style="background-image: url('<?= $this->Url->image('download.jpg'); ?>'); background-position: center; background-size: cover;">
  <div class="hero-body u-center">
    <div class="w-90" style="position: relative">
      <div class="row">
        <div class="col-6" style="padding: 2rem;">
          <h1 style="color: white">Studio 33/6</h1>
          <p class="lead" style="color: white">Profesionálne účtovnictvo pre všetky podnikateľské činnosti.</p>

          <div class="r" style="color: white">
            <b>V meste <div class="tag tag--link">NITRA</div></b>
          </div>

          <button class="btn btn-light"><?= $this->Html->link('Objednajte si konzultáciu', ['controller' => 'Pricing', 'action' => 'index', 'class' => 'utb utb-OLR']); ?></button>

        </div>

        <div class="col-6" style="padding: 2rem;">
          <img src="https://www.topaccountingdegrees.org/wp-content/uploads/2016/01/accounting-9.jpg" />
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row" style="padding-top: 50px">
  <div class="col-2"></div>
  <div class="col-8">
    <h2 class="u-text-center">Naše služby</h2>

    <table class="table">
      <thead>
        <tr>
          <th>Cena účtovného úkonu</th>
          <th>Cena</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Zavedenie novej firmy</td>
          <td>40,00 €</td>
        </tr>
        <tr>
          <td>Vystavenie faktúry</td>
          <td>2,00 €</td>
        </tr>
        <tr>
          <td>Vypracovanie daňového priznania k DPH+ kontrolný a súhrnný výkaz</td>
          <td>40,00 €</td>
        </tr>

        <tr>
          <td>Vypracovanie daňového priznania k dani z príjmov právnických osôb + účtovné závierky </td>
          <td>250,00 €</td>
        </tr>
        <tr>
          <td>Vypracovanie poznámok k účtovnej závierke </td>
          <td>od 50 €</td>
        </tr>
        <tr>
          <td>Vypracovanie daňového priznania k dani z príjmov fyzických osôb (typ A)</td>
          <td>od 20 €</td>
        </tr>
        <tr>
          <td>Vypracovanie daňového priznania k dani z príjmov fyzických osôb (typ B)</td>
          <td>od 40 €</td>
        </tr>
        <tr>
          <td>Vypracovanie daňového priznania k dani z motorových vozidiel</td>
          <td>20€/vozidlo</td>
        </tr>
        <tr>
          <td>Vypracovanie výkazu o príjmoch a výdavkoch</td>
          <td>od 25 EUR</td>
        </tr>
        <tr>
          <td>Vypracovanie výkazu o majetku a záväzkoch</td>
          <td>od 25 EUR</td>
        </tr>
        <tr>
          <td>Vypracovanie mimoriadnej alebo individuálnej účtovnej závierky + poznámky</td>
          <td>od 400 EUR</td>
        </tr>
      </tbody>
    </table>

    <div class="u-text-center"><?= $this->Html->link('Zobraziť všetký', ['controller' => 'Pricing', 'action' => 'index']); ?></div>
  </div>
  <div class="col-2"></div>
</div>