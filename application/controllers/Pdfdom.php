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

	 	$this->load->library('pdf');
	 	$this->pdf->load_view('audit_report_template', $data);
	 	$this->pdf->render();
	 	$this->pdf->stream("", array('Attachment' => 0));
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

			$post_data = $this->input->get();

			echo "<pre>";
			print_r($post_data);
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
				'number_of_audits' => $num_audit
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
