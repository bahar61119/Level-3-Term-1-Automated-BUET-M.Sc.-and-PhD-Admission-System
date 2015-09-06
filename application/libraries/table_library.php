<?php

class Table_library{

    var $TABLES = array(
        'ADMISSION_TEST'=>'ADMISSION_TEST',
        'BSC_BASIC_INFO'=>'BSC_BASIC_INFO',
        'BSC_CGPA'=>'BSC_CGPA',
        'BSC_DOCUMENT'=>'BSC_DOCUMENT',
        'BSC_MARKS'=>'BSC_MARKS',
        'BUET_GRATUDE'=>'BUET_GRATUDE',
        'BUET_MASTERS'=>'BUET_MASTERS',
        'COMMENT_ON'=>'COMMENT_ON',
        'CURRENT_ADMISSION_INFO'=>'CURRENT_ADMISSION_INFO',
        'DOCUMENT_INFO'=>'DOCUMENT_INFO',
        'ELIGIBILITY'=>'ELIGIBILITY',
        'EMPLOYEE_STATUS'=>'EMPLOYEE_STATUS',
        'HIGHER_SECONDARY'=>'HIGHER_SECONDARY',
        'HIGHER_SECONDARY_DOCUMENT'=>'HIGHER_SECONDARY_DOCUMENT',
        'HIGHER_SECONDARY_GPA'=>'HIGHER_SECONDARY_GPA',
        'HIGHER_SECONDARY_MARKS'=>'HIGHER_SECONDARY_MARKS',
        'INELIGIBILITY'=>'INELIGIBILITY',
        'JOB_EXP'=>'JOB_EXP',
        'MEMBERS'=>'MEMBERS',
        'MSC_BASIC_INFO'=>'MSC_BASIC_INFO',
        'MSC_CGPA'=>'MSC_CGPA',
        'MSC_DOCUMENT'=>'MSC_DOCUMENT',
        'MSC_MARKS'=>'MSC_MARKS',
        'PHONE'=>'PHONE',
        'PHOTO'=>'PHOTO',
        'PRE_ADMISSION'=>'PRE_ADMISSION',
        'REFERENCE'=>'REFERENCE',
        'SECONDARY'=>'SECONDARY',
        'SECONDARY_DOCUMENT'=>'SECONDARY_DOCUMENT',
        'SECONDARY_GPA'=>'SECONDARY_GPA',
        'SECONDARY_MARKS'=>'SECONDARY_MARKS',
        'STUDENT_CONTACT_INFO'=>'STUDENT_CONTACT_INFO',
        'STUDENT_PERSONAL_INFO'=>'STUDENT_PERSONAL_INFO'
    );
    
    var $TABLES_TITLE = array(
        'ADMISSION_TEST'=>'Admission Test Informaion',
        'BSC_BASIC_INFO'=>'BSc Basic Information',
        'BSC_CGPA'=>'BSc CGPA',
        'BSC_DOCUMENT'=>'BSc Document',
        'BSC_MARKS'=>'BSc Marks',
        'BUET_GRATUDE'=>'BUET Gradute',
        'BUET_MASTERS'=>'BUET Masters',
        'COMMENT_ON'=>'Comment',
        'CURRENT_ADMISSION_INFO'=>'Current Admission  Information',
        'DOCUMENT_INFO'=>'Document Information',
        'ELIGIBILITY'=>'Eligibility',
        'EMPLOYEE_STATUS'=>'Employee Status',
        'HIGHER_SECONDARY'=>'Higher Secondary Degree Information',
        'HIGHER_SECONDARY_DOCUMENT'=>'Higher Secondary Document Information',
        'HIGHER_SECONDARY_GPA'=>'Higher Secondary GPA ',
        'HIGHER_SECONDARY_MARKS'=>'Higher Secondary Marks',
        'INELIGIBILITY'=>'Ineligibility',
        'JOB_EXP'=>'Job Experience',
        'MEMBERS'=>'Members',
        'MSC_BASIC_INFO'=>'MSc Basic Information',
        'MSC_CGPA'=>'MSc CGPA',
        'MSC_DOCUMENT'=>'MSc Document',
        'MSC_MARKS'=>'MSc Marks',
        'PHONE'=>'Phone',
        'PHOTO'=>'Photo',
        'PRE_ADMISSION'=>'Previous Admission',
        'REFERENCE'=>'Reference',
        'SECONDARY'=>'Secondary Degree Information',
        'SECONDARY_DOCUMENT'=>'Secondary Document Information',
        'SECONDARY_GPA'=>'Secondary GPA',
        'SECONDARY_MARKS'=>'Secondary Marks',
        'STUDENT_CONTACT_INFO'=>'Student Contace Information',
        'STUDENT_PERSONAL_INFO'=>'Student Personal Information'
    );
    
