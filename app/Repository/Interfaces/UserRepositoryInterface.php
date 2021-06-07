<?php
namespace App\Repository\Interfaces;
interface UserRepositoryInterface {
    public function getAll();
    public function find($id);
    public function create(array $attributes);
    public function update($id, array $attributes);
    public function delete($id);
    public function getwithTrashed();
    public function getonlyTrashed();
}