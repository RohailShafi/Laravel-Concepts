<?php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;

class DeletePosts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:delete-posts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Posts Deleted';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $posts = Post::take(5)->get();

        foreach ($posts as $key => $post){

            $post->delete();
            $this->info($key . ' deleted');
        }

        $this->info('Posts deleted Successfully');
    }
}
