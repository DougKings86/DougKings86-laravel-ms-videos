<?php

namespace Tests\Unit;

use App\Models\Category;
use App\Models\Traits\Uuid;
use Illuminate\Database\Eloquent\SoftDeletes;
use PHPUnit\Framework\TestCase;

class CategoryTest extends TestCase
{
    public function testFillable()
    {
        $category = new Category();
        $fillable = ['name','description' , 'is_active'];
        $this->assertEquals($fillable , $category->getFillable());
    }

    public function testIfUseTraits(){
        $traits = [ softDeletes::class , Uuid::class ];
        $expectedTraits = array_keys(class_uses(Category::class)); 
        $this->assertEquals($traits , $expectedTraits);
    }

    public function testCast(){
        $casts = [ 'id' => 'string' ];
        $category = new Category();
        $this->assertEquals($casts , $category->getCasts());
    }

    public function testIncrementing(){
       $category = new Category();
       $this->assertFalse($category->incrementing);
    }
}
