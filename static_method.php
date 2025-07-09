<?php
class S {
    public static $value = 34;

        public function staticValue() {
                return self ::$value;
        }

          public static function show() {
                return "This is Static method";
        }

            function applyStatic () {
                 return self :: show ();
            }
        }

        $p = new S();
        echo $p -> staticValue();
        echo $p -> applyStatic ();
            // echo  S:: show();
?>