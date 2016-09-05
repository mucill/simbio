<?php
use PHPUnit\Framework\TestCase;
use Simbio\Simbio;
/**
* @return mixe
*/
class RouterTest extends TestCase
{
    function testLoadSimbioClass()
    {
        $this->simbio = new Simbio;
    }

    function testLoadConfig()
    {
        $this->simbio = new Simbio;
        $this->simbio->config();
    }

    function testLoadRoute()
    {
        $this->simbio = new Simbio;
        $this->simbio->route();
    }

    function testModuleIsExist()
    {
        $set_module = './apps/modules/home/controllers/Home.php';
        $this->assertFileExists($set_module);
    }

    function testModuleIsNotExist()
    {
        $set_module = './apps/modules/foo/controllers/Foo.php';
        $this->assertFileNotExists($set_module);
    }

    function testModuleIsWrongPathName()
    {
        $read_dir = opendir('./apps/modules/home/controllers/');
        $filename = 'Home.php';
        $found = false;
        while(false !== ($read_filename = readdir($read_dir)) ){
            if($read_filename == $filename) {
                $found = true;
                break;
            }
        }

        closedir($read_dir);
        unset($read_dir);
        $this->assertTrue($found);
    }

}
