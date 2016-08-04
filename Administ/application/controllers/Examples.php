<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Examples extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');

		$this->load->library('grocery_CRUD');
	}

	public function _example_output($output = null)
	{
		$this->load->view('example.php',$output);
	}

	public function offices()
	{
		$output = $this->grocery_crud->render();
		$this->_example_output($output);
	}

	public function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}

	public function offices_management()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('offices');
			$crud->set_subject('Office');
			$crud->required_fields('city');
			$crud->columns('city','country','phone','addressLine1','postalCode');

			$output = $crud->render();

			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	public function employees_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_theme('datatables');
			$crud->set_table('equipos');
			$crud->set_relation('id_jug','jugadorres','ape_jug');
			$crud->display_as('id_jug','Capitan');
			$crud->set_subject('Equipos');

			$crud->required_fields('dni_jug');

			$crud->set_field_upload('escudo','assets/uploads/files');

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function customers_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('customers');
			$crud->columns('customerName','contactLastName','phone','city','country','salesRepEmployeeNumber','creditLimit');
			$crud->display_as('salesRepEmployeeNumber','from Employeer')
				 ->display_as('customerName','Name')
				 ->display_as('contactLastName','Last Name');
			$crud->set_subject('Customer');
			$crud->set_relation('salesRepEmployeeNumber','employees','lastName');

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function orders_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_relation('customerNumber','customers','{contactLastName} {contactFirstName}');
			$crud->display_as('customerNumber','Customer');
			$crud->set_table('orders');
			$crud->set_subject('Order');
			$crud->unset_add();
			$crud->unset_delete();

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function products_management()
	{
			$crud = new grocery_CRUD();

			$crud->set_table('products');
			$crud->set_subject('Product');
			$crud->unset_columns('productDescription');
			$crud->callback_column('buyPrice',array($this,'valueToEuro'));

			$output = $crud->render();

			$this->_example_output($output);
	}

	public function valueToEuro($value, $row)
	{
		return $value.' &euro;';
	}

	public function film_management()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('film');
		$crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname','priority');
		$crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
		$crud->unset_columns('special_features','description','actors');

		$crud->fields('title', 'description', 'actors' ,  'category' ,'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');

		$output = $crud->render();

		$this->_example_output($output);
	}

	public function film_management_twitter_bootstrap()
	{
		try{
			$crud = new grocery_CRUD();

			$crud->set_theme('twitter-bootstrap');
			$crud->set_table('film');
			$crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname','priority');
			$crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
			$crud->unset_columns('special_features','description','actors');

			$crud->fields('title', 'description', 'actors' ,  'category' ,'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');

			$output = $crud->render();
			$this->_example_output($output);

		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

	function multigrids()
	{
		$this->config->load('grocery_crud');
		$this->config->set_item('grocery_crud_dialog_forms',true);
		$this->config->set_item('grocery_crud_default_per_page',50);

		$output1 = $this->offices_management2();

		//$output2 = $this->employees_management2();

		//$output3 = $this->customers_management2();

		$js_files = $output1->js_files;
		$css_files = $output1->css_files;
		$output = $output1->output;

		$this->_example_output((object)array(
				'js_files' => $js_files,
				'css_files' => $css_files,
				'output'	=> $output
		));
	}

	public function equipos()
	{
        $this->config->load('grocery_crud');
		$this->config->set_item('grocery_crud_dialog_forms',true);
		$this->config->set_item('grocery_crud_default_per_page',50);
		$crud = new grocery_CRUD();
		$crud->set_table('equipos');
		$crud->set_relation('id_jug','jugadorres','ape_jug');
        $crud->display_as('id_jug','Capitan');
		$crud->set_subject('Equipos');

		$crud->required_fields('nom_eq');

		$crud->set_field_upload('escudo','../images/escudos');

		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

		$output = $crud->render();
        $this->_example_output($output);
	}
    
    public function jugadores()
	{
        $this->config->load('grocery_crud');
		$this->config->set_item('grocery_crud_dialog_forms',true);
		$this->config->set_item('grocery_crud_default_per_page',50);
		$crud = new grocery_CRUD();
		$crud->set_table('jugadorres');
		$crud->set_relation('id_eq','equipos','nom_eq');
        $crud->display_as('id_eq','Equipo');
		$crud->set_subject('Jugadores');

		$crud->required_fields('dni_jug');

		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

		$output = $crud->render();
        $this->_example_output($output);
	}

	 public function jugadoreseliminados()
	{
        $this->config->load('grocery_crud');
		$this->config->set_item('grocery_crud_dialog_forms',true);
		$this->config->set_item('grocery_crud_default_per_page',50);
		$crud = new grocery_CRUD();
		$crud->set_table('jugadoreseliminados');
		//$crud->set_relation('id_eq','equipos','nom_eq');
        //$crud->display_as('id_eq','Equipo');
		$crud->set_subject('Jugadores');

		//$crud->required_fields('dni_jug');

		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

		$output = $crud->render();
        $this->_example_output($output);
	}
    
    public function torneos()
	{
        $this->config->load('grocery_crud');
		$this->config->set_item('grocery_crud_dialog_forms',true);
		$this->config->set_item('grocery_crud_default_per_page',50);
		$crud = new grocery_CRUD();
		$crud->set_table('torneo');
        $crud->columns('nombreTorneo','tipoTorneo','estadoTorneo');
        $crud->fields('nombreTorneo','tipoTorneo','estadoTorneo');
		$crud->field_type('tipoTorneo','dropdown',
        array('1' => 'Zonas', '2' => 'Llave'));
        $crud->field_type('estadoTorneo','dropdown',
        array('1' => 'En curso', '2' => 'Finalizado'));
        $crud->set_subject('Torneo');
		$crud->required_fields('nombreTorneo','tipoTorneo','estadoTorneo');

		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

		$output = $crud->render();
        $this->_example_output($output);
	}
    
    public function categorias()
	{
        $this->config->load('grocery_crud');
		$this->config->set_item('grocery_crud_dialog_forms',true);
		$this->config->set_item('grocery_crud_default_per_page',50);
		$crud = new grocery_CRUD();
		$crud->set_table('categoria');
        $crud->fields('nombreCategoria','cantidadGrupos','cantidadEquipos');
        
		$crud->set_subject('Categorias');
		$crud->required_fields('nombreCategoria');

		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

		$output = $crud->render();
        $this->_example_output($output);
	}
    
    public function grupos()
	{
        $this->config->load('grocery_crud');
		$this->config->set_item('grocery_crud_dialog_forms',true);
		$this->config->set_item('grocery_crud_default_per_page',50);
		$crud = new grocery_CRUD();
		$crud->set_table('grupos');
        $crud->fields('nombreGrupo','id_Cat','id_tor','sexoGrupo');
        $crud->field_type('sexoGrupo','dropdown',
        array('1' => 'Masculino', '2' => 'Femenino'));
        $crud->set_relation('id_Cat','categoria','nombreCategoria');
        $crud->set_relation('id_tor','torneo','nombreTorneo');
        $crud->display_as('nombreGrupo','Grupo');
        $crud->display_as('id_Cat','Categoria');
		$crud->set_subject('Grupos');
		$crud->required_fields('nombreGrupo','id_Cat','id_tor','sexoGrupo');

		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

		$output = $crud->render();
        $this->_example_output($output);
	}

    public function equiposgrupos()
	{
        $this->config->load('grocery_crud');
		$this->config->set_item('grocery_crud_dialog_forms',true);
		$this->config->set_item('grocery_crud_default_per_page',50);
		$crud = new grocery_CRUD();
		$crud->set_table('equiposgrupos');
        $crud->fields('id_Grupo','id_eq');
        $crud->set_relation('id_Grupo','grupos','nombreGrupo');
        $crud->set_relation('id_eq','equipos','nom_eq');
        //$crud->display_as('id_Grupo','Grupo');
        //$crud->display_as('id_eq','Equipo');
		$crud->set_subject('Equipos por Grupos');
		$crud->required_fields('id_Gru','id_eq');

		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

		$output = $crud->render();
        $this->_example_output($output);
	}
    
	public function employees_management2()
	{
		$crud = new grocery_CRUD();

		$crud->set_theme('datatables');
		$crud->set_table('employees');
		$crud->set_relation('officeCode','offices','city');
		$crud->display_as('officeCode','Office City');
		$crud->set_subject('Employee');

		$crud->required_fields('lastName');

		$crud->set_field_upload('file_url','assets/uploads/files');

		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

		$output = $crud->render();

		if($crud->getState() != 'list') {
			$this->_example_output($output);
		} else {
			return $output;
		}
	}

	public function customers_management2()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('customers');
		$crud->columns('customerName','contactLastName','phone','city','country','salesRepEmployeeNumber','creditLimit');
		$crud->display_as('salesRepEmployeeNumber','from Employeer')
			 ->display_as('customerName','Name')
			 ->display_as('contactLastName','Last Name');
		$crud->set_subject('Customer');
		$crud->set_relation('salesRepEmployeeNumber','employees','lastName');

		$crud->set_crud_url_path(site_url(strtolower(__CLASS__."/".__FUNCTION__)),site_url(strtolower(__CLASS__."/multigrids")));

		$output = $crud->render();

		if($crud->getState() != 'list') {
			$this->_example_output($output);
		} else {
			return $output;
		}
	}

}