<?php
	echo $this->Html->link("click me",["controller"=>"Trucs","action"=>"machin"]);
	echo $this->Html->link("Liste Acheminement",["controller"=>"Trucs","action"=>"listeacheminement"]);
	echo $this->Html->link("Detail Site",["controller"=>"Trucs","action"=>"detailsite"]);
	echo $this->Html->link("Liste Site",["controller"=>"Trucs","action"=>"listesite"]);
	echo $this->Html->link("Page Accueil",["controller"=>"Trucs","action"=>"pageaccueil"]);

	echo $this->Form->create();
	echo $this->Form->input("login");
	echo $this->Form->input("passwd");
	echo $this->Form->submit();
	echo $this->Form->end();
// lol 
?>