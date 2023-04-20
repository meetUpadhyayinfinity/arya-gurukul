<?php
include('Components/header.php');
include('Components/sidebar.php');
?>

<div class="page-content">
    <div class="main-wrapper">
        <!-- ======== Filter ============= -->
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Another Form Request</h5>
                        <form class="row g-3">

                            <div class="col-md-4">
                                <label class="form-label">From Date</label>
                                <input type="date" class="form-control">
                            </div>

                            <div class="col-md-4">
                                <label class="form-label">To Date</label>
                                <input type="date" class="form-control">
                            </div>

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

                            <div class="col-12">
                                <label class="form-label">Search</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <select class="form-select" style="border-top-right-radius: 0px; border-bottom-right-radius: 0px;">
                                            <option selected disabled value="">-select-</option>
                                            <option value="2">Parents's First Name</option>
                                            <option value="3">Parents's Middle Name</option>
                                            <option value="4">Parents's Last Name</option>
                                            <option value="5">Admission Form Number</option>
                                        </select>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                                </div>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary " type="submit">Search</button>

                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

        <!-- ======== End Filter ========= -->
        <div class="row">

            <div class="col-md-12 col-lg-12">
                <div class="card table-widget">
                    <div class="card-body">
                        <h5 class="card-title">Form Request List</h5>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">UID</th>
                                        <th scope="col">Parent Name</th>
                                        <th scope="col">Parent Contact</th>
                                        <th scope="col">Number of Forms</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <th>0001</th>
                                        <td>Sushant Mehra</td>
                                        <td>9844543223</td>
                                        <td>1</td>
                                        <td>22-2-2023</td>
                                        <td>
                                            <select class="form-select">
                                                <option>Hold</option>
                                                <option>Approve</option>
                                            </select>
                                        </td>

                                    </tr>

                                    <tr>
                                        <th>0002</th>
                                        <td>Asma Khan</td>
                                        <td>9876543223</td>
                                        <td>2</td>
                                        <td>24-2-2023</td>
                                        <td>
                                            <select class="form-select">

                                                <option>Hold</option>
                                                <option>Approve</option>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>0004</th>
                                        <td>Arijit Singh</td>
                                        <td>7676543221</td>
                                        <td>1</td>
                                        <td>25-2-2023</td>
                                        <td>
                                            <select class="form-select">

                                                <option>Hold</option>
                                                <option>Approve</option>
                                            </select>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ======= Form Request List =========== -->
    </div>
</div>

<?php include('Components/footer.php'); ?>