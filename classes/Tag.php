<?php
    abstract class Tag {
        /**
         * Nome da tag
         * @var string
         */
        public $name;

        /**
         * Atributos da classe
         * @var array
         */
        public $attributes = array();



            /**
             * Transforma os atributos de array para string.
             * Exemplo:
             * array('src' => 'image.jpg') ->  src="image.jpg"
             *
             * @param Array $attributes
             */
            protected function attributes(){
                $attributes_string = '';
                foreach($this->attributes as $key => $val){
                    if(!empty($key))
                        $attributes_string .= " $key=\"$val\"";
                }
                return $attributes_string;
            }

            /**
             * Converte o objeto em tag html
             * @return string O html
             */
            public function __toString(){
                return $this->parse();
            }

            /**
             * Responsável por criar o HTML da tag
             * @return string O html
             */
            protected abstract function parse();
    }
?>