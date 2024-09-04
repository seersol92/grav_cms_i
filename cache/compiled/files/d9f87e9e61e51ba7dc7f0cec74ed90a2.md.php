<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'D:/wamp64/www/project_i/user/pages/03.contact/contact.md',
    'modified' => 1712043146,
    'size' => 1889,
    'data' => [
        'header' => [
            'title' => 'Contact Me',
            'menu' => 'Contact',
            'subheading' => 'Have questions? I have answers (maybe).',
            'header_image' => 'contact-bg.jpg',
            'form' => [
                'name' => 'contact-form',
                'message_color' => 'danger',
                'fields' => [
                    0 => [
                        'name' => 'name',
                        'label' => 'THEME_CLEAN_BLOG.CONTACT.NAME',
                        'placeholder' => 'THEME_CLEAN_BLOG.CONTACT.NAME',
                        'type' => 'text',
                        'validate' => [
                            'required' => true
                        ],
                        'classes' => 'form-control'
                    ],
                    1 => [
                        'name' => 'email',
                        'label' => 'THEME_CLEAN_BLOG.CONTACT.EMAIL',
                        'placeholder' => 'THEME_CLEAN_BLOG.CONTACT.EMAIL',
                        'type' => 'email',
                        'validate' => [
                            'required' => true
                        ],
                        'classes' => 'form-control'
                    ],
                    2 => [
                        'name' => 'phone',
                        'label' => 'THEME_CLEAN_BLOG.CONTACT.PHONE',
                        'placeholder' => 'THEME_CLEAN_BLOG.CONTACT.PHONE',
                        'type' => 'text',
                        'classes' => 'form-control'
                    ],
                    3 => [
                        'name' => 'message',
                        'label' => 'THEME_CLEAN_BLOG.CONTACT.MESSAGE',
                        'placeholder' => 'THEME_CLEAN_BLOG.CONTACT.MESSAGE',
                        'type' => 'textarea',
                        'rows' => 5,
                        'validate' => [
                            'required' => true
                        ],
                        'classes' => 'form-control'
                    ]
                ],
                'buttons' => [
                    0 => [
                        'type' => 'submit',
                        'value' => 'THEME_CLEAN_BLOG.CONTACT.SEND'
                    ]
                ],
                'process' => [
                    0 => [
                        'email' => [
                            'from' => '{{ config.plugins.email.from }}',
                            'to' => [
                                0 => '{{ config.plugins.email.from }}'
                            ],
                            'subject' => '[Contact] {{ form.value.name|e }}',
                            'body' => '{% include \'forms/data.html.twig\' %}'
                        ]
                    ],
                    1 => [
                        'save' => [
                            'fileprefix' => 'contact-',
                            'dateformat' => 'Ymd-His-u',
                            'extension' => 'txt',
                            'body' => '{% include \'forms/data.txt.twig\' %}'
                        ]
                    ],
                    2 => [
                        'display' => 'thank-you'
                    ],
                    3 => [
                        'reset' => true
                    ]
                ]
            ]
        ],
        'frontmatter' => 'title: Contact Me
menu: Contact
subheading: Have questions? I have answers (maybe).
header_image: contact-bg.jpg

form:
    name: contact-form
    message_color: danger
    fields:
        -
            name: name
            label: THEME_CLEAN_BLOG.CONTACT.NAME
            placeholder: THEME_CLEAN_BLOG.CONTACT.NAME
            type: text
            validate:
                required: true
            classes: form-control
        -
            name: email
            label: THEME_CLEAN_BLOG.CONTACT.EMAIL
            placeholder: THEME_CLEAN_BLOG.CONTACT.EMAIL
            type: email
            validate:
                required: true
            classes: form-control
        -
            name: phone
            label: THEME_CLEAN_BLOG.CONTACT.PHONE
            placeholder: THEME_CLEAN_BLOG.CONTACT.PHONE
            type: text
            classes: form-control
        -
            name: message
            label: THEME_CLEAN_BLOG.CONTACT.MESSAGE
            placeholder: THEME_CLEAN_BLOG.CONTACT.MESSAGE
            type: textarea
            rows: 5
            validate:
                required: true
            classes: form-control
    buttons:
        -
            type: submit
            value: THEME_CLEAN_BLOG.CONTACT.SEND
    process:
        - email:
            from: "{{ config.plugins.email.from }}"
            to:
                -
                    "{{ config.plugins.email.from }}"
            subject: "[Contact] {{ form.value.name|e }}"
            body: "{% include \'forms/data.html.twig\' %}"
        - save:
            fileprefix: contact-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include \'forms/data.txt.twig\' %}"
        - display: thank-you
        - reset: true',
        'markdown' => 'Want to get in touch with me? Fill out the form below to send me a message and I will try to get back to you within 24 hours!
'
    ]
];
