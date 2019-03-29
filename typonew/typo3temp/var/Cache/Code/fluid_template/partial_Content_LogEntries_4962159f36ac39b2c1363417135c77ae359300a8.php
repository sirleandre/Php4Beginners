<?php

class partial_Content_LogEntries_4962159f36ac39b2c1363417135c77ae359300a8 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this; 
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'core' => 
  array (
    0 => 'TYPO3\\CMS\\Core\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'TYPO3\\CMS\\Fluid\\ViewHelpers',
  ),
  'formvh' => 
  array (
    0 => 'TYPO3\\CMS\\Form\\ViewHelpers',
  ),
  'belog' => 
  array (
    0 => 'TYPO3\\CMS\\Belog\\ViewHelpers',
  ),
  'be' => 
  array (
    0 => 'TYPO3\\CMS\\Backend\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '


';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output6 = '';

$output6 .= '
	<div>
		<h2>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['key'] = NULL;
$arguments7['id'] = NULL;
$arguments7['default'] = NULL;
$arguments7['htmlEscape'] = NULL;
$arguments7['arguments'] = NULL;
$arguments7['extensionName'] = NULL;
$arguments7['key'] = 'overview';

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext)]);

$output6 .= '
		</h2>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['key'] = NULL;
$arguments9['id'] = NULL;
$arguments9['default'] = NULL;
$arguments9['htmlEscape'] = NULL;
$arguments9['arguments'] = NULL;
$arguments9['extensionName'] = NULL;
$arguments9['key'] = 'timeInfo';
// Rendering Array
$array11 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments12 = array();
$arguments12['date'] = NULL;
$arguments12['format'] = '';
$arguments12['base'] = NULL;
$output14 = '';
$array15 = array (
);
$output14 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array15);

$output14 .= ' ';
$array16 = array (
);
$output14 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array16);
$arguments12['format'] = $output14;
$array17 = array (
);$arguments12['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStart', $array17);
$renderChildrenClosure13 = ($arguments12['date'] !== null) ? function() use ($arguments12) { return $arguments12['date']; } : $renderChildrenClosure13;$array11['0'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments12, $renderChildrenClosure13, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure19 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments18 = array();
$arguments18['date'] = NULL;
$arguments18['format'] = '';
$arguments18['base'] = NULL;
$output20 = '';
$array21 = array (
);
$output20 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array21);

$output20 .= ' ';
$array22 = array (
);
$output20 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array22);
$arguments18['format'] = $output20;
$array23 = array (
);$arguments18['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStop', $array23);
$renderChildrenClosure19 = ($arguments18['date'] !== null) ? function() use ($arguments18) { return $arguments18['date']; } : $renderChildrenClosure19;$array11['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments18, $renderChildrenClosure19, $renderingContext);
$arguments9['arguments'] = $array11;

$output6 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output6 .= '
		<p>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure25 = function() use ($renderingContext, $self) {
$output27 = '';

$output27 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure29 = function() use ($renderingContext, $self) {
$output33 = '';

$output33 .= '
					<br />
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure35 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments34 = array();
$arguments34['key'] = NULL;
$arguments34['id'] = NULL;
$arguments34['default'] = NULL;
$arguments34['htmlEscape'] = NULL;
$arguments34['arguments'] = NULL;
$arguments34['extensionName'] = NULL;
$arguments34['key'] = 'pagenameWithUID';
// Rendering Array
$array36 = array();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper
$renderChildrenClosure38 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments37 = array();
$arguments37['pid'] = NULL;
$arguments37['titleLimit'] = 20;
$array39 = array (
);$arguments37['pid'] = $renderingContext->getVariableProvider()->getByPath('pid', $array39);
$array36['0'] = TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper::renderStatic($arguments37, $renderChildrenClosure38, $renderingContext);
$array40 = array (
);$array36['1'] = $renderingContext->getVariableProvider()->getByPath('pid', $array40);
$arguments34['arguments'] = $array36;

$output33 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments34, $renderChildrenClosure35, $renderingContext)]);

$output33 .= '
				';
return $output33;
};
$arguments28 = array();
$arguments28['then'] = NULL;
$arguments28['else'] = NULL;
$arguments28['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array30 = array();
$array31 = array (
);$array30['0'] = $renderingContext->getVariableProvider()->getByPath('pid', $array31);
$array30['1'] = ' > 0';

$expression32 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};
$arguments28['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression32(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array30)
					),
					$renderingContext
				);
$arguments28['__thenClosure'] = $renderChildrenClosure29;

$output27 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments28, $renderChildrenClosure29, $renderingContext);

$output27 .= '
			';
return $output27;
};
$arguments24 = array();
$arguments24['each'] = NULL;
$arguments24['as'] = NULL;
$arguments24['key'] = NULL;
$arguments24['reverse'] = false;
$arguments24['iteration'] = NULL;
$array26 = array (
);$arguments24['each'] = $renderingContext->getVariableProvider()->getByPath('groupedLogEntries', $array26);
$arguments24['as'] = 'pidEntry';
$arguments24['key'] = 'pid';

$output6 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments24, $renderChildrenClosure25, $renderingContext);

$output6 .= '
		</p>
	</div>
';
return $output6;
};
$arguments1 = array();
$arguments1['then'] = NULL;
$arguments1['else'] = NULL;
$arguments1['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array3 = array();
$array4 = array (
);$array3['0'] = $renderingContext->getVariableProvider()->getByPath('constraint.groupByPage', $array4);

$expression5 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments1['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression5(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array3)
					),
					$renderingContext
				);
$arguments1['__thenClosure'] = $renderChildrenClosure2;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
	<div>
		<h2>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$output227 = '';

$output227 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure229 = function() use ($renderingContext, $self) {
$output230 = '';

$output230 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure232 = function() use ($renderingContext, $self) {
$output311 = '';

$output311 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure313 = function() use ($renderingContext, $self) {
$output314 = '';

$output314 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure316 = function() use ($renderingContext, $self) {
$output320 = '';

$output320 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure322 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments321 = array();
$arguments321['key'] = NULL;
$arguments321['id'] = NULL;
$arguments321['default'] = NULL;
$arguments321['htmlEscape'] = NULL;
$arguments321['arguments'] = NULL;
$arguments321['extensionName'] = NULL;
$arguments321['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array323 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure325 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments324 = array();
$arguments324['key'] = NULL;
$arguments324['id'] = NULL;
$arguments324['default'] = NULL;
$arguments324['htmlEscape'] = NULL;
$arguments324['arguments'] = NULL;
$arguments324['extensionName'] = NULL;
$arguments324['key'] = 'forNonPageRelatedActions';
$array323['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments324, $renderChildrenClosure325, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure327 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments326 = array();
$arguments326['date'] = NULL;
$arguments326['format'] = '';
$arguments326['base'] = NULL;
$output328 = '';
$array329 = array (
);
$output328 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array329);

$output328 .= ' ';
$array330 = array (
);
$output328 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array330);
$arguments326['format'] = $output328;
$array331 = array (
);$arguments326['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStart', $array331);
$renderChildrenClosure327 = ($arguments326['date'] !== null) ? function() use ($arguments326) { return $arguments326['date']; } : $renderChildrenClosure327;$array323['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments326, $renderChildrenClosure327, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure333 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments332 = array();
$arguments332['date'] = NULL;
$arguments332['format'] = '';
$arguments332['base'] = NULL;
$output334 = '';
$array335 = array (
);
$output334 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array335);

$output334 .= ' ';
$array336 = array (
);
$output334 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array336);
$arguments332['format'] = $output334;
$array337 = array (
);$arguments332['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStop', $array337);
$renderChildrenClosure333 = ($arguments332['date'] !== null) ? function() use ($arguments332) { return $arguments332['date']; } : $renderChildrenClosure333;$array323['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments332, $renderChildrenClosure333, $renderingContext);
$arguments321['arguments'] = $array323;

$output320 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments321, $renderChildrenClosure322, $renderingContext)]);

$output320 .= '
							';
return $output320;
};
$arguments315 = array();
$arguments315['then'] = NULL;
$arguments315['else'] = NULL;
$arguments315['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array317 = array();
$array318 = array (
);$array317['0'] = $renderingContext->getVariableProvider()->getByPath('pid', $array318);
$array317['1'] = ' == -1';

$expression319 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -1);};
$arguments315['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression319(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array317)
					),
					$renderingContext
				);
$arguments315['__thenClosure'] = $renderChildrenClosure316;

$output314 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments315, $renderChildrenClosure316, $renderingContext);

$output314 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure339 = function() use ($renderingContext, $self) {
$output343 = '';

$output343 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure345 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments344 = array();
$arguments344['key'] = NULL;
$arguments344['id'] = NULL;
$arguments344['default'] = NULL;
$arguments344['htmlEscape'] = NULL;
$arguments344['arguments'] = NULL;
$arguments344['extensionName'] = NULL;
$arguments344['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array346 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure348 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments347 = array();
$arguments347['key'] = NULL;
$arguments347['id'] = NULL;
$arguments347['default'] = NULL;
$arguments347['htmlEscape'] = NULL;
$arguments347['arguments'] = NULL;
$arguments347['extensionName'] = NULL;
$arguments347['key'] = 'forRootLevel';
$array346['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments347, $renderChildrenClosure348, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure350 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments349 = array();
$arguments349['date'] = NULL;
$arguments349['format'] = '';
$arguments349['base'] = NULL;
$output351 = '';
$array352 = array (
);
$output351 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array352);

$output351 .= ' ';
$array353 = array (
);
$output351 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array353);
$arguments349['format'] = $output351;
$array354 = array (
);$arguments349['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStart', $array354);
$renderChildrenClosure350 = ($arguments349['date'] !== null) ? function() use ($arguments349) { return $arguments349['date']; } : $renderChildrenClosure350;$array346['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments349, $renderChildrenClosure350, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure356 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments355 = array();
$arguments355['date'] = NULL;
$arguments355['format'] = '';
$arguments355['base'] = NULL;
$output357 = '';
$array358 = array (
);
$output357 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array358);

$output357 .= ' ';
$array359 = array (
);
$output357 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array359);
$arguments355['format'] = $output357;
$array360 = array (
);$arguments355['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStop', $array360);
$renderChildrenClosure356 = ($arguments355['date'] !== null) ? function() use ($arguments355) { return $arguments355['date']; } : $renderChildrenClosure356;$array346['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments355, $renderChildrenClosure356, $renderingContext);
$arguments344['arguments'] = $array346;

$output343 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments344, $renderChildrenClosure345, $renderingContext)]);