    var $ADMISSION_TEST = array(
        'APPLICANT_SERIAL',
        'PROGRAM',
        'PRESENT_ADM_TEST',
        'MARKS'
    );
    
    var $ADMISSION_TEST_TITLE = array(
        'APPLICANT_SERIAL'=>'Applicant Serial No',
        'PROGRAM'=>'Program',
        'PRESENT_ADM_TEST'=>'Present in Admission Test',
        'MARKS'=>'Marks Obtained'
    );
    
    var $BSC_BASIC_INFO = array(
        'ID',
        'APPLICANT_SERIAL',
        'PROGRAM',
        'CER_DEG_OBT_FROM',
        'DEGREE_NAME',
        'CREDIT_TRANSFER',
        'CREDIT_EARNED',
        'CRE_EARN_WITHOUT_EXEMPTION',
        'GRADE_SYSTEM',
        'PASSING_YEAR',
        'DURATION_FROM',
        'DURATION_TO',
        'DURATION_OF_DEGREE',
        'MAJOR_FIELD_SPECIALIZATION',
        'CMT_EQUIVALENCE_COMMITTEE'
    );
    
    var $BSC_BASIC_INFO_TITLE = array(
        'ID'=>'BSc Id',
        'APPLICANT_SERIAL'=>'Applicant Serial No',
        'PROGRAM'=>'Program',
        'CER_DEG_OBT_FROM'=>'Certificate Obtained From',
        'DEGREE_NAME'=>'Degree Name',
        'CREDIT_TRANSFER'=>'Credit Transfer',
        'CREDIT_EARNED'=>'Credit Earned',
        'CRE_EARN_WITHOUT_EXEMPTION'=>'Credit Earned Without Exemption',
        'GRADE_SYSTEM'=>'Grade System',
        'PASSING_YEAR'=>'Passing Year',
        'DURATION_FROM'=>'Duration From',
        'DURATION_TO'=>'Duration To',
        'DURATION_OF_DEGREE'=>'Duration of Degree',
        'MAJOR_FIELD_SPECIALIZATION'=>'Major Field Specialization',
        'CMT_EQUIVALENCE_COMMITTEE'=>'Comment From Equivalence Committee'
    );
    
    var $BSC_CGPA = array(
        'APPLICANT_SERIAL',
        'PROGRAM',
        'BSC_ID',
        'CGPA',
        'CGPA_AB_2_5',
        'CGPA_SCALE'
    );
    
    var $BSC_CGPA_TITLE = array(
        'APPLICANT_SERIAL'=>'Applicant Serial No.',
        'PROGRAM'=>'Program',
        'BSC_ID'=>'Bsc Id',
        'CGPA'=>'CGPA',
        'CGPA_AB_2_5'=>'CGPA Above 2.5',
        'CGPA_SCALE'=>'CGPA Scale'
    );
    
    var $BSC_DOCUMENT = array(
        'APPLICANT_SERIAL',
        'PROGRAM',
        'BSC_ID',
        'TRANSCRIPT',
        'CERTIFICATE',
        'TESTIMONIAL',
        'TESTIMONIAL_AUTHORIZED_PERSON'
    );
    
