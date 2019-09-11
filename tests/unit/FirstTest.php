<?php 
include('index.php');
use PHPUnit\Framework\TestCase;
use src\Linio;

class FirstTest extends TestCase
{
    private $for_100 = "1, 1, 1, 2, 2, 2, 3, Linio, 3, 4, 4, 4, 5, 5, IT, 6, Linio, 6, 7, 7, 7, 8, 8, 8, 9, Linio, 9, 10, 10, IT, 11, 11, 11, 12, Linio, 12, 13, 13, 13, 14, 14, 14, Linianos, Linio, IT, 16, 16, 16, 17, 17, 17, 18, Linio, 18, 19, 19, 19, 20, 20, IT, 21, Linio, 21, 22, 22, 22, 23, 23, 23, 24, Linio, 24, 25, 25, IT, 26, 26, 26, 27, Linio, 27, 28, 28, 28, 29, 29, 29, Linianos, Linio, IT, 31, 31, 31, 32, 32, 32, 33, Linio, 33, 34, 34, 34, 35, 35, IT, 36, Linio, 36, 37, 37, 37, 38, 38, 38, 39, Linio, 39, 40, 40, IT, 41, 41, 41, 42, Linio, 42, 43, 43, 43, 44, 44, 44, Linianos, Linio, IT, 46, 46, 46, 47, 47, 47, 48, Linio, 48, 49, 49, 49, 50, 50, IT, 51, Linio, 51, 52, 52, 52, 53, 53, 53, 54, Linio, 54, 55, 55, IT, 56, 56, 56, 57, Linio, 57, 58, 58, 58, 59, 59, 59, Linianos, Linio, IT, 61, 61, 61, 62, 62, 62, 63, Linio, 63, 64, 64, 64, 65, 65, IT, 66, Linio, 66, 67, 67, 67, 68, 68, 68, 69, Linio, 69, 70, 70, IT, 71, 71, 71, 72, Linio, 72, 73, 73, 73, 74, 74, 74, Linianos, Linio, IT, 76, 76, 76, 77, 77, 77, 78, Linio, 78, 79, 79, 79, 80, 80, IT, 81, Linio, 81, 82, 82, 82, 83, 83, 83, 84, Linio, 84, 85, 85, IT, 86, 86, 86, 87, Linio, 87, 88, 88, 88, 89, 89, 89, Linianos, Linio, IT, 91, 91, 91, 92, 92, 92, 93, Linio, 93, 94, 94, 94, 95, 95, IT, 96, Linio, 96, 97, 97, 97, 98, 98, 98, 99, Linio, 99, 100, 100, IT";
    private $for_25  = "1, 1, 1, 2, 2, 2, 3, Linio, 3, 4, 4, 4, 5, 5, IT, 6, Linio, 6, 7, 7, 7, 8, 8, 8, 9, Linio, 9, 10, 10, IT, 11, 11, 11, 12, Linio, 12, 13, 13, 13, 14, 14, 14, Linianos, Linio, IT, 16, 16, 16, 17, 17, 17, 18, Linio, 18, 19, 19, 19, 20, 20, IT, 21, Linio, 21, 22, 22, 22, 23, 23, 23, 24, Linio, 24, 25, 25, IT";
  
    /**
     * @test
     */
    public function mod()
    {
        $linio = new Linio();

        $this->assertEquals($this->for_100, $linio->linioOrIt());
    }
}
