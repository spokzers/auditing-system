<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdfdom extends CI_Controller {



	 public function worker_pdf_gen($id){
	  $this->load->library('pdf');
	  $worker = $this->crud->get_row_by_parameter('workers', 'id', $id);
	  $data = array(
	  	'worker' => $worker[0]
	  	);
	  $this->pdf->load_view('waiting_card',$data);
	  $this->pdf->render();
	  $this->pdf->stream("worker"+$id, array('Attachment' => 0, ));

	 }



	 public function audit_report($id){
	 	$get_data = $this->input->get();

	 	// echo "<pre>";
	 	// var_dump($get_data);
	 	// echo "</pre>";

	 	if (sizeof($get_data) == 0) {
	 		$get_data = array(
	 			'img' => '1',
	 			'vio'=> '1',
	 			'email' => '0'
	 			);
	 	}

	 	// echo "<pre>";
	 	// print_r($get_data);
	 	// echo "</pre>";

	    $audit = $this->crud->get_row_by_parameter('audits','id',$id);
		$facility = $this->crud->get_row_by_parameter('facilities','id',$audit[0]->id_facility);
		$num_audit = $this->crud->get_row_count_by_parameter('audits','id_facility',$audit[0]->id_facility);
		$questions = $this->crud->get_row_by_parameter('questions', 'id_checklist', $audit[0]->id_templates);
		$answers = $this->crud->get_row_by_parameter('answers', 'id_audit', $audit[0]->id);
		$violations = $this->crud->get_row_by_parameter('violations', 'id_audit', $audit[0]->id);
		// $answers = $this->crud->get_row_by_multiple_parameter('answers','id_audit', $audit[0]->id, 'answer', 3);
		$disposals = $this->crud->get_row_by_parameter('disposal', 'id_audit', $audit[0]->id);

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
			'disposals' => $disposals,
			'number_of_audits' => $num_audit,
			'get_data' => $get_data
			);

		// var_dump($get_data);

		if($get_data['email']==0) {
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
		else{
			$url = base_url()."pdfdom/audit_report/". $id. "?img=". $get_data['img'] . "&vio=" . $get_data['vio'] . "&email=0";
			$this->sendmail($url);
		}

    }



	 public function worker_certificate_pdf_gen($id){
	 	$worker = $this->crud->get_row_by_parameter('workers','id',$id);
	 	$name = $worker[0]->name;
	 	$training_row = $this->crud->get_row_by_parameter('trainings_workers','id_worker',$id);
	 	$training = $this->crud->get_row_by_parameter('trainings','id',$training_row[0]->id_training);
	 	$trainer = $this->crud->get_row_by_parameter('trainer','id',$training[0]->id_trainer);

	  $data = array(
	  	'worker' => $worker[0],
	  	'name' => $name,
	  	'training' => $training[0],
	  	'trainer' => $trainer
	  	);

	  $this->load->library('pdf');
	  $this->pdf->load_view('certificate_template',$data);
	  $this->pdf->render();
	  $this->pdf->stream("",array('Attachment' => 0));
	}


	// EMAIL SEND FUNCTION

	public function sendmail($url){
		echo $url;
		$this->load->library('email');
		// set the admin email address
		$admin_email = 'test1@epic-e360.co.uk';
		$admin_name = 'EPIC Admin';
		$this->email->from($admin_email, $admin_name);

		$recievers = $this->crud->get_row_by_parameter('userprofiles','id_facility',6);

		foreach ($recievers as $reciever) {
			// set the reciever email address
			$this->email->to($reciever->email);
			// $this->email->cc('another@another-example.com');
			// $this->email->bcc('them@their-example.com');
			$this->email->subject('Audit Report');
			$this->email->message('Dear Sir,\n\nPlease click <a href="'. $url .'">here</a> to get the Report.\n\nRegards,\nEPIC ');

			// send the email
			$this->email->send();
		}
		echo $this->email->print_debugger();
	}

	public function disposal_report($id)
	{
		$audit = $this->crud->get_row_by_parameter('audits','id',$id);
		$facility = $this->crud->get_row_by_parameter('facilities','id',$audit[0]->id_facility);
		$disposals = $this->crud->get_row_by_parameter('disposal', 'id_audit', $audit[0]->id);

		$data = array(
			'audit' => $audit[0],
			'facility' => $facility[0],
			'disposals' => $disposals,
			);

		$this->load->library('Pdf_tc');

		    // create new PDF document
		    $pdf = new Pdf_tc(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
		    ob_start();

		    // set document information
		    $pdf->SetCreator(PDF_CREATOR);
		    $pdf->SetAuthor('');
		    $pdf->SetTitle('Disposal Report');
		    $pdf->SetSubject('Disposal Report');
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

			$html = $this->load->view('disposal_report_template', $data, true);
			// echo $html;

		    // Print text using writeHTMLCell()
		    // $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
		    $pdf->writeHTML($html, true, false, true, false, '');

		    $html = ob_get_contents();
			ob_end_clean();
		    // ---------------------------------------------------------

		    // Close and output PDF document
		    // This method has several options, check the source code documentation for more information.
		    $pdf->Output('Disposal Report', 'I');
	}









	 // ============================================================================ //
	 // +								TEST METHODS							   + //
	 // ============================================================================ //

		public function test_worker_card($id){

			$worker = $this->crud->get_row_by_parameter('workers', 'id', $id);
			$data = array(
				'worker' => $worker[0]
				);

			echo "<br>Data";
			echo "<pre>";
			var_dump($data);
			echo "</pre><br>";

			$this->load->view('waiting_card',$data);

		}

		public function test_worker_certificate($id){
			$worker = $this->crud->get_row_by_parameter('workers','id',$id);
			$name = $worker[0]->name;
			$training_row = $this->crud->get_row_by_parameter('trainings_workers','id_worker',$id);
			$training = $this->crud->get_row_by_parameter('trainings','id',$training_row[0]->id_training);
			$trainer = $this->crud->get_row_by_parameter('trainer','id',$training[0]->id_trainer);

			$data = array(
				'worker' => $worker[0],
				'name' => $name,
				'training' => $training[0],
				'trainer' => $trainer
				);

			echo "<br>Data";
			echo "<pre>";
			var_dump($data);
			echo "</pre><br>";

			$this->load->view('certificate_template',$data);

		}

		public function test_audit_report($id){

			$get_data = $this->input->get();

			echo "<pre>";
			print_r($get_data);
			echo "</pre><br><br><br>";


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
				'number_of_audits' => $num_audit,
				'get_data' => $get_data
				);

			// echo "<pre>";
			// print_r($questions);
			// echo "</pre>";
			// echo "<pre>";
			// print_r($categories);
			// echo "</pre>";
			// echo $temp_cat;

			echo "<br>Data";
			echo "<pre>";
			var_dump($data);
			echo "</pre><br>";

			$this->load->view('audit_report_template',$data);
		}
}
