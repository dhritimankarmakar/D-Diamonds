<?php

namespace App\Controllers\AdminController;

use App\Controllers\BaseController;

use App\Models\TestimonialsModel;

class TestimonialsController extends BaseController
{
    public function index()
    {
        $testModel = new TestimonialsModel();
        $prodData = $testModel->findAll();


        // echo "<pre>";
        // print_r($prodData);
        // exit;

        return view('admin/testimonials/index', ['prod' => $prodData]);
    }

    public function create()
    {
        helper('form');
        $session = session();
        if ($this->request->getMethod() === 'GET') {
            // $productModel = new ProductModel();
            // $prodData = $productModel->findAll();


            return view('admin/testimonials/create');
        } else {


            // echo '<pre>';
            // print_r($_POST);
            // exit;


            $image = \Config\Services::image();

            if (
                $this->validate(
                    [
                        'test_name' => 'required|max_length[255]',
                        'test_image' => 'uploaded[test_image]|is_image[test_image]|mime_in[test_image,image/jpg,image/jpeg,image/png,image/webp]|max_size[test_image, 2048]',
                        'test_review' => 'required|max_length[9999]',
                        'test_profession' => 'required|max_length[255]',
                        'test_order_by' => 'max_length[11]',
                    ],
                    [
                        'test_name' => [
                            'required' => 'Please provide a Name',
                            'max_length' => 'Name is too large'
                        ],
                        'test_image' => [
                            // 'required'=>'Please upload a image',
                            'uploaded' => 'Please upload a Testimonials image',
                            'is_image' => 'Please upload a valid Testimonials image',
                            'mime_in' => 'Please upload a valid image type of Testimonials Image',
                            'max_size' => 'Maximum Size exceeded, Please upload with in 2MB of Testimonials Image'
                        ],
                        'test_review' => [
                            'required' => 'Please provide a Review',
                            'max_length' => 'Review is too large'
                        ],
                        'test_profession' => [
                            'required' => 'Please provide a Name',
                            'max_length' => 'Name is too large'
                        ],

                        'test_order_by' => [
                            'max_length' => 'Testimonials order number is too large'
                        ],
                    ]
                )
            ) {
                $testModel = new TestimonialsModel();

                $prodFile = $this->request->getFile("test_image");
                if (trim($prodFile) !== '') {

                    $thumbnail = $prodFile->getName();

                    $temp = explode(".", $thumbnail);

                    $prodFileName = round(microtime(true)) . '.' . end($temp);
                    $prodFileName = "Testimonials_" . $prodFileName;
                }
                $thumbnail = null;
                $temp = null;
                $image->withFile($prodFile)->save('public/assets/img/testimonials/' . $prodFileName, 70);


                // $p_tags = $this->request->getPost('p_tags');
                // if ($p_tags === 'None') {
                //     $p_tags = null; // Set to NULL if "None" is selected
                // }







                $result = $testModel->save([
                    'test_image' => $prodFileName,
                    'test_name' => $this->request->getPost('test_name'),
                    'test_review' => $this->request->getPost('test_review'),
                    'test_profession' => $this->request->getPost('test_profession'),
                    'test_order_by' => $this->request->getPost('test_order_by'),
                ]);

                if ($result) {
                    $session->setFlashdata('msg', ["msg" => 'You have successfully added a Testimonials', "type" => "success"]);
                    return redirect()->to(site_url("admin/testimonials"));
                } else {
                    $session->setFlashdata('invalid_creds', ["errors" => ['value_err' => $result['msg']], "type" => "warning"]);
                    return redirect()->to(site_url("admin/testimonials/create"));
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
            $prodModel = new TestimonialsModel();



            $prod = $prodModel->where('test_id', $id)->first();


            return view('admin/testimonials/edit', ['prod' => $prod]);
        } else {
            $image = \Config\Services::image();
            $session = session();

            // echo '<pre>';
            //  print_r($_FILES);exit;

            if (
                $this->validate(
                    [
                        'test_name' => 'max_length[124]',
                        'test_image' => 'is_image[test_image]|mime_in[test_image,image/jpg,image/jpeg,image/png,image/webp]|max_size[test_image, 2048]',
                        'test_review' => 'max_length[255]',
                        'test_order_by' => 'max_length[11]',
                    ],
                    [
                        'test_name' => [
                            'max_length' => 'Testimonials order number is too large'
                        ],
                        'test_image' => [
                            // 'required'=>'Please upload a image',
                            'is_image' => 'Please upload a valid Testimonials image',
                            'mime_in' => 'Please upload a valid image type of Testimonials Image',
                            'max_size' => 'Maximum Size exceeded, Please upload with in 2MB of Testimonials Image'
                        ],
                        'test_review' => [
                            'max_length' => 'Testimonials order number is too large'
                        ],
                        'test_profession' => [
                            'required' => 'Please provide a Name',
                            'max_length' => 'Name is too large'
                        ],

                        'test_order_by' => [
                            'max_length' => 'Testimonials order number is too large'
                        ],
                    ]
                )
            ) {


                $newfilename = null;
                // $newfilename1 = null;

                $prodModel = new TestimonialsModel();
                $oldresult = $prodModel->select('test_image')->where('test_id', $id)->first();


                $file = $this->request->getFile("test_image");
                if (trim($file) !== '') {
                    // $file = $this->request->getFile("test_image");
                    $thumbnail = $file->getName();
                    // Renaming file before upload
                    $temp = explode(".", $thumbnail);

                    $newfilename = round(microtime(true)) . '.' . end($temp);
                    $newfilename = "Testimonials_" . $newfilename;


                    $image->withFile($file)->save('public/assets/img/testimonials/' . $newfilename, 70);
                }

                // $side_image1 = $this->request->getFile("trip_mabanner_image");
                // if (trim($side_image1) !== '') {
                //     // $file = $this->request->getFile("trip_mabanner_image");
                //     $thumbnail = $side_image1->getName();
                //     // Renaming file before upload
                //     $temp = explode(".", $thumbnail);

                //     $newfilename1 = round(microtime(true)) . '.' . end($temp);
                //     $newfilename1 = "Tour_Trip_-" . $newfilename1;
                //     $image->withFile($side_image1)->save('uploads/tours/tripmaps/' . $newfilename1, 70);
                // }


                // $p_tags = $this->request->getPost('p_tags');
                // if ($p_tags === 'None') {
                //     $p_tags = null; // Set to NULL if "None" is selected
                // }


                $result = [
                    'test_name' => $this->request->getPost('test_name'),
                    'test_review' => $this->request->getPost('test_review'),
                    'test_profession' => $this->request->getPost('test_profession'),
                    'test_order_by' => $this->request->getPost('test_order_by'),

                ];



                if ($newfilename !== null) {
                    $result['test_image'] = $newfilename;
                    $this->remFile('public/assets/img/testimonials/' . $oldresult['test_image']);
                }


                $result = $prodModel->update($id, $result);

                if ($result) {
                    $session->setFlashdata('msg', ["msg" => 'You have successfully Update a Testimonials', "type" => "success"]);
                    return redirect()->to(base_url("/admin/testimonials/edit/" . $id));
                } else {
                    $session->setFlashdata('invalid_creds', ["errors" => ['value_err' => 'Unknown Error'], "type" => "warning"]);
                    return redirect()->to(base_url("/admin/testimonials/edit/" . $id));
                }
            } else {
                $session->setFlashdata('invalid_creds', ["errors" => $this->validator->getErrors(), "type" => "danger"]);
                return redirect()->to(base_url("/admin/testimonials/edit/" . $id));
            }
        }
    }



    public function delete($id)
    {
        $session = session();
        $prodModel = new TestimonialsModel();
        $testimonials = $prodModel->select('test_id, test_image')->where('test_id', $id)->first();
        if (!empty($testimonials)) {
            $filePath = 'public/assets/img/testimonials/' . $testimonials['test_image'];
            $this->remFile($filePath);
            if ($prodModel->delete($id)) {
                $session->setFlashdata('msg', ['msg' => 'Successfully Deleted a Testimonials', 'type' => 'success']);
                return redirect()->to(site_url("admin/testimonials"));
            } else {
                $session->setFlashdata('invalid_creds', ['errors' => "Something went wrong", 'type' => 'danger']);
                return redirect()->to(site_url("admin/testimonials/" . $id));
            }
        } else {
            $session->setFlashdata('invalid_creds', ['errors' => "Category Not Found", 'type' => 'danger']);
            return redirect()->to(site_url("admin/testimonials/" . $id));
        }

    }
}