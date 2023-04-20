 <?php
    include('Components/header.php');
    include('Components/sidebar.php')
    ?>

 <div class="page-content">
     <div class="main-wrapper">

         <!-- ============== Filter ============== -->
         <div class="feeAssignFilter">
             <div class="row">
                 <div class="col">
                     <div class="card">
                         <div class="card-body">
                             <h5 class="card-title">Fee Assign View</h5>
                             <form class="row g-3">

                                 <div class="col-md-3">
                                     <label class="form-label">From Date</label>
                                     <input type="date" class="form-control">
                                 </div>

                                 <div class="col-md-3">
                                     <label class="form-label">To Date</label>
                                     <input type="date" class="form-control">
                                 </div>

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
                                     <label class="form-label">Grade</label>
                                     <select class="form-select">
                                         <option selected disabled value="">-select-</option>
                                         <option value="1st">1st</option>
                                         <option value="2nd">2nd</option>
                                         <option value="3rd">3rd</option>
                                         <option value="4th">4th</option>
                                         <option value="5th">5th</option>
                                         <option value="6th">6th</option>
                                         <option value="7th">7th</option>
                                         <option value="8th">8th</option>
                                         <option value="9th">9th</option>
                                         <option value="10th">10th</option>
                                         <option value="11th">11th</option>
                                         <option value="12th">12th</option>
                                     </select>
                                 </div>

                                 <div class="col-md-3">
                                     <label class="form-label">Division</label>
                                     <select class="form-select">
                                         <option selected disabled value="">-select-</option>
                                         <option>A</option>
                                         <option>B</option>
                                         <option>C</option>
                                         <option>D</option>
                                     </select>
                                 </div>


                                 <div class="col-md-6">
                                     <label class="form-label">Search</label>
                                     <div class="input-group mb-3">
                                         <div class="input-group-prepend">
                                             <select class="form-select"
                                                 style="border-top-right-radius: 0px; border-bottom-right-radius: 0px;">
                                                 <option selected disabled value="">-select-</option>
                                                 <option value="2">Student's First Name</option>
                                                 <option value="3">Student's Middle Name</option>
                                                 <option value="4">Student's Last Name</option>
                                                 <option value="5">GR Number</option>
                                             </select>
                                         </div>
                                         <input type="text" class="form-control"
                                             aria-label="Text input with dropdown button">
                                     </div>
                                 </div>

                                 <div class="col-12">
                                     <button class="btn btn-primary " type="submit">Load Data</button>
                                     <button class="btn btn-primary " type="submit">Export Data</button>
                                 </div>

                             </form>

                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- ============= End Filter =========== -->

         <!-- ============= Fee Assign List ========= -->
         <div class="feeAssignList">
             <div class="row">

                 <div class="col-md-12 col-lg-12">
                     <div class="card table-widget">
                         <div class="card-body">
                             <h5 class="card-title">Fee Assign View</h5>
                             <div class="table-responsive">
                                 <table class="table">
                                     <thead>
                                         <tr>
                                             <th scope="col">Gr NO</th>
                                             <th scope="col">Student Name</th>
                                             <th scope="col">Student Class</th>
                                             <th scope="col">Division</th>
                                             <th scope="col">Parent Contact</th>
                                             <th scope="col">Fee Kind</th>
                                             <th scope="col">Fee Title</th>
                                             <th scope="col">Consession</th>
                                             <th scope="col"> Refund</th>
                                         </tr>
                                     </thead>
                                     <tbody>


                                         <tr>
                                             <th>77777</th>
                                             <td>Sushant Mehra</td>
                                             <td>5th</td>
                                             <td>B</td>
                                             <td>9876543223</td>
                                             <td>Tution Fee</td>
                                             <td>Convesion Quater 01</td>
                                             <td>1456</td>
                                             <td>-</td>

                                         </tr>
                                         <tr>
                                             <th>77778</th>
                                             <td>Meet Sharma</td>
                                             <td>1st</td>
                                             <td>B</td>
                                             <td>9876543223</td>
                                             <td>Tution Fee</td>
                                             <td>Convesion Quater 01</td>
                                             <td>-</td>
                                             <td>4562</td>

                                         </tr>
                                         <tr>
                                             <th>77779</th>
                                             <td>Hemant Kumavat</td>
                                             <td>3rd</td>
                                             <td>A</td>
                                             <td>9876511223</td>
                                             <td>Tution Fee</td>
                                             <td>Convesion Quater 01</td>
                                             <td>1500</td>
                                             <td>-</td>

                                         </tr>
                                         <tr>
                                             <th>77797</th>
                                             <td>Rajiv Mehra</td>
                                             <td>4th</td>
                                             <td>C</td>
                                             <td>8876543223</td>
                                             <td>Tution Fee</td>
                                             <td>Admission</td>
                                             <td>1456</td>
                                             <td>-</td>

                                         </tr>
                                         <tr>
                                             <th>77777</th>
                                             <td>Sanjeev Arora</td>
                                             <td>4th</td>
                                             <td>A</td>
                                             <td>9376543223</td>
                                             <td>Tution Fee</td>
                                             <td>Convesion Quater 01</td>
                                             <td>-</td>
                                             <td>500</td>

                                         </tr>


                                     </tbody>
                                 </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- ============ End Fee Assign List ====== -->
     </div>
 </div>

 <?php include('Components/footer.php') ?>