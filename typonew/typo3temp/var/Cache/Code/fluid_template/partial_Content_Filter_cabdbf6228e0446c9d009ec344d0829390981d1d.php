<?php

class partial_Content_Filter_cabdbf6228e0446c9d009ec344d0829390981d1d extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return '
	This is an ugly workaround.
	The function module in Web->Info already renders a form tag, and there is
	no easy way to circumvent this. The page id is needed for the info module
	that is not extbase based to figure the permissions. Thus, we have to add
	the page Id manually to hint the info module about that.
';
};
$arguments1 = array();

$output0 .= NULL;

$output0 .= '
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure4 = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
	<input type="hidden" name="id" value="';
$array9 = array (
);
$output8 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('constraint.pageId', $array9)]);

$output8 .= '" />
';
return $output8;
};
$arguments3 = array();
$arguments3['then'] = NULL;
$arguments3['else'] = NULL;
$arguments3['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array5 = array();
$array6 = array (
);$array5['0'] = $renderingContext->getVariableProvider()->getByPath('constraint.isInPageContext', $array6);

$expression7 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments3['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression7(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array5)
					),
					$renderingContext
				);
$arguments3['__thenClosure'] = $renderChildrenClosure4;

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments3, $renderChildrenClosure4, $renderingContext);

$output0 .= '

';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper
$renderChildrenClosure11 = function() use ($renderingContext, $self) {
$output13 = '';

$output13 .= '
	<div class="form-group">
		<label for="belog-users">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments14 = array();
$arguments14['key'] = NULL;
$arguments14['id'] = NULL;
$arguments14['default'] = NULL;
$arguments14['htmlEscape'] = NULL;
$arguments14['arguments'] = NULL;
$arguments14['extensionName'] = NULL;
$arguments14['key'] = 'users';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext)]);

$output13 .= '</label>
		';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments16 = array();
$arguments16['additionalAttributes'] = NULL;
$arguments16['data'] = NULL;
$arguments16['name'] = NULL;
$arguments16['value'] = NULL;
$arguments16['property'] = NULL;
$arguments16['class'] = NULL;
$arguments16['dir'] = NULL;
$arguments16['id'] = NULL;
$arguments16['lang'] = NULL;
$arguments16['style'] = NULL;
$arguments16['title'] = NULL;
$arguments16['accesskey'] = NULL;
$arguments16['tabindex'] = NULL;
$arguments16['onclick'] = NULL;
$arguments16['size'] = NULL;
$arguments16['disabled'] = NULL;
$arguments16['options'] = NULL;
$arguments16['optionsAfterContent'] = false;
$arguments16['optionValueField'] = NULL;
$arguments16['optionLabelField'] = NULL;
$arguments16['sortByOptionLabel'] = false;
$arguments16['selectAllByDefault'] = false;
$arguments16['errorClass'] = 'f3-form-error';
$arguments16['prependOptionLabel'] = NULL;
$arguments16['prependOptionValue'] = NULL;
$arguments16['multiple'] = false;
$arguments16['property'] = 'userOrGroup';
$array18 = array (
);$arguments16['options'] = $renderingContext->getVariableProvider()->getByPath('userGroups', $array18);
// Rendering Array
$array19 = array();
$array19['onchange'] = 'submit()';
$arguments16['additionalAttributes'] = $array19;
$arguments16['class'] = 'form-control input-sm';
$arguments16['id'] = 'belog-users';

$output13 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output13 .= '
	</div>

	<div class="form-group">
		<label for="belog-max">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure21 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments20 = array();
$arguments20['key'] = NULL;
$arguments20['id'] = NULL;
$arguments20['default'] = NULL;
$arguments20['htmlEscape'] = NULL;
$arguments20['arguments'] = NULL;
$arguments20['extensionName'] = NULL;
$arguments20['key'] = 'max';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments20, $renderChildrenClosure21, $renderingContext)]);

$output13 .= '</label>
		';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\Form\TranslateLabelSelectViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['additionalAttributes'] = NULL;