$output343 .= '
							';
return $output343;
};
$arguments338 = array();
$arguments338['then'] = NULL;
$arguments338['else'] = NULL;
$arguments338['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array340 = array();
$array341 = array (
);$array340['0'] = $renderingContext->getVariableProvider()->getByPath('pid', $array341);
$array340['1'] = ' == 0';

$expression342 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments338['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression342(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array340)
					),
					$renderingContext
				);
$arguments338['__thenClosure'] = $renderChildrenClosure339;

$output314 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments338, $renderChildrenClosure339, $renderingContext);

$output314 .= '
						';
return $output314;
};
$arguments312 = array();

$output311 .= '';

$output311 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure362 = function() use ($renderingContext, $self) {
$output363 = '';

$output363 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure365 = function() use ($renderingContext, $self) {
return '
								Nest view helpers three times:
								1. Feed pid as argument to be.pagePath
								2. Use this as argument for \'forPage\' translate
								3. Use this as argument for \'logForNonPageRelatedActionsOrRootLevelOrPage\' translate
							';
};
$arguments364 = array();

$output363 .= NULL;

$output363 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure367 = function() use ($renderingContext, $self) {
$output368 = '';

$output368 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure370 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments369 = array();
$arguments369['key'] = NULL;
$arguments369['id'] = NULL;
$arguments369['default'] = NULL;
$arguments369['htmlEscape'] = NULL;
$arguments369['arguments'] = NULL;
$arguments369['extensionName'] = NULL;
$arguments369['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array371 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure373 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments372 = array();
$arguments372['key'] = NULL;
$arguments372['id'] = NULL;
$arguments372['default'] = NULL;
$arguments372['htmlEscape'] = NULL;
$arguments372['arguments'] = NULL;
$arguments372['extensionName'] = NULL;
$arguments372['key'] = 'forPage';
// Rendering Array
$array374 = array();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper
$renderChildrenClosure376 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments375 = array();
$arguments375['pid'] = NULL;
$arguments375['titleLimit'] = 20;
$array377 = array (
);$arguments375['pid'] = $renderingContext->getVariableProvider()->getByPath('pid', $array377);
$array374['0'] = TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper::renderStatic($arguments375, $renderChildrenClosure376, $renderingContext);
$array378 = array (
);$array374['1'] = $renderingContext->getVariableProvider()->getByPath('pid', $array378);
$arguments372['arguments'] = $array374;
$array371['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments372, $renderChildrenClosure373, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure380 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments379 = array();
$arguments379['date'] = NULL;
$arguments379['format'] = '';
$arguments379['base'] = NULL;
$output381 = '';
$array382 = array (
);
$output381 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array382);

$output381 .= ' ';
$array383 = array (
);
$output381 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array383);
$arguments379['format'] = $output381;
$array384 = array (
);$arguments379['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStart', $array384);
$renderChildrenClosure380 = ($arguments379['date'] !== null) ? function() use ($arguments379) { return $arguments379['date']; } : $renderChildrenClosure380;$array371['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments379, $renderChildrenClosure380, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure386 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments385 = array();
$arguments385['date'] = NULL;
$arguments385['format'] = '';
$arguments385['base'] = NULL;
$output387 = '';
$array388 = array (
);
$output387 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array388);

$output387 .= ' ';
$array389 = array (
);
$output387 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array389);
$arguments385['format'] = $output387;
$array390 = array (
);$arguments385['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStop', $array390);
$renderChildrenClosure386 = ($arguments385['date'] !== null) ? function() use ($arguments385) { return $arguments385['date']; } : $renderChildrenClosure386;$array371['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments385, $renderChildrenClosure386, $renderingContext);
$arguments369['arguments'] = $array371;

$output368 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments369, $renderChildrenClosure370, $renderingContext);

$output368 .= '
							';
return $output368;
};
$arguments366 = array();
$arguments366['value'] = NULL;

$output363 .= isset($arguments366['value']) ? $arguments366['value'] : $renderChildrenClosure367();

$output363 .= '
						';
return $output363;
};
$arguments361 = array();
$arguments361['if'] = NULL;

$output311 .= '';

$output311 .= '
					';
return $output311;
};
$arguments231 = array();
$arguments231['then'] = NULL;
$arguments231['else'] = NULL;
$arguments231['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array308 = array();
$array309 = array (
);$array308['0'] = $renderingContext->getVariableProvider()->getByPath('pid', $array309);
$array308['1'] = ' < 1';

$expression310 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) < 1);};
$arguments231['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression310(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array308)
					),
					$renderingContext
				);
$arguments231['__thenClosure'] = function() use ($renderingContext, $self) {
$output233 = '';

$output233 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
$output239 = '';

$output239 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure241 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments240 = array();
$arguments240['key'] = NULL;
$arguments240['id'] = NULL;
$arguments240['default'] = NULL;
$arguments240['htmlEscape'] = NULL;
$arguments240['arguments'] = NULL;
$arguments240['extensionName'] = NULL;
$arguments240['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array242 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure244 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments243 = array();
$arguments243['key'] = NULL;
$arguments243['id'] = NULL;
$arguments243['default'] = NULL;
$arguments243['htmlEscape'] = NULL;
$arguments243['arguments'] = NULL;
$arguments243['extensionName'] = NULL;
$arguments243['key'] = 'forNonPageRelatedActions';
$array242['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments243, $renderChildrenClosure244, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments245 = array();
$arguments245['date'] = NULL;
$arguments245['format'] = '';
$arguments245['base'] = NULL;
$output247 = '';
$array248 = array (
);
$output247 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array248);

$output247 .= ' ';
$array249 = array (
);
$output247 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array249);
$arguments245['format'] = $output247;
$array250 = array (
);$arguments245['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStart', $array250);
$renderChildrenClosure246 = ($arguments245['date'] !== null) ? function() use ($arguments245) { return $arguments245['date']; } : $renderChildrenClosure246;$array242['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments245, $renderChildrenClosure246, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure252 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments251 = array();
$arguments251['date'] = NULL;
$arguments251['format'] = '';
$arguments251['base'] = NULL;
$output253 = '';
$array254 = array (
);
$output253 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array254);

$output253 .= ' ';
$array255 = array (
);
$output253 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array255);
$arguments251['format'] = $output253;
$array256 = array (
);$arguments251['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStop', $array256);
$renderChildrenClosure252 = ($arguments251['date'] !== null) ? function() use ($arguments251) { return $arguments251['date']; } : $renderChildrenClosure252;$array242['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments251, $renderChildrenClosure252, $renderingContext);
$arguments240['arguments'] = $array242;

$output239 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments240, $renderChildrenClosure241, $renderingContext)]);

$output239 .= '
							';
return $output239;
};
$arguments234 = array();
$arguments234['then'] = NULL;
$arguments234['else'] = NULL;
$arguments234['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array236 = array();
$array237 = array (
);$array236['0'] = $renderingContext->getVariableProvider()->getByPath('pid', $array237);
$array236['1'] = ' == -1';

$expression238 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -1);};
$arguments234['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression238(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array236)
					),
					$renderingContext
				);
$arguments234['__thenClosure'] = $renderChildrenClosure235;

$output233 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments234, $renderChildrenClosure235, $renderingContext);

$output233 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure258 = function() use ($renderingContext, $self) {
$output262 = '';

$output262 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure264 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments263 = array();
$arguments263['key'] = NULL;
$arguments263['id'] = NULL;
$arguments263['default'] = NULL;
$arguments263['htmlEscape'] = NULL;
$arguments263['arguments'] = NULL;
$arguments263['extensionName'] = NULL;
$arguments263['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array265 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure267 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments266 = array();
$arguments266['key'] = NULL;
$arguments266['id'] = NULL;
$arguments266['default'] = NULL;
$arguments266['htmlEscape'] = NULL;
$arguments266['arguments'] = NULL;
$arguments266['extensionName'] = NULL;
$arguments266['key'] = 'forRootLevel';
$array265['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments266, $renderChildrenClosure267, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure269 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments268 = array();
$arguments268['date'] = NULL;
$arguments268['format'] = '';
$arguments268['base'] = NULL;
$output270 = '';
$array271 = array (
);
$output270 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array271);

$output270 .= ' ';
$array272 = array (
);
$output270 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array272);
$arguments268['format'] = $output270;
$array273 = array (
);$arguments268['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStart', $array273);
$renderChildrenClosure269 = ($arguments268['date'] !== null) ? function() use ($arguments268) { return $arguments268['date']; } : $renderChildrenClosure269;$array265['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments268, $renderChildrenClosure269, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure275 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments274 = array();
$arguments274['date'] = NULL;
$arguments274['format'] = '';
$arguments274['base'] = NULL;
$output276 = '';
$array277 = array (
);
$output276 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array277);

$output276 .= ' ';
$array278 = array (
);
$output276 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array278);
$arguments274['format'] = $output276;
$array279 = array (
);$arguments274['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStop', $array279);
$renderChildrenClosure275 = ($arguments274['date'] !== null) ? function() use ($arguments274) { return $arguments274['date']; } : $renderChildrenClosure275;$array265['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments274, $renderChildrenClosure275, $renderingContext);
$arguments263['arguments'] = $array265;

$output262 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments263, $renderChildrenClosure264, $renderingContext)]);

$output262 .= '
							';
return $output262;
};
$arguments257 = array();
$arguments257['then'] = NULL;
$arguments257['else'] = NULL;
$arguments257['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array259 = array();
$array260 = array (
);$array259['0'] = $renderingContext->getVariableProvider()->getByPath('pid', $array260);
$array259['1'] = ' == 0';

$expression261 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments257['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression261(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array259)
					),
					$renderingContext
				);
$arguments257['__thenClosure'] = $renderChildrenClosure258;

$output233 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments257, $renderChildrenClosure258, $renderingContext);

$output233 .= '
						';
