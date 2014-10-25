<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upload extends CI_Controller {

function __construct(){
	   parent::__construct();
       $this->load->helper('file');
	  // $this->folder = 'uploads/';
	}
function index(){
            $data['title'] = 'Subir Imagen';
		    $this->load->view('admin/header_admin',$data);
	        $this->load->view('admin/images/upload_image', array('error' => ' ' ));
	        $this->load->view('front/footer');
		
}
        
function do_upload() {

		$config['upload_path'] = './uploads/'; // aqu� se suben mientras son redimensionadas, luego se eliminan
		$config['allowed_types'] = 'jpg|png'; // extensiones permitidas
	    $config['overwrite']=TRUE;    
		$config['remove_spaces']=TRUE;
		$config['max_size']	= '2048'; // el peso m�ximo que de la imagen a redimencionar
		$config['max_width']  = '2000'; 
		$config['max_height']  = '1560'; 

 echo $this->load->library('upload', $config); 
	
  if (!$this->upload->do_upload()){ // primer if
  
        $data['title'] = 'Error al cargar la Imagen';
		$error = array('error' => $this->upload->display_errors('<div id="error"><ul><li>', '</li></ul></div>'));
		
			$this->load->view('admin/header_admin',$data);
	        $this->load->view('admin/images/upload_image',$error);
	        $this->load->view('front/footer');
        
			
	}
	else{   
	       foreach ($this->upload->data() as $item => $value){
	       	  
			  	  if($item =='file_path'){			  	 	
			  	 	     $path = $value; 
			  	      }elseif($item =='file_name'){			  	 
					         $name = $value;
			  	      }
			
        	}// fin del foreach  
			
		   $this->resize($path,$name);				
		  
    } // fin del primer if
			
}
		
function resize($path,$name)
	{   
	$upload = explode('/',$path); 
	$size = sizeof($upload); 
	$final_folder = '';
	
		 for($i=0; $i<($size-2); $i++){		    
		      $final_folder  .=  $upload[$i].'/';		
		  }
	//echo $final_folder; exit;
	
		 $config['image_library'] = 'gd2';
		 $config['source_image'] =  $path.$name; // le decimos donde esta la imagen que acabamos de subir
		 $config['new_image']= $final_folder.'images'; // Ruta donde van a quedar guardadas las imagenes
         $config['create_thumb'] = FALSE;
         $config['maintain_ratio'] = TRUE;
         $config['width'] = 245;
         $config['height'] = 184;
		
		$this->load->library('image_lib', $config);
		
		if (!$this->image_lib->resize())
         {
                     echo $this->image_lib->display_errors();
           }
		
		$this->image_lib->resize();
	    delete_files('./uploads/'); /* despu�s de haber redimensionado la imagen ya la podemos eliminar,
	                                     porque la imagen final queda en la carpeta images */
		$data['title'] = "La imagen fue subida con Exito";
		$data['message']=NULL;
		
		    $this->load->view('admin/header_admin',$data);
	        $this->load->view('admin/images/upload_success');
	        $this->load->view('front/footer');
	}
}
?>