    var $BSC_DOCUMENT_TITLE = array(
        'APPLICANT_SERIAL'=>'Applicant Serial No.',
        'PROGRAM'=>'Program',
        'BSC_ID'=>'BSc Id',
        'TRANSCRIPT'=>'Transcript',
        'CERTIFICATE'=>'Certificate',
        'TESTIMONIAL'=>'Testimonial',
        'TESTIMONIAL_AUTHORIZED_PERSON'=>'Testimonial From Authorized Person'
    );
    
    var $BSC_MARKS = array(
        'APPLICANT_SERIAL',
        'PROGRAM',
        'BSC_ID',
        'PER_MARKS',
        'MARKS_AB_50_PER',
        'TOTAL_MARKS'
    );
    
    var $BSC_MARKS_TITLE = array(
        'APPLICANT_SERIAL'=>'Applicant Serial No.',
        'PROGRAM'=>'Program',
        'BSC_ID'=>'BSc Id',
        'PER_MARKS'=>'Percentage Of Marks',
        'MARKS_AB_50_PER'=>'Marks Above 50 Percentage',
        'TOTAL_MARKS'=>'Total Marks'
    );
    
    var $BUET_GRATUDE = array(
        'APPLICANT_SERIAL',
        'PROGRAM',
        'BSC_ID',
        'DEPARTMENT',
        'STUDENT_ID',
        'TESTIMONIAL_DSW_PROVIDED',
        'CMT_DSW_OFFICE'
    );
    
    var $BUET_GRATUDE_TITLE = array(
        'APPLICANT_SERIAL'=>'Applicant Serial No.',
        'PROGRAM'=>'Program',
        'BSC_ID'=>'BSc Id',
        'DEPARTMENT'=>'Department',
        'STUDENT_ID'=>'Student Id',
        'TESTIMONIAL_DSW_PROVIDED'=>'Testimonial From DSW Provided',
        'CMT_DSW_OFFICE'=>'Comment From DSW office'
    );
    
    var $BUET_MASTERS = array(
        'APPLICANT_SERIAL',
        'PROGRAM',
        'MSC_ID',
        'DEPARTMENT',
        'STUDENT_ID',
        'TESTIMONIAL_DSW_PROVIDED',
        'CMT_DSW_OFFICE'
    );
    
    var $BUET_MASTERS_TITLE = array(
        'APPLICANT_SERIAL'=>'Applicant Serial No.',
        'PROGRAM'=>'Program',
        'MSC_ID'=>'MSc Id',
        'DEPARTMENT'=>'Department',
        'STUDENT_ID'=>'Student Id',
        'TESTIMONIAL_DSW_PROVIDED'=>'Testimonial From DSW Provided',
        'CMT_DSW_OFFICE'=>'Comment From DSW office'
    );
    
    var $COMMENT_ON = array(
        'APPLICANT_SERIAL',
        'COMMENTS'
    );
    
    var $COMMENT_ON_TITLE = array(
        'APPLICANT_SERIAL'=>'Applicant Serial No',
        'COMMENTS'=>'Comment'
    );
    
    
    
    var $CURRENT_ADMISSION_INFO = array(
        'APPLICANT_SERIAL',
        'PROGRAM',
        'DEPT_INST',
        'DIVISION',
        'DESIRED_STATUS',
        'PRE_ADMISSION'
    );
    
     var $CURRENT_ADMISSION_INFO_TITLE = array(
        'APPLICANT_SERIAL'=>'Applicant Serial No.',
        'PROGRAM'=>'Program',
        'DEPT_INST'=>'Department/Institute',
        'DIVISION'=>'Division',
        'DESIRED_STATUS'=>'Desired Status',
        'PRE_ADMISSION'=>'Previous admission'
    );
    
    var $DOCUMENT_INFO = array(
        'APPLICANT_SERIAL',
        'REQUIRED_MISSING_DOC',
        'EMP_LET_CONSENT_PRE_FORM',
        'CER_MEN_TOTAL_CREDIT_HR_EARNED'
    );
    
