<?php

class hello_world{
	public function say_hello($name){
			return $this->build_sentence($name);
	}
	private function build_sentence($name){
			$str = 'Hello '.$name.', welcome.'
			return $str;
	}
}

$hello = new hello_world();

echo $hello->say_hello('Joe');

?>
