<?php

namespace App\Controllers\AdminController;

use App\Controllers\BaseController;

use App\Models\BannerModel;

class BannerController extends BaseController
{
    public function index()
    {
        $bannerModel = new BannerModel();
        $prodData = $bannerModel->findAll();


        // echo "<pre>";
        // print_r($prodData);
        // exit;

        return view('admin/banner/index', ['prod' => $prodData]);
    }

    public function create()
    {
        helper('form');
        $session = session();
        if ($this->request->getMethod() === 'GET') {
            // $productModel = new ProductModel();
            // $prodData = $productModel->findAll();


            return view('admin/banner/create');
        } else {





            $image = \Config\Services::image();

            if (
                $this->validate(
                    [
                        'banner_image' => 'uploaded[banner_image]|is_image[banner_image]|mime_in[banner_image,image/jpg,image/jpeg,image/png,image/webp]|max_size[banner_image, 2048]',
                        'banner_title' => 'required|max_length[124]',
                        'banner_order_by' => 'max_length[11]',
                    ],
                    [
                        'banner_image' => [
                            // 'required'=>'Please upload a image',
                            'uploaded' => 'Please upload a Banner image',
                            'is_image' => 'Please upload a valid Banner image',
                            'mime_in' => 'Please upload a valid image type of Banner Image',
                            'max_size' => 'Maximum Size exceeded, Please upload with in 2MB of Banner Image'
                        ],

                        'banner_title' => [
                            'required' => 'Please upload a image',
                            'max_length' => 'Banner order number is too large'
                        ],

                        'banner_order_by' => [
                            'max_length' => 'Banner order number is too large'
                        ],
                    ]
                )
            ) {
                $bannerModel = new BannerModel();

                $prodFile = $this->request->getFile("banner_image");
                if (trim($prodFile) !== '') {

                    $thumbnail = $prodFile->getName();

                    $temp = explode(".", $thumbnail);

                    $prodFileName = round(microtime(true)) . '.' . end($temp);
                    $prodFileName = "Banner_" . $prodFileName;
                }
                $thumbnail = null;
                $temp = null;
                $image->withFile($prodFile)->save('public/assets/img/banner/' . $prodFileName, 70);


                // $p_tags = $this->request->getPost('p_tags');
                // if ($p_tags === 'None') {
                //     $p_tags = null; // Set to NULL if "None" is selected
                // }







                $result = $bannerModel->save([
                    'banner_image' => $prodFileName,
                    'banner_title' => $this->request->getPost('banner_title'),
                    'banner_order_by' => $this->request->getPost('banner_order_by'),
                ]);

                if ($result) {
                    $session->setFlashdata('msg', ["msg" => 'You have successfully added a Banner', "type" => "success"]);
                    return redirect()->to(site_url("admin/banner"));
                } else {
                    $session->setFlashdata('invalid_creds', ["errors" => ['value_err' => $result['msg']], "type" => "warning"]);
                    return redirect()->to(site_url("admin/banner/create"));
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
            $prodModel = new BannerModel();



            $prod = $prodModel->where('banner_id', $id)->first();


            return view('admin/banner/edit', ['prod' => $prod]);
        } else {
            $image = \Config\Services::image();
            $session = session();

            // echo '<pre>';
            //  print_r($_FILES);exit;

            if (
                $this->validate(
                    [
                        'banner_image' => 'is_image[banner_image]|mime_in[banner_image,image/jpg,image/jpeg,image/png,image/webp]|max_size[banner_image, 2048]',
                        'banner_title' => 'required|max_length[124]',
                        'banner_order_by' => 'max_length[11]',
                    ],
                    [
                        'banner_image' => [
                            'is_image' => 'Please upload a valid Banner image',
                            'mime_in' => 'Please upload a valid image type of Banner Image',
                            'max_size' => 'Maximum Size exceeded, Please upload with in 2MB of Banner Image'
                        ],

                        'banner_title' => [
                            'required' => 'Please upload a image',
                            'max_length' => 'Banner order number is too large'
                        ],

                        'banner_order_by' => [
                            'max_length' => 'Banner order number is too large'
                        ],
                    ]
                )
            ) {


                $newfilename = null;
                // $newfilename1 = null;

                $prodModel = new BannerModel();
                $oldresult = $prodModel->select('banner_image')->where('banner_id', $id)->first();


                $file = $this->request->getFile("banner_image");
                if (trim($file) !== '') {
                    // $file = $this->request->getFile("banner_image");
                    $thumbnail = $file->getName();
                    // Renaming file before upload
                    $temp = explode(".", $thumbnail);

                    $newfilename = round(microtime(true)) . '.' . end($temp);
                    $newfilename = "Banner_" . $newfilename;


                    $image->withFile($file)->save('public/assets/img/banner/' . $newfilename, 70);
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
                    'banner_title' => $this->request->getPost('banner_title'),
                    'banner_order_by' => $this->request->getPost('banner_order_by'),

                ];



                if ($newfilename !== null) {
                    $result['banner_image'] = $newfilename;
                    $this->remFile('public/assets/img/banner/' . $oldresult['banner_image']);
                }


                $result = $prodModel->update($id, $result);

                if ($result) {
                    $session->setFlashdata('msg', ["msg" => 'You have successfully Update a Banner', "type" => "success"]);
                    return redirect()->to(base_url("/admin/banner/edit/" . $id));
                } else {
                    $session->setFlashdata('invalid_creds', ["errors" => ['value_err' => 'Unknown Error'], "type" => "warning"]);
                    return redirect()->to(base_url("/admin/banner/edit/" . $id));
                }
            } else {
                $session->setFlashdata('invalid_creds', ["errors" => $this->validator->getErrors(), "type" => "danger"]);
                return redirect()->to(base_url("/admin/banner/edit/" . $id));
            }
        }
    }



    public function delete($id)
    {
        $session = session();
        $prodModel = new BannerModel();
        $banner = $prodModel->select('banner_id, banner_image')->where('banner_id', $id)->first();
        if (!empty($banner)) {
            $filePath = 'public/assets/img/banner/' . $banner['banner_image'];
            $this->remFile($filePath);
            if ($prodModel->delete($id)) {
                $session->setFlashdata('msg', ['msg' => 'Successfully Deleted a Banner', 'type' => 'success']);
                return redirect()->to(site_url("admin/banner"));
            } else {
                $session->setFlashdata('invalid_creds', ['errors' => "Something went wrong", 'type' => 'danger']);
                return redirect()->to(site_url("admin/banner/" . $id));
            }
        } else {
            $session->setFlashdata('invalid_creds', ['errors' => "Category Not Found", 'type' => 'danger']);
            return redirect()->to(site_url("admin/banner/" . $id));
        }

    }
}