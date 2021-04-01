<?php 
namespace App\Models;
use CodeIgniter\Model;

class SubscriptionsModel extends Model
{
    protected $table = 'subscriptions';
    protected $allowedFields = ['user_id', 'ticket', 'exp_date'];
    public $tym ; #"datetime('now', '-9 months')"; 
    
    
    public function getSubscriptions($user = false)
    {
      $this->tym = date("Y-m-d 13:03:19", strtotime('first day of previous month'));
        if ($user === false)
        {
            return null;
        }
    
        $query = $this
                    ->where('user_id =', $user)
                    ->where('DATETIME(exp_date) >', $this->tym)
                    ->get();
        return $query->getResult(); 
    }
    
    public function isSubscribed($user_id, $ticket){
      $query = $this->select('*')->where('user_id =', $user_id)
                  ->where('ticket =', $ticket)
                  ->get()->getResult();
       if(!empty($query) ) {
         return true;
       }
       return false;
    }
    
    public function getExp($user = false)
    {
        if ($user === false)
        {
            return null;
        }
    
        $query = $this
                    ->where('user_id =', $user)
                    ->where('exp_date < ' , $this->tym)
                    ->get();
        return $query->getResult(); 
    }
    
    public function getUserId($username){
      $query = $this->db->table('users')->select('id')
                 ->where('username', $username)
                 ->get()->getFirstRow();
      return $query->id ;
    }
    
    public function subscriptions($id){
      $all = array(
        'active'  => $this->getSubscriptions($id), 
        'expired' => $this->getExp($id), 
      );
      return $all;
    }
    
    public function updateSubscription($user_id, $ticket, $date){
      return $this->set('exp_date', $date)
                  ->where('user_id =', $user_id)
                  ->where('ticket =', $ticket)
                  ->update(); 
    }
    
    public function delSubscription($user_id, $ticket){
      return $this->where('user_id =', $user_id)
                  ->where('ticket =', $ticket)
                  ->delete(); 
    }
    
}