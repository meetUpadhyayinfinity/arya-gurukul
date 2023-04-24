$(document).ready(function () {
    // Hide all sections by default
    $('.card .verificationSection').hide();
    $('.card .teacherSaSection').hide();
    $('.card .FeesSection').hide();
    // Filter
    $('.verifyFilter').hide();
    $('.teacherSaFilter').hide();
    $('.feesFilter').hide();
    $('.studentRecordCard').hide();

    // ====== Show/hide sections when tabs are clicked ======
    // Verification Tab
    $('.processTabs .verificationTab').click(function () {
        $('.verificationSection').show();
        $('.teacherSaSection').hide();
        $('.FeesSection').hide();
        // Filter
        $('.mainFilter').hide();
        $('.verifyFilter').hide();
        $('.teacherSaFilter').show();
        $('.feesFilter').hide();
        // Buckets
        $('.studentRecordCard').show();
    });

    // TeacherSA Tab
    $('.processTabs .teacherSaTab').click(function () {
        $('.verificationSection').hide();
        $('.teacherSaSection').show();
        $('.FeesSection').hide();
        // Filter
        $('.mainFilter').hide();
        $('.verifyFilter').hide();
        $('.teacherSaFilter').show();
        $('.feesFilter').hide();
        // Buckets
        $('.studentRecordCard').hide();
    });

    // Fees Tab
    $('.processTabs .feesTab').click(function () {
        $('.verificationSection').hide();
        $('.teacherSaSection').hide();
        $('.FeesSection').show();
        // Filter
        $('.mainFilter').hide();
        $('.verifyFilter').hide();
        $('.teacherSaFilter').show();
        $('.feesFilter').hide();
        // Buckets
        $('.studentRecordCard').hide();
    });
});

// ================= Conversion Form appear ===================
var verifyButton = document.querySelector('.verifyButton');
var conversionForm = document.querySelector('.conversionForm');
var backButton = document.querySelector('.backButton');

verifyButton.addEventListener('click', function () {
    conversionForm.style.display = 'block';
    document.querySelector('.verifyStudentList').style.display = 'none';
});

backButton.addEventListener('click', function () {
    conversionForm.style.display = 'none';
    document.querySelector('.verifyStudentList').style.display = 'block';
});

// ================= Fee Pay Appear ====================

var payFeesButton = document.querySelector('.feePayBtn');
var feePayBox = document.querySelector('.feePayBox');
var closeButton = document.querySelector('.closeButton');

payFeesButton.addEventListener('click', function () {
    feePayBox.style.display = 'block';
});

closeButton.addEventListener('click', function () {
    feePayBox.style.display = 'none';
});
