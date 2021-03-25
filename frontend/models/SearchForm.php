<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

class SearchForm extends Model
{
	public $q;

	public function rules()
	{
		return [
			['q', 'string']
		];
	}
}

?>
