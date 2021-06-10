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
    public function createHandler($handle, array $attributes);
    public function restore($handle,$id);
    public function deleteHard($handle,$id);
    public function getonlyTrashed($handle);
    public function getwithTrashed($handle);
    public function deleteSoft($handle,$id);
}