$arguments22['data'] = NULL;
$arguments22['name'] = NULL;
$arguments22['value'] = NULL;
$arguments22['property'] = NULL;
$arguments22['class'] = NULL;
$arguments22['dir'] = NULL;
$arguments22['id'] = NULL;
$arguments22['lang'] = NULL;
$arguments22['style'] = NULL;
$arguments22['title'] = NULL;
$arguments22['accesskey'] = NULL;
$arguments22['tabindex'] = NULL;
$arguments22['onclick'] = NULL;
$arguments22['size'] = NULL;
$arguments22['disabled'] = NULL;
$arguments22['options'] = NULL;
$arguments22['optionsAfterContent'] = false;
$arguments22['optionValueField'] = NULL;
$arguments22['optionLabelField'] = NULL;
$arguments22['sortByOptionLabel'] = false;
$arguments22['selectAllByDefault'] = false;
$arguments22['errorClass'] = 'f3-form-error';
$arguments22['prependOptionLabel'] = NULL;
$arguments22['prependOptionValue'] = NULL;
$arguments22['multiple'] = false;
$arguments22['optionLabelPrefix'] = NULL;
$arguments22['property'] = 'number';
$array24 = array (
);$arguments22['options'] = $renderingContext->getVariableProvider()->getByPath('settings.selectableNumberOfLogEntries', $array24);
$arguments22['optionLabelPrefix'] = 'LLL:EXT:belog/Resources/Private/Language/locallang.xlf:';
// Rendering Array
$array25 = array();
$array25['onchange'] = 'submit()';
$arguments22['additionalAttributes'] = $array25;
$arguments22['class'] = 'form-control input-sm';
$arguments22['id'] = 'belog-max';

$output13 .= TYPO3\CMS\Belog\ViewHelpers\Form\TranslateLabelSelectViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output13 .= '
	</div>

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure27 = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
$output38 = '';

$output38 .= '
				<div class="form-group">
					<label for="belog-workspaces">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure40 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments39 = array();
$arguments39['key'] = NULL;
$arguments39['id'] = NULL;
$arguments39['default'] = NULL;
$arguments39['htmlEscape'] = NULL;
$arguments39['arguments'] = NULL;
$arguments39['extensionName'] = NULL;
$arguments39['key'] = 'workspace';

$output38 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments39, $renderChildrenClosure40, $renderingContext)]);

$output38 .= '</label>
					';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['additionalAttributes'] = NULL;
$arguments41['data'] = NULL;
$arguments41['name'] = NULL;
$arguments41['value'] = NULL;
$arguments41['property'] = NULL;
$arguments41['class'] = NULL;
$arguments41['dir'] = NULL;
$arguments41['id'] = NULL;
$arguments41['lang'] = NULL;
$arguments41['style'] = NULL;
$arguments41['title'] = NULL;
$arguments41['accesskey'] = NULL;
$arguments41['tabindex'] = NULL;
$arguments41['onclick'] = NULL;
$arguments41['size'] = NULL;
$arguments41['disabled'] = NULL;
$arguments41['options'] = NULL;
$arguments41['optionsAfterContent'] = false;
$arguments41['optionValueField'] = NULL;
$arguments41['optionLabelField'] = NULL;
$arguments41['sortByOptionLabel'] = false;
$arguments41['selectAllByDefault'] = false;
$arguments41['errorClass'] = 'f3-form-error';
$arguments41['prependOptionLabel'] = NULL;
$arguments41['prependOptionValue'] = NULL;
$arguments41['multiple'] = false;
$arguments41['property'] = 'workspaceUid';
$array43 = array (
);$arguments41['options'] = $renderingContext->getVariableProvider()->getByPath('workspaces', $array43);
// Rendering Array
$array44 = array();
$array44['onchange'] = 'submit()';
$arguments41['additionalAttributes'] = $array44;
$arguments41['class'] = 'form-control input-sm';
$arguments41['id'] = 'belog-workspaces';

$output38 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$output38 .= '
				</div>
		';