    var $DOCUMENT_INFO_TITLE = array(
        'APPLICANT_SERIAL'=>'Applicant Serial No.',
        'REQUIRED_MISSING_DOC'=>'Required Document Missing',
        'EMP_LET_CONSENT_PRE_FORM'=>'Employer\'s Letter of Consent in Prescribed Form',
        'CER_MEN_TOTAL_CREDIT_HR_EARNED'=>'Extra Certificate from Controller of Examination Mentioning Total Credit Hour Earned'
    );
    
    var $ELIGIBILITY = array(
        'APPLICANT_SERIAL',
        'FULFILL_MIN_REQUIREMENT',
        'IS_ELIGIBLE_ADM_TEST'
    );
    
    var $ELIGIBILITY_TITLE = array(
        'APPLICANT_SERIAL'=>'Applicant Serial No.',
        'FULFILL_MIN_REQUIREMENT'=>'Fulfill Minimum Requirement',
        'IS_ELIGIBLE_ADM_TEST'=>'Is Eligible For Admission Test',
    );
    
    var $EMPLOYEE_STATUS = array(
        'APPLICANT_SERIAL',
        'IS_EMPLOYED',
        'EMP_STATUS'
    );
    
    var $EMPLOYEE_STATUS_TITLE = array(
        'APPLICANT_SERIAL'=>'Applicant Serial No.',
        'IS_EMPLOYED'=>'Is Employee',
        'EMP_STATUS'=>'Employee Status'
    );
    
    var $HIGHER_SECONDARY = array(
        'APPLICANT_SERIAL',
        'CER_DEG_OBT_FROM',
        'DEGREE_NAME',
        'BOARD',
        'GRADE_SYSTEM',
        'PASSING_YEAR',
        'DURATION_FROM',
        'DURATION_TO',
        'DURATION_OF_DEGREE',
        'MAJOR_FIELD_SPECIALIZATION',
        'CMT_EQUIVALENCE_COMMITTEE'
    );
    
    var $HIGHER_SECONDARY_TITLE = array(
        'APPLICANT_SERIAL'=>'Applicant Serial No',
        'CER_DEG_OBT_FROM'=>'Cerficate Obrained From',
        'DEGREE_NAME'=>'Degree Name',
        'BOARD'=>'Board',
        'GRADE_SYSTEM'=>'Grade System',
        'PASSING_YEAR'=>'Passing Year',
        'DURATION_FROM'=>'Duration From',
        'DURATION_TO'=>'Duration To',
        'DURATION_OF_DEGREE'=>'Duration Of Degree',
        'MAJOR_FIELD_SPECIALIZATION'=>'Major Field Specialization',
        'CMT_EQUIVALENCE_COMMITTEE'=>'Comment From Equivalence Committee'
    );
    
    var $HIGHER_SECONDARY_DOCUMENT = array(
        'APPLICANT_SERIAL',
        'TRANSCRIPT',
        'CERTIFICATE'
    );
    
    var $HIGHER_SECONDARY_DOCUMENT_TITLE = array(
        'APPLICANT_SERIAL'=>'Applicant Serial No',
        'TRANSCRIPT'=>'Trancript',
        'CERTIFICATE'=>'Certificate'
    );
    
    var $HIGHER_SECONDARY_GPA = array(
        'APPLICANT_SERIAL',
        'GPA',
        'GPA_AB_3_5',
        'GPA_LESS_2',
        'GPA_SCALE'
    );
    
    var $HIGHER_SECONDARY_GPA_TITLE = array(
        'APPLICANT_SERIAL'=>'Applicant Serial No',
        'GPA'=>'GPA',
        'GPA_AB_3_5'=>'GPA above 3.5',
        'GPA_LESS_2'=>'GPA Less Than 2',
        'GPA_SCALE'=>'Grade Scale'
    );
    
    var $HIGHER_SECONDARY_MARKS = array(
        'APPLICANT_SERIAL',
        'PER_MARKS',
        'FIRST_DIV',
        'THIRD_DIV',
        'TOTAL_MARKS'
    );
    
