<?php

use App\Status;
use Illuminate\Database\Seeder;

class RelationshipsTableSeeder extends Seeder {

  protected $table = 'relationships';

  public function run()
  {
    DB::table($this->table)->truncate();

    DB::table($this->table)->insert(['follower_id' => 1, 'following_id' => 2]);
    DB::table($this->table)->insert(['follower_id' => 1, 'following_id' => 3]);
    DB::table($this->table)->insert(['follower_id' => 1, 'following_id' => 5]);
    DB::table($this->table)->insert(['follower_id' => 1, 'following_id' => 7]);
    DB::table($this->table)->insert(['follower_id' => 1, 'following_id' => 9]);
    DB::table($this->table)->insert(['follower_id' => 1, 'following_id' => 10]);

    DB::table($this->table)->insert(['follower_id' => 2, 'following_id' => 11]);
    DB::table($this->table)->insert(['follower_id' => 2, 'following_id' => 10]);
    DB::table($this->table)->insert(['follower_id' => 2, 'following_id' => 1]);
    DB::table($this->table)->insert(['follower_id' => 3, 'following_id' => 1]);
    DB::table($this->table)->insert(['follower_id' => 3, 'following_id' => 2]);
    DB::table($this->table)->insert(['follower_id' => 4, 'following_id' => 10]);
    DB::table($this->table)->insert(['follower_id' => 4, 'following_id' => 5]);
    DB::table($this->table)->insert(['follower_id' => 4, 'following_id' => 2]);
    DB::table($this->table)->insert(['follower_id' => 5, 'following_id' => 8]);
    DB::table($this->table)->insert(['follower_id' => 6, 'following_id' => 9]);
    DB::table($this->table)->insert(['follower_id' => 8, 'following_id' => 9]);
    DB::table($this->table)->insert(['follower_id' => 9, 'following_id' => 4]);
  }

}
