<?php
require_once 'clases/RemplazarMultiplos.php';

/**
 * RemplazarMultiplos test case.
 */
class RemplazarMultiplosTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     * @var RemplazarMultiplos
     */
    private $remplazarMultiplos;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated RemplazarMultiplosTest::setUp()
        
        $this->remplazarMultiplos = new RemplazarMultiplos(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated RemplazarMultiplosTest::tearDown()
        $this->remplazarMultiplos = null;
        
        parent::tearDown();
    }

    /**
     * Constructs the test case.
     */
    public function __construct()
    {
        // TODO Auto-generated constructor
    }

    
   
    /**
     * Tests RemplazarMultiplos->aplicarCondiciones()
     */
    public function testAplicarCondiciones()
    {
        $elementos = range(1,100);       
        $condiciones = array("Linio" => array(3),"IT" => array(5),"Linianos" => array(3,5));               
        
        $lista = new RemplazarMultiplos();
        $lista->aplicarCondiciones($elementos, $condiciones);
        $clave = array_keys($lista->resultado);
        
        $this->assertEquals("Linio", $lista->resultado[$clave[2]]);
         
         
    }
    
    public function testAplicarCondicionesMultiploCinco()
    {
        $elementos = range(1,100);
        $condiciones = array("Linio" => array(3),"IT" => array(5),"Linianos" => array(3,5));
        
        $lista = new RemplazarMultiplos();
        $lista->aplicarCondiciones($elementos, $condiciones);
        $clave = array_keys($lista->resultado);
        
        $this->assertEquals("IT", $lista->resultado[$clave[4]]);        
        
    }
    
    public function testAplicarCondicionesMultiploTresyCinco()
    {
        $elementos = range(1,100);
        $condiciones = array("Linio" => array(3),"IT" => array(5),"Linianos" => array(3,5));
        
        $lista = new RemplazarMultiplos();
        $lista->aplicarCondiciones($elementos, $condiciones);
        $clave = array_keys($lista->resultado);
        
        $this->assertEquals("Linianos", $lista->resultado[$clave[14]]);
        
    }
    
    public function testAplicarCondicionesOtras()
    {
        $elementos = range(1,50);        
        $condiciones = array("Multiplos de Dos" => array(2));       
        
        
        $lista = new RemplazarMultiplos();
        $lista->aplicarCondiciones($elementos, $condiciones);
        $clave = array_keys($lista->resultado);
        
        $this->assertEquals("Multiplos de Dos", $lista->resultado[$clave[1]]);
        
        
    }

  
}

