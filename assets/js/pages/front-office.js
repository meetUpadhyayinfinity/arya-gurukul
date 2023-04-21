$(document).ready(function () {
    // Hide all sections by default
    $('.card .verificationSection').hide();
    $('.card .teacherSaSection').hide();
    $('.card .FeesSection').hide();
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
        $('.mainFilter').hide();
        $('.verifyFilter').show();
        $('.teacherSaFilter').hide();
        $('.feesFilter').hide();
        $('.studentRecordCard').show();
    });

    // TeacherSA Tab
    $('.processTabs .teacherSaTab').click(function () {
        $('.verificationSection').hide();
        $('.teacherSaSection').show();
        $('.FeesSection').hide();
        $('.mainFilter').hide();
        $('.verifyFilter').hide();
        $('.teacherSaFilter').show();
        $('.feesFilter').hide();
        $('.studentRecordCard').hide();
    });

    // Fees Tab
    $('.processTabs .feesTab').click(function () {
        $('.verificationSection').hide();
        $('.teacherSaSection').hide();
        $('.FeesSection').show();
        $('.mainFilter').hide();
        $('.verifyFilter').hide();
        $('.teacherSaFilter').hide();
        $('.feesFilter').show();
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