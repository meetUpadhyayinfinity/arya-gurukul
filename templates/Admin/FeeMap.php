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
            <h5 class="card-title"> FEE MAP MASTER</h5>

            <form class="row g-3">

              <div class="col-md-3">
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

              <div class="col-md-3">
                <label class="form-label">Level</label>
                <select class="form-select">
                  <option selected disabled value="">-select-</option>
                  <option>Pre-K</option>
                  <option>Primary</option>
                  <option>Secondary</option>
                  <option>High Secondary</option>
                </select>
              </div>

              <div class="col-md-3">
                <label class="form-label">Board</label>
                <select class="form-select">
                  <option selected disabled value="">-select-</option>
                  <option>State Board</option>
                  <option>C.B.S.E.</option>
                  <option>I.B.</option>
                </select>
              </div>

              <div class="col-md-3">
                <label class="form-label">Fee Type</label>
                <select class="form-select">
                  <option selected disabled value="">-select-</option>
                  <option>Admission</option>
                  <option>Conversion</option>
                </select>
              </div>

              <div class="col-md-3">
                <label class="form-label">Admission Fee</label>
                <input type="number" class="form-control">
              </div>
              <div class="col-md-3">
                <label class="form-label">Tution Fee</label>
                <input type="number" class="form-control">
              </div>
              <div class="col-md-3">
                <label class="form-label">Term Fee</label>
                <input type="number" class="form-control">
              </div>
              <div class="col-md-3">
                <label class="form-label">Caution Money</label>
                <input type="number" class="form-control">
              </div>
              <div class="col-md-3">
                <label class="form-label">Late Fee</label>
                <input type="number" class="form-control">
              </div>
              <div class="col-md-3">
                <label class="form-label">Library Fee</label>
                <input type="number" class="form-control">
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
          <div class="card-body" style="overflow-x:auto;">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Acadmic Year</th>
                    <th scope="col">Level</th>
                    <th scope="col">Board</th>
                    <th scope="col">Fee Type</th>
                    <th scope="col">Admission Fee</th>
                    <th scope="col">Tution Fee</th>
                    <th scope="col">Term Fee</th>
                    <th scope="col">Caution Money</th>
                    <th scope="col">Late Fee</th>
                    <th scope="col">Libery Fee</th>
                    <th scope="col">Start</th>
                    <th scope="col">End</th>
                    <th scope="col">Added By</th>
                    <th scope="col">Action</th>


                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>2022-2023</td>
                    <td>Primary</td>
                    <td>C.B.S.E.</td>
                    <td>Admission</td>
                    <td>4661</td>
                    <td>55932</td>
                    <td>9322</td>
                    <td>25000</td>
                    <td>500</td>
                    <td>250</td>
                    <td>15/4/2022</td>
                    <td>14/4/2023</td>
                    <td>Ravi</td>
                    <td><button class="btn btn-primary">Edit</button></td>
                  </tr>

                  <tr>
                    <th scope="row">2</th>
                    <td>2022-2023</td>
                    <td>Primary</td>
                    <td>C.B.S.E.</td>
                    <td>Conversion</td>
                    <td>4661</td>
                    <td>55932</td>
                    <td>9322</td>
                    <td>25000</td>
                    <td>500</td>
                    <td>250</td>
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

  <!-- Javascripts -->
  <!-- <script src="../../assets/plugins/jquery/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="../../assets/plugins/perfectscroll/perfect-scrollbar.min.js"></script>
    <script src="../../assets/js/main.min.js"></script>
    </body>

    </html> -->