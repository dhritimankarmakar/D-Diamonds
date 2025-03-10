<?php

namespace App\Controllers\AdminController;

use App\Controllers\BaseController;

use App\Models\ProductModel;

class ProductController extends BaseController
{
    public function index()
    {
        $productModel = new ProductModel();
        $prodData = $productModel->findAll();


        // echo "<pre>";
        // print_r($prodData);
        // exit;

        return view('admin/product/index', ['prod' => $prodData]);
    }

    public function create()
    {
        helper('form');
        $session = session();
        if ($this->request->getMethod() === 'GET') {
            // $productModel = new ProductModel();
            // $prodData = $productModel->findAll();


            return view('admin/product/create');
        } else {





            $image = \Config\Services::image();

            if (
                $this->validate(
                    [
                        'p_image_1' => 'uploaded[p_image_1]|is_image[p_image_1]|mime_in[p_image_1,image/jpg,image/jpeg,image/png,image/webp]|max_size[p_image_1, 2048]',
                        'p_image_2' => 'uploaded[p_image_2]|is_image[p_image_2]|mime_in[p_image_2,image/jpg,image/jpeg,image/png,image/webp]|max_size[p_image_2, 2048]',
                        'p_categories' => 'required',

                        'p_name' => 'required|max_length[124]',
                        
                        'old_price' => 'required|max_length[11]',
                        'new_price' => 'required|max_length[11]',
                        'p_tags' => 'required|max_length[124]',
                        'p_rating' => 'required|less_than_equal_to[5]|greater_than_equal_to[1]',

                    ],
                    [
                        'p_image_1' => [
                            // 'required'=>'Please upload a image',
                            'uploaded' => 'Please upload a Product image',
                            'is_image' => 'Please upload a valid Product image',
                            'mime_in' => 'Please upload a valid image type of Product Image',
                            'max_size' => 'Maximum Size exceeded, Please upload with in 2MB of Product Image'
                        ],
                        'p_image_2' => [
                            // 'required'=>'Please upload a image',
                            'uploaded' => 'Please upload a Product image',
                            'is_image' => 'Please upload a valid Product image',
                            'mime_in' => 'Please upload a valid image type of Product Image',
                            'max_size' => 'Maximum Size exceeded, Please upload with in 2MB of Product Image'
                        ],

                        'p_categories' => [
                            'required' => 'Please Select Category Name',
                        ],

                        'p_name' => [
                            'required' => 'Please fill Product Name',
                            'max_length' => 'Product Name is too large'
                        ],
                        'old_price' => [
                            'required' => 'Please fill Products Old Price',
                            'max_length' => 'Products Old Price is too large'
                        ],
                        'new_price' => [
                            'required' => 'Please fill Products New Price',
                            'max_length' => 'Products New Price is too large'
                        ],

                        'p_rating' => [
                            'required' => 'Please fill rating',
                            'less_than_equal_to' => 'Rating must be 5 or less.',
                            'greater_than_equal_to' => 'Rating must be at least 1.'
                        ],
                        'p_tags' => [
                            'required' => 'Please fill tags',

                        ],



                    ]
                )
            ) {
                $productModel = new ProductModel();

                $prodFile1 = $this->request->getFile("p_image_1");

                
                
                if (trim($prodFile1) !== '') {
                    
                    $thumbnail1 = $prodFile1->getName();
                    
                    $temp1 = explode(".", $thumbnail1);
                    
                    $prodFileName1 = round(microtime(true)) . '.' . end($temp1);
                    $prodFileName1 = "Product_" . $prodFileName1;
                }
                
                
                echo '<pre>';
                print_r($prodFileName1);
                
                $thumbnail1 = null;
                $temp1 = null;
                $image->withFile($prodFile1)->save('public/assets/img/products/' . $prodFileName1, 70);
                $prodFile2 = $this->request->getFile("p_image_2");

                

                
                if (trim($prodFile2) !== '') {

                    $thumbnail2 = $prodFile2->getName();
                    
                    $temp2 = explode(".", $thumbnail2);

                    $prodFileName2 = round(microtime(true)) . '-1.' . end($temp2);
                    $prodFileName2 = "Product_" . $prodFileName2;
                }
                
                // echo '<pre>';
                // print_r($prodFileName2);
                // exit;

                $thumbnail2 = null;
                $temp2 = null;
                $image->withFile($prodFile2)->save('public/assets/img/products/' . $prodFileName2, 70);
                

                $p_tags = $this->request->getPost('p_tags');
                if ($p_tags === 'None') {
                    $p_tags = null; // Set to NULL if "None" is selected
                }







                $result = $productModel->save([
                    'p_image_1' => $prodFileName1,
                    'p_image_2' => $prodFileName2,
                    'p_name' => $this->request->getPost('p_name'),
                    'old_price' => $this->request->getPost('old_price'),
                    'new_price' => $this->request->getPost('new_price'),
                    'p_categories' => $this->request->getPost('p_categories'),
                    'p_tags' => $p_tags,
                    'p_rating' => $this->request->getPost('p_rating'),
                ]);

                if ($result) {
                    $session->setFlashdata('msg', ["msg" => 'You have successfully added a Product', "type" => "success"]);
                    return redirect()->to(site_url("admin/product"));
                } else {
                    $session->setFlashdata('invalid_creds', ["errors" => ['value_err' => $result['msg']], "type" => "warning"]);
                    return redirect()->to(site_url("admin/product/create"));
                }
            } else {
                $session->setFlashdata('invalid_creds', ["errors" => $this->validator->getErrors(), "type" => "danger"]);
                return redirect()->back()->withInput();
            }
        }
    }

