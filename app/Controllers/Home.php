<?php
namespace App\Controllers;
use App\Models\SubscriptionsModel;
use App\Models\UsersModel;

class Home extends BaseController
{
  use \Myth\Auth\AuthTrait;
  protected $auth;
	/**
	 * @var Auth
	 */
	protected $config;

	/**
	 * @var \CodeIgniter\Session\Session
	 */
	protected $session;

	public function __construct()
	{
	  $this->restrict(route_to('login'));
		// Most services in this controller require
		// the session to be started - so fire it up!
		$this->session = service('session');

		$this->config = config('Auth');
		$this->auth = service('authentication');
	}

	public function index()
	{
	  helper('auth');
	  $model = new SubscriptionsModel();
	  $user = user();
	  
	  $tickets = $model->getSubscriptions($user->id);
	  
		return view('Views/home', [
		  'config' => $this->config,
		  'auth' => $this->auth, 
		  'user' => $user, 
		  'dir' => '', 
		  'tickets' => $tickets, 
		  'expired' => $model->getExp($user->id)
		]);
	}
	
	public function view($page){
	  if ( ! is_file(APPPATH.'/Views/tickets/'.$page.'.php'))
	  {
        // Whoops, we don't have a page for that!
        throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
    }
    
    $model = new SubscriptionsModel(); 
    
    helper('auth');
    $authorize = service('authorization');
    
    if (user()->username != "Odin" && !$model->isSubscribed(user()->id, $page) ) {
      return redirect()->back();
    }
    
    $usersModel = new UsersModel();
    
    $users = $usersModel->getUsers() ;
    
    foreach ($users as $key => $val) {
      $users[$key]->active = $model->subscriptions($val->id);
    }
    
		return view('Views/tickets/'.$page, [
		  'config' => $this->config,
		  'auth' => $this->auth, 
		  'dir' => '../../', 
		  'groups' => $authorize->groups(), 
		  'user' => user(), 
		  'users' => $users 
		]);
	}

}