    var $HIGHER_SECONDARY_MARKS_TITLE = array(
        'APPLICANT_SERIAL'=>'Applicant Serial No',
        'PER_MARKS'=>'Percentage of Marks',
        'FIRST_DIV'=>'First Division',
        'THIRD_DIV'=>'Third Division',
        'TOTAL_MARKS'=>'Total Marks'
    );
    
    var $INELIGIBILITY = array(
        'APPLICANT_SERIAL',
        'COMMENTS'
    );
    
    var $INELIGIBILITY_TITLE = array(
        'APPLICANT_SERIAL'=>'Applicant Serial No',
        'COMMENTS'=>'Ineligibility'
    );
    
    var $JOB_EXP = array(
        'APPLICANT_SERIAL',
        'DESIGNATION',
        'EXP_DURATION_FROM',
        'EXP_DURATION_TO',
        'EXP_ORGANIZATION',
        'JOB_DESCRIPTION'
    );
    
    var $JOB_EXP_TITLE = array(
        'APPLICANT_SERIAL'=>'Applicant Serial No',
        'DESIGNATION'=>'Degination',
        'EXP_DURATION_FROM'=>'Duration From',
        'EXP_DURATION_TO'=>'Duration To',
        'EXP_ORGANIZATION'=>'Organization Name',
        'JOB_DESCRIPTION'=>'Job Description'
    );
    
    var $MEMBERS = array(
        'ID',
        'FIRST_NAME',
        'LAST_NAME',
        'USERNAME',
        'EMAIL',
        'PASSWORD',
        'DESIGNATION',
        'ADDRESS',
        'PHONE',
        'ROLE'
    );
    
    var $MEMBERS_TITLE = array(
        'ID'=>'ID',
        'FIRST_NAME'=>'First Name',
        'LAST_NAME'=>'Last Name',
        'USERNAME'=>'Username',
        'EMAIL'=>'Email',
        'PASSWORD'=>'Password',
        'DESIGNATION'=>'Designation',
        'ADDRESS'=>'Address',
        'PHONE'=>'Phone',
        'ROLE'=>'Role'
    );
    
    var $MSC_BASIC_INFO = array(
        'ID',
        'APPLICANT_SERIAL',
        'PROGRAM',
        'CER_DEG_OBT_FROM',
        'DEGREE_NAME',
        'CREDIT_TRANSFER',
        'CREDIT_EARNED',
        'CRE_EARN_WITHOUT_EXEMPTION',
        'GRADE_SYSTEM',
        'PASSING_YEAR',
        'DURATION_FROM',
        'DURATION_TO',
        'DURATION_OF_DEGREE',
        'MAJOR_FIELD_SPECIALIZATION',
        'CMT_EQUIVALENCE_COMMITTEE'
    );
    
    var $MSC_BASIC_INFO_TITLE = array(
        'ID'=>'BSc Id',
        'APPLICANT_SERIAL'=>'Applicant Serial No',
        'PROGRAM'=>'Program',
        'CER_DEG_OBT_FROM'=>'Certificate Obtained From',
        'DEGREE_NAME'=>'Degree Name',
        'CREDIT_TRANSFER'=>'Credit Transfer',
        'CREDIT_EARNED'=>'Credit Earned',
        'CRE_EARN_WITHOUT_EXEMPTION'=>'Credit Earned Without Exemption',
        'GRADE_SYSTEM'=>'Grade System',
        'PASSING_YEAR'=>'Passing Year',
        'DURATION_FROM'=>'Duration From',
        'DURATION_TO'=>'Duration To',
        'DURATION_OF_DEGREE'=>'Duration of Degree',
        'MAJOR_FIELD_SPECIALIZATION'=>'Major Field Specialization',
        'CMT_EQUIVALENCE_COMMITTEE'=>'Comment From Equivalence Committee'
    );
    
    var $MSC_CGPA = array(
        'APPLICANT_SERIAL',
        'PROGRAM',
        'MSC_ID',
        'CGPA',
        'CGPA_AB_2_7_5',
        'CGPA_SCALE'
    );
    
