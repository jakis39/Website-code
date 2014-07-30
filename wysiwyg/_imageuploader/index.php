<?php
    $ROOT = $_SERVER['DOCUMENT_ROOT'];
    require_once($ROOT . "/config.php");
    require_once($ROOT . "/utilities/form_utility.php");

    $fileName = '';
    $size = 0;
    $input_id = Form_Request::GetStringVal('input_id');

    if(($_FILES != NULL)&&(count($_FILES) > 0)){
        $file = $_FILES[$input_id . 'upload_file'];
        if($file != null){
            $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
            
            $tmpName = $file['tmp_name'];
            $result_array = getimagesize($tmpName);
            $mimeType='';
            if ($result_array !== false)
            {
                $mimeType = $result_array['mime']; 
            }

            if(strpos(strtolower($mimeType), 'image')>-1)
            {
                $file["name"] = Utility::CreateGUID() . "." . $ext;
                $fileName = $file["name"];
                $size = $_FILES[$input_id . "upload_file"]["size"];
                $uploaded = Form_Request::UploadFile($file,$ROOT . '/assets/wysiwyg_uploads/');

                if(Form_Request::GetBoolVal($input_id . '_isIE8')){
                    echo '<script type="text/javascript">window.parent.setIEImage("' . $BASEURL . '/assets/wysiwyg_uploads/' . $fileName . '");</script>';
                }
                else
                {
                    echo $BASEURL . "/assets/wysiwyg_uploads/" . $fileName;
                }
            }
            exit;
        }
    }
?>