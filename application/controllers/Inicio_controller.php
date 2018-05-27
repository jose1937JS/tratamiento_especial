<?php 
require ('./vendor/dompdf/src/Autoloader.php');

class Inicio_controller extends CI_Controller {

	// use Dompdf\Dompdf;

	public function __construct()
	{
		parent::__construct();
		$this->load->library(['session', 'pagination']);
		$this->load->helper('url');
		$this->load->helper('form');

		$this->load->model('inicio_model');
	}

	public function index()
	{

		$dompdf = new Dompdf();

		if ( $this->session->userdata('usuario') ){
			$data = ['usuario' => $this->session->userdata('usuario'), 'est' => $this->inicio_model->get_estudiantes()];

			// $config['base_url'] = "http://127.0.0.1/JFLO/6mill/index.php/admin";
			// $config['total_rows'] = 500;
			// $config['per_page'] = 15;

			// $this->pagination->initialize($config);

			// echo $this->pagination->create_links(); 

			$this->load->view('includes/header', $dat = ['usuario' => $this->session->userdata('usuario')]);
			$this->load->view('inicio', $data);
			$this->load->view('includes/footer');
		}
		else {
			redirect('');
		}
	}

	public function filtro()
	{
		$f = $this->input->post('filtro');
		
		$data = ['usuario' => $this->session->userdata('usuario'), 'est' => $this->inicio_model->filtro($f)];

		$this->load->view('includes/header', $dat = ['usuario' => $this->session->userdata('usuario')]);
		$this->load->view('inicio', $data);
		$this->load->view('includes/footer');
	}

	// public function data()
	// {
	// 	$this->output
	// 		->set_content_type('application/json')
	// 		->set_output(json_encode($this->inicio_model->get_estudiantes()->result()));
	// }

	public function eliminar($id)
	{
		$this->inicio_model->eliminar($id);
		redirect($this->session->userdata('usuario'));
	}

	public function editar($id)
	{
		$data = [
			'cedula' => $this->input->post('cedula'),
			'nombre' => $this->input->post('nombre'),
			'apellido' => $this->input->post('apellido'),
			'telefono' => $this->input->post('telefono'),
			'email' => $this->input->post('email')
		];

		$this->inicio_model->editar($id, $data);
	}

	public function informacion($id)
	{
		$data = ['infor' => $this->inicio_model->perfil($id)->result()];

		$this->load->view('includes/header', ['usuario' => $this->session->userdata('usuario')]);
		$this->load->view('perfil', $data);
		$this->load->view('includes/footer');
	}

	public function aprobar_sol($id)
	{
		$usuario = $this->session->userdata('usuario');

		$this->inicio_model->aprobar_sol($id);

		redirect('Inicio_controller');
	}

}