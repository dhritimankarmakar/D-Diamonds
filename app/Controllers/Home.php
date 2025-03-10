<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\BannerModel;
use App\Models\TestimonialsModel;
use App\Models\ProductModel;


class Home extends BaseController
{
    public function index(): string
    {
        $bannerModel = new BannerModel();
        $testimonialsModel = new TestimonialsModel();
        $prodModel = new ProductModel();
        $products_bestseller = $prodModel->select('p_id,p_image_1,p_image_2,p_name,p_rating,p_categories,old_price,new_price,p_tags,created_at')->where('p_tags', 'Bestseller')->findAll();
        $products_indemand = $prodModel->select('p_id,p_image_1,p_image_2,p_name,p_rating,p_categories,old_price,new_price,p_tags,created_at')->where('p_tags', 'Indemand')->findAll();
        $products_latest = $prodModel->select('p_id,p_image_1,p_image_2,p_name,p_rating,p_categories,old_price,new_price,p_tags,created_at')->where('p_tags', 'Latest')->findAll();
        $products = $prodModel->select('p_id,p_image_1,p_image_2,p_name,p_rating,p_categories,old_price,new_price,p_tags,created_at')->findAll();
        $banner = $bannerModel->select('banner_id,banner_image,banner_title,banner_order_by')->orderBy('banner_order_by')->findAll();
        $testimonials = $testimonialsModel->select('test_id,test_name,test_image,test_review,test_profession,test_order_by')->orderBy('test_order_by')->findAll();
        return view('web/index', ['banner'=> $banner, 'testimonials' => $testimonials, 'products' => $products,'p_latest' => $products_latest, 'p_indemand' => $products_indemand, 'p_bestseller' => $products_bestseller]);
        
    }
    public function about(): string
    {
        return view('web/about');
    }
    public function contact(): string
    {
        return view('web/contact');
    }
    public function blog(): string
    {
        return view('web/blog');
    }
    public function faq(): string
    {
        return view('web/faq');
    }
    public function customer_service(): string
    {
        return view('web/customer-service');
    }


    public function checkout(): string
    {
        return view('web/checkout');
    }
    public function cart(): string
    {
        return view('web/cart');
    }
    public function shop(): string
    {
        return view('web/shop');
    }
    public function track(): string
    {
        return view('web/track-order');
    }







    public function signup()
    {

        helper('form');
        $session = session();
        if ($this->request->getMethod() === 'GET') {
            return view('web/signup');
        } elseif ($this->request->getMethod() === 'POST') {

            // echo '<pre>';
// print_r($_POST);exit;


            if (
                $this->validate(
                    [
                        'first_name' => 'required|max_length[254]|alpha',
                        'last_name' => 'required|max_length[254]|alpha',
                        'email' => 'required|valid_email|max_length[254]|is_unique[user.email]',
                        'phone_no' => 'required|max_length[254]|alpha_numeric|is_unique[user.phone_no]',
                        'password' => 'required|max_length[254]',
                        'passconf' => 'required|matches[password]|max_length[254]',
                    ],
                    [
                        'email' => [
                            'required' => 'Please provide an email',
                            'valid_email' => 'Please provide a valid email',
                            'max_length' => 'Email is too long',
                            'is_unique' => 'This email is linked to another account.',
                        ],
                        'password' => [
                            'required' => 'Please provide a password',
                            'max_length' => 'Password is too long',
                        ],
                        'passconf' => [
                            'required' => 'Please provide a password',
                            'matches' => 'Password does not match.',
                            'max_length' => 'Password is too long',
                        ],
                        'first_name' => [
                            'required' => 'Please provide a First Name',
                            'max_length' => 'First Name is too long',
                            'alpha' => 'First Name should be alphabet',
                        ],
                        'last_name' => [
                            'required' => 'Please provide a Last Name',
                            'max_length' => 'Last Name is too long',
                            'alpha' => 'First Name should be alphabet',
                        ],
                        'phone_no' => [
                            'required' => 'Please provide a Phone No',
                            'max_length' => 'Phone No. is too long',
                            'alpha_numeric' => 'Phone No. should be numbers',
                            'is_unique' => 'This Phone No. is linked to another account.',
                        ]
                    ]
                )
            ) {


                $userModel = new UserModel();


                $password = md5($this->request->getPost('password'));

                $result = $userModel->save([
                    'first_name' => $this->request->getPost('first_name'),
                    'last_name' => $this->request->getPost('last_name'),

                    'email' => $this->request->getPost('email'),
                    'phone_no' => $this->request->getPost('phone_no'),

                    'password' => $password,
                ]);

                if ($result) {
                    $session->setFlashdata('msg', ["msg" => 'You have successfully signed up.', "type" => "success"]);

                    return redirect()->to(site_url("signup"));
                } else {
                    $session->setFlashdata('invalid_creds', ["errors" => ['value_err' => $result['msg']], "type" => "warning"]);
                    return redirect()->to(site_url("signup"));
                }

                // $first_name = $_POST['first_name'];
                // $last_name = $_POST['last_name'];
                // $email = $_POST['email'];
                // $password = $_POST['password'];
                // $phone_no = $_POST['phone_no'];



            } else {



                $session->setFlashdata('invalid_creds', ["errors" => $this->validator->getErrors(), "type" => "danger"]);

                // $session->setFlashdata('error_msg', ["msg" => $this->validator->getErrors(), "type" => "danger"]);
                return redirect()->to(base_url('/signup'));


            }
        }

    }


    
}
