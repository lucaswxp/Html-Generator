<?php
    /**
     * @author Lucas Pelegrino
     */

    define('DS', DIRECTORY_SEPARATOR);
    include_once 'classes' . DS . 'Tag.php';
    include_once 'classes' . DS . 'CompactTag.php';
    include_once 'classes' . DS . 'GeneralTag.php';
    
    class Html {
            /**
             * Define padrões para "compact tags", aceitando assim, o segundo argumento de Html::tag() como string
             * @var array
             */
            public static $compact_tags_map = array(
                'img' => 'src',
                'input' => 'type'
            );
            
            /**
             * Retorna para o script um objeto que corresponde a tag requisitada
             * @param string $name
             * @param mixed $content_or_attributes
             * @param array $attributes
             * @return Tag
             */
            public static function tag($name, $content_or_attributes = array(), Array $attributes = array()){
                // alias para a variavel
                $coa = &$content_or_attributes;

                    // Só entra aqui se $coa for array, ou for string e o nome da tag esteja em self::$compact_tags_map
                if(is_array($coa) || is_string($coa) && isset(self::$compact_tags_map[$name])):
                    is_array($coa) ? $attributes = $coa : $attributes[self::$compact_tags_map[$name]] = $coa;
                    $tag = new CompactTag($name, $attributes);
                else:
                    $content = $coa;
                    $tag = new GeneralTag($name, $content, $attributes);
                endif;
                unset($coa);
                return $tag;
            }
    }
?>