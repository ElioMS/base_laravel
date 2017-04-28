<?php 
	
return[

	'menu' => [

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
                    [
                        'text' => 'Products',
                        'url' => 'products.index',
                        'ico' => 'fa fa-envelope'
                    ],
            ]
        ],
        [
         'type' => 'tree',
         'text' => 'Settings',
         'ico'  => 'cog',
         'childs' => [
                [
                  'text' => 'Seo',
                  'url' => 'seo.index',
                  'ico' => 'fa fa-groups'
                ],
                // [
                //     'text' => 'Products',
                //     'url' => 'products.index',
                // ],
                // [
                //   'text' => 'Redirecciones',
                //   'url' => '',
                //   'ico' => 'fa fa-home'
                // ],

            ]
        ],

	]
]
?>