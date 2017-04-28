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
                ],
                // [
                // 'text' => 'Products',
                // 'url' => '',
                // 'ico' => 'fa fa-envelope'
                // ],
        ]
    ],

	]
]
?>