    var $MSC_CGPA_TITLE = array(
        'APPLICANT_SERIAL'=>'Applicant Serial No',
        'PROGRAM'=>'Program',
        'MSC_ID'=>'MSc Id',
        'CGPA'=>'CGPA',
        'CGPA_AB_2_7_5'=>'CGPA abpve 2.75',
        'CGPA_SCALE'=>'CGPA Scale'
    );
    
    var $MSC_DOCUMENT = array(
        'APPLICANT_SERIAL',
        'PROGRAM',
        'MSC_ID',
        'TRANSCRIPT',
        'CERTIFICATE',
        'TESTIMONIAL',
        'TESTIMONIAL_AUTHORIZED_PERSON'
    );
    
    var $MSC_DOCUMENT_TITLE = array(
        'APPLICANT_SERIAL'=>'Applicant Serial No',
        'PROGRAM'=>'Program',
        'MSC_ID'=>'MSc Id',
        'TRANSCRIPT'=>'Transcript',
        'CERTIFICATE'=>'Certificate',
        'TESTIMONIAL'=>'Testimonial',
        'TESTIMONIAL_AUTHORIZED_PERSON'=>'Testimonial From Authorized Person'
    );
    
    var $MSC_MARKS = array(
        'APPLICANT_SERIAL',
        'PROGRAM',
        'MSC_ID',
        'PER_MARKS',
        'MARKS_AB_55_PER',
        'TOTAL_MARKS'
    );
    
    var $MSC_MARKS_TITLE = array(
        'APPLICANT_SERIAL'=>'Applicant Serial No',
        'PROGRAM'=>'Program',
        'MSC_ID'=>'MSc Id',
        'PER_MARKS'=>'Percentage of Marks',
        'MARKS_AB_55_PER'=>'Marks Above 55 Percentage',
        'TOTAL_MARKS'=>'Total Marks'
    );
    
    var $PHONE = array(
        'APPLICANT_SERIAL',
        'PHONE_NUM'
    );
    
    var $PHONE_TITLE = array(
        'APPLICANT_SERIAL'=>'Applicant Serial No',
        'PHONE_NUM'=>'Pnone'
    );
    
    var $PHOTO = array(
        'APPLICANT_SERIAL',
        'FILE_NAME'
    );
    
    var $PHOTO_TITLE = array(
        'APPLICANT_SERIAL'=>'Applicant Serial Np',
        'FILE_NAME'=>'Phote File Name'
    );
    
    
    
    var $PRE_ADMISSION = array(
        'APPLICANT_SERIAL',
        'PROGRAM',
        'PRE_STD_ID',
        'PRE_DEPT_INST',
        'PRE_SEMESTER'
    );
    
    var $PRE_ADMISSION_TITLE = array(
        'APPLICANT_SERIAL'=>'Application Serial No',
        'PROGRAM'=>'Program',
        'PRE_STD_ID'=>'Previous Student Id',
        'PRE_DEPT_INST'=>'Previous Department/Institute',
        'PRE_SEMESTER'=>'Previous Semester'
    );
    
    
    var $REFERENCE = array(
        'APPLICANT_SERIAL',
        'REF_NAME',
        'REF_ADDRESS',
        'REF_MOBILE'
    );
    
    var $REFERENCE_TITLE = array(
        'APPLICANT_SERIAL'=>'Applicant Serial No',
        'REF_NAME'=>'Reference Name',
        'REF_ADDRESS'=>'Reference Address',
        'REF_MOBILE'=>'Reference Mobile'
    );
    
     var $SECONDARY = array(
        'APPLICANT_SERIAL',
        'CER_DEG_OBT_FROM',
        'DEGREE_NAME',
        'BOARD',
        'GRADE_SYSTEM',
        'PASSING_YEAR',
        'DURATION_FROM',
        'DURATION_TO',
        'DURATION_OF_DEGREE',
        'MAJOR_FIELD_SPECIALIZATION',
        'CMT_EQUIVALENCE_COMMITTEE'
    );
     
