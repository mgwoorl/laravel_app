<?php

// app/Console/Commands/PublishPost.php

namespace App\Console\Commands;

use App\Models\Post;
use Illuminate\Console\Command;

class PublishPost extends Command
{
    protected $signature = 'posts:publish';
    protected $description = 'Автоматически публиковать посты';

    public function handle()
    {
        $posts = Post::whereNotNull('published_at')->where('published_at', '<=', now())->get();
        
        foreach ($posts as $post) {
            $post->update(['published_at' => now()]);
        }
        
        $this->info('Посты успешно опубликованы');
    }
}