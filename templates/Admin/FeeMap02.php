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
                  <option>Primary</option>
                  <option>Secondary</option>
                  <option>High Secondary</option>
                </select>
              </div>

              <div class="col-md-3">
                <label class="form-label">Grade</label>
                <select class="form-select">
                  <option selected disabled value="">-select-</option>
                  <option>1st</option>
                  <option>1st Open Category</option>
                  <option>2nd</option>
                  <option>3rd</option>
                  <option>4th</option>
                  <option>5th</option>
                  <option>6th</option>
                  <option>7th</option>
                  <option>8th</option>
                  <option>9th</option>
                  <option>10th</option>
                  <option>11th</option>
                  <option>12th</option>

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
                <label class="form-label">Fee Kind</label>
                <select class="form-select">
                  <option selected disabled value="">-select-</option>
                  <option>Admission</option>
                  <option>Conversion</option>
                </select>
              </div>

              <div class="col-md-3">
                <label class="form-label">Fee Title</label>
                <select class="form-select">
                  <option selected disabled value="">-select-</option>
                  <option>Admission Fee</option>
                  <option>Caution Money</option>
                  <option>Bridge Lesson</option>
                  <option>1st Qtr Tuition Fee</option>
                  <option>2nd Qtr Tuition Fee</option>
                  <option>3rd Qtr Tuition Fee</option>
                  <option>4th Qtr Tuition Fee</option>
                  <option>1st Qtr Term Fee</option>
                  <option>3rd Qtr Term Fee</option>
                </select>
              </div>

              <div class="col-md-3">
                <label class="form-label">Amount</label>
                <input type="text" class="form-control">
              </div>

              <div class="col-md-3">
                <label class="form-label">Late Fee</label>
                <input type="text" class="form-control">
                <div class="form-text">
                  Late fee ${amount} will charge on daily basis after the due date.
                </div>
              </div>

              <div class="col-md-3">
                <label class="form-label">Due Date Start</label>
                <input type="date" class="form-control">
              </div>

              <div class="col-md-3">
                <label class="form-label">Due Date End</label>
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
          <div class="card-body" style="overflow-x:auto;">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Acadmic Year</th>
                    <th scope="col">Level</th>
                    <th scope="col">Grade</th>
                    <th scope="col">Board</th>
                    <th scope="col">Fee Kind</th>
                    <th scope="col">Fee Title</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Late Fee</th>
                    <th scope="col">Due Date Start</th>
                    <th scope="col">Due Date End</th>
                    <th scope="col">Added By</th>
                    <th scope="col">Action</th>


                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>2022-2023</td>
                    <td>Primary</td>
                    <td>2nd</td>
                    <td>C.B.S.E.</td>
                    <td>Admission</td>
                    <td>Admission Fee</td>
                    <td>4668</td>
                    <td>30</td>
                    <td>15/04/2023</td>
                    <td>15/05/2023</td>
                    <td>Ravi</td>
                    <td><button class="btn btn-primary">Edit</button></td>
                  </tr>

                  <tr>
                    <th scope="row">2</th>
                    <td>2022-2023</td>
                    <td>Primary</td>
                    <td>2nd</td>
                    <td>C.B.S.E.</td>
                    <td>Admission</td>
                    <td>Caution Money</td>
                    <td>25000</td>
                    <td>30</td>
                    <td>15/04/2023</td>
                    <td>15/05/2023</td>
                    <td>Ravi</td>
                    <td><button class="btn btn-primary">Edit</button></td>
                  </tr>

                  <tr>
                    <th scope="row">3</th>
                    <td>2022-2023</td>
                    <td>Primary</td>
                    <td>2nd</td>
                    <td>C.B.S.E.</td>
                    <td>Conversion</td>
                    <td>1st Quarter Tuition Fee</td>
                    <td>14004</td>
                    <td>30</td>
                    <td>15/04/2023</td>
                    <td>15/05/2023</td>
                    <td>Ravi</td>
                    <td><button class="btn btn-primary">Edit</button></td>
                  </tr>

                  <tr>
                    <th scope="row">4</th>
                    <td>2022-2023</td>
                    <td>Primary</td>
                    <td>2nd</td>
                    <td>C.B.S.E.</td>
                    <td>Conversion</td>
                    <td>1st Quarter Term Fee</td>
                    <td>4668</td>
                    <td>30</td>
                    <td>15/04/2023</td>
                    <td>15/05/2023</td>
                    <td>Ravi</td>
                    <td><button class="btn btn-primary">Edit</button></td>
                  </tr>

                  <tr>
                    <th scope="row">5</th>
                    <td>2022-2023</td>
                    <td>Primary</td>
                    <td>2nd</td>
                    <td>C.B.S.E.</td>
                    <td>Conversion</td>
                    <td>2nd Quarter Tuition Fee</td>
                    <td>14004</td>
                    <td>30</td>
                    <td>15/07/2023</td>
                    <td>15/08/2023</td>
                    <td>Ravi</td>
                    <td><button class="btn btn-primary">Edit</button></td>
                  </tr>

                  <tr>
                    <th scope="row">6</th>
                    <td>2022-2023</td>
                    <td>Primary</td>
                    <td>2nd</td>
                    <td>C.B.S.E.</td>
                    <td>Conversion</td>
                    <td>3rd Quarter Tuition Fee</td>
                    <td>14004</td>
                    <td>30</td>
                    <td>15/10/2023</td>
                    <td>15/11/2023</td>
                    <td>Ravi</td>
                    <td><button class="btn btn-primary">Edit</button></td>
                  </tr>

                  <tr>
                    <th scope="row">7</th>
                    <td>2022-2023</td>
                    <td>Primary</td>
                    <td>2nd</td>
                    <td>C.B.S.E.</td>
                    <td>Conversion</td>
                    <td>3rd Quarter Term Fee</td>
                    <td>4668</td>
                    <td>30</td>
                    <td>15/10/2023</td>
                    <td>15/11/2023</td>
                    <td>Ravi</td>
                    <td><button class="btn btn-primary">Edit</button></td>
                  </tr>

                  <tr>
                    <th scope="row">8</th>
                    <td>2022-2023</td>
                    <td>Primary</td>
                    <td>2nd</td>
                    <td>C.B.S.E.</td>
                    <td>Conversion</td>
                    <td>4th Quarter Tuition Fee</td>
                    <td>14004</td>
                    <td>30</td>
                    <td>15/12/2023</td>
                    <td>15/01/2024</td>
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
</div>

<?php include('Components/footer.php') ?>