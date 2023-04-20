<?php
include('Components/header.php');
include('Components/sidebar.php');
?>


<div class="page-content">
  <div class="main-wrapper">

    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">ACADMIC YEAR MASTER</h5>

            <form class="row g-3">

              <div class="col-md-4">
                <label class="form-label">Acadmic Year</label>
                <select class="form-select">
                  <option selected disabled value="">-select-</option>
                  <option>2020-2021</option>
                  <option>2021-2022</option>
                  <option>2022-2023</option>
                  <option>2023-2024</option>
                  <option>2024-2025</option>
                  <option>2025-2026</option>
                  <option>2026-2027</option>
                  <option>2027-2028</option>
                  <option>2028-2029</option>
                </select>
              </div>

              <div class="col-md-4">
                <label class="form-label">Acadmic Year Start</label>
                <input type="date" class="form-control">
              </div>

              <div class="col-md-4">
                <label class="form-label">Acadmic Year End</label>
                <input type="date" class="form-control">
              </div>


              <div class="col-12">
                <button class="btn btn-primary" type="submit">SAVE</button>
              </div>

            </form>

          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-body">
            <table class="table table-sm">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Acadmic Year</th>
                  <th scope="col">Year Start</th>
                  <th scope="col">Year End</th>
                  <th scope="col">Added By</th>
                  <th scope="col">Action</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>2022-2023</td>
                  <td>15/4/2022</td>
                  <td>14/4/2023</td>
                  <td>Ravi</td>
                  <td><button class="btn btn-primary">Edit</button></td>
                </tr>

              </tbody>

            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<?php include('Components/footer.php') ?>