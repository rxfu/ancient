<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model {

	public function getCallnoAttribute($value) {
		return empty($value) ? '無' : $value;
	}

	public function getPropnoAttribute($value) {
		return empty($value) ? '無' : $value;
	}

	public function getTitleAttribute($value) {
		return empty($value) ? '無' : $value;
	}

	public function getLevelAttribute($value) {
		return empty($value) ? '無' : $value;
	}

	public function getAuthorAttribute($value) {
		return empty($value) ? '無' : $value;
	}

	public function getVersionAttribute($value) {
		return empty($value) ? '無' : $value;
	}

	public function getTypeAttribute($value) {
		return empty($value) ? '無' : $value;
	}

	public function getCaseAttribute($value) {
		return empty($value) ? '無' : $value;
	}

	public function getVolumeAttribute($value) {
		return empty($value) ? '無' : $value;
	}

	public function getSavevolAttribute($value) {
		return empty($value) ? '無' : $value;
	}

	public function getSeriesAttribute($value) {
		return empty($value) ? '無' : $value;
	}

	public function getClassificationAttribute($value) {
		return empty($value) ? '無' : $value;
	}

	public function getNoteAttribute($value) {
		return empty($value) ? '無' : $value;
	}
}
