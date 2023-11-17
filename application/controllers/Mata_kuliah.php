<?php
class Mata_Kuliah extends CI_Controller{
    public function index(){
        $data['matkul']=$this->M_Matakuliah->tampilMatakuliah()->result();
        $this->load->view('view_form_matakuliah',$data);
    }

    public function hapus(){
        $where=['kode'=>$this->uri->segment(3)];
        $this->M_Matakuliah->hapusMatakuliah($where);
        redirect('Mata_Kuliah/index/');
    }

    public function edit(){
        $matkul=$this->M_Matakuliah->matkulWhere(['kode'->$this->uri->segment(3)])->result_array();
        $data=array(
            "kode"=>$matkul[0]['kode'],
            "nama"=>$matkul[0]['nama'],
            "sks"=>$matkul[0]['sks']
        );
        $this->load->view('view_edit_matakuliah',$data);
    }

    public function update(){
        $this->form_validation->set_rules('kode', 'Kode Matakuliah', 'trim|required|numeric|min_length[3]',
        array('required' => '%s Wajib Diisikan.',
        'numeric' => '%s Wajib diisikan angka.',
        'min_length' => '%s Wajib Diisikan 3 karakter.'));
		$this->form_validation->set_rules('nama', 'Nama Matakuliah', 'required[Web Programming]',
        array('required' => '%s Wajib Diisikan.',));
		$this->form_validation->set_rules('sks', 'SKS', 'required',
        array('required' => '%s Wajib Diisikan.',));

		if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('view_form_matakuliah');
                }
                else
                {
                  $data = [
						  'kode' => $this->input->post('kode'),
						  'nama' => $this->input->post('nama'),
						  'sks' => $this->input->post('sks')
						  ];
				  
				    $this->M_Matakuliah->simpanMatakuliah($data);
                    redirect('Mata_kuliah');
                }
    }
}