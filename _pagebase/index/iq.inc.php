<?php
  $url = 'http://' . $config->api->host . '/' . $config->api->base . '/0/teamstats/getTeamStats';
  //$url = "http://172.17.0.1:3001/puckiq/0/teamstats/getTeamStats";
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch);
  curl_close($ch);

  $teamstats = json_decode($result);
?>
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Welcome to PuckIQ
  </h1>
</section>

<section class="content">
  <div class="row">
    <div class="col-md-10">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Team Stats</h3>
        </div>
        <div class="box-body">
          <div id="pq-teamstats" class="table-responsive table-striped stripe">
            <table class="table table-hover no-margin">
              <thead>
                <tr>
                  <th>Team</th>
                  <th>GP</th>
                  <th>Record</th>
                  <th>GF</th>
                  <th>GA</th>
                  <th>GF%</th>
                  <th>SF</th>
                  <th>SA</th>
                  <th>SF%</th>
                  <th>CF</th>
                  <th>CA</th>
                  <th>CF%</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($teamstats as $i=>$v) { ?>
                <tr>
                  <td><?= $v->team; ?></td>
                  <td><?= $v->gp; ?></td>
                  <td><?= $v->record; ?></td>
                  <td><?= $v->gf; ?></td>
                  <td><?= $v->ga; ?></td>
                  <td><?= $v->gfpct; ?></td>
                  <td><?= $v->sf; ?></td>
                  <td><?= $v->sa; ?></td>
                  <td><?= $v->sfpct; ?></td>
                  <td><?= $v->cf; ?></td>
                  <td><?= $v->ca; ?></td>
                  <td><?= $v->cfpct; ?></td>
                </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>