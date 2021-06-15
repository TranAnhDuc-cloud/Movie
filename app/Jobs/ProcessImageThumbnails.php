<?php

namespace App\Jobs;

use App\User as UserImage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessImageThumbnails implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $image;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(UserImage $image)
    {
        //
        $this->image = $image;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //
        $image = $this->image;
        $full_image_path = public_path($image->avatar);
        $resized_image_path = public_path('thumbs' . DIRECTORY_SEPARATOR .  $image->avatar);
 
        // create image thumbs from the original image
        $img = \Image::make($full_image_path)->resize(215, 215);
        $img->save($resized_image_path);
    }
}