return $output38;
};
$arguments33 = array();
$arguments33['then'] = NULL;
$arguments33['else'] = NULL;
$arguments33['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array35 = array();
$array36 = array (
);$array35['0'] = $renderingContext->getVariableProvider()->getByPath('showWorkspaceSelector', $array36);

$expression37 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments33['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression37(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array35)
					),
					$renderingContext
				);
$arguments33['__thenClosure'] = $renderChildrenClosure34;

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '
	';
return $output32;
};
$arguments26 = array();
$arguments26['then'] = NULL;
$arguments26['else'] = NULL;
$arguments26['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array28 = array();
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\IsExtensionLoadedViewHelper
$renderChildrenClosure30 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments29 = array();
$arguments29['extensionKey'] = NULL;
$arguments29['extensionKey'] = 'workspaces';
$array28['0'] = TYPO3\CMS\Belog\ViewHelpers\IsExtensionLoadedViewHelper::renderStatic($arguments29, $renderChildrenClosure30, $renderingContext);

$expression31 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments26['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression31(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array28)
					),
					$renderingContext
				);
$arguments26['__thenClosure'] = $renderChildrenClosure27;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments26, $renderChildrenClosure27, $renderingContext);

$output13 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
$output50 = '';

$output50 .= '
		<div class="form-group">
			<label for="belog-depth">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure52 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments51 = array();
$arguments51['key'] = NULL;
$arguments51['id'] = NULL;
$arguments51['default'] = NULL;
$arguments51['htmlEscape'] = NULL;
$arguments51['arguments'] = NULL;
$arguments51['extensionName'] = NULL;
$arguments51['key'] = 'chLog_menuDepth';

$output50 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments51, $renderChildrenClosure52, $renderingContext)]);

$output50 .= '</label>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments53 = array();
$arguments53['additionalAttributes'] = NULL;
$arguments53['data'] = NULL;
$arguments53['name'] = NULL;
$arguments53['value'] = NULL;
$arguments53['property'] = NULL;
$arguments53['class'] = NULL;
$arguments53['dir'] = NULL;
$arguments53['id'] = NULL;
$arguments53['lang'] = NULL;
$arguments53['style'] = NULL;
$arguments53['title'] = NULL;
$arguments53['accesskey'] = NULL;
$arguments53['tabindex'] = NULL;
$arguments53['onclick'] = NULL;
$arguments53['size'] = NULL;
$arguments53['disabled'] = NULL;
$arguments53['options'] = NULL;
$arguments53['optionsAfterContent'] = false;
$arguments53['optionValueField'] = NULL;
$arguments53['optionLabelField'] = NULL;
$arguments53['sortByOptionLabel'] = false;
$arguments53['selectAllByDefault'] = false;
$arguments53['errorClass'] = 'f3-form-error';
$arguments53['prependOptionLabel'] = NULL;
$arguments53['prependOptionValue'] = NULL;
$arguments53['multiple'] = false;
$arguments53['property'] = 'depth';
$array55 = array (
);$arguments53['options'] = $renderingContext->getVariableProvider()->getByPath('pageDepths', $array55);
// Rendering Array
$array56 = array();
$array56['onchange'] = 'submit()';
$arguments53['additionalAttributes'] = $array56;
$arguments53['class'] = 'form-control input-sm';
$arguments53['id'] = 'belog-depth';

$output50 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper::renderStatic($arguments53, $renderChildrenClosure54, $renderingContext);

$output50 .= '
		</div>
	';
return $output50;
};
$arguments45 = array();
$arguments45['then'] = NULL;
$arguments45['else'] = NULL;
$arguments45['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array47 = array();
$array48 = array (
);$array47['0'] = $renderingContext->getVariableProvider()->getByPath('constraint.isInPageContext', $array48);

$expression49 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments45['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression49(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array47)
					),
					$renderingContext
				);
$arguments45['__thenClosure'] = $renderChildrenClosure46;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext);

$output13 .= '

	<div class="form-group">
		<label for="belog-time">';
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
$arguments57['key'] = 'time';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments57, $renderChildrenClosure58, $renderingContext)]);

