<?php

namespace App\View\Composers\Pages;

use Roots\Acorn\View\Composer;

class Contact extends Composer
{
    protected static $views = [
        'template-contact',
    ];

    public function with(): array
    {
        return [
            'contactForm' => $this->contactForm(),
        ];
    }

    private function contactForm(): string
    {
        return do_shortcode('[contact-form-7 id="69" title="Main"]');
    }
}
