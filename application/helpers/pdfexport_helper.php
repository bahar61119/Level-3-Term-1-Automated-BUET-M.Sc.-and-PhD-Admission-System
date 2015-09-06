<?php
/*
* Subject                  : Export pdf using mpdf
* Author                   : Sanjay
* @Created Date    : 10-02-2012
* Version                  : CodeIgniter_2.0.3
* @Warning             : Any change in this file may cause abnormal behaviour of application.
*
*/

if ( ! function_exists('exportMeAsMPDF'))
{
            function exportMeAsMPDF($htmView,$fileName) {

                        $CI =& get_instance();
                        $CI->load->library('mpdf51/mpdf');
                       // $CI->mpdf=new mPDF('c','A4','','',32,25,27,25,16,13);
                        $CI->mpdf->AliasNbPages('[pagetotal]');
                        $CI->mpdf->SetHTMLHeader('{PAGENO}/{nb}', '1',true);
                        $CI->mpdf->SetDisplayMode('fullpage');
                        $CI->mpdf->pagenumPrefix = 'Page number ';
                        $CI->mpdf->pagenumSuffix = ' - ';
                        $CII->mpdf->nbpgPrefix = ' out of ';
                        $CI->mpdf->nbpgSuffix = ' pages';
                        $CI->mpdf->SetHeader('{PAGENO}{nbpg}');
                        $CI->mpdf = new mPDF('', 'A4', 0, '', 12, 12, 10, 10, 5, 5);
                        $style = base_url().'/source/template/css/stylesheet.css';
                        $stylesheet = file_get_contents( $style);
                        $CI->mpdf->WriteHTML($stylesheet,1);                       
                        $CI->mpdf->WriteHTML($htmView,2);                       
                        $CI->mpdf->Output('mpdf.pdf','I');
            }
}

//If you are using dompdf then use below code.

/*
* Subject          : Export pdf using dompdf
* Author           : Sanjay
* Version          : CodeIgniter_2.0.3
* Warning         : Any change in this file may cause abnormal behaviour of application.
*
*/

if ( ! function_exists('exportMeAsDOMPDF'))
{
         function exportMeAsDOMPDF($htmView,$fileName) {

                    $CI =& get_instance();
                    $CI->load->helper(array('dompdf', 'file'));
                    $CI->load->helper('file');
                    $pdfName = $fileName;
                    $pdfData = pdf_create($htmView, $pdfName);
                    write_file('Progress Repost', $pdfData);   
        }
}

/*

//              Open your controller page and inside your function write below code.

 //#Export Function goes here#
 //This Function is used for Exporting Pdf
 // Any chnage in this fuction may cause unknown behaviour
 // Author : Sanjay

$this->load->helper(‘pdfexport_helper.php’);
$urlid  = $this->uri->segment('3');

         if($urlid == "export") {

             $data['pageTitle'] = "Annual Report";
             $data['htmView'] = $this->load->view('annualreport_view',$data,TRUE);
             $templateView  = $this->load->view('../template_export',$data,TRUE);
             exportMeAsMPDF($templateView,$data['filename']);     
             OR          
             exportMeAsDOMPDF($htmView,$fileName)                                                                 
        }

// Export Pdf END here 

 */