$output13 .= '</label>
		';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\Form\TranslateLabelSelectViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments59 = array();
$arguments59['additionalAttributes'] = NULL;
$arguments59['data'] = NULL;
$arguments59['name'] = NULL;
$arguments59['value'] = NULL;
$arguments59['property'] = NULL;
$arguments59['class'] = NULL;
$arguments59['dir'] = NULL;
$arguments59['id'] = NULL;
$arguments59['lang'] = NULL;
$arguments59['style'] = NULL;
$arguments59['title'] = NULL;
$arguments59['accesskey'] = NULL;
$arguments59['tabindex'] = NULL;
$arguments59['onclick'] = NULL;
$arguments59['size'] = NULL;
$arguments59['disabled'] = NULL;
$arguments59['options'] = NULL;
$arguments59['optionsAfterContent'] = false;
$arguments59['optionValueField'] = NULL;
$arguments59['optionLabelField'] = NULL;
$arguments59['sortByOptionLabel'] = false;
$arguments59['selectAllByDefault'] = false;
$arguments59['errorClass'] = 'f3-form-error';
$arguments59['prependOptionLabel'] = NULL;
$arguments59['prependOptionValue'] = NULL;
$arguments59['multiple'] = false;
$arguments59['optionLabelPrefix'] = NULL;
$arguments59['property'] = 'timeFrame';
$array61 = array (
);$arguments59['options'] = $renderingContext->getVariableProvider()->getByPath('settings.selectableTimeFrames', $array61);
$arguments59['optionLabelPrefix'] = 'LLL:EXT:belog/Resources/Private/Language/locallang.xlf:';
// Rendering Array
$array62 = array();
$array62['onchange'] = 'submit()';
$arguments59['additionalAttributes'] = $array62;
$arguments59['class'] = 'form-control input-sm';
$arguments59['id'] = 'belog-time';

$output13 .= TYPO3\CMS\Belog\ViewHelpers\Form\TranslateLabelSelectViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);

$output13 .= '
	</div>

	<div class="form-group">
		<label for="belog-action">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments63 = array();
$arguments63['key'] = NULL;
$arguments63['id'] = NULL;
$arguments63['default'] = NULL;
$arguments63['htmlEscape'] = NULL;
$arguments63['arguments'] = NULL;
$arguments63['extensionName'] = NULL;
$arguments63['key'] = 'action';

$output13 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext)]);

$output13 .= '</label>
		';
// Rendering ViewHelper TYPO3\CMS\Belog\ViewHelpers\Form\TranslateLabelSelectViewHelper
$renderChildrenClosure66 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments65 = array();
$arguments65['additionalAttributes'] = NULL;
$arguments65['data'] = NULL;
$arguments65['name'] = NULL;
$arguments65['value'] = NULL;
$arguments65['property'] = NULL;
$arguments65['class'] = NULL;
$arguments65['dir'] = NULL;
$arguments65['id'] = NULL;
$arguments65['lang'] = NULL;
$arguments65['style'] = NULL;
$arguments65['title'] = NULL;
$arguments65['accesskey'] = NULL;
$arguments65['tabindex'] = NULL;
$arguments65['onclick'] = NULL;
$arguments65['size'] = NULL;
$arguments65['disabled'] = NULL;
$arguments65['options'] = NULL;
$arguments65['optionsAfterContent'] = false;
$arguments65['optionValueField'] = NULL;
$arguments65['optionLabelField'] = NULL;
$arguments65['sortByOptionLabel'] = false;
$arguments65['selectAllByDefault'] = false;
$arguments65['errorClass'] = 'f3-form-error';
$arguments65['prependOptionLabel'] = NULL;
$arguments65['prependOptionValue'] = NULL;
$arguments65['multiple'] = false;
$arguments65['optionLabelPrefix'] = NULL;
$arguments65['property'] = 'action';
$array67 = array (
);$arguments65['options'] = $renderingContext->getVariableProvider()->getByPath('settings.selectableActions', $array67);
$arguments65['optionLabelPrefix'] = 'LLL:EXT:belog/Resources/Private/Language/locallang.xlf:';
// Rendering Array
$array68 = array();
$array68['onchange'] = 'submit()';
$arguments65['additionalAttributes'] = $array68;
$arguments65['class'] = 'form-control input-sm';
$arguments65['id'] = 'belog-action';

