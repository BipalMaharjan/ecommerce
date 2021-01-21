<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('production')->insert([
        	[
    	'name' => 'OG mobile',
    	'price' => '100$',
    	'description' => 'latest smartphone',
    	'category' => 'mobile',
    	'gallery' => 'https://www.sathya.in/Media/Default/Thumbs/0038/0038140-vivo-s1-pro-blue8gb-ram128gb-storage-250.jpg'	
    	
    	],
    	[
    	'name' => 'OG Tv',
    	'price' => '500$',
    	'description' => 'latest TV',
    	'category' => 'TV',
    	'gallery' => 'https://images.samsung.com/is/image/samsung/levant-uhd-tu8500-ua65tu8500uxtw-frontblack-229856028?$720_576_PNG$'	
    	
    	],
    	[
    	'name' => 'OG console',
    	'price' => '250$',
    	'description' => 'latest console',
    	'category' => 'console',
    	'gallery' => 'https://cdn.vox-cdn.com/thumbor/KHGkcpD6qku24cJnywq2xOXaMEI=/0x0:2040x1360/1200x800/filters:focal(857x517:1183x843)/cdn.vox-cdn.com/uploads/chorus_image/image/68579891/vpavic_4278_20201030_0247.0.jpg'	
    	
    	],
    	[
    	'name' => 'OG fridge',
    	'price' => '500$',
    	'description' => 'latest fridge',
    	'category' => 'fridge',
    	'gallery' => 'https://5.imimg.com/data5/PR/TE/MY-7846959/635l-french-door-fridge-freezer-500x500.png'	
    	
    	]
        ]);

    }
}
