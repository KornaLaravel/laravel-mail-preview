<?php

namespace Spatie\MailPreview;

class PreviewMailController
{
    public function __invoke()
    {
        return file_get_contents(
            request('storage_path')
                ? config('mail-preview.path').'/'.request('storage_path').'.html'
                : last(glob(config('mail-preview.path').'/*.html'))
        );
    }
}