$output13 .= TYPO3\CMS\Belog\ViewHelpers\Form\TranslateLabelSelectViewHelper::renderStatic($arguments65, $renderChildrenClosure66, $renderingContext);

$output13 .= '
	</div>

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
		<div class="form-group">
			<label for="belog-group">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments75 = array();
$arguments75['key'] = NULL;
$arguments75['id'] = NULL;
$arguments75['default'] = NULL;
$arguments75['htmlEscape'] = NULL;
$arguments75['arguments'] = NULL;
$arguments75['extensionName'] = NULL;
$arguments75['key'] = 'groupByPage';

$output74 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext)]);

$output74 .= '</label>
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper
$renderChildrenClosure78 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments77 = array();
$arguments77['additionalAttributes'] = NULL;
$arguments77['data'] = NULL;
$arguments77['name'] = NULL;
$arguments77['value'] = NULL;
$arguments77['property'] = NULL;
$arguments77['disabled'] = NULL;
$arguments77['errorClass'] = 'f3-form-error';
$arguments77['class'] = NULL;
$arguments77['dir'] = NULL;
$arguments77['id'] = NULL;
$arguments77['lang'] = NULL;
$arguments77['style'] = NULL;
$arguments77['title'] = NULL;
$arguments77['accesskey'] = NULL;
$arguments77['tabindex'] = NULL;
$arguments77['onclick'] = NULL;
$arguments77['checked'] = NULL;
$arguments77['multiple'] = false;
$arguments77['property'] = 'groupByPage';
$arguments77['value'] = 1;
// Rendering Array
$array79 = array();
$array79['onchange'] = 'submit()';
$arguments77['additionalAttributes'] = $array79;
$arguments77['id'] = 'belog-group';

$output74 .= TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper::renderStatic($arguments77, $renderChildrenClosure78, $renderingContext);

$output74 .= '
		</div>
	';
return $output74;
};
$arguments69 = array();
$arguments69['then'] = NULL;
$arguments69['else'] = NULL;
$arguments69['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array71 = array();
$array72 = array (
);$array71['0'] = $renderingContext->getVariableProvider()->getByPath('constraint.depth', $array72);
$array71['1'] = ' > 0';

$expression73 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) > 0);};
$arguments69['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression73(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array71)
					),
					$renderingContext
				);
$arguments69['__thenClosure'] = $renderChildrenClosure70;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments69, $renderChildrenClosure70, $renderingContext);

$output13 .= '

	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CommentViewHelper
$renderChildrenClosure81 = function() use ($renderingContext, $self) {
return '
		Date time fields for manual date selection
	';
};
$arguments80 = array();

$output13 .= NULL;

$output13 .= '


	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure83 = function() use ($renderingContext, $self) {
$output87 = '';

$output87 .= '
		<div class="form-group">
			<label for="manualDateStart">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure89 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments88 = array();
$arguments88['key'] = NULL;
$arguments88['id'] = NULL;
$arguments88['default'] = NULL;
$arguments88['htmlEscape'] = NULL;
$arguments88['arguments'] = NULL;
$arguments88['extensionName'] = NULL;
$arguments88['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_common.xlf:from';

$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments88, $renderChildrenClosure89, $renderingContext)]);

$output87 .= '</label>
			<div class="input-group input-group-sm">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments90 = array();
