<?php

class Event_model extends CI_Model{

    public $prefs;
	public function __construct()
	{
		parent::__construct();
		//parent::Model();
		$this->prefs = array(
			'start_day'    => '',
			'month_type'   => 'long',
			'day_type'     => 'short',
			'show_next_prev' => TRUE,
			'next_prev_url'   => base_url().'event/date',
		);
 		$this->prefs['template'] = '

		 	{table_open}<table border="0" cellpadding="0" cellspacing="0">{/table_open}

			{heading_row_start}<tr>{/heading_row_start}

			{heading_previous_cell}<th class="calend"><a href="{previous_url}" class="prev"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="26px" height="26px" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="#FF9900" d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/></svg></a></th>{/heading_previous_cell}
			{heading_title_cell}<th id="heading" colspan="{colspan}">{heading}</th>{/heading_title_cell}
			{heading_next_cell}<th><a href="{next_url}" class="nxt"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="26px" height="26px" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="#FF9900" d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/></svg></a></th>{/heading_next_cell}

			{heading_row_end}</tr>{/heading_row_end}

			{week_row_start}<tr>{/week_row_start}
			{week_day_cell}<td>{week_day}</td>{/week_day_cell}
			{week_row_end}</tr>{/week_row_end}

			{cal_row_start}<tr>{/cal_row_start}
			{cal_cell_start}<td>{/cal_cell_start}
			{cal_cell_start_today}<td>{/cal_cell_start_today}
			{cal_cell_start_other}<td class="other-month" style="color:#e3e3e3;">{/cal_cell_start_other}

			{cal_cell_content}<div class="event"><a data-toggle="modal" class="event" href="#eventDetailsModal" data-target="#eventDetailsModal"><span id="day">{day}</span><br><span id="title"></span></a></div>{/cal_cell_content}
			{cal_cell_content_today}<div class="highlight"><a href="{content}"><span id="day">{day}</span><br><span id="title"></span></a></div>{/cal_cell_content_today}

			{cal_cell_no_content}{day}{/cal_cell_no_content}
			{cal_cell_no_content_today}<div class="highlight">{day}</div>{/cal_cell_no_content_today}

			{cal_cell_blank}&nbsp;{/cal_cell_blank}

			{cal_cell_other}{day}{/cal_cel_other}

			{cal_cell_end}</td>{/cal_cell_end}
			{cal_cell_end_today}</td>{/cal_cell_end_today}
			{cal_cell_end_other}</td>{/cal_cell_end_other}
			{cal_row_end}</tr>{/cal_row_end}

			{table_close}</table>{/table_close}
	 	';

		$this->prefsDashboard = array(
			'start_day'    => '',
			'month_type'   => 'long',
			'day_type'     => 'short',
			'show_next_prev' => TRUE,
			'next_prev_url'   => base_url().'dashboard/date',
		);
 		$this->prefsDashboard['template'] = '

			{table_open}<table border="0" cellpadding="0" cellspacing="0">{/table_open}

			{heading_row_start}<tr>{/heading_row_start}

			{heading_previous_cell}<th class="calend"><a href="{previous_url}" class="prev"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="26px" height="26px" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="#FF9900" d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/></svg></a></th>{/heading_previous_cell}
			{heading_title_cell}<th id="heading" colspan="{colspan}">{heading}</th>{/heading_title_cell}
			{heading_next_cell}<th><a href="{next_url}" class="nxt"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="26px" height="26px" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="#FF9900" d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/></svg></a></th>{/heading_next_cell}

			{heading_row_end}</tr>{/heading_row_end}

			{week_row_start}<tr>{/week_row_start}
			{week_day_cell}<td>{week_day}</td>{/week_day_cell}
			{week_row_end}</tr>{/week_row_end}

			{cal_row_start}<tr>{/cal_row_start}
			{cal_cell_start}<td>{/cal_cell_start}
			{cal_cell_start_today}<td>{/cal_cell_start_today}
			{cal_cell_start_other}<td class="other-month" style="color:#e3e3e3;">{/cal_cell_start_other}

			{cal_cell_content}<div class="event"><a data-toggle="modal" class="event" href="#eventDetailsModal" data-target="#eventDetailsModal"><span id="day">{day}</span><br><span id="title"></span></a></div>{/cal_cell_content}
			{cal_cell_content_today}<div class="highlight"><a href="{content}"><span id="day">{day}</span><br><span id="title"></span></a></div>{/cal_cell_content_today}

			{cal_cell_no_content}{day}{/cal_cell_no_content}
			{cal_cell_no_content_today}<div class="highlight">{day}</div>{/cal_cell_no_content_today}

			{cal_cell_blank}&nbsp;{/cal_cell_blank}

			{cal_cell_other}{day}{/cal_cel_other}

			{cal_cell_end}</td>{/cal_cell_end}
			{cal_cell_end_today}</td>{/cal_cell_end_today}
			{cal_cell_end_other}</td>{/cal_cell_end_other}
			{cal_row_end}</tr>{/cal_row_end}

			{table_close}</table>{/table_close}
		';
    }

	public function getcalendar($year , $month)
	{
		$this->load->library('calendar',$this->prefs); // Load calender library
		$data = $this->get_calendar_data($year, $month);
		// var_dump($this->prefs);exit;
		return $this->calendar->generate($year , $month , $data);
	}
	public function getdashboardcalendar($year , $month)
	{
		$this->load->library('calendar',$this->prefsDashboard); // Load calender library
		$data = $this->get_calendar_data($year, $month);
		// var_dump($this->prefs);exit;
		return $this->calendar->generate($year , $month , $data);
	}

	public function get_calendar_data($year , $month)
	{
		$query =  $this->db->select('date,title')->from('events')->like('date',"$year-$month")->get();
		//echo $this->db->last_query();exit;
		$cal_data = array();
		foreach ($query->result() as $row) {
			$calendar_date = date("Y-m-j", strtotime($row->date)); // to remove leading zero from day format
			$cal_data[substr($calendar_date, 8,2)] = $row->title;
		}
		
		return $cal_data;
	}

	public function insertEvent($data){
		$query = $this->db->insert('events',$data);
		if ($query) {
			return true;
		}
	}

	public function updateEvent($data, $id){
		$this->db->where('id', $id);
		$this->db->update('events',$data);
	}

	public function getEventTitle($date, $title){
		$this->db->select('*');
		$this->db->from('events');
		$this->db->where('date',$date);
		$this->db->like('title',$title);

		$query =  $this->db->get()->row();
		return  $query;
	}
	public function getEventDetails($id){
		$this->db->select('*');
		$this->db->from('events');
		$this->db->where('id',$id);

		$query =  $this->db->get()->row();
		return  $query;
	}
	
	public function deleteEvent($id){
		$this->db->delete('events',array('id'=> $id));
	}
}
?>