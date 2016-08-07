<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $product= new \App\Product([
           'imagePath'=>'http://d.gr-assets.com/books/1411114164l/33.jpg',
           'title'=>'Harry Poter',
           'description'=>'This is harry ad;k;k dwqedwqklhj hnd;klash klhdwq ',
           'price'=>10
       ]);
        $product->save();
 $product= new \App\Product([
           'imagePath'=>'http://d.gr-assets.com/books/1411114164l/33.jpg',
           'title'=>'sadasdwqed sadasd',
           'description'=>"dasdasdasdasd kjhasd sdka sdwq asd iohdfherf efek fhdhfd",
           'price'=>15
       ]);
        $product->save();
 $product= new \App\Product([
           'imagePath'=>'http://d.gr-assets.com/books/1411114164l/33.jpg',
           'title'=>'qweqwre eryhj',
           'description'=>'ljlretl  ljdl;aj  ;jrej jdf;; sad jg hehncv csdcv ',
           'price'=>40
       ]);
        $product->save();
 $product= new \App\Product([
           'imagePath'=>'http://d.gr-assets.com/books/1411114164l/33.jpg',
           'title'=>'pkjp;kphkjp p pppf pigpd pipif l lfjg lorig ',
           'description'=>'owqeyeiouyr  oieur ouero oouqweo u lflgldfjl jldalsfpo a oasdcv,n vc,n ',
           'price'=>25
       ]);
        $product->save();
 $product= new \App\Product([
           'imagePath'=>'http://d.gr-assets.com/books/1411114164l/33.jpg',
           'title'=>'vvcb lk,asf ,nd, fns pwqpe teopij oeo',
           'description'=>'pyt pp jljljlj as dsahk dkhfk  afkdgsjgfdskj bmfkfk sdfkdhsf kksafh khdf kahf kaf kahf',
           'price'=>45
       ]);
        $product->save();

    }
}