return $output233;
};
$arguments231['__elseClosures'][] = function() use ($renderingContext, $self) {
$output280 = '';

$output280 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure282 = function() use ($renderingContext, $self) {
return '
								Nest view helpers three times:
								1. Feed pid as argument to be.pagePath
								2. Use this as argument for \'forPage\' translate
								3. Use this as argument for \'logForNonPageRelatedActionsOrRootLevelOrPage\' translate
							';
};
$arguments281 = array();

$output280 .= NULL;

$output280 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure284 = function() use ($renderingContext, $self) {
$output285 = '';

$output285 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure287 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments286 = array();
$arguments286['key'] = NULL;
$arguments286['id'] = NULL;
$arguments286['default'] = NULL;
$arguments286['htmlEscape'] = NULL;
$arguments286['arguments'] = NULL;
$arguments286['extensionName'] = NULL;
$arguments286['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array288 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure290 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments289 = array();
$arguments289['key'] = NULL;
$arguments289['id'] = NULL;
$arguments289['default'] = NULL;
$arguments289['htmlEscape'] = NULL;
$arguments289['arguments'] = NULL;
$arguments289['extensionName'] = NULL;
$arguments289['key'] = 'forPage';
// Rendering Array
$array291 = array();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper
$renderChildrenClosure293 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments292 = array();
$arguments292['pid'] = NULL;
$arguments292['titleLimit'] = 20;
$array294 = array (
);$arguments292['pid'] = $renderingContext->getVariableProvider()->getByPath('pid', $array294);
$array291['0'] = TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper::renderStatic($arguments292, $renderChildrenClosure293, $renderingContext);
$array295 = array (
);$array291['1'] = $renderingContext->getVariableProvider()->getByPath('pid', $array295);
$arguments289['arguments'] = $array291;
$array288['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments289, $renderChildrenClosure290, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure297 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments296 = array();
$arguments296['date'] = NULL;
$arguments296['format'] = '';
$arguments296['base'] = NULL;
$output298 = '';
$array299 = array (
);
$output298 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array299);

$output298 .= ' ';
$array300 = array (
);
$output298 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array300);
$arguments296['format'] = $output298;
$array301 = array (
);$arguments296['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStart', $array301);
$renderChildrenClosure297 = ($arguments296['date'] !== null) ? function() use ($arguments296) { return $arguments296['date']; } : $renderChildrenClosure297;$array288['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments296, $renderChildrenClosure297, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments302 = array();
$arguments302['date'] = NULL;
$arguments302['format'] = '';
$arguments302['base'] = NULL;
$output304 = '';
$array305 = array (
);
$output304 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array305);

$output304 .= ' ';
$array306 = array (
);
$output304 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array306);
$arguments302['format'] = $output304;
$array307 = array (
);$arguments302['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStop', $array307);
$renderChildrenClosure303 = ($arguments302['date'] !== null) ? function() use ($arguments302) { return $arguments302['date']; } : $renderChildrenClosure303;$array288['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments302, $renderChildrenClosure303, $renderingContext);
$arguments286['arguments'] = $array288;

$output285 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments286, $renderChildrenClosure287, $renderingContext);

$output285 .= '
							';
return $output285;
};
$arguments283 = array();
$arguments283['value'] = NULL;

$output280 .= isset($arguments283['value']) ? $arguments283['value'] : $renderChildrenClosure284();

$output280 .= '
						';
return $output280;
};

$output230 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments231, $renderChildrenClosure232, $renderingContext);

$output230 .= '
				';
return $output230;
};
$arguments228 = array();

$output227 .= '';

$output227 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure392 = function() use ($renderingContext, $self) {
$output393 = '';

$output393 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure395 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments394 = array();
$arguments394['key'] = NULL;
$arguments394['id'] = NULL;
$arguments394['default'] = NULL;
$arguments394['htmlEscape'] = NULL;
$arguments394['arguments'] = NULL;
$arguments394['extensionName'] = NULL;
$arguments394['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array396 = array();
$array396['0'] = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure398 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments397 = array();
$arguments397['date'] = NULL;
$arguments397['format'] = '';
$arguments397['base'] = NULL;
$output399 = '';
$array400 = array (
);
$output399 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array400);

$output399 .= ' ';
$array401 = array (
);
$output399 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array401);
$arguments397['format'] = $output399;
$array402 = array (
);$arguments397['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStart', $array402);
$renderChildrenClosure398 = ($arguments397['date'] !== null) ? function() use ($arguments397) { return $arguments397['date']; } : $renderChildrenClosure398;$array396['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments397, $renderChildrenClosure398, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure404 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments403 = array();
$arguments403['date'] = NULL;
$arguments403['format'] = '';
$arguments403['base'] = NULL;
$output405 = '';
$array406 = array (
);
$output405 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array406);

$output405 .= ' ';
$array407 = array (
);
$output405 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array407);
$arguments403['format'] = $output405;
$array408 = array (
);$arguments403['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStop', $array408);
$renderChildrenClosure404 = ($arguments403['date'] !== null) ? function() use ($arguments403) { return $arguments403['date']; } : $renderChildrenClosure404;$array396['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments403, $renderChildrenClosure404, $renderingContext);
$arguments394['arguments'] = $array396;

$output393 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments394, $renderChildrenClosure395, $renderingContext)]);

$output393 .= '
				';
return $output393;
};
$arguments391 = array();
$arguments391['if'] = NULL;

$output227 .= '';

$output227 .= '
			';
return $output227;
};
$arguments45 = array();
$arguments45['then'] = NULL;
$arguments45['else'] = NULL;
$arguments45['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array224 = array();
$array225 = array (
);$array224['0'] = $renderingContext->getVariableProvider()->getByPath('constraint.groupByPage', $array225);

$expression226 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments45['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression226(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array224)
					),
					$renderingContext
				);
$arguments45['__thenClosure'] = function() use ($renderingContext, $self) {
$output47 = '';

$output47 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$output128 = '';

$output128 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure130 = function() use ($renderingContext, $self) {
$output131 = '';

$output131 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
$output137 = '';

$output137 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure139 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments138 = array();
$arguments138['key'] = NULL;
$arguments138['id'] = NULL;
$arguments138['default'] = NULL;
$arguments138['htmlEscape'] = NULL;
$arguments138['arguments'] = NULL;
$arguments138['extensionName'] = NULL;
$arguments138['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array140 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure142 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments141 = array();
$arguments141['key'] = NULL;
$arguments141['id'] = NULL;
$arguments141['default'] = NULL;
$arguments141['htmlEscape'] = NULL;
$arguments141['arguments'] = NULL;
$arguments141['extensionName'] = NULL;
$arguments141['key'] = 'forNonPageRelatedActions';
$array140['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments141, $renderChildrenClosure142, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure144 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments143 = array();
$arguments143['date'] = NULL;
$arguments143['format'] = '';
$arguments143['base'] = NULL;
$output145 = '';
$array146 = array (
);
$output145 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array146);

$output145 .= ' ';
$array147 = array (
);
$output145 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array147);
$arguments143['format'] = $output145;
$array148 = array (
);$arguments143['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStart', $array148);
$renderChildrenClosure144 = ($arguments143['date'] !== null) ? function() use ($arguments143) { return $arguments143['date']; } : $renderChildrenClosure144;$array140['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments143, $renderChildrenClosure144, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure150 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments149 = array();
$arguments149['date'] = NULL;
$arguments149['format'] = '';
$arguments149['base'] = NULL;
$output151 = '';
$array152 = array (
);
$output151 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array152);

$output151 .= ' ';
$array153 = array (
);
$output151 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array153);
$arguments149['format'] = $output151;
$array154 = array (
);$arguments149['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStop', $array154);
$renderChildrenClosure150 = ($arguments149['date'] !== null) ? function() use ($arguments149) { return $arguments149['date']; } : $renderChildrenClosure150;$array140['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments149, $renderChildrenClosure150, $renderingContext);
$arguments138['arguments'] = $array140;

$output137 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments138, $renderChildrenClosure139, $renderingContext)]);

$output137 .= '
							';
return $output137;
};
$arguments132 = array();
$arguments132['then'] = NULL;
$arguments132['else'] = NULL;
$arguments132['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array134 = array();
$array135 = array (
);$array134['0'] = $renderingContext->getVariableProvider()->getByPath('pid', $array135);
$array134['1'] = ' == -1';

$expression136 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -1);};
$arguments132['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression136(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array134)
					),
					$renderingContext
				);
$arguments132['__thenClosure'] = $renderChildrenClosure133;

$output131 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output131 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
$output160 = '';

$output160 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure162 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments161 = array();
$arguments161['key'] = NULL;
$arguments161['id'] = NULL;
$arguments161['default'] = NULL;
$arguments161['htmlEscape'] = NULL;
$arguments161['arguments'] = NULL;
$arguments161['extensionName'] = NULL;
$arguments161['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array163 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure165 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments164 = array();
$arguments164['key'] = NULL;
$arguments164['id'] = NULL;
$arguments164['default'] = NULL;
$arguments164['htmlEscape'] = NULL;
$arguments164['arguments'] = NULL;
$arguments164['extensionName'] = NULL;
$arguments164['key'] = 'forRootLevel';
$array163['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments164, $renderChildrenClosure165, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure167 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments166 = array();
$arguments166['date'] = NULL;
$arguments166['format'] = '';
$arguments166['base'] = NULL;
$output168 = '';
$array169 = array (
);
$output168 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array169);

$output168 .= ' ';
$array170 = array (
);
$output168 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array170);
$arguments166['format'] = $output168;
$array171 = array (
);$arguments166['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStart', $array171);
$renderChildrenClosure167 = ($arguments166['date'] !== null) ? function() use ($arguments166) { return $arguments166['date']; } : $renderChildrenClosure167;$array163['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments166, $renderChildrenClosure167, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure173 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments172 = array();
$arguments172['date'] = NULL;
$arguments172['format'] = '';
$arguments172['base'] = NULL;
$output174 = '';
$array175 = array (
);
$output174 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array175);

$output174 .= ' ';
$array176 = array (
);
$output174 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array176);
$arguments172['format'] = $output174;
$array177 = array (
);$arguments172['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStop', $array177);
$renderChildrenClosure173 = ($arguments172['date'] !== null) ? function() use ($arguments172) { return $arguments172['date']; } : $renderChildrenClosure173;$array163['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments172, $renderChildrenClosure173, $renderingContext);
$arguments161['arguments'] = $array163;

$output160 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments161, $renderChildrenClosure162, $renderingContext)]);

$output160 .= '
							';
return $output160;
};
$arguments155 = array();
$arguments155['then'] = NULL;
$arguments155['else'] = NULL;
$arguments155['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array157 = array();
$array158 = array (
);$array157['0'] = $renderingContext->getVariableProvider()->getByPath('pid', $array158);
$array157['1'] = ' == 0';

$expression159 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments155['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression159(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array157)
					),
					$renderingContext
				);
