<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\SubscriptionsModel;
use App\Models\UsersModel;

class Admin extends Controller
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
	  #$this->restrictToGroups(['admin'] , route_to('home') );
		
		// Most services in this controller require
		// the session to be started - so fire it up!
		$this->session = service('session');

		$this->config = config('Auth');
		$this->auth = service('authentication');
	}
	
		
	public function updateSubscription(){
	  $rules = [
			'ticket'	=> 'required',
			'user_id' => 'required',
			'date' => 'required',
		];
		
		if (! $this->validate($rules))
		{
			return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
		} 
		$ticket = $this->request->getPost('ticket');
		$id = $this->request->getPost('user_id');
		$date = $this->request->getPost('date');
		
	  $model = new SubscriptionsModel();
	  $model->updateSubscription($id, $ticket, $date);
	  
	  return redirect()->back()->withCookies()->with('message', "Subscription Successful");
	}
	
	public function delSubscription(){
	  $rules = [
			'ticket'	=> 'required',
			'user_id' => 'required',
		];
		
		if (! $this->validate($rules))
		{
			return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
		} 
		$ticket = $this->request->getPost('ticket');
		$id = $this->request->getPost('user_id');
		
	  $model = new SubscriptionsModel();
	  $model->delSubscription($id, $ticket);
	  
	  return redirect()->back()->withCookies()->with('message', "Subscription deleted Successful");
	}
	
	
	public function createAdmin($userId)
    {
      
      $this->setupAuthClasses();
    	
      $id = $this->authorize->addUserToGroup(intval($userId) , 'admin');
      
    	if($id){
    	  echo "created Admin  ".$userId." with id: ".$id;
    	} else{
    	  echo $userId. ' failed: ';
    	}
    	
        /*
        $userId = $this->authenticate->id();
    	  $good = $this->authorize->hasPermission('blog.posts.view', $userId);
    	
        if ($this->request->getMethod() === 'post') 
        {
            echo view('news/success');
        }
        */
        
    }
    
    public function createGroup($group)
    {
      
      $this->setupAuthClasses();
    	
      $id = $this->authorize->createGroup($group, 'Users with Odin access in the app.');
    
    	if($id){
    	  echo "Group  ".$group." Created id: ".$id;
    	} else{
    	  echo $userId. ' failed: ';
    	}
        
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
	  if ( ! is_file(APPPATH.'/Views/'.$page.'.php'))
	  {
        // Whoops, we don't have a page for that!
        throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
    }
    
    helper('auth');
    $authorize = service('authorization');
    $usersModel = new UsersModel();
    $model = new SubscriptionsModel();
    
    $users = $usersModel->getUsers() ;
    
    foreach ($users as $key => $val) {
      $users[$key]->active = $model->subscriptions($val->id);
    }
    
		return view('Views/'.$page, [
		  'config' => $this->config,
		  'auth' => $this->auth, 
		  'dir' => '../../', 
		  'groups' => $authorize->groups(), 
		  'user' => user(), 
		  'users' => $users 
		]);
	}
	
	public function createTicket(){
	  $rules = [
			'ticket'	=> 'required',
			'type' => 'required',
		];
		
		if (! $this->validate($rules))
		{
			return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
		} 
	  $this->setupAuthClasses();
	  $ticket = $this->request->getPost('ticket');
	  $type = $this->request->getPost('type');
	  
    $id = $this->authorize->createGroup($ticket, $type);
    if ($id) {
      return redirect()->back()->withCookies()->with('message', "Ticket: ".$ticket." Created with id: ".$id);
    }
    return redirect()->back()->withInput()->with('error', "Error. Make sure ticket isn't already existing");
	}
	
	public function subscribe(){
	  $rules = [
			'tickets'	=> 'required',
			'username' => 'required',
		];
		
		if (! $this->validate($rules))
		{
			return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
		} 
		$tickets = $this->request->getPost('tickets');
		$id = $this->request->getPost('username');
		
	  $model = new SubscriptionsModel();
	  $username = $this->request->getPost('username');
	  $now = "none";
	  
	  try {
	    $id = $model->getUserId($username);
	    if (!$id) {
	      return redirect()->back()->withInput()->with('error', 
	    "failed to fetch id ");
	    }
	    foreach ($tickets as $ticket) {
	      $model->save([
    	    'user_id' => $id, 
    	    'ticket' => $ticket, 
    	    'exp_date' =>  date('Y-m-d H:i:s')
    	  ]);
    	  $now = $ticket;
	    }
	    return redirect()->back()->withCookies()->with('message', "Subscription Successful");
	  } catch (Exception $e) {
	    return redirect()->back()->withInput()->with('error', 
	    "Error occured at: ".$now);
	  }
	  
	  
	}
}
