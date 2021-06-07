<?php
namespace App\Repository\Interfaces;

interface TypeMovieRepositoryInterface{
    public function getAll();
    public function find($id);
    public function create(array $attributes);
    public function update($id, array $attributes);
    public function delete($id);
    public function findHandler($handle,$id);
    public function getHandler($handle);
    public function createHandler($name, array $attributes);

}