$arguments155['__thenClosure'] = $renderChildrenClosure156;

$output131 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments155, $renderChildrenClosure156, $renderingContext);

$output131 .= '
						';
return $output131;
};
$arguments129 = array();

$output128 .= '';

$output128 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure179 = function() use ($renderingContext, $self) {
$output180 = '';

$output180 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure182 = function() use ($renderingContext, $self) {
return '
								Nest view helpers three times:
								1. Feed pid as argument to be.pagePath
								2. Use this as argument for \'forPage\' translate
								3. Use this as argument for \'logForNonPageRelatedActionsOrRootLevelOrPage\' translate
							';
};
$arguments181 = array();

$output180 .= NULL;

$output180 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure184 = function() use ($renderingContext, $self) {
$output185 = '';

$output185 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure187 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments186 = array();
$arguments186['key'] = NULL;
$arguments186['id'] = NULL;
$arguments186['default'] = NULL;
$arguments186['htmlEscape'] = NULL;
$arguments186['arguments'] = NULL;
$arguments186['extensionName'] = NULL;
$arguments186['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array188 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure190 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments189 = array();
$arguments189['key'] = NULL;
$arguments189['id'] = NULL;
$arguments189['default'] = NULL;
$arguments189['htmlEscape'] = NULL;
$arguments189['arguments'] = NULL;
$arguments189['extensionName'] = NULL;
$arguments189['key'] = 'forPage';
// Rendering Array
$array191 = array();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper
$renderChildrenClosure193 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments192 = array();
$arguments192['pid'] = NULL;
$arguments192['titleLimit'] = 20;
$array194 = array (
);$arguments192['pid'] = $renderingContext->getVariableProvider()->getByPath('pid', $array194);
$array191['0'] = TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper::renderStatic($arguments192, $renderChildrenClosure193, $renderingContext);
$array195 = array (
);$array191['1'] = $renderingContext->getVariableProvider()->getByPath('pid', $array195);
$arguments189['arguments'] = $array191;
$array188['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments189, $renderChildrenClosure190, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure197 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments196 = array();
$arguments196['date'] = NULL;
$arguments196['format'] = '';
$arguments196['base'] = NULL;
$output198 = '';
$array199 = array (
);
$output198 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array199);

$output198 .= ' ';
$array200 = array (
);
$output198 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array200);
$arguments196['format'] = $output198;
$array201 = array (
);$arguments196['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStart', $array201);
$renderChildrenClosure197 = ($arguments196['date'] !== null) ? function() use ($arguments196) { return $arguments196['date']; } : $renderChildrenClosure197;$array188['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments196, $renderChildrenClosure197, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments202 = array();
$arguments202['date'] = NULL;
$arguments202['format'] = '';
$arguments202['base'] = NULL;
$output204 = '';
$array205 = array (
);
$output204 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array205);

$output204 .= ' ';
$array206 = array (
);
$output204 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array206);
$arguments202['format'] = $output204;
$array207 = array (
);$arguments202['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStop', $array207);
$renderChildrenClosure203 = ($arguments202['date'] !== null) ? function() use ($arguments202) { return $arguments202['date']; } : $renderChildrenClosure203;$array188['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments202, $renderChildrenClosure203, $renderingContext);
$arguments186['arguments'] = $array188;

$output185 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments186, $renderChildrenClosure187, $renderingContext);

$output185 .= '
							';
return $output185;
};
$arguments183 = array();
$arguments183['value'] = NULL;

$output180 .= isset($arguments183['value']) ? $arguments183['value'] : $renderChildrenClosure184();

$output180 .= '
						';
return $output180;
};
$arguments178 = array();
$arguments178['if'] = NULL;

$output128 .= '';

$output128 .= '
					';
return $output128;
};
$arguments48 = array();
$arguments48['then'] = NULL;
$arguments48['else'] = NULL;
$arguments48['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array125 = array();
$array126 = array (
);$array125['0'] = $renderingContext->getVariableProvider()->getByPath('pid', $array126);
$array125['1'] = ' < 1';

$expression127 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) < 1);};
$arguments48['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression127(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array125)
					),
					$renderingContext
				);
$arguments48['__thenClosure'] = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments57 = array();
$arguments57['key'] = NULL;
$arguments57['id'] = NULL;
$arguments57['default'] = NULL;
$arguments57['htmlEscape'] = NULL;
$arguments57['arguments'] = NULL;
$arguments57['extensionName'] = NULL;
$arguments57['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array59 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments60 = array();
$arguments60['key'] = NULL;
$arguments60['id'] = NULL;
$arguments60['default'] = NULL;
$arguments60['htmlEscape'] = NULL;
$arguments60['arguments'] = NULL;
$arguments60['extensionName'] = NULL;
$arguments60['key'] = 'forNonPageRelatedActions';
$array59['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments60, $renderChildrenClosure61, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['date'] = NULL;
$arguments62['format'] = '';
$arguments62['base'] = NULL;
$output64 = '';
$array65 = array (
);
$output64 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array65);

$output64 .= ' ';
$array66 = array (
);
$output64 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array66);
$arguments62['format'] = $output64;
$array67 = array (
);$arguments62['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStart', $array67);
$renderChildrenClosure63 = ($arguments62['date'] !== null) ? function() use ($arguments62) { return $arguments62['date']; } : $renderChildrenClosure63;$array59['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure69 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments68 = array();
$arguments68['date'] = NULL;
$arguments68['format'] = '';
$arguments68['base'] = NULL;
$output70 = '';
$array71 = array (
);
$output70 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array71);

$output70 .= ' ';
$array72 = array (
);
$output70 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array72);
$arguments68['format'] = $output70;
$array73 = array (
);$arguments68['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStop', $array73);
$renderChildrenClosure69 = ($arguments68['date'] !== null) ? function() use ($arguments68) { return $arguments68['date']; } : $renderChildrenClosure69;$array59['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments68, $renderChildrenClosure69, $renderingContext);
$arguments57['arguments'] = $array59;

$output56 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext)]);

$output56 .= '
							';
return $output56;
};
$arguments51 = array();
$arguments51['then'] = NULL;
$arguments51['else'] = NULL;
$arguments51['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array53 = array();
$array54 = array (
);$array53['0'] = $renderingContext->getVariableProvider()->getByPath('pid', $array54);
$array53['1'] = ' == -1';

$expression55 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == -1);};
$arguments51['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression55(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array53)
					),
					$renderingContext
				);
$arguments51['__thenClosure'] = $renderChildrenClosure52;

$output50 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext);

$output50 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$output79 = '';

$output79 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments80 = array();
$arguments80['key'] = NULL;
$arguments80['id'] = NULL;
$arguments80['default'] = NULL;
$arguments80['htmlEscape'] = NULL;
$arguments80['arguments'] = NULL;
$arguments80['extensionName'] = NULL;
$arguments80['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array82 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments83 = array();
$arguments83['key'] = NULL;
$arguments83['id'] = NULL;
$arguments83['default'] = NULL;
$arguments83['htmlEscape'] = NULL;
$arguments83['arguments'] = NULL;
$arguments83['extensionName'] = NULL;
$arguments83['key'] = 'forRootLevel';
$array82['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure86 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments85 = array();
$arguments85['date'] = NULL;
$arguments85['format'] = '';
$arguments85['base'] = NULL;
$output87 = '';
$array88 = array (
);
$output87 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array88);

$output87 .= ' ';
$array89 = array (
);
$output87 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array89);
$arguments85['format'] = $output87;
$array90 = array (
);$arguments85['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStart', $array90);
$renderChildrenClosure86 = ($arguments85['date'] !== null) ? function() use ($arguments85) { return $arguments85['date']; } : $renderChildrenClosure86;$array82['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments85, $renderChildrenClosure86, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure92 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments91 = array();
$arguments91['date'] = NULL;
$arguments91['format'] = '';
$arguments91['base'] = NULL;
$output93 = '';
$array94 = array (
);
$output93 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array94);

$output93 .= ' ';
$array95 = array (
);
$output93 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array95);
$arguments91['format'] = $output93;
$array96 = array (
);$arguments91['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStop', $array96);
$renderChildrenClosure92 = ($arguments91['date'] !== null) ? function() use ($arguments91) { return $arguments91['date']; } : $renderChildrenClosure92;$array82['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments91, $renderChildrenClosure92, $renderingContext);
$arguments80['arguments'] = $array82;

$output79 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments80, $renderChildrenClosure81, $renderingContext)]);

$output79 .= '
							';
return $output79;
};
$arguments74 = array();
$arguments74['then'] = NULL;
$arguments74['else'] = NULL;
$arguments74['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array76 = array();
$array77 = array (
);$array76['0'] = $renderingContext->getVariableProvider()->getByPath('pid', $array77);
$array76['1'] = ' == 0';

$expression78 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 0);};
$arguments74['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression78(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array76)
					),
					$renderingContext
				);
$arguments74['__thenClosure'] = $renderChildrenClosure75;

$output50 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);

$output50 .= '
						';
