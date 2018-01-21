<section class="content-header">
  <h1>Player WOWY</h1>
</section>

<section class="content">
  <div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Options</h3>
      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse">
          <i class="fa fa-minus"></i>
        </button>
      </div>
    </div>
    <div class="box-body">
      <form>
        <div class="row">
          <div class="col-md-4 col-lg-3">
            <label>Player</label>
            <div class="form-group">
              <select name="q2player1id" id="pq-player1name" class="form-control" style="width: 100%;">
              </select>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-4 col-lg-3">
            <label>Teammate</label>
            <div class="form-group">
              <select name="q2player2id" id="pq-player2name" class="form-control" style="width: 100%;">
              </select>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-4 col-lg-3">
            <label>Minimum TOI</label>
            <div class="form-group">
              <input type="number" min="0" name="q3toi" id="pq-toi" class="form-control" value="50" style="width: 100%;">
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-4 col-lg-3">
            <label>By Date Range</label>
            <div class="form-group">
              <div class="input-daterange input-group" id="pq-daterange">
                <input type="text" class="form-control" name="q1datestart">
                <span class="input-group-addon" style="border-left: none; border-right: none;">-</span>
                <input type="text" class="form-control" name="q1dateend">
              </div>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-4 col-lg-3">
            <label>By Season</label>
            <div class="form-group">
              <select name="q1season[]" id="pq-season" class="form-control" multiple="multiple" style="width: 100%;">
              </select>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-4 col-lg-3">
            <label>Postion</label>
            <div class="form-group">
              <select name="q3postype[]" id="pq-postype" class="form-control" multiple="multiple" style="width: 100%;">
              </select>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-4 col-lg-3">
            <label>Display Options</label>
            <div class="form-group">
              <select name="q3display[]" id="pq-display" class="form-control" multiple="multiple" style="width: 100%;">
              </select>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-md-offset-4 col-lg-offset-0 col-md-4 col-lg-3">
            <label>&nbsp;</label>
            <div class="form-group">
              <button class="btn btn-default pull-right" type="submit">Go</button>
            </div>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
  </div>

  <div class="row">
    <div id="pq-wowydata" class="col-sm-12">
    </div>
  </div>
</section>