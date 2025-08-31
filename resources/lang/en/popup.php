<?php

return [
    'title' => 'Order a consultation',
    'name' => 'Your name',
    'phone' => 'Your phone number',
    'message' => 'Your message',
    'btn' => 'Order a consultation',
    'error' => [
        'name_required' => 'The "Your Name" field is required',
        'name_min'      => 'The "Name" field must be at least 2 characters',
        'name_max'      => 'The "Name" field may not be greater than 80 characters',
        'name_regex'    => 'The "Name" field cannot contain numbers',
        'phone_regex'   => 'Invalid phone number format',
        'phone_required'=> 'The "Phone Number" field is required',
        'text_max'    => 'The message must not exceed 1000 characters',
        'text_string' => 'The message must be text',
    ],
];