return $output50;
};
$arguments48['__elseClosures'][] = function() use ($renderingContext, $self) {
$output97 = '';

$output97 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure99 = function() use ($renderingContext, $self) {
return '
								Nest view helpers three times:
								1. Feed pid as argument to be.pagePath
								2. Use this as argument for \'forPage\' translate
								3. Use this as argument for \'logForNonPageRelatedActionsOrRootLevelOrPage\' translate
							';
};
$arguments98 = array();

$output97 .= NULL;

$output97 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure101 = function() use ($renderingContext, $self) {
$output102 = '';

$output102 .= '
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure104 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments103 = array();
$arguments103['key'] = NULL;
$arguments103['id'] = NULL;
$arguments103['default'] = NULL;
$arguments103['htmlEscape'] = NULL;
$arguments103['arguments'] = NULL;
$arguments103['extensionName'] = NULL;
$arguments103['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array105 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments106 = array();
$arguments106['key'] = NULL;
$arguments106['id'] = NULL;
$arguments106['default'] = NULL;
$arguments106['htmlEscape'] = NULL;
$arguments106['arguments'] = NULL;
$arguments106['extensionName'] = NULL;
$arguments106['key'] = 'forPage';
// Rendering Array
$array108 = array();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper
$renderChildrenClosure110 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments109 = array();
$arguments109['pid'] = NULL;
$arguments109['titleLimit'] = 20;
$array111 = array (
);$arguments109['pid'] = $renderingContext->getVariableProvider()->getByPath('pid', $array111);
$array108['0'] = TYPO3\CMS\Belog\ViewHelpers\Be\PagePathViewHelper::renderStatic($arguments109, $renderChildrenClosure110, $renderingContext);
$array112 = array (
);$array108['1'] = $renderingContext->getVariableProvider()->getByPath('pid', $array112);
$arguments106['arguments'] = $array108;
$array105['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments113 = array();
$arguments113['date'] = NULL;
$arguments113['format'] = '';
$arguments113['base'] = NULL;
$output115 = '';
$array116 = array (
);
$output115 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array116);

$output115 .= ' ';
$array117 = array (
);
$output115 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array117);
$arguments113['format'] = $output115;
$array118 = array (
);$arguments113['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStart', $array118);
$renderChildrenClosure114 = ($arguments113['date'] !== null) ? function() use ($arguments113) { return $arguments113['date']; } : $renderChildrenClosure114;$array105['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments113, $renderChildrenClosure114, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure120 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments119 = array();
$arguments119['date'] = NULL;
$arguments119['format'] = '';
$arguments119['base'] = NULL;
$output121 = '';
$array122 = array (
);
$output121 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array122);

$output121 .= ' ';
$array123 = array (
);
$output121 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array123);
$arguments119['format'] = $output121;
$array124 = array (
);$arguments119['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStop', $array124);
$renderChildrenClosure120 = ($arguments119['date'] !== null) ? function() use ($arguments119) { return $arguments119['date']; } : $renderChildrenClosure120;$array105['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments119, $renderChildrenClosure120, $renderingContext);
$arguments103['arguments'] = $array105;

$output102 .= TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments103, $renderChildrenClosure104, $renderingContext);

$output102 .= '
							';
return $output102;
};
$arguments100 = array();
$arguments100['value'] = NULL;

$output97 .= isset($arguments100['value']) ? $arguments100['value'] : $renderChildrenClosure101();

$output97 .= '
						';
return $output97;
};

$output47 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$output47 .= '
				';
return $output47;
};
$arguments45['__elseClosures'][] = function() use ($renderingContext, $self) {
$output208 = '';

$output208 .= '
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments209 = array();
$arguments209['key'] = NULL;
$arguments209['id'] = NULL;
$arguments209['default'] = NULL;
$arguments209['htmlEscape'] = NULL;
$arguments209['arguments'] = NULL;
$arguments209['extensionName'] = NULL;
$arguments209['key'] = 'logForNonPageRelatedActionsOrRootLevelOrPage';
// Rendering Array
$array211 = array();
$array211['0'] = '';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments212 = array();
$arguments212['date'] = NULL;
$arguments212['format'] = '';
$arguments212['base'] = NULL;
$output214 = '';
$array215 = array (
);
$output214 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array215);

$output214 .= ' ';
$array216 = array (
);
$output214 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array216);
$arguments212['format'] = $output214;
$array217 = array (
);$arguments212['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStart', $array217);
$renderChildrenClosure213 = ($arguments212['date'] !== null) ? function() use ($arguments212) { return $arguments212['date']; } : $renderChildrenClosure213;$array211['1'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure219 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments218 = array();
$arguments218['date'] = NULL;
$arguments218['format'] = '';
$arguments218['base'] = NULL;
$output220 = '';
$array221 = array (
);
$output220 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array221);

$output220 .= ' ';
$array222 = array (
);
$output220 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array222);
$arguments218['format'] = $output220;
$array223 = array (
);$arguments218['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStop', $array223);
$renderChildrenClosure219 = ($arguments218['date'] !== null) ? function() use ($arguments218) { return $arguments218['date']; } : $renderChildrenClosure219;$array211['2'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments218, $renderChildrenClosure219, $renderingContext);
$arguments209['arguments'] = $array211;

$output208 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext)]);

$output208 .= '
				';
return $output208;
};

$output44 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output44 .= '
		</h2>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure410 = function() use ($renderingContext, $self) {
$output412 = '';

$output412 .= '
			<h3>
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure414 = function() use ($renderingContext, $self) {
$output416 = '';

$output416 .= '@';
$array417 = array (
);
$output416 .= $renderingContext->getVariableProvider()->getByPath('dayTimestamp', $array417);
return $output416;
};
$arguments413 = array();
$arguments413['date'] = NULL;
$arguments413['format'] = '';
$arguments413['base'] = NULL;
$array415 = array (
);$arguments413['format'] = $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array415);
$renderChildrenClosure414 = ($arguments413['date'] !== null) ? function() use ($arguments413) { return $arguments413['date']; } : $renderChildrenClosure414;
$output412 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments413, $renderChildrenClosure414, $renderingContext)]);

$output412 .= '
			</h3>

			<div class="table-fit">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure419 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments418 = array();
$arguments418['key'] = NULL;
$arguments418['id'] = NULL;
$arguments418['default'] = NULL;
$arguments418['htmlEscape'] = NULL;
$arguments418['arguments'] = NULL;
$arguments418['extensionName'] = NULL;
$arguments418['key'] = 'chLog_l_error';

$output412 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments418, $renderChildrenClosure419, $renderingContext)]);

$output412 .= '
							</th>
							<th>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure421 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments420 = array();
$arguments420['key'] = NULL;
$arguments420['id'] = NULL;
$arguments420['default'] = NULL;
$arguments420['htmlEscape'] = NULL;
$arguments420['arguments'] = NULL;
$arguments420['extensionName'] = NULL;
$arguments420['key'] = 'chLog_l_time';

$output412 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments420, $renderChildrenClosure421, $renderingContext)]);

$output412 .= '
							</th>
							<th colspan="2">
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure423 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments422 = array();
$arguments422['key'] = NULL;
$arguments422['id'] = NULL;
$arguments422['default'] = NULL;
$arguments422['htmlEscape'] = NULL;
$arguments422['arguments'] = NULL;
$arguments422['extensionName'] = NULL;
$arguments422['key'] = 'chLog_l_user';

$output412 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments422, $renderChildrenClosure423, $renderingContext)]);

$output412 .= '
							</th>
							<th>
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure425 = function() use ($renderingContext, $self) {
$output435 = '';

$output435 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure437 = function() use ($renderingContext, $self) {
$output438 = '';

$output438 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure440 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments439 = array();
$arguments439['key'] = NULL;
$arguments439['id'] = NULL;
$arguments439['default'] = NULL;
$arguments439['htmlEscape'] = NULL;
$arguments439['arguments'] = NULL;
$arguments439['extensionName'] = NULL;
$arguments439['key'] = 'chLog_l_table';

$output438 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments439, $renderChildrenClosure440, $renderingContext)]);

$output438 .= '
									';
return $output438;
};
$arguments436 = array();

$output435 .= '';

$output435 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure442 = function() use ($renderingContext, $self) {
$output443 = '';

$output443 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure445 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments444 = array();
$arguments444['key'] = NULL;
$arguments444['id'] = NULL;
$arguments444['default'] = NULL;
$arguments444['htmlEscape'] = NULL;
$arguments444['arguments'] = NULL;
$arguments444['extensionName'] = NULL;
$arguments444['key'] = 'chLog_l_types';

$output443 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments444, $renderChildrenClosure445, $renderingContext)]);

$output443 .= '
									';
return $output443;
};
$arguments441 = array();
$arguments441['if'] = NULL;

$output435 .= '';

$output435 .= '
								';
return $output435;
};
$arguments424 = array();
$arguments424['then'] = NULL;
$arguments424['else'] = NULL;
$arguments424['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array432 = array();
$array433 = array (
);$array432['0'] = $renderingContext->getVariableProvider()->getByPath('constraint.isInPageContext', $array433);

$expression434 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments424['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression434(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array432)
					),
					$renderingContext
				);
$arguments424['__thenClosure'] = function() use ($renderingContext, $self) {
$output426 = '';

$output426 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure428 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments427 = array();
$arguments427['key'] = NULL;
$arguments427['id'] = NULL;
$arguments427['default'] = NULL;
$arguments427['htmlEscape'] = NULL;
$arguments427['arguments'] = NULL;
$arguments427['extensionName'] = NULL;
$arguments427['key'] = 'chLog_l_table';

$output426 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments427, $renderChildrenClosure428, $renderingContext)]);

$output426 .= '
									';
return $output426;
};
$arguments424['__elseClosures'][] = function() use ($renderingContext, $self) {
$output429 = '';

$output429 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure431 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments430 = array();
$arguments430['key'] = NULL;
$arguments430['id'] = NULL;
$arguments430['default'] = NULL;
$arguments430['htmlEscape'] = NULL;
$arguments430['arguments'] = NULL;
$arguments430['extensionName'] = NULL;
$arguments430['key'] = 'chLog_l_types';

$output429 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments430, $renderChildrenClosure431, $renderingContext)]);

$output429 .= '
									';
return $output429;
};

$output412 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments424, $renderChildrenClosure425, $renderingContext);

$output412 .= '
							</th>
							<th>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure447 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments446 = array();
$arguments446['key'] = NULL;
$arguments446['id'] = NULL;
$arguments446['default'] = NULL;
$arguments446['htmlEscape'] = NULL;
$arguments446['arguments'] = NULL;
$arguments446['extensionName'] = NULL;
$arguments446['key'] = 'chLog_l_action';

$output412 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments446, $renderChildrenClosure447, $renderingContext)]);

$output412 .= '
							</th>
							<th>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure449 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments448 = array();
$arguments448['key'] = NULL;
$arguments448['id'] = NULL;
$arguments448['default'] = NULL;
$arguments448['htmlEscape'] = NULL;
$arguments448['arguments'] = NULL;
$arguments448['extensionName'] = NULL;
$arguments448['key'] = 'chLog_l_details';

$output412 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments448, $renderChildrenClosure449, $renderingContext)]);

$output412 .= '
							</th>
							<th>
								';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure451 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments450 = array();
$arguments450['key'] = NULL;
$arguments450['id'] = NULL;
$arguments450['default'] = NULL;
$arguments450['htmlEscape'] = NULL;
$arguments450['arguments'] = NULL;
$arguments450['extensionName'] = NULL;
$arguments450['key'] = 'actions';

$output412 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments450, $renderChildrenClosure451, $renderingContext)]);

