<?php
/**
 * Created by PhpStorm.
 * User: ths
 * Date: 08/04/2018
 * Time: 11:33
 */
namespace hello;


use HelloWorld\SayHello;

class hello
{
public function talk(){
    return SayHello::world();
}

}