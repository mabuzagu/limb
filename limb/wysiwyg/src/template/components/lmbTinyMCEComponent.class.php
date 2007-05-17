<?php
/**
 * Limb Web Application Framework
 *
 * @link http://limb-project.com
 *
 * @copyright  Copyright &copy; 2004-2007 BIT
 * @license    LGPL http://www.gnu.org/copyleft/lesser.html
 * @version    $Id: lmbFCKEditorComponent.class.php 5015 2007-02-08 15:38:22Z pachanga $
 * @package    wysiwyg
 */
lmb_require('limb/wysiwyg/src/template/components/lmbWysiwygComponent.class.php');

class lmbTinyMCEComponent extends lmbWysiwygComponent
{
  protected $_base_path;
  protected $_css_class;
  public static $is_included = false;
  function renderContents()
  {
    $this->renderEditor();
    parent::renderContents();
  }

  function renderEditor()
  {
    $this->_setEditorParameters();
    if(!self::$is_included)
    {
      echo '<script language="javascript" type="text/javascript" src="'.$this->_base_path.'tiny_mce.js"></script>';
      self::$is_included = true;
      
    }
    echo '
    <script language="javascript" type="text/javascript">
    tinyMCE.init({
    '.$this->_renderEditorParameters().'
    });
    </script>
    ';
  }

  function _renderEditorParameters()
  {
    $items = array();

    $items[] = 'editor_selector : "'.$this->_css_class.'"';
     
    if ($config = $this->getIniOption('editor') and count($config))
    {
      foreach ($config as $key => $val)
      $items[] = $key . ': "'. $val . '"'; 
    }

    return implode (",\n", $items);
  }

  function _setEditorParameters()
  {
    if($this->getIniOption('base_path'))
      $this->_base_path  = $this->getIniOption('base_path');
    
    if (!$this->_css_class = $this->getAttribute('class')){
      $this->_css_class = $this->getAttribute('name');
      $this->setAttribute('class', $this->_css_class);
    }
  }
}

?>