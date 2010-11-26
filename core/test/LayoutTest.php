<?php
use Ky\Core;
use Ky\Core\Layout;
use Ky\Core\UnitTest;

require_once __DIR__ . '/../classes/UnitTest.php';

class LayoutTest extends UnitTest
{
    protected function setUp()
    {
        parent::setUp();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    public function test_should_throw_exception_when_layout_not_found()
    {
        $this->setExpectedException('Ky\\Core\\Exception\\FileNotFound');
        Layout::display('layout/there_is_no_this_file.php');
    }

    public function test_should_throw_exception_when_root_layout_is_empty()
    {
       $this->setExpectedException('Ky\\Core\\Exception\\RootLayoutCantEmpty');
        Layout::display('layout/empty_layout.php');
    }
    public function test_should_load_layout_file_ok()
    {
        $template = './layout/load_test.php';
        $content_expected = '/I am a test layout!/';
        $content  = Layout::display($template);

        //测试文件中包含指定字符串
        //$this->assertEquals($content_expected,trim($content),'load layout file fail.');
        $this->assertRegExp($content_expected,$content,'load layout file fail.');
    }
    public function test_should_set_dir_ok(){}
    public function test_should_layout_extends_ok()
    {
        $template = './layout/load_root_test.php';
        $content_expected = '/I am the root layout!/';
        $content  = Layout::display($template);

        //测试文件中包含指定字符串
        //$this->assertEquals($content_expected,trim($content),'load layout file fail.');
        $this->assertRegExp($content_expected,$content,'load layout file fail.');

    }
    public function test_should_block_layout_work_fine(){}
    public function test_should_collect_blocks_config_ok(){}
    public function test_should_collect_coms_config_ok(){}
}