$output412 .= '
							</th>
						</tr>
					</thead>
					<tbody>
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure453 = function() use ($renderingContext, $self) {
$output455 = '';

$output455 .= '
							<tr>
								<td>
									';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\ErrorIconViewHelper
$renderChildrenClosure457 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments456 = array();
$arguments456['errorNumber'] = 0;
$array458 = array (
);$arguments456['errorNumber'] = $renderingContext->getVariableProvider()->getByPath('logItem.error', $array458);

$output455 .= TYPO3\CMS\Belog\ViewHelpers\ErrorIconViewHelper::renderStatic($arguments456, $renderChildrenClosure457, $renderingContext);

$output455 .= '
								</td>
								<td>
									';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure460 = function() use ($renderingContext, $self) {
$output461 = '';

$output461 .= '@';
$array462 = array (
);
$output461 .= $renderingContext->getVariableProvider()->getByPath('logItem.tstamp', $array462);
return $output461;
};
$arguments459 = array();
$arguments459['date'] = NULL;
$arguments459['format'] = '';
$arguments459['base'] = NULL;
$arguments459['format'] = 'H:i:s';
$renderChildrenClosure460 = ($arguments459['date'] !== null) ? function() use ($arguments459) { return $arguments459['date']; } : $renderChildrenClosure460;
$output455 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments459, $renderChildrenClosure460, $renderingContext)]);

$output455 .= '
								</td>
								<td>
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure464 = function() use ($renderingContext, $self) {
$output470 = '';

$output470 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper
$renderChildrenClosure472 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments471 = array();
$arguments471['backendUser'] = 0;
$arguments471['size'] = 32;
$arguments471['showIcon'] = false;
$array473 = array (
);$arguments471['backendUser'] = $renderingContext->getVariableProvider()->getByPath('logItem.backendUserUid', $array473);
// Rendering Boolean node
// Rendering Array
$array474 = array();
$array474['0'] = 'true';

$expression475 = function($context) {return TRUE;};
$arguments471['showIcon'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression475(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array474)
					),
					$renderingContext
				);

$output470 .= TYPO3\CMS\Backend\ViewHelpers\AvatarViewHelper::renderStatic($arguments471, $renderChildrenClosure472, $renderingContext);

$output470 .= '
									';
return $output470;
};
$arguments463 = array();
$arguments463['then'] = NULL;
$arguments463['else'] = NULL;
$arguments463['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array465 = array();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper
$renderChildrenClosure467 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments466 = array();
$arguments466['uid'] = NULL;
$array468 = array (
);$arguments466['uid'] = $renderingContext->getVariableProvider()->getByPath('logItem.backendUserUid', $array468);
$array465['0'] = TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper::renderStatic($arguments466, $renderChildrenClosure467, $renderingContext);

$expression469 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments463['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression469(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array465)
					),
					$renderingContext
				);
$arguments463['__thenClosure'] = $renderChildrenClosure464;

$output455 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments463, $renderChildrenClosure464, $renderingContext);

$output455 .= '
								</td>
								<td>
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure477 = function() use ($renderingContext, $self) {
$output489 = '';

$output489 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure491 = function() use ($renderingContext, $self) {
$output492 = '';

$output492 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper
$renderChildrenClosure494 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments493 = array();
$arguments493['uid'] = NULL;
$array495 = array (
);$arguments493['uid'] = $renderingContext->getVariableProvider()->getByPath('logItem.backendUserUid', $array495);

$output492 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper::renderStatic($arguments493, $renderChildrenClosure494, $renderingContext)]);

$output492 .= '
										';
return $output492;
};
$arguments490 = array();

$output489 .= '';

$output489 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure497 = function() use ($renderingContext, $self) {
$output498 = '';

$output498 .= '[';
$array499 = array (
);
$output498 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.backendUserUid', $array499)]);

$output498 .= ']';
return $output498;
};
$arguments496 = array();
$arguments496['if'] = NULL;

$output489 .= '';

$output489 .= '
									';
return $output489;
};
$arguments476 = array();
$arguments476['then'] = NULL;
$arguments476['else'] = NULL;
$arguments476['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array484 = array();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper
$renderChildrenClosure486 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments485 = array();
$arguments485['uid'] = NULL;
$array487 = array (
);$arguments485['uid'] = $renderingContext->getVariableProvider()->getByPath('logItem.backendUserUid', $array487);
$array484['0'] = TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper::renderStatic($arguments485, $renderChildrenClosure486, $renderingContext);

$expression488 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments476['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression488(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array484)
					),
					$renderingContext
				);
$arguments476['__thenClosure'] = function() use ($renderingContext, $self) {
$output478 = '';

$output478 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper
$renderChildrenClosure480 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments479 = array();
$arguments479['uid'] = NULL;
$array481 = array (
);$arguments479['uid'] = $renderingContext->getVariableProvider()->getByPath('logItem.backendUserUid', $array481);

$output478 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper::renderStatic($arguments479, $renderChildrenClosure480, $renderingContext)]);

$output478 .= '
										';
return $output478;
};
$arguments476['__elseClosures'][] = function() use ($renderingContext, $self) {
$output482 = '';

$output482 .= '[';
$array483 = array (
);
$output482 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.backendUserUid', $array483)]);

$output482 .= ']';
return $output482;
};

$output455 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments476, $renderChildrenClosure477, $renderingContext);

$output455 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure501 = function() use ($renderingContext, $self) {
$output505 = '';

$output505 .= '
										(';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure507 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments506 = array();
$arguments506['key'] = NULL;
$arguments506['id'] = NULL;
$arguments506['default'] = NULL;
$arguments506['htmlEscape'] = NULL;
$arguments506['arguments'] = NULL;
$arguments506['extensionName'] = NULL;
$arguments506['key'] = 'viaUser';

$output505 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments506, $renderChildrenClosure507, $renderingContext)]);

$output505 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure509 = function() use ($renderingContext, $self) {
$output521 = '';

$output521 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure523 = function() use ($renderingContext, $self) {
$output524 = '';

$output524 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper
$renderChildrenClosure526 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments525 = array();
$arguments525['uid'] = NULL;
$array527 = array (
);$arguments525['uid'] = $renderingContext->getVariableProvider()->getByPath('logItem.logData.originalUser', $array527);

$output524 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper::renderStatic($arguments525, $renderChildrenClosure526, $renderingContext)]);

$output524 .= '
											';
return $output524;
};
$arguments522 = array();

$output521 .= '';

$output521 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure529 = function() use ($renderingContext, $self) {
$output530 = '';

$output530 .= '[';
$array531 = array (
);
$output530 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.logData.originalUser', $array531)]);

$output530 .= ']';
return $output530;
};
$arguments528 = array();
$arguments528['if'] = NULL;

$output521 .= '';

$output521 .= '
										';
return $output521;
};
$arguments508 = array();
$arguments508['then'] = NULL;
$arguments508['else'] = NULL;
$arguments508['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array516 = array();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper
$renderChildrenClosure518 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments517 = array();
$arguments517['uid'] = NULL;
$array519 = array (
);$arguments517['uid'] = $renderingContext->getVariableProvider()->getByPath('logItem.logData.originalUser', $array519);
$array516['0'] = TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper::renderStatic($arguments517, $renderChildrenClosure518, $renderingContext);

$expression520 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments508['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression520(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array516)
					),
					$renderingContext
				);
$arguments508['__thenClosure'] = function() use ($renderingContext, $self) {
$output510 = '';

$output510 .= '
												';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper
$renderChildrenClosure512 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments511 = array();
$arguments511['uid'] = NULL;
$array513 = array (
);$arguments511['uid'] = $renderingContext->getVariableProvider()->getByPath('logItem.logData.originalUser', $array513);

$output510 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Belog\ViewHelpers\UsernameViewHelper::renderStatic($arguments511, $renderChildrenClosure512, $renderingContext)]);

$output510 .= '
											';
return $output510;
};
$arguments508['__elseClosures'][] = function() use ($renderingContext, $self) {
$output514 = '';

$output514 .= '[';
$array515 = array (
);
$output514 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.logData.originalUser', $array515)]);

$output514 .= ']';
return $output514;
};

$output505 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments508, $renderChildrenClosure509, $renderingContext);

$output505 .= '
										)
									';
return $output505;
};
$arguments500 = array();
$arguments500['then'] = NULL;
$arguments500['else'] = NULL;
$arguments500['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array502 = array();
$array503 = array (
);$array502['0'] = $renderingContext->getVariableProvider()->getByPath('logItem.logData.originalUser', $array503);

$expression504 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments500['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression504(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array502)
					),
					$renderingContext
				);
$arguments500['__thenClosure'] = $renderChildrenClosure501;

$output455 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments500, $renderChildrenClosure501, $renderingContext);

$output455 .= '
									<br>
									<span class="text-muted">
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure533 = function() use ($renderingContext, $self) {
$output544 = '';

$output544 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure546 = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\WorkspaceTitleViewHelper
$renderChildrenClosure548 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments547 = array();
$arguments547['uid'] = NULL;
$array549 = array (
);$arguments547['uid'] = $renderingContext->getVariableProvider()->getByPath('logItem.workspaceUid', $array549);
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Belog\ViewHelpers\WorkspaceTitleViewHelper::renderStatic($arguments547, $renderChildrenClosure548, $renderingContext)]);
};
$arguments545 = array();

$output544 .= '';

$output544 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure551 = function() use ($renderingContext, $self) {
$output552 = '';

$output552 .= '[';
$array553 = array (
);
$output552 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.workspaceUid', $array553)]);

$output552 .= ']';
return $output552;
};
$arguments550 = array();
$arguments550['if'] = NULL;

$output544 .= '';

$output544 .= '
										';
return $output544;
};
$arguments532 = array();
$arguments532['then'] = NULL;
$arguments532['else'] = NULL;
$arguments532['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array539 = array();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\WorkspaceTitleViewHelper
$renderChildrenClosure541 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments540 = array();
$arguments540['uid'] = NULL;
$array542 = array (
);$arguments540['uid'] = $renderingContext->getVariableProvider()->getByPath('logItem.workspaceUid', $array542);
$array539['0'] = TYPO3\CMS\Belog\ViewHelpers\WorkspaceTitleViewHelper::renderStatic($arguments540, $renderChildrenClosure541, $renderingContext);

$expression543 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments532['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression543(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array539)
					),
					$renderingContext
				);
