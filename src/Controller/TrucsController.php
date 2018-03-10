<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;
use App\Controller\AppController;

/**
 * Description of TrucsController
 *
 * @author maxim
 */
class TrucsController extends AppController
{
    public function machin()
    {
        $this->loadModel("Users");
        $a=$this->Users->find();
        $this->set("toto",$a->toArray());
    }

    public function pageaccueil() /* mettre $id dans la parenthèse ()*/
    {
    	$this->loadModel("Users");
    	$new=$this->Users->newEntity(); /* a la place de get($id) , newEntity() , donc enlever le parametre de page accueil*/
    	if($this->request->is("post"))
    	{
    		$new->login=$this->request->data["login"];
    		$new->passwd=$this->request->data["passwd"];
    		$this->Users->save($new);
    	}
    	$this->set("new",$new);

    }

    public function listesite()
    {
    	if (isset($_POST['Site'])=='TRUE')
    	{

    	}
    	if (isset($_POST['typesite'])=='TRUE')
    	{
    		
    	}
    	if (isset($_POST['position'])=='TRUE')
    	{
    		
    	}
    }

    public function detailsite()
    {

    }

    public function listeacheminement()
    {

    }

}