    public function edit($id)
    {
        helper('form');
        $session = session();
        if ($this->request->getMethod() === 'GET') {
            $prodModel = new ProductModel();



            $prod = $prodModel->where('p_id', $id)->first();


            return view('admin/product/edit', ['prod' => $prod]);
        } else {
            $image = \Config\Services::image();
            $session = session();

            // echo '<pre>';
            //  print_r($_FILES);exit;

            if (
                $this->validate(
                    [
                        'p_image_1' => 'is_image[p_image_1]|mime_in[p_image_1,image/jpg,image/jpeg,image/png,image/webp]|max_size[p_image_1, 2048]',
                        'p_image_2' => 'is_image[p_image_2]|mime_in[p_image_2,image/jpg,image/jpeg,image/png,image/webp]|max_size[p_image_2, 2048]',
                        // 'p_categories' => 'required',

                        'p_name' => 'max_length[124]',
                        'old_price' => 'required|max_length[11]',
                        'new_price' => 'required|max_length[11]',
                        'p_tags' => 'max_length[124]',
                        'p_rating' => 'less_than_equal_to[5]|greater_than_equal_to[1]',

                    ],
                    [
                        'p_image_1' => [
                           
                            // 'uploaded' => 'Please upload a Product image',
                            'is_image' => 'Please upload a valid Product image',
                            'mime_in' => 'Please upload a valid image type of Product Image',
                            'max_size' => 'Maximum Size exceeded, Please upload with in 2MB of Product Image'
                        ],
                        'p_image_2' => [
                           
                            // 'uploaded' => 'Please upload a Product image',
                            'is_image' => 'Please upload a valid Product image',
                            'mime_in' => 'Please upload a valid image type of Product Image',
                            'max_size' => 'Maximum Size exceeded, Please upload with in 2MB of Product Image'
                        ],

                        'p_categories' => [
                            // 'required' => 'Please Select Category Name',
                        ],

                        'p_name' => [
                            // 'required' => 'Please fill Product Name',
                            'max_length' => 'Product Name is too large'
                        ],
                        'old_price' => [
                            'required' => 'Please fill Products Old Price',
                            'max_length' => 'Products Old Price is too large'
                        ],
                        'new_price' => [
                            'required' => 'Please fill Products New Price',
                            'max_length' => 'Products New Price is too large'
                        ],

                        'p_rating' => [
                          //  'required' => 'Please fill rating',
                            'less_than_equal_to' => 'Rating must be 5 or less.',
                            'greater_than_equal_to' => 'Rating must be at least 1.'
                        ],
                        'p_tags' => [
                            // 'required' => 'Please fill tags',
                        ]
                    ]
                )
            ) {


                // $newfilename1 = null;
                $newfilename1 = null;
                $newfilename2 = null;

                $prodModel = new ProductModel();
                $oldresult1 = $prodModel->select('p_image_1')->where('p_id', $id)->first();
                $oldresult2 = $prodModel->select('p_image_2')->where('p_id', $id)->first();


                $file1 = $this->request->getFile("p_image_1");
                $file2 = $this->request->getFile("p_image_2");
                if (trim($file1) !== '') {
                    // $file = $this->request->getFile("p_image");
                    $thumbnail1 = $file1->getName();
                    // Renaming file before upload
                    $temp = explode(".", $thumbnail1);

                    $newfilename1 = round(microtime(true)) . '.' . end($temp);
                    $newfilename1 = "Product_" . $newfilename1;


                    $image->withFile($file1)->save('public/assets/img/products/' . $newfilename1, 70);
                }
                if (trim($file2) !== '') {
                    // $file = $this->request->getFile("p_image");
                    $thumbnail2 = $file2->getName();
                    // Renaming file before upload
                    $temp = explode(".", $thumbnail2);
                    $newfilename2 = round(microtime(true)) . '-1.' . end($temp);
                    $newfilename2 = "Product_" . $newfilename2;

                    $image->withFile($file2)->save('public/assets/img/products/' . $newfilename2, 70);
                }


                $p_tags = $this->request->getPost('p_tags');
                if ($p_tags === 'None') {
                    $p_tags = null; // Set to NULL if "None" is selected
                }


                $result = [
                    'p_name' => $this->request->getPost('p_name'),
                    'p_categories' => $this->request->getPost('p_categories'),
                    'old_price' => $this->request->getPost('old_price'),
                    'new_price' => $this->request->getPost('new_price'),
                    'p_rating' => $this->request->getPost('p_rating'),
                    'p_tags' => $p_tags,

                ];



                if ($newfilename1 !== null) {
                    $result['p_image_1'] = $newfilename1;
                    $this->remFile('public/assets/img/products/' . $oldresult1['p_image_1']);
                }
                if ($newfilename2 !== null) {
                    $result['p_image_2'] = $newfilename2;
                    $this->remFile('public/assets/img/products/' . $oldresult2['p_image_2']);
                }


                $result = $prodModel->update($id, $result);

                if ($result) {
                    $session->setFlashdata('msg', ["msg" => 'You have successfully Update a Product', "type" => "success"]);
                    return redirect()->to(base_url("/admin/product/"));
                } else {
                    $session->setFlashdata('invalid_creds', ["errors" => ['value_err' => 'Unknown Error'], "type" => "warning"]);
                    return redirect()->to(base_url("/admin/product/"));
                }
            } else {
                $session->setFlashdata('invalid_creds', ["errors" => $this->validator->getErrors(), "type" => "danger"]);
                return redirect()->to(base_url("/admin/product/edit/" . $id));
            }
        }
    }



    public function delete($id)
    {
        $session = session();
        $prodModel = new ProductModel();
        $product = $prodModel->select('p_id, p_image_1, p_image_2')->where('p_id', $id)->first();
        if (!empty($product)) {
            $filePath1 = 'public/assets/img/products/' . $product['p_image_1'];
            $filePath2 = 'public/assets/img/products/' . $product['p_image_2'];
            $this->remFile($filePath1);
            $this->remFile($filePath2);
            if ($prodModel->delete($id)) {
                $session->setFlashdata('msg', ['msg' => 'Successfully Deleted a Product', 'type' => 'success']);
                return redirect()->to(site_url("admin/product"));
            } else {
                $session->setFlashdata('invalid_creds', ['errors' => "Something went wrong", 'type' => 'danger']);
                return redirect()->to(site_url("admin/product/" . $id));
            }
        } else {
            $session->setFlashdata('invalid_creds', ['errors' => "Category Not Found", 'type' => 'danger']);
            return redirect()->to(site_url("admin/product/" . $id));
        }

    }
}