$arguments532['__thenClosure'] = function() use ($renderingContext, $self) {
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\WorkspaceTitleViewHelper
$renderChildrenClosure535 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments534 = array();
$arguments534['uid'] = NULL;
$array536 = array (
);$arguments534['uid'] = $renderingContext->getVariableProvider()->getByPath('logItem.workspaceUid', $array536);
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Belog\ViewHelpers\WorkspaceTitleViewHelper::renderStatic($arguments534, $renderChildrenClosure535, $renderingContext)]);
};
$arguments532['__elseClosures'][] = function() use ($renderingContext, $self) {
$output537 = '';

$output537 .= '[';
$array538 = array (
);
$output537 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.workspaceUid', $array538)]);

$output537 .= ']';
return $output537;
};

$output455 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments532, $renderChildrenClosure533, $renderingContext);

$output455 .= '
									</span>
								</td>
								<td>
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure555 = function() use ($renderingContext, $self) {
$output589 = '';

$output589 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure591 = function() use ($renderingContext, $self) {
$output592 = '';

$output592 .= '
											';
$array593 = array (
);
$output592 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.tableName', $array593)]);

$output592 .= '
										';
return $output592;
};
$arguments590 = array();

$output589 .= '';

$output589 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure595 = function() use ($renderingContext, $self) {
$output596 = '';

$output596 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure598 = function() use ($renderingContext, $self) {
$output612 = '';

$output612 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure614 = function() use ($renderingContext, $self) {
$output615 = '';

$output615 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure617 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments616 = array();
$arguments616['key'] = NULL;
$arguments616['id'] = NULL;
$arguments616['default'] = NULL;
$arguments616['htmlEscape'] = NULL;
$arguments616['arguments'] = NULL;
$arguments616['extensionName'] = NULL;
$output618 = '';

$output618 .= 'type_';
$array619 = array (
);
$output618 .= $renderingContext->getVariableProvider()->getByPath('logItem.type', $array619);
$arguments616['key'] = $output618;

$output615 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments616, $renderChildrenClosure617, $renderingContext)]);

$output615 .= '
												';
return $output615;
};
$arguments613 = array();

$output612 .= '';

$output612 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure621 = function() use ($renderingContext, $self) {
$output622 = '';

$output622 .= '
													[';
$array623 = array (
);
$output622 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.type', $array623)]);

$output622 .= ']
												';
return $output622;
};
$arguments620 = array();
$arguments620['if'] = NULL;

$output612 .= '';

$output612 .= '
											';
return $output612;
};
$arguments597 = array();
$arguments597['then'] = NULL;
$arguments597['else'] = NULL;
$arguments597['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array606 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure608 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments607 = array();
$arguments607['key'] = NULL;
$arguments607['id'] = NULL;
$arguments607['default'] = NULL;
$arguments607['htmlEscape'] = NULL;
$arguments607['arguments'] = NULL;
$arguments607['extensionName'] = NULL;
$output609 = '';

$output609 .= 'type_';
$array610 = array (
);
$output609 .= $renderingContext->getVariableProvider()->getByPath('logItem.type', $array610);
$arguments607['key'] = $output609;
$array606['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments607, $renderChildrenClosure608, $renderingContext);

$expression611 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments597['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression611(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array606)
					),
					$renderingContext
				);
$arguments597['__thenClosure'] = function() use ($renderingContext, $self) {
$output599 = '';

$output599 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure601 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments600 = array();
$arguments600['key'] = NULL;
$arguments600['id'] = NULL;
$arguments600['default'] = NULL;
$arguments600['htmlEscape'] = NULL;
$arguments600['arguments'] = NULL;
$arguments600['extensionName'] = NULL;
$output602 = '';

$output602 .= 'type_';
$array603 = array (
);
$output602 .= $renderingContext->getVariableProvider()->getByPath('logItem.type', $array603);
$arguments600['key'] = $output602;

$output599 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments600, $renderChildrenClosure601, $renderingContext)]);

$output599 .= '
												';
return $output599;
};
$arguments597['__elseClosures'][] = function() use ($renderingContext, $self) {
$output604 = '';

$output604 .= '
													[';
$array605 = array (
);
$output604 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.type', $array605)]);

$output604 .= ']
												';
return $output604;
};

$output596 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments597, $renderChildrenClosure598, $renderingContext);

$output596 .= '
										';
return $output596;
};
$arguments594 = array();
$arguments594['if'] = NULL;

$output589 .= '';

$output589 .= '
									';
return $output589;
};
$arguments554 = array();
$arguments554['then'] = NULL;
$arguments554['else'] = NULL;
$arguments554['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array586 = array();
$array587 = array (
);$array586['0'] = $renderingContext->getVariableProvider()->getByPath('constraint.isInPageContext', $array587);

$expression588 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments554['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression588(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array586)
					),
					$renderingContext
				);
$arguments554['__thenClosure'] = function() use ($renderingContext, $self) {
$output556 = '';

$output556 .= '
											';
$array557 = array (
);
$output556 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.tableName', $array557)]);

$output556 .= '
										';
return $output556;
};
$arguments554['__elseClosures'][] = function() use ($renderingContext, $self) {
$output558 = '';

$output558 .= '
											';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure560 = function() use ($renderingContext, $self) {
$output574 = '';

$output574 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure576 = function() use ($renderingContext, $self) {
$output577 = '';

$output577 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure579 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments578 = array();
$arguments578['key'] = NULL;
$arguments578['id'] = NULL;
$arguments578['default'] = NULL;
$arguments578['htmlEscape'] = NULL;
$arguments578['arguments'] = NULL;
$arguments578['extensionName'] = NULL;
$output580 = '';

$output580 .= 'type_';
$array581 = array (
);
$output580 .= $renderingContext->getVariableProvider()->getByPath('logItem.type', $array581);
$arguments578['key'] = $output580;

$output577 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments578, $renderChildrenClosure579, $renderingContext)]);

$output577 .= '
												';
return $output577;
};
$arguments575 = array();

$output574 .= '';

$output574 .= '
												';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure583 = function() use ($renderingContext, $self) {
$output584 = '';

$output584 .= '
													[';
$array585 = array (
);
$output584 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.type', $array585)]);

$output584 .= ']
												';
return $output584;
};
$arguments582 = array();
$arguments582['if'] = NULL;

$output574 .= '';

$output574 .= '
											';
return $output574;
};
$arguments559 = array();
$arguments559['then'] = NULL;
$arguments559['else'] = NULL;
$arguments559['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array568 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure570 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments569 = array();
$arguments569['key'] = NULL;
$arguments569['id'] = NULL;
$arguments569['default'] = NULL;
$arguments569['htmlEscape'] = NULL;
$arguments569['arguments'] = NULL;
$arguments569['extensionName'] = NULL;
$output571 = '';

$output571 .= 'type_';
$array572 = array (
);
$output571 .= $renderingContext->getVariableProvider()->getByPath('logItem.type', $array572);
$arguments569['key'] = $output571;
$array568['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments569, $renderChildrenClosure570, $renderingContext);

$expression573 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments559['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression573(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array568)
					),
					$renderingContext
				);
$arguments559['__thenClosure'] = function() use ($renderingContext, $self) {
$output561 = '';

$output561 .= '
													';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure563 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments562 = array();
$arguments562['key'] = NULL;
$arguments562['id'] = NULL;
$arguments562['default'] = NULL;
$arguments562['htmlEscape'] = NULL;
$arguments562['arguments'] = NULL;
$arguments562['extensionName'] = NULL;
$output564 = '';

$output564 .= 'type_';
$array565 = array (
);
$output564 .= $renderingContext->getVariableProvider()->getByPath('logItem.type', $array565);
$arguments562['key'] = $output564;

$output561 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments562, $renderChildrenClosure563, $renderingContext)]);

$output561 .= '
												';
return $output561;
};
$arguments559['__elseClosures'][] = function() use ($renderingContext, $self) {
$output566 = '';

$output566 .= '
													[';
$array567 = array (
);
$output566 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.type', $array567)]);

$output566 .= ']
												';
return $output566;
};

$output558 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments559, $renderChildrenClosure560, $renderingContext);

$output558 .= '
										';
return $output558;
};

$output455 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments554, $renderChildrenClosure555, $renderingContext);

$output455 .= '
								</td>
								<td>
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure625 = function() use ($renderingContext, $self) {
$output641 = '';

$output641 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure643 = function() use ($renderingContext, $self) {
$output644 = '';

$output644 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure646 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments645 = array();
$arguments645['key'] = NULL;
$arguments645['id'] = NULL;
$arguments645['default'] = NULL;
$arguments645['htmlEscape'] = NULL;
$arguments645['arguments'] = NULL;
$arguments645['extensionName'] = NULL;
$output647 = '';

$output647 .= 'action_';
$array648 = array (
);
$output647 .= $renderingContext->getVariableProvider()->getByPath('logItem.type', $array648);

$output647 .= '_';
$array649 = array (
);
$output647 .= $renderingContext->getVariableProvider()->getByPath('logItem.action', $array649);
$arguments645['key'] = $output647;

$output644 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments645, $renderChildrenClosure646, $renderingContext)]);

$output644 .= '
										';
return $output644;
};
$arguments642 = array();

$output641 .= '';

$output641 .= '
										';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure651 = function() use ($renderingContext, $self) {
$output652 = '';

$output652 .= '
											[';
$array653 = array (
);
$output652 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.action', $array653)]);

$output652 .= ']
										';
return $output652;
};
$arguments650 = array();
$arguments650['if'] = NULL;

$output641 .= '';

$output641 .= '
									';
return $output641;
};
$arguments624 = array();
$arguments624['then'] = NULL;
$arguments624['else'] = NULL;
$arguments624['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array634 = array();
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure636 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments635 = array();
$arguments635['key'] = NULL;
$arguments635['id'] = NULL;
$arguments635['default'] = NULL;
$arguments635['htmlEscape'] = NULL;
$arguments635['arguments'] = NULL;
$arguments635['extensionName'] = NULL;
$output637 = '';

$output637 .= 'action_';
$array638 = array (
);
$output637 .= $renderingContext->getVariableProvider()->getByPath('logItem.type', $array638);

$output637 .= '_';
$array639 = array (
);
$output637 .= $renderingContext->getVariableProvider()->getByPath('logItem.action', $array639);
$arguments635['key'] = $output637;
$array634['0'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments635, $renderChildrenClosure636, $renderingContext);

$expression640 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments624['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression640(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array634)
					),
					$renderingContext
				);
