<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
	    parent::__construct();
	}

	public function index(){
		 if($this->crud->session_designation() == 2){
                
                $data = array(
                	'total_inspectors' => 1,
                	// 'total_facilities' => $this->crud->get_row_count_by_parameter('facilities', 'designation', 2),
                	'total_audits' => $this->crud->get_row_count_by_parameter('audits', 'id_inspector', $this->session->userdata('id')),
                	'completed_audits' => $this->crud->get_count_by_double_where('audits', 'id_inspector', $this->session->userdata('id'), 'status', 2),
                	'pending_audits' => $this->crud->get_count_by_double_where('audits', 'id_inspector', $this->session->userdata('id'), 'status', 1),
                	'time_audits' => $this->crud->get_count_by_equality_where('audits', 'doa', 'started_at', 'id_inspector', $this->session->userdata('id')),
                	'audits' => $this->crud->get_row_by_parameter('audits', 'id_inspector', $this->session->userdata('id')),
					'inspectors' => $this->crud->get_table_data('userprofiles'),
					'facilities' => $this->crud->get_table_data('facilities'),

								'warning_audits' => $this->crud->get_row_count_by_parameter('audits', 'pass', 2),
			'warn_office_audits' => $this->crud->get_row_count_by_parameter('audits', 'pass', 3),
			'office_audits' => $this->crud->get_row_count_by_parameter('audits', 'pass', 4),
			'suspension_audits' => $this->crud->get_row_count_by_parameter('audits', 'pass', 5),
			'sus_office_audits' => $this->crud->get_row_count_by_parameter('audits', 'pass', 6),
			'closure_audits' => $this->crud->get_row_count_by_parameter('audits', 'pass', 7),
			'closure_office_audits' => $this->crud->get_row_count_by_parameter('audits', 'pass', 8),
			'time_audits' => $this->crud->get_row_count_by_equality('audits', 'doa', 'started_at'),
			'all_violations_high' => $this->crud->get_sum_by_parameter('questions', 'severity', 1, 'violation'),
			'all_violations_med' => $this->crud->get_sum_by_parameter('questions', 'severity', 2, 'violation'),
			'all_violations_low' => $this->crud->get_sum_by_parameter('questions', 'severity', 3, 'violation'),

			'en_violations_high' => $this->crud->get_sum_by_two_parameter('questions', 'checklists','checklists.id = questions.id_checklist', 'section', 2,'severity', 1, 'violation'),
			'en_violations_med' => $this->crud->get_sum_by_two_parameter('questions', 'checklists','checklists.id = questions.id_checklist', 'section', 2, 'severity', 2, 'violation'),
			'en_violations_low' => $this->crud->get_sum_by_two_parameter('questions', 'checklists','checklists.id = questions.id_checklist', 'section', 2, 'severity', 3, 'violation'),

			'mk_violations_high' => $this->crud->get_sum_by_two_parameter('questions', 'checklists','checklists.id = questions.id_checklist', 'section', 3, 'severity', 1, 'violation'),
			'mk_violations_med' => $this->crud->get_sum_by_two_parameter('questions', 'checklists','checklists.id = questions.id_checklist', 'section', 3, 'severity', 2, 'violation'),
			'mk_violations_low' => $this->crud->get_sum_by_two_parameter('questions', 'checklists','checklists.id = questions.id_checklist', 'section', 3, 'severity', 3, 'violation'),
                );
                
           } elseif($this->crud->session_designation() == 6){
                $facility = $this->crud->get_row_by_parameter('userprofiles', 'id', $this->session->userdata('id'));
                $data = array(
                	
                	'total_audits' => $this->crud->get_row_count_by_parameter('audits', 'id_facility', $facility[0]->id_facility),
                	'completed_audits' => $this->crud->get_count_by_double_where('audits', 'id_facility', $facility[0]->id_facility, 'status', 2),
                	'pending_audits' => $this->crud->get_count_by_double_where('audits', 'id_facility', $facility[0]->id_facility, 'status', 1),
                	'time_audits' => $this->crud->get_count_by_equality_where('audits', 'doa', 'started_at', 'id_facility', $facility[0]->id_facility),
                	'audits' => $this->crud->get_row_by_parameter('audits', 'id_facility', $facility[0]->id_facility),
					'inspectors' => $this->crud->get_table_data('userprofiles'),
					'facilities' => $this->crud->get_table_data('facilities'),

					'completed_audits' => $this->crud->get_count_by_double_where('audits', 'status', 2, 'id_facility', $facility[0]->id_facility),
					'pending_audits' => $this->crud->get_count_by_double_where('audits', 'status', 1, 'id_facility', $facility[0]->id_facility),
					'passed_audits' => $this->crud->get_count_by_double_where('audits', 'pass', 1, 'id_facility', $facility[0]->id_facility),

								'warning_audits' => $this->crud->get_row_count_by_parameter('audits', 'pass', 2),
			'warn_office_audits' => $this->crud->get_row_count_by_parameter('audits', 'pass', 3),
			'office_audits' => $this->crud->get_row_count_by_parameter('audits', 'pass', 4),
			'suspension_audits' => $this->crud->get_row_count_by_parameter('audits', 'pass', 5),
			'sus_office_audits' => $this->crud->get_row_count_by_parameter('audits', 'pass', 6),
			'closure_audits' => $this->crud->get_row_count_by_parameter('audits', 'pass', 7),
			'closure_office_audits' => $this->crud->get_row_count_by_parameter('audits', 'pass', 8),
			'time_audits' => $this->crud->get_row_count_by_equality('audits', 'doa', 'started_at'),
			'all_violations_high' => $this->crud->get_sum_by_parameter('questions', 'severity', 1, 'violation'),
			'all_violations_med' => $this->crud->get_sum_by_parameter('questions', 'severity', 2, 'violation'),
			'all_violations_low' => $this->crud->get_sum_by_parameter('questions', 'severity', 3, 'violation'),

			'en_violations_high' => $this->crud->get_sum_by_two_parameter('questions', 'checklists','checklists.id = questions.id_checklist', 'section', 2,'severity', 1, 'violation'),
			'en_violations_med' => $this->crud->get_sum_by_two_parameter('questions', 'checklists','checklists.id = questions.id_checklist', 'section', 2, 'severity', 2, 'violation'),
			'en_violations_low' => $this->crud->get_sum_by_two_parameter('questions', 'checklists','checklists.id = questions.id_checklist', 'section', 2, 'severity', 3, 'violation'),

			'mk_violations_high' => $this->crud->get_sum_by_two_parameter('questions', 'checklists','checklists.id = questions.id_checklist', 'section', 3, 'severity', 1, 'violation'),
			'mk_violations_med' => $this->crud->get_sum_by_two_parameter('questions', 'checklists','checklists.id = questions.id_checklist', 'section', 3, 'severity', 2, 'violation'),
			'mk_violations_low' => $this->crud->get_sum_by_two_parameter('questions', 'checklists','checklists.id = questions.id_checklist', 'section', 3, 'severity', 3, 'violation'),
                );
                
           }else{

           		$data = array(
			'total_facilities' => $this->crud->get_row_count('facilities'),
			'total_inspectors' => $this->crud->get_row_count_by_parameter('userprofiles', 'designation', 2),
			'total_workers' => $this->crud->get_row_count('workers'),
			'untrained_workers' => $this->crud->get_row_count_by_parameter('workers', 'status', 2),
			'trained_workers' => $this->crud->get_row_count_by_parameter('workers', 'status', 1),
			'total_audits' => $this->crud->get_row_count('audits'),

			'audits' => $this->crud->get_table_data('audits'),
			'inspectors' => $this->crud->get_table_data('userprofiles'),
			'facilities' => $this->crud->get_table_data('facilities'),


			'completed_audits' => $this->crud->get_row_count_by_parameter('audits', 'status', 2),
			'pending_audits' => $this->crud->get_row_count_by_parameter('audits', 'status', 1),
			'passed_audits' => $this->crud->get_row_count_by_parameter('audits', 'pass', 1),
			'warning_audits' => $this->crud->get_row_count_by_parameter('audits', 'pass', 2),
			'warn_office_audits' => $this->crud->get_row_count_by_parameter('audits', 'pass', 3),
			'office_audits' => $this->crud->get_row_count_by_parameter('audits', 'pass', 4),
			'suspension_audits' => $this->crud->get_row_count_by_parameter('audits', 'pass', 5),
			'sus_office_audits' => $this->crud->get_row_count_by_parameter('audits', 'pass', 6),
			'closure_audits' => $this->crud->get_row_count_by_parameter('audits', 'pass', 7),
			'closure_office_audits' => $this->crud->get_row_count_by_parameter('audits', 'pass', 8),
			'time_audits' => $this->crud->get_row_count_by_equality('audits', 'doa', 'started_at'),
			'all_violations_high' => $this->crud->get_sum_by_parameter('questions', 'severity', 1, 'violation'),
			'all_violations_med' => $this->crud->get_sum_by_parameter('questions', 'severity', 2, 'violation'),
			'all_violations_low' => $this->crud->get_sum_by_parameter('questions', 'severity', 3, 'violation'),

			'en_violations_high' => $this->crud->get_sum_by_two_parameter('questions', 'checklists','checklists.id = questions.id_checklist', 'section', 2,'severity', 1, 'violation'),
			'en_violations_med' => $this->crud->get_sum_by_two_parameter('questions', 'checklists','checklists.id = questions.id_checklist', 'section', 2, 'severity', 2, 'violation'),
			'en_violations_low' => $this->crud->get_sum_by_two_parameter('questions', 'checklists','checklists.id = questions.id_checklist', 'section', 2, 'severity', 3, 'violation'),

			'mk_violations_high' => $this->crud->get_sum_by_two_parameter('questions', 'checklists','checklists.id = questions.id_checklist', 'section', 3, 'severity', 1, 'violation'),
			'mk_violations_med' => $this->crud->get_sum_by_two_parameter('questions', 'checklists','checklists.id = questions.id_checklist', 'section', 3, 'severity', 2, 'violation'),
			'mk_violations_low' => $this->crud->get_sum_by_two_parameter('questions', 'checklists','checklists.id = questions.id_checklist', 'section', 3, 'severity', 3, 'violation'),

		);

           }
		
		$this->load->view('base');
		$this->load->view('index', $data);
		$this->load->view('footer');
		$this->load->view('audit_view_js', $data);
		// $this->load->view('dashboard-script', $data);
		$data = array(
			'notification' => 'You have a new audit assigned to you',
			'delay' => 15000
		);
		// $this->load->view('notifications', $data);
	}

	

	}





