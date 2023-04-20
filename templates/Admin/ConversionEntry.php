<?php
include('Components/header.php');
include('Components/sidebar.php')
?>

<div class="page-content">
    <div class="main-wrapper">

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">CONVERSION ENTRY</h5>

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

                            <div class="col-md-9">
                                <label class="form-label">Search</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <select class="form-select" style="border-top-right-radius: 0px; border-bottom-right-radius: 0px;">
                                            <option selected disabled value="">-select-</option>
                                            <option value="1">Student's First Name</option>
                                            <option value="2">Student's Middle Name</option>
                                            <option value="3">Student's Last Name</option>
                                            <option value="4">Father Name</option>
                                            <option value="5">Mother Name</option>
                                            <option value="6">Primary Email</option>
                                            <option value="7">Mobile Number</option>
                                            <option value="8">GR Number</option>
                                            <option value="9">AadharNumber</option>
                                            <option value="11">Caste</option>
                                            <option value="12">Blood Group</option>
                                            <option value="13">House</option>
                                            <option value="14">Religion</option>
                                            <option value="15">City</option>
                                            <option value="16">PinCode</option>
                                        </select>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                </div>
                            </div>





                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">LOAD DATA</button>
                                <button class="btn btn-primary" type="submit">EXPORT DATA</button>
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
                                        <th scope="col">Acadmic Session</th>
                                        <th scope="col">Grade Applying</th>
                                        <th scope="col">GR No.</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Middle Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Student Photo</th>
                                        <th scope="col">Father Name</th>
                                        <th scope="col">Father Photo</th>
                                        <th scope="col">Mother Name</th>
                                        <th scope="col">Mother Photo</th>
                                        <th scope="col">Date of Birth</th>
                                        <th scope="col">Blood Group</th>
                                        <th scope="col">House</th>
                                        <th scope="col">Religion</th>
                                        <th scope="col">Caste</th>
                                        <th scope="col">Caste Certificate</th>
                                        <th scope="col">Presently Study in Grade</th>
                                        <th scope="col">Presently Study in Section</th>
                                        <th scope="col">Student Aadhar Number</th>
                                        <th scope="col">Student Aadhar Front</th>
                                        <th scope="col">Student Aadhar Back</th>
                                        <th scope="col">Address Line 1</th>
                                        <th scope="col">Address Line 2</th>
                                        <th scope="col">State</th>
                                        <th scope="col">City</th>
                                        <th scope="col">Pincode</th>
                                        <th scope="col">Primary Contact No.</th>
                                        <th scope="col">Primary Email</th>
                                        <th scope="col">Secondary Contact No.</th>
                                        <th scope="col">Secondary Email</th>
                                        <th scope="col">Created on</th>
                                        <th scope="col">Modified on</th>
                                        <th scope="col">Action </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>2022-2023</td>
                                        <td>4th</td>
                                        <td>2856</td>
                                        <td>Abeer</td>
                                        <td>Kumar</td>
                                        <td>Mehra</td>
                                        <td><img src="/assets/images/studentphoto.jpg" width="100">
                                        </td>
                                        <td>Ravi Kumar Mehra</td>
                                        <td><img src="/assets/images/fatherphoto.jpg" width="100"></td>
                                        <td>Pihu Kumar Mehra</td>
                                        <td><img src="/assets/images/motherphoto.jpg" width="100"></td>
                                        <td>23/08/2016</td>
                                        <td>B+</td>
                                        <td>Agni</td>
                                        <td>Sikh</td>
                                        <td>OBC</td>
                                        <td><img src="/assets/images/castecertificate.jpg" width="100">
                                        </td>
                                        <td>3rd</td>
                                        <td>B</td>
                                        <td>991155447788</td>
                                        <td><img src="/assets/images/aadharfront.jpg" width="100"></td>
                                        <td><img src="/assets/images/aadharback.jpg" width="100"></td>
                                        <td>XYZ Street</td>
                                        <td>ABC Building</td>
                                        <td>Punjab</td>
                                        <td>Batala</td>
                                        <td>143505</td>
                                        <td>+91 9023607749</td>
                                        <td>ravi.mehra@keyframemedia.in</td>
                                        <td>+91 9023607749</td>
                                        <td>ravi.mehra@stapledesign.in</td>
                                        <td>23/06/2022 13:45:55</td>
                                        <td>23/06/2022 13:45:55</td>
                                        <td><button class="btn btn-primary">Edit</button></td>
                                    </tr>

                                    <tr>
                                        <th scope="row">1</th>
                                        <td>2022-2023</td>
                                        <td>4th</td>
                                        <td>2856</td>
                                        <td>Abeer</td>
                                        <td>Kumar</td>
                                        <td>Mehra</td>
                                        <td><img src="/assets/images/studentphoto.jpg" width="100">
                                        </td>
                                        <td>Ravi Kumar Mehra</td>
                                        <td><img src="/assets/images/fatherphoto.jpg" width="100"></td>
                                        <td>Pihu Kumar Mehra</td>
                                        <td><img src="/assets/images/motherphoto.jpg" width="100"></td>
                                        <td>23/08/2016</td>
                                        <td>B+</td>
                                        <td>Agni</td>
                                        <td>Sikh</td>
                                        <td>OBC</td>
                                        <td><img src="/assets/images/castecertificate.jpg" width="100">
                                        </td>
                                        <td>3rd</td>
                                        <td>B</td>
                                        <td>991155447788</td>
                                        <td><img src="/assets/images/aadharfront.jpg" width="100"></td>
                                        <td><img src="/assets/images/aadharback.jpg" width="100"></td>
                                        <td>XYZ Street</td>
                                        <td>ABC Building</td>
                                        <td>Punjab</td>
                                        <td>Batala</td>
                                        <td>143505</td>
                                        <td>+91 9023607749</td>
                                        <td>ravi.mehra@keyframemedia.in</td>
                                        <td>+91 9023607749</td>
                                        <td>ravi.mehra@stapledesign.in</td>
                                        <td>23/06/2022 13:45:55</td>
                                        <td>23/06/2022 13:45:55</td>

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