     var $SECONDARY_TITLE = array(
        'APPLICANT_SERIAL'=>'Applicant Serial No',
        'CER_DEG_OBT_FROM'=>'Cerficate Obrained From',
        'DEGREE_NAME'=>'Degree Name',
        'BOARD'=>'Board',
        'GRADE_SYSTEM'=>'Grade System',
        'PASSING_YEAR'=>'Passing Year',
        'DURATION_FROM'=>'Duration From',
        'DURATION_TO'=>'Duration To',
        'DURATION_OF_DEGREE'=>'Duration Of Degree',
        'MAJOR_FIELD_SPECIALIZATION'=>'Major Field Specialization',
        'CMT_EQUIVALENCE_COMMITTEE'=>'Comment From Equivalence Committee'
    );
    
    var $SECONDARY_DOCUMENT = array(
        'APPLICANT_SERIAL',
        'TRANSCRIPT',
        'CERTIFICATE'
    );
    
    var $SECONDARY_DOCUMENT_TITLE = array(
          'APPLICANT_SERIAL'=>'Applicant Serial No',
        'TRANSCRIPT'=>'Trancript',
        'CERTIFICATE'=>'Certificate'
    );
    
    var $SECONDARY_GPA = array(
        'APPLICANT_SERIAL',
        'GPA',
        'GPA_AB_3_5',
        'GPA_LESS_2',
        'GPA_SCALE'
    );
    
    var $SECONDARY_GPA_TITLE = array(
        'APPLICANT_SERIAL'=>'Applicant Serial No',
        'GPA'=>'GPA',
        'GPA_AB_3_5'=>'GPA above 3.5',
        'GPA_LESS_2'=>'GPA Less Than 2',
        'GPA_SCALE'=>'Grade Scale'
    );
    
    var $SECONDARY_MARKS = array(
        'APPLICANT_SERIAL',
        'PER_MARKS',
        'FIRST_DIV',
        'THIRD_DIV',
        'TOTAL_MARKS'
    );
    
    var $SECONDARY_MARKS_TITLE = array(
        'APPLICANT_SERIAL'=>'Applicant Serial No',
        'PER_MARKS'=>'Percentage of Marks',
        'FIRST_DIV'=>'First Division',
        'THIRD_DIV'=>'Third Division',
        'TOTAL_MARKS'=>'Total Marks'
    );
    
    
    var $STUDENT_CONTACT_INFO = array(
        'APPLICANT_SERIAL',
        'PRESENT_ADDRESS',
        'PERMAMENT_ADDRESS',
        'EMAIL'
    );
    
    var $STUDENT_CONTACT_INFO_TITLE = array(
        'APPLICANT_SERIAL'=>'Applicant Serial No',
        'PRESENT_ADDRESS'=>'Present Address',
        'PERMAMENT_ADDRESS'=>'Permanent Address',
        'EMAIL'=>'Email'
    );
    
    var $STUDENT_PERSONAL_INFO = array(
        'APPLICANT_SERIAL',
        'APPLICANT_NAME',
        'FATHER_NAME',
        'MOTHER_NAME',
        'BIRTH_DATE',
        'BIRTH_PLACE',
        'SEX',
        'MARITAL_STATUS',
        'NATIONALITY',
        'RELIGION'
    );
    
    var $STUDENT_PERSONAL_INFO_TITLE = array(
        'APPLICANT_SERIAL'=>'Applicant Serial No',
        'APPLICANT_NAME'=>'Name',
        'FATHER_NAME'=>'Father\'s Name',
        'MOTHER_NAME'=>'Mother\'s Name',
        'BIRTH_DATE'=>'Birthday',
        'BIRTH_PLACE'=>'Birth Place',
        'SEX'=>'Sex',
        'MARITAL_STATUS'=>'Marital Status',
        'NATIONALITY'=>'Nationality',
        'RELIGION'=>'Religion'
    );

    
    
}
