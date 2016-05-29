<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tc_pdf extends CI_Controller {

	public function create_pdf($id) {
		    $audit = $this->crud->get_row_by_parameter('audits','id',$id);
			$facility = $this->crud->get_row_by_parameter('facilities','id',$audit[0]->id_facility);
			$num_audit = $this->crud->get_row_count_by_parameter('audits','id_facility',$audit[0]->id_facility);
			$questions = $this->crud->get_row_by_parameter('questions', 'id_checklist', $audit[0]->id_templates);
			$answers = $this->crud->get_row_by_parameter('answers', 'id_audit', $audit[0]->id);
			$violations = $this->crud->get_row_by_parameter('violations', 'id_audit', $audit[0]->id);
			// $answers = $this->crud->get_row_by_multiple_parameter('answers','id_audit', $audit[0]->id, 'answer', 3);

			$categories = [];
			$temp_cat = $questions[0]->category;

			$categories[] = $temp_cat;

			for ($i=0; $i < sizeof($questions); $i++) {
				$dummy_question = $questions[$i];
				if ($temp_cat != $dummy_question->category) {
					$categories[] = $dummy_question->category;
					$temp_cat = $questions[$i]->category;
				}
			}

			$data = array(
				'audit' => $audit[0],
				'facility' => $facility[0],
				'questions' => $questions,
				'categories' => $categories,
				'answers' => $answers,
				'violations' => $violations,
				'number_of_audits' => $num_audit
				);

			$this->load->library('Pdf_tc');


		    // create new PDF document
		    $pdf = new Pdf_tc(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
		    ob_start();

		    // set document information
		    $pdf->SetCreator(PDF_CREATOR);
		    $pdf->SetAuthor('');
		    $pdf->SetTitle('Audit Report');
		    $pdf->SetSubject('Audit Report');
		    $pdf->SetKeywords('');

		    // set default header data
		    // $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
		    // $pdf->setFooterData(array(0,64,0), array(0,64,128));

		    // set header and footer fonts
		    // $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		    // $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

		    // set default monospaced font
		    $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

		    // set margins
		    $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		    $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
		    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

		    // set auto page breaks
		    $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

		    // set image scale factor
		    $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

		    // set some language-dependent strings (optional)
		    if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
		        require_once(dirname(__FILE__).'/lang/eng.php');
		        $pdf->setLanguageArray($l);
		    }

		    // ---------------------------------------------------------

		    // set default font subsetting mode
		    $pdf->setFontSubsetting(true);

		    // Set font
		    // dejavusans is a UTF-8 Unicode font, if you only need to
		    // print standard ASCII chars, you can use core fonts like
		    // helvetica or times to reduce file size.
		    $pdf->SetFont('dejavusans', '', 14, '', true);
		    // $pdf->SetFont('aealarabiya', '', 18);
		    // $pdf->SetFont('aefurat', '', 18, '' , true);

		    // Add a page
		    // This method has several options, check the source code documentation for more information.
		    $pdf->AddPage();

			$html = $this->load->view('audit_report_template', $data, true);
			// echo $html;

		    // Print text using writeHTMLCell()
		    // $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
		    $pdf->writeHTML($html, true, false, true, false, '');

		    $html = ob_get_contents();
			ob_end_clean();
		    // ---------------------------------------------------------

		    // Close and output PDF document
		    // This method has several options, check the source code documentation for more information.
		    $pdf->Output('Audit Report', 'I');

    }
}

/* End of file Tc_pdf.php */
/* Location: ./application/controllers/Tc_pdf.php */