$arguments90['additionalAttributes'] = NULL;
$arguments90['data'] = NULL;
$arguments90['name'] = NULL;
$arguments90['value'] = NULL;
$arguments90['property'] = NULL;
$arguments90['autofocus'] = NULL;
$arguments90['disabled'] = NULL;
$arguments90['maxlength'] = NULL;
$arguments90['readonly'] = NULL;
$arguments90['size'] = NULL;
$arguments90['placeholder'] = NULL;
$arguments90['pattern'] = NULL;
$arguments90['errorClass'] = 'f3-form-error';
$arguments90['class'] = NULL;
$arguments90['dir'] = NULL;
$arguments90['id'] = NULL;
$arguments90['lang'] = NULL;
$arguments90['style'] = NULL;
$arguments90['title'] = NULL;
$arguments90['accesskey'] = NULL;
$arguments90['tabindex'] = NULL;
$arguments90['onclick'] = NULL;
$arguments90['required'] = false;
$arguments90['type'] = 'text';
$arguments90['name'] = 'manualDateStart';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments92 = array();
$arguments92['then'] = NULL;
$arguments92['else'] = NULL;
$arguments92['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array94 = array();
$array95 = array (
);$array94['0'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStart', $array95);

$expression96 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments92['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression96(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array94)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure98 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments97 = array();
$arguments97['date'] = NULL;
$arguments97['format'] = '';
$arguments97['base'] = NULL;
$output99 = '';
$array100 = array (
);
$output99 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array100);

$output99 .= ' ';
$array101 = array (
);
$output99 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array101);
$arguments97['format'] = $output99;
$array102 = array (
);$arguments97['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStart', $array102);
$renderChildrenClosure98 = ($arguments97['date'] !== null) ? function() use ($arguments97) { return $arguments97['date']; } : $renderChildrenClosure98;$arguments92['then'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments97, $renderChildrenClosure98, $renderingContext);
$arguments90['value'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);
$arguments90['id'] = 'manualDateStart';
$arguments90['class'] = 'form-control input-sm t3js-datetimepicker t3js-clearable';
// Rendering Array
$array103 = array();
$array103['date-type'] = 'datetime';
$arguments90['data'] = $array103;

$output87 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output87 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure105 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments104 = array();
$arguments104['additionalAttributes'] = NULL;
$arguments104['data'] = NULL;
$arguments104['name'] = NULL;
$arguments104['value'] = NULL;
$arguments104['property'] = NULL;
$arguments104['class'] = NULL;
$arguments104['dir'] = NULL;
$arguments104['id'] = NULL;
$arguments104['lang'] = NULL;
$arguments104['style'] = NULL;
$arguments104['title'] = NULL;
$arguments104['accesskey'] = NULL;
$arguments104['tabindex'] = NULL;
$arguments104['onclick'] = NULL;
$arguments104['property'] = 'manualDateStart';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure107 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments106 = array();
$arguments106['then'] = NULL;
$arguments106['else'] = NULL;
$arguments106['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array108 = array();
$array109 = array (
);$array108['0'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStart', $array109);

$expression110 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments106['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression110(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array108)
					),
					$renderingContext
				);
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure112 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments111 = array();
$arguments111['date'] = NULL;
$arguments111['format'] = '';
$arguments111['base'] = NULL;
$arguments111['format'] = 'c';
$array113 = array (
);$arguments111['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStart', $array113);
$renderChildrenClosure112 = ($arguments111['date'] !== null) ? function() use ($arguments111) { return $arguments111['date']; } : $renderChildrenClosure112;$arguments106['then'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments111, $renderChildrenClosure112, $renderingContext);
$arguments104['value'] = TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments106, $renderChildrenClosure107, $renderingContext);

$output87 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments104, $renderChildrenClosure105, $renderingContext);

$output87 .= '
				<span class="input-group-btn">
					<label class="btn btn-default" for="manualDateStart">
						<span class="fa fa-calendar"></span>
					</label>
				</span>
			</div>
		</div>

		<div class="form-group">
			<label for="manualDateStop">';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure115 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments114 = array();
$arguments114['key'] = NULL;
$arguments114['id'] = NULL;
$arguments114['default'] = NULL;
$arguments114['htmlEscape'] = NULL;
$arguments114['arguments'] = NULL;
$arguments114['extensionName'] = NULL;
$arguments114['key'] = 'LLL:EXT:lang/Resources/Private/Language/locallang_common.xlf:to';

$output87 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments114, $renderChildrenClosure115, $renderingContext)]);

