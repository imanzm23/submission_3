<?php

namespace App\Http\Controllers\Books;

use App\Http\Controllers\Controller;
use App\Models\Books;
use Exception;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $model = new Books();
        $data = $model->select(
            'id',
            'book_name',
            'author',
            'published_at' // Remove the trailing comma
        )->get()->toArray();

        return view('books.index', compact('data')); // Correct the view path
    }

    public function saveBook(Request $request)
    {
        $post = $request->post();
        $body['id'] = $post['id'] ?? null; // Use null coalescing operator to handle undefined index
        $body['book_name'] = $post['book_name'] ?? '';
        $body['author'] = $post['author'] ?? '';

        $sukses = 'Data Sukses Disimpan!';
        $gagal = 'Data Gagal Disimpan!';

        if (!empty($body['id'])) {
            $result = $this->updateBook($body); // Use $this->updateBook instead of self::updateBook
        } else {
            $result = $this->createBook($body); // Use $this->createBook instead of self::createBook
        }

        if ($result) {
            return redirect('books/index')->with('status', $sukses);
        } else {
            return redirect('books/index')->with('status', $gagal);
        }
    }

    public function createBook($body)
{
    try {
        // Tidak perlu membuat instance baru jika hanya akan membuat record baru
        $sukses = 'Data Sukses Disimpan!';
        $gagal = 'Data Gagal Disimpan!';
        
        // Periksa apakah field 'book_name' tidak kosong
        if (!empty($body['book_name'])) {
            // Gunakan metode create langsung pada model
            Books::create($body);
            
            // Return pesan sukses atau boleh juga langsung true
            return $sukses;
        } else {
            // Return pesan gagal atau boleh juga langsung false
            return $gagal;
        }
    } catch (Exception $e) {
        // Log error atau berikan pesan error yang lebih spesifik jika diperlukan
        return 'Terjadi kesalahan saat menyimpan data.';
    }
}


    public function updateBook($body)
    {
        $model = new Books();
        try {
            $sukses = 'Data Sukses Disimpan!';
            $gagal = 'Data Gagal Disimpan!';
            if (!empty($body['book_name'])) {
                $model->where('id', $body['id'])->update($body);
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return false;
        }
    }

    public function deleteBook(Request $request)
    {
        $id = $request->get('id');
        try {
            $model = new Books();
            $model->find($id)->delete();
            return redirect('books/index')->with('status', 'Delete Sukses');
        } catch (Exception $e) {
            return redirect('books/index')->with('status', 'Delete Gagal');
        }
    }
}
