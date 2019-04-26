<?php

namespace Test;



use Exception;


class ClassRepresentation{
    public function returnTypeSpacing()  :  int  { return (integer) 1; }

    /** @var string */
    const TEST_VISIBILITY = 'public?';

    /**
     *
     */
    private function typeHintChecks(int$param,string$test=null):string
    {

        $a = (integer)1;
        $b = ( int )$a;
        //

        return (string)$b;
    }

    /**
     * @api
     *
     * @return int[]
     */
    public function arraySpacingAndComma(): ARRAY {
        $a = [ 1, 2 ];

        return array(
                1,
            2, 3, 4, $a);
    }

    protected function handleException(Exception $exception): void
    {
        $a = is_array($exception);
        $b = null;

        while($a&&$b) echo 1;
    }

    /**
     * Something?
     */
    protected function something(): void
    {
        $this -> typeHintChecks ( 1,null) ;

        is_array(strtolower('string'), []);

        if(1 and 2 or 3){
            return;
        }

        $a=1;
        $test = ("$a");
        echo ('a');

        return;

        echo 'hello'."we".'two';
    }
}
