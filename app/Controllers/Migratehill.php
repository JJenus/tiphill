<?php

namespace App\Controllers;

class Migratehill extends \CodeIgniter\Controller
{
        public function index()
        {
                $migrate = \Config\Services::migrations();

                try
                {
                        $migrate->latest();
                }
                catch (\Throwable $e)
                {
                  return $e;
                        // Do something with the error here...
                }
        }
}