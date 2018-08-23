
/* file uploading */
$config['upload_path'] = './uploads/intro/'; 
$config['allowed_types'] = 'gif|jpg|png';
$config['encrypt_name'] = true;
$this->load->library('upload', $config);
	if ($this->upload->do_upload('file_to_upload')) 
		{ $file_data = $this->upload->data();
	`		$file_name = $file_data['file_name']; 
		}
	else
		{ 
		$file_name = 'noimage.jpg'; 
		} 

	$data = array
		(  'name' => $name, 'email' => $email,
		   'password' => base64_encode($password), 
			'mobile' => $mobile, 
			'file_name' => $file_name,
	    );
	$this->intro_model->intro_insert($data);
