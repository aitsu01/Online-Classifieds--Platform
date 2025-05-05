<?php

namespace App\Jobs;

use Spatie\Image\Image;
use Spatie\Image\Enums\Unit;
use Illuminate\Bus\Queueable;
use Spatie\Image\Enums\AlignPosition;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class AddWatermark implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private string $filePath;

    /**
     * Create a new job instance.
     */
    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $fullPath = storage_path('app/public/' . $this->filePath);

        if (!file_exists($fullPath)) {
            \Log::warning("ApplyWatermark: file not found at $fullPath");
            return;
        }

        Image::load($fullPath)
            ->watermark(
                base_path('resources/img/watermark.png'),
                AlignPosition::Center,
                width: 500,
                height: 250,
                /* paddingX: 5,
                paddingY: 5,
                paddingUnit: Unit::Percent, */
            )
            ->save($fullPath);
    }
}
