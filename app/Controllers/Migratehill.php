<?php

namespace App\Controllers;

class Migratehill extends \CodeIgniter\Controller
{
        public function index()
        {
                $migrate = \Config\Services::migrations();

                try
                {
                        if ($migrate->latest()) {
                          return "<h1>Migration Complete</h1>";
                        } else {
                         return "Unknown error occurred";
                        }
                        
                }
                catch (\Throwable $e)
                {
                  return "ERROR: ". $e;
                        // Do something with the error here...
                }
        }
}