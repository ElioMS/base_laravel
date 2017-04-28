<?php 
	
return[
	'menu' => [
      // [
      //   'type' => 'simple',
      //   'text' => 'Categories',
      //   'url'  => 'categories.index',
      //   'ico'  => 'edit'
      // ],

      [
        'type' => 'simple',
        'text' => 'Subscriptions',
        'url'  => 'subscriptions.index',
        'ico'  => 'edit'
      ],

      [
        'type' => 'simple',
        'text' => 'Contacts',
        'url'  => 'contacts.index',
        'ico'  => 'edit'
      ],

      // [
      //   'type' => 'simple',
      //   'text' => 'Subcategories',
      //   'url'  => 'subcategories.index',
      //   'ico'  => 'edit'
      // ],


    [
        'type' => 'tree',
        'text' => 'Productos',
        'ico'  => 'shopping-cart',
        'childs' => [
                [
                    'text' => 'Categories',
                    'url' => 'categories.index',
                ],
                [
                    'text' => 'Subcategories',
                    'url' => 'subcategories.index',
                ],
                // [
                // 'text' => 'Products',
                // 'url' => '',
                // 'ico' => 'fa fa-envelope'
                // ],
        ]
    ],


        // [
        //     'type' => 'simple',
        //     'text' => 'Galleries',
        //     'url'  => '',
        //     'ico'  => 'sound-dolby'
        // ],

        // [
        //     'type' => 'simple',
        //     'text' => 'News',
        //     'url'  => '',
        //     'ico'  => 'export'
        // ],

        // [
        //     'type' => 'simple',
        //     'text' => 'Contact',
        //     'url'  => '',
        //     'ico'  => 'earphone'
        // ],

        // [
        //  'type' => 'tree',
        //  'text' => 'Productos',
        //  'ico'  => 'shopping-cart',
        //  'childs' => [
        //         [
        //           'text' => 'Categories',
        //           'url' => '',
        //           'ico' => 'fa fa-groups'
        //         ],
        //         [
        //           'text' => 'Subcategories',
        //           'url' => '',
        //           'ico' => 'fa fa-home'
        //         ],
        //         [
        //           'text' => 'Products',
        //           'url' => '',
        //           'ico' => 'fa fa-envelope'
        //         ],
        //     ]
        // ],
	]
]
?>