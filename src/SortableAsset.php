<?php
/**
 * @author: Sergey Mashkov (serge@asse.com)
 * Date: 4/24/23 10:59 AM
 * Project: asse-db-template
 */

namespace xpbl4\assets;

class SortableAsset extends AssetBundle
{
	public $sourcePath = '@xpbl4/assets/assets';

	public $js = [
		'js/jquery-sortable-widget.js',
		'js/Sortable.js'
	];

	public $css = [
		'css/sortable-widget.css',
	];
}