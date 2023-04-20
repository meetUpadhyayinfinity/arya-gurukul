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
            <h5 class="card-title">STANDARD MASTER</h5>

            <form class="row g-3">

              <div class="col-md-4">
                <label class="form-label">Level</label>
                <select class="form-select">
                  <option selected disabled value="">-select-</option>
                  <option>Pre-K</option>
                  <option>Primary</option>
                  <option>Secondary</option>
                  <option>High Secondary</option>
                </select>
              </div>

              <div class="col-md-4">
                <label class="form-label">Name</label>
                <input type="text" class="form-control">
              </div>

              <div class="col-md-4">
                <label class="form-label">Description</label>
                <input type="text" class="form-control">
              </div>

              <div class="col-md-4">
                <label class="form-label">Start</label>
                <input type="date" class="form-control">
              </div>

              <div class="col-md-4">
                <label class="form-label">End</label>
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
                  <th scope="col">Level</th>
                  <th scope="col">Name</th>
                  <th scope="col">Description</th>
                  <th scope="col">Start</th>
                  <th scope="col">End</th>
                  <th scope="col">Added By</th>
                  <th scope="col">Action</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Primary</td>
                  <td>1st</td>
                  <td>1st</td>
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