$output87 .= '</label>
			<div class="input-group input-group-sm">
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper
$renderChildrenClosure117 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments116 = array();
$arguments116['additionalAttributes'] = NULL;
$arguments116['data'] = NULL;
$arguments116['name'] = NULL;
$arguments116['value'] = NULL;
$arguments116['property'] = NULL;
$arguments116['autofocus'] = NULL;
$arguments116['disabled'] = NULL;
$arguments116['maxlength'] = NULL;
$arguments116['readonly'] = NULL;
$arguments116['size'] = NULL;
$arguments116['placeholder'] = NULL;
$arguments116['pattern'] = NULL;
$arguments116['errorClass'] = 'f3-form-error';
$arguments116['class'] = NULL;
$arguments116['dir'] = NULL;
$arguments116['id'] = NULL;
$arguments116['lang'] = NULL;
$arguments116['style'] = NULL;
$arguments116['title'] = NULL;
$arguments116['accesskey'] = NULL;
$arguments116['tabindex'] = NULL;
$arguments116['onclick'] = NULL;
$arguments116['required'] = false;
$arguments116['type'] = 'text';
$arguments116['name'] = 'manualDateStop';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments118 = array();
$arguments118['date'] = NULL;
$arguments118['format'] = '';
$arguments118['base'] = NULL;
$output120 = '';
$array121 = array (
);
$output120 .= $renderingContext->getVariableProvider()->getByPath('settings.timeFormat', $array121);

$output120 .= ' ';
$array122 = array (
);
$output120 .= $renderingContext->getVariableProvider()->getByPath('settings.dateFormat', $array122);
$arguments118['format'] = $output120;
$array123 = array (
);$arguments118['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStop', $array123);
$renderChildrenClosure119 = ($arguments118['date'] !== null) ? function() use ($arguments118) { return $arguments118['date']; } : $renderChildrenClosure119;$arguments116['value'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);
$arguments116['id'] = 'manualDateStop';
$arguments116['class'] = 'form-control input-sm t3js-datetimepicker t3js-clearable';
// Rendering Array
$array124 = array();
$array124['date-type'] = 'datetime';
$arguments116['data'] = $array124;

$output87 .= TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper::renderStatic($arguments116, $renderChildrenClosure117, $renderingContext);

$output87 .= '
				';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper
$renderChildrenClosure126 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments125 = array();
$arguments125['additionalAttributes'] = NULL;
$arguments125['data'] = NULL;
$arguments125['name'] = NULL;
$arguments125['value'] = NULL;
$arguments125['property'] = NULL;
$arguments125['class'] = NULL;
$arguments125['dir'] = NULL;
$arguments125['id'] = NULL;
$arguments125['lang'] = NULL;
$arguments125['style'] = NULL;
$arguments125['title'] = NULL;
$arguments125['accesskey'] = NULL;
$arguments125['tabindex'] = NULL;
$arguments125['onclick'] = NULL;
$arguments125['property'] = 'manualDateStop';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper
$renderChildrenClosure128 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments127 = array();
$arguments127['date'] = NULL;
$arguments127['format'] = '';
$arguments127['base'] = NULL;
$arguments127['format'] = 'c';
$array129 = array (
);$arguments127['date'] = $renderingContext->getVariableProvider()->getByPath('constraint.manualDateStop', $array129);
$renderChildrenClosure128 = ($arguments127['date'] !== null) ? function() use ($arguments127) { return $arguments127['date']; } : $renderChildrenClosure128;$arguments125['value'] = TYPO3\CMS\Fluid\ViewHelpers\Format\DateViewHelper::renderStatic($arguments127, $renderChildrenClosure128, $renderingContext);

$output87 .= TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper::renderStatic($arguments125, $renderChildrenClosure126, $renderingContext);

$output87 .= '
				<span class="input-group-btn">
					<label class="btn btn-default" for="manualDateStop">
						<span class="fa fa-calendar"></span>
					</label>
				</span>
			</div>
		</div>

		<div class="form-group">
			';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper
