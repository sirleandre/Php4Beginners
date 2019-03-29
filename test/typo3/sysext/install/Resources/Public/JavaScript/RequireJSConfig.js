var require = {
	baseUrl: '',
	urlArgs: 'bust=' + (new Date()).getTime(),
	paths: {
		'TYPO3/CMS/Backend': 'sysext/backend/Resources/Public/JavaScript/',
		'TYPO3/CMS/Install': 'sysext/install/Resources/Public/JavaScript/Modules/',
		'jquery': 'sysext/core/Resources/Public/JavaScript/Contrib/jquery/jquery-3.2.1.min',
		'jquery.clearable': 'sysext/backend/Resources/Public/JavaScript/jquery.clearable',
		'TYPO3/CMS/Core/Contrib/jquery.minicolors': 'sysext/core/Resources/Public/JavaScript/Contrib/jquery.minicolors',
		'bootstrap': 'sysext/install/Resources/Public/JavaScript/bootstrap.min',
		'chosen': 'sysext/install/Resources/Public/JavaScript/chosen.jquery.min'
	},
	shim: {
		jQuery: {
			exports: '$'
		},
		'bootstrap': {
			'deps': ['jquery']
		}
	}
};
