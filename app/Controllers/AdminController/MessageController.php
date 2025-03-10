<?php

namespace App\Controllers\AdminController;

use App\Controllers\BaseController;
use App\Models\MessageModel;


class MessageController extends BaseController
{
    public function index()
    {
        $msgModel = new MessageModel();
        $messages = $msgModel->findAll();
        return view('admin/message', ['msg' => $messages]);
    }

    public function delete($id)
    {
        $msgModel = new MessageModel();

        // Check if the message exists
        $message = $msgModel->find($id);
        if ($message) {
            $msgModel->delete($id); // Delete the message
            session()->setFlashdata('msg', ['msg' => 'Message deleted successfully!', 'type' => 'success']);
        } else {
            session()->setFlashdata('msg', ['msg' => 'Message not found!', 'type' => 'danger']);
        }

        return redirect()->to(base_url('admin/message'));
    }
}