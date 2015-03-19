<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Sample extends Model {

	protected $name;

	public function __construct($name) {
		$this->name = $name;
	}

	public function foo() {
		$one = 1;
		$more = 'more';
		$time = new DateTime();

		if (1 !== 3) {
			return $this->bar($one, $more, $time);
  }

		return false;
	}

	// Este metodo es bonito
	function bar($one, $more, $time){
		return true;
	}

}