$renderChildrenClosure131 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments130 = array();
$arguments130['additionalAttributes'] = NULL;
$arguments130['data'] = NULL;
$arguments130['name'] = NULL;
$arguments130['value'] = NULL;
$arguments130['property'] = NULL;
$arguments130['disabled'] = NULL;
$arguments130['class'] = NULL;
$arguments130['dir'] = NULL;
$arguments130['id'] = NULL;
$arguments130['lang'] = NULL;
$arguments130['style'] = NULL;
$arguments130['title'] = NULL;
$arguments130['accesskey'] = NULL;
$arguments130['tabindex'] = NULL;
$arguments130['onclick'] = NULL;
$arguments130['id'] = 'submit-constraint';
// Rendering ViewHelper TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments132 = array();
$arguments132['key'] = NULL;
$arguments132['id'] = NULL;
$arguments132['default'] = NULL;
$arguments132['htmlEscape'] = NULL;
$arguments132['arguments'] = NULL;
$arguments132['extensionName'] = NULL;
$arguments132['key'] = 'set';
$arguments130['value'] = TYPO3\CMS\Fluid\ViewHelpers\TranslateViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);
$arguments130['class'] = 'btn btn-default btn-sm';

$output87 .= TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper::renderStatic($arguments130, $renderChildrenClosure131, $renderingContext);

$output87 .= '
		</div>
	';
return $output87;
};
$arguments82 = array();
$arguments82['then'] = NULL;
$arguments82['else'] = NULL;
$arguments82['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array84 = array();
$array85 = array (
);$array84['0'] = $renderingContext->getVariableProvider()->getByPath('constraint.timeFrame', $array85);
$array84['1'] = ' == 30';

$expression86 = function($context) {return (TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]) == 30);};
$arguments82['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression86(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array84)
					),
					$renderingContext
				);
$arguments82['__thenClosure'] = $renderChildrenClosure83;

$output13 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments82, $renderChildrenClosure83, $renderingContext);

$output13 .= '
';
return $output13;
};
$arguments10 = array();
$arguments10['additionalAttributes'] = NULL;
$arguments10['data'] = NULL;
$arguments10['action'] = NULL;
$arguments10['arguments'] = array (
);
$arguments10['controller'] = NULL;
$arguments10['extensionName'] = NULL;
$arguments10['pluginName'] = NULL;
$arguments10['pageUid'] = NULL;
$arguments10['object'] = NULL;
$arguments10['pageType'] = 0;
$arguments10['noCache'] = false;
$arguments10['noCacheHash'] = false;
$arguments10['section'] = '';
$arguments10['format'] = '';
$arguments10['additionalParams'] = array (
);
$arguments10['absolute'] = false;
$arguments10['addQueryString'] = false;
$arguments10['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments10['addQueryStringMethod'] = 'GET';
$arguments10['fieldNamePrefix'] = NULL;
$arguments10['actionUri'] = NULL;
$arguments10['objectName'] = NULL;
$arguments10['hiddenFieldClassName'] = NULL;
$arguments10['enctype'] = NULL;
$arguments10['method'] = NULL;
$arguments10['name'] = NULL;
$arguments10['onreset'] = NULL;
$arguments10['onsubmit'] = NULL;
$arguments10['target'] = NULL;
$arguments10['novalidate'] = NULL;
$arguments10['class'] = NULL;
$arguments10['dir'] = NULL;
$arguments10['id'] = NULL;
$arguments10['lang'] = NULL;
$arguments10['style'] = NULL;
$arguments10['title'] = NULL;
$arguments10['accesskey'] = NULL;
$arguments10['tabindex'] = NULL;
$arguments10['onclick'] = NULL;
$array12 = array (
);$arguments10['object'] = $renderingContext->getVariableProvider()->getByPath('constraint', $array12);
$arguments10['action'] = 'index';
$arguments10['name'] = 'constraint';
$arguments10['class'] = 'form-inline form-inline-spaced';

$output0 .= TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper::renderStatic($arguments10, $renderChildrenClosure11, $renderingContext);

$output0 .= '
';

return $output0;
}


}
#