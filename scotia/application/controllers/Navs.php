<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Navs extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Dhaka');
        $this->load->model('general_model');
    }

    public function ConversationAdvisor() {
        $data['advisors'] = $this->general_model->getAdvisors();
        $data['messages'] = $this->general_model->getMessages();
        //var_dump($data['messages']);die;
        $data['main_content'] = 'get_help/conversation';
        $this->load->view('includes/templates_get', $data);
    }

    public function ajxAdvisorPanel() {
        $data['messages'] = $this->general_model->getMessages();
        $this->load->view('get_help/ajxAdvisorPanel', $data);
    }

    public function ajxSendMessage() {
        $post = $this->input->post();
        $message = array(
            'message' => $post['message'],
            'advisor_id' => $post['advisor_id'],
            'datetime' => date('Y-m-d H:i:s'),
            'status' => 1
        );
        //var_dump($message);die;
        $this->db->insert('messages', $message);
        $data['messages'] = $this->general_model->getMessages();
        $this->load->view('get_help/ajxAdvisorPanel', $data);
    }
    
    public function refresh(){
        $data['messages'] = $this->general_model->getMessages();
        $this->load->view('get_help/ajxAdvisorPanel', $data);
    }
    
    public function ConversationClient(){
         $data['main_content'] = 'give_help/conversation';
        $this->load->view('includes/templates_give', $data);
    }
    
    public function ajxClientPanel(){
        $data['messages'] = $this->general_model->getMessages();
        $this->load->view('give_help/ajxClientPanel', $data);
    }
    
    public function ajxClientSendMessage(){
        $post = $this->input->post();
        $message = array(
            'message' => $post['message'],
            'client_id' => 1,
            'datetime' => date('Y-m-d H:i:s'),
            'status' => 2
        );
        //var_dump($message);die;
        $this->db->insert('messages', $message);
        $data['messages'] = $this->general_model->getMessages();
        $this->load->view('give_help/ajxClientPanel', $data);
    }
    
    public function refresh_client(){
         $data['messages'] = $this->general_model->getMessages();
        $this->load->view('give_help/ajxClientPanel', $data);
    }

}
