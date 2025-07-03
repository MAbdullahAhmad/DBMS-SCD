<?php

namespace App\Controllers\Admin;

use App\Models\CompanyMeta;
use App\Responses\AdminResponse;
use function Core\Util\json;
use function Core\Util\route;

class MetaController {

  protected $model;

  public function __construct() {
    $this->model = new CompanyMeta();
  }

  public function index() {
    $all = $this->model->all();

    return AdminResponse::view('admin.meta', [
      'meta' => $all,
      'add_url' => route('admin.meta.store'),
      'edit_url' => route('admin.meta.update'),
      'delete_url' => route('admin.meta.delete'),
    ]);
  }

  public function store() {
    $key = $_POST['key'] ?? '';
    $value = $_POST['value'] ?? '';
  
    if (!$key || !$value) {
      json(['success' => false, 'message' => 'Missing key or value']);
    }
  
    $this->model->rawInsert($key, $value);
  
    json(['success' => true, 'message' => 'Meta added']);
  }

  public function update() {
    $id = $_POST['id'] ?? null;
    $value = $_POST['value'] ?? '';

    if (!$id || $value === '') {
      json(['success' => false, 'message' => 'Missing id or value']);
    }

    $this->model->update($id, ['value' => $value]);

    json(['success' => true, 'message' => 'Meta updated']);
  }

  public function delete() {
    $id = $_POST['id'] ?? null;

    if (!$id) {
      json(['success' => false, 'message' => 'Missing id']);
    }

    $this->model->delete($id);

    json(['success' => true, 'message' => 'Meta deleted']);
  }
}
