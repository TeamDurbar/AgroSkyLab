<?php

class Calendar_model extends CI_Model {

    var $config;

    function __construct() {
        parent::__construct();
        $this->config = array(
            'start_day' => 'saturday',
            'month_type' => 'long',
            'day_type' => 'short',
            'show_next_prev' => TRUE,
            'next_prev_url' => base_url() . 'ajax_calendar'
        );
        //here is the template for your calendar
        $this->config['template'] = '
		
		 {table_open}<table border="0" style="text-align: center;" width="100%" cellpadding="0" cellspacing="0"  class="calendar">{/table_open}

		   {heading_row_start}<tr>{/heading_row_start}
		
		   {heading_previous_cell}<th class="prev_button"><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
		   {heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
		   {heading_next_cell}<th class="next_button"><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}
		
		   {heading_row_end}</tr>{/heading_row_end}
		
		   {week_row_start}<tr>{/week_row_start}
		   {week_day_cell}<td>{week_day}</td>{/week_day_cell}
		   {week_row_end}</tr>{/week_row_end}
		
		   {cal_row_start}<tr class="days">{/cal_row_start}
		   {cal_cell_start}<td>{/cal_cell_start}
                   {cal_cell_content}
                        <div class="calander_day1"><a href="{url}" title="{title}">{day}</a></div>
                   {/cal_cell_content}
                   {cal_cell_content_today}
                        <div class="highlight1">
                            <a href="{url}"  title="{title}">{day}</a>
                        </div>
                    {/cal_cell_content_today}

                   {cal_cell_no_content}
                        <div class="calander_day">{day}</div>
                   {/cal_cell_no_content}
                   {cal_cell_no_content_today}
                        <div class="highlight">{day}</div>
                   {/cal_cell_no_content_today}
                   
		   {cal_cell_blank}&nbsp;{/cal_cell_blank}
		
		   {cal_cell_end}</td>{/cal_cell_end}
		   {cal_row_end}</tr>{/cal_row_end}
		
		   {table_close}</table>{/table_close}
		';
    }

    function get_calendar($year, $month, $data) {
        $this->load->library('calendar', $this->config);
        return $this->calendar->generate($year, $month, $data);
    }

}
