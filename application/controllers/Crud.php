<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller
{


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


    public function index()
    {
        $this->load->model('Crud_model');
        $records = $this->Crud_model->getRecords();
        $this->load->view('Crud_view', ['records' => $records]);
    }
    public function create()
    {
        $this->load->view('Create');
    }
    public function edit($record_id)
    {

        $data = array();
        $this->load->model('Crud_model');
        $data['record']= $this->Crud_model->getAllRecords($record_id);
        $this->load->view('Update',$data);
    }
    public function update($record_id)
    {
        $this->form_validation->set_rules('customerName','Customer Name','required');
        $this->form_validation->set_rules('phone','Phone ','required');
        $this->form_validation->set_rules('address','Address','required');
        $this->form_validation->set_rules('city','City','required');
        $this->form_validation->set_rules('country','Country','required');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
        if($this->form_validation->run())
        {
            $data= $this->input->post();
           $this->load->model('Crud_model');
           if($this->Crud_model->updateRecords($record_id, $data))
           {
            $this->session->set_flashdata('response','Records Updated Successfully');
           }
           else
           {
            $this->session->set_flashdata('response','Records Failed to Update');
           }
           return redirect('Crud');
        }
        else
        {
           $this->load->view('Update');
        }
    }
    public function delete($record_id)
    {
        $this->load->model('Crud_model');
        if($this->Crud_model->deleteRecords($record_id))
        {
            $this->session->set_flashdata('response','Records Deleted Successfully');
        }
        else
        {
            $this->session->set_flashdata('response','Records Failed to Delete');
        }
        return redirect('Crud');
    }
    public function save()
    {
        $this->form_validation->set_rules('customerName','Customer Name','required');
        $this->form_validation->set_rules('phone','Phone ','required');
        $this->form_validation->set_rules('address','Address','required');
        $this->form_validation->set_rules('city','City','required');
        $this->form_validation->set_rules('country','Country','required');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
        if($this->form_validation->run())
        {
            $data= $this->input->post();
           $this->load->model('Crud_model');
           if($this->Crud_model->saveRecords($data))
           {
            $this->session->set_flashdata('response','Records Saved Successfully');
           }
           else
           {
            $this->session->set_flashdata('response','Records Failed to be saved');
           }
           return redirect('Crud');
        }
        else
        {
           $this->load->view('Create');
        }
    }
}