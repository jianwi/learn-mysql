<?php
/**
 * Created by PhpStorm
 * User: Dujianjun
 * Date: 2020/4/7
 * Time: 下午5:44
 */
$factory->define(\App\Models\Student::class,function (\Faker\Generator $faker){
   return [
       'name' => $faker->randomElement(['小明','小红','小刚','小虎','郭靖','杨康','黄蓉']),
       'age' => $faker->randomNumber(2)
   ];
});