$arguments624['__thenClosure'] = function() use ($renderingContext, $self) {
$output626 = '';

$output626 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure628 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments627 = array();
$arguments627['key'] = NULL;
$arguments627['id'] = NULL;
$arguments627['default'] = NULL;
$arguments627['htmlEscape'] = NULL;
$arguments627['arguments'] = NULL;
$arguments627['extensionName'] = NULL;
$output629 = '';

$output629 .= 'action_';
$array630 = array (
);
$output629 .= $renderingContext->getVariableProvider()->getByPath('logItem.type', $array630);

$output629 .= '_';
$array631 = array (
);
$output629 .= $renderingContext->getVariableProvider()->getByPath('logItem.action', $array631);
$arguments627['key'] = $output629;

$output626 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments627, $renderChildrenClosure628, $renderingContext)]);

$output626 .= '
										';
return $output626;
};
$arguments624['__elseClosures'][] = function() use ($renderingContext, $self) {
$output632 = '';

$output632 .= '
											[';
$array633 = array (
);
$output632 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.action', $array633)]);

$output632 .= ']
										';
return $output632;
};

$output455 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments624, $renderChildrenClosure625, $renderingContext);

$output455 .= '
								</td>
								<td class="col-word-break">
									';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\FormatDetailsViewHelper
$renderChildrenClosure655 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments654 = array();
$arguments654['logEntry'] = NULL;
$array656 = array (
);$arguments654['logEntry'] = $renderingContext->getVariableProvider()->getByPath('logItem', $array656);

$output455 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Belog\ViewHelpers\FormatDetailsViewHelper::renderStatic($arguments654, $renderChildrenClosure655, $renderingContext)]);

$output455 .= '
									';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\HistoryEntryViewHelper
$renderChildrenClosure658 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments657 = array();
$arguments657['uid'] = NULL;
$array659 = array (
);$arguments657['uid'] = $renderingContext->getVariableProvider()->getByPath('logItem.uid', $array659);

$output455 .= TYPO3\CMS\Belog\ViewHelpers\HistoryEntryViewHelper::renderStatic($arguments657, $renderChildrenClosure658, $renderingContext);

$output455 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure661 = function() use ($renderingContext, $self) {
$output665 = '';

$output665 .= '
										(msg#';
$array666 = array (
);
$output665 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.type', $array666)]);

$output665 .= '.';
$array667 = array (
);
$output665 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.action', $array667)]);

$output665 .= '.';
$array668 = array (
);
$output665 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('logItem.detailsNumber', $array668)]);

$output665 .= ')
									';
return $output665;
};
$arguments660 = array();
$arguments660['then'] = NULL;
$arguments660['else'] = NULL;
$arguments660['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array662 = array();
$array663 = array (
);$array662['0'] = $renderingContext->getVariableProvider()->getByPath('logItem.detailsNumber', $array663);
$array662['1'] = ' > 0';

$expression664 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};
$arguments660['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression664(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array662)
					),
					$renderingContext
				);
$arguments660['__thenClosure'] = $renderChildrenClosure661;

$output455 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments660, $renderChildrenClosure661, $renderingContext);

$output455 .= '
								</td>
								<td>
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure670 = function() use ($renderingContext, $self) {
$output674 = '';

$output674 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure676 = function() use ($renderingContext, $self) {
$output679 = '';

$output679 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure681 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments680 = array();
$arguments680['key'] = NULL;
$arguments680['id'] = NULL;
$arguments680['default'] = NULL;
$arguments680['htmlEscape'] = NULL;
$arguments680['arguments'] = NULL;
$arguments680['extensionName'] = NULL;
$arguments680['key'] = 'actions.deleteWarnings';

$output679 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments680, $renderChildrenClosure681, $renderingContext)]);

$output679 .= '
										';
return $output679;
};
$arguments675 = array();
$arguments675['action'] = NULL;
$arguments675['arguments'] = array (
);
$arguments675['controller'] = NULL;
$arguments675['extensionName'] = NULL;
$arguments675['pluginName'] = NULL;
$arguments675['pageUid'] = NULL;
$arguments675['pageType'] = 0;
$arguments675['noCache'] = false;
$arguments675['noCacheHash'] = false;
$arguments675['section'] = '';
$arguments675['format'] = '';
$arguments675['linkAccessRestrictedPages'] = false;
$arguments675['additionalParams'] = array (
);
$arguments675['absolute'] = false;
$arguments675['addQueryString'] = false;
$arguments675['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments675['addQueryStringMethod'] = NULL;
$arguments675['additionalAttributes'] = NULL;
$arguments675['data'] = NULL;
$arguments675['class'] = NULL;
$arguments675['dir'] = NULL;
$arguments675['id'] = NULL;
$arguments675['lang'] = NULL;
$arguments675['style'] = NULL;
$arguments675['title'] = NULL;
$arguments675['accesskey'] = NULL;
$arguments675['tabindex'] = NULL;
$arguments675['onclick'] = NULL;
$arguments675['name'] = NULL;
$arguments675['rel'] = NULL;
$arguments675['rev'] = NULL;
$arguments675['target'] = NULL;
$arguments675['action'] = 'deleteMessage';
// Rendering Array
$array677 = array();
$array678 = array (
);$array677['errorUid'] = $renderingContext->getVariableProvider()->getByPath('logItem.uid', $array678);
$arguments675['arguments'] = $array677;
$arguments675['class'] = 'btn btn-warning';

$output674 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments675, $renderChildrenClosure676, $renderingContext);

$output674 .= '
									';
return $output674;
};
$arguments669 = array();
$arguments669['then'] = NULL;
$arguments669['else'] = NULL;
$arguments669['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array671 = array();
$array672 = array (
);$array671['0'] = $renderingContext->getVariableProvider()->getByPath('logItem.error', $array672);
$array671['1'] = ' == 1';

$expression673 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 1);};
$arguments669['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression673(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array671)
					),
					$renderingContext
				);
$arguments669['__thenClosure'] = $renderChildrenClosure670;

$output455 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments669, $renderChildrenClosure670, $renderingContext);

$output455 .= '
									';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure683 = function() use ($renderingContext, $self) {
$output687 = '';

$output687 .= '
										';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper
$renderChildrenClosure689 = function() use ($renderingContext, $self) {
$output692 = '';

$output692 .= '
											';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure694 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments693 = array();
$arguments693['key'] = NULL;
$arguments693['id'] = NULL;
$arguments693['default'] = NULL;
$arguments693['htmlEscape'] = NULL;
$arguments693['arguments'] = NULL;
$arguments693['extensionName'] = NULL;
$arguments693['key'] = 'actions.delete';

$output692 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments693, $renderChildrenClosure694, $renderingContext)]);

$output692 .= '
										';
return $output692;
};
$arguments688 = array();
$arguments688['action'] = NULL;
$arguments688['arguments'] = array (
);
$arguments688['controller'] = NULL;
$arguments688['extensionName'] = NULL;
$arguments688['pluginName'] = NULL;
$arguments688['pageUid'] = NULL;
$arguments688['pageType'] = 0;
$arguments688['noCache'] = false;
$arguments688['noCacheHash'] = false;
$arguments688['section'] = '';
$arguments688['format'] = '';
$arguments688['linkAccessRestrictedPages'] = false;
$arguments688['additionalParams'] = array (
);
$arguments688['absolute'] = false;
$arguments688['addQueryString'] = false;
$arguments688['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments688['addQueryStringMethod'] = NULL;
$arguments688['additionalAttributes'] = NULL;
$arguments688['data'] = NULL;
$arguments688['class'] = NULL;
$arguments688['dir'] = NULL;
$arguments688['id'] = NULL;
$arguments688['lang'] = NULL;
$arguments688['style'] = NULL;
$arguments688['title'] = NULL;
$arguments688['accesskey'] = NULL;
$arguments688['tabindex'] = NULL;
$arguments688['onclick'] = NULL;
$arguments688['name'] = NULL;
$arguments688['rel'] = NULL;
$arguments688['rev'] = NULL;
$arguments688['target'] = NULL;
$arguments688['action'] = 'deleteMessage';
// Rendering Array
$array690 = array();
$array691 = array (
);$array690['errorUid'] = $renderingContext->getVariableProvider()->getByPath('logItem.uid', $array691);
$arguments688['arguments'] = $array690;
$arguments688['class'] = 'btn btn-danger';

$output687 .= TYPO3\CMS\Fluid\ViewHelpers\Link\ActionViewHelper::renderStatic($arguments688, $renderChildrenClosure689, $renderingContext);

$output687 .= '
									';
return $output687;
};
$arguments682 = array();
$arguments682['then'] = NULL;
$arguments682['else'] = NULL;
$arguments682['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array684 = array();
$array685 = array (
);$array684['0'] = $renderingContext->getVariableProvider()->getByPath('logItem.error', $array685);
$array684['1'] = ' == 2';

$expression686 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 2);};
$arguments682['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression686(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array684)
					),
					$renderingContext
				);
$arguments682['__thenClosure'] = $renderChildrenClosure683;

$output455 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments682, $renderChildrenClosure683, $renderingContext);

$output455 .= '
								</td>
							</tr>
						';
return $output455;
};
$arguments452 = array();
$arguments452['each'] = NULL;
$arguments452['as'] = NULL;
$arguments452['key'] = NULL;
$arguments452['reverse'] = false;
$arguments452['iteration'] = NULL;
$array454 = array (
);$arguments452['each'] = $renderingContext->getVariableProvider()->getByPath('day', $array454);
$arguments452['as'] = 'logItem';

$output412 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments452, $renderChildrenClosure453, $renderingContext);

$output412 .= '
					</tbody>
				</table>
			</div>
		';
return $output412;
};
$arguments409 = array();
$arguments409['each'] = NULL;
$arguments409['as'] = NULL;
$arguments409['key'] = NULL;
$arguments409['reverse'] = false;
$arguments409['iteration'] = NULL;
$array411 = array (
);$arguments409['each'] = $renderingContext->getVariableProvider()->getByPath('pidEntry', $array411);
$arguments409['as'] = 'day';
$arguments409['key'] = 'dayTimestamp';

$output44 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments409, $renderChildrenClosure410, $renderingContext);

$output44 .= '
	</div>
';
return $output44;
};
$arguments41 = array();
$arguments41['each'] = NULL;
$arguments41['as'] = NULL;
$arguments41['key'] = NULL;
$arguments41['reverse'] = false;
$arguments41['iteration'] = NULL;
$array43 = array (
);$arguments41['each'] = $renderingContext->getVariableProvider()->getByPath('groupedLogEntries', $array43);
$arguments41['as'] = 'pidEntry';
$arguments41['key